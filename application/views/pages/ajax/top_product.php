
                        <?php foreach($top_product as $product): ?>
							<div class="col-xs-12">
								<div class="single-product">
                                    <div class="product-img">
                                        <a href="<?= link_url('pages/supplier/'.$product["uacct_id"].'/home/'.$product['prod_id']) ?>" target="_blank">
                                            <img src="<?= base_url('dist/img/products/'.$product["prod_img"]) ?>" alt="Product Title" />
                                            <img class="secondary-image" alt="<?= $product['prod_title'] ?>" src="<?= base_url('dist/img/products/'.$product["prod_img"]) ?>">
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#"><?= $product['prod_title'] ?></a></h3>
                                        <div class="star-price">
                                            <span class="priceprice"><i class="fa fa-inr"></i> <?= showData($product['prod_price'], "Ask Price") ?></span>
                                            <span class="star-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <a href="#" data-placement="top" data-target="#send-enquiry" data-trigger="hover" data-toggle="modal" data-original-title="Send Enquiry"><i class="fa fa-paper-plane"></i></a>
                                    </div>
                                </div>
							</div>
                          <?php endforeach; ?>  
                            