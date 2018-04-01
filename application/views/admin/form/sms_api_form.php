
<div class="box">
  <div class="box-content">
	<form id="smsApiForm" class="form-style1">
	   <div class="row-fluid">
	     <div class="span6">
	        <label class="control-label">Name</label>
	        <input type="text" name="api_name" id="api_name" value="<?= $api_data->api_name ?>" class="input-xlarge">
	     </div>
	     <div class="span6">
	        <label class="control-label">Status</label>
	        <select name="api_status" id="api_status" class="input-small">
	        	<option value="">--Select One--</option>
	        	<option value="1" <?php if($api_data->api_status == 1) echo"selected"; ?>>Active</option>
	        	<option value="0" <?php if($api_data->api_status == 0) echo"selected"; ?>>Deactive</option>
	        </select>
	     </div>
	    </div>
	    <div class="row-fluid text-right">
	       <button type="submit" class="btn btn-success">Update</button>
	       <button type="reset" class="btn">Reset</button>
	    </div>
	</form>
 </div>
</div>