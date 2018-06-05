<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package im2018
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-28789452-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-28789452-1');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(''); ?></title>

	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<!-- favicons go here -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php printThemePath(); ?>/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php printThemePath(); ?>/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php printThemePath(); ?>/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php printThemePath(); ?>/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php printThemePath(); ?>/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php printThemePath(); ?>/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php printThemePath(); ?>/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php printThemePath(); ?>/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php printThemePath(); ?>/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php printThemePath(); ?>/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php printThemePath(); ?>/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php printThemePath(); ?>/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php printThemePath(); ?>/favicons/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php printThemePath(); ?>/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'im2018' ); ?></a>

	<header id="masthead" class="site-header">
		
		<nav id="site-navigation" class="main-navigation navbar navbar-default">
		
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
					</button>
					
					<a href="<?php echo home_url(); ?>" class="navbar-brand">
						<?php include("assets/logos/logo-header.svg"); ?>
					</a>
	    		</div>
	
		    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse animated slideInDown" id="bs-example-navbar-collapse-1">
			     
					<?php
						wp_nav_menu( array(
						    'theme_location'	=> 'primary',
						    'depth'				=> 0, // 1 = with dropdowns, 0 = no dropdowns.
							'container'			=> '',
							'container_class'	=> '',
							'container_id'		=> 'bs-example-navbar-collapse-1',
							'menu_class'		=> 'nav navbar-nav',
						    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
						    'walker'			=> new WP_Bootstrap_Navwalker()
						) );
					?>			     
			     
			     
					<?php
			            wp_nav_menu( array(
			                'menu'              => 'secondary',
			                'theme_location'    => 'secondary',
			                'depth'             =>  0,
			                'container'         => '',
			                'container_class'   => '',
							'container_id'      => '',
			                'menu_class'        => 'nav navbar-nav navbar-right',
			                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			                'walker'            => new wp_bootstrap_navwalker())
			            );
			        ?>
			     
			      	
			    </div><!-- /.navbar-collapse -->
	  		</div><!-- /.container-fluid -->
					
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
