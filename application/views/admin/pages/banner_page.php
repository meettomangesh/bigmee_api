    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>Banner</a></li>
			</ul>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-picture white"></i><span class="break"></span>Home Banner</h2>
						<div class="box-icon">
					  <?php if(in_array($this->session->userdata('type'), $banner_role)): ?>		
                            <a href="javascript: void(0)" id="new-banner"><i class="halflings-icon white plus"></i></a>
					  <?php endif; ?>	
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                            <?php foreach($banner_list as $banner): ?>
                                <div class="span4">
                                 <div class="banner-img">
                                    <a href="javascript: void(0)" class="delete-banner" data-value="<?= $banner['media_id'] ?>">
                                    <i class="fa fa-trash"></i></a>
                                    <img src="<?= base_url('dist/img/slider/'.$banner['media_url']) ?>" alt="banner-img">
                                 </div>   
                                </div>
                            <?php endforeach; ?>
                       </div>  
                     
                   </div>
                 </div>   
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	<div class="clearfix"></div>
	
