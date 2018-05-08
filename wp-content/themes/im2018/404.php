<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package im2018
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="jumbotron jumbo-short">
				<div class="media-container">
					<img src=<?php the_field('error_404_background_img', 'option'); ?> />
				</div>
						
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-7 col-sm-10 error-404 not-found">
							<h1 class="page-title"><?php esc_html_e( '4-Oh no!-4 Page', 'im2018' ); ?></h1>
						</div>
						<div class="col-lg-8 col-md-10 col-sm-10">
							<p><?php the_field('404_text', 'option'); ?></p>
						</div>
	
					</div>
				</div>
			</div>
			
			<article id="animation-container">
				<section class="container-fluid">
					<div class="row">
						<div class="col-sm-12 animation-wrapper">
							<div id="myAnimation"></div>
						</div>
					</div>
				</section>
			</article>
			
					
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
