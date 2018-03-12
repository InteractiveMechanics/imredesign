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
						<div class="feat-content-block-wide"  style="background-image: linear-gradient(45deg, rgba(71,142,187, 1.0), rgba(58,89,141, 0.1)), url('<?php printThemePath(); ?>/assets/featured-images/featured-image-01@1x.jpg');">
							
							<h5><?php echo $name; ?></h5>
							
							<h3><?php echo $title; ?></h3>
							
							
							<div id="bio-social" class="social list-group">
								<a href="#" target="_blank" class="list-group-item"><?php include("assets/icons/icon-twitter.svg"); ?></a>
								<a href="#" target="_blank" class="list-group-item"><?php include("assets/icons/icon-linkedin.svg"); ?></a>
								<a href="#" target="_blank" class="list-group-item"><?php include("assets/icons/icon-email.svg"); ?></a>
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
				
			
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(45deg, rgba(71,142,187, 1.0), rgba(58,89,141, 0.1)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5>Director of Strategic Initiatives</h5>
							
							<h3>Amelia Longo</h3>
							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(45deg, rgba(71,142,187, 1.0), rgba(58,89,141, 0.1)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5>Chief Communications Officer</h5>
							
							<h3>Nyota Uhura</h3>
							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(45deg, rgba(71,142,187, 1.0), rgba(58,89,141, 0.1)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5>Interactive Designer</h5>
							
							<h3>Tara Espenshade</h3>
							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(45deg, rgba(71,142,187, 1.0), rgba(58,89,141, 0.1)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5>Marketing Manager</h5>
							
							<h3>LaNeshe Miller-White</h3>
							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(45deg, rgba(71,142,187, 1.0), rgba(58,89,141, 0.1)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5>Defense Against The Dark Arts</h5>
							
							<h3>Severus Snape</h3>
							
						</a>
					</div>		
									
			</div>
		</section>
	</article>





<?php endwhile; ?>

<?php get_footer(); ?>