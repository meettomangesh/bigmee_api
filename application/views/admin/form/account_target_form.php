<?php if(isset($target_data)): ?>
<div class="box">
	<div class="box-content">
		<form id="acctTargetForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Target</label>
					<select name="target_title" id="target_title">
						<option value="">--Select--</option>
						<?php foreach($target_list as $target): ?>
							<option value="<?= $target['target_id'] ?>" <?php if($target_data->target_id == $target['target_id']) echo "selected"; ?>><?= $target['target_title'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="span6">
					<label class="control-label">Account</label>
					<select name="acct_name" id="acct_name">
						<option value="">--Select--</option>
						<?php foreach($account_list as $account): ?>
							<?php if($account['acct_role'] != 'SA'): ?>
							<option value="<?= $account['acct_id'] ?>" <?php if($target_data->acct_id == $account['acct_id']) echo "selected"; ?>><?= $account['user_name'].' ('.$account['acct_mobile'].')' ?></option>
						<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Status</label>
					<select name="target_status" id="target_status">
						<option value="">--Status--</option>
						<option value="1" <?php if($target_data->target_status == 1) echo "selected"; ?>>Active</option>
						<option value="0" <?php if($target_data->target_status == 0) echo "selected"; ?>>Expired</option>
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

<?php else: ?>
<div class="box">
	<div class="box-content">
		<form id="acctTargetForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Target</label>
					<select name="target_title" id="target_title">
						<option value="">--Select--</option>
						<?php foreach($target_list as $target): ?>
							<option value="<?= $target['target_id'] ?>"><?= $target['target_title'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="span6">
					<label class="control-label">Account</label>
					<select name="acct_name" id="acct_name">
						<option value="">--Select--</option>
						<?php foreach($account_list as $account): ?>
							<?php if($account['acct_role'] != 'SA'): ?>
							<option value="<?= $account['acct_id'] ?>"><?= $account['user_name'].' ('.$account['acct_mobile'].')' ?></option>
						<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="row-fluid text-right">
				<button type="submit" class="btn btn-primary">Set</button>
				<button type="reset" class="btn">Reset</button>
			</div>
		</form>
	</div>
</div>
<?php endif; ?>