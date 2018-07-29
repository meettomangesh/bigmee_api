    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>Downloads</a></li>
			</ul>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Downloads </h2>
						<div class="box-icon">
							<?php if(in_array($this->session->userdata('type'), $download_role)): ?>
                             <a href="javascript: void(0)" id="upload-downloads"><i class="halflings-icon white plus"></i></a>
							<?php endif; ?>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                     <ul class="downloads">
                    <?php foreach($download_list as $download): ?>
                        <li>
							<?php if(in_array($this->session->userdata('type'), $download_role)): ?>
                            <i title="delete download file" data-value="<?= $download['file_id'] ?>" class="halflings-icon trash delete-download"></i>
 							<?php endif; ?>                           
                            <a href="javascript: void(0)" data-value="<?= $download['file_id'] ?>"><?= $download['link_name'] ?></a></li>
                        
                    <?php endforeach; ?>
                        </ul>
                       </div>  
                     
                   </div>
                 </div>    
                          
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	<div class="clearfix"></div>
	
