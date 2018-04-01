<?php if ($this->uri->segment(1) == 'supplier'): ?>
    <?php if ($order_products): ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4>Product Information</h4>
                        </div>
                        <div class="panel-body">
                            <?php foreach ($order_products as $product): ?>  
                                <div class="col-md-2">
                                    <div class="prod-img">
                                        <img src="<?= base_url('dist/img/products/' . $product['prod_img']) ?>" alt="<?= $product['prod_title'] ?>" class="img-thumb">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <ul class="enquiry-data-list">
                                        <li>
                                            <strong>Product Id</strong>
                                            <span><?= $product['prod_id'] ?></span>
                                        </li>
                                        <li>
                                            <strong>Product Name</strong>
                                            <span><?= $product['prod_title'] ?></span>
                                        </li>
                                        <li>
                                            <strong>Price</strong>
                                            <span><?= formateBalance($product['prod_price']) ?> per / <map><?= $product['price_unit'] ?></map></span>
                                        </li>
                                        <li>
                                            <strong>Quantity</strong>
                                            <span><?= $product['prod_count'] ?></span>
                                        </li>
                                        <li>
                                            <strong>Total Amount</strong>
                                            <span><?= formateBalance($product['prod_price'] * $product['prod_count']) ?></span>
                                        </li>
                                        <?php if ($product['prod_discount'] > 0): ?>
                                            <li>
                                                <strong>Discount</strong>
                                                <span><?= formateBalance($product['prod_discount']) ?> %</span>
                                            </li>
                                            <li>
                                                <strong>Discount Amount</strong>
                                                <span><?= formateBalance($product['total_discount']) ?></span>
                                            </li>
                                        <?php endif; ?>
                                        <li>
                                            <strong>Grand Total</strong>
                                            <span><?= formateBalance($product['total_amount']) ?></span>
                                        </li>
                                    </ul>
                                </div> 
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>     

            <div class="row">  
                <div class="col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4>Customer Details</h4>
                        </div>
                        <div class="panel-body">
                            <ul class="enquiry-data-list">
                                <li>
                                    <strong>Name</strong>
                                    <span><?= $order_data->enq_name ?></span>
                                </li>
                                <li>
                                    <strong>Mobile</strong>
                                    <span><?= $order_data->enq_contact ?></span>
                                </li>
                                <li>
                                    <strong>Email</strong>
                                    <span><?= $order_data->enq_email ?></span>
                                </li>
                                <li>
                                    <strong>Address</strong>
                                    <span><?= $order_data->enq_addr ?></span>
                                </li>
                                <li>
                                    <strong>Message</strong>
                                    <span><?= $order_data->enq_message ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    

                <div class="col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4>Order Status</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-style1" id="orderStatusForm">
                                <div class="form-group col-md-4">
                                    <label>Status</label>
                                    <select name="status" id="order_status" class="form-control1">
                                        <option value="">--Status--</option>
                                        <?php if($order_data->order_status != "D"): ?>
                                        <option <?php if ($order_data->order_status == "D") echo "selected"; ?> value="D">Dispute</option>
                                        <option <?php if ($order_data->order_status == "R") echo "selected"; ?> value="R">Ready</option>
                                        <?php endif; ?>
                                        <option <?php if ($order_data->order_status == "C") echo "selected"; ?> value="C">Cancel</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-8">
                                    <label>Courier Partner</label>
                                    <select name="courier_partner" id="courier_partner" class="form-control1">
                                        <option value="">--Courier Partner--</option>
                                        <?php foreach ($courier_partner as $partner): ?>
                                            <option value="<?= $partner['id'] ?>" <?php if ($partner['id'] == $order_data->courier_partner) echo "selected"; ?>><?= $partner['service_name'] . '- ' . $partner['email'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-8">
                                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    <?php else: ?>     
        <div class="container">
            <div class="row"> 
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h4>Product Information</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning"><b>Warning: </b>Product information can not be displayed, this product might be removed by supplier</p>
                    </div>
                </div>
            </div>
        </div>     
    <?php endif; ?>          

<?php else: ?>
    <!-- admin view -->

    <?php if ($order_products): ?>
        <div class="box box-content"> 
            <div class="row-fluid"> 
                <div class="panel panel-warning">
                    <div class="panel-header">
                        <h4>Product Information</h4>
                    </div>
                    <div class="panel-body">
                        <?php foreach ($order_products as $product): ?> 
                            <div class="span4">
                                <div class="prod-img">
                                    <img src="<?= base_url('dist/img/products/' . $product['prod_img']) ?>" alt="<?= $product['prod_title'] ?>" class="img-thumb">
                                </div>
                            </div>
                            <div class="span8">
                                <ul class="data-list">
                                    <li>
                                        <strong>Product Id</strong>
                                        <span><?= $product['prod_id'] ?></span>
                                    </li>
                                    <li>
                                        <strong>Product Name</strong>
                                        <span><?= $product['prod_title'] ?></span>
                                    </li>
                                    <li>
                                        <strong>Price</strong>
                                        <span><?= formateBalance($product['prod_price']) ?> per / <map><?= $product['price_unit'] ?></map></span>
                                    </li>
                                    <li>
                                        <strong>Quantity</strong>
                                        <span><?= $product['prod_count'] ?></span>
                                    </li>
                                    <li>
                                        <strong>Total Amount</strong>
                                        <span><?= formateBalance($product['prod_price'] * $product['prod_count']) ?></span>
                                    </li>
                                    <?php if ($product['prod_discount'] > 0): ?>
                                        <li>
                                            <strong>Discount</strong>
                                            <span><?= formateBalance($product['prod_discount']) ?> %</span>
                                        </li>
                                        <li>
                                            <strong>Discount Amount</strong>
                                            <span><?= formateBalance($product['total_discount']) ?></span>
                                        </li>
                                    <?php endif; ?>
                                    <li>
                                        <strong>Net Total</strong>
                                        <span><?= formateBalance($product['total_amount']) ?></span>
                                    </li>
                                </ul>
                            </div> 
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="row-fluid"> 
                <span>Total Bill: <?= formateBalance($product['total_bill']) ?></span>
                <span>Total Discount: <?= formateBalance($product['bill_discount']) ?></span>
                <span>Grand Total: <?= formateBalance($product['total_bill'] - $product['bill_discount']) ?></span>
            </div>

            <div class="row-fluid">             
                <div class="panel panel-success span6">
                    <div class="panel-header">
                        <h4>Customer Details</h4>
                    </div>
                    <div class="panel-body">
                        <ul class="data-list">
                            <li>
                                <strong>Name</strong>
                                <span><?= $order_data->enq_name ?></span>
                            </li>
                            <li>
                                <strong>Mobile</strong>
                                <span><?= $order_data->enq_contact ?></span>
                            </li>
                            <li>
                                <strong>Email</strong>
                                <span><?= $order_data->enq_email ?></span>
                            </li>
                            <li>
                                <strong>Address</strong>
                                <span><?= $order_data->enq_addr ?></span>
                            </li>
                            <li>
                                <strong>Message</strong>
                                <span><?= $order_data->enq_message ?></span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-success span6">
                    <div class="panel-header">
                        <h4>Order Status</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form-style1" id="orderStatusForm">
                            <div class="form-group span4">
                                <label>Status</label>
                                <select name="status" id="order_status" class="form-control1 input-small">
                                    <option value="">--Status--</option>
                                    <?php if($order_data->order_status != "D"): ?>
                                    <option <?php if ($order_data->order_status == "D") echo "selected"; ?> value="D">Dispute</option>
                                    <option <?php if ($order_data->order_status == "R") echo "selected"; ?> value="R">Ready</option>
                                    <?php endif; ?>
                                    <option <?php if ($order_data->order_status == "C") echo "selected"; ?> value="C">Cancel</option>
                                </select>
                            </div>
                            <div class="form-group span8">
                                <label>Courier Partner</label>
                                <select name="courier_partner" id="courier_partner" class="form-control1">
                                    <option value="">--Courier Partner--</option>
                                    <?php foreach ($courier_partner as $partner): ?>
                                        <option value="<?= $partner['id'] ?>" <?php if ($partner['id'] == $order_data->courier_partner) echo "selected"; ?>><?= $partner['service_name'] . '- ' . $partner['email'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group span8">
                                <button type="submit" class="btn btn-success btn-sm">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>     
        <div class="box box-content"> 
            <div class="row-fluid"> 
                <div class="panel panel-warning">
                    <div class="panel-header">
                        <h4>Product Information</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning"><b>Warning: </b>Product information can not be displayed, this product might be removed by supplier</p>
                    </div>
                </div>
            </div>
        </div>     
    <?php endif; ?>          


<?php endif; ?>    
