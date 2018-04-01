 
        <!-- top-product modal start -->
		<div class="quick-view modal fade in" id="product-flash-modal">
			<div class="container-fluid">
				<div class="row">
                 <div class="col-md-12">
                  <div class="col-md-8 col-sm-12 margin-auto">
						<div class="col-xs-12">
									<div class="modal-dialog news-dialog">
										<div class="main-view padding-zero modal-content">
											<div class="modal-footer" data-dismiss="modal" id="close-modal">
												<span>x</span>                                                
											</div>
                                             <div class="panel">
                                                <div class="panel-heading news-panel-heading">  
                                    				<div class="row">
                                    					<div class="col-xs-12">
                                    						<div class="section-title">
                                    							<h3>Top Products</h3>
                                    							<div class="section-icon">
                                    							    <i class="fa fa-dot-circle-o" style="color:  #FFF;" aria-hidden="true"></i>
                                    							</div>
                                    						</div>
                                    					</div>
                                    				</div>
                                                  </div>
            <div class="panel-body">
                             <!-- news section start -->
       		   <div class="row">
					<div id="flash-product" class="owl-carousel product-slider owl-theme re-new-product">
                        <?php $cnt = 1; foreach($top_product as $product): ?>
						  <?php if($cnt % 2 == 0 || $cnt == 1): ?>
                            <div class="col-md-4"> 
                          <?php endif; ?>
                            <div class="single-product">
                                    <div class="product-img">
                                        <a href="<?= link_url('sp/home/'.$product['uacct_id'].'?product='.$product['prod_id']) ?>" target="_blank">
                                            <img src="<?= base_url('dist/img/products/'.$product['prod_img']) ?>" alt="<?= $product['prod_title'] ?>" />
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#"><?= $product['prod_title'] ?></a></h3>
                                        <h6><?= $product['c_name'] ?></h6>
                                        <span><i class="fa fa-phone"></i>+91 <?= $product['c_contact'] ?></span>
                                    </div>
                                    <div class="actions-btn">
                                        <a href="javascript: void(0)" data-placement="top" data-trigger="hover" data-value="<?= $product['prod_id'] ?>" data-original-title="Send Enquiry" class="send-enquiry"><i class="fa fa-paper-plane"></i></a>
                                    </div>
                            </div>
                        <?php if($cnt % 2 != 0): ?>
                        </div>
                        <?php endif; ?>
                       <?php $cnt++; endforeach; ?>    
					</div>
                        			</div>
                        		<!-- news section end -->
                                 </div>   
                               </div> 
							</div>
						  </div>
					   </div>
					</div>
                  </div>
				</div>
			</div>
		</div>
		<!-- top-product modal end -->
        