        <header>
            <div class="header-top" style="padding-bottom: 2px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="left-header clearfix">
                                <ul>
                                    <li><p><i class="fa fa-phone" aria-hidden="true"></i>093 26 950 950</p></li>
                                    <li class="hd-none"><p><i class="fa fa-email" aria-hidden="true"></i>info@bigmee.com</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="navigation-btns">
                                <a href="javascript: void(0)" id="supplier-signup" class="btn free-joining">Free Joining</a>
                                <a href="javascript: void(0)" id="send-enquiry" class="btn login-btn">Requirement</a>
                                <a href="javascript: void(0)" id="loginLinkBtn" class="btn login-btn"><i class="fa fa-lock"></i>Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-bottom-one" id="sticky-menu">
                <div class="container-fluid relative">
                        <div class="col-md-2 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="<?= base_url() ?>"><img class="logo-img" src="<?= base_url('dist/img/logo1.png') ?>" alt="BigMart" /></a>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xs-12">
                           <div class="col-md-12 col-sm-10 col-xs-1 static pull-right">
                            <div class="all-manu-area">
                                <div class="mainmenu clearfix hidden-sm hidden-xs">
                                    <nav>
                                        <ul>
                                            <li><a href="<?= base_url() ?>">Home</a></li>
                                            <li><a href="<?= link_url('pages/about-us') ?>">About Us</a></li>
                                            <li class="mainMemuBaseCategory"><a href="<?= base_url('pages/product-view') ?>">Products</a>
                                                <div class="magamenu ">
                                                    <ul class="again"></ul>
                                                </div>
                                            </li>
                                            <li><a href="<?= link_url('pages/how-it-works') ?>">Business</a></li>
                                            <li><a href="<?= link_url('pages/event') ?>">Event</a></li>
                                            <li><a href="<?= link_url('pages/expo') ?>">Expo</a></li>
                                            <li><a href="<?= link_url('pages/gallery') ?>">Gallery</a></li>
                                            <li><a href="<?= link_url('pages/contact-us') ?>">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- mobile menu start -->
                                <div class="mobile-menu-area hidden-lg hidden-md">
                                    <div class="mobile-menu">
                                        <nav id="dropdown" style="display:none;">
                                        <ul>
                                            <li><a href="<?= base_url() ?>">Home</a></li>
                                            <li><a href="<?= link_url('pages/about-us') ?>">About Us</a></li>
                                            <li class="mainMemuBaseCategory"><a href="<?= base_url('pages/product-view') ?>">Products</a>
                                                <div class="magamenu">
                                                    <ul class="again"></ul>
                                                </div>
                                            </li>
                                            <li><a href="<?= link_url('pages/how-it-works') ?>">How It Works</a></li>
                                            <li><a href="<?= link_url('pages/event') ?>">Event</a></li>
                                            <li><a href="<?= link_url('pages/expo') ?>">Expo</a></li>
                                            <li><a href="<?= link_url('pages/contact-us') ?>">Contact Us</a></li>
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
                        <div class="col-md-12 col-sm-10 col-xs-10">
                            <form method="get" class="searchform" action="<?= link_url('pages/product-view') ?>">
                              <div class="form-group">
                                <div class="auto-complete" style="position: relative;">
                                 <input type="text" class="form-control ui-autocomplete-input" autocomplete="off" name="q" value="<?= $this->input->get('q') ?>" id="ws" placeholder="Search product here..." />
                                </div>
                               <button type="submit"><i class="pe-7s-search"></i></button>
                              </div>  
                            </form>
                        </div>
                      </div>  
                    </div>
            </div>
        </header>
        <!-- header section end -->
