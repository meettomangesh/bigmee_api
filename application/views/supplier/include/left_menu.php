<script src="<?= base_url('dist/js/accordion-menu.js?v=1.1') ?>"></script>

      
<section class="section-padding-bottom">
    <div class="container">
     <div class="row sp-news-scroller">
     <ul>
        <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
        <?php foreach($broadcasted_news as $news): ?>
            <li><?= $news['news_title'] ?> - <?= $news['news_content'] ?></li>
        <?php endforeach; ?>    
        </marquee>
     </ul>
     </div> 
            <div class="col-lg-2 col-md-3 left-menu">
            <div class="row">
             <div class="supplier-profile">
                <div class="main-dp-img col-md-4">
                    <img src="<?php if(!empty($profile->dp_img)){echo base_url('dist/img/dp/thumb/'.$profile->dp_img); }else{echo base_url('dist/img/alt/no-dp.jpg');} ?>" alt="profile-pic" class="img-circle">
                </div>
                <div class="col-md-8 main-profile">
                    <ul>
                        <li class="user-name"><strong><?= $profile->user_name ?></strong></li>
                        <li class="user-balance"><?= formateBalance($profile->acct_balance) ?></li>
                        <li class="user-wallet"><?= formateBalance($profile->acct_wallet) ?></li>
                        <li class="user-lock"><?= formateBalance($profile->acct_lock) ?></li>
                        <li class="user-name"><?= $profile->uacct_suid ?></li>
                    </ul>
                </div>
             </div>
            </div>
            <hr />
            <h4>Quick Menu</h4>
            <div id="accordion">
                <ul>
                  <li><a href="<?= link_url('supplier/dashboard') ?>">Dashboard</a></li>
                  <li><div>Home</div>
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
                  <li><div>Manage</div>
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
                  <li><div>Support</div>
                      <ul>
                         <li><a href="<?= link_url('supplier/balance-info') ?>">Transaction</a></li>
                         <li><a href="<?= link_url('supplier/message') ?>">Message</a></li>
                         <li><a href="<?= link_url('supplier/company-support') ?>">Company</a></li>
                      </ul>
                  </li>
                  <li><div>Account</div>
                      <ul>
                         <li><a href="<?= link_url('supplier/payment-info') ?>">Payment</a></li>
                         <li><a href="<?= link_url('supplier/transfer') ?>">Balance</a></li>
                      </ul>
                  </li>
                  <li><div>Business</div>
                      <ul>
                         <li><a href="<?= link_url('supplier/user-requirements') ?>">Requirement</a></li>
                         <li><a href="<?= link_url('supplier/refer-income') ?>">Refer Discount</a></li>
                      </ul>
                  </li>
                  <li><a href="<?= base_url('supplier/downloads') ?>">Download</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>