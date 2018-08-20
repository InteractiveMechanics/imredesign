<?php
/**
 * Template Name: Webinars Archive
 *
 * @package im2018
 * @since im2018 1.0
 */
get_header(); ?>


<main>
	<div class="jumbotron jumbo-short">
			<div class="media-container">
				<?php

				// check if the flexible content field has rows of data
				if( have_rows('background', 'option') ):
				
				     // loop through the rows of data
				    while ( have_rows('background', 'option') ) : the_row();
				
				        if( get_row_layout() == 'background_video' ):
				
				        	$video_file = the_sub_field('video_file');
				        	
				        	echo '<video><source src="' . $video_file . '" type="video/mp4"></video>';
				
				        elseif( get_row_layout() == 'background_image' ): 
				
				        	$img_file = get_sub_field('img_file');
				        	
				        	echo '<img src="' . $img_file['url'] . '" alt="' . $img_file['alt']  . '"/>';
				
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
						<h1><?php the_field('webinars_archive_page_heading', 'option'); ?></h1>
					</div>
					
					<div class="col-sm-7">
						<p><?php the_field('webinars_archive_page_subtitle', 'option'); ?></p>
			
					</div>
					
				</div>	
  			</div>
	</div>
	
		
					<?php
					// find date time now
					$date_now = date('Y-m-d');
					
					
					
					$posts = get_posts(array(
						//'posts_per_page'	=> -1,
						'post_type'			=> 'webinars',
						'meta_query' 		=> array(
							'relation' 			=> 'AND',
							array(
						        'key'			=> 'webinar_date',
						        'compare'		=> '>=',
						        'value'			=> $date_now,
						        'type'			=> 'DATE'
						    )
			
					    ),
						'order'				=> 'ASC',
						'orderby'			=> 'meta_value',
						'meta_key'			=> 'webinar_date',
						'meta_type'			=> 'DATE'
					));
					
					if( $posts ): ?>
					
					<article id="cs-archive">
						<section class="container-fluid">
							<div class="row">
					<?php foreach( $posts as $p ): 
						$thumbnail_img_url = get_the_post_thumbnail_url($p->ID,'full');
						$webinar_date = get_field('webinar_date', $p->ID);
						$webinar_link = get_the_permalink($p->ID);
						
					?>
					
								
					<div class="col-sm-4">
						<?php echo $new_date; ?>
						<a href="<?php echo $webinar_link; ?>" class="feat-content-block" style="background: linear-gradient(rgba(71,142,187, 0.7), rgba(58,89,141, 0.7)), url('<?php echo $thumbnail_img_url; ?>');">
							
							<h5><?php echo $webinar_date; ?></h5>
							
							<h3><?php echo $p->post_title; ?></h3>
							
						</a>
					</div>
					
					<?php endforeach; ?>
					</div>
					</section>
					</article>

					<?php else: ?>
					<div class="no-webinars"></div>
					
					<?php endif; ?>
					
					
					
		
					
					
				</div>
			</section>
	</article>
	
	<article class="webinars-main">
		<section class="container-fluid">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 content-wrapper">
					
					<div class="col-sm-12">
						<h3>Past Webinars</h3>
					</div>
										
					<?php
					// find date time now
					$date_now = date('Y-m-d H:i:s');
					
					?>		
					
						<?php $args = array(
							'post_type' => "webinars",
							'order' => 'DESC',
							'offset' => 1,
							'meta_query' 		=> array(
								'relation' 			=> 'AND',
								array(
							        'key'			=> 'webinar_date',
							        'compare'		=> '<=',
							        'value'			=> $date_now,
							        'type'			=> 'DATETIME'
							    )
			
							),
							'order'				=> 'ASC',
							'orderby'			=> 'meta_value',
							'meta_key'			=> 'webinar_date',
							'meta_type'			=> 'DATE'
								
							
							
						);
						$loop = new WP_Query( $args );
					?>
					
						<?php while ( $loop->have_posts() ) : $loop->the_post(); 
								$thumbnail_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
								$thumbnail_caption = get_the_post_thumbnail_caption(get_the_ID());
								$webinar_date = get_field('webinar_date', get_the_ID());
								$webinar_short_description = get_field('short_description', get_the_ID());
								$webinar_link = get_the_permalink();
					?>
			
							<div class="webinars-wrapper col-sm-12">
					
						<div class="webinar-img-wrapper">
						
							
							<?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
						
						</div>
						
						<div class="col-sm-10">
							
							<h4><?php the_title(); ?></h4>
							<p><?php echo $webinar_short_description; ?></p><a href="<?php echo $webinar_link; ?>" class="read-more">Learn More</a>
						
						</div>
						
					</div>
					<?php endwhile; ?>			
					
										
					<!--<?php echo do_shortcode('[ajax_load_more container_type="div" repeater="template_7" post_type="webinars" meta_key="webinar_date" meta_value="'. $date_now . '" meta_compare="<=" meta_type="DATE" offset="1"]'); ?> -->
										


									
					
					
														
				
				</div>
			</div>
		
		</section>
	</article>
	
	<article id="project-details">
		<section class="container-fluid">
			<div class="row">
				
				<div class="col-sm-8 col-sm-offset-2">
					
					<h3><?php the_field('learn_more_heading', 'option'); ?></h3>
					
					
						<div class="learn-more-wrapper">
						<?php 

						$posts = get_field('learn_more_contact', 'option');
						
						
						
						if( $posts ): ?>
								
						
								<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT)
								
									$featured_img_url = get_the_post_thumbnail_url($p->ID,'full'); 
								
								?>
								
								<a href="<?php the_permalink($p->ID); ?>"><img class="staff-thumb-sm" src="<?php echo $featured_img_url; ?>" alt="photo of <?php the_field('name', $p->ID); ?>"/></a>
								
								<div>
									<a href="<?php the_permalink($p->ID); ?>"><h4><?php the_field('name', $p->ID); ?></h4></a>
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


	
	


	

</main>


<?php get_footer(); ?>