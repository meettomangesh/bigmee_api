<div class="box">
	<div class="box-content">
		<div class="row-fluid text-right">
			<div class="span12">
				<button type="button" class="btn btn-mini btn-primary" id="companyProfile">Company Profile</button>
			</div>
		</div>
		<form id="editUserForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">First Name</label>
					<?php $user = explode(' ', $user_data->user_name) ?>
					<input type="text" name="fname" id="fname" value="<?= $user[0] ?>">
				</div>
				<div class="span6">
					<label class="control-label">Last Name</label>
					<input type="text" name="lname" id="lname" value="<?= $user[1] ?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Mobile</label>
					<input type="text" name="mobile" id="mobile" value="<?= $user_data->primary_contact ?>">
				</div>
				<div class="span6">
					<label class="control-label">Email</label>
					<input type="text" name="email" id="email" value="<?= $user_data->uacct_email ?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Gender</label>
					<select name="gender" id="gender">
						<option value="">--Select--</option>
						<option <?php if($user_data->user_gender == 'M') echo "selected"; ?> value="M">Male</option>
						<option <?php if($user_data->user_gender == 'F') echo "selected"; ?> value="F">Female</option>
					</select>
				</div>
				<div class="span6">
					<label class="control-label">Status</label>
					<select name="status" id="status">
						<option value="">--Select--</option>
						<option <?php if($user_data->uacct_status == 1) echo "selected"; ?> value="1">Active</option>
						<option <?php if($user_data->uacct_status == 0) echo "selected"; ?> value="0">Inactive</option>
					</select>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Address</label>
					<textarea name="addr" id="addr"><?= $user_data->primary_addr ?></textarea>
				</div>
				<div class="span6">
					<label class="control-label">Dp Picture</label>
					<input class="input-file uniform_on" name="dpimg" id="dpimg" type="file">
					<img class="dp-preview" src="<?php if($user_data->dp_img): echo base_url('dist/img/dp/thumb/'.$user_data->dp_img); else: echo base_url('/dist/img/alt/no-img.png'); endif; ?>">
				</div>
			</div>
			<div class="row-fluid text-right">
				<button type="submit" class="btn btn-primary">Update</button>
				<button type="reset" class="btn">Reset</button>
			</div>
		</form>
	</div>
</div>