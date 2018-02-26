<?php
/**
 * Template for displaying a Case Study
 *
 * @package imredesign
 * @since imredesign 1.0
 */
?>

<?php get_header(); ?>

<?php
	$banner_img = get_field('banner_img');
	$case_study_body = get_field('case_study_body');
	$learn_more_heading = get_field('learn_more_heading');
	
		
	
?>

<?php while ( have_posts() ) : the_post();	?>

	<div class="jumbotron jumbo-short">
			<div class="media-container">
				<img src="<?php printThemePath(); ?>/assets/backgrounds/background-01@1x.jpg" />
			</div>
					
	</div>
	
	<article id="cs-hero-container">
		<section class="container-fluid">
				<div class="row">
					
					<div class="col-sm-12">
						<div class="feat-content-block-wide"  style="background-image: linear-gradient(rgba(45,49,66, 0.75), rgba(45,49,66, 0.75)), url('<?php echo $banner_img; ?>');">
							<?php

								$terms = get_the_terms( $post->ID , 'services' );

								foreach ( $terms as $term ) {

									echo '<h5>' . $term->name . '</h5>';

								}				

							?>
							
							
							<h3><?php the_title(); ?></h3>
							
							
							<img class="resp-client-logo" src="<?php printThemePath(); ?>/assets/clients-partners-logos/client-logo-white-philamuseum.png" />
							
							<button class="btn btn-default btn-gold" href="#" role="button">Watch the Video</button>
														
						</div>
					</div>
				</div>
			</section>
			
			<!-- ACF repeater starts -->
			<?php if( have_rows('case_study_awards') ): ?>

			<section class="container-fluid">
				<div class="row">
					<div class="col-sm-12 awards-wrapper">
						
						
						<?php while (have_rows('case_study_awards')): the_row(); 
							$award_img = get_sub_field('award_img');
						?>
						
						<a class="awards-block">
							<img src="<?php echo $award_img; ?>" />
						</a>
						
						<?php endwhile; ?>
												
						
						
					</div>
				</div>
			</section>
			
			<?php endif; ?>
			<!-- ACF repeater ends -->
			
	</article>
	
	<article id="cs-main">
		<section class="container-fluid">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 content-wrapper">
					<?php echo $case_study_body; ?>
					
				</div><!-- /.content-wrapper -->
			</div><!-- /.row -->
		</section>
	</article>
	
	<!-- ACF repeater starts -->
	<?php if( have_rows('case_study_gallery') ): ?>

	<article id="gallery" class="bottom-border">
		<section class="container-fluid">
			<div class="row">
				<div class="col-sm-12 gallery-wrapper">
					
					<?php while (have_rows('case_study_gallery')): the_row(); 
							$gallery_img = get_sub_field('gallery_img');
					?>
					
					<img src="<?php echo $gallery_img; ?>" alt="placeholder image"/>
					
					<?php endwhile; ?>
					
				</div>
			</div>
		</section>
	</article>
	<?php endif; ?>
	<!-- ACF repeater ends -->
	
	<article id="project-details">
		<section class="container-fluid">
			<div class="row">
				
				<div class="col-sm-8 col-sm-offset-2">
					
					<h3>Project Details</h3>
					
					<div class="col-sm-6">
						<h5>Year</h5>
						
						<?php

								$terms = get_the_terms( $post->ID , 'projectyear' );

								foreach ( $terms as $term ) {

									echo '<button class="btn-pill">' . $term->name . '</button>';

								}				

						?>
						
						
						
						<h5>Technology</h5>
						
						<?php

								$terms = get_the_terms( $post->ID , 'technologies' );

								foreach ( $terms as $term ) {

									echo '<button class="btn-pill">' . $term->name . '</button>';

								}				

						?>
						
												
						<h5>Services</h5>
						
						<?php

								$terms = get_the_terms( $post->ID , 'services' );

								foreach ( $terms as $term ) {

									echo '<button class="btn-pill">' . $term->name . '</button>';

								}				

							?>
						
					</div>
					
					<div class="col-sm-6">
						<?php 

						$posts = get_field('case_study_partners');
						
						
						
						if( $posts ): ?>
								<h5>Partners</h5>
								
						
								<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
							    <h4>
							    	<a href="<?php the_field('partner_url', $p->ID); ?>" target="_blank"><?php echo get_the_title( $p->ID ); ?></a>
							    	
							    </h4>
							<?php endforeach; ?>
							
						<?php endif; ?>
						
						
						
						<!-- ACF repeater starts -->
						<?php if( have_rows('case_study_funders') ): ?>
						<h5>Funders</h5>
						
							<?php while (have_rows('case_study_funders')): the_row(); 
								$funders_name = get_sub_field('funders_name');
								$funders_url = get_sub_field('funders_url');
							?>
						
								<h4>
									<a href="<?php echo $funders_url; ?>" target="_blank"><?php echo $funders_name; ?></a>
								</h4>
							<?php endwhile; ?>
						
						<?php endif; ?>
						<!-- ACF repeater ends -->
						
						
						
						<?php 

						$posts = get_field('case_study_press');
						
						
						
						if( $posts ): ?>
								<h5>Press</h5>
								
						
								<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
							    <h4>
							    	<a href="<?php the_field('partner_url', $p->ID); ?>" target="_blank"><?php echo get_the_title( $p->ID ); ?></a>
							    	
							    </h4>
							<?php endforeach; ?>
							
						<?php endif; ?>

					</div>
					
				</div>
				
			</div>
		</section>
	</article>
	
	<article id="cs-learn-more">
		<section class="container-fluid">
			<div class="row">
				
				
				<div class="col-sm-7 col-sm-offset-2">
					
					<h3><?php echo $learn_more_heading; ?></h3>
					
					<div class="learn-more-wrapper">
						<?php 

						$posts = get_field('learn_more_staff');
						
						
						
						if( $posts ): ?>
								
						
								<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT)
								
									$featured_img_url = get_the_post_thumbnail_url($p->ID,'full'); 
								
								?>
								
								<img class="staff-thumb-sm" src="<?php echo $featured_img_url; ?>" /> 
								
								<div>
									<h4><?php the_field('name', $p->ID); ?></h4>
									<h5><?php the_field('title', $p->ID); ?></h5>
									<h4><a href="mailto:<?php the_field('team_bio_email', $p->ID); ?>"><?php the_field('team_bio_email', $p->ID); ?></a></h4>
								</div>

							
							<?php endforeach; ?>
							
						<?php endif; ?>


						
						
						
				
					</div>
						
				</div>
				
				
			</div>
		</section>
	</article>
	
	<article id="related-content">
		<section class="container-fluid">
			<div class="row">
				
					<div class="col-sm-12 related-content-heading">
						<h3>Browse Related</h3>
						<h5><a href="#">All Projects</a></h5>
					</div>
				
			
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(rgba(45,49,66, 0.75), rgba(45,49,66, 0.75)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5><span class="featured-block-cat">Behind the Scenes</span> / <span class="featured-block-date">July 2017</span></h5>
							
							<h3>Meet LaNeshe, our new Marketing Manager</h3>
							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(rgba(45,49,66, 0.75), rgba(45,49,66, 0.75)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5><span class="featured-block-cat">Behind the Scenes</span> / <span class="featured-block-date">July 2017</span></h5>
							
							<h3>Meet LaNeshe, our new Marketing Manager</h3>
							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(rgba(45,49,66, 0.75), rgba(45,49,66, 0.75)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5><span class="featured-block-cat">Behind the Scenes</span> / <span class="featured-block-date">July 2017</span></h5>
							
							<h3>Meet LaNeshe, our new Marketing Manager</h3>
							
						</a>
					</div>		
									
			</div>
		</section>
	</article>


	
	
	

<?php endwhile; ?>

<?php get_footer(); ?>