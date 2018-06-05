<?php
/**
 * Template Name: Careers
 *
 * @package im2018
 * @since im2018 1.0
 */
get_header(); ?>

<main>
	<div class="jumbotron">
			<div class="media-container">
				
				<?php if( have_rows('background') ): ?>
					
					<?php while ( have_rows('background') ) : the_row(); ?>
				
						<?php if( get_row_layout() == 'careers_background_image' ): ?>
							<img src="<?php the_sub_field('background_img'); ?>" />
						
						<?php  elseif( get_row_layout() == 'careers_background_video' ): ?>
							<video width="100%" height="auto" autoplay loop>
								<source src="<?php the_sub_field('background_video'); ?>" type="video/mp4">
							</video>
						
						<?php endif; ?>
						
					<?php endwhile; ?>
					 
				<?php endif; ?>
				
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-sm-10">
						<h1><?php the_field('page_heading'); ?></h1>
					</div>
					<div class="col-smd-9 col-sm-10">
						<p><?php the_field('careers_intro'); ?></p>
						
						<a class="btn btn-default" href="#project-details" role="button"><?php the_field('careers_btn_text'); ?></a>
					</div>
					
					
				</div>
  			</div>
	</div>
	
	<article class="careers-main" class="top-border">
		<section class="container-fluid">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 content-wrapper">
					<p class="lead"><?php the_field('benefits_intro'); ?></p>
					
					<!-- ACF repeater starts -->
					<?php if( have_rows('careers_benefits') ): 

					while ( have_rows('careers_benefits') ) : the_row();
					
					?>
					<div class="webinars-wrapper col-sm-12">
					
						<div class="webinar-img-wrapper values">
							<?php $benefits_img = get_sub_field('benefits_image'); ?>
						
							<img src="<?php echo $benefits_img['url']; ?>" alt="<?php echo $benefits_img['alt']; ?>"/>
							
							
						
						
						
						</div>
						
						<div class="col-sm-10">
							
							<h5><?php the_sub_field('benefits_heading'); ?></h5>
							<p><?php the_sub_field('benefits_description'); ?></p>
						
						</div>
				
					</div>
					
					<?php endwhile; ?>
					
					<?php endif; ?>
					<!-- ACF repeater ends -->

															
				
				</div>
			</div>
		
		</section>
	</article>
	
	<!-- ACF repeater starts -->
	<?php if( have_rows('careers_gallery') ): ?>

	<article id="gallery" class="bottom-border">
		<section class="container-fluid">
			<div class="row">
				<div class="col-sm-12 gallery-wrapper">
					
					<?php while (have_rows('careers_gallery')): the_row(); 
							$gallery_img = get_sub_field('gallery_img');
					?>
					
					<a href="<?php echo $gallery_img['url']; ?>">
						<img class="grid-item" src="<?php echo $gallery_img['url']; ?>" alt="<?php echo $gallery_img['alt']; ?>"/>
					</a>
						
						
						
					
					
					
					<?php endwhile; ?>
					
				</div>
			</div>
		</section>
	</article>
	<?php endif; ?>
	<!-- ACF repeater ends -->

	
	<article class="entry-content">
		<section class="container-fluid">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 content-wrapper">
					
					<?php the_field('careers_body'); ?>
					
															
				</div><!-- /.content-wrapper -->
			</div><!-- /.row -->
		</section>
	</article>
	
	<article id="project-details">
		<section class="container-fluid">
			<div class="row">
				
				<div class="col-sm-8 col-sm-offset-2">
					
					<h3><?php the_field('open_positions_heading'); ?></h3>
					
					
					<!-- ACF repeater starts -->
					<?php if( have_rows('open_positions') ): ?>
						<?php while ( have_rows('open_positions') ) : the_row(); ?>
					
							<div class="col-sm-6 learn-more-wrapper">
								<div>
								<h4><?php the_sub_field('open_positions_title'); ?></h4>
								<h5><?php the_sub_field('open_positions_subtitle'); ?></h5>
								
								<a href="<?php the_sub_field('open_positions_url'); ?>" class="btn btn-default" target="_blank"><?php the_sub_field('button_text'); ?></a>
								</div>
									
							</div>
						
						<?php endwhile; ?>
						
					<?php else: ?>
					
						<div class="col-sm-6 learn-more-wrapper">
							<div>
								<h4><?php the_field('no_positions_available_text'); ?>
							</div>
						</div>
					
						
					
					<?php endif; ?>
					
				
					
				</div>
				
			</div>
		</section>
	</article>


	
	
</main>

<?php get_footer(); ?>