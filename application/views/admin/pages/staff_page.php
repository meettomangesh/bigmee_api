    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>Staff Manager</a></li>
			</ul>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-group white"></i><span class="break"></span>Staff Manager</h2>
						<div class="box-icon">
                        <?php if(in_array($this->session->userdata('type'), $create_staff_role)): ?>
							<a href="javascript: void(0)" id="create-staff-user"><i class="halflings-icon white plus"></i></a>
						<?php endif; ?>
                        	<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                              <div class="span2">  
                                <input type="text" class="data-filter-input input-small" data-column="0" placeholder="Staff Id" autocomplete="off">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="data-filter-input input-small datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="data-filter-input input-small datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div> 
                              <div class="span2"> 
                                <input type="text" class="data-filter-input input-small" data-column="3" placeholder="Mobile" autocomplete="off">
                              </div>
                              <div class="span2"> 
                                <input type="text" class="data-filter-input input-small" data-column="4" placeholder="Email" autocomplete="off">
                              </div>
                              <div class="span2">  
                                <select class="data-filter-input input-small" data-column="5">  
                                  <option value="">--Status--</option>
                                  <option value="1">Active</option>
                                  <option value="0">Inactive</option>
                                </select>
                              </div>
                            </div>  
                       </div> 
						<table class="table table-striped table-bordered bootstrap-datatable" id="staffUserDataTable-ad">
						  <thead>
							  <tr> 
                                  <th>Added date</th> 
                                  <th>SID</th>
                                  <th>Role</th>
                                  <th>Name</th>
								  <th>Pin code</th>
                                  <th>Mobile</th>
                                  <th>Email</th>
                                  <th>Status</th>
                                  <th>Balance</th>
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
	
