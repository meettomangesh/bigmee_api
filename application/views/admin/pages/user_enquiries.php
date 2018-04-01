    
<!-- start: Content -->
<div id="content" class="span10">

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?= base_url('admin/dashboard') ?>">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a>Enquiries</a></li>
    </ul>
    <div class="row-fluid">
        <ul class="table-tab nav nav-tabs" role="tablist">
            <li class="nav-item active">
                <a class="nav-link " data-toggle="tab" href="#product" role="tab">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#general" role="tab">General</a>
            </li>
        </ul> 
    </div>
    <div class="tab-content">
        <div class="tab-pane  fade in active" id="product">
            <div class="row-fluid sortable">		
                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon white user"></i><span class="break"></span>Product </h2>
                        <div class="box-icon">
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="row-fluid top-toolbar">
                            <div class="row-fluid">
                                <div class="span2">  
                                    <input type="text" class="filter-input-product-enquiry input-small" data-column="0" placeholder="Enq Id" autocomplete="off">
                                </div> 
                                <div class="span2">  
                                    <input type="text" class="filter-input-product-enquiry input-small" data-column="4" placeholder="Supplier Id" autocomplete="off">
                                </div> 
                                <div class="span2">  
                                    <input type="text" class="filter-input-product-enquiry input-small datepicker" data-column="1" autocomplete="off" placeholder="From date">
                                </div> 
                                <div class="span2">  
                                    <input type="text" class="filter-input-product-enquiry input-small datepicker" data-column="2" autocomplete="off" placeholder="To date">
                                </div>
                                <div class="span2">  
                                    <select class="filter-input-product-enquiry input-small" data-column="3">  
                                        <option value="">Status</option>
                                        <option value="0">open</option>
                                        <option value="1">Close</option>
                                    </select>
                                </div>
                            </div>  
                        </div>
                        <table class="table table-striped table-bordered bootstrap-datatable" id="prodEnquiryDataTable-ad">
                            <thead>
                                <tr> 
                                    <th>Enq Id</th> 
                                    <th>Add On</th> 
                                    <th>SID</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Product ID</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>  
                        </table>
                    </div>  

                </div>
            </div>    
        </div>
        <div class="tab-pane  fade in" id="general">
            <div class="row-fluid sortable">		
                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon white user"></i><span class="break"></span>General </h2>
                        <div class="box-icon">
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="row-fluid top-toolbar">
                            <div class="row-fluid">
                                <div class="span2">  
                                    <input type="text" class="filter-input-general-enquiry input-small" data-column="0" placeholder="Req Id" autocomplete="off">
                                </div> 
                                <div class="span2">  
                                    <input type="text" class="filter-input-general-enquiry input-small" data-column="3" placeholder="Supplier Id" autocomplete="off">
                                </div> 
                                <div class="span2">  
                                    <input type="text" class="filter-input-general-enquiry input-small datepicker" data-column="1" autocomplete="off" placeholder="From date">
                                </div> 
                                <div class="span2">  
                                    <input type="text" class="filter-input-general-enquiry input-small datepicker" data-column="2" autocomplete="off" placeholder="To date">
                                </div>
                            </div>  
                        </div>
                        <table class="table table-striped table-bordered bootstrap-datatable" id="reqDataTable-ad">
                            <thead>
                                <tr> 
                                    <th>Req Id</th> 
                                    <th>Add On</th> 
                                    <th>SID</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>   
                        </table>
                    </div>  

                </div>
            </div> 

        </div>            
        <!-- end: Content -->
    </div><!--/#content.span10-->
</div><!--/fluid-row-->
<div class="clearfix"></div>
