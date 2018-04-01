
            <div class="col-lg-10 col-md-9 right-content-panel">
              <form method="post" id="companyProfileForm" class="form-style1"> 
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Company Profile</h4>
                    </div>
                    <div class="panel-body">
                     <div class="col-md-9"> 
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                          <label>Company Name</label>
                            <input type="text" name="cname" id="cname" value="<?= showData($profile->c_name) ?>" class="form-control1" data-rule-required="true">
                          </div>  
                        </div>   
                        <div class="col-md-6">
                          <div class="form-group">
                          <label>Company Slogan</label>
                            <input type="text" name="cslogan" id="cslogan" value="<?= showData($profile->c_slogan) ?>" class="form-control1" data-rule-required="true">
                          </div>  
                        </div>
                      </div>
                      <div class="row">  
                        <div class="col-md-6">
                          <div class="form-group">
                          <label>Contact</label>
                            <input type="text" name="contact" id="contact" value="<?= showData($profile->c_contact) ?>" class="form-control1" data-rule-required="true" data-rule-minlength="10" data-rule-maxlength="10">
                          </div>  
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label style="width: 100%;">Year</label>
                                <select name="cmonth" id="cmonth" class="cmonth">
                                <?php if(showData($profile->c_year)): $cyear = explode(' ', $profile->c_year); ?>
                                    <option value="<?= $cyear[0]; ?>"><?= $cyear[0]; ?></option>
                                <?php endif; ?>    
                                    <option value="January">January</option>  
                                    <option value="February">February</option>  
                                    <option value="March">March</option>  
                                    <option value="April">April</option>  
                                    <option value="May">May</option>  
                                    <option value="June">June</option>  
                                    <option value="July">July</option>  
                                    <option value="August">August</option>  
                                    <option value="September">September</option>  
                                    <option value="October">October</option>  
                                    <option value="November">November</option>  
                                    <option value="December">December</option>
                                </select>
                                <select name="cyear" id="cyear" class="cyear">
                                <?php if(showData($profile->c_year)): $cyear = explode(' ', $profile->c_year); ?>
                                <option value="<?= $cyear[1]; ?>"><?= $cyear[1]; ?></option>
                                <?php endif; ?>
                                  <?php for($i=1950; $i<=date('Y');$i++): ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                  <?php endfor; ?>
                                </select>   
                          </div>
                        </div> 
                      </div>  
                      <div class="row">  
                        <div class="col-md-6">
                          <div class="form-group">
                          <label>Company Url (website link)</label>
                            <input type="url" name="curl" id="curl" value="<?= showData($profile->c_url) ?>" class="form-control1" data-rule-required="true">
                          </div>  
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                          <label>Google Map</label>
                            <input type="url" name="gmap" id="gmap" value="<?= showData($profile->google_map) ?>" class="form-control1" data-rule-required="true">
                          </div>  
                        </div> 
                      </div>
                     <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Company Address</label>
                                <textarea class="form-control" name="caddr" id="caddr" data-rule-required="true"><?= showData($profile->c_addr) ?></textarea>
                          </div>
                        </div> 
                     </div>
                    </div>
                     <div class="col-md-3">      
                        <div class="col-md-12">
                          <div class="form-group text-center">
                          <label>Brand Logo</label>
                            <label class="upload-btn" style="display: block;">
                            <div class="comp-img" id="comp-img">
                                <img src="<?= base_url(showData('dist/img/clogo/thumb/'.$profile->c_logo)) ?>" class="img-responsive">
                            </div>
                                <input type="file" name="clogo" id="clogo">
                                <i class="fa fa-upload"></i>
                                Upload
                            </label>
                          </div> 
                        </div>
                     </div>     
                    </div>
                    <div class="panel-footer text-center">
                        <button type="submit" class="btn btn-success btn-sm c-btn"> <i class="fa fa-save"></i>  Save </button>
                        <button type="reset" class="btn btn-danger btn-sm c-btn"><i class="fa fa-refresh"></i> Reset </button> 
                    </div> 
                    <div id="clogoCoords">
                          <input type="hidden" class="x" name="x">
                          <input type="hidden" class="y" name="y">
                          <input type="hidden" class="w" name="w">
                          <input type="hidden" class="h" name="h">
                    </div>
                   </form> 
                   <script src="//cdn.tinymce.com/4/tinymce.min.js"></script> 
                </div>
            </div>
        </div>
    </div>
</section>    