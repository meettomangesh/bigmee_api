<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-21 08:33:04
  from "/home/bigmee/public_html/application/views/templates/pages/product/product-page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-19',
  'unifunc' => 'content_59c32be8ad1990_99875248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddda8607a2e8a77e6565a14590cf601c770fc693' => 
    array (
      0 => '/home/bigmee/public_html/application/views/templates/pages/product/product-page.tpl',
      1 => 1505962954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c32be8ad1990_99875248 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <div class="row search-result">
        <div class="col-md-3">
            <strong>Results:</strong> <label id="result_count"><?php echo $_smarty_tpl->tpl_vars['result_occurs']->value;?>
</label>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['query']->value != '') {?>
            <div class="col-md-5">
                <strong>Search keyword:</strong> <label><?php echo $_smarty_tpl->tpl_vars['query']->value;?>
</label>
            </div>
        <?php }?>
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
                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
pages/product-view" class="product-filter-form">
                    <input type="hidden" name="sort_by" id="hidden_sort_by" value="">
                    <input type="hidden" name="limit" id="hidden_limit" value="">
                    <input type="hidden" name="q" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
">
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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mcat_list']->value, 'main_category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['main_category']->value) {
?>
                                <li class="cat-item">
                                    <a href="javascript: void(0)">
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" id="mcat_checkbox<?php echo $_smarty_tpl->tpl_vars['main_category']->value['mcat_id'];?>
" name="base_cat[]" class="mcat_checkbox" value="<?php echo $_smarty_tpl->tpl_vars['main_category']->value['mcat_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['main_category']->value['mcat_id'],$_smarty_tpl->tpl_vars['post_mcat']->value)) {?> checked <?php }?>>
                                            <label for="mcat_checkbox<?php echo $_smarty_tpl->tpl_vars['main_category']->value['mcat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['main_category']->value['mcat_name'];?>
</label>
                                        </div>
                                    </a>
                                </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
   
                        </ul> 
                        <!--<?php if ($_smarty_tpl->tpl_vars['filter_bcat_list']->value != 0) {?>
                        <h3 class="wg-title2">Business Category</h3>
                        <div class="product-checkall-filter">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="bcat_checkbox">
                                <label for="bcat_checkbox">Select All</label>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <ul class="product-categories">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_bcat_list']->value, 'b_cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b_cat']->value) {
?>
                                <li class="cat-item">
                                    <a href="javascript: void(0)">
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" id="bcat_checkbox<?php echo $_smarty_tpl->tpl_vars['b_cat']->value['bcat_id'];?>
" name="sub_cat[]" class="bcat_checkbox" value="<?php echo $_smarty_tpl->tpl_vars['b_cat']->value['bcat_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['b_cat']->value['bcat_id'],$_smarty_tpl->tpl_vars['post_bcat']->value)) {?> checked <?php }?>>
                                            <label for="bcat_checkbox<?php echo $_smarty_tpl->tpl_vars['b_cat']->value['bcat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['b_cat']->value['bcat_name'];?>
</label>
                                        </div>
                                    </a>
                                </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
  
                        </ul>
                        <?php }?> -->
                    </div>
                    <div class="re-shop-one">
                        <h3 class="wg-title2">Choose Price</h3>
                        <div class="widget shop-filter">
                            <div class="info_widget">
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div id="amount">
                                        <input type="text" name="min_price" class="first_price" value="<?php echo $_smarty_tpl->tpl_vars['min_price']->value;?>
" readonly />
                                        <input type="text" name="max_price" class="last_price" value="<?php echo $_smarty_tpl->tpl_vars['max_price']->value;?>
" readonly />
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
                                            <option <?php if ($_smarty_tpl->tpl_vars['sort_by']->value == 'desc') {?>selected<?php }?> value="desc">Newest to oldest</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['sort_by']->value == 'asc') {?>selected<?php }?> value="asc">Oldest to newest</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['sort_by']->value == 'asc_price') {?>selected<?php }?> value="asc_price">Price low to high</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['sort_by']->value == 'desc_price') {?>selected<?php }?> value="desc_price">Price high to low</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['sort_by']->value == 'asc_discount') {?>selected<?php }?> value="asc_discount">Discount low to high</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['sort_by']->value == 'desc_discount') {?>selected<?php }?> value="desc_discount">Discount high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="shop5">
                                    <label>Show :</label>
                                    <select name="limit" id="limit">
                                        <option <?php if ($_smarty_tpl->tpl_vars['limit']->value == '9') {?>selected<?php }?> value="9">9</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['limit']->value == '18') {?>selected<?php }?> value="18">18</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['limit']->value == '27') {?>selected<?php }?> value="27">27</option>
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
                                        <?php if ($_smarty_tpl->tpl_vars['result_occurs']->value == 0) {?>
                                            <span class="text-danger">No results found...</span>
                                        <?php }?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_list']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                                            <div class="col-md-4 col-lg-4 col-sm-6">
                                                <div class="single-product bottom-20">
                                                    <div class="product-img">
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['prod_discount'] > 0) {?>                                                            
                                                            <div class="pro-discount">
                                                                <span><?php echo $_smarty_tpl->tpl_vars['product']->value['prod_discount'];?>
 % off</span>
                                                            </div>
                                                        <?php }?>  
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
sp/home/<?php echo $_smarty_tpl->tpl_vars['product']->value['uacct_id'];?>
?product=<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_id'];?>
" target="_blank" >
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
dist/img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_title'];?>
" />
                                                        </a>
                                                    </div>
                                                    <div class="product-dsc">
                                                        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
