    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>Build Plan</a></li>
			</ul>
	      <div class="row-fluid">
	          <ul class="table-tab nav nav-tabs" role="tablist">
	            <li class="nav-item active">
	              <a class="nav-link " data-toggle="tab" href="#masterPlan" role="tab">User Plan</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" data-toggle="tab" href="#binaryPlan" role="tab">Binary Plan</a>
	            </li>
	          </ul> 
	      </div>
    <div class="tab-content">
     <div class="tab-pane  fade in active" id="masterPlan">
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white plane"></i><span class="break"></span>User Plan</h2>
						<div class="box-icon">
							<a href="javascript: void(0)" id="build-plan"><i class="halflings-icon white plus"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable" id="planDataTable">
						  <thead>
							  <tr> 
                                  <th>Added date</th> 
                                  <th>Plan</th>
								  <th>Price</th>
								  <th>Validity (day's)</th>
								  <th>Product Limit</th>
                                  <th>Sms</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
                         </table>
                       </div>  
                     
                   </div>
                 </div>  
               </div>
		     <div class="tab-pane  fade in" id="binaryPlan">
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white plane"></i><span class="break"></span>Binary Plan</h2>
						<div class="box-icon">
							<a href="javascript: void(0)" id="build-binary-plan"><i class="halflings-icon white plus"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable" id="planBinaryDataTable">
						  <thead>
							  <tr> 
                                  <th>Added date</th> 
                                  <th>Master Plan</th>
                                  <th>Plan</th>
                                  <th>User</th>
								  <th>Validity (day's)</th>
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
	
