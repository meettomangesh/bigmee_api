
<div id="gallery_01" style="width="100%;" class="product-zoom">
     <img style="border:1px solid #e8e8e6;" id="zoom_03" src="<?= base_url('dist/img/products/med/'.$view_product->prod_img) ?>" 
    data-zoom-image="<?= base_url('dist/img/products/'.$view_product->prod_img) ?>" alt="<?= $view_product->prod_title ?>"  />
    
    <a  href="#" class="elevatezoom-gallery active" data-update="" data-image="<?= base_url('dist/img/products/med/'.$view_product->prod_img) ?>" 
    data-zoom-image="<?= base_url('dist/img/products/'.$view_product->prod_img) ?>">
    <img src="<?= base_url('dist/img/products/med/'.$view_product->prod_img) ?>" width="60"  /></a>
    
    <?php foreach($product_img as $img): ?> 
    <a  href="#" class="elevatezoom-gallery" data-update="" data-image="<?= base_url('dist/img/products/alt/med/'.$img['prod_img_url']) ?>" 
    data-zoom-image="<?= base_url('dist/img/products/alt/'.$img['prod_img_url']) ?>">
    <img src="<?= base_url('dist/img/products/alt/med/'.$img['prod_img_url']) ?>" width="60"  alt="<?= $view_product->prod_title ?>"  /></a>
    <?php endforeach; ?>
</div> 
<script src="<?= base_url('dist/js/jquery.fancybox.js') ?>"></script>
<script src="<?= base_url('dist/js/jquery.elevatezoom.js') ?>"></script>

<script type="text/javascript">
/* ------------------------------------
  Initializa elevation-zoom
--------------------------------------*/

$("#zoom_03").elevateZoom({
        gallery:'gallery_01',
        cursor: 'pointer',
        galleryActiveClass: 'active',
        imageCrossfade: true,
        easing : true,
        loadingIcon: '<?= base_url('dist/img/fancybox/fancybox_loading.gif') ?>',
        borderSize: '1',
        borderColour: 'rgb(51, 102, 204)'    

    }); 
//pass the images to Fancybox
$("#gallery_01").bind("click", function(e) {  
  var ez =   $('#zoom_03').data('elevateZoom'); 
    $.fancybox(ez.getGalleryList());
  return false;
});
</script>