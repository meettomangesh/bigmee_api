<?php if($this->uri->segment('1') == 'supplier'): ?>
         <form class="form-horizontal form-style1" id="productEnquiry" name="productEnquiry">
             <div class="container text-right">
                 <?php 
                 $orderBtnClass = ($enquiry->order_id) ? 'success' : 'info';
                 ?>
                <a href="javascript: void(0)" class="btn btn-<?= $orderBtnClass ?> ce5" data-value="<?= $enquiry->prod_id ?>" id="orderBtn">Place Order</a>
             </div>   
             <div class="row">             
                <div class="panel panel-success col-md-6">
                    <div class="panel-header">
                        <h4>Customer Details</h4>
                    </div>
                    <div class="panel-body">
                        <ul class="enquiry-data-list">
                            <li>
                                <strong>Name</strong>
                                <span><?= $enquiry->enq_name ?></span>
                            </li>
                            <li>
                                <strong>Mobile</strong>
                                <span><?= $enquiry->enq_contact ?></span>
                            </li>
                            <li>
                                <strong>Email</strong>
                                <span><?= $enquiry->enq_email ?></span>
                            </li>
                            <li>
                                <strong>Address</strong>
                                <span><?= $enquiry->enq_addr ?></span>
                            </li>
                            <li>
                                <strong>Message</strong>
                                <span><?= $enquiry->enq_message ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-warning col-md-6">
                    <div class="panel-header">
                        <h4>Status</h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-group col-md-6">
                            <label>Status</label>
                                <select name="status" id="status" class="form-control1">
                                    <option value="">--Select--</option>
                                    <option <?php if($enquiry->enq_status == 0){ echo "selected";} ?> value="0">Open</option>
                                    <option <?php if($enquiry->enq_status == 1){ echo "selected";} ?> value="1">Closed</option>
                                </select>
                        </div>
                        <?php if($enquiry->order_id): ?>
                        <div class="col-md-6">
                            <label>Order Id</label>
                            <div class="form-control1"><?= $enquiry->order_id ?></div>
                        </div> 
                        <?php endif; ?>
                    </div>
                </div>
               </div>
               
              <div class="row"> 
                <div class="panel panel-warning">
                    <div class="panel-header">
                        <h4>Product Information</h4>
                    </div>
                    <div class="panel-body">
                     <div class="col-md-2">
                      <div class="prod-img">
                        <img src="<?= base_url('dist/img/products/'.$enquiry->prod_img) ?>" alt="<?= $enquiry->prod_title ?>" class="img-thumb">
                      </div>
                     </div>
                     <div class="col-md-6">
                        <ul class="enquiry-data-list">
                            <li>
                                <strong>Product Id</strong>
                                <span><?= $enquiry->prod_id ?></span>
                            </li>
                            <li>
                                <strong>Product Name</strong>
                                <span><?= $enquiry->prod_title ?></span>
                            </li>
                            <li>
                                <strong>Price</strong>
                                <span><?= formateBalance($enquiry->prod_price) ?> per / <map><?= $enquiry->price_unit ?></map></span>
                            </li>
                            <?php if($enquiry->prod_discount !='0') : ?>
                            <li>
                                <strong>Discount</strong>
                                <span><?= formateBalance($enquiry->prod_discount) ?>%</span>
                            </li>
                            <?php endif; ?>
                        </ul>
                     </div> 
                    </div>
                </div>
              </div>
                
            <div class="buttons text-center">
                <button class="btn btn-success ce5" type="submit" id="updateStatus">Update</button>
            </div>
        </form>

<?php else: ?>   
<div class="box">
    <div class="box-content">
         <form class="form-horizontal form-style1" id="productEnquiry" name="productEnquiry"> 
             <div class="row-fluid">             
                <div class="panel panel-success span6">
                    <div class="panel-header">
                        <h4>Customer Details</h4>
                    </div>
                    <div class="panel-body">
                        <ul class="data-list">
                            <li>
                                <strong>Name</strong>
                                <span><?= $enquiry->enq_name ?></span>
                            </li>
                            <li>
                                <strong>Mobile</strong>
                                <span><?= $enquiry->enq_contact ?></span>
                            </li>
                            <li>
                                <strong>Email</strong>
                                <span><?= $enquiry->enq_email ?></span>
                            </li>
                            <li>
                                <strong>Address</strong>
                                <span><?= $enquiry->enq_addr ?></span>
                            </li>
                            <li>
                                <strong>Message</strong>
                                <span><?= $enquiry->enq_message ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-warning span6">
                    <div class="panel-header">
                        <h4>Status</h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-group span6">
                            <label>Status</label>
                                <select name="status" id="status" class="form-control1">
                                    <option value="">--Select--</option>
                                    <option <?php if($enquiry->enq_status == 0){ echo "selected";} ?> value="0">Open</option>
                                    <option <?php if($enquiry->enq_status == 1){ echo "selected";} ?> value="1">Closed</option>
                                </select>
                        </div>
                    </div>
                </div>
               </div>
               
              <div class="row-fluid"> 
                <div class="panel panel-warning">
                    <div class="panel-header">
                        <h4>Product Information</h4>
                    </div>
                    <div class="panel-body">
                     <div class="span4">
                      <div class="prod-img">
                        <img src="<?= base_url('dist/img/products/'.$enquiry->prod_img) ?>" alt="<?= $enquiry->prod_title ?>" class="img-thumb">
                      </div>
                     </div>
                     <div class="span8">
                        <ul class="data-list">
                            <li>
                                <strong>Product Id</strong>
                                <span><?= $enquiry->prod_id ?></span>
                            </li>
                            <li>
                                <strong>Product Name</strong>
                                <span><?= $enquiry->prod_title ?></span>
                            </li>
                            <li>
                                <strong>Price</strong>
                                <span><?= formateBalance($enquiry->prod_price) ?> per / <map><?= $enquiry->price_unit ?></map></span>
                            </li>
                            <li>
                                <strong>Discount</strong>
                                <span><?= formateBalance($enquiry->prod_discount) ?></span>
                            </li>
                        </ul>
                     </div> 
                    </div>
                </div>
              </div>
                
            <div class="buttons text-center">
                <button class="btn btn-success ce5" type="submit" id="updateStatus">Update</button>
            </div>
        </form>
      </div>
    </div>  
<?php endif; ?>        