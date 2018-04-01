		
        <section class="single-product-area sit section-padding-bottom" style="margin-top: 22px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                               <div class="product-img-preview" id="product-img-preview" data-id="<?= $view_product->prod_id ?>"></div>
                           </div> 
                            <div class="col-md-6 col-sm-6">
                                <div class="cras">
                                    <div class="product-name">
                                        <h2><?= $view_product->prod_title ?></h2>
                                    </div>
                                    <div class="short-description">
                                        <p><?= $view_product->prod_short_desc ?></p>
                                    </div>
                                    <div class="pre-box">
                                        <span class="special-price">
                                            <?= discountPrice($view_product->prod_discount, $view_product->prod_price) ?> 
                                        </span>
                                        <span class="special-price">  
                                        <?php if($view_product->prod_discount > 0): echo"<span class='off-per'>".$view_product->prod_discount."% off</span>"; endif; ?>  
                                         <?php if($view_product->prod_discount > 0): echo"<del class='discount-price'>"; endif; ?>
                                            <i class="fa fa-inr"></i> 
                                            <?= showData($view_product->prod_price, "Ask Price") ?>
                                         <?php if($view_product->prod_discount > 0): echo"</del>"; endif; ?> 
                                       
                                        </span>
                                    </div>
                                    <div class="add-to-box1">
                                        <div class="add-to-box add-to-box2">
                                            <div class="add-to-cart">
                                                <p class="submit-requirement">
                                                    <button type="button" class="send-enquiry" data-value="<?= $view_product->prod_id ?>">Send Enquiry</button>              
                                                 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="text">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#desc" aria-controls="desc" role="tab" data-toggle="tab">Product Description</a>
                                        </li>
                                    </ul>
                                    <div class="container">
                                    <!-- Tab panes -->
                                      <div class="tab-content">                                    
                                        <div role="tabpanel" class="tab-pane active" id="desc">
                                            <?= $view_product->prod_desc ?>
                                        </div>
                                      </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>