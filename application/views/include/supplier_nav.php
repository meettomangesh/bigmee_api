		<header>
			<div class="header-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-4">
							<div class="left-header clearfix">
								<ul>
									<li><p><i class="fa fa-phone" aria-hidden="true"></i><?= $sp_profile->primary_contact ?></p></li>
									<li class="hd-none"><p><i class="fa fa-email" aria-hidden="true"></i><?= $sp_profile->uacct_email ?></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-sm-8">
							<div class="right-header">
								<ul>
									<li><a href="<?= base_url() ?>"><i class="fa fa-home"></i>Home</a></li>
									
									<li><a href="javascript: void(0)" id="loginLinkBtn"><i class="fa fa-lock"></i>Login</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom header-bottom-one" id="sticky-menu">
				<div class="container-fluid relative" style="padding-bottom: 10px;">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 logo-center">
						  <a href="<?= link_url('sp/home/'.$sp_profile->uacct_id) ?>">
	                         <div class="supplier-company-logo" style="background: url(<?= base_url('dist/img/clogo/thumb/'.$sp_profile->c_logo); ?>) no-repeat left center;height: 70px;margin-top: 10px;background-size: contain;">
							</div>
						  </a>	
                         <div class="company-heading" style="vertical-align: top;">
                              <h4><?= $sp_profile->c_name ?></h4>
                              <h5><?= $sp_profile->c_slogan ?></h5>
                         </div>
                        </div>
                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="col-lg-12 col-md-12 col-sm-2 col-xs-2 static pull-right">
							<div class="all-manu-area">
							    <div class="mainmenu clearfix hidden-sm hidden-xs">
                                    <nav>
                                        <ul>
                                            <li><a href="<?= link_url('sp/home/'.$sp_profile->uacct_id) ?>">Home</a></li>
                                            <li><a href="<?= link_url('sp/about/'.$sp_profile->uacct_id) ?>">About Us</a></li>
                                            <li><a href="<?= link_url('sp/gallery/'.$sp_profile->uacct_id) ?>">Gallery</a></li>
                                            <li><a href="<?= link_url('sp/contact/'.$sp_profile->uacct_id) ?>">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- mobile menu start -->
                                <div class="mobile-menu-area hidden-lg hidden-md">
                                    <div class="mobile-menu">
                                        <nav id="dropdown" style="display:none;">
                                                <ul>
                                                    <li><a href="<?= link_url('sp/home/'.$sp_profile->uacct_id) ?>">Home</a></li>
                                                    <li><a href="<?= link_url('sp/about/'.$sp_profile->uacct_id) ?>">About Us</a></li>
                                                    <li><a href="<?= link_url('sp/gallery/'.$sp_profile->uacct_id) ?>">Gallery</a></li>
                                                    <li><a href="<?= link_url('sp/contact/'.$sp_profile->uacct_id) ?>">Contact Us</a></li>
                                                </ul>  
                                        </nav>
                                    </div>
                                </div>
                                <!-- mobile menu end -->
                                <div class="right-header re-right-header">
                                    <ul>
                                    </ul>
                                </div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-8 col-xs-8">
							<form method="get" class="searchform" action="<?= base_url('sp/home/'.$sp_profile->uacct_id) ?>">
                              <div class="form-group">
                               <input type="text" class="form-control" name="q" id="ws-sp" data-user-id="<?= $this->uri->segment(3) ?>" value="<?= $this->input->get('q') ?>" placeholder="Search product here..." />
                               <button type="submit"><i class="pe-7s-search"></i></button>
                              </form>
                           </div>
						</div>
                      </div>  
					</div>
				</div>
			</div>
		</header>
        <!-- header section end -->