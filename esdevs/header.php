<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo bloginfo('name'); ?></title>
<meta name="description" content="magento development, php development">
<meta name="keywords" content="HTML,CSS,XML,JavaScript,magento2,magento, cmsblock,xml">
<meta name="author" content="tularam">
    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
	<link href="<?php bloginfo('template_url'); ?>/css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" />	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1><span>eSt</span>oredevs</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="active">Home</a></li>
								<!-- <li role="presentation"><a href="http://www.estoredevs.com/about-us/">About Us</a></li>
								<li role="presentation"><a href="services.html">Services</a></li>								
								<li role="presentation"><a href="portfolio.html">Portfolio</a></li>
								<li role="presentation"><a href="blog.html">Blog</a></li>
								<li role="presentation"><a href="contact.html">Contact</a></li>	 -->					
							</ul>
						</div>
						
					</div>						
				</div>
			</div>	
		</nav>		
	</header>