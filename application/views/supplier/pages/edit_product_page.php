<script>
$(document).ready(function(){
                                        
// set values to select box
      $("#bcat_name option[value='<?= $product->bcat_id ?>']").attr('selected','selected');
      $("#stock_status option[value='<?= $product->stock_status ?>']").attr('selected','selected');
// set product type value      
      $("#prod_type option[value='<?= $product->prod_type ?>']").attr('selected','selected');
      <?php if($product->prod_type):  ?>
          $('#product-unit').show();
      <?php endif; ?>
 <?php if($product->price_unit){ ?>
      $("#p_unit optgroup option[value='<?= $product->price_unit ?>']").attr('selected','selected');
            $("#p_unit").attr("data-rule-required='true'");
      <?php }else{ ?>$("#p_unit").addClass("disabled-box");<?php } ?>
      
});

</script>
            <div class="col-lg-10 col-md-9 right-content-panel">
              <form id="editProductForm" class="form-style1" method="post"> 
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Edit <?= $product->prod_type ?></h4>
                    </div>
                    <div class="panel-body">
                     <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                            <label>Service</label>
                                <select class="form-control1" name="prod_type" id="prod_type">
                                    <option value="">--Select--</option> 
                                        <option value="Service">Service</option>
                                        <option value="Product">Product</option>
                                </select>
                            </div>
                         <div class="form-group col-md-4">
                            <label><span class="name-label">Product</span> Name</label>
                            <input type="hidden" name="p_id" value="<?= $product->prod_id ?>">
                            <input type="text" name="p_title" id="p_title" value="<?= $product->prod_title ?>" class="form-control1" data-rule-required="true">
                         </div>
                        </div>
                        <div class="row"> 
                         <div class="form-group col-md-4">
                            <label><span class="name-label"><?= $product->prod_type ?></span> Discount</label>
                            <div>
                                <label class="radio-inline">
                                <input type="radio" name="discount" class="disc" value="false" id="yesCheck" <?php if($product->prod_discount == 0){ echo "checked"; } ?>> No
                                </label>    
                                <label class="radio-inline">
                                <input type="radio" name="discount" class="disc" value="true" id="noCheck" <?php if($product->prod_discount){ echo "checked"; } ?>> Yes
                                </label>
                           </div>
                         </div> 
                         <div class="form-group col-md-4" id="discount-div" style="display: <?php if($product->prod_discount){ echo "block"; }else{ echo"none";} ?>">
                            <label>Discount</label>
                                <input type="text" name="p_discount" id="p_discount" class="form-control1" autocomplete="off" <?php if($product->prod_discount){ echo "value='".$product->prod_discount."' data-rule-required='true'"; } ?> >
                         </div> 
                       </div>  
                       <div class="row">
                         <div class="form-group col-md-12">
                            <div class="col-md-4">
                            <label><span class="name-label">Product</span> Price</label>
                               <input type="text" name="p_price" id="p_price" class="form-control1" autocomplete="off" value="<?= showData($product->prod_price) ?>">
                            </div>
                            <div class="col-md-4" id="product-unit">
                            <label>Unit</label>
                                <select class="form-control1" name="p_unit" id="p_unit">
                                       
                                       <option value="">--Select--</option>
                                       <optgroup label="Grocery Stores"> 
                                        <option value="piece">Piece</option>
                                        <option value="packet">Packet</option>
                                        <option value="kg">Kg</option>
                                       </optgroup>
                                       <optgroup label="Garment Stores"> 
                                        <option value="item">Item</option>
                                       </optgroup>    
                                </select>
                            </div>
                             <div class="form-group col-md-4">
                              <label><span class="name-label">Product</span> Category</label>
                                <select name="bcat_name" id="bcat_name" class="form-control1" data-rule-required="true">
                                    <option value="">--Select--</option>
                                    <?php foreach($business_category as $bcat): ?>
                                        <option value="<?= $bcat['bcat_id'] ?>"><?= $bcat['bcat_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                             </div>
                           </div>
                         </div>
                         
                         <div class="row">
                            <div class="col-md-4 form-group">
                            <label>Stock</label>
                                <select class="form-control1" name="stock_status" id="stock_status">
                                    <option value="">--Select--</option> 
                                        <option value="1">In Stock</option>
                                        <option value="0">Out of Stock</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-8 col-md-8">
                            <label>Short Descreption</label>
                               <textarea name="p_short_desc" id="p_short_desc" class="form-control1" spellcheck="true" rows="5"><?= $product->prod_short_desc ?></textarea>
                            </div>
                         </div>
                      </div>
                      
                      <div class="col-md-3">
                          <label class="upload-btn">
                            <div class="prod-img-preview" id="img-preview">
                                <img src="<?php if(!empty($product->prod_img)){ echo base_url('dist/img/products/'.$product->prod_img); }else{ echo base_url('dist/img/alt/no-img.png'); } ?>" id="imgPreview">
                            </div>
                                    <input type="file" name="pimg" id="pimg" required="">
                                  <div class="btn upload-btn">  
                                    <i class="fa fa-upload"></i>
                                    <span>Upload</span>
                                  </div> 
                                  <span class="active-help" data-toggle="popover" data-content="jpg, jpeg, png, 480 X 606 resolution allowed" data-trigger="hover" data-placement="left"></span> 
                          </label> 
                      </div>   
                      
                        <div class="row">
                         <div class="form-group col-md-12">
                         <label>Descreption</label>
                            <textarea class="form-control" name="p_desc" id="p_desc" data-rule-required="true"><?= showData($product->prod_desc) ?></textarea>
                         </div>   
                       </div>  
                    </div>
                    <div class="panel-footer text-center">
                        <button type="submit" class="btn btn-success btn-sm c-btn"> <i class="fa fa-save"></i>  Update </button>
                        <button type="reset" class="btn btn-danger btn-sm c-btn"><i class="fa fa-refresh"></i> Reset </button> 
                    </div> 
                   </form> 
                   <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>   
                   <script>
 $(document).ready(function(){  
    
                   $('#prod_type').change(function(){ 
                      var prod_type = $('#prod_type').val();  
                      if(prod_type == "Product") {
                        $('#product-unit').fadeIn(300);
                        $('#p_unit').removeClass('disabled-box');
                        $('#p_unit').attr('data-rule-required', "true");
                      }else if(prod_type == "Service") {
                        $('#p_unit').val('');
                        $('#product-unit').fadeOut(10);
                        $('#p_unit').attr('data-rule-required', "false");
                      }
                    });
                    
                      tinymce.init({
                              selector: '#p_desc',
                              //theme_url: '/mytheme/mytheme.js', //for customize theme
                              height: 100,
                              plugins: [
                                'advlist lists  charmap preview',
                                'searchreplace visualblocks ',
                                'contextmenu paste textcolor'
                              ],
                              toolbar: 'forecolor | undo redo | styleselect | bold italic | bullist numlist '
                            });

                        });  



              // swap product label according service type
                $('#prod_type').on('change', function() {
                  var type = $(this).val();

                    if(type == 'Service') {
                        $('.name-label').html('Service'); 
                    }else{
                        $('.name-label').html('Product');
                      }
              });                          
                                                                        
                   </script> 
                </div>
            </div>
        </div>
    </div>
</section>       