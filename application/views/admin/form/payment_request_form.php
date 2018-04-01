<?php if($payment_data->payment_type == "C" || $payment_data->payment_type == "W"): ?>
<div class="box">
	<div class="box-content">
		<form id="paymentRequestForm-ad" class="form-style1">
			<div class="row-fluid">

			    <?php if($bank_data): ?>
			    <div class="panel">
			       <div class="text-right"> 
			        <button type="button" class="btn btn-danger btn-sm" onclick="return getSupplierBank(<?= $payment_data->uacct_id ?>)"><i class="fa fa-address-card"></i> Bank</button>
			       </div> 
			    </div>
			    <?php endif; ?>

				<div class="span10">
					<select name="payment_status" id="payment_status" class="input-large">
						<option value="">--Select One--</option>
						<?php if($payment_data->payment_status != 'R'): ?>
						<option <?php if($payment_data->payment_status == 'T') echo 'selected'; ?> value="T">Accept</option>
						<?php endif; ?>
						<option <?php if($payment_data->payment_status == 'R') echo 'selected'; ?> value="R">Reject</option>
					
					</select>
				</div>
				<div class="span12">
					<label class="control-label">Note</label>
					<textarea name="note" id="note"><?= $payment_data->payment_msg ?></textarea>
				</div>
			</div>
			<div class="row-fluid text-right">
				<button type="submit" class="btn btn-success">Change</button>
				<button type="reset" class="btn">Reset</button>
			</div>
		</form>
	</div>
</div>
<?php elseif($payment_data->payment_type == "O"): ?>
<div class="box">
	<div class="box-content">
		<form id="paymentRequestForm-ad" class="form-style1">
			<div class="row-fluid">
				<ul class="data-list">
					<li>
						<strong>Payment Id</strong>
						<span><?= $payment_data->payment_id ?></span>
					</li>
					<li>
						<strong>Date</strong>
						<span><?= formateDate($payment_data->payment_addon) ?></span>
					</li>
					<li>
						<strong>Amount</strong>
						<span><?= $payment_data->payment_amt ?></span>
					</li>
					<li>
						<strong>Balance</strong>
						<span><?= $payment_data->payment_balance ?></span>
					</li>
					<li>
						<strong>Txn Id</strong>
						<span><?= $payment_data->txn_id ?></span>
					</li>
					<li>
						<strong>Reference</strong>
						<span><?= $payment_data->payment_reference ?></span>
					</li>
					<li>
						<strong>Status</strong>
						<?php 
							if($payment_data->payment_status == "T"):
					                $status = "Success";
					                $label  = "success"; 
					            elseif($payment_data->payment_status == "F"):
					                $status = "Pending";
					                $label  = "warning";  
					             endif;  
						?>
						<span><label class="label label-<?= $label ?>"><?= $status ?></label></span>
					</li>
				
				</ul>
			</div>	
		</form>
	</div>
</div>
<?php endif; ?>	