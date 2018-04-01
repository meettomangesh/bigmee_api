
                                        <div role="tabpanel" class="tab-pane active" id="grid-product">
                                            <div class="row">
                                                <div class="shop-tab">
                                                <?php foreach($sp_product as $product): ?>
                                                    <div class="col-md-4 col-lg-4 col-sm-6">
                        								<div class="single-product">
                                                            <div class="product-img">
                                                                <a href="<?= link_url('sp/home/'.$product['uacct_id'].'/'.$product['prod_id'])?>">
                                                                    <img src="<?= base_url('dist/img/products/'.$product['prod_img']) ?>" alt="Product Title" />
                                                                    <!-- <img class="secondary-image" alt="Product Title" src=""> -->
                                                                </a>
                                                            </div>
                                                            <div class="product-dsc">
                                                                <h3><a href="<?= link_url('sp/home/'.$product['uacct_id'].'/'.$product['prod_id'])?>"><?= $product['prod_title'] ?></a></h3>
                                                                <div class="star-price">
                                                                    <span class="priceprice"><i class="fa fa-inr"></i> <?= showData($product['prod_price'], "Ask Price") ?></span>
                                                                    <!--<span class="star-right">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                    </span> -->
                                                                </div>
                                                            </div>
                                                            <div class="actions-btn">
                                                                
                                                                <a href="#" data-placement="top" data-target="#send-enquiry" data-trigger="hover" data-toggle="modal" data-original-title="Send Enquiry"><i class="fa fa-paper-plane"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <?php endforeach; ?>			
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="list-product">
                                            <div class="row">
                                                <div class="error">No data available</div>
                                            </div>
                                        </div>
                                    <div class="shop-all-tab-cr shop-bottom">
                                        <div class="two-part">
                                            <div class="shop5 page">   
                                                <?= $this->pagination->create_links() ?>    
                                            </div>
                                        </div>
                                    </div>