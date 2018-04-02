<?php
/**
 * Template for displaying a Team Bio
 *
 * @package imredesign
 * @since imredesign 1.0
 */
?>

<?php get_header(); ?>

<?php 
	$banner_img = get_field('banner_img');
	$name = get_field('name');
	$title = get_field('title');
	$bio_copy = get_field('bio_copy');
	
?>


<?php while ( have_posts() ) : the_post();
?>

<div class="jumbotron jumbo-short">
	<div class="media-container">
		<img src="<?php printThemePath(); ?>/assets/backgrounds/background-01@1x.jpg" />
	</div>				
</div>


<article>
		<section class="container-fluid">
				<div class="row">
					
					<div class="col-sm-12">
						<div class="feat-content-block-wide"  style="background-image: linear-gradient(to left bottom, rgba(71,142,187, 1.0), rgba(58,89,141, 0.1)), url('<?php echo $banner_img; ?>');">
							
							<h5><?php echo $name; ?></h5>
							
							<h3><?php echo $title; ?></h3>
							
							
							<div id="bio-social" class="social list-group">
								<?php 
									$facebook = get_field('facebook');
									$twitter = get_field('twitter');
									$linkedin = get_field('linkedin');
									$instagram = get_field('instagram');
									$dribble = get_field('dribble');
									$personal_website = get_field('personal_website');
									$team_bio_email = get_field('team_bio_email');	
								?>
								
								<?php if ($facebook): ?>
									<a href="<?php echo $facebook; ?>" target="_blank" class="list-group-item"><?php include("assets/icons/icon-facebook.svg"); ?></a>
								<?php endif; ?>

								
								<?php if ($twitter): ?>
									<a href="<?php echo $twitter; ?>" target="_blank" class="list-group-item"><?php include("assets/icons/icon-twitter.svg"); ?></a>
								<?php endif; ?>
								
								
								<?php if ($linkedin): ?>
									<a href="<?php echo $linkedin; ?>" target="_blank" class="list-group-item"><?php include("assets/icons/icon-linkedin.svg"); ?></a>
								<?php endif; ?>
								
								<?php if ($instagram): ?>
									<a href="<?php echo $instagram; ?>" target="_blank" class="list-group-item"><?php include("assets/icons/icon-instagram.svg"); ?></a>
								<?php endif; ?>
								
								<?php if ($dribble): ?>
									<a href="<?php echo $dribble; ?>" target="_blank" class="list-group-item"><?php include("assets/icons/icon-dribble.svg"); ?></a>
								<?php endif; ?>
								
								<?php if ($personal_website): ?>
									<a href="<?php echo $personal_website; ?>" target="_blank" class="list-group-item"><?php include("assets/icons/icon-email.svg"); ?></a>
								<?php endif; ?>
								
								
								<?php if ($team_bio_email): ?>
									<a href="<?php echo $team_bio_email; ?>" target="_blank" class="list-group-item"><?php include("assets/icons/icon-email.svg"); ?></a
								<?php endif; ?>
								
								
								
							</div>
														
						</div>
					</div>
				</div>
		</section>
</article>

<article class="entry-content">
		<section class="container-fluid">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 content-wrapper">
					<h5>Biography</h5>
					
					<?php echo $bio_copy; ?>
					
					
				</div><!-- /.content-wrapper -->
			</div><!-- /.row -->
		</section>
	</article>
	

	<article id="related-content" class="team bottom-border">
		<section class="container-fluid">
			<div class="row">
				
					<div class="col-sm-12 related-content-heading">
						<h3>Our Team</h3>
					</div>
				
			
					<?php $args = array( 
						'post_type' => 'team_bios', 
						'posts_per_page' => 10,
						'post__not_in' => array( $post->ID )
					
					 );
						
					
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





<?php endwhile; ?>

<?php get_footer(); ?>