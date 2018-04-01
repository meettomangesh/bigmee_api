
<div class="col-md-4">
	<div class="panel panel-success kyc-section">
		<div class="panel-heading">
			<h5>Pan Card</h5>
		</div>
		<div class="panel-body kyc-document">
			<div class="col-md-12">
				<strong><?= $kyc_document->pan_card ?></strong>
				<?php if($kyc_document->pan_card_copy): ?>
				<a href="<?= base_url('dist/img/spkyc/pan/'.$kyc_document->pan_card_copy) ?>" class="fancybox">
				<img src="<?= base_url('dist/img/spkyc/pan/'.$kyc_document->pan_card_copy) ?>" class="img-rounded" alt="pan card copy">
				</a>
				<?php endif; ?>
				<div class="form-group">
					<button class="btn btn-sm btn-success" onclick="return uploadKYCScanCopy('pan_card')"><i class="fa fa-upload"></i> </button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-4">
	<div class="panel panel-success kyc-section">
		<div class="panel-heading">
			<h5>Adhaar Card</h5>
		</div>
		<div class="panel-body kyc-document">
			<div class="col-md-12">
				<strong><?= $kyc_document->adhaar_card ?></strong>

				<?php if($kyc_document->adhaar_card_copy): ?>
				<a href="<?= base_url('dist/img/spkyc/adhaar/'.$kyc_document->adhaar_card_copy) ?>" class="fancybox">
					<img src="<?= base_url('dist/img/spkyc/adhaar/'.$kyc_document->adhaar_card_copy) ?>" class="img-rounded" alt="Adhaar card copy">
				</a>
				<?php endif; ?>
				<div class="form-group">
					<button class="btn btn-sm btn-success" onclick="return uploadKYCScanCopy('adhaar_card')"><i class="fa fa-upload"></i></button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-4 kyc-section">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h5>Business Card</h5>
		</div>
		<div class="panel-body kyc-document">
			<div class="col-md-12">
				<strong><?= $kyc_document->shopact_regno ?></strong>

				<?php if($kyc_document->adhaar_card_copy): ?>
				<a href="<?= base_url('dist/img/spkyc/shopact/'.$kyc_document->shopact_copy) ?>" class="fancybox">
					<img src="<?= base_url('dist/img/spkyc/shopact/'.$kyc_document->shopact_copy) ?>" class="img-rounded" alt="Shopact copy">
				</a>	
				<?php endif; ?>
				<div class="form-group">
					<button class="btn btn-sm btn-success" onclick="return uploadKYCScanCopy('shop_act')"><i class="fa fa-upload"></i> </button>
				</div>
			</div>
		</div>
	</div>
</div>