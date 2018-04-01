<?php if(isset($event_data)): ?>
	<div class="box">
	<div class="box-content">
		<form id="createEventForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Title</label>
					<input type="text" name="event_title" id="event_title" value="<?= $event_data->event_title ?>">
				</div>
				<div class="span6">
					<label class="control-label">Price</label>
					<input type="text" name="event_price" id="event_price" value="<?= $event_data->event_price ?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Date</label>
					<input type="text" name="event_date" id="event_date" value="<?= $event_data->event_date ?>" class="datepicker">
				</div>
				<div class="span6">
					<label class="control-label">Place</label>
					<input type="text" name="event_place" id="event_place" value="<?= $event_data->event_place ?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Address</label>
					<textarea name="event_addr" id="event_addr"><?= $event_data->event_addr ?></textarea>
				</div>
				<div class="span6">
					<label class="control-label">About event</label>
					<textarea name="event_desc" id="event_desc"><?= $event_data->event_detail ?></textarea>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label" for="event_img">Image</label>
					<input class="input-file uniform_on" name="event_img" id="event_img" type="file">
				</div>
				<div class="span6">
					<label class="control-label">Image</label>
					<img src="<?= base_url('dist/img/event/'.$event_data->event_img) ?>" class="event-img-preview">
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
		<form id="createEventForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Title</label>
					<input type="text" name="event_title" id="event_title">
				</div>
				<div class="span6">
					<label class="control-label">Price</label>
					<input type="text" name="event_price" id="event_price">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Date</label>
					<input type="text" name="event_date" id="event_date">
				</div>
				<div class="span6">
					<label class="control-label">Place</label>
					<input type="text" name="event_place" id="event_place">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Address</label>
					<textarea name="event_addr" id="event_addr"></textarea>
				</div>
				<div class="span6">
					<label class="control-label">About event</label>
					<textarea name="event_desc" id="event_desc"></textarea>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label" for="event_img">Image</label>
					<input class="input-file uniform_on" name="event_img" id="event_img" type="file">
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