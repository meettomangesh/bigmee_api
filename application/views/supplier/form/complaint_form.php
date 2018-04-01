
<?php if(isset($complaint)): ?>
<div class="container">
          <div class="row">
            <ul class="data-list">
              <li>
                  <strong>Status</strong>
                  <?php if($complaint->comp_status == 0): $class = "success"; $Status = "Open";
                        else: $class = "success"; $Status = "Open"; endif; ?>
                  <span><label class="label label-<?= $class ?>"><?= $Status ?></label></span>
              </li>
              <li>
                  <strong>Complaint to</strong>
                  <span><?= $complaint->acct_email ?></span>
              </li>
              <li>
                  <strong>Account Role</strong>
                  <span><?= $complaint->acct_role ?></span>
              </li>
              <li>
                  <strong>Refer by</strong>
                  <span><?= $complaint->refer_acct_id ?></span>
              </li>
              <li>
                  <strong>Solution</strong>
                  <span><?= $complaint->comp_solution ?></span>
              </li>
            </ul>
          </div>
        <form class="form-style2" id="complaintForm">
          <div class="row">
              <div class="form-group col-md-12">
                  <textarea name="complaint" class="form-control1" rows="10" placeholder="Enter your complaint here..."><?= $complaint->comp_message; ?></textarea>
              </div>
          </div>
        <?php if($complaint->comp_status == 0): ?>   
          <div class="row">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-sm btn-info">Update <i class="fa fa-arrow-up"></i></button>
            </div>
        <?php endif; ?>    
          </div>
        </form>
    </div>                

<?php else: ?>
<div class="container">
        <form class="form-style2" id="complaintForm">
          <div class="row">
              <div class="form-group col-md-12">
                  <textarea name="complaint" class="form-control1" rows="10" placeholder="Enter your complaint here..."></textarea>
                  <input type="hidden" name="acct_id" value="<?= $this->input->post('acct_id') ?>">
              </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-sm btn-success">Send <i class="fa fa-arrow-right"></i></button>
            </div>
          </div>
        </form>
    </div>                
<?php endif; ?>
