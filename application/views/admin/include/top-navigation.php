<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bigmee: Admin Panel</title>
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?= base_url('src/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('src/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
	<link id="base-style" href="<?= base_url('src/css/style.css') ?>" rel="stylesheet">
	<link id="base-style-responsive" href="<?= base_url('src/css/style-responsive.css') ?>" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
	<script src="<?= base_url('src/js/jquery-1.9.1.min.js') ?>"></script>
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?= base_url('src/img/favicon.ico') ?>">
	<!-- end: Favicon -->	
	<script>
    var baseurl = "<?= base_url(); ?>";
    </script>	
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?= base_url('admin/dashboard') ?>"><span>BigMee</span><small> Admin Panel</small></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: Message Dropdown -->
					<!--	<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-envelope"></i>
								<span class="badge red">
								4 </span>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="<?= base_url('src/img/avatar.jpg') ?>" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="<?= base_url('src/img/avatar.jpg') ?>" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="<?= base_url('src/img/avatar.jpg') ?>" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="<?= base_url('src/img/avatar.jpg') ?>" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>	
							</ul>
						</li> -->
						<li>
                            <a class="btn dropdown-toggle">
                            	<i class="fa white fa-balance-scale"></i>
                                <span class="account-balance"><?= formateBalance($profile->acct_balance) ?> INR</span>
                            </a>
                        </li>
						<li>
                            <a class="btn dropdown-toggle">
                            	<i class="fa white fa-google-wallet"></i>
                                <span class="account-balance"><?= formateBalance($profile->acct_wallet) ?> INR</span>
                            </a>
                        </li>
						<li>
                            <a class="btn dropdown-toggle">
                            	<i class="fa white fa-lock"></i>
                                <span class="account-balance"><?= formateBalance($profile->acct_lock) ?> INR</span>
                            </a>
                        </li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?= $profile->acct_email ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account</span>
								</li>
                                <li><a><i class="halflings-icon user"></i><?= $profile->acct_role ?></a></li>
								<li><a href="<?= base_url('admin-login/logout') ?>"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div> 
            <?php if($profile->acct_role != "SA" && !empty($broadcasted_news)): ?>
            <div class="row sp-news-scroller">
            <ul>
                <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                <?php foreach($broadcasted_news as $news): ?>
                    <li><?= $news['news_title'] ?> - <?= $news['news_content'] ?></li>
                <?php endforeach; ?>    
                </marquee>
             </ul>
            </div>
            <?php endif; ?>
		</div>     
	</div>
	<!-- end: Header -->