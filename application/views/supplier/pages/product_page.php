            <div class="col-lg-10 col-md-9 right-content-panel">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Product List</h4>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                      <ul class="product-tab supplier-tab nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#newproduct" role="tab">Add New</a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" data-toggle="tab" href="#allproduct" role="tab">All Products</a>
                          </li>
                      </ul>    
                    </div>
                
                <div class="tab-content">
					<div class="tab-pane  fade in" id="newproduct">
            <div class="panel panel-default">
              <div class="panel-body">
              <form method="post" id="productForm" method="post" class="form-style1"> 
                     <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                            <label><span class="name-label">Service</span></label>
                                <select class="form-control1" name="prod_type" id="prod_type">
                                    <option value="">--Select--</option> 
                                        <option value="Service">Service</option>
                                        <option value="Product">Product</option>
                                </select>
                            </div>
                         <div class="form-group col-md-4">
                            <label><span class="name-label">Product</span> Name</label>
                            <input type="text" name="p_title" id="p_title" class="form-control1" data-rule-required="true">
                         </div>
                        </div>
                        <div class="row"> 
                         <div class="form-group col-md-4">
                            <label><span class="name-label">Product</span> Discount</label>
                            <div>
                                <label class="radio-inline">
                                    <input type="radio" name="discount" class="disc" value="false" id="yesCheck" checked="true"> No
                                </label>    
                                <label class="radio-inline">
                                    <input type="radio" name="discount" class="disc" value="true" id="noCheck">Yes
                                </label>
                           </div> 
                         </div> 
                         <div class="form-group col-md-4" id="discount-div">
                            <label>Discount</label>
                                <input type="text" name="p_discount" id="p_discount" class="form-control1" autocomplete="off">
                         </div> 
                       </div>  
                       <div class="row">
                            <div class="form-group col-md-4">
                            <label><span class="name-label">Product</span> Price</label>
                               <input type="text" name="p_price" id="p_price" class="form-control1" autocomplete="off">
                            </div>
                            <div class="col-md-4 form-group" id="product-unit">
                            <label>Unit</label>
                                <select class="form-control1 disabled-box" name="p_unit" id="p_unit">
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
                              <label><span class="name-label">Product</span> Catrgory</label>
                                <select name="bcat_name" class="form-control1" data-rule-required="true">
                                    <option value="">--Select--</option>
                                    <?php foreach($business_category as $bcat): ?>
                                        <option value="<?= $bcat['bcat_id'] ?>"><?= $bcat['bcat_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                             </div>
                         </div> 
                         <div class="row">
                            <div class="form-group col-lg-8 col-md-8">
                            <label>Short Descreption</label>
                               <textarea name="p_short_desc" id="p_short_desc" class="form-control1" spellcheck="true" rows="5"></textarea>
                            </div>
                         </div>
                    </div>
                      
                      <div class="col-md-3">
                          <label class="upload-btn">
                            <div class="prod-img-preview">
                                <img src="<?= base_url('dist/img/alt/no-img.png') ?>" id="imgPreview">
                            </div>
                                    <input type="file" name="pimg" id="pimg" required="">
                                  <div class="btn upload-btn">  
                                    <i class="fa fa-upload"></i>
                                    <span>Upload</span>
                                  </div> 
                                  <span class="active-help" data-toggle="popover" data-content="jpg, jpeg, png, 480 X 606 resolution allowed" data-trigger="hover" data-placement="left"></span>
                          </label>
                          </label>  
                      </div>   
                      
                        <div class="row">
                         <div class="form-group col-md-12">
                         <label>Brief Descreption</label>
                            <textarea class="form-control tinymce" name="p_desc" id="p_desc" data-rule-required="true"></textarea>
                         </div>   
                       </div> 
                  </div>  
                    <div class="panel-footer text-center">
                        <button type="submit" class="btn btn-success btn-sm c-btn" id="save"> <i class="fa fa-save"></i>  Save </button>
                        <button type="reset" class="btn btn-danger btn-sm c-btn"><i class="fa fa-refresh"></i> Reset </button> 
                    </div> 
                   </form> 
                   <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                   <script>
                    $(document).ready(function(){
                       tinymce.init({
                              selector: '.tinymce',
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
					<div class="tab-pane  fade in active" id="allproduct">
                    <div class="row top-toolbar">
                        <div class="col-md-4">
                            <ul>
                                <li title="delete selected contact"><a href="javascript: void(0)" class="disabled-icon" id="deleteCheckedProduct"><i class="fa fa-trash"></i></a></li>
                                <li title="add in top list"><a href="javascript: void(0)" class="disabled-icon" id="addCheckedToTopList"><i class="fa fa-thumbs-up disabled-icon"></i></a></li>
                            </ul>
                        </div>
                      </div>  
                    <div class="row top-toolbar">
                        <div class="col-md-10">
                              <div class="form-group col-md-2">  
                                <input type="text" name="prodId" id="prodId" class="form-control" data-column="0" placeholder="Product id" autocomplete="off">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" name="fromDate" id="fromDate" class="form-control datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" name="toDate" id="toDate" class="form-control datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="form-group col-md-2">  
                                <select class="form-control" name="status" id="status" data-column="3">  
                                  <option value="">Status</option>
                                  <option value="1">Approve</option>
                                  <option value="0">Rejected</option>
                                </select>
                              </div>
                              <div class="form-group col-md-3">  
                                <select class="form-control" name="sub_category" id="sub_category" data-column="4">
                                  <option value="">Category</option>
                                <?php foreach($business_category as $service): ?>
                                 <option value="<?= $service['bcat_id'] ?>"><?= $service['bcat_name'] ?></option>
                                <?php endforeach; ?> 
                                </select>
                              </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="productDataTable">
						  <thead>
							  <tr>
                                  <th width="4%"><input type="checkbox" name="checkAll" id="checkAll"></th>
								  <th>Id</th>
                                  <th>Name</th>
								  <th>Upload Date</th>
								  <th>Category</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
                      </table>
                    </div>
                   </div>
                  </div> 
                </div>
            </div>
        </div>
    </div>
</section>   
