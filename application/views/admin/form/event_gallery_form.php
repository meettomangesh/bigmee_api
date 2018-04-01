<div class="box">
	<div class="box-content">
		<form id="EventGalleryForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label" for="event_img">Image</label>
					<input class="input-file uniform_on" name="event_img" id="event_img" type="file">
				</div>
				<div class="span6">
					<label class="control-label" for="event_img">Image</label>
					<img src="<?= base_url('dist/img/alt/no-img.png') ?>" class="event-img-preview">
				</div>
			</div>
				<h3>Gallary</h3>
				<div class="row-fluid">
					<div class="span12" id="eventGalleryPreview">
					<?php if($event_gallery):
						  foreach($event_gallery as $gallery): ?>
								<div class="span12" id="eventGalleryPreview">
									<div class='span4'>
										<a href='javascript: void(0)' class='delete-event-img' data-value="<?= $gallery['egallery_id'] ?>">
										<span class='halflings-icon trash'></span>
									</a>
									<img class='event-gallery-img' src="<?= base_url("dist/img/event/alt/".$gallery['egallery_img']) ?>">
									</div>
								</div>
							</div>
					<?php endforeach;
						 endif;	 ?>
			</div>
			<div class="row-fluid text-right">
				<button type="submit" class="btn btn-primary">Upload</button>
				<button type="reset" class="btn">Reset</button>
			</div>
		</form>
	</div>
</div>