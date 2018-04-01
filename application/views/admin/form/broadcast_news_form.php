<div class="box">
	<div class="box-content">
		<form id="broadcastNewsForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">News</label>
					<select name="news_title" id="news_title" class="input-large">
						<option value="">--Select--</option>
						<?php foreach($news_list as $news): ?>
							<option value="<?= $news['news_id'] ?>"><?= $news['news_title'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="span6">
					<label class="control-label">News Type</label>
					<select name="news_type" id="news_type" class="input-large">
						<option value="">--Select--</option>
							<option value="0">Welcome</option>
							<option value="1">Scroll</option>
					</select>
				</div>
				<div class="span6">
					<label class="control-label">Add Accounts</label>
					<select name="accounts[]" id="accounts" multiple data-rel="chosen" rel="chosen">
                            <?php foreach($role_config as $role): ?>
                              <option value="<?= $role['role_id'] ?>" <?php if($role['role_id'] == 'SP') echo "selected"; ?>><?= $role['role_name'] ?></option>
                            <?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="row-fluid text-right">
					<button type="submit" class="btn btn-primary">Create</button>
					<button type="reset" class="btn">Reset</button>
				</div>
			</form>
		</div>
	</div>