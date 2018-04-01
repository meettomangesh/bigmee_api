<?php if(isset($plan_data)): ?>
<div class="box">
  <div class="box-content">
	<form id="buildPlanForm" class="form-style1">
	  <div class="row-fluid text-right">
	    	<button type="button" class="btn btn-danger" onclick="openBinaryLevelWindow('<?= $plan_data->id ?>')">Binary Levels</button>
	  </div><br>
	  <div class="row-fluid">
	     <div class="span6">
	       <label class="control-label">Select Plan</label>
	       <select name="master_plan" id="master_plan">
	       	  <option value="">--Select One--</option>
		       <?php foreach($masterPlanData as $masterPlan): ?>
					<option value="<?= $masterPlan['plan_id']?>" <?php if($masterPlan['plan_id'] == $plan_data->plan_id) echo "selected"; ?>><?= $masterPlan['plan_name'] ?></option>	
		       <?php endforeach; ?>
	       </select>
	     </div>
	     <div class="span6">
	       <label class="control-label">User</label>
	       <select name="user_type" id="user_type">
				<option value="SU" <?php if($plan_data->user_type == 'SU') echo "selected"; ?>>Supplier</option>
				<option value="CU" <?php if($plan_data->user_type == 'CU') echo "selected"; ?>>Customer</option>	
		   </select>
	     </div>
	  </div>
	  <div class="row-fluid">
	     <div class="span6">
	       <label class="control-label">Plan Name</label>
	       <input type="text" name="plan_name" id="plan_name" value="<?= $plan_data->plan_name ?>">
	     </div>
	     <div class="span6">
	       <label class="control-label">Validity (days)</label>
	       <input type="text" name="plan_validity" id="plan_validity" value="<?= $plan_data->plan_validity ?>">
	   </div>
	  </div>
	    <div class="row-fluid text-right">
	    	<button type="submit" class="btn btn-success">Update</button>
	    	<button type="reset" class="btn">Reset</button>
	    </div>
	  </form>
	</div>
</div>

<?php else: ?>
<div class="box">
  <div class="box-content">
	<form id="buildPlanForm" class="form-style1">
	  <div class="row-fluid">
	     <div class="span6">
	       <label class="control-label">Select Plan</label>
	       <select name="master_plan" id="master_plan">
	       	  <option value="">--Select One--</option>
		       <?php foreach($masterPlanData as $masterPlan): ?>
					<option value="<?= $masterPlan['plan_id']?>"><?= $masterPlan['plan_name'] ?></option>	
		       <?php endforeach; ?>
	       </select>
	     </div>
	     <div class="span6">
	       <label class="control-label">User</label>
	       <select name="user_type" id="user_type">
				<option value="SU">Supplier</option>
				<option value="CU">Customer</option>	
		   </select>
	     </div>
	   </div>  
	  <div class="row-fluid">
	     <div class="span6">
	       <label class="control-label">Plan Name</label>
	       <input type="text" name="plan_name" id="plan_name">
	     </div>
	     <div class="span6">
	       <label class="control-label">Validity (days)</label>
	       <input type="text" name="plan_validity" id="plan_validity">
	     </div>
	   </div>
	    <div class="row-fluid text-right">
	    	<button type="submit" class="btn btn-primary">Create</button>
	    	<button type="reset" class="btn">Reset</button>
	    </div>
	  </form>
	</div>
</div>
<?php endif; ?>
