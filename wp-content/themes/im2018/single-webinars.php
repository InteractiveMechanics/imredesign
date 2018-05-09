<?php
/**
 * Template for displaying a Webinar
 * @package imredesign
 * @since imredesign 1.0
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post();
	$banner_img = get_field('banner_img');
	$registration_link = get_field('registration_link');
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
		<div class="jumbotron jumbo-short">
					<div class="media-container">
						<img src="<?php printThemePath(); ?>/assets/backgrounds/background-01@1x.jpg" />
					</div>
					
		</div>
	
			
		<article>
			<section class="container-fluid">
				<div class="row">
					
					<div class="col-sm-12">
						<div class="feat-content-block-wide"  style="background: linear-gradient(rgba(71,142,187, 0.7), rgba(58,89,141, 0.7)), url('<?php echo $banner_img; ?>');">							
							<h5>Webinar</h5>
							
							<h3><?php the_title(); ?></h3>
								
							
														
						</div>
					</div>
				</div>
			</section>
		</article>
		
		<article class="entry-content">
			<section class="container-fluid">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 content-wrapper">
						<h5>About the Webinar</h5>
						
						<?php the_field('webinar_body'); ?>
						

						
						
					</div>
					
					<div class="col-sm-8 col-sm-offset-2 resources">
						<h5>Webinar Resources</h5>
						
						<!-- acf repeater starts -->
						<?php if( have_rows('webinar_resources') ): ?>	
						<?php while ( have_rows('webinar_resources') ) : the_row(); ?>

						
						<div>
							<h4><?php the_sub_field('resource_title'); ?></h4>
							
							<!-- acf flexible content starts -->
							<?php if( have_rows('resource_link') ): ?>
							<?php while ( have_rows('resource_link') ) : the_row(); ?>
							
								<?php if( get_row_layout() == 'resource_url' ): ?>
									<p><a href="<?php the_sub_field('resource_url'); ?>" target="_blank">Download</a></p>
									
								<?php elseif( get_row_layout() == 'resource_file' ): ?>
									<p><a href="<?php the_sub_field('resource_file'); ?>" download>Download</a></p>
								
								<?php endif; ?>
							
							<?php endwhile; ?>
							<?php endif; ?>
							<!-- end acf flexible content -->
						</div>
						
						<?php endwhile; ?>
						<?php endif; ?>
						<!-- end acf repeater -->
						
						
						<?php if($registration_link): ?>
						<a class="btn btn-default" href="<?php echo $registration_link; ?>" role="button" target="_blank">Register</a>
						<?php endif; ?>
						
					
					</div>
				</div>
			</section>
			
		</article>
		
		<!--
		<article class="registration">
			<section class="container-fluid">
				<div class="row">
						<div class="col-sm-8 col-sm-offset-2 content-wrapper">
						<h3>Register for this Webinar</h3>
						</div>	
					
										
						
										
				</div>
			</section>
		</article>
		-->



		</main>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>