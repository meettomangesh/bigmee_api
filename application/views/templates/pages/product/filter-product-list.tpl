<div role="tabpanel" class="tab-pane product-tab-pane active" id="grid" data-result-count="{$result_occurs}">
    <div class="row">
        <div class="shop-tab">
            {if $result_occurs == 0}
                <span class="text-danger">No results found...</span>
            {/if}
            {foreach $product_list as $product}
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <div class="single-product bottom-20">
                        <div class="product-img">
                            {if $product.prod_discount > 0}                                                            
                                <div class="pro-discount">
                                    <span>{$product.prod_discount} % off</span>
                                </div>
                            {/if}  
                            <a href="{$base_url}sp/home/{$product.uacct_id}?product={$product.prod_id}" target="_blank" >
                                <img src="{$base_url}dist/img/products/{$product.prod_img}" alt="{$product.prod_title}" />
                            </a>
                        </div>
                        <div class="product-dsc">
                            <h3><a href="{$base_url}sp/home/{$product.uacct_id}?product={$product.prod_id}" target="_blank">{$product.prod_title}</a></h3>
                            <div class="star-price">
                                <span class="price-left"></span>
                                <span class="price-left product-discount" data-discount="{$product.prod_discount}" data-price="{$product.prod_price}"></span>
                                <label class="stock-status {if $product.stock_status == 0}text-danger{else}text-success{/if}">{if $product.stock_status == 0}Out of Stock{else}In Stock{/if}</label>
                                <span class="star-right">
                                    {if $product.prod_discount > 0} <del>{/if}
                                        <i class="fa fa-inr"></i> {$product.prod_price}
                                        {if $product.prod_discount > 0} </del>{/if}
                                </span>
                            </div>
                        </div>
                        <div class="actions-btn">

                            <a href="javascript: void(0)" class="send-enquiry" data-placement="top" data-value="{$product.prod_id}" onclick="sendProductEnquiry({$product.prod_id})" data-trigger="hover" data-original-title="Send Enquiry"><i class="fa fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
            {/foreach} 
        </div>
    </div>
</div>
<div role="tabpanel" class="tab-pane product-tab-pane" id="list">
    <div class="row">
        {if $result_occurs == 0}
            <span class="text-danger">No results found...</span>
        {/if}
        {foreach $product_list as $product}
            <div class="row row-fluid single-product bottom-20">
                <div class="col-md-4 col-sm-4">
                    <div class="tb-product-item-inner tb2 pct-last">
                        <div class="product-img">
                            {if $product.prod_discount > 0}                                                            
                                <div class="pro-discount">
                                    <span>{$product.prod_discount} % off</span>
                                </div>
                            {/if}  
                            <a href="{$base_url}sp/home/{$product.uacct_id}?product={$product.prod_id}" target="_blank" >
                                <img src="{$base_url}dist/img/products/{$product.prod_img}" alt="{$product.prod_title}" />
                            </a>
                            <div class="actions-btn">
                                <a href="javascript: void(0)" class="send-enquiry" data-placement="top" data-value="{$product.prod_id}" onclick="sendProductEnquiry({$product.prod_id})" data-trigger="hover" data-original-title="Send Enquiry"><i class="fa fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <divs>
                        <div class="tb-beg">
                            <a href="{$base_url}sp/home/{$product.uacct_id}?product={$product.prod_id}" target="_blank">{$product.prod_title}</a>
                        </div>
                        <div class="tb-product-wrap-price-rating">
                            <div class="tb-product-price font-noraure-3">
                                <span class="amount2 ana product-discount" data-discount="{$product.prod_discount}" data-price="{$product.prod_price}"></span>
                                <span class="amount2 ana">
                                    {if $product.prod_discount > 0} <del>{/if}
                                        <i class="fa fa-inr"></i> {$product.prod_price}
                                        {if $product.prod_discount > 0} </del>{/if}
                                </span>
                            </div>
                        </div>
                        <p class="desc">{$prod_short_desc}</p><br>
                        <div class="last-cart l-mrgn ns">
                            <a class="las4" href="javascript: void(0)" onclick="sendProductEnquiry({$product.prod_id})">Send Enquiry</a>
                        </div>
                </div>
            </div>
        {/foreach} 
    </div>
</div>
<div class="shop-all-tab-cr shop-bottom">
    <div class="two-part">
        <div class="shop5 page" id="all-product-pagination">
            {$pagination}      
        </div>
    </div>
</div>
