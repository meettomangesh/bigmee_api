
  <!-- expo-products section start -->
		<section class="new-products single-products section-padding-top section-padding-bottom re-new-product re-new-product2">	    
			<div class="container">
<?php if($expo): ?>	
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title">
							<h3><?= $expo->expo_title ?></h3>
							<div class="section-icon">
							    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h4>Times Left</h4>
                        <div class="timer">
                            <div data-countdown="<?= str_replace('-', '/', $expo->expend_date) ?>"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2 col-sm-12">
                      <div class="about-expo">  
                        <h4>About Expo</h4>
                        <!-- brand section start -->
                           <section>
                    			<div id="expo-details" class="re-owl-carousel21 owl-carousel product-slider owl-theme expo-box">
                    				<div class="col-lg-12 col-sm-12 text-center">
                    						  <h5>Start Date</h5>
                                            <p><?= formateDate($expo->expstart_date) ?></p>
                   					</div>
                                    <div class="col-lg-12 col-sm-12 text-center">
                    						<h5>End Date</h5>
                                             <p><?= formateDate($expo->expend_date) ?></p>
                   					</div>
                                    <div class="col-lg-12 col-sm-12 text-center">
                    						<h5>Expo Category</h5>
                                            <span><?= $expo->mcat_name ?></span>
                                            <p><?= $expo->about_expo ?></p>
               					     </div>
                    				</div>
                           </section>
                           <!--  section end -->
             			</div>
                      </div>  
                    </div>
                    <hr />
                <section class="section">
				<div class="row">
					<div id="expo-products" class="owl-carousel product-slider owl-theme">
                     <?php $cnt = 1; foreach($expo_product as $product): ?>
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
               </section>
               <?php else: ?>
                <h4 class="text-danger text-center">Currently no expo arranged</h4>
               <?php endif; ?>
			</div>
		</section>
		<!-- expo -products section end -->