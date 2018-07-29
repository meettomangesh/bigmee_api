    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>News Broadcasting</a></li>
			</ul>
		     <div class="row-fluid">
		                <ul class="table-tab nav nav-tabs" role="tablist">
		                   <li class="nav-item active">
		                     <a class="nav-link " data-toggle="tab" href="#addNews" role="tab">Add News</a>
		                   </li>
		                   <li class="nav-item">
		                     <a class="nav-link" data-toggle="tab" href="#broadcastNews" role="tab">Broadcast</a>
		                   </li>
		                </ul> 
		            </div>
		<div class="tab-content">
		  <div class="tab-pane  fade in active" id="addNews">
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white font"></i><span class="break"></span>News </h2>
						<div class="box-icon">
							<a href="javascript: void(0)" id="btn-add-news"><i class="halflings-icon white plus"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                              <div class="span2">  
                                <input type="text" class="data-filter-news input-small datepicker" data-column="0" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="data-filter-news input-small datepicker" data-column="1" autocomplete="off" placeholder="To date">
                              </div>
                            </div>  
                       </div> 
						<table class="table table-striped table-bordered bootstrap-datatable" id="newsDataTable">
						  <thead>
							  <tr> 
                                  <th>Upload date</th> 
								  <th>Title</th>
								  <th>Content</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
                         </table>
                       </div>  
                     
                   </div>
                 </div>
               </div>
		  <div class="tab-pane  fade in" id="broadcastNews">  
    		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white font"></i><span class="break"></span>Broadcast News </h2>
						<div class="box-icon">
							<a href="javascript: void(0)" id="btn-broadcast-news"><i class="halflings-icon white plus"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                              <div class="span2">  
                                <input type="text" class="data-filter-news-broadcast input-small datepicker" data-column="0" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="data-filter-news-broadcast input-small datepicker" data-column="1" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="span2">  
                                <select class="data-filter-news-broadcast input-small" data-column="2">
                                	<option value="">--Role--</option>
                                	<?php foreach($role_config as $role): ?>
                                	<option value="<?= $role['role_id'] ?>"><?= $role['role_name'] ?></option>	
                                <?php endforeach; ?>
                                </select>
                              </div>
                              <div class="span2">  
                                <select class="data-filter-news-broadcast input-small" data-column="3">
                                <option value="">--Type--</option>
                                <option value="0">Welcome</option>
                                <option value="1">Scroll</option>
                                </select>
                              </div>
                              <div class="span2">  
                                <select class="data-filter-news-broadcast input-small" data-column="4">
                                <option value="">--Status--</option>
                                <option value="1">Enabled</option>
                                <option value="0">Disabled</option>
                                </select>
                              </div>
                            </div>  
                       </div>
						<table class="table table-striped table-bordered bootstrap-datatable" id="broadcastNewsDataTable">
						  <thead>
							  <tr> 
                                  <th>Broadcast On</th> 
								  <th>Title</th>
                                  <th>Status</th>
                                  <th>Role</th>
                                  <th>Type</th>
								  <th>Content</th>
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
	
