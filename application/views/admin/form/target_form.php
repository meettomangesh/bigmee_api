<?php if(isset($target_data)): ?>

<div class="box">
	<div class="box-content">
		<form id="newTargetForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Title</label>
					<input type="text" name="t_title" id="t_title" value="<?= $target_data->target_title ?>">
				</div>
				<div class="span6">
					<label class="control-label">Target (days)</label>
					<input type="text" name="t_days" id="t_days" value="<?= $target_data->target_days ?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Target</label>
					<input type="text" name="t_target" id="t_target" value="<?= $target_data->target ?>">
				</div>
			</div>
			<div class="row-fluid text-right">
				<button type="submit" class="btn btn-primary">Update</button>
				<button type="reset" class="btn">Reset</button>
			</div>
		</form>
	</div>
</div>

<?php else: ?>	
<div class="box">
	<div class="box-content">
		<form id="newTargetForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Title</label>
					<input type="text" name="t_title" id="t_title">
				</div>
				<div class="span6">
					<label class="control-label">Target (days)</label>
					<input type="text" name="t_days" id="t_days">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Target</label>
					<input type="text" name="t_target" id="t_target">
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