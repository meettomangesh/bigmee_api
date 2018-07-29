    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>User list</a></li>
			</ul>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Users</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                              <div class="span2">  
                                <input type="text" class="filter-input-supplier-user input-small" data-column="0" placeholder="Supplier Id" autocomplete="off">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-supplier-user input-small" data-column="5" autocomplete="off" placeholder="Mobile">
                              </div>
                              <div class="span2">  
                                <input type="text" class="filter-input-supplier-user input-small datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-supplier-user input-small datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="span2">  
                                <select class="filter-input-supplier-user input-small" data-column="3">  
                                  <option value="">Status</option>
                                  <option value="1">Active</option>
                                  <option value="0">Inactive</option>
                                </select>
                              </div>
                              <div class="span2">  
                                <select class="filter-input-supplier-user input-small" data-column="4">
                                  <option value="">Category</option>
                                <?php foreach($main_category as $cat): ?>
                                 <option value="<?= $cat['mcat_id'] ?>"><?= $cat['mcat_name'] ?></option>
                                <?php endforeach; ?> 
                                </select>
                              </div>
                            </div>  
                       </div> 
						<table class="table table-striped table-bordered bootstrap-datatable" id="spUserDataTable-ad">
						  <thead>
							  <tr>
                                  <th>UID</th> 
                                  <th>Registered</th>  
								  <th>Email</th>
								  <th>Mobile</th>
								  <th>Name</th>
								  <th>Status</th>
                                  <th>Balance</th>
                                  <th>Plan</th>
                                  <th>Category</th>
                                  <th>Validity</th>
                                  <th>Upline</th>
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
	
