<?php if(isset($expo_data)): ?>
<div class="box">
	<div class="box-content">
		<form id="createExpoForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Title</label>
					<input type="text" name="e_title" id="e_title" value="<?= $expo_data->expo_title ?>">
				</div>
				<div class="span6">
					<label class="control-label">Charge</label>
					<input type="text" name="e_price" id="e_price" value="<?= $expo_data->expo_charge ?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Start</label>
					<input type="text" name="e_start" id="e_start" value="<?= $expo_data->expstart_date ?>">
				</div>
				<div class="span6">
					<label class="control-label">End</label>
					<input type="text" name="e_end" id="e_end" value="<?= $expo_data->expend_date ?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Category</label>
					<select name="e_category" id="e_category">
						<option value="">--Select--</option>
						<?php foreach($mcat_list as $category): ?>
							<option value="<?= $category['mcat_id'] ?>" <?php if($category['mcat_id'] == $expo_data->mcat_id) echo "selected"; ?>><?= $category['mcat_name'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="span6">
					<label class="control-label">Status</label>
						<label class="radio">
							<input type="radio" name="e_status" value="1" <?php if($expo_data->expo_status == 1) echo "checked"; ?>>
							<strong>Open</strong>
						</label>&nbsp;&nbsp;
					<label class="radio">
						<input type="radio" name="e_status" value="0" <?php if($expo_data->expo_status == 0) echo "checked"; ?>>
						<strong>Closed</strong>
					</label>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span8">
					<label class="control-label">About</label>
					<textarea name="e_about" id="e_about"><?= $expo_data->about_expo ?></textarea>
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
		<form id="createExpoForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Title</label>
					<input type="text" name="e_title" id="e_title">
				</div>
				<div class="span6">
					<label class="control-label">Charge</label>
					<input type="text" name="e_price" id="e_price">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Start</label>
					<input type="text" name="e_start" id="e_start">
				</div>
				<div class="span6">
					<label class="control-label">End</label>
					<input type="text" name="e_end" id="e_end">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Category</label>
					<select name="e_category" id="e_category">
						<option value="">--Select--</option>
						<?php foreach($mcat_list as $category): ?>
							<option value="<?= $category['mcat_id'] ?>"><?= $category['mcat_name'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span8">
					<label class="control-label">About</label>
					<textarea name="e_about" id="e_about"></textarea>
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