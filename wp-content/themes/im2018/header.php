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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

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
					
					<a class="navbar-brand" href="#">Brand</a>
	    		</div>
	
		    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      	<ul class="nav navbar-nav">
				       <li><a href="#" class="active">About Us</a></li>
				       <li><a href="#">Our Work</a></li>
				       <li><a href="#">Education</a></li>
				       <li><a href="#">Blog</a></li>
				        
			      	</ul>
			     
				  	<ul class="nav navbar-nav navbar-right">
			        	<li><a href="#">We're Hiring!</a></li> 	      
			      	</ul>
			      	
			    </div><!-- /.navbar-collapse -->
	  		</div><!-- /.container-fluid -->
					
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
