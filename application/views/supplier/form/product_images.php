 <?php if($this->uri->segment(1) == 'supplier'): ?>
 <div class="container">
        <form class="form-style1" id="uploadProductImage" name="uploadProductImage">
            <div class="col-md-5">
                <div class="form-group col-md-12">
                    <span class="btn btn-primary btn-file btn-sm">Browse <input type="file" name="productImage" id="productImage"></span>
                          </label><span class="active-help" data-toggle="popover" data-content="jpg, jpeg, png, 480 X 606 resolution allowed" data-placement="bottom"></span>
                </div>

                <div class="form-group col-md-12">
                    <button type="button" name="uploadProductImage" id="uploadProductImageBtn" class="btn btn-success btn-sm">Upload</button>
                </div>
            </div>

            <div class="col-md-7 form-group" id="selectedFiles" style="word-break: break-word;"></div>
        </form>
    </div>

<div class="container">
    <div class="panel panel-body" id="productImagesPanels">
    <div class="row">
        <h4>Primary Image</h4>
        <div class='col-md-4 col-sm-6 col-xs-6 text-center'>
            <div class='prod-img'>
              <img src='<?= base_url('dist/img/products/med/'.$prod_data->prod_img) ?>' alt='<?= $prod_data->prod_title ?>' class='img-thumb'>
            </div>
        </div>
    </div>
    <div class="row ">
        <h4>Alternate Image</h4>
    <?php foreach($prod_img as $img): ?>
        <div class='col-md-4 col-sm-6 col-xs-6 text-center'>
            <div class='prod-img'>
              <a href='javascript: void(0)' class='deleteProdImg' tilte='click for delete' data-value='<?= $img['prod_img_id'] ?>'>
                <i class='fa fa-trash'></i>
              </a>
              <img src='<?= base_url('dist/img/products/alt/med/'.$img['prod_img_url']) ?>' alt='<?= $prod_data->prod_title ?>' class='img-thumb'>
            </div>
        </div>
     <?php endforeach; ?>  
     </div>  
    </div>
</div>
<?php else: ?>
   <div class="container">
            <div class="sapn7" id="selectedFiles" style="word-break: break-word;"></div>
    </div>


<div class="box">
  <div class="box-content" id="productImagesPanels">
    <div class="row-fluid">
        <h4>Main Image</h4>
        <div class='span4 text-center'>
            <div class='prod-img'>
              <img src='<?= base_url('dist/img/products/med/'.$prod_data->prod_img) ?>' alt='<?= $prod_data->prod_title ?>' class='img-thumb'>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <h4>Alternate Image</h4>
    <?php foreach($prod_img as $img): ?>
        <div class='span4 text-center'>
            <div class='prod-img'>
              <a href='javascript: void(0)' class='deleteProdImg' tilte='click for delete' data-value='<?= $img['prod_img_id'] ?>'>
                <i class='fa fa-trash'></i>
              </a>
              <img src='<?= base_url('dist/img/products/alt/med/'.$img['prod_img_url']) ?>' alt='<?= $prod_data->prod_title ?>' class='img-thumb'>
            </div>
        </div>
     <?php endforeach; ?>  
     </div>  
    </div>
</div>

<?php endif; ?>