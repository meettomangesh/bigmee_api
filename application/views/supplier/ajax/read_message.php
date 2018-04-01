<?php if(isset($read_message) && $read_message == true) : ?>
	<form class="form-style1" id="forwardMessageForm">
			<?php if($message->is_web_msg == 1): ?>
			<div class="row">
				<div class="col-md-3">
					<label class="label label-danger">Enquiry</label>
				</div>
				<div class="col-md-6">	
					<span>From</span> <?= $message->reference_name ?>
				</div>	
			</div><hr>
			<?php endif;?>

	     <div class="row">
				<div class="col-sm-8 form-group">
					<label class="control-label">Message</label>
					<textarea class="form-control" name="msg" id="msg" placeholder="Type your message..." data-rule-required="true" rows="6"><?= $message->msg_content ?></textarea>
				</div>

				<div class="col-md-4 form-group">
					<p><label class="control-label">Forward to</label></p>
					<label class="radio-inline">
						<input type="radio" name="send_type" class="send_type" value="fc" checked="true"> Contacts
					</label>
					<label class="radio-inline">
						<input type="radio" name="send_type" class="send_type" value="mn">Manual
					</label>
				</div>
		</div>
	     <div class="row">
				<div id="contact_list">
				<?php if($message->msg_type == "M"): ?>
					<div class="col-md-6 form-group">
						<label class="control-label">Select Mobile</label>
						<select id="contact_id" class="contact_id form-control" name="mobile">
							<option value="">--Select One--</option>
							<?php foreach($contact_list as $contact): ?>
								<option value="<?= $contact['contact_id'] ?>"><?= $contact['c_mobile'].' ('.$contact['cf_name'].' '.$contact['cl_name'].')' ?></option>
							<?php endforeach; ?>	
							</select>
					</div>
					<input type="hidden" name="type" value="M">
				<?php endif; ?>
				<?php if($message->msg_type == "E"): ?>
					<div class="col-md-6 form-group">
						<label class="control-label">Select Email</label>
						<select id="contact_id" class="contact_id form-control" name="email">
							<option value="">--Select One--</option>
							<?php foreach($contact_list as $contact): ?>
								<option value="<?= $contact['contact_id'] ?>"><?= $contact['c_email'].' ('.$contact['cf_name'].' '.$contact['cl_name'].')' ?></option>
							<?php endforeach; ?>	
							</select>
					</div>
					<div class="col-md-6 form-group">
							<?php if(count($message_attachment) > 0): ?>
							<p><label class="control-label">Attachment</label></p>
									<a class="btn btn-info btn-xs" target="_blank" href="<?= $message_attachment->attachment_url ?>"><i class="fa fa-file"></i> Open</a>
							<?php endif; ?>	

					</div>
					<input type="hidden" name="type" value="E">
				<?php endif; ?>
				<?php if($message->msg_type == "W"): ?>
					<div class="col-md-6 form-group">
						<label class="control-label">Select Whatsapp</label>
						<select id="contact_id" class="contact_id form-control" name="mobile">
							<option value="">--Select One--</option>
							<?php foreach($contact_list as $contact): ?>
								<option value="<?= $contact['contact_id'] ?>"><?= $contact['c_whatsapp_no'].' ('.$contact['cf_name'].' '.$contact['cl_name'].')' ?></option>
							<?php endforeach; ?>	
							</select>
					</div>
					<div class="col-md-6 form-group">
							<?php if(count($message_attachment) > 0): ?>
							<p><label class="control-label">Attachment</label></p>
									<a class="btn btn-info btn-xs" target="_blank" href="<?= $message_attachment->attachment_url ?>"><i class="fa fa-file"></i> Open</a>
							<?php endif; ?>

					</div>
				<?php endif; ?>
				</div>

				<div id="manual_contact" style="display: none;">
				<?php if($message->msg_type == "M"): ?>
					<div class="col-md-6 form-group">
						<label class="control-label">Mobile</label>
						<input type="tel" name="input_mobile" class="form-control">
					</div>
					<input type="hidden" name="type" value="M">
				<?php endif; ?>
				<?php if($message->msg_type == "E"): ?>
					<div class="col-md-6 form-group">
						<label>Email</label>
						<input type="email" name="input_email" class="form-control">
					</div>
					<input type="hidden" name="type" value="E">
				<?php endif; ?>
				<?php if($message->msg_type == "W"): ?>
					<div class="col-md-6 form-group">
						<label>Whatsapp</label>
						<input type="tel" name="input_mobile" class="form-control">
					</div>
					<input type="hidden" name="type" value="W">
				<?php endif; ?>
				</div>
			</div>	
			<div class="row text-center">
				<button class="btn btn-success ce5" type="submit" id="sendMsg">Forward <i class="fa fa-forward"></i></button>
			</div>
	</form>
<?php endif ?>

<?php if(isset($reply_message) && $reply_message == true ): ?>

	<form class="form-style1" id="replyMessageForm">
			<?php if($message->is_web_msg == 1): ?>
			<div class="row">
				<div class="col-md-3">
					<label class="label label-danger">Enquiry</label>
				</div>
				<div class="col-md-6">	
					<span>From</span> <?= $message->reference_name ?>
				</div>	
			</div><hr>
			<?php endif;?>

	     <div class="row">
				<div class="col-sm-8 form-group">
					<label class="control-label">Message</label>
					<textarea class="form-control" name="msg" id="msg" placeholder="Type your message..." data-rule-required="true" rows="6"></textarea>
				</div>
		</div>
				<div class="row">
					<input type="hidden" name="type" value="<?= $message->msg_type ?>">
				
					<div class="col-md-6 form-group">
							<?php if(count($message_attachment) > 0): ?>
							<p><label class="control-label">Attachment</label></p>
									<a class="btn btn-info btn-xs" target="_blank" href="<?= $message_attachment->attachment_url ?>"><i class="fa fa-file"></i> Open</a>
							<?php endif; ?>

					</div>
				</div>	
			<div class="row text-center">
				<button class="btn btn-success ce5" type="submit" id="sendMsg"><i class="fa fa-reply"></i> Reply</button>
			</div>
	</form>

<?php endif; ?>	