<div class="box">
	<div class="box-content">
		<form id="editCompanyProfileForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Company Name</label>
					<input type="text" name="cname" id="cname" value="<?= $user_data->c_name ?>">
				</div>
				<div class="span6">
					<label class="control-label">Slogan</label>
					<input type="text" name="cslogan" id="cslogan" value="<?= $user_data->c_slogan ?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Contact</label>
					<input type="text" name="contact" id="contact" value="<?= $user_data->c_contact ?>">
				</div>
				<div class="span6 company-year">
				<?php if(showData($user_data->c_year)) $cyear = explode(' ', $user_data->c_year);else $cyear = array('',''); ?>
					<label class="control-label">Year</label>
					<select name="cmonth" id="cmonth">
						<option value="">--Select--</option>
						<option <?php if($cyear[0] == "January") echo "selected"; ?> value="January">January</option>
						<option <?php if($cyear[0] == "February") echo "selected"; ?> value="February">February</option>
						<option <?php if($cyear[0] == "March") echo "selected"; ?> value="March">March</option>
						<option <?php if($cyear[0] == "April") echo "selected"; ?> value="April">April</option>
						<option <?php if($cyear[0] == "May") echo "selected"; ?> value="May">May</option>
						<option <?php if($cyear[0] == "June") echo "selected"; ?> value="June">June</option>
						<option <?php if($cyear[0] == "July") echo "selected"; ?> value="July">July</option>
						<option <?php if($cyear[0] == "August") echo "selected"; ?> value="August">August</option>
						<option <?php if($cyear[0] == "September") echo "selected"; ?> value="September">September</option>
						<option <?php if($cyear[0] == "October") echo "selected"; ?> value="October">October</option>
						<option <?php if($cyear[0] == "November") echo "selected"; ?> value="November">November</option>
						<option <?php if($cyear[0] == "December") echo "selected"; ?> value="December">December</option>
					</select>
					<select name="cyear" id="cyear" class="cyear">
                           <?php for($i=1950; $i<=date('Y');$i++): ?>
                                 <option <?php if($cyear[1] == $i) echo "selected"; ?> value="<?= $i ?>"><?= $i ?></option>
                           <?php endfor; ?>
					</select>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Company Url</label>
					<input type="text" name="curl" id="curl" value="<?= $user_data->c_url ?>">
				</div>
				<div class="span6">
					<label class="control-label">Google Map</label>
					<input type="text" name="gmap" id="gmap" value="<?= $user_data->google_map ?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Address</label>
					<textarea name="caddr" id="caddr"><?= $user_data->c_addr ?></textarea>
				</div>
				<div class="span6">
					<label class="control-label" for="event_img">Image</label>
					<input class="input-file uniform_on" name="clogo" id="clogo" type="file">
					<img class="dp-preview" src="<?php if($user_data->c_logo): echo base_url('dist/img/clogo/thumb/'.$user_data->c_logo); else: echo base_url('/dist/img/alt/no-img.png'); endif; ?>">
				</div>
			</div>
			<div class="row-fluid text-right">
				<button type="submit" class="btn btn-primary">Update</button>
				<button type="reset" class="btn">Reset</button>
			</div>
		</form>
	</div>
</div>