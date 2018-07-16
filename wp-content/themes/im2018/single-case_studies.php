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
	$project_url = get_field('project_url');
	$project_video = get_field('project_video');
	$overlay_color = get_field('overlay_color');
		
	
?>

<?php while ( have_posts() ) : the_post();	?>

	<div class="jumbotron jumbo-short">
			<div class="media-container">
				<img src="<?php printThemePath(); ?>/assets/backgrounds/background-01@1x.jpg" alt="people looking at touch screen"/>
			</div>
					
	</div>
	
	<article id="cs-hero-container">
		<section class="container-fluid">
				<div class="row">
					
					<div class="col-sm-12">
						<div class="feat-content-block-wide"  style="background-image: <?php echo $overlay_color; ?>, url('<?php echo $banner_img; ?>');">
							<?php

								$terms = get_the_terms( $post->ID , 'services' );

								foreach ( $terms as $term ) {

									echo '<h5>' . $term->name . '</h5>';

								}				

							?>
							
							
							<h3><?php the_title(); ?></h3>
							
							<div class="awards-wrapper">
							<?php if( have_rows('case_study_awards') ): ?>
							
								<?php while (have_rows('case_study_awards')): the_row(); 
									$award_img = get_sub_field('award_img');
								?>
						
						
									<a class="awards-block">
										<img src="<?php echo $award_img; ?>" />
									</a>
						
								<?php endwhile; ?>
								
							<?php endif; ?>					
							</div>
							
							
							<?php 

								$posts = get_field('case_study_client');
								
								if( $posts ): ?>
									
									<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
										
										<?php $client_logo_inverted = get_field('logo_inverted', $p->ID); ?>
									
									   <img class="resp-client-logo" src="<?php echo $client_logo_inverted['url']; ?>" alt="<?php echo $client_logo_inverted['alt']; ?>" />
									<?php endforeach; ?>
									
							<?php endif; ?>
							
							
													
<!-- 							<?php if ($project_video): ?> -->
<!-- 								<a class="btn btn-default btn-gold" href="<?php echo $project_video; ?>" role="button" target="_blank">Watch the Video</a> -->
<!-- 									<button class="btn btn-default btn-gold" data-toggle="modal" data-target="#myModal">Watch the Video</button> -->
<!-- 							<?php endif; ?> -->
							
							
							
							
														
						</div>
					</div>
				</div>
			</section>
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
				<div class="col-sm-12 gallery-wrapper grid">
					
					<?php while (have_rows('case_study_gallery')): the_row(); 
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
									$term_link = get_term_link($term->term_id);

									echo '<a href="'. $term_link . '" class="btn btn-pill">' . $term->name . '</a>';

								}				

						?>
						
						
						
						<h5>Technology</h5>
						
						<?php

								$terms = get_the_terms( $post->ID , 'technologies' );

								foreach ( $terms as $term ) {
									$term_link = get_term_link($term->term_id);

									echo '<a href="' . $term_link . '" class="btn btn-pill">' . $term->name . '</a>';

								}				

						?>
						
												
						<h5>Services</h5>
						
						<?php

								$terms = get_the_terms( $post->ID , 'services' );
								

								foreach ( $terms as $term ) {
									$term_link = get_term_link( $term->term_id );

									echo '<a href="' . $term_link . '" class="btn btn-pill">' . $term->name . '</a>';

								}				

						?>
							
						<?php if ($project_url): ?>
								<a class="btn btn-default btn-gold cs-project-link" href="<?php echo $project_url; ?>" role="button" target="_blank">Visit the Site</a>
						<?php endif; ?>

						
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
							    	<a href="<?php the_field('press_url', $p->ID); ?>" target="_blank"><?php echo get_the_title( $p->ID ); ?></a>
							    	
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
					
					<h3>Learn More</h3>
					
					<div class="learn-more-wrapper">
						<?php 

						$posts = get_field('learn_more_staff');
						
						
						
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
	
	<!-- ACF repeater starts -->
	<?php if( have_rows('case_study_related_content') ): ?>
	

	
	<article id="related-content">
		<section class="container-fluid">
			<div class="row">
				
					<div class="col-sm-12 related-content-heading">
						<h3>Browse Related</h3>
						<h5><a href="<?php echo get_post_type_archive_link( 'case_studies' ); ?>">All Projects</a></h5>
					</div>
					
					
					
					<?php while ( have_rows('case_study_related_content') ) : the_row(); ?>
			
				
					
					
					<!-- ACF repeater subfields -->
					<?php 
						$relationship_queries = get_sub_field('related_content_case_study');
						$background_color = get_sub_field('related_content_background_color');  	
					?>
					
					<!-- ACF relationship inside repeater starts -->
					<?php if ($relationship_queries): ?>
					<?php foreach( $relationship_queries as $relationship_query ) :
						
						$featured_img_url = get_the_post_thumbnail_url($relationship_query->ID,'full'); 
						$my_title = get_the_title($relationship_query->ID);
						$post_category = get_the_category($relationship_query->ID);
						$first_category = $post_category[0]->cat_name;
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
										
										<img src="<?php echo $client_logo_inverted['url']; ?>" alt="<?php echo $client_logo_inverted['alt']; ?>" />

										
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
														
			</div>
		</section>
	</article>
	<?php endif; ?>	
	<!-- end ACF repeater -->	


	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

	
	
	

<?php endwhile; ?>

<?php get_footer(); ?>