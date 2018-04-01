<div class="box">
	<div class="box-content">
		<form id="advProdStatusForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">Status</label>
					<select name="prod_status" id="prod_status">
						<option value="">--Select--</option>
						<option <?php if($adv_product->adv_prod_status == 'T') echo 'selected'; ?> value="T">Accept</option>
						<option <?php if($adv_product->adv_prod_status == 'R') echo 'selected'; ?> value="R">Reject</option>
					</select>
				</div>
			</div>
			<div class="row-fluid text-right">
				<button type="submit" class="btn btn-primary">Change</button>
				<button type="reset" class="btn">Reset</button>
			</div>
		</form>
	</div>
</div>