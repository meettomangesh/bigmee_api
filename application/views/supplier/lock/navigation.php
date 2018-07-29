
        <!-- header section start -->
		<header>
			<div class="header-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-4">
							<div class="left-header clearfix">
								<ul>
									<li><p><i class="fa fa-phone" aria-hidden="true"></i>093 26 950 950</p></li>
									<li class="hd-none"><p><i class="fa fa-email" aria-hidden="true"></i>info@bigmee.com</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-sm-8">
							<div class="right-header">
								<ul>
									<li><a href="<?= link_url('pages/index') ?>"><i class="fa fa-home"></i>Home</a></li>
									<li><a href="<?= link_url('supplier/dashboard') ?>"><i class="fa fa-user"></i><?= $profile->uacct_email ?></a></li>
									<li><a href="<?= link_url('account/signout') ?>"><i class="fa fa-sign-out"></i>SignOut</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom header-bottom-one" id="sticky-menu">
				<div class="container-fluid relative">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 logo-center">
                         <div class="supplier-company-logo">
								<a href="<?= link_url('supplier/dashboard') ?>">
                                    <img src="<?= base_url(showData('dist/img/clogo/'.$profile->c_logo));  ?>" alt="<?= $profile->c_name ?>" />
                                </a>
						 </div>
                         <div class="company-heading">
                              <h3><?= showData($profile->c_name, "Your company name"); ?></h3>
                              <h5><?= showData($profile->c_slogan, "Your company slogan"); ?></h5>
                         </div>
                        </div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-2 static">
							<div class="all-manu-area">
							    <div class="mainmenu clearfix hidden-sm hidden-xs supplier-nav">
                                    <nav>
                                        <ul>
                                            <li><a href="<?= link_url('supplier/user-plans') ?>">Plan</a></li>
                                            <li><a href="<?= link_url('supplier/balance-info') ?>">Balance</a></li>
                                            <li><a href="<?= link_url('supplier/payment-info') ?>">Payment</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- mobile menu start -->
                                <div class="mobile-menu-area hidden-lg hidden-md">
                                    <div class="mobile-menu">
                                     <nav id="dropdown">
                                        <ul>
                                          <li><a href="<?= link_url('supplier/dashboard') ?>">Dashboard</a></li>
                                          <li><a href="#">Home</a>
                                            <ul>
                                                <li><a target="_blank" href="<?= link_url('sp/home/'.$profile->uacct_id) ?>">My Home</a></li>
                                                <li><a href="<?= link_url('supplier/basic-profile') ?>">Basic Profile</a></li>
                                                <li><a href="<?= link_url('supplier/company-profile') ?>">Company Profile</a></li>
                                                <li><a href="<?= link_url('supplier/about-company') ?>">About Page</a></li>
                                                <li><a href="<?= link_url('supplier/contact-company') ?>">Contact Page</a></li>
                                                <li><a href="<?= link_url('supplier/upload-gallery') ?>">Gallery</a></li>
                                                <li><a href="<?= link_url('supplier/password-change') ?>">Change Password</a></li>
                                            </ul>
                                          </li>
                                          <li><a href="#">Manage</a>
                                             <ul>
                                               <li><a href="#">Products</a>
                                                 <ul> 
                                                    <li><a href="<?= link_url('supplier/products') ?>">New Product</a></li>
                                                    <li><a href="<?= link_url('supplier/products-list') ?>">All Products</a></li>
                                                    <li><a href="<?= link_url('supplier/extra-product-list') ?>">Top products</a></li>
                                                  </ul>
                                                </li>     
                                                <li><a href="<?= link_url('supplier/manage-contact') ?>">Contact</a></li>
                                                <li><a href="<?= link_url('supplier/user-plans') ?>">Plan</a></li>
                                                <li><a href="<?= link_url('supplier/user_events') ?>">Event</a></li>
                                             </ul>
                                          </li>
                                          <li><a href="#">Support</a>
                                                <ul>
                                                   <li><a href="<?= link_url('supplier/message') ?>">Message</a></li>
                                                   <li><a href="<?= link_url('supplier/company-support') ?>">Company</a></li>
                                                </ul>
                                          </li>
                                          <li><a href="#">Account</a>
                                             <ul>
                                               <li><a href="<?= link_url('supplier/balance-info') ?>">Balance</a></li>
                                               <li><a href="<?= link_url('supplier/payment-info') ?>">Payment</a></li>
                                             </ul>
                                          </li>
                                          <li><a href="#">Business</a>
                                            <ul>
                                                <li><a href="<?= link_url('supplier/user-requirements') ?>">Requirement</a></li>
                                                <li><a href="<?= link_url('supplier/refer-income') ?>">Refer Income</a></li>
                                            </ul>
                                          </li>
                                          <li><a href="<?= base_url('supplier/downloads') ?>">Download</a></li>
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
					</div>
				</div>
			</div>
		</header>
        <!-- header section end -->