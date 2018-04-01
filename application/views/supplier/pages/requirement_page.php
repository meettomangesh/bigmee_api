<script src="<?= base_url('dist/js/bootstrap-datepicker.js') ?>"></script>
<link rel="stylesheet" href="<?= base_url('dist/css/datepicker.css') ?>" />
<div class="col-lg-10 col-md-9 right-content-panel">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4>Users Requirement</h4>
        </div>
        <div class="panel-body">
            <div class="row">
                <ul class="supplier-tab product-tab nav nav-tabs" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link " data-toggle="tab" href="#general" role="tab">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#product" role="tab">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#order" role="tab">Order</a>
                    </li>
                </ul>    
            </div>

            <div class="tab-content">
                <div class="tab-pane  fade in active" id="general">                    
                    <div class="row top-toolbar">
                        <div class="col-md-9">
                            <div class="form-group col-md-3">  
                                <input type="text" class="form-control filter-input-general-enquiry" data-column="0" placeholder="Enq id" autocomplete="off">
                            </div> 
                            <div class="form-group col-md-3">  
                                <input type="text" class="form-control datepicker filter-input-general-enquiry" data-column="1" placeholder="From date">
                            </div> 
                            <div class="form-group col-md-3">  
                                <input type="text" class="form-control datepicker filter-input-general-enquiry" data-column="2" placeholder="To date">
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered" id="reqDataTable">
                        <thead>
                            <tr>
                                <th>Enq Id</th>
                                <th>Date</th>
                                <th>User Name</th>
                                <?php if($profile->uacct_type == 'plan'): ?>
                                <th>Email</th>
                                <th>Contact</th>
                                <?php endif; ?>
                                <th>Action</th>
                            </tr>
                        </thead>   
                    </table>
                </div>
                <div class="tab-pane fade in" id="product">         
                    <div class="row top-toolbar">
                        <div class="col-md-9">
                            <div class="form-group col-md-3">  
                                <input type="tel" class="form-control filter-input-product-enquiry" data-column="0" autocomplete="off" placeholder="Enq id">
                            </div> 
                            <div class="form-group col-md-3">  
                                <input type="text" class="form-control datepicker filter-input-product-enquiry" data-column="1" autocomplete="off" placeholder="From date">
                            </div> 
                            <div class="form-group col-md-3">  
                                <input type="text" class="form-control datepicker filter-input-product-enquiry" data-column="2" autocomplete="off" placeholder="To date">
                            </div>
                            <div class="form-group col-md-3">  
                                <select class="form-control filter-input-product-enquiry" data-column="3">
                                    <option value="">Status</option>
                                    <option value="0">Open</option>
                                    <option value="1">Closed</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="prodEnquiryDataTable">
                        <thead>
                            <tr>
                                <th>Enq Id</th>
                                <th>Date</th>
                                <th>Product</th>
                                <th>User Name</th>
                                <?php if($profile->uacct_type == 'plan'): ?>
                                <th>Email</th>
                                <th>Contact</th>
                                <?php endif; ?>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>   
                    </table>
                </div>
                <div class="tab-pane  fade in" id="order">   
                    <div class="row top-toolbar">
                        <div class="col-md-3">
                            <ul>
                                <li title="delete selected general enquiries"><a href="javascript: void(0)" id="deleteCheckedOrders" class="disabled-icon"><i class="fa fa-trash"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group col-md-3">  
                                <input type="text" class="form-control filter-input-order" data-column="0" placeholder="Order id" autocomplete="off">
                            </div> 
                            <div class="form-group col-md-3">  
                                <input type="text" class="form-control datepicker filter-input-order" data-column="1" autocomplete="off" placeholder="From date">
                            </div> 
                            <div class="form-group col-md-3">  
                                <input type="text" class="form-control datepicker filter-input-order" data-column="2" autocomplete="off" placeholder="To date">
                            </div>
                            <div class="form-group col-md-3">  
                                <select class="form-control filter-input-order" data-column="3">
                                    <option value="">Status</option>
                                    <option value="R">Ready</option>
                                    <option value="D">Dispute</option>
                                    <option value="C">Cancelled</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="orderDataTable">
                        <thead>
                            <tr>
                                <th width="4%"><input type="checkbox" name="ordCheckAll" id="ordCheckAll"></th>
                                <th>Ord Id</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Discount</th>
                                <th>Enq Id</th>
                                <th>Status</th>
                                <th>Order Date</th>
                                <th>Action</th>
                            </tr> 
                        </thead>   
                    </table>
                </div> 
            </div>
        </div>
        <div class="panel-footer text-center">   
        </div> 
    </div>
</div>
</div>
</div>
</section>        