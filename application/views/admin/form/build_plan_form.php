<?php if(isset($plan_data)): ?>
<div class="box">
  <div class="box-content">
	<form id="buildPlanForm" class="form-style1">
	  <div class="row-fluid">
	     <div class="span6">
	       <label class="control-label">Plan Name</label>
	       <input type="text" name="plan_name" id="plan_name" value="<?= $plan_data->plan_name ?>">
	     </div>
	     <div class="span6">
	       <label class="control-label">Price</label>
	       <input type="text" name="plan_price" id="plan_price" class="input-xlarge" value="<?= $plan_data->plan_price ?>">
	     </div>
	   </div>
	   <div class="row-fluid">
	     <div class="span6">
	       <label class="control-label">Validity (days)</label>
	       <input type="text" name="plan_validity" id="plan_validity" value="<?= $plan_data->plan_validity ?>">
	     </div>
	     <div class="span6">
	        <label class="control-label">Product Limit</label>
	        <input type="text" name="product_limit" id="product_limit" class="input-xlarge" value="<?= $plan_data->product_limit ?>">
	     </div>
	   </div>
	   <div class="row-fluid">
	     <div class="span6">
	       <label class="control-label">Sms Charge</label>
	       <input type="text" name="sms_charge" id="sms_charge" value="<?= $plan_data->sms_charge ?>">
	     </div>
	     <div class="span6">
	       <label class="control-label">Sms Limit</label>
	       <input type="text" name="sms_limit" id="sms_limit" class="input-xlarge" value="<?= $plan_data->sms_limit ?>">
	     </div>
	   </div>
	   <div class="row-fluid">
	     <div class="span6">
	       <label class="control-label">Top Product Charge</label>
	       <input type="text" name="top_prod_charge" id="top_prod_charge" value="<?= $plan_data->top_product_charge ?>">
	     </div>
	     <div class="span6">
	       <label class="control-label">Top Product Limit</label>
	       <input type="text" name="top_prod_limit" id="top_prod_limit" class="input-xlarge" value="<?= $plan_data->top_product_limit ?>">
	     </div>
	   </div>
	   <div class="row-fluid">
	   	  <div class="span6">
	   	    <label class="control-label">Adv Product Charge</label>
	   	    <input type="text" name="adv_prod_charge" id="adv_prod_charge" value="<?= $plan_data->adv_prod_charge ?>">
	   	  </div>
	   	  <div class="span6">
	   	    <label class="control-label">Adv Product Limit</label>
	   	    <input type="text" name="adv_prod_limit" id="adv_prod_limit" class="input-xlarge" value="<?= $plan_data->adv_prod_limit ?>">
	   	  </div>
	    </div>
	    <div class="row-fluid">
	   	  <div class="span6">
	   	    <label class="control-label">Enquiry Show Charges</label>
	   	    <input type="text" name="enq_charge" id="enq_charge" value="<?= $plan_data->enq_show_charge ?>">
	   	  </div>
	   	  <div class="span6">
	   	    <label class="control-label">Refer Income Charge</label>
	   	    <input type="text" name="refer_income_charge" id="refer_income_charge" value="<?= $plan_data->refer_income_charge ?>">
	   	  </div>	    	
	    </div>
	    <div class="row-fluid">
	      <div class="span8">
	         <label class="control-label">About plan</label>
	         <textarea type="text" name="plan_desc" id="plan_desc"><?= $plan_data->plan_desc ?></textarea>
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
	       <label class="control-label">Plan Name</label>
	       <input type="text" name="plan_name" id="plan_name">
	     </div>
	     <div class="span6">
	       <label class="control-label">Price</label>
	       <input type="text" name="plan_price" id="plan_price" class="input-xlarge">
	     </div>
	   </div>
	   <div class="row-fluid">
	     <div class="span6">
	       <label class="control-label">Validity (days)</label>
	       <input type="text" name="plan_validity" id="plan_validity">
	     </div>
	     <div class="span6">
	        <label class="control-label">Product Limit</label>
	        <input type="text" name="product_limit" id="product_limit" class="input-xlarge">
	     </div>
	   </div>
	   <div class="row-fluid">
	     <div class="span6">
	       <label class="control-label">Sms Charge</label>
	       <input type="text" name="sms_charge" id="sms_charge">
	     </div>
	     <div class="span6">
	       <label class="control-label">Sms Limit</label>
	       <input type="text" name="sms_limit" id="sms_limit" class="input-xlarge">
	     </div>
	   </div>
	   <div class="row-fluid">
	     <div class="span6">
	       <label class="control-label">Top Product Charge</label>
	       <input type="text" name="top_prod_charge" id="top_prod_charge">
	     </div>
	     <div class="span6">
	       <label class="control-label">Top Product Limit</label>
	       <input type="text" name="top_prod_limit" id="top_prod_limit" class="input-xlarge">
	     </div>
	   </div>
	   <div class="row-fluid">
	   	  <div class="span6">
	   	    <label class="control-label">Adv Product Charge</label>
	   	    <input type="text" name="adv_prod_charge" id="adv_prod_charge">
	   	  </div>
	   	  <div class="span6">
	   	    <label class="control-label">Adv Product Limit</label>
	   	    <input type="text" name="adv_prod_limit" id="adv_prod_limit" class="input-xlarge">
	   	  </div>
	    </div>
	    <div class="row-fluid">
	   	  <div class="span6">
	   	    <label class="control-label">Enquiry Show Charges</label>
	   	    <input type="text" name="enq_charge" id="enq_charge">
	   	  </div>
	   	  <div class="span6">
	   	    <label class="control-label">Refer Income Charge</label>
	   	    <input type="text" name="refer_income_charge" id="refer_income_charge"">
	   	  </div>	    	
	    </div>
	    <div class="row-fluid">
	      <div class="span8">
	         <label class="control-label">About plan</label>
	         <textarea type="text" name="plan_desc" id="plan_desc"></textarea>
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
