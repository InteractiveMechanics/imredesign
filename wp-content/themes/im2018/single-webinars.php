<?php
/**
 * Template for displaying a Webinar
 * @package imredesign
 * @since imredesign 1.0
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
		<div class="jumbotron jumbo-short">
					<div class="media-container">
						<img src="<?php printThemePath(); ?>/assets/backgrounds/background-01@1x.jpg" />
					</div>
					
			</div>
	
			
		<article>
			<section class="container-fluid">
				<div class="row">
					
					<div class="col-sm-12">
						<div class="feat-content-block-wide"  style="background: linear-gradient(rgba(71,142,187, 0.7), rgba(58,89,141, 0.7)), url('<?php printThemePath(); ?>/assets/featured-images/featured-image-01@1x.jpg'); background-size: cover;">
							
							<h5>Webinar</h5>
							
							<h3>User Experience for Museum Professionals</h3>
								
							
														
						</div>
					</div>
				</div>
			</section>
		</article>
		
		<article class="entry-content">
			<section class="container-fluid">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 content-wrapper">
						<h5>About the Webinar</h5>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vehicula dui sed risus bibendum tempor in eget velit. Integer sit amet porttitor nibh. Duis dictum justo a neque facilisis, a ullamcorper augue fermentum. Etiam consectetur magna ut metus lobortis malesuada. Nulla varius suscipit nisi non tincidunt. Etiam vitae lobortis tellus. Fusce tellus massa, aliquam at finibus vel, bibendum ac nunc. Nullam ornare, sem quis scelerisque dapibus, diam erat dignissim urna, at efficitur nunc nisi vitae dolor. Proin sit amet dolor mi. Maecenas commodo nulla tellus, vel vestibulum dui vestibulum ut. Sed id fringilla urna. In eros eros, mattis in mattis quis, molestie ac sapien. Curabitur maximus leo a placerat lobortis. Nullam venenatis, neque eget mollis elementum, neque purus dapibus quam, sed facilisis neque leo id justo.</p>
						
						<p>Etiam consectetur magna ut metus lobortis malesuada. Nulla varius suscipit nisi non tincidunt. Etiam vitae lobortis tellus. Fusce tellus massa, aliquam at finibus vel, bibendum ac nunc. Nullam ornare, sem quis scelerisque dapibus, diam erat dignissim urna, at efficitur nunc nisi vitae dolor. Proin sit amet dolor mi. Maecenas commodo nulla tellus, vel vestibulum dui vestibulum ut.</p>
						
						<p>Nulla varius suscipit nisi non tincidunt. Etiam vitae lobortis tellus. Fusce tellus massa, aliquam at finibus vel, bibendum ac nunc. Nullam ornare, sem quis scelerisque dapibus, diam erat dignissim urna, at efficitur nunc nisi vitae dolor. Proin sit amet dolor mi. Maecenas commodo nulla tellus, vel vestibulum dui vestibulum ut. Etiam consectetur magna ut metus lobortis malesuada. Nulla varius suscipit nisi non tincidunt. Etiam vitae lobortis tellus. Fusce tellus massa, aliquam at finibus vel, bibendum ac nunc. Nullam ornare, sem quis scelerisque dapibus, diam erat dignissim urna, at efficitur nunc nisi vitae dolor.</p>
						

						

						
						
					</div>
					
					<div class="col-sm-8 col-sm-offset-2 resources">
						<h5>Webinar Resources</h5>
						<div>
							<h4>Presentation Slides</h4>
							<p><a href="#">Download</a></p>
						</div>
						<div>
							<h4>Handout</h4>
							<p><a href="#">Download</a></p>
						</div>
					</div>
				</div>
			</section>
		</article>
		
		
		<article class="registration">
			<section class="container-fluid">
				<div class="row">
						<div class="col-sm-8 col-sm-offset-2 content-wrapper">
						<h3>Register for this Webinar</h3>
						</div>	
					
										
						
										
				</div>
			</section>
		</article>



		</main>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>