    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>Target Manager</a></li>
			</ul>
		     <div class="row-fluid">
		                <ul class="table-tab nav nav-tabs" role="tablist">
		                   <li class="nav-item active">
		                     <a class="nav-link " data-toggle="tab" href="#targetManager" role="tab">Target Manager</a>
		                   </li>
		                   <li class="nav-item">
		                     <a class="nav-link" data-toggle="tab" href="#accountTarget" role="tab">Account Target</a>
		                   </li>
		                </ul> 
		            </div>
		<div class="tab-content">
		  <div class="tab-pane  fade in active" id="targetManager">
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-group white"></i><span class="break"></span>Target Manager</h2>
						<div class="box-icon">
					  <?php if(in_array($this->session->userdata('type'), $target_role)): ?>		
                            <a href="javascript: void(0)" id="new-target"><i class="halflings-icon white plus"></i></a>
					  <?php endif; ?>		
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                              <div class="span2">  
                                <input type="text" class="filter-input-target input-small datepicker" data-column="0" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-target input-small datepicker" data-column="1" autocomplete="off" placeholder="To date">
                              </div>
                            </div>  
                       </div> 
						<table class="table table-striped table-bordered bootstrap-datatable" id="targetDataTable-ad">
						  <thead>
							  <tr> 
                                  <th>Added date</th> 
                                  <th>Name</th>
                                  <th>Target (days)</th>
                                  <th>Target</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
                         </table>
                       </div>  
                     
                   </div>
                 </div> 
               </div>
		  <div class="tab-pane  fade in" id="accountTarget">
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-group white"></i><span class="break"></span>Account Target</h2>
						<div class="box-icon">
					  <?php if(in_array($this->session->userdata('type'), $target_role)): ?>
							<a href="javascript: void(0)" id="account-target"><i class="halflings-icon white plus"></i></a>
					  <?php endif; ?>
                      		<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                              <div class="span2">  
                                <input type="text" class="filter-input-account-target input-small datepicker" data-column="0" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-account-target input-small datepicker" data-column="1" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="span2">  
                                <input type="text" class="filter-input-account-target input-small" data-column="2" autocomplete="off" placeholder="Acct id">
                              </div>
                              <div class="span2">  
                                <select class="filter-input-account-target input-small" data-column="3" autocomplete="off">
	                                <option value="">--Status--</option>
	                                <option value="1">Active</option>
	                                <option value="0">Expired</option>
                                </select>
                              </div>
                            </div>  
                       </div> 
						<table class="table table-striped table-bordered bootstrap-datatable" id="acctTargetDataTable-ad">
						  <thead>
							  <tr> 
                                  <th>Added date</th>
                                  <th>UID</th>
                                  <th>Role</th> 
                                  <th>Target Title</th>
                                  <th>Target</th>
                                  <th>Complete</th>
                                  <th>Validity</th>
                                  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
                         </table>
                       </div>  
                     
                   </div>
                 </div> 
                </div>
               </div>           
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	<div class="clearfix"></div>
	
