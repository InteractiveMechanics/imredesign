<?php
/**
 * Template for displaying a Case Study
 *
 * @package imredesign
 * @since imredesign 1.0
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post();
?>

	<article id="cs-hero-container">
		<section class="container-fluid">
				<div class="row">
					
					<div class="col-sm-12">
						<div class="feat-content-block-wide"  style="background: linear-gradient(rgba(45,49,66, 0.75), rgba(45,49,66, 0.75)), url('<?php printThemePath(); ?>/assets/featured-images/featured-image-01@1x.jpg');">
							
							<h5>Interactive Exhibits</h5>
							
							<h3>Muscle Hatchery Exhibits</h3>
							
							<img src="<?php printThemePath(); ?>/assets/clients-partners-logos/client-logo-white-philamuseum.png" />
							
							<button class="btn btn-default btn-gold" href="#" role="button">Watch the Video</button>
														
						</div>
					</div>
				</div>
			</section>
			<section class="container-fluid">
				<div class="row">
					<div class="col-sm-12 awards-wrapper">
						<a class="awards-block">
							<img src="<?php printThemePath(); ?>/assets/awards/sample-award-01@2x.png" />
						</a>
						
						<a class="awards-block">
							<img src="<?php printThemePath(); ?>/assets/awards/sample-award-02@2x.png" />
						</a>
						
					</div>
				</div>
			</section>
	</article>
	
	<article id="cs-main">
		<section class="container-fluid">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 content-wrapper">
					<p>As part of the re-installation of "Drawing Room from a Town House: 901 Fifth Aveue, New York City," the Philadelphia Museum of Art reached out to us to create  a pair of high-resolution digital interactives to allow visitors to take a closer look at 66 of the room's objects.</p>
					
					<h5>About the Project</h5>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vehicula dui sed risus bibendum tempor in eget velit. Integer sit amet porttitor nibh. Duis dictum justo a neque facilisis, a ullamcorper augue fermentum. Etiam consectetur magna ut metus lobortis malesuada. Nulla varius suscipit nisi non tincidunt. Etiam vitae lobortis tellus. Fusce tellus massa, aliquam at finibus vel, bibendum ac nunc. Nullam ornare, sem quis scelerisque dapibus, diam erat dignissim urna, at efficitur nunc nisi vitae dolor. Proin sit amet dolor mi. Maecenas commodo nulla tellus, vel vestibulum dui vestibulum ut. Sed id fringilla urna. In eros eros, mattis in mattis quis, molestie ac sapien. Curabitur maximus leo a placerat lobortis. Nullam venenatis, neque eget mollis elementum, neque purus dapibus quam, sed facilisis neque leo id justo.</p>
					
					
					<img src="http://www.pixedelic.com/themes/geode/demo/wp-content/uploads/sites/4/2014/04/placeholder4.png" />
					
					<h5>Kid Friendly &amp; Accessible</h5>
					
					<p>Nullam dictum faucibus semper. Curabitur ut leo non urna egestas malesuada vel sed eros. Nam augue enim, pretium a posuere vel, auctor in ipsum. Nulla ultricies placerat velit, non sagittis metus tincidunt vitae. Donec id sapien sollicitudin, blandit nisi a, elementum diam. Mauris commodo gravida purus, vel pretium risus. Nullam rhoncus elit maximus, blandit risus pretium, rhoncus turpis. Quisque ultricies laoreet eleifend. </p>
					
					<blockquote class="blockquote">
						<p>I've worked with dozens of developers and Interactive Mechanics was as friendly, reliable, and on-point as they come. They hit every project deadline and delivered an end product that exceeded our expectations.</p>
						<footer class="blockquote-footer">
							<h5 class="blockquote-name">Owen Henkel</h5>
							<h5 class="blockquote-title">Director of Fund Development</h5>
							<h5 class="blockquote-affiliation">Social Venture Fund</h5>  
						</footer>
					</blockquote>
					
					<h5>Cool &amp; Super Neat</h5>
					
					<p>Nullam dictum faucibus semper. Curabitur ut leo non urna egestas malesuada vel sed eros. Nam augue enim, pretium a posuere vel, auctor in ipsum. Nulla ultricies placerat velit, non sagittis metus tincidunt vitae. Donec id sapien sollicitudin, blandit nisi a, elementum diam. Mauris commodo gravida purus, vel pretium risus. Nullam rhoncus elit maximus, blandit risus pretium, rhoncus turpis. Quisque ultricies laoreet eleifend. </p>
					
					<p>Praesent sit amet lobortis sem. Cras a fringilla tortor. Aliquam pellentesque turpis nec scelerisque tristique. Nam consectetur ligula ac magna laoreet, vitae blandit enim blandit. Pellentesque tristique tincidunt nunc sed hendrerit. Quisque consequat iaculis commodo. Maecenas ullamcorper ac diam nec maximus.</p>
					
					<h5>Forward Thinking</h5>
					
					<p>Maecenas vulputate semper nisi, quis bibendum mauris sollicitudin eget. Nulla leo enim, bibendum eget ipsum et, venenatis ornare lacus. Nullam pulvinar ipsum non mauris sodales dictum nec id massa. Donec sit amet rutrum neque. Quisque feugiat pretium nulla sed congue. Nam maximus nec nisi nec euismod. Donec finibus dui libero, vitae elementum lorem ultrices eu. Duis ut lorem ligula. Donec tempor pretium ornare. Morbi suscipit nisl eget ipsum feugiat, sit amet tempor mi sagittis. Nam augue turpis, malesuada sed porttitor sed, suscipit ornare dolor. In malesuada sem ac ornare consectetur.</p>
					
				</div><!-- /.content-wrapper -->
			</div><!-- /.row -->
		</section>
	</article>
	
	<article id="gallery" class="bottom-border">
		<section class="container-fluid">
			<div class="row">
				<div class="col-sm-12 gallery-wrapper">
					<img src="https://picsum.photos/200/300" alt="placeholder image"/>
					<img src="https://picsum.photos/215/330" alt="placeholder image"/>
					<img src="https://picsum.photos/275/300" alt="placeholder image"/>
					<img src="https://picsum.photos/250" alt="placeholder image"/>
					<img src="https://picsum.photos/300/330" alt="placeholder image"/>
					<img src="https://picsum.photos/400/500" alt="placeholder image"/>
				</div>
			</div>
		</section>
	</article>
	
	<article id="project-details">
		<section class="container-fluid">
			<div class="row">
				
				<div class="col-sm-8 col-sm-offset-2">
					
					<h3>Project Details</h3>
					
					<div class="col-sm-6">
						<h5>Year</h5>
						<button class="btn-pill">2015</button>
						
						<h5>Technology</h5>
						<button class="btn-pill">WebGL</button>
						<button class="btn-pill">HTML5</button>
						<button class="btn-pill">Jekyll</button>
						
						<h5>Services</h5>
						<button class="btn-pill">Interactive Exhibits</button>	
					</div>
					
					<div class="col-sm-6">
						<h5>Partners</h5>
						<h4><a href="#" target="_blank">Metcalfe Architecture and Design</a></h4>
						
						<h5>Funders</h5>
						<h4><a href="#" target="_blank">National Endowment for the Humanities</a></h4>
						
						<h5>Press</h5>
						<h4><a href="#" target="_blank">Celebrating the Rice Room Opening</a></h4>
						<h4><a href="#" target="_blank">Using Digital Screens at the Philadelphia Museum of Art</a></h4>
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
						<img class="staff-thumb-sm"src="<?php printThemePath(); ?>/assets/staff-thumbnails/staff-thumbnail-longo@1x.jpg" />
						
						<div>
							<h4>Amelia Longo</h4>
							<h5>Director of Strategic Initiatives</h5>
							<h4><a href="mailto:someone@example.com">amelia@interactivemechanics.com</a></h4>
						</div>
					</div>
						
				</div>
				
				
			</div>
		</section>
	</article>
	
	<article id="related-content">
		<section class="container-fluid">
			<div class="row">
				
					<div class="col-sm-12 related-content-heading">
						<h3>Browse Related</h3>
						<h5><a href="#">All Projects</a></h5>
					</div>
				
			
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(rgba(45,49,66, 0.75), rgba(45,49,66, 0.75)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5><span class="featured-block-cat">Behind the Scenes</span> / <span class="featured-block-date">July 2017</span></h5>
							
							<h3>Meet LaNeshe, our new Marketing Manager</h3>
							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(rgba(45,49,66, 0.75), rgba(45,49,66, 0.75)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5><span class="featured-block-cat">Behind the Scenes</span> / <span class="featured-block-date">July 2017</span></h5>
							
							<h3>Meet LaNeshe, our new Marketing Manager</h3>
							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(rgba(45,49,66, 0.75), rgba(45,49,66, 0.75)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5><span class="featured-block-cat">Behind the Scenes</span> / <span class="featured-block-date">July 2017</span></h5>
							
							<h3>Meet LaNeshe, our new Marketing Manager</h3>
							
						</a>
					</div>		
									
			</div>
		</section>
	</article>


	
	
	

<?php endwhile; ?>

<?php get_footer(); ?>