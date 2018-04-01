<?php if(isset($acct_target)): ?>
<div class="row-fluid hideInIE8 circleStats">
				<div class="span3" onTablet="span12" onDesktop="span3">
                	<div class="circleStatsItemBox pink">
						<div class="header">My Target</div>
						<span class="percent">%</span>
						<div class="circleStat">
                    		<input type="text" value="<?= $acct_target->complete_target ?>" class="whiteCircle" />
						</div>		
						<div class="footer">
							<span class="count">
								<span class="number"><?= $acct_target->complete_target ?></span>
								<span class="unit"></span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number"><?= $acct_target->total_target ?></span>
								<span class="unit"></span>
							</span>	
						</div>
                	</div>
				</div>
</div>
<?php endif; ?>
<div class="row-fluid">	

				<a class="quick-button metro yellow span2" href="<?= base_url("admin/user-list") ?>">
					<i class="icon-group"></i>
					<p>Users</p>
					<span class="badge"><?= $dash_count->user_count ?></span>
				</a>
				<a class="quick-button metro green span2" href="<?= base_url("admin/product-list") ?>">
					<i class="icon-barcode"></i>
					<p>Products</p>
					<span class="badge"><?= $dash_count->prod_count ?></span>
				</a>
				<a class="quick-button metro blue span2" href="<?= base_url("admin/user-order") ?>">
					<i class="icon-shopping-cart"></i>
					<p>Orders</p>
					<span class="badge"><?= $dash_count->order_count ?></span>
				</a>
				<a class="quick-button metro pink span2" href="<?= base_url("admin/user-enquiries") ?>">
					<i class="icon-money"></i>
					<p>Enquiries</p>
					<span class="badge"><?= $dash_count->general_enquiry +  $dash_count->prod_enquiry ?></span>
				</a>
				
				<div class="clearfix"></div>
								
			</div><!--/row-->

			<div class="row-fluid">
				
				<div class="widget blue span12" onTablet="span12" onDesktop="span12">
					
					<h2><span class="glyphicons globe"><i></i></span> Bussiness Area</h2>
					
					<hr>
					
					<div class="content">
						
						<div class="verticalChart">
						<?php foreach($my_area as $area): ?>	
							<div class="singleBar">
							
								<div class="bar">
								
									<div class="value">
										<span>37%</span>
									</div>
								
								</div>
								
								<div class="title">
								<?php if(in_array($this->session->userdata('type'), $state_area)){

												echo $area['state_name'];

									  }else if(in_array($this->session->userdata('type'), $dist_area)){ 	
												echo  $area['dist_name']; 

									   }elseif (in_array($this->session->userdata('type'), $pincode_area)) {
									   			echo $area['pincode'];						   	
									   }		
								?>
									
								</div>
							
							</div>	
						<?php endforeach; ?>	
							<div class="clearfix"></div>
							
						</div>
					
					</div>	
			</div>
			
			<div class="row-fluid">
				
				<div class="box black span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white list"></i><span class="break"></span>Month Activities</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list metro">
							<li>
								<a href="#">
									<i class="icon-arrow-up green"></i>                               
									<strong><?= $month_activity->prod_count ?></strong>
									New products uploaded                                    
								</a>
							</li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down red"></i>
							  <strong><?= $month_activity->user_count; ?></strong>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-shopping-cart yellow"></i>
							  <strong><?= $month_activity->expo_count ?></strong>
							  product added into Expo list                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-up green"></i>                               
							  <strong><?= $month_activity->top_count ?></strong>
							  Products added into top list                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-shopping-cart red"></i>
							  <strong><?= $month_activity->order_count ?></strong>
							   Orders
							</a>
						  </li>
						</ul>
					</div>
				</div><!--/span-->
			
			</div>
			
	</div><!--/.fluid-container-->