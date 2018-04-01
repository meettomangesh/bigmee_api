    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>Manage Category</a></li>
			</ul>
		     <div class="row-fluid">
		                <ul class="table-tab nav nav-tabs" role="tablist">
		                   <li class="nav-item active">
		                     <a class="nav-link " data-toggle="tab" href="#mainCategory" role="tab">Main Category</a>
		                   </li>
		                   <li class="nav-item">
		                     <a class="nav-link" data-toggle="tab" href="#subCategory" role="tab">Sub Service</a>
		                   </li>
		                </ul> 
		            </div>
		<div class="tab-content">
		  <div class="tab-pane  fade in active" id="mainCategory">
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white tags"></i><span class="break"></span>Main Category</h2>
						<div class="box-icon">
							<a href="javascript: void(0)" id="create-main-category"><i class="halflings-icon white plus"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable" id="mcatDataTable">
						  <thead>
							  <tr> 
                                  <th>Added date</th> 
								  <th>Name</th>
								  <th>Icon</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
                         </table>
                       </div>  
                     
                   </div>
                 </div> 
             </div>    
		  <div class="tab-pane  fade in" id="subCategory">
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white tags"></i><span class="break"></span>Business Category</h2>
						<div class="box-icon">
							<a href="javascript: void(0)" id="create-business-category"><i class="halflings-icon white plus"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable" id="bcatDataTable-ad">
						  <thead>
							  <tr> 
                                  <th>Added date</th> 
								  <th>Name</th>
								  <th>Main Category</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						 <!-- <tbody>
                            <?php foreach($bcat_list as $category): ?>
                            
							<tr>
                                <td class="center"><?= formateDate($category['bcat_addon']) ?></td>
								<td class="center"><?= $category['bcat_name'] ?></td>
								<td class="center"><?= $category['mcat_name'] ?></td>
								<td class="center">
									<a class="btn btn-info edit-business-category" href="javascript: void(0)" data-value="<?= $category['bcat_id'] ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="javascript: void(0)" data-value="<?= $category['bcat_id'] ?>">
										<i class="halflings-icon white trash"></i>  
									</a>
								</td>
							</tr>
                            <?php endforeach; ?>
                          </tbody> -->
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
	
