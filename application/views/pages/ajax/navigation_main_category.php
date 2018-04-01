<?php foreach($mcat_list as $main):?>
<?php
$encodedParams = urlencode('base_cat[]').'='.$main['mcat_id'];
?>

	<li class="single-menu colmd4">
    	<a href="<?= base_url('pages/product-view?'.$encodedParams) ?>"><?= $main['mcat_name'] ?></a>
	</li>
<?php endforeach; ?>  