<!-- style content section start -->
		<section class="pages about-page section-padding-bottom">
            <div class="container">   
                    <h2>About Us</h2>         
				<div class="row">
				    <div class="col-md-4 col-lg-3 col-sm-12">
                      <div class="category">
                                <h4 class="wg-title2">Business In</h4>
                                <ul class="product-categories" style="display:inline-block;">
                                <?php foreach($sp_category as $category): ?>
                                    <li>
                                    <a href="<?= base_url('sp/home/'.$sp_profile->uacct_id.'?sub_cat%5B%5D='.$category['bcat_id']) ?>">
                                            <?= $category['bcat_name'] ?>
                                    </a>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                                <hr>
                                <h4 class="wg-title2">Statastics</h4>
                                    <ul class="company-statastics" style="display:inline-block;">
                                        <li>
                                        <strong>Established In</strong>
                                            <p><?= $sp_profile->c_year ?></p>
                                        </li>
                                        <li>
                                        <strong>Owner</strong>
                                            <p><?= $sp_profile->user_name ?></p>
                                        </li>
                                    </ul>
                            </div>
                    </div>
                    
                    <div class="col-md-8 col-lg-9 col-sm-12">
                        <div class="container">
                        <?= $pages->about_page ?>
                        </div>
				</div>
			</div>
           </div>
		</section>
		<!-- style  content section end -->