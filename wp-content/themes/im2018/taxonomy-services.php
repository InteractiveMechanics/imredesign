<?php get_header(); ?>

<main>
	
	<?php 
			$current_tax = get_queried_object();
			$current_tax_name = $current_tax->name;	
	?>
	
	<div class="jumbotron jumbo-short">
			<div class="media-container">
				<img src="<?php printThemePath(); ?>/assets/backgrounds/background-01@1x.jpg" />
			</div>
			
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-md-12 hero-text-wrapper">
						<h1><?php the_field('case_study_archive_page_heading', 'option'); ?></h1>
						<h5 class="visible-xs"><a href="<?php echo get_post_type_archive_link( 'case_studies' ); ?>">View All Projects</a></h5>
						
						<ul class="filter-group filter-blue hidden-xs">
							<li><a href="<?php echo get_post_type_archive_link('case_studies'); ?>">All Work</a></li>
							
							<?php
								$current_tax = get_queried_object();
								$current_tax_name = $current_tax->name;
								$current_tax_id = $current_tax->term_id;	
								
								$terms = get_terms( array(
								    'taxonomy' => 'services',
								    'orderby' => 'name',
									'order'   => 'ASC'
								) ); 
							
							?>
							
							<?php foreach ($terms as $term):
								$term_name = $term->name;
								$term_link = get_term_link( $term->term_id );
								$term_id = $term->term_id;
							?>
							
								<?php if ($current_tax_id == $term_id): ?>
									<li><a href="<?php echo $term_link; ?>" class="active"><?php echo $term_name; ?></a></li>
								<?php else: ?>
									<li><a href="<?php echo $term_link; ?>"><?php echo $term_name; ?></a></li>
								<?php endif; ?>
								
							<?php endforeach; ?>			
						</ul>

					</div>
					
					<div class="col-sm-7">
						<p><?php the_field('case_study_archive_page_subtitle', 'option'); ?></p>
			
					</div>
					
				</div>	
  			</div>
	</div>
	
	<article id="cs-archive">
		<section class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
<!--
						<ul class="filter-group filter-blue hidden-xs">
							<li><a href="<?php echo get_post_type_archive_link('case_studies'); ?>">All Work</a></li>
							
							<?php
								$current_tax = get_queried_object();
								$current_tax_name = $current_tax->name;
								$current_tax_id = $current_tax->term_id;	
								
								$terms = get_terms( array(
								    'taxonomy' => 'services',
								    'orderby' => 'name',
									'order'   => 'ASC'
								) ); 
							
							?>
							
							<?php foreach ($terms as $term):
								$term_name = $term->name;
								$term_link = get_term_link( $term->term_id );
								$term_id = $term->term_id;
							?>
							
								<?php if ($current_tax_id == $term_id): ?>
									<li><a href="<?php echo $term_link; ?>" class="active"><?php echo $term_name; ?></a></li>
								<?php else: ?>
									<li><a href="<?php echo $term_link; ?>"><?php echo $term_name; ?></a></li>
								<?php endif; ?>
								
							<?php endforeach; ?>			
						</ul>
-->
					</div>
					
					
					<?php
					
						$args = array(
							'post_type' => "case_studies",
							'numberposts' => '1',
							'orderby' => 'post_date'
							
						);
						$recent_posts = wp_get_recent_posts($args);
					?>
					
					<?php foreach ($recent_posts as $recent): 
						$featured_link = get_the_permalink($recent->ID);
						$featured_banner_img = get_field('banner_img', $recent->ID); 
						$featured_title = get_the_title($recent->ID);
						$featured_short_description = get_field('short_description', $recent->ID);
						$featured_client = get_field('case_study_client', $recent->ID);
						$overlay_color = get_field('overlay_color', $recent->ID);

						
					?>
						<div class="col-sm-12">
							<a href="<?php echo $featured_link; ?>" class="feat-content-block-wide"  style="background: <?php echo $overlay_color; ?>, url('<?php echo $featured_banner_img; ?>');">
								
								<?php

									$terms = get_the_terms( $post->ID , 'services' );
	
									foreach ( $terms as $term ) {
	
										echo '<h5>' . $term->name . '</h5>';
	
									}				

								?>
								
								<h3><?php echo $featured_title; ?></h3>
								
								<?php if ($featured_short_description): ?>
								
									<p><?php echo $featured_short_description; ?></p>
			
								<?php endif; ?>
								
								
								
							
								<? if( $featured_client ): ?>
									
									<?php foreach( $featured_client as $p ): // variable must NOT be called $post (IMPORTANT) ?>
									    <?php $client_logo_inverted = get_field('logo_inverted', $p->ID); ?>
									
									   <img src="<?php echo $client_logo_inverted['url']; ?>" alt="<?php echo $client_logo_inverted['alt']; ?>"/>
									<?php endforeach; ?>
									
								<?php endif; ?>
	
													
							</a>
						</div>
					<?php endforeach; ?> 
					
					
					<?php 
						$current_tax = get_queried_object();
						$current_tax_name = $current_tax->name;
						$current_tax_id = $current_tax->term_id;
						$current_tax_slug = $current_tax->slug;
						
					?>
					
				 
										
					<?php echo do_shortcode('[ajax_load_more container_type="div" repeater="template_2" post_type="case_studies" posts_per_page="3" taxonomy="services" taxonomy_terms="'. $current_tax_slug . '"  offset="1"]'); ?> 
					
					<?php wp_reset_postdata(); // reset the query ?>
					
										
					
				</div>
						
		</section>
	</article>

	
	
	
	
</main>



<?php get_footer(); ?>