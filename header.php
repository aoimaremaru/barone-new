<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-T6CQWSC');</script>
		<!-- End Google Tag Manager -->
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- Bootstrap core CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/library/css/bootstrap.min.css" rel="stylesheet">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>



		<!-- Custom fonts-->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/library/css/font-all.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<script src="https://kit.fontawesome.com/994d8784b1.js" crossorigin="anonymous"></script>
		
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6CQWSC"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

				<!-- 

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>

				-->

					<!-- Navigation -->
					<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
						<div class="nav-container">
						<div class="top-button-wrapper">
							<button class="btn" id="reqButton" data-toggle="modal" data-target="#RequestModal">出演募集</button>
							<button class="btn" id="recruitButton" data-toggle="modal" data-target="#RequestModal">スタッフ募集</button>
						</div>
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" id="menuButton">
							<i class="fas fa-bars"></i>
						</button>
						

						<div class="collapse navbar-collapse" id="navbarResponsive">
						<?php if ( is_home() || is_front_page() ) : ?>
							<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#About">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#Live">Live</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#Food">Food</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#Drink">Drink</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#Access">Access</a>
							</li>
							</ul>
						<?php else : ?>
							<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="/about">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="/live">Live</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="/food">Food</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="/drink">Drink</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="/access">Access</a>
							</li>
							</ul>
						<?php endif; ?>
						</div>
						</div>
					</nav>

					<!-- Top -->
					<header class="masthead" id="Top">
						<a href="/">
						<div class="container d-flex h-100 align-items-center">
						<div class="mx-auto text-center">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/bar_one_logo_wt.png" id="logo"/>
							<h2 class="text-white-50 mx-auto mt-2 mb-5">One good thing about music, when it hits you, you feel no pain.</h2>
						</div>
						</div>
						</a>
					</header>
				
				<!--

					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>
					</nav>
				-->
				</div>
			</header>
