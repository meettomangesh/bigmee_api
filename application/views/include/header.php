<!DOCTYPE html>
<html class="no-js" lang="">
 <!-- head section start -->
    <head>
        <?=(isset($meta) ? meta_tags($meta) : meta_tags());?>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('dist/img/favicon.png') ?>">
		<!-- google fonts -->
		<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
		<!-- all css here -->
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="<?= base_url('dist/css/jquery-ui.min.css') ?>">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="<?= base_url('dist/css/meanmenu.min.css?random='.rand(20000, 100000)) ?>">
		<!-- nivo slider CSS -->
		<link rel="stylesheet" href="<?= base_url('dist/css/nivo-slider.css') ?>" type="text/css" />
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="<?= base_url('dist/css/owl.carousel.css') ?>">
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?= base_url('dist/css/bootstrap.min.css') ?>">
        <!-- lobobox css -->
        <link rel="stylesheet" href="<?= base_url('dist/lobibox-master/dist/css/lobibox.min.css"') ?>" >
		<!-- style css -->
		<link rel="stylesheet" href="<?= base_url('dist/css/style.css?random='.rand(20000, 100000)) ?>) ?>">
		<!-- responsive css -->
        <link rel="stylesheet" href="<?= base_url('dist/css/responsive.css') ?>">
        
		<!-- jquery latest version -->
        <script src="<?= base_url('dist/js/vendor/jquery-1.12.0.min.js') ?>"></script>
	    <script>var baseurl = "<?= base_url(); ?>";</script>

	<!-- Nivo slider js -->
	<script src="<?= base_url('dist/js/jquery.nivo.slider.js') ?>"></script> 
        <?php if(isset($css)) print set_css($css); ?>
    </head>
<!-- head section End -->   