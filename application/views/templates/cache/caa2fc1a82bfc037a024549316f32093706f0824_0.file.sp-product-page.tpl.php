<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-21 08:29:50
  from "/home/bigmee/public_html/application/views/templates/pages/product/sp-product-page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-19',
  'unifunc' => 'content_59c32b265469c6_90394323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caa2fc1a82bfc037a024549316f32093706f0824' => 
    array (
      0 => '/home/bigmee/public_html/application/views/templates/pages/product/sp-product-page.tpl',
      1 => 1505962782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c32b265469c6_90394323 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['prod_id']->value > 0) {?>
    <section class="single-product-area sit section-padding-bottom" style="margin-top: 22px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="product-img-preview" id="product-img-preview" data-id="48">

                                <div id="gallery_01" style="width:100%;" class="product-zoom">
                                    <img style="border:1px solid #e8e8e6;" id="zoom_03" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
dist/img/products/med/<?php echo $_smarty_tpl->tpl_vars['prod_img']->value;?>
" 
                                         data-zoom-image="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
dist/img/products/<?php echo $_smarty_tpl->tpl_vars['prod_img']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['prod_title']->value;?>
"  />

                                    <a  href="#" class="elevatezoom-gallery active" data-update="" data-image="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
dist/img/products/med/<?php echo $_smarty_tpl->tpl_vars['prod_img']->value;?>
" 
                                        data-zoom-image="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
dist/img/products/<?php echo $_smarty_tpl->tpl_vars['prod_img']->value;?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
dist/img/products/med/<?php echo $_smarty_tpl->tpl_vars['prod_img']->value;?>
" width="60"  /></a>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_img']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?> 
                                        <a  href="#" class="elevatezoom-gallery" data-update="" data-image="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
dist/img/products/alt/med/<?php echo $_smarty_tpl->tpl_vars['img']->value['prod_img_url'];?>
" 
                                            data-zoom-image="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
dist/img/products/alt/<?php echo $_smarty_tpl->tpl_vars['img']->value['prod_img_url'];?>
">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
dist/img/products/alt/med/<?php echo $_smarty_tpl->tpl_vars['img']->value['prod_img_url'];?>
" width="60"  alt=""  /></a>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </div> 
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="cras">
                                <div class="product-name">
                                    <h2><?php echo $_smarty_tpl->tpl_vars['prod_title']->value;?>
</h2>
                                </div>
                                <div class="short-description">
                                    <p><?php echo $_smarty_tpl->tpl_vars['prod_short_desc']->value;?>
</p>
                                </div>
                                <div class="pre-box">
                                    <?php if ($_smarty_tpl->tpl_vars['prod_discount']->value > 0) {?>
                                        <span class="special-price product-discount" data-discount="<?php echo $_smarty_tpl->tpl_vars['prod_discount']->value;?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['prod_price']->value;?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['prod_discount']->value;?>

                                        </span>
                                    <?php }?>
                                    <span class="special-price">  
                                        <?php if ($_smarty_tpl->tpl_vars['prod_discount']->value > 0) {?><span class="off-per"><?php echo $_smarty_tpl->tpl_vars['prod_discount']->value;?>
% off</span><?php }?>  
                                        <?php if ($_smarty_tpl->tpl_vars['prod_discount']->value > 0) {?><del class="discount-price"><?php }?>
                                            <i class="fa fa-inr"></i> 
                                            <?php echo $_smarty_tpl->tpl_vars['prod_price']->value;?>

                                            <?php if ($_smarty_tpl->tpl_vars['prod_discount']->value > 0) {?></del><?php }?>
                                    </span>
                                </div>
                                <div class="add-to-box1">
                                    <div class="add-to-box add-to-box2">
                                        <div class="add-to-cart">
                                            <p class="submit-requirement">
                                                <button type="button" class="send-enquiry" onclick="sendProductEnquiry(<?php echo $_smarty_tpl->tpl_vars['prod_id']->value;?>
)">Send Enquiry</button>              
                                            </p>
                                        </div>
                                    </div>
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
                                    <?php echo $_smarty_tpl->tpl_vars['prod_desc']->value;?>

                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }?>                                                

<section class="pages products-page section-padding-bottom">
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
                    <form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
sp/product-view" class="product-filter-form">
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
                                    <input type="checkbox" id="bcat_checkbox">
                                    <label for="bcat_checkbox">Select All</label>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <ul class="product-categories">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sp_category']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                    <li class="cat-item">
                                        <a href="javascript: void(0)">
                                            <div class="checkbox checkbox-primary">
                                                <input type="checkbox" id="bcat_checkbox<?php echo $_smarty_tpl->tpl_vars['category']->value['bcat_id'];?>
" name="sub_cat[]" class="bcat_checkbox" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['bcat_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['category']->value['bcat_id'],$_smarty_tpl->tpl_vars['post_bcat']->value)) {?> checked <?php }?>>
                                                <label for="bcat_checkbox<?php echo $_smarty_tpl->tpl_vars['category']->value['bcat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['bcat_name'];?>
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
                            <div class="tab-content" id="sp-product-filtered-list">
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
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
sp/home/<?php echo $_smarty_tpl->tpl_vars['product']->value['uacct_id'];?>
?product=<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_id'];?>
" target="_blank" >
                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
dist/img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_title'];?>
" />
                                                            </a>
                                                        </div>
                                                        <div class="product-dsc">
                                                            <h3><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
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
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
sp/home/<?php echo $_smarty_tpl->tpl_vars['product']->value['uacct_id'];?>
?product=<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_id'];?>
" target="_blank" >
                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
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
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
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
                                                        <p class="desc"><?php echo $_smarty_tpl->tpl_vars['product']->value['prod_short_desc'];?>
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
    </div>
</section><?php }
}
