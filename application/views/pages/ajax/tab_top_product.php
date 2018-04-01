
                                                <?php foreach($top_product as $product): ?>
							                      <div class="col-md-12">
                        								<div class="single-product bottom-20">
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
                                                                    <?php if($product['prod_discount'] > 0): echo"<del>"; endif; ?>
                                                                        <i class="fa fa-inr"></i> <?= $product['prod_price'] ?>
                                                                    <?php if($product['prod_discount'] > 0): echo"</del>"; endif; ?>
                                                                    </span>
                                                               
                                                                    <?= showStockStatus($product['stock_status']) ?>
                                                                   <span class="star-right"><?= discountPrice($product['prod_discount'], $product['prod_price']) ?></span>
                                                               </div>
                                                            </div>
                                                            <div class="actions-btn">
                                                                
                                                                <a href="javascrip: void(0)" class="send-enquiry" data-placement="top" data-value="<?= $product['prod_id'] ?>" data-trigger="hover" data-original-title="Send Enquiry"><i class="fa fa-paper-plane"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <?php endforeach; ?>  
