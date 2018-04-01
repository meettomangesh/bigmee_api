
<div class="container">
    <div class="row search-result">
        <div class="col-md-3">
            <strong>Results:</strong> <label id="result_count">{$result_occurs}</label>
        </div>
        {if $query != ''}
            <div class="col-md-5">
                <strong>Search keyword:</strong> <label>{$query}</label>
            </div>
        {/if}
    </div>
    <div class="row">
        <!-- Filter section -->       
        <div class="row mobile-filter">
            <div class="col-md-12">
                <button class="btn btn-primary btn-sm pull-right" id="mobile-filter-btn"><i class="fa fa-search"></i> &nbsp;Filters</button>
            </div>
        </div>

        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12 product-main-filter">
            <div class="all-shop-sidebar">
                <form action="{$base_url}pages/product-view" class="product-filter-form">
                    <input type="hidden" name="sort_by" id="hidden_sort_by" value="">
                    <input type="hidden" name="limit" id="hidden_limit" value="">
                    <input type="hidden" name="q" value="{$query}">
                    <div class="top-shop-sidebar">
                        <h3 class="wg-title">Filter</h3>
                    </div>
                    <div class="shop-one">
                        <h3 class="wg-title2">Categories</h3>
                        <div class="product-checkall-filter">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="mcat_checkbox">
                                <label for="mcat_checkbox">Select All</label>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <ul class="product-categories">
                            {foreach $mcat_list as $main_category}
                                <li class="cat-item">
                                    <a href="javascript: void(0)">
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" id="mcat_checkbox{$main_category.mcat_id}" name="base_cat[]" class="mcat_checkbox" value="{$main_category.mcat_id}" {if $main_category.mcat_id|in_array:$post_mcat} checked {/if}>
                                            <label for="mcat_checkbox{$main_category.mcat_id}">{$main_category.mcat_name}</label>
                                        </div>
                                    </a>
                                </li>
                            {/foreach}   
                        </ul> 
                        <!--{if $filter_bcat_list != 0 }
                        <h3 class="wg-title2">Business Category</h3>
                        <div class="product-checkall-filter">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="bcat_checkbox">
                                <label for="bcat_checkbox">Select All</label>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <ul class="product-categories">
                            {foreach $filter_bcat_list as $b_cat}
                                <li class="cat-item">
                                    <a href="javascript: void(0)">
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" id="bcat_checkbox{$b_cat.bcat_id}" name="sub_cat[]" class="bcat_checkbox" value="{$b_cat.bcat_id}" {if $b_cat.bcat_id|in_array:$post_bcat} checked {/if}>
                                            <label for="bcat_checkbox{$b_cat.bcat_id}">{$b_cat.bcat_name}</label>
                                        </div>
                                    </a>
                                </li>
                            {/foreach}  
                        </ul>
                        {/if} -->
                    </div>
                    <div class="re-shop-one">
                        <h3 class="wg-title2">Choose Price</h3>
                        <div class="widget shop-filter">
                            <div class="info_widget">
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div id="amount">
                                        <input type="text" name="min_price" class="first_price" value="{$min_price}" readonly />
                                        <input type="text" name="max_price" class="last_price" value="{$max_price}" readonly />
                                        <button class="button-shop filter-product" type="button"><i class="fa fa-search search-icon"></i></button>
                                    </div>

                                </div>
                            </div>							
                        </div>
                    </div>
            </div>
        </div>
        <!-- filter section end -->                                
        <div class="col-md-8 col-lg-9 col-sm-8 col-xs-12">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="features-tab">
                        <!-- Nav tabs -->
                        <div class="shop-all-tab">
                            <div class="two-part">
                                <ul class="nav tabs" role="tablist">
                                    <li class="vali">View as:</li>
                                    <li role="presentation" class="product-tab active"><a href="#grid" aria-controls="grid" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                                    <li role="presentation" class="product-tab"><a href="#list" aria-controls="list" role="tab" data-toggle="tab"><i class="fa fa-align-justify"></i></a></li>
                                </ul>
                            </div>
                            <div class="re-shop">
                                <div class="sort-by">
                                    <div class="shop6">
                                        <label>Sort By :</label>
                                        <select name="sort_by" id="sort_by">
                                            <option value="">Sort By</option>
                                            <option {if $sort_by == 'desc'}selected{/if} value="desc">Newest to oldest</option>
                                            <option {if $sort_by == 'asc'}selected{/if} value="asc">Oldest to newest</option>
                                            <option {if $sort_by == 'asc_price'}selected{/if} value="asc_price">Price low to high</option>
                                            <option {if $sort_by == 'desc_price'}selected{/if} value="desc_price">Price high to low</option>
                                            <option {if $sort_by == 'asc_discount'}selected{/if} value="asc_discount">Discount low to high</option>
                                            <option {if $sort_by == 'desc_discount'}selected{/if} value="desc_discount">Discount high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="shop5">
                                    <label>Show :</label>
                                    <select name="limit" id="limit">
                                        <option {if $limit == '9'}selected{/if} value="9">9</option>
                                        <option {if $limit == '18'}selected{/if} value="18">18</option>
                                        <option {if $limit == '27'}selected{/if} value="27">27</option>
                                    </select>      
                                </div>
                                </form> 
                            </div>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content" id="product-filtered-list">
                            <div role="tabpanel" class="tab-pane product-tab-pane active" id="grid">
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
                        </div> <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>