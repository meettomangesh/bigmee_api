 
<section>
<div class="row top-slider">
<div class="col-md-2 left-service-list zero-padding">
    <div class="panel">
       <div class="panel-heading">
         <h4>Services</h4>
       </div> 
       <div class="panel-body">
        <ul id="left-service-scroller">
            <?php foreach($mcat_list as $category): ?>
                <li class="news-item">
                    <?php $encodedParams = urlencode('base_cat[]').'='.$category['mcat_id']; ?>
                    <a href="<?= base_url('pages/product-view?'.$encodedParams) ?>">
                        <i class="fa fa-<?= $category['mcat_icon']?>"></i>
        				<span><?= $category['mcat_name'] ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
       </div>
    </div>
</div>
<div class="col-md-10 zero-padding">
        <!-- slider-section-start -->
        <section class="slider-main-area">
            <div class="main-slider an-si">
                <div class="bend niceties preview-2 hm-ver-1">
                    <div id="ensign-nivoslider-2" class="slides">
                    </div>
			    </div>
            </div>
        </section>
		<!-- slider section end -->
</div>  
</div>  
</section>

 <!-- top-products section start -->
		<section class="featured-products single-products section-padding-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title">
							<h3>TOP RATED PRODUCTS</h3>
							<div class="section-icon">
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            </div>
						</div>
					</div>
				</div>
				<div class="row"> 
				  <div class="re-owl-carousel owl-carousel product-slider owl-theme" id="top-product-slider" style="display:block;">
				    <div class="content-loader horizontal"></div>
				  </div>
				</div>
		 </div>
		</section>
        
<!-- advertisement-products section end -->
		<section class="featured-products single-products section-padding-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title">
							<h3>Advertised Products</h3>
							<div class="section-icon">
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            </div>
						</div>
					</div>
				</div>
				<div class="row"> 
				  <div class="re-owl-carousel owl-carousel product-slider owl-theme" id="advertise-product-slider" style="display:block;">
				    <div class="content-loader horizontal"></div>
				  </div>
				</div>
		      </div>
		</section>
<!-- advertisement -products section end -->
      


        <!-- brand section start -->
       <section class="section-padding-top">
          <div class="section-title">
            <h3>BRANDING PRODUCTS</h3>
             <div class="section-icon">
                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
             </div>
         </div>
        <div class="brand-logo">
        <div class="barnd-bg">
          <div class="container">
            <div class="row text-center">
              <div id="brand-logo" class="re-owl-carousel21 owl-carousel product-slider owl-theme">
                <div class="col-xs-12">
                  <div class="single-brand">
                    <a href="#"><img src="<?= base_url('dist/img/brand/1.png') ?>" alt="" /></a>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="single-brand">
                    <a href="#"><img src="<?= base_url('dist/img/brand/2.png') ?>" alt="" /></a>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="single-brand">
                    <a href="#"><img src="<?= base_url('dist/img/brand/3.png') ?>" alt="" /></a>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="single-brand">
                    <a href="#"><img src="<?= base_url('dist/img/brand/4.png') ?>" alt="" /></a>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="single-brand">
                    <a href="#"><img src="<?= base_url('dist/img/brand/5.png') ?>" alt="" /></a>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="single-brand">
                    <a href="#"><img src="<?= base_url('dist/img/brand/6.png') ?>" alt="" /></a>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="single-brand">
                    <a href="#"><img src="<?= base_url('dist/img/brand/1.png') ?>" alt="" /></a>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="single-brand">
                    <a href="#"><img src="<?= base_url('dist/img/brand/3.png') ?>" alt="" /></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div> 
  </section>
  <!--  section end -->   

<!-- Testimonials section start -->
		<!--<section class="blog section-padding-top section-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title">
							<h3>TESTIMONIAL CLIENTS</h3>
							<div class="section-icon">
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="blog" class="owl-carousel product-slider owl-theme re-blog">
						<div class="col-xs-12">
							<div class="blog-container-inner">
                                    <div class="client-image">
                                        <img alt="" src="<?= base_url('dist/img/about/testi4.jpg') ?>">
                                    </div>
                                <div class="visual-inner">
                                    <h2 class="blog-title">
                                        <a href="#"> Felling Awesome</a>
                                    </h2>
                                    <div class="blog-meta">
                                        <span class="published">
                                            <i class="fa fa-clock-o"></i>
                                            Oct 31, 2014
                                        </span>
                                    </div>
                                    <div class="blog-content">
                                        Always feeling good with bigmee, because it provides a widly network
                                        which can br unbreakable surly i like bigmee.
                                    </div>
                                </div>
                            </div>
						</div>
						
						<div class="col-xs-12">
							<div class="blog-container-inner">
                                    <div class="client-image">
                                        <img alt="" src="<?= base_url('dist/img/about/testi3.jpg') ?>">
                                    </div>
                                <div class="visual-inner">
                                    <h2 class="blog-title">
                                        <a href="#"> Proud to use bigmee</a>
                                    </h2>
                                    <div class="blog-meta">
                                        <span class="published">
                                            <i class="fa fa-clock-o"></i>
                                            Oct 31, 2014
                                        </span>
                                    </div>
                                    <div class="blog-content">
                                    Always feeling good with bigmee, because it provides a widly network
                                        which can br unbreakable surly i like bigmee.
                                    </div>
                                </div>
                            </div>
						</div>
						
						<div class="col-xs-12">
							<div class="blog-container-inner">
                                    <div class="client-image">
                                        <img alt="" src="<?= base_url('dist/img/about/testi2.jpg') ?>">
                                    </div>
                                <div class="visual-inner">
                                    <h2 class="blog-title">
                                        <a href="#"> Largest Network of India</a>
                                    </h2>
                                    <div class="blog-meta">
                                        <span class="published">
                                            <i class="fa fa-clock-o"></i>
                                            Oct 31, 2014
                                        </span>
                                    </div>
                                    <div class="blog-content">
                                    Always feeling good with bigmee, because it provides a widly network
                                        which can br unbreakable surly i like bigmee.
                                    </div>
                                </div>
                            </div>
						</div>
						
						<div class="col-xs-12">
							<div class="blog-container-inner">
                                    <div class="client-image">
                                        <img alt="" src="<?= base_url('dist/img/about/testi1.jpg') ?>">
                                    </div>
                                <div class="visual-inner">
                                    <h2 class="blog-title">
                                        <a href="#"> Provides high quality business</a>
                                    </h2>
                                    <div class="blog-meta">
                                        <span class="published">
                                            <i class="fa fa-clock-o"></i>
                                            Oct 31, 2014
                                        </span>
                                    </div>
                                    <div class="blog-content">
                                    Always feeling good with bigmee, because it provides a widly network
                                        which can br unbreakable surly i like bigmee.
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>
  -->