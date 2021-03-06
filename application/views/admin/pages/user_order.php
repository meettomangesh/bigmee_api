    
<!-- start: Content -->
<div id="content" class="span10">

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?= base_url('admin/dashboard') ?>">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a>User orders</a></li>
    </ul>
    <div class="row-fluid sortable">		
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white shopping-cart"></i><span class="break"></span>User orders </h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="row-fluid top-toolbar">
                    <div class="row-fluid">
                        <div class="span2">  
                            <input type="text" class="filter-input-order input-small" data-column="4" autocomplete="off" placeholder="Supplier Id">
                        </div>
                        <div class="span2">  
                            <input type="text" class="filter-input-order input-small" data-column="0" autocomplete="off" placeholder="Order Id">
                        </div> 
                        <div class="span2">  
                            <input type="text" class="filter-input-order input-small datepicker" data-column="1" autocomplete="off" placeholder="From date">
                        </div> 
                        <div class="span2">  
                            <input type="text" class="filter-input-order input-small datepicker" data-column="2" autocomplete="off" placeholder="To date">
                        </div>
                        <div class="span2">
                            <select class="filter-input-order input-small" data-column="3">
                                <option value="">--Status--</option>
                                <option value="R">Ready</option>
                                <option value="D">Dispute</option>
                                <option value="C">Cancelled</option>
                            </select>
                        </div>
                    </div>  
                </div> 
                <table class="table table-striped table-bordered bootstrap-datatable" id="orderDataTable-ad">
                    <thead>
                        <tr> 
                            <th>Ord Id</th>
                            <th>Date</th>
                            <th>Total amount</th>
                            <th>Total Discount</th>
                            <th>Status</th>
                            <th>Order Date</th>
                            <th>SID</th>
                            <th>Action</th>
                        </tr>
                    </thead>   
                </table>
            </div>  

        </div>
    </div>    

    <!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->
<div class="clearfix"></div>

