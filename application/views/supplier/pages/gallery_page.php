           
            <div class="col-lg-10 col-md-9 right-content-panel">
              <form method="post" class="form-style1" id="companyContactForm"> 
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Gallery</h4>
                    </div>
                    <div class="panel-body">
                    <div class="row top-sp-helpbar">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary btn-sm" id="uploadGalleryOpenBtn"><i class="fa fa-upload"></i> Upload</button>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <div class="row">
                      <ul class="supplier-tab product-tab nav nav-tabs" role="tablist">
                          <li class="nav-item active">
                            <a class="nav-link " data-toggle="tab" href="#image" role="tab">Image</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#video" role="tab">Video</a>
                          </li>
                      </ul>    
                    </div>
                    <div class="tab-content">
    		     <div class="tab-pane  fade in active" id="image">
                        <?php foreach($media_image as $image): ?>
                           <div class="col-md-4 text-center">
                            <div class="gallery-img">
                               <a href="javascript: void(0)" class="deleteGalleryImg" tilte="click for delete" data-value="<?= $image['gallery_id'] ?>"><i class="fa fa-trash"></i></a>
                               <img src="<?= base_url('dist/img/gallery/'.$image['gallery_media']) ?>" alt="gallery image" class="img-thumb">
                             <div class="gallery-data">
                               <h4 class="gallery-caption"><?= $image['gallery_caption'] ?></h4>
                               <p class="gallery-content"><?= $image['gallery_content'] ?></p>
                             </div>  
                             </div>
                            </div>
                         <?php endforeach; ?>   
                         </div> 
    			<div class="tab-pane  fade in" id="video">
                        <?php foreach($media_video as $video): ?>
                           <div class="col-md-4 text-center">
                            <div class="gallery-img">
                               <a href="javascript: void(0)" class="deleteGalleryImg" tilte="click for delete" data-value="<?= $video['gallery_id'] ?>"><i class="fa fa-trash"></i></a>
                                <a href="javascript: void(0)" class="gallery-video" data-url="<?= youtubeThumb($video["gallery_media"], 1) ?>">
                                    <img src="<?= youtubeThumb($video['gallery_media']) ?>" alt="gallery image" class="img-thumb">
                                </a> 
                             <div class="gallery-data">
                               <h4 class="gallery-caption"><?= $video['gallery_caption'] ?></h4>
                               <p class="gallery-content"><?= $video['gallery_content'] ?></p>
                             </div> 
                               </div>
                            </div> 
                         <?php endforeach; ?> 
                         </div>   
                    </div>
                    </div>
                   </form> 
                </div>
            </div>
        </div>
    </div>
</section>        