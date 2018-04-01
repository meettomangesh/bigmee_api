<?php
$base_cat = ($this->input->get('base_cat'))? $this->input->get('base_cat') : array();
$sub_cat = ($this->input->get('sub_cat')) ? $this->input->get('sub_cat') : array();

?>
<div class="row mobile-filter">
    <div class="col-md-12">
        <button class="btn btn-primary btn-sm pull-right" id="mobile-filter-btn"><i class="fa fa-search"></i> &nbsp;Filters</button>
    </div>
</div>

				    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12 product-main-filter">
                        <div class="all-shop-sidebar">
                        <form action="<?= base_url('pages/product-view') ?>" class="product-filter-form">
                            <div class="top-shop-sidebar">
                                <h3 class="wg-title">Filter</h3>
                            </div>
                            <div class="shop-one">
                                <h3 class="wg-title2">Categories</h3>
                                <ul class="product-categories">
                                <?php foreach($mcat_list as $category): ?>
                                    <li class="cat-item">
                                    <a href="javascript: void(0)">
                                        <label class="inline2">
                                            <input type="checkbox" name="base_cat[]" value="<?= $category['mcat_id'] ?>" <?php if(in_array($category['mcat_id'], $base_cat)): echo "checked"; endif;?>>
                                            <?= $category['mcat_name'] ?>
                                        </label>
                                    </a>
                                    </li>
                                 <?php endforeach; ?>   
                                </ul> 
                            <?php if(count($filter_bcat_list) != 0): ?>
                                <h3 class="wg-title2">Business Category</h3>
                                <ul class="product-categories">
                                <?php foreach($filter_bcat_list as $category): ?>
                                    <li class="cat-item">
                                    <a href="javascript: void(0)">
                                        <label class="inline2">
                                            <input type="checkbox" name="sub_cat[]" value="<?= $category['bcat_id'] ?>" <?php if(in_array($category['bcat_id'], $sub_cat )): echo "checked"; endif;?>>
                                            <?= $category['bcat_name'] ?>
                                        </label>
                                    </a>
                                    </li>
                                 <?php endforeach; ?>   
                                </ul>
                            <?php endif;  ?>    
                            </div>
                            <div class="re-shop-one">
                                <h3 class="wg-title2">Choose Price</h3>
                                <div class="widget shop-filter">
                                    <div class="info_widget">
                                        <div class="price_filter">
                                            <div id="slider-range"></div>
                                            <div id="amount">
                                                <input type="text" name="min_price" class="first_price" value="<?php if($this->input->get('min_price')) echo $this->input->get('min_price');  ?>" />
                                                <input type="text" name="max_price" class="last_price" value="<?php if($this->input->get('max_price')) echo $this->input->get('max_price');  ?>"/>
                                                <button class="button-shop filter-product" type="submit"><i class="fa fa-search search-icon"></i></button>
                                            </div>
                                            
                                        </div>
                                    </div>							
                                </div>
                            </div>
                        </div>
                    </div>