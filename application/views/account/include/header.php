<!DOCTYPE html>
<html class="no-js" lang="">
    <!-- head section start -->
    <head>
        <?= (isset($meta) ? meta_tags($meta) : meta_tags()); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
                ============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="<?= APP_DOMAIN ?>/dist/img/favicon.png">
        <!-- google fonts -->
        <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
        <!-- all css here -->
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="<?= APP_DOMAIN ?>/dist/css/min/jquery-ui.min.css" type='text/css'>
        <!-- meanmenu css -->
        <link rel="stylesheet" href="<?= APP_DOMAIN ?>/dist/css/min/meanmenu.min.css" type='text/css'>
        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="<?= APP_DOMAIN ?>/dist/css/min/nivo-slider.css" type="text/css" />
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="<?= APP_DOMAIN ?>/dist/css/min/owl.carousel.css" type='text/css'>
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?= APP_DOMAIN ?>/dist/css/min/bootstrap.min.css" type='text/css'>
        <!-- lobobox css -->
        <link rel="stylesheet" href="<?= APP_DOMAIN ?>/dist/lobibox-master/dist/css/lobibox.min.css"" type='text/css'>
        <!-- style css -->
        <link rel="stylesheet" href="<?= APP_DOMAIN ?>/dist/css/min/style.css?v=1.1" type='text/css'>
        <!-- responsive css -->
        <link rel="stylesheet" href="<?= APP_DOMAIN ?>/dist/css/min/responsive.css" type='text/css'>
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- jquery latest version -->
        <script src="<?= APP_DOMAIN ?>/dist/js/vendor/jquery-1.12.0.min.js"></script>
        <script>var baseurl = "<?= base_url(); ?>";</script>

        <!-- Nivo slider js -->
        <script src="<?= APP_DOMAIN ?>/dist/js/min/jquery.nivo.slider.js"></script> 
    </head>
    <!-- head section End -->
    <!-- body start -->
    <body class="hidden-area">