<?php if($this->uri->segment(1) == ''): ?>
<!-- Telecom services navigation -->  
<section>
    <div class="row tele-nav-header">
        <div class="col-md-12 col-sm-10 col-xs-10">
            <div class="all-manu-area">
                <div class="mainmenu clearfix hidden-sm hidden-xs">
                    <nav>
                        <ul class="tele-main-menu">
                            <li><a href="#">MOBILE</a>
                                <div class="magamenu ">
                                    <ul class="again tele-services">
                                        <li>
                                            <a href="#">
                                                <img alt="Aircel mobile" title="Aircel mobile" src="https://ci4.googleusercontent.com/proxy/uTq0DYWSRxBphVOJ0sYTyDcPCdwrLvGfmJZF32NZujnaaefv0eIIkytfXhRN2GxzSnZmBg5gFa6oPS5sPtcwWUOvtOhOv-38w07106iFIyUZAvi8zuN3cA=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1467617312601.png">
                                                <span>Aircel mobile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Airtel mobile" title="Airtel mobile" src="https://ci4.googleusercontent.com/proxy/hiFC7OqSzRSqofVEOxaMqVfVvtJDvqtRMStZUk46tB2zPQdtN8oqTLcsNZQ8sZt1DAH3nyC5wc3QfS3FV6L33AMGaih0ZC3rijmxNK3phWEv19w4_-aQCg=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1467617327152.png">
                                                <span>Airtel mobile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="BSNL mobile" title="BSNL mobile" src="https://ci3.googleusercontent.com/proxy/lMgpUIOVYw5R6Pa8hJksO9tw86fO0mTlviSkqR6C_ZIsgRfZ75CKM8fgK4FUy-9RJdgwRV4gcacCFCNV5xEvWv4e2Y8Mgs7aHKCltQ0CamG99KKruYXd0w=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1467617347134.png">
                                                <span>BSNL mobile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Idea mobile" title="Idea mobile" src="https://ci3.googleusercontent.com/proxy/9Ww-oW_QeKv0x_Ruct7BrAVaBp8uCFOFQrDYS62-72y7aKOSseH4SNKGvI2pEzYzRscFYqAxQJjmm0P4hWzU5lDveA2_n_86JkMQ3kBBr7oDl8HcxDf_Rw=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1467617370351.png">
                                                <span>Idea mobile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Jio mobile" title="Jio mobile" src="https://ci4.googleusercontent.com/proxy/G5SjpDzHJFIj-j_MD0IrBYcS1j4G-qizfrrNyZ5gmAU9L_VOIRvRaNtU0xFeV-TSlIP7Zx65oJx8IyFDK-RJ_NvwbJinhudvb_i7zWhdBO6XqboTBPulkw=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1488207273886.png">
                                                <span>Jio mobile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="MTNL mobile" title="MTNL mobile" src="https://ci6.googleusercontent.com/proxy/eu1n1oViTI_pIJp4x7niSxNtqepvE7mT_yhjIyAFqaNVaqm-ZQumRPSNQEJgFsmKAdlws6vDheUwXcgaRvNXJESPfkgChB4ng81_hakun_r6T57fDX3S0A=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1467617360144.png">
                                                <span>MTNL mobile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="MTS mobile" title="MTS mobile" src="https://ci3.googleusercontent.com/proxy/FMhNMQPhdMJpr0_ygCYpnosPhUArvdPOSAxJnoYKF_G9UQp1G1Z4rEHWha4OLPI1xMGIlGMyVpkdxIknMVeNML07HaBYyY64-fYh2oZcKSH6JfgZYWc50A=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1467617472275.png">
                                                <span>MTS mobile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Reliance GSM mobile" title="Reliance GSM mobile" src="https://ci5.googleusercontent.com/proxy/TbjJsOYDvfbpOU1qsiHiV2iCYHzXZ2y6jN3mbSElIe6hu_c38Pyb9RbI_HV1A5oTTxt_c9G5JX1twfzGLE9GJNz9g8sD2sZEV_65spa3-4fooDeqWRUCww=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1467617413579.png">
                                                <span>Reliance GSM mobile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Reliance Mobile" title="Reliance Mobile" src="https://ci4.googleusercontent.com/proxy/VPBhq2AFIRezHohFHGfduOERojZ9AfmwzBQbCn5eP17v16BZ638a-eJYOLBX_YtEnad_kN4v9tUIhgwJqF3gfFS0_65ASTngDui7_qJwdsea4EcB1kC25w=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1476276156981.png">
                                                <span>Reliance mobile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="T24 mobile" title="T24 mobile" src="https://ci6.googleusercontent.com/proxy/6rN22vKeuBvj1pSivnvDAQRhtxi5nwHFVIVJgH8Y5rPTNbuaEGcusg9XLS6u5FT-3LytNorGGZy2IHUUoQSWNMqnK5OSFeb8T-doHM1xiM4wc9i93jriQw=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1467617440954.png">
                                                <span>T24 mobile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Tata DOCOMO mobile" title="Tata DOCOMO mobile" src="https://ci6.googleusercontent.com/proxy/9LIEsw2pW4pEZRtpn2WraG4GxFqKOZQzAjMQ0MlEsItGFfCJWHHhqMkVhe6jzY7Cm7Aq4x7ibcCTHHLd2Zzd7WcG4vQfSCYt49ChUSh_qmz8r3OeHZlPoA=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1485868748141.jpg">
                                                <span>Tata DOCOMO mobile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Tata Indicom mobile" title="Tata Indicom mobile" src="https://ci6.googleusercontent.com/proxy/a24Eemnma2uRIpFvU0Qy5SAeIP0twstfxwxns2E51qkQ0U972qnEf5g_PHiYXaCSqnOm1w_TlVtaXt9o9c6nHAwMgFjVQmOP1N_bzG4xoS9O_4BcHMbTVA=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1501490022643.jpg">
                                                <span>Tata Indicom mobile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Telenor mobile" title="Telenor mobile" src="https://ci3.googleusercontent.com/proxy/MYOfI9uf4bUZfd7Znu69WTKDqOHee-G-vC7arsY8DcyV_vYK39pq7Ote0NhaKsSdcmfsLdZLJ7PwQxfaVq1Fz8ZUUnLnuwbF_2crI1gafDmG_cdLp7e4sA=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1467617427934.png">
                                                <span>Telenor mobile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Vodafone mobile" title="Vodafone mobile" src="https://ci6.googleusercontent.com/proxy/qA6uPZWv5tDccvAvOZu2eLfE978d_Lpunr5cdCXcX4_2a2mw-OwU89phvWUTfiCjnr3N0acNQ5Db9Prn-4Itg79v7H36Z-KGMvA2OnY9uygCoUYGrt6l3A=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1467617457943.png">
                                                <span>Vodafone mobile</span>
                                            </a>
                                        </li>                                        
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">DTH</a></li>
                            <li><a href="#">CABLE</a></li>
                            <li><a href="#">DATA CARD</a></li>
                            <li><a href="#">BROADBAND</a></li>
                            <li><a href="#">LANDLINE</a></li>
                            <li><a href="#">ELECTRICITY</a></li>
                            <li><a href="#">INSURANCE</a></li>
                            <li><a href="#">GAS</a>
                                <div class="magamenu ">
                                    <ul class="again tele-services">
                                        <li>
                                            <a href="#">
                                                <img alt="Adani Gas Limited" title="Adani Gas Limited" src="https://ci6.googleusercontent.com/proxy/XGcBvdqeksXee_R9q0xZ9sTlCH8dQGLaaNvY85771XSACiLbChT1Xu_L9MJnp96NtMvC_eRMj99jUJZ5wc_O4io34QvCueN0l-9zalaY468tNx8cHfmn_g=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1487871229780.jpg">
                                                <span>Adani Gas Limited</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Indraprastha Gas Limited" title="Indraprastha Gas Limited" src="https://ci4.googleusercontent.com/proxy/50VDDJE50cOxOjmJwneZZK_1YJuBZKNbxuYijm0iiobHRYKvqOLL7UAHOXtl3ZCnlKsfSRBLl1loNeeP3FrQh5475TjiJELaKe0JkGBv59wP8mURRKkoag=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1488782937499.jpg">
                                                <span>Indraprastha Gas Limited</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Mahanagar Gas- Mumbai" title="Mahanagar Gas- Mumbai" src="https://ci3.googleusercontent.com/proxy/XJO7Dd7OV20AJtGMZg4NBgmFiwDgrl2RcBxF_t5ji_EeowiJfbnqONQpEUVw-e-WNnlXv52BlS5dx1e6MtNmtTc5RaYIhewvEbDHwqGgZcEQ1vZQQQCL2g=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1488199936175.jpg">
                                                <span>Mahanagar Gas- Mumbai</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Siti Energy Ltd gas" title="Siti Energy Ltd gas" src="https://ci3.googleusercontent.com/proxy/kxJ4E3T2BHaZ2jkaT6Gkubj918--tVe6A5sCWtS_QcmY2EfGMVjVXEnXD91jH83ktduSgdSX3P6VA4PgYFeUhR54qSOB478aTK0NA7p7UkzmZZnHIdgUNw=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1488782844809.jpg">
                                                <span>Siti Energy Ltd gas</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">LOAN</a></li>
                            <li><a href="#">FEES</a></li>
                            <li><a href="#">METRO</a>
                                <div class="magamenu ">
                                    <ul class="again tele-services">
                                        <li>
                                            <a href="#">
                                                <img alt="Delhi Metro" title="Delhi Metro" src="https://ci6.googleusercontent.com/proxy/1lSVCpKBVSV1v1d4LD2yxuqDXTxfYa1oapUek4WI_BQa7GWQRXSmMC9qElo51a1zTMFT_JufEavRLqyQQNoOzKQFNDF_q9gGJN8sP_kPe5Wmx5PBDSXguA=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1488782776551.jpg">
                                                <span>Delhi Metro</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Mumbai Metro" title="Mumbai Metro" src="https://ci4.googleusercontent.com/proxy/6OTznRfAR8akOSvY0OGhwDIkzmfH84RSeAEr2Fb9lb0E_rRaphTr_7WuFn64TtsUhFqxyoNsSUrMR6YWmidjoMQX17X7K8Ct5Yjsr0YzaG9Vwiu5_9c5qA=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1488199885197.jpg">
                                                <span>Mumbai Metro</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">WATER</a>
                                <div class="magamenu ">
                                    <ul class="again tele-services">
                                        <li>
                                            <a href="#">
                                                <img alt="Bangalore Water Supply and Sewerage Board (BWSSB)" title="Bangalore Water Supply and Sewerage Board (BWSSB)" src="https://ci3.googleusercontent.com/proxy/rDSliJpfx3cyQpfMVDtHJ568_b5TNZJx5jdKls3MLHBzL83_3ZdAjYCAljs8W8uVcFzZrjphoVPy8FCDdLnx4mbxOMaU0CQe2PGNoernBx5lbcj0QP5AVw=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1489056254339.png">
                                                <span>Bangalore Water Supply and Sewerage Board (BWSSB)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Delhi Jal Board (DJB) water" title="Delhi Jal Board (DJB) water" src="https://ci3.googleusercontent.com/proxy/v7N2cLmdx9r5Yx04pfJ2DsulT4sCam1ACUc-JNoee92lLELs7ME2oysDfB-U6WCQFRaAdjTKSVlSAepYFSyYadRsqrzgtWa-8uzGh6l5SJ6rH7qgaQp6MQ=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1488782982103.jpg">
                                                <span>Delhi Jal Board (DJB) water</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Uttarakhand Jal Sansthan water" title="Uttarakhand Jal Sansthan water" src="https://ci3.googleusercontent.com/proxy/eXUXU9aWFeL_Oi1dJmaRdWsgpsdTlBOALr8ySAYhg6m7h4TESvivNH6dC6dCPuOQyLWx3fOKhSAEmQZFn0WZ3xgTAV47HZQW1mwObiNMoLo3xgNrXLIQlw=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1497606066919.jpg">
                                                <span>Uttarakhand Jal Sansthan water</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            
                            </li>
                            <li><a href="#">CORPORATION</a>
                                <div class="magamenu ">
                                    <ul class="again tele-services">
                                        <li>
                                            <a href="#">
                                                <img alt="Municipal Corporation of Gurgaon - MCG" title="Municipal Corporation of Gurgaon - MCG" src="https://ci6.googleusercontent.com/proxy/8QghDxd8Q6KrK5XgAB_hg2Y4gxIfM7mnI1y8S4Dec8yYvRMKqt4w99_one9MDBa-XLLGH7LLpmzXJ8rgDcOABk773BnLi_3SoRgrh5YB8pCz69uVl0SbtQ=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1490250606386.png">
                                                <span>Municipal Corporation of Gurgaon - MCG</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Municipal Corporation of Sonepat" title="Municipal Corporation of Sonepat" src="https://ci5.googleusercontent.com/proxy/64Oh9RvONNqAh6odfxYbbai0kOtwDkrw4ZWCOkJLa9UCwl79Qka0EXIQ0Co1dSf2AvHzCntv__4aup8DKlPHmOkdmU_O3Zf0ZpBIoBGhwT3YvQsFSqBtQw=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/brand/1494327616685.png">
                                                <span>Municipal Corporation of Sonepat</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">GOVERNMENT</a></li>
                            <li><a href="#">TOLL TAG</a>
                                <div class="magamenu ">
                                    <ul class="again tele-services right-zero">
                                        <li>
                                            <a href="#">
                                                <img alt="Bangalore Elevated Tollway Pvt. Ltd. (BETPL)" title="Bangalore Elevated Tollway Pvt. Ltd. (BETPL)" src="https://ci3.googleusercontent.com/proxy/SexS5EFMSqFXdG7e4NqtYRQWd_2ReTHl0V8EAgv-Cku1ies9pu1SsU7iVDUhrQfTjmbQj4-RGdYX_xxtfh7CS5U04JsbYbm2Id560z6jW0nwAjzT2000E-_ODojb4v6itz2OCycmBS8axETt_5U=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/product/R/RE/RECBETPLBETP5461023E27F24F/0.PNG">
                                                <span>Bangalore Elevated Tollway Pvt. Ltd. (BETPL)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="MEP - Mumbai Entry/Exit Points toll" title="MEP - Mumbai Entry/Exit Points toll" src="https://ci6.googleusercontent.com/proxy/Bh7dXeqmqOaxkFt_3l9rs-B-SO2vXvqbA6M0aORfVxrFF6zHOkxzgMHhpxLxctlae8looiKkHQUNAOiMaTbt07Bu5YGqyM83w9vcL7egZ4h0E-FkdzoFGs5oqpcMhRnOvRUiRrzXuFK09M8QLxlntqk4MKRI=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/product/R/RE/RECMEP-TOLL-PAYMEP-374311685D2EFA/2.jpg">
                                                <span>MEP - Mumbai Entry/Exit Points toll</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="Rajiv Gandhi Sea Link toll" title="Rajiv Gandhi Sea Link toll" src="https://ci3.googleusercontent.com/proxy/QN7ewWpEgq8VUvaoA6o3v2sPPxdjzrzSWGt5O-F6H2P_1HpgIwpywK1NDR-7U-rXkzb084BqKdtkak27bsOY0mUC6VWiJZIq0N6hjbjE5Fiea97ipYxLI9VvWU2BJS5SfZ8iHJuw9Ydo_NXN3h8I3aJFDwqQ=s0-d-e1-ft#https://assetscdn.paytm.com/images/catalog/product/R/RE/RECMEP-RGSL-TOLRAJI374295A8E7AF23/2.jpg">
                                                <span>Rajiv Gandhi Sea Link toll</span>
                                            </a>
                                        </li>
                                    </ul>   
                                </div>   
                            </li>
                        </ul>
                    </nav>
                </div> 
            </div>
        </div>
    </div>
</section>
<?php endif; ?>