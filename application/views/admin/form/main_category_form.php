<?php if(isset($mcat_data)): ?>
<div class="box">
	`<div class="box-content">
		<form id="mainCatForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Name</label>
					<input type="text" name="cat_name" id="cat_name" value="<?= $mcat_data->mcat_name ?>" class="input-xlarge">
				</div>
				<div class="span6">
					<label class="control-label">Icon</label>
					<input type="text" name="cat_icon" id="cat_icon" value="<?= $mcat_data->mcat_icon ?>" class="input-xlarge">
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
	`<div class="box-content">
		<form id="mainCatForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Name</label>
					<input type="text" name="cat_name" id="cat_name" class="input-xlarge">
				</div>
				<div class="span6">
					<label class="control-label">Icon</label>
					<input type="text" name="cat_icon" id="cat_icon" class="input-xlarge">
				</div>
			</div>
			<div class="row-fluid text-right">
				<button type="submit" class="btn btn-primary">Add</button>
				<button type="reset" class="btn">Reset</button>
			</div>
	    </form>
	</div>
</div>

<?php endif; ?>