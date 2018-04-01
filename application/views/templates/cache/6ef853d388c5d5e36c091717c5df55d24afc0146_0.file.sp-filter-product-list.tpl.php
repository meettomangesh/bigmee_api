<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-08-15 14:48:51
  from "/home/bigmee/public_html/application/views/templates/pages/product/sp-filter-product-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-19',
  'unifunc' => 'content_5992bc7b26ee14_78660994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ef853d388c5d5e36c091717c5df55d24afc0146' => 
    array (
      0 => '/home/bigmee/public_html/application/views/templates/pages/product/sp-filter-product-list.tpl',
      1 => 1502788291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5992bc7b26ee14_78660994 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div role="tabpanel" class="tab-pane product-tab-pane active" id="grid" data-result-count="<?php echo $_smarty_tpl->tpl_vars['result_occurs']->value;?>
">
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
                                <span class="price-left"></span>
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
<?php }
}
