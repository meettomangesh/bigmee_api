
            <div class="col-lg-10 col-md-9 right-content-panel">
              <form method="post" id="profileForm" class="form-style1"> 
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Basic Profile</h4>
                    </div>
                    <div class="panel-body">
                     <div class="col-md-9"> 
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                          <label>First Name</label>
                            <input type="text" name="fname" id="fname" class="form-control1" value="<?php if(showData($profile->user_name)){ $username = explode(' ', $profile->user_name); echo $username[0]; } ?>" data-rule-required="true">
                          </div>  
                        </div>   
                        <div class="col-md-6">
                          <div class="form-group">
                          <label>Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control1" value="<?php if(showData($profile->user_name)){ $username = explode(' ', $profile->user_name); echo $username[1]; } ?>" data-rule-required="true">
                          </div>  
                        </div>
                      </div>
                      <div class="row">  
                        <div class="col-md-6">
                          <div class="form-group">
                          <label>Mobile Number</label>
                            <input type="text" name="mobile" id="mobile" class="form-control1" value="<?= $profile->primary_contact ?>" data-rule-required="true" data-rule-minlength="10" data-rule-maxlength="10" disabled="true">
                          </div>  
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                          <label>Email Id</label>
                            <input type="email" name="email" id="email" value="<?= $profile->uacct_email ?>" class="form-control1" data-rule-required="true" disabled="true">
                          </div>  
                        </div> 
                      </div>  
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Gender</label>
                            <div class="form-control">
                                <label class="checkbox"><strong>Male</strong> <input type="radio" name="gender" value="Male" <?php if($profile->user_gender == "M"){echo "checked";} ?>></label>
                                <label class="checkbox"><strong>Female</strong> <input type="radio" name="gender" value="Female" <?php if($profile->user_gender == "F"){echo "checked";} ?>></label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Address</label>
                                <textarea class="form-control" name="addr" id="addr" data-rule-required="true"><?= showData($profile->primary_addr) ?></textarea>
                          </div>
                        </div> 
                      </div>
                     </div>
                     <div class="col-md-3">      
                        <div class="col-md-12">
                          <div class="form-group text-center">
                          <label style="display: block;">Profile Picture</label>
                           <label class="upload-btn">
                            <div class="dp-img">
                                <img src="<?php if(showData($profile->dp_img)){echo base_url('dist/img/dp/thumb/'.$profile->dp_img); }else{echo base_url('dist/img/alt/no-dp.jpg');} ?>" alt="profile-pic" class="img-circle" id="img-preview">
                            </div>
                                <input type="file" name="dpimg" id="dpimg">
                                <i class="fa fa-upload"></i>
                                Upload
                            </label>
                            <p id="file_error" class="text-danger"></p>  
                          </div> 
                        </div>
                     </div>     
                    </div>
                    <div class="panel-footer text-center">
                        <button type="submit" class="btn btn-success btn-sm c-btn"> <i class="fa fa-save"></i>  Save </button>
                        <button type="reset" class="btn btn-danger btn-sm c-btn"><i class="fa fa-refresh"></i> Reset </button> 
                    </div> 
                   </form> 
                </div>
            </div>
        </div>
    </div>
</section>  
