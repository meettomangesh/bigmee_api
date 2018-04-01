    <header>
      <div class="header-top supplier-top-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="left-header clearfix">
                <ul>
                  <li><p><i class="fa fa-phone" aria-hidden="true"></i>093 26 950 950</p></li>
                  <li class="hd-none"><p><i class="fa fa-email" aria-hidden="true"></i>info@bigmee.com</p></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="right-header">
                <ul>
                  <li><a href="<?= base_url() ?>"><i class="fa fa-home"></i>Home</a></li>
                  <li><a href="<?= link_url('supplier/dashboard') ?>"><i class="fa fa-user"></i><?= $profile->uacct_email ?></a></li>
                  <li><a href="<?= link_url('account/signout') ?>"><i class="fa fa-sign-out"></i>Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom header-bottom-one header-bottom-supplier" id="sticky-menu">
        <div class="container-fluid relative">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 logo-center">
                         <div class="supplier-company-logo">
                <a href="<?= link_url('supplier/dashboard') ?>">
                                    <img src="<?= base_url(showData('dist/img/clogo/thumb/'.$profile->c_logo));  ?>" alt="<?= $profile->c_name ?>" />
                                </a>
             </div>
                         <div class="company-heading">
                              <h4><?= showData($profile->c_name, "Your company name"); ?></h4>
                              <h5><?= showData($profile->c_slogan, "Your company slogan"); ?></h5>
                         </div>
                        </div>
            <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2 static">
              <div class="all-manu-area">
                  <div class="mainmenu clearfix hidden-sm hidden-xs supplier-nav">
                                    <nav>
                                        <ul>
                                          <li><a href="<?= link_url('supplier/dashboard') ?>">Dashboard</a></li>
                                          <li><a href="#">Home</a>
                                              <ul>
                                                 <li><a target="_blank" href="<?= link_url('sp/home/'.$profile->uacct_id) ?>">My Home</a></li>
                                                 <li><a href="<?= link_url('supplier/basic-profile') ?>">Basic Profile</a></li>
                                                 <li><a href="<?= link_url('supplier/company-profile') ?>">Company</a></li>
                                                 <li><a href="<?= link_url('supplier/about-company') ?>">About Page</a></li>
                                                 <li><a href="<?= link_url('supplier/upload-gallery') ?>">Gallery</a></li>
                                                 <li><a href="<?= link_url('supplier/upload-kyc') ?>">Document</a></li>
                                                 <li><a href="<?= link_url('supplier/password-change') ?>">Password</a></li>
                                              </ul>
                                          </li>
                                          <li><a href="#">Manage</a>
                                              <ul>
                                                 <li><a href="<?= link_url('supplier/products') ?>">Products</a></li>
                                                 <li><a href="<?= link_url('supplier/extra-product-list') ?>">Pramotion</a></li>  
                                                 <li><a href="<?= link_url('supplier/manage-contact') ?>">Contact</a></li>
                                                 <li><a href="<?= link_url('supplier/user-plans') ?>">Plan</a></li>
                                                 <li><a href="<?= link_url('supplier/user-events') ?>">Event</a></li>
                                                 <li><a href="<?= link_url('supplier/business-category') ?>">Category</a></li> 
                                                 <li><a href="<?= link_url('supplier/courier-partner') ?>">Courier Partner</a></li>       
                                              </ul>
                                          </li>
                                          <li><a href="#">Support</a>
                                              <ul>
                                               <li><a href="<?= link_url('supplier/balance-info') ?>">Transaction</a></li>
                                                 <li><a href="<?= link_url('supplier/message') ?>">Message</a></li>
                                                 <li><a href="<?= link_url('supplier/company-support') ?>">Company</a></li>
                                              </ul>
                                          </li>
                                          <li><a href="#">Account</a>
                                             <ul>
                                               <li><a href="<?= link_url('supplier/payment-info') ?>">Payment</a></li>
                                               <li><a href="<?= link_url('supplier/transfer') ?>">Balance</a></li>
                                             </ul>
                                          </li>
                                          <li><a href="#">Business</a>
                                            <ul>
                                                <li><a href="<?= link_url('supplier/user-requirements') ?>">Requirement</a></li>
                                                <li><a href="<?= link_url('supplier/refer-income') ?>">Refer discount</a></li>
                                            </ul>
                                          </li>
                                          <li><a href="<?= base_url('supplier/downloads') ?>">Download</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- mobile menu start -->
                                <div class="mobile-menu-area hidden-lg hidden-md">
                                    <div class="mobile-menu">
                                     <nav id="dropdown" style="display:none;">
                                        <ul>
                                          <li><a href="<?= link_url('supplier/dashboard') ?>">Dashboard</a></li>
                                          <li><a href="#">Home</a>
                                            <ul>
                                                <li><a target="_blank" href="<?= link_url('sp/home/'.$profile->uacct_id) ?>">My Home</a></li>
                                                <li><a href="<?= link_url('supplier/basic-profile') ?>">Basic Profile</a></li>
                                                <li><a href="<?= link_url('supplier/company-profile') ?>">Company Profile</a></li>
                                                <li><a href="<?= link_url('supplier/about-company') ?>">About Page</a></li>
                                                <li><a href="<?= link_url('supplier/upload-gallery') ?>">Gallery</a></li>
                                                <li><a href="<?= link_url('supplier/upload-kyc') ?>">Upload KYC</a></li>
                                                <li><a href="<?= link_url('supplier/password-change') ?>">Change Password</a></li>
                                            </ul>
                                          </li>
                                          <li><a href="#">Manage</a>
                                              <ul>
                                                 <li><a href="<?= link_url('supplier/products') ?>">Products</a></li>
                                                 <li><a href="<?= link_url('supplier/extra-product-list') ?>">Pramotion</a></li>  
                                                 <li><a href="<?= link_url('supplier/manage-contact') ?>">Contact</a></li>
                                                 <li><a href="<?= link_url('supplier/user-plans') ?>">Plan</a></li>
                                                 <li><a href="<?= link_url('supplier/user-events') ?>">Event</a></li>
                                                 <li><a href="<?= link_url('supplier/business-category') ?>">Category</a></li>
                                                 <li><a href="<?= link_url('supplier/courier-partner') ?>">Courier Partner</a></li>        
                                              </ul>
                                          </li>
                                          <li><a href="#">Support</a>
                                                <ul>
                                                   <li><a href="<?= link_url('supplier/balance-info') ?>">Transaction</a></li>
                                                   <li><a href="<?= link_url('supplier/message') ?>">Message</a></li>
                                                   <li><a href="<?= link_url('supplier/company-support') ?>">Company</a></li>
                                                </ul>
                                          </li>
                                          <li><a href="#">Account</a>
                                             <ul>
                                               <li><a href="<?= link_url('supplier/payment-info') ?>">Payment</a></li>
                                               <li><a href="<?= link_url('supplier/transfer') ?>">Balance</a></li>
                                             </ul>
                                          </li>
                                          <li><a href="#">Business</a>
                                            <ul>
                                                <li><a href="<?= link_url('supplier/user-requirements') ?>">Requirement</a></li>
                                                <li><a href="<?= link_url('supplier/refer-income') ?>">Refer discount</a></li>
                                            </ul>
                                          </li>
                                          <li><a href="<?= base_url('supplier/downloads') ?>">Download</a></li>
                                          <li><a href="<?= base_url('account/signout') ?>">Logout</a></li>
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