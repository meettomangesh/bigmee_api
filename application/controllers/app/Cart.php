<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Cart extends REST_Controller {

    const CART_FLAG = 1;
    const BASE_URL = 'https://www.bigmee.com/';

    private $customer_id;
    private $cu_profile;

    function __construct() {
        // Construct the parent class
        parent::__construct();

        // initialize core api dependancy 
        SELF::init();
        $this->load->model('cart_model');
    }

    private function init() {
        $this->customer_id = $this->{$this->input->server('REQUEST_METHOD')}('customer_id');

        if (empty($this->customer_id) || !is_numeric($this->customer_id)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Required valid customer id.'));
        }

        // load common model
        $this->load->model('mystore_model', 'mystore');

        $customerData = $this->mystore->get_row_byid('customer_master', array('id' => $this->customer_id), array('id'));

        if (empty($customerData)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid customer id.'));
        }
        $this->cu_profile = $customerData;
    }

    public function add_put() {
        $payload = json_decode($this->put('payload'), TRUE);
        if(empty($payload)) {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Invalid payload.'), REST_Controller::HTTP_BAD_REQUEST);
        }
        $productIdArray = array();
        $postData = array();
        
        foreach($payload as $row) {
            if (!isset($row['product_id']) || empty($row['product_id'])) {
                $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'product_id key required.'), REST_Controller::HTTP_BAD_REQUEST);
            }
            if (!isset($row['quantity']) || empty($row['quantity'])) {
                $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'quantity key required.'), REST_Controller::HTTP_BAD_REQUEST);
            }
            array_push($productIdArray, $row['product_id']);
            
            $temp['prod_id'] = $row['product_id'];
            $temp['quantity'] = $row['quantity'];
            $temp['type'] = "'" . SELF::CART_FLAG . "'";
            $temp['customer_id'] = $this->customer_id;
            $temp['customer_id'] = $this->customer_id;
            array_push($postData, $temp);
            unset($temp);  
        }
        
        $where = array("customer_id" => $this->customer_id, 'type' => SELF::CART_FLAG);

        $prodList = $this->cart_model->cart_product($where, $productIdArray, array('prod_id'));
        if (count($prodList) > 0) {
            foreach ($prodList as $existProduct) {

                if (($key = array_search($existProduct['prod_id'], $productIdArray)) !== false) {                    
                    foreach($postData as $iKey=>$rowData) {
                        if($rowData['prod_id'] == $existProduct['prod_id']) {
                            unset($postData[$iKey]);
                        }
                    }
                }
            }
        }
        
        $prodCount = count($postData);
        if ($prodCount == 0) {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => "All products were already added to cart."), REST_Controller::HTTP_BAD_REQUEST);
        }
        
        $result = $this->cart_model->insert_data($postData, 'cart_master_temp', TRUE);

        if ($result) {
            $countText = ($prodCount > 1) ? 'products' : 'product';
            $this->response(array('status' => REST_Controller::HTTP_OK, 'data' => $prodCount . " $countText successfully added to cart."), REST_Controller::HTTP_OK);
        } else {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Unable to add product to cart right now.'), REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function list_post() {
        $condition = array('cmt.customer_id' => $this->customer_id);
        $fieldArray = array('cmt.id as cart_id', 'cmt.quantity', 'pm.prod_id', 'pm.prod_img', 'pm.prod_title', 'pm.prod_price', 'pm.prod_discount', 'pm.flat_discount', 'pm.stock_status');

        $cartData = $this->cart_model->cart_list($condition, $fieldArray);

        foreach ($cartData as $key => $prodRow) {
            $cartData[$key]['prod_img'] = SELF::BASE_URL.'dist/img/products/med/' . $prodRow['prod_img'];
            $cartData[$key]['stock_status'] = ($prodRow['stock_status'] == 1) ? 'In stock' : 'Out of Stock';
        }
        $this->response(array('status' => REST_Controller::HTTP_OK, 'data' => $cartData), REST_Controller::HTTP_OK);
    }

    public function remove_delete() {
        $payload = json_decode($this->delete('payload'), TRUE);

        if (!isset($payload['cart_id']) || !is_array($payload['cart_id']) || empty($payload['cart_id'])) {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Invalid payload.'), REST_Controller::HTTP_BAD_REQUEST);
        }
        $condition = array('customer_id' => $this->customer_id, 'type' => SELF::CART_FLAG);

        if ($this->cart_model->remove_product($payload['cart_id'], $condition)) {
            $this->response(array('status' => REST_Controller::HTTP_OK, 'data' => 'Selected cart item has been removed.'), REST_Controller::HTTP_OK);
        } else {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Unable to remove cart items right now.'), REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function update_put() {
        $cart_id = $this->put('cart_id');
        $quantity = $this->put('quantity');

        if (empty($cart_id)) {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Provide cart_id key.'), REST_Controller::HTTP_BAD_REQUEST);
        }
        if (empty($quantity)) {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Provide quantity key.'), REST_Controller::HTTP_BAD_REQUEST);
        }
        if ($this->cart_model->update_data(array('quantity' => $quantity), 'cart_master_temp', array('id' => $cart_id))) {
            $this->response(array('status' => REST_Controller::HTTP_OK, 'data' => 'Cart product has been updated.'), REST_Controller::HTTP_OK);
        } else {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Unable to update cart items right now.'), REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    

}
