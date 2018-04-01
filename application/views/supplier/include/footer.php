        <!-- footer section start -->
		<footer class="re-footer-section">
			<!-- footer-top area start -->
			<div class="footer-top" style="padding-top: 20px;">
				<div class="footer-dsc">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="single-text res-text">
									<div class="footer-title">
										<h4>Contact us</h4>
										<hr class="dubble-border"/>
									</div>
									<div class="footer-text">
										<ul>
											<li>
												<i class="pe-7s-map-marker"></i>
												<p>OMBIZ TECHNO SERVICES PVT.LTD.<br>
												1st Floor Vighnaharta Palace,<br>
												Old Pimpalgaon-Malavi Road,<br>
												Ekvira Chawk, Pipeline Road, Savedi, <br>
												Ahmednagar, Maharashtra-414003.</p>
											</li>
											<li>
												<i class="pe-7s-call"></i>
												<p>093 26 950 950</p>
											</li>
											<li>
												<i class="pe-7s-mail-open"></i>
												<p>info@bigmee.com</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6 col-md-6 margin-top">
								<div class="single-text res-text">
									<div class="footer-title">
										<h4>NEWSLETTER</h4>
										<hr class="dubble-border"/>
									</div>
									<div class="footer-text">
										<p> Always company gives a best offer for his regular customer by mail, so you can subscribe here absolutely free
                                        </p>
										<form action="#" method="post">
											<input type="text" name="email" placeholder="Enter your mail" />
											<input type="submit" value="Subscribe" />
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr class="dubble-border"/>
				</div>
				<div class="social-media">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="paypal social-icon">
									<ul>
										<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
										<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
										<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
										<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
										<li><a href="#"><i class="fa fa-cc-stripe"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="social-icon">
									<ul class="floatright">
										<li class="res-mar"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-top area end -->
			<!-- footer-bottom area start -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<p>&copy; <?= date('Y')?> Fivecube Info Services. All rights reserved.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom area end -->
		</footer>
        <!-- footer section end -->
        
<!-- all js here -->
		<!-- jquery-ui js -->
        <script src="<?= base_url('dist/js/jquery-ui.min.js') ?>"></script>
		<!-- plugins js -->
        <script src="<?= base_url('dist/js/plugins.js') ?>"></script>
		<!-- meanmenu js -->
        <script src="<?= base_url('dist/js/jquery.meanmenu.js') ?>"></script>
		<!-- sticky js -->
        <script src="<?= base_url('dist/js/sticky.js') ?>"></script>
        <!-- LobiBox plugin -->
        <script src="<?= base_url('dist/lobibox-master/dist/js/lobibox.min.js') ?>"></script>
		<!-- bootstrap js -->
        <script src="<?= base_url('dist/js/bootstrap.min.js') ?>"></script>
		<!-- datatable js -->
        <script src="<?= base_url('dist/dataTable/js/jquery.dataTables.js') ?>"></script>
        <!-- Datepicker Full -->
		<script src="<?= base_url('dist/js/jquery.datetimepicker.full.min.js') ?>"></script>
		<?php if($this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == ''): ?>
		<!-- owl.carousel js -->
        <script src="<?= base_url('dist/js/owl.carousel.min.js') ?>"></script>
        <?php endif; ?>
        <!-- JCrop Plugin -->
        <script src="<?= base_url('dist/cropper/dist/cropper.min.js') ?>"></script>
        
	    <script src="<?= base_url('dist/js/jquery.fancybox.js') ?>"></script>
        <!-- Helper Js -->
        <script src="<?= base_url('dist/js/helper.js') ?>"></script> 
	<!-- main js -->
        <script src="<?= base_url('dist/js/main.js') ?>"></script>
        <?php if(isset($js)) print set_js($js);   ?>
        
        
    </body>
</html>
