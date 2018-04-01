    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>User binary list</a></li>
			</ul>
		<div class="row-fluid">
		    <ul class="table-tab nav nav-tabs" role="tablist">
		        <li class="nav-item active">
		            <a class="nav-link " data-toggle="tab" href="#listView" role="tab">List view</a>
		        </li>
		        <li class="nav-item">
		            <a class="nav-link" data-toggle="tab" href="#treeView" role="tab">Tree View</a>
		        </li>
		    </ul> 
		</div>
		<div class="tab-content">
		   <div class="tab-pane  fade in active" id="listView">
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white icon-group"></i><span class="break"></span>List View</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                              <div class="span4">  
                                <input type="text" class="filter-input-supplier-binary-user input-large" data-column="0" placeholder="Upline supplier Id" autocomplete="off">
                              </div> 
                            </div>  
                       </div> 
						<table class="table table-striped table-bordered bootstrap-datatable" id="spBinaryUserDataTable-ad">
						  <thead>
							  <tr>
                                  <th>UID</th> 
                                  <th>Registered</th>  
								  <th>Email</th>
								  <th>Mobile</th>
								  <th>Name</th>
								  <th>Status</th>
								  <th>Position</th>
                                  <th>Validity</th>
                                  <th>Upline</th>
							  </tr>
						  </thead>   
                         </table>
                       </div>  
                   </div>
                 </div>  
                </div> 
		    	<div class="tab-pane  fade in" id="treeView">
				<div class="row-fluid sortable">		
					<div class="box span12">
						<div class="box-header">
							<h2><i class="halflings-icon white icon-group"></i><span class="break"></span>Tree View</h2>
							<div class="box-icon">
								<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
							</div>
						</div>
					 <div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                          <form id="drawSupplierTreeViewForm">
                              <div class="span4">  
                                <input type="text" class="input-large" placeholder="Upline supplier Id" autocomplete="off" name="supplier_id">
                              </div>
                              <div class="span4">  
                                <select class="input-small" name="tree_level">
                                	<option value="">--Level--</option>
                                	<?php for($i = 1; $i <= 12; $i++): ?>
                                		<option><?= $i ?></option>
                                	<?php endfor; ?>
                                </select>
                              </div>
                              <div class="span4">  
                                <button type="submit" class="btn btn-primary">Draw</button>
                              </div>  
                          </form>    
                        </div>  
                      </div> 
                        <div class="tree-view" id="tree-view-panel"> 
                        	
                        </div>
					 </div>
					</div>
				</div>	
		       </div>   
             </div>          
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	<div class="clearfix"></div>
	
