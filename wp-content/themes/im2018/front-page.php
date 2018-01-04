<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package  im2018
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="jumbotron">
			<div class="media-container">
				<img src="<?php printThemePath(); ?>/assets/backgrounds/background-01@1x.jpg" />
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-8">
						<h1>Beautiful digital experiences for museums and archives</h1>
					</div>
					<div class="col-sm-9">
						<p>Interactive Mechanics is a digital design firm that partners with cultural and educational organizations on design, development, user experience, and digital strategy.</p>
						
						<a class="btn btn-default" href="#" role="button">Explore Our Work</a>
					</div>
					
					
				</div>
  			</div>
		</div>

		<?php
		// Show the selected front page content.
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			get_template_part( 'template-parts/post/content', 'none' );
		endif;
		?>

	
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();