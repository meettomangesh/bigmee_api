
    <div class="box box-content">
       <?php if($staff_data->acct_role != "SA"): ?> 
        <div class="row-fluid">
          <div class="span6">
            <a class="btn btn-success btn-sm" href="javascript: void(0)" data-role="<?= $staff_data->acct_role ?>" id="setBdArea">Add Area</a>
          </div>
        </div> 
       <?php endif; ?> 
        <form id="editStaffForm" class="form-style1" name="editStaffForm">
            <div class="row-fluid">
                <div class="span6">
                    <label class="control-label">Role</label>
                    <select name="u_role" id="u_role" class="input-xlarge">
                    <option value="">--Role--</option>
                    <?php foreach($role_config as $role): ?>
                        <?php if($role['role_id'] != 'SP' && $role['role_id'] != 'SA'): ?> 
                            <option value="<?= $role['role_id'] ?>" <?php if($staff_data->acct_role == $role['role_id']) echo 'selected'; ?>><?= $role['role_name'] ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="span6">
                    <label class="control-label">Name</label>
                    <input type="text" name="u_name" id="u_name" value="<?= $staff_data->user_name ?>" class="input-xlarge" />
                </div>

                <div class="row-fluid">
                    <div class="span6">
                        <label class="control-label">Email</label>
                        <input type="email" name="u_email" id="u_email" value="<?= $staff_data->acct_email ?>" class="input-xlarge" />
                    </div>

                <div class="span6">
                    <label class="control-label">Mobile</label>
                    <input type="text" name="u_mobile" id="u_mobile" value="<?= $staff_data->acct_mobile ?>" class="input-xlarge" />
                </div>
                </div>

                <div class="row-fluid">
                 <div class="span6">
                    <label class="control-label">Gender</label>
                    <select name="u_gender" id="u_gender">
                        <option value="">--Select--</option>
                        <option <?php if($staff_data->user_gender == "M"){ echo "selected"; } ?> value="M">Male</option>
                        <option <?php if($staff_data->user_gender == "F") { echo "selected"; } ?> value="F">Female</option>
                    </select>
                 </div>
                 <?php if(in_array($this->session->userdata('type'), $status_role)): ?>
                 <div class="span6">
                    <label class="control-label">Status</label>
                    <select name="acct_status" id="acct_status">
                        <option value="">--Select--</option>
                        <option <?php if($staff_data->acct_status == 1){ echo "selected"; } ?> value="1">Active</option>
                        <option <?php if($staff_data->acct_status == 0) { echo "selected"; } ?> value="0">Inactive</option>
                    </select>
                 </div>
                 <?php endif; ?>
                </div>
                <div class="row-fluid">
                    <div class="span6">
                        <label class="control-label">Pin code</label>
                        <input type="text" name="pin_code" id="pin_code" value="<?= $staff_data->user_pincode ?>" class="input-xlarge" />
                    </div>
                 <div class="span6">
                    <label class="control-label">Address</label>
                    <textarea name="u_addr" id="u_addr"><?= $staff_data->user_addr ?></textarea>
                 </div>
                    
                </div>
                <div class="row-fluid text-right">
                    <button type="submit" class="btn btn-primary" id="updateStaffMemberBtn">Update</button>
                    <button type="reset" class="btn">Reset</button>
                </div>
            </div>
        </form>
    </div>