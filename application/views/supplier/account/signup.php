<!-- login content section start -->
		<div class="login-area">
            <div class="container">
            
                   <h4 class="panel-title">
                   <?php if($this->input->post('acct_type') == "SU"): ?>
                        Supplier signup
                      <?php else: ?> 
                        Customer signup
                   <?php endif; ?>
                   </h4>
                    <div class="container">
                       <div class="tb-login-form res">
                          <form id="signupForm" class="form-style2">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="fname" id="fname" class="form-control" data-rule-required="true" placeholder="First Name">
                                    <input type="hidden" name="acct_type" value="<?= $this->input->post('acct_type') ?>">
                                </div>
                               </div> 
                              <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="lname" id="lname" class="form-control" data-rule-required="true" placeholder="Last Name">
                                </div>
                              </div>
                             </div>
                            <div class="row"> 
                              <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" value="<?= $this->input->post('email') ?>" readonly>
                              </div>
                             </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="mobile" id="mobile" class="form-control"  value="<?= $this->input->post('mobile') ?>" readonly>
                                </div>
                               </div>
                             </div>
                            <div class="row"> 
                              <div class="col-md-4">
                                <div class="form-group">
                                <input type="text" class="form-control" value="<?= $api_response->state ?>" readonly>
                                <input type="hidden" name="state" value="<?= $area->state_id ?>">
                              </div>
                             </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                <input type="text" class="form-control" value="<?= $api_response->district ?>" readonly>
                                <input type="hidden" name="dist" value="<?= $area->dist_id ?>">
                              </div>
                             </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                <input type="text" class="form-control" data-rule-required="true" value="<?= $api_response->taluka ?>" readonly>
                                <input type="hidden" name="tal" value="<?= $area->tal_id ?>">
                              </div>
                             </div> 
                             </div>
                            <div class="row"> 
                              <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" class="form-control"  value="<?= $api_response->pincode ?>" readonly>
                                <input type="hidden" name="pcode" value="<?= $area->pincode_id ?>">
                              </div>
                             </div> 
                             <?php if($this->input->post('acct_type') == "SU"): ?>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <select name="catname" id="catname" class="form-control" data-rule-required="true">
                                        <option value="">--Bussiness Field--</option>
                                        <?php foreach($mcat_list as $cat): ?>
                                        <option value="<?= $cat['mcat_id'] ?>"><?= $cat['mcat_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                               </div> 
                             <?php endif; ?>
                             </div> 
                                <p class="text-center">
                                    <input type="submit" value="SignUp" class="btn btn-success">
                                </p>
                            </form>
                        </div>
                 </div>
          </div> 
        </div>
      </div>
		<!-- login  content section end --> 