sp/home/<?php echo $_smarty_tpl->tpl_vars['product']->value['uacct_id'];?>
?product=<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['product']->value['prod_title'];?>
</a></h3>
                                                        <div class="star-price">
                                                            <span class="price-left product-discount" data-discount="<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_discount'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_price'];?>
"></span>
                                                            <label class="stock-status <?php if ($_smarty_tpl->tpl_vars['product']->value['stock_status'] == 0) {?>text-danger<?php } else { ?>text-success<?php }?>"><?php if ($_smarty_tpl->tpl_vars['product']->value['stock_status'] == 0) {?>Out of Stock<?php } else { ?>In Stock<?php }?></label>
                                                            <span class="star-right">
                                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['prod_discount'] > 0) {?> <del><?php }?>
                                                                    <i class="fa fa-inr"></i> <?php echo $_smarty_tpl->tpl_vars['product']->value['prod_price'];?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['prod_discount'] > 0) {?> </del><?php }?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="actions-btn">
                                                        <a href="javascript: void(0)" class="send-enquiry" data-placement="top" data-value="<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_id'];?>
" onclick="sendProductEnquiry(<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_id'];?>
)" data-trigger="hover" data-original-title="Send Enquiry"><i class="fa fa-paper-plane"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
 
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane product-tab-pane" id="list">
                                <div class="row">
                                    <?php if ($_smarty_tpl->tpl_vars['result_occurs']->value == 0) {?>
                                        <span class="text-danger">No results found...</span>
                                    <?php }?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_list']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                                        <div class="row row-fluid single-product bottom-20">
                                            <div class="col-md-4 col-sm-4">
                                                <div class="tb-product-item-inner tb2 pct-last">
                                                    <div class="product-img">
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['prod_discount'] > 0) {?>                                                            
                                                            <div class="pro-discount">
                                                                <span><?php echo $_smarty_tpl->tpl_vars['product']->value['prod_discount'];?>
 % off</span>
                                                            </div>
                                                        <?php }?>  
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
sp/home/<?php echo $_smarty_tpl->tpl_vars['product']->value['uacct_id'];?>
?product=<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_id'];?>
" target="_blank" >
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
dist/img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_title'];?>
" />
                                                        </a>
                                                        <div class="actions-btn">
                                                            <a href="javascript: void(0)" class="send-enquiry" data-placement="top" data-value="<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_id'];?>
" onclick="sendProductEnquiry(<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_id'];?>
)" data-trigger="hover" data-original-title="Send Enquiry"><i class="fa fa-paper-plane"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <divs>
                                                    <div class="tb-beg">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
sp/home/<?php echo $_smarty_tpl->tpl_vars['product']->value['uacct_id'];?>
?product=<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['product']->value['prod_title'];?>
</a>
                                                    </div>
                                                    <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana product-discount" data-discount="<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_discount'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_price'];?>
"></span>
                                                            <span class="amount2 ana">
                                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['prod_discount'] > 0) {?> <del><?php }?>
                                                                    <i class="fa fa-inr"></i> <?php echo $_smarty_tpl->tpl_vars['product']->value['prod_price'];?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['prod_discount'] > 0) {?> </del><?php }?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <p class="desc"><?php echo $_smarty_tpl->tpl_vars['prod_short_desc']->value;?>
</p><br>
                                                    <div class="last-cart l-mrgn ns">
                                                        <a class="las4" href="javascript: void(0)" onclick="sendProductEnquiry(<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_id'];?>
)">Send Enquiry</a>
                                                    </div>
                                            </div>
                                        </div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
 
                                </div>
                            </div>
                            <div class="shop-all-tab-cr shop-bottom">
                                <div class="two-part">
                                    <div class="shop5 page" id="all-product-pagination">
                                        <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
      
                                    </div>
                                </div>
                            </div>	
                        </div> <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
