    <div class="box box-content">
        <form id="createStaffMemberForm" class="form-style1">
             <h4 class="text-center">Creating <?= $create_role ?> staff member</h4>
             <input type="hidden" name="u_role" value="<?= $create_role ?>">
             <hr>
             <div class="row-fluid">
               <?php if(in_array($create_role, $stateArea)): ?>
                <div class="span4">
                    <label class="control-label">State</label>
                      <select name="state" id="state" class="input-large" data-rule-required="true">
                          <option value="">--State--</option>
                            <?php foreach($stateList as $state): ?>
                               <option value="<?= $state['state_id'] ?>"><?=  $state['state_name'] ?></option>
                            <?php  endforeach; ?>
                      </select>
                    </div>
               <?php endif; ?> 

               <?php if(in_array($create_role, $distArea)): ?>  
                <div class="span4">
                    <label class="control-label">State</label>
                      <select name="state" id="state" class="input-large" data-rule-required="true">
                          <option value="">--State--</option>
                            <?php foreach($stateList as $state): ?>
                               <option value="<?= $state['state_id'] ?>"><?=  $state['state_name'] ?></option>
                            <?php  endforeach; ?>
                      </select>
                    </div>     
                    <div class="span4"> 
                        <label class="control-label">District</label>
                        <select name="dist" id="dist" class="input-large" data-rule-required="true">
                            <option value="">--District--</option>
                        </select>
                   </div>
               <?php endif; ?> 

               <?php if(in_array($create_role, $talukaArea)): ?>  
                <div class="span3">
                    <label class="control-label">State</label>
                      <select name="state" id="state" class="input-small" data-rule-required="true">
                          <option value="">--State--</option>
                            <?php foreach($stateList as $state): ?>
                               <option value="<?= $state['state_id'] ?>"><?=  $state['state_name'] ?></option>
                            <?php  endforeach; ?>
                      </select>
                    </div>  
                    <div class="span3"> 
                        <label class="control-label">District</label>
                        <select name="dist" id="dist" class="input-small" data-rule-required="true">
                            <option value="">--District--</option>
                        </select>
                   </div> 
                   <div class="span3">
                      <label class="control-label">Taluka</label>
                      <select id="tal" name="taluka" class="input-small" data-rule-required="true">
                        <option value="">---Taluka---</option>
                      </select>
                   </div>  
                   <div class="span3">
                      <label class="control-label">Pincode</label>
                      <select id="pincode" name="pincode" class="input-small" data-rule-required="true">
                        <option value="">---Pincode---</option>
                      </select>
                   </div>  
               <?php endif; ?> 

             </div>
              <div class="row-fluid"> 
                <div class="span6">
                    <label class="control-label">Name</label>
                    <input type="text" name="u_name" id="u_name" class="input-xlarge" />
                </div>

                <div class="span6">
                    <label class="control-label">Mobile</label>
                    <input type="text" name="u_mobile" id="u_mobile" class="input-xlarge" />
                </div>
              </div>    
                <div class="row-fluid">
                    <div class="span6">
                        <label class="control-label">Email</label>
                        <input type="email" name="u_email" id="u_email" class="input-xlarge" />
                    </div>

                    <div class="span6">
                        <label class="control-label">Pin code</label>
                        <input type="text" name="pin_code" id="pin_code" class="input-xlarge" />
                    </div>
                </div>

                <div class="row-fluid">
                 <div class="span6">
                    <label class="control-label">Gender</label>
                    <select name="u_gender" id="u_gender">
                        <option value="">--Select--</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                 </div>
                 <div class="span6">
                    <label class="control-label">Address</label>
                    <textarea name="u_addr" id="u_addr"></textarea>
                 </div>
                </div>
                <div class="row-fluid text-right">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button type="reset" class="btn">Reset</button>
                </div>
        </form>
    </div>