
            <div class="col-lg-10 col-md-9 right-content-panel">
              <form method="post" class="form-style1" id="companyContactForm"> 
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Contact Company</h4>
                    </div>
                    <div class="panel-body">
                    <label>Make contact content</label>
                     <div class="col-md-12">
                       <div class="form-group">
                        <textarea class="form-control tinymce" name="contact_content" id="contact_content"><?= showData($company_pages->contact_page) ?></textarea> 
                      </div>
                     </div>     
                    </div>
                    <div class="panel-footer text-center">
                        <button type="submit" class="btn btn-success btn-sm c-btn"> <i class="fa fa-save"></i>  Save </button>
                        <button type="reset" class="btn btn-danger btn-sm c-btn"><i class="fa fa-refresh"></i> Reset </button> 
                    </div> 
                   </form> 
                   <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script> 
                </div>
            </div>
        </div>
    </div>
</section>        