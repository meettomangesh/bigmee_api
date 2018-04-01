
    <div class="box box-content">
        <form id="initialStaffForm" class="form-style1">
            <div class="row-fluid">
              <div class="span6">
                  <label class="control-label">Role</label>
                  <select name="select_role" class="input-large">
                      <option value="">--Select--</option>
                          <?php foreach($role_config as $role): ?>
                             <?php if($role['role_id'] != 'SP' && $role['role_id'] != 'SA'): ?> 
                              <option value="<?= $role['role_id'] ?>"><?= $role['role_name'] ?></option>
                              <?php endif; ?>
                          <?php endforeach; ?>
                  </select>
                </div>
               </div>
                <div class="row-fluid text-right">
                    <button type="submit" class="btn btn-primary">Generate</button>
                </div>
            </form>
        </div>