<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>BigMart : Administrator Panel</title>
	<meta name="author" content="Fivecube Info Services">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?= base_url('src/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('src/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
	<link id="base-style" href="<?= base_url('src/css/style.css') ?>" rel="stylesheet">
	<link id="base-style-responsive" href="<?= base_url('src/css/style-responsive.css') ?>" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="<?= base_url('src/css/ie.css') ?>" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="<?= base_url('src/css/ie9.css') ?>" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?= base_url('src/img/favicon.ico') ?>">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url('../src/img/bg-login.jpg') !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<h2>Login as Administrator</h2>
					<form class="form-horizontal" method="post" id="loginForm" action="<?= base_url('admin-login/login') ?>">
						<fieldset>
							<?php if(isset($error)): ?>
                            <div class="alert alert-danger">
                                <?= $error ?>
                            </div>
                            <?php endif; ?>
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10 required" name="username" value="<?= set_value('username') ?>" id="username" type="text" title="Username must be required"  minlength="4" maxlength="50" placeholder="type username"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10 required" name="password" id="password" type="password" title="Password must be required"  minlength="4" maxlength="20" placeholder="type password"/>
							</div>
							<div class="clearfix"></div>
							<div id="result"></div>
							<div class="button-login text-center">	
								<button type="submit" class="btn btn-primary" id="loginBtn">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	    <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<ul class="list-inline item-details">
					<li><a href="http://themifycloud.com">Admin templates</a></li>
					<li><a href="http://themescloud.org">Bootstrap themes</a></li>
				</ul>
			</div>
		</div>
	<!-- start: JavaScript-->

		<script src="<?= base_url('src/js/jquery-1.9.1.min.js') ?>"></script>
	
		<script src="<?= base_url('src/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('src/validation/dist/jquery.validate.js') ?>"></script>

<script>
$( document ).ready( function () {
    $(function() {
		// highlight
			$("#username").focus(function() {
        		
        		$(this).parent(".input-prepend").addClass("input-prepend-focus");
        	
        	});
        	
        	$("#username").focusout(function() {
        		
        		$(this).parent(".input-prepend").removeClass("input-prepend-focus");
        	
        	});
        	
        	$("#password").focus(function() {
        		
        		$(this).parent(".input-prepend").addClass("input-prepend-focus");
        	
        	});
        	
        	$("#password").focusout(function() {
        		
        		$(this).parent(".input-prepend").removeClass("input-prepend-focus");
        	
        	});

$('#loginBtn').click(function(){
    var elements = $("input[type!='submit']");
		elements.focus(function() {
			$(this).addClass('has-error');
            return false;
		});
		elements.blur(function() {
			$(this).removeClass('has-error');
		});
$("#loginForm").validate();
       });  
    });
});


</script>

	<!-- end: JavaScript-->
	
</body>
</html>
