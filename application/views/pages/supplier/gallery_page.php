 
<!-- style content section start -->
		<section class="pages contact-page section-padding-bottom">
        <div class="container"> 
            <hr />
            <h3 class="text-center">Gallery</h3>  
            <hr />
            <div class="row">
              <ul class="product-tab web-tab nav nav-tabs" role="tablist">
                 <li class="nav-item active">
                   <a class="nav-link " data-toggle="tab" href="#image" role="tab">Images</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" data-toggle="tab" href="#video" role="tab">Videos</a>
                 </li>
              </ul>
            </div>   
          <div class="tab-content">
    		     <div class="tab-pane  fade in active" id="image">
                   <div id="gallery" style="display:none;">
                    <?php foreach($media_image as $img): ?>
                        <a href="javascript: void(0)">
                            <img alt="<?= $img['gallery_caption'] ?>" data-desciption="<?= $img['gallery_content'] ?>" src="<?= base_url('dist/img/gallery/'.$img['gallery_media']) ?>" data-image="<?= base_url('dist/img/gallery/'.$img['gallery_media']) ?>" style="display:none">
                        </a>
                    <?php endforeach; ?>
                 </div>            
            </div>
  		     <div class="tab-pane  fade in" id="video">
              <div id="video-gallery" style="display:none;">
                <?php foreach($media_video as $video): ?>
                   <img alt="<?= $video['gallery_caption']?>"
                                          data-type="youtube"  src="<?= youtubeThumb($video["gallery_media"]) ?>"
                                           data-image="<?= youtubeThumb($video["gallery_media"]) ?>"
                                           data-title="<?= $video['gallery_content']?>"
                                           data-videoid="<?= youtubeId($video["gallery_media"]) ?>" style="display:none">
                   
                   <?php endforeach; ?>    
              </div>
           </div>
        </div>  
    </div> 
</section>
		<!-- style  content section end -->