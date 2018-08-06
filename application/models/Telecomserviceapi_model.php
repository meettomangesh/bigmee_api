<?php

 defined('BASEPATH') OR exit('No direct script access allowed');

class Telecomserviceapi_model extends MY_model {

    private $table = 'telecom_services';

    public function __construct() {

        parent::__construct();
    }

    /**
     * To get all active plans against provider id
     * @param type $provider_id
     */
    public function getPlanDataByProviderId($provider_id) {
        $getPlanByProviderIdQuery = "SELECT
                    ts.scheme_name,
                    tp.*
                FROM
                    `telecom_plan` AS tp
                JOIN `telecom_scheme` AS ts
                ON
                    tp.scheme_id = ts.scheme_id
                WHERE
                    tp.provider_id = ?";
        return $this->db->query($getPlanByProviderIdQuery, array($provider_id))->result();
    }

    //load all billing units
    public function loadOtherParamByServiceId($service_id) {
        $otherParamData = [];
        switch ($service_id) {
            case 6:
                $billing_unit_data['billing_units'] = $this->getBilliingUnits();
                $processing_cycle_data['processing_cycle'] = array(
                    '01' => '01',
                    '02' => '02',
                    '03' => '03',
                    '04' => '04',
                    '05' => '05',
                    '06' => '06',
                    '07' => '07',
                    '08' => '08'
                );
                $otherParamData = array_merge($otherParamData,$billing_unit_data,$processing_cycle_data);
                break;
            default:
                break;
        }
        return $otherParamData;
    }

    public function getBilliingUnits() {
        $this->db->select("unit_name")
                ->from("billing_unit");
        return $this->db->get()->result();
        // echo $this->db->get_compiled_select();	
    }

    /**     *
     * To get all required form elements by service Id
     */
    public function getFormFieldsByServiceId($service_id) {
        $fieldsArr = array('service_id', 'provider_id');
        Switch ($service_id) {
            case 3: // For prepaid
                $fieldsArr = array_merge($fieldsArr, array('mobile_number', 'amount'));
                break;
            case 12: // For postpaid
                $fieldsArr = array_merge($fieldsArr, array('mobile_number', 'amount'));
                break;
            case 4: // For DTH
                $fieldsArr = array_merge($fieldsArr, array('customer_id', 'amount'));
                break;
            case 5: // For LandLine
                $fieldsArr = array_merge($fieldsArr, array('landline_no', 'account_number', 'amount'));
                break;
            case 9: // For Gas Line
                $fieldsArr = array_merge($fieldsArr, array('account_number', 'amount'));
                break;
            case 13: // For Data Card
                $fieldsArr = array_merge($fieldsArr, array('number', 'amount'));
                break;
            case 7: // For INSURANCE
                $fieldsArr = array_merge($fieldsArr, array('policy_number', 'amount'));
                break;
            case 11: // For UTILITY BILL
                $fieldsArr = array_merge($fieldsArr, array('amount'));
                break;
            case 6: // For ELECTRICITY
                $fieldsArr = array_merge($fieldsArr, array('billing_unit', 'processing_cycle', 'mobile_number', 'consumer_number', 'amount'));
                break;
            case 8: // For MONEY
                $fieldsArr = array_merge($fieldsArr, array('customer_id', 'amount'));
                break;
            case 10: // For LOAN EMI
                $fieldsArr = array_merge($fieldsArr, array('customer_id', 'amount'));
                break;
            case 14: // For PANCARD
                $fieldsArr = array_merge($fieldsArr, array('customer_id', 'amount'));
                break;
        }
        return $fieldsArr;
    }

}
