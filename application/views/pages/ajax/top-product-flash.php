      <div class="container-fluid">
                  <div class="col-md-6 col-sm-12 margin-auto">
            <div class="col-xs-12">
                  <div class="modal-dialog requirement-dialog">
                    <div class="main-view padding-zero modal-content">
                      <div onclick="return skipTopProductFlash()" class="close-modal modal-footer" data-dismiss="modal">
                        <span>x</span>                                                
                      </div>
                                            <div class="panel">
                                                <div class="panel-heading requirement-panel-heading">
                                                <h3>Top Products</h3>
                                                </div>
                                            <div class="panel-body">    
                                            <div class="easy2 padding-zero">
                                            <div class="row"> 
          <div id="top-flash-product" class="tab-carousel-1 re-owl-carousel owl-carousel product-slider owl-theme">
            <!-- single product end -->
                            <?php foreach($top_product as $product):  ?>
              <div class="col-xs-12">
                            <div class="single-product">
                                  <div class="product-img">
                                  <?php if($product['prod_discount'] > 0): ?>                                                            
                                    <div class="pro-discount">
                                      <span><?= $product['prod_discount']."% off" ?></span>
                                    </div>
                                    <?php endif; ?>   
                                      <a href="<?= link_url('sp/home/'.$product['uacct_id'].'?product='.$product['prod_id'])?>" target="_blank" >
                                        <img src="<?= base_url('dist/img/products/'.$product['prod_img']) ?>" alt="<?= $product['prod_title'] ?>" />
                                       <!-- <img class="secondary-image" src="<?= base_url('dist/img/products/'.$product['prod_img']) ?>" alt="<?= $product['prod_title'] ?>""> -->
                                      </a>
                                   </div>
                                   <div class="product-dsc">
                                    <h3><a href="<?= link_url('sp/home/'.$product['uacct_id'].'?product='.$product['prod_id'])?>" target="_blank"><?= $product['prod_title'] ?></a></h3>
                                    <div class="star-price">
                                      <span class="price-left">
                                      <?= discountPrice($product['prod_discount'], $product['prod_price']) ?>
                                      </span>
                                      <?= showStockStatus($product['stock_status']) ?>
                                         <span class="star-right">
                                              <?php if($product['prod_discount'] > 0): echo"<del>"; endif; ?>
                                                 <i class="fa fa-inr"></i> <?= $product['prod_price'] ?>
                                              <?php if($product['prod_discount'] > 0): echo"</del>"; endif; ?>
                                         </span>
                                      </div>
                                    </div>
                                  <div class="actions-btn">
                                <a href="javascript: void(0)" class="send-enquiry" data-placement="top" data-value="<?= $product['prod_id'] ?>" onclick="return sendProductEnquiry('<?= $product['prod_id'] ?>')" data-trigger="hover" data-original-title="Send Enquiry"><i class="fa fa-paper-plane"></i></a>
                              </div>
                           </div>
            </div>
                      <?php endforeach; ?>
          <!-- single product end -->
          </div>
        </div>

                                           </div> <!-- panel body end -->
                                        </div> <!-- panel end -->
                  </div>
                </div>
              </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                      $("#top-flash-product").owlCarousel({
                          autoPlay: false, 
                          slideSpeed:1000,
                          pagination:false,
                          navigation:true,
                            autoPlay: true,   
                            items : 3,
                          /* transitionStyle : "fade", */    /* [This code for animation ] */
                          navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
                            itemsDesktop : [1199,3],
                          itemsDesktopSmall : [991,2],
                          itemsTablet: [767,2],
                          itemsMobile : [479,1]
                        });
                    </script>