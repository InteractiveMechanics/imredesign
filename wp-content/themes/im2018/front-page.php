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
					<div class="col-sm-8">
						<h1><?php the_field('home_hero_title'); ?></h1>
					</div>
					<div class="col-sm-9">
						<p><?php the_field('home_hero_intro'); ?></p>
						
						<a class="btn btn-default hidden-xs" href="#" role="button">Explore Our Work</a>
					</div>
					
					
				</div>
  			</div>
		</div>
		
		<article id="feat-content-container">
			<section class="container-fluid">
				<div class="row">
					
						<?php 
							
							$posts = get_field('home_featured_content');
							
							if( $posts ): ?>
								
								<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) 
									$featured_img_url = get_the_post_thumbnail_url($p->ID,'full');
									$feat_content_title = get_the_title( $p-> ID);
									$feat_content_date = get_the_date('F Y', $p->ID);
									$feat_content_type = get_post_type($p->ID);
									$feat_content_cat = get_the_category($p ->ID);
									
									 
									
									
								?>
										<div class="col-sm-4">
						
											<a href="<?php echo get_permalink( $p->ID ); ?>" class="feat-content-block" style="background: linear-gradient(rgba(71,142,187, 0.7), rgba(58,89,141, 0.7)), url('<?php echo $featured_img_url; ?>');">
												
												
												<h5>
													
												<?php if ($feat_content_type == 'case_studies'): ?>
									   				<span class="featured-block-cat">
									   					<?php 
										   					$terms = get_the_terms( $p->ID , 'services' );

										   						foreach ( $terms as $term ) {

										   							echo $term->name;

																}		
									   				
														?>
									   				
									   				</span>
									   			<?php elseif ($feat_content_type == 'post' && !empty( $feat_content_cat )):  ?>
									   				<span class="featured-block-cat"><?php echo $feat_content_cat[0]->name; ?><span>
									   				<span class="featured-block-date"> / <?php echo $feat_content_date; ?></span>
									   				
									   			
									   			<?php elseif ($feat_content_type == 'webinars'): ?>
									   				<span class="featured-block-cat">Webinar<span>
									   				<span class="featured-block-date"> / <?php echo $feat_content_date; ?></span>
									   			
									   												   				
									   												   				 
										   		<?php endif; ?>
										   			
										   		
										   		<?php if ($feat_content_type == 'post'): ?> 
										   		
											   		<!--<span class="featured-block-date"> / <?php echo $feat_content_date; ?></span>-->
											   	
											   	<?php endif; ?>
    										   		
										   		</h5>
							
									   			<h3><?php echo $feat_content_title; ?></h3>
							
											</a>
											
										</div>

								    
								<?php endforeach; ?>
								
							<?php endif; ?>
					
					
					
					
					
					
					
				
					
										
					
									
					
					
					
					
										
					
					
					
					
					
				
				</div>
			</section>
		</article>
		
		<article id="client-blocks-container">
			<section class="container-fluid">
				<div class="row">
						
					
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