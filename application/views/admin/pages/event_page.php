    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>Events</a></li>
			</ul>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white picture"></i><span class="break"></span>Events </h2>
						<div class="box-icon">
						<?php if($this->session->userdata('type') == 'SA'): ?>
							<a href="javascript: void(0)" id="btn-create-event"><i class="halflings-icon white plus"></i></a>
						<?php endif; ?>	
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                              <div class="span2">  
                                <input type="text" class="filter-input-event input-small datepicker" data-column="0" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-event input-small datepicker" data-column="1" autocomplete="off" placeholder="To date">
                              </div>
                            </div>  
                       </div> 
						<table class="table table-striped table-bordered bootstrap-datatable" id="eventDataTable-ad">
						  <thead>
							  <tr> 
                                  <th>Create date</th> 
								  <th>Title</th>
                                  <th>Date</th>
                                  <th>City</th>
                                  <th>Charge</th>
								  <th>Content</th>
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
