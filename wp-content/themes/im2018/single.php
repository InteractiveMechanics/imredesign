<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package im2018
 */

get_header();

$post_category = get_the_category();
$first_category = $post_category[0]->cat_name;
$cat_id = get_cat_ID( $first_category ); 
$cat_link = get_category_link( $cat_id );
$post_date = get_the_date('F Y');
$post_year = get_the_date('Y');
$year_link = get_year_link( $post_year );

?>

	<div id="post-<?php the_ID(); ?>" class="content-area">
		<main id="main" class="site-main">
			
		<div class="jumbotron jumbo-short">
					<div class="media-container">
						<?php

				// check if the flexible content field has rows of data
				if( have_rows('single_blog_post_background', 'option') ):
				
				     // loop through the rows of data
				    while ( have_rows('single_blog_post_background', 'option') ) : the_row();
				
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
					
			</div>
	
			
		<article>
			<section class="container-fluid">
				<div class="row">
					
					<div class="col-sm-12">
						<div class="feat-content-block-wide"  style="background: <?php the_field('overlay_color'); ?>, url('<?php the_field("banner_img"); ?>'); background-size: cover;">
							
							<h5><span class="blog-cat"><?php echo $first_category; ?></span> / <span class="blog-date"><?php echo $post_date; ?></span></h5>
							
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
						<?php the_content(); ?>						
						
					</div>
				</div>
			</section>
		</article>
		
		<article id="project-details">
			<section class="container-fluid">
				<div class="row">
					
					<div class="col-sm-8 col-sm-offset-2">
						
						<div class="col-sm-5">
							<h3>Post Details</h3>
							<h5>Year</h5>
							<a href="<?php echo $year_link; ?>" class="btn btn-pill"><?php echo $post_year; ?></a>
							
							<h5>Category</h5>
							<a href="<?php echo $cat_link; ?>" class="btn btn-pill" role="button"><?php echo $first_category; ?></a>
							
						
						</div>
						
						<div class="col-sm-7">
							<h3>About the Author</h3>
							<div class="learn-more-wrapper">
								
								<?php 

								$posts = get_field('post_author');
								 
								
								if( $posts ): ?>
								
									<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) 
										$featured_img_url = get_the_post_thumbnail_url($p->ID,'full'); 
										$employee_status = get_field('employment_status', $p->ID);
										
									?>
									    
									   									
								<?php if ($employee_status): ?>	
									<a href="<?php the_permalink($p->ID); ?>"><img class="staff-thumb-sm" src="<?php echo $featured_img_url; ?>" alt="photo of <?php the_field('name', $p->ID); ?>"/></a>
								<?php elseif ($featured_img_url): ?>
									<img class="nonstaff-thumb-sm" src="<?php echo $featured_img_url; ?>" alt="photo of <?php the_field('name', $p->ID); ?>"/>
								<?php endif; ?>
								
								
								<div>
									
									<?php if ($employee_status): ?>
									<a href="<?php the_permalink($p->ID); ?>"><h4><?php the_field('name', $p->ID); ?></h4></a>
									<?php else: ?>
									<h4><?php the_field('name', $p->ID); ?></h4>
									<?php endif; ?>
									
									<h5><?php the_field('title', $p->ID); ?></h5>
									<h4><a href="mailto:<?php the_field('team_bio_email', $p->ID); ?>"><?php the_field('team_bio_email', $p->ID); ?></a></h4>
								</div>

								
									   
									<?php endforeach; ?>
								<?php endif; ?>
							
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
		</article>
		
		
		<!-- ACF repeater starts -->
		<?php if( have_rows('blog_post_related_content') ): ?>
		<article id="related-content">
		<section class="container-fluid">
			<div class="row">
				
					<div class="col-sm-12 related-content-heading">
						<h3>Browse Related</h3>
						<h5><a href="<?php echo get_post_type_archive_link( 'post' ); ?>">All Posts</a></h5>
					</div>
					
					<!-- ACF repeater runs -->
					<?php while ( have_rows('blog_post_related_content') ) : the_row(); ?>
					
					
					<!-- ACF repeater subfields -->
					<?php 
						$relationship_queries = get_sub_field('related_content_blog_post');
						$background_color = get_sub_field('related_content_background_color');  	
					?>
					
					<!-- ACF relationship inside repeater starts -->
					<?php if ($relationship_queries): ?>
					<?php foreach( $relationship_queries as $relationship_query ) :
						
						$featured_img_url = get_the_post_thumbnail_url($relationship_query->ID,'full'); 
						$my_title = get_the_title($relationship_query->ID);
						$post_category = get_the_category($relationship_query->ID);
						$first_category = $post_category[0]->cat_name;
						$my_post_date = get_the_date('F Y', $relationship_query->ID);
					
						
					
					?>
					
				
					<div class="col-sm-4">
						
						
						<a href="<?php the_permalink($relationship_query->ID); ?>" class="feat-content-block" style="background: <?php echo $background_color; ?>, url('<?php echo $featured_img_url; ?>');">
						
											
							<h5>
							<?php if ($first_category):	?>
								<span class="featured-block-cat"><?php echo $first_category; ?></span>
							<?php endif; ?> 
							
							/ <span class="featured-block-date"><?php echo $my_post_date; ?></span></h5>
							
							<h3><?php echo $my_title; ?></h3>
							
						</a>
					</div>
					
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					<!-- end ACF relationship -->
					
					<?php endwhile; ?>
	
					
									
			</div>
		</section>
	</article>
	<?php endif; ?>
	<!-- end ACF repeater -->	


	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
