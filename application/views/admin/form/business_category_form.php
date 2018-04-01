<?php if(isset($bcat_data)): ?>

<div class="box">
  <div class="box-content">
	<form id="businessCatForm" class="form-style1">
	   <div class="row-fluid">
	     <div class="span6">
	        <label class="control-label">Main Category</label>
	        <select name="mcat_name" id="mcat_name">
	           <option value="">--Select--</option>
	           <?php foreach($mcat_list as $cat): ?>
	           	<option value="<?= $cat['mcat_id'] ?>" <?php if($bcat_data->mcat_id == $cat['mcat_id']) echo "selected"; ?> ><?= $cat['mcat_name'] ?></option>	
	           <?php endforeach; ?>
	        </select>
	     </div>
	     <div class="span6">
	        <label class="control-label">Name</label>
	        <input type="text" name="cat_name" id="cat_name" value="<?= $bcat_data->bcat_name ?>" class="input-xlarge">
	     <div>
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
	<form id="businessCatForm" class="form-style1">
	   <div class="row-fluid">
	     <div class="span6">
	        <label class="control-label">Main Category</label>
	        <select name="mcat_name" id="mcat_name">
	           <option value="">--Select--</option>
	           <?php foreach($mcat_list as $cat): ?>
	           	<option value="<?= $cat['mcat_id'] ?>"><?= $cat['mcat_name'] ?></option>	
	           <?php endforeach; ?>
	        </select>
	     </div>
	     <div class="span6">
	        <label class="control-label">Name</label>
	        <input type="text" name="cat_name" id="cat_name" class="input-xlarge">
	     <div>
	    </div>
	    <div class="row-fluid text-right">
	       <button type="submit" class="btn btn-primary">Add</button>
	       <button type="reset" class="btn">Reset</button>
	    </div>
	</form>
 </div>
</div>
<?php endif; ?>