    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>Broadcast</a></li>
			</ul>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-bullhorn white"></i><span class="break"></span>Broadcast</h2>
						<div class="box-icon">
							<a href="javascript: void(0)" id="broadcast-message"><i class="halflings-icon white envelope"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable dataTableDefault">
						  <thead>
							  <tr> 
                                  <th>Date</th> 
                                  <th>Message</th>
                                  <th>Role</th>
								  <th>Type</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                            <?php foreach($broadcast_list as $message): ?>
                            
							<tr>
                                <td class="center"><?= formateDate($staff['acct_addon']) ?></td>
								<td class="center"><?= $staff['acct_id'] ?></td>
								<td class="center"><?= $staff['acct_role'] ?></td>
								<td class="center"><label class="label label-<?php if($staff['acct_status'] == "M") echo "info\">Mobile"; else echo "success\">Email";  ?></label></td>
								<td class="center"><?= formateBalance($staff['acct_balance']) ?></td>
							<td class="center">
									<a class="btn btn-info" href="javascript: void(0)" data-value="<?= $staff['acct_id'] ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="javascript: void(0)" data-value="<?= $staff['acct_id'] ?>">
										<i class="halflings-icon white trash"></i>  
									</a>
								</td>
							</tr>
                            <?php endforeach; ?>
                          </tbody>
                         </table>
                       </div>  
                     
                   </div>
                 </div>  
                          
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	<div class="clearfix"></div>
	
