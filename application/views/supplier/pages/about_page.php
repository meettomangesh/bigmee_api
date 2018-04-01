
            <div class="col-lg-10 col-md-9 right-content-panel">
              <form method="post" class="form-style1" id="companyAboutForm"> 
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>About Company</h4>
                    </div>
                    <div class="panel-body">
                    <label>Make about content</label>
                     <div class="col-md-12">
                       <div class="form-group">
                        <textarea class="form-control tinymce" id="about_content" name="about_content"><?= showData($company_pages->about_page) ?></textarea> 
                      </div>
                     </div>     
                    </div>
                    <div class="panel-footer text-center">
                        <button type="submit" class="btn btn-success btn-sm c-btn"> <i class="fa fa-save"></i>  Save </button>
                        <button type="reset" class="btn btn-danger btn-sm c-btn"><i class="fa fa-refresh"></i> Reset </button> 
                    </div>  
                   </form> 
                   <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>  
                   <script>
                    $(document).ready(function(){
                      tinymce.init({
                              selector: 'textarea',
                              //theme_url: '/mytheme/mytheme.js', //for customize theme
                              height: 200,
                              plugins: [
                                'advlist autolink lists link image charmap print preview anchor',
                                'searchreplace visualblocks code fullscreen',
                                'media table contextmenu paste code textcolor colorpicker'
                              ],
                              toolbar: 'forecolor backcolor | insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image'
                            });
    
                        });
                   </script>               
                   </div>
            </div>
        </div>
    </div>
</section>        