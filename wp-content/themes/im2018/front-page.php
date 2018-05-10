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
					<div class="col-lg-8 col-md-9 col-sm-10">
						<h1><?php the_field('home_hero_title'); ?></h1>
					</div>
					<div class="col-lg-9 col-md-10 col-sm-11">
						<p class="home-subtitle"><?php the_field('home_hero_intro'); ?></p>
						
					</div>
					
					
				</div>
  			</div>
		</div>
		
		<article id="feat-content-container">
			<section class="container-fluid">
				<div class="row">
					
					<!-- ACF repeater starts -->
					<?php if( have_rows('home_featured_content') ): ?>
					<?php while ( have_rows('home_featured_content') ) : the_row(); ?>
					
					
					<!-- ACF repeater subfields -->
					<?php 
						$relationship_queries = get_sub_field('featured_content_home');
						$background_color = get_sub_field('featured_content_background_color');  	
					?>
					
					<!-- ACF relationship inside repeater starts -->
					<?php if ($relationship_queries): ?>
					<?php foreach( $relationship_queries as $relationship_query ) :

						$featured_img_url = get_the_post_thumbnail_url($relationship_query->ID,'full'); 
						$my_title = get_the_title($relationship_query->ID);
						$post_category = get_the_category($relationship_query->ID);
						$feat_content_type = get_post_type($relationship_query->ID);
						$my_post_date = get_the_date('F Y', $relationship_query->ID);
						$overlay_color = get_field('overlay_color', $relationship_query->ID);
					?>
					
					
					<div class="col-sm-4">
						
						
						<a href="<?php the_permalink($relationship_query->ID); ?>" class="feat-content-block" style="background: <?php echo $overlay_color; ?>, url('<?php echo $featured_img_url; ?>');">
						
							<h5>
							<?php if ($feat_content_type == 'case_studies'): ?>	
							<span class="featured-block-cat">
								<?php 
									$terms = get_the_terms( $relationship_query->ID , 'services' );

										foreach ( $terms as $term ) {

										   	echo $term->name;

										}		
									   				
								?>
									   				
							</span>
							
							<?php elseif ($feat_content_type == 'post'):  ?> 
								<span class="featured-block-cat"><?php echo $post_category[0]->cat_name; ?></span>
								/ <span class="featured-block-date"><?php echo $my_post_date; ?></span>	   			
										
							
							<?php elseif ($feat_content_type == 'webinars'): ?>
								<span class="featured-block-cat">Webinar<span>
								<span class="featured-block-date"> / <?php echo $my_post_date; ?></span>
														
							</h5>
							<?php endif; ?>
							
							<h3><?php echo $my_title; ?></h3>
							
							<?php if ($feat_content_type == 'case_studies'): ?>
								
								<!-- start ACF relationship field inside ACF relationship field inside ACF repeater -->
								<?php $posts = get_field('case_study_client', $relationship_query->ID);
							
									if( $posts ): ?>
									
									<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
									   <?php $client_logo_inverted = get_field('logo_inverted', $p->ID); ?>
									
									   <img src="<?php echo $client_logo_inverted['url']; ?>" alt="<?php echo $client_logo_inverted['alt']; ?>"/>
									<?php endforeach; ?>
									
								<?php endif; ?>
								<!-- end ACF nested relationship field inside ACF repeater -->
						
							<?php endif; ?>	

							
							
						</a>
					</div>
					
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					<!-- end ACF relationship -->

					<?php endwhile; ?>
					<?php endif; ?>	
					<!-- end ACF repeater -->	
									
				</div>
			</section>
		</article>
		
		<article id="client-blocks-container">
			<section class="container-fluid">
				<div class="row">
					
					
					<? 
						$posts = get_field('home_featured_clients');

						if( $posts ): ?>
						   
						    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post); ?>
						      
									<div class="col-sm-3 col-xs-6">
										<div class="client-block">
											<?php $client_logo = get_field('logo'); ?>
											
											<a href="<?php the_field('website'); ?>" target="_blank"><img src="<?php echo $client_logo['url']; ?>"  alt="<?php echo $client_logo['alt']; ?>"/></a>
											
										</div>
									</div> 
						      
						            
						         
						    <?php endforeach; ?>
						    
						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
					
<!--
					<?php $args = array( 'post_type' => 'im_clients');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<div class="col-sm-3 col-xs-6">
							<div class="client-block">
								<a href="<?php the_field('website'); ?>" target="_blank"><img src="<?php the_field('logo'); ?>" /></a>
							</div>
						</div> 
						
					<?php endwhile; ?>
-->

									
						
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