<?php
/**
 * Template Name: About
 *
 * @package im2018
 * @since im2018 1.0
 */
get_header(); ?>

<?php 
	
	
?>

<main>
	<div class="jumbotron">
			<div class="media-container">
				<?php

				// check if the flexible content field has rows of data
				if( have_rows('background') ):
				
				     // loop through the rows of data
				    while ( have_rows('background') ) : the_row();
				
				        if( get_row_layout() == 'background_video' ):
				
				        	$video_file = the_sub_field('video_file');
				        	
				        	echo '<video><source src="' . $video_file . '" type="video/mp4"></video>';
				
				        elseif( get_row_layout() == 'background_image' ): 
				
				        	$img_file = get_sub_field('img_file');
				        	
				        	echo '<img src="' . $img_file . '"/>';
				
				        endif;
				
				    endwhile;
				
				else :
					
				    // no layouts found
				
				endif;
				
				?>
				
			</div>
			
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-sm-7">
						<h1><?php the_field('page_title'); ?></h1>
					</div>
					<div class="col-sm-7">
						<p><?php the_field('page_intro'); ?></p>
						
					</div>
					
				</div>
  			</div>
	</div>
	
	<article id="about-main">
		<section class="container-fluid">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 content-wrapper">
					<p class="lead"><?php the_field('lead_paragraph'); ?></p>
					
					<h3>Our Values</h3>
					
					<!-- ACF repeater starts -->
					<?php if( have_rows('values') ): 

					while ( have_rows('values') ) : the_row();
					
					?>
					<div class="values-wrapper">
					
						<div class="col-sm-2 col-xs-4">
						
							<img src="<?php the_sub_field('values_img'); ?>" />
						
						</div>
						
						<div class="col-sm-10 col-xs-8">
							
							<h5><?php the_sub_field('values_heading'); ?></h5>
							<p><?php the_sub_field('values_description'); ?></p>
						
						</div>
				
					</div>
					
					<?php endwhile; ?>
					
					<?php endif; ?>
					<!-- ACF repeater ends -->
										
					<div class="col-sm-12 center">
					<a class="btn btn-default" href="#" role="button">Explore Our Work</a>
					</div>
					
				
				</div>
			</div>
		
		</section>
	</article>
	
	<?php 

	$posts = get_field('testimonial_1');
	
	if( $posts ): ?>
	    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
	        <?php setup_postdata($post); ?>
	        
	        	<article class="testimonial" style="background: url('<?php printThemePath(); ?>/assets/testimonial-backgrounds/testimonial-background-01@1x.jpg');">
					<section class="container-fluid">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2 content-wrapper">
								<blockquote class="blockquote">
									<p><?php the_field('testimonial_body', $post->ID); ?></p>
									<footer class="blockquote-footer">
										<h5 class="blockquote-name"><?php the_field('author', $post->ID); ?></h5>
										<h5 class="blockquote-title"><?php the_field('title', $post->ID); ?></h5>
										<h5 class="blockquote-affiliation">Social Venture Fund</h5>  
									</footer>
								</blockquote>
							
							</div>
						</div>
					</section>
				</article>

	        
	        
	        
	    	<?php endforeach; ?>
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>
	
	
	
	
	
	
	
	
		
	
	<article id="related-content" class="team">
		<section class="container-fluid">
			<div class="row">
				
					<div class="col-sm-12 related-content-heading">
						<h3>Our Team</h3>
					</div>
					
					<?php $args = array( 'post_type' => 'team_bios', 'posts_per_page' => 10 );
					
						$loop = new WP_Query( $args );
					
					while ( $loop->have_posts() ) : $loop->the_post(); 
					 
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
						$team_bio_permalink = get_post_permalink(get_the_ID());
					
					
					?>
						<!-- if the team member is a current employee -->
						<?php if( get_field('employment_status') ): ?>
						
							<div class="col-sm-4">
						
								<a href="<?php echo $team_bio_permalink; ?>" class="feat-content-block" style="background: linear-gradient(45deg, rgba(71,142,187, 0.7), rgba(58,89,141, 0.7)), url('<?php echo $featured_img_url; ?>');">
							
									<h5><?php the_field('name'); ?></h5>
							
									<h3><?php the_field('title'); ?></h3>
							
								</a>
							</div>
					
						<?php endif; ?>
						
					<?php endwhile; ?>

									
			</div>
		</section>
	</article>
	
	
	<article id="client-blocks-container">
			<section class="container-fluid">
				<div class="row">
					
					
					<div class="col-sm-12 col-xs-12 related-content-heading">
						<h3>Our Clients</h3>
					</div>
					
					<?php $args = array( 'post_type' => 'im_clients', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<div class="col-sm-3 col-xs-6">
							<div class="client-block">
								<a href="<?php the_field('website'); ?>"><img src="<?php the_field('logo'); ?>" /></a>
							</div>
						</div> 
						
					<?php endwhile; ?>

													
						
				</div>
			</section>
	</article>
	
	<?php 

	$posts2 = get_field('testing_testimonial');
	
	if( $posts2 ): ?>
	    <?php foreach( $posts2 as $post): // variable must be called $post (IMPORTANT) ?>
	        <?php setup_postdata($post); ?>
	        
	        	<article class="testimonial" style="background: url('<?php printThemePath(); ?>/assets/testimonial-backgrounds/testimonial-background-01@1x.jpg');">
					<section class="container-fluid">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2 content-wrapper">
								<blockquote class="blockquote">
									<p><?php the_field('testimonial_body', $post->ID); ?></p>
									<footer class="blockquote-footer">
										<h5 class="blockquote-name"><?php the_field('author', $post->ID); ?></h5>
										<h5 class="blockquote-title"><?php the_field('title', $post->ID); ?></h5>
										<h5 class="blockquote-affiliation">Social Venture Fund</h5>  
									</footer>
								</blockquote>
							
							</div>
						</div>
					</section>
				</article>

	        
	        
	        
	    	<?php endforeach; ?>
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	    <?php else: ?>
	    <h1>Testing This</h1>
	<?php endif; ?>

	
	
		
	
	
	
	<article id="partners-blocks-container">
			<section class="container-fluid">
				<div class="row">
					
					<div class="col-sm-12 col-xs-12 related-content-heading">
						<h3>Our Partners</h3>
					</div>
					
					<?php $args = array( 'post_type' => 'partners', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<div class="col-sm-3 col-xs-6">
							<div class="client-block">
								<a href="<?php the_field('partner_url'); ?>"><img src="<?php the_field('logo'); ?>" /></a>
							</div>
						</div> 
						
					<?php endwhile; ?>

													
						
				</div>
			</section>
	</article>




	
	
	
	
</main>

<?php get_footer(); ?>