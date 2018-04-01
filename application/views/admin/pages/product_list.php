    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>Product list</a></li>
			</ul>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Products </h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                           <div class="span10">
                              <div class="span2">  
                                <input type="text" class="filter-input-product input-small" data-column="0" placeholder="Product id" autocomplete="off">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-product input-small" data-column="5" autocomplete="off" placeholder="Supplier Id">
                              </div>
                              <div class="span2">  
                                <input type="text" class="filter-input-product input-small datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-product input-small datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="span2">  
                                <select class="filter-input-product input-small" data-column="3">
                                  <option value="">Status</option>
                                  <option value="2">Pending</option>
                                  <option value="1">Approve</option>
                                  <option value="0">Rejected</option>
                                </select>
                              </div>
                              <div class="span2">  
                                <select class="filter-input-product input-small" data-column="4">
                                  <option value="">Category</option>
                                <?php foreach($business_category as $service): ?>
                                 <option value="<?= $service['bcat_id'] ?>"><?= $service['bcat_name'] ?></option>
                                <?php endforeach; ?> 
                                </select>
                              </div>
                            </div>  
                        </div>
                       </div> 
						<table class="table table-striped table-bordered bootstrap-datatable" id="productDataTable-ad">
						  <thead>
							  <tr> 
								  <th>PID</th>
                                  <th>Upload date</th> 
								  <th>Name</th>
                                  <th>Service</th>
                                  <th>Status</th>
								  <th>Price</th>
                                  <th>Discount</th>
                  <th>UID</th>
								  <th>Actions</th>
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
 <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>