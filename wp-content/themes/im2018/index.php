<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package im2018
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<div class="jumbotron jumbo-short">
					<div class="media-container">
						<img src="<?php printThemePath(); ?>/assets/backgrounds/background-01@1x.jpg" />
					</div>
					
					<div class="container-fluid">
						<div class="row">
							
							<div class="col-sm-7">
								<h1>Blog</h1>
							</div>
							
												
						</div>	
		  			</div>
			</div>
			
			<article id="cs-archive">
				<section class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<ul class="filter-group filter-blue hidden-xs">
								<li><a href="#">All Articles</a></li>
								<li><a href="#">Behind the Scenes</a></li>
								<li><a href="#">Community</a></li>
								<li><a href="#">Tools &amp; Tech</a></li>	
								<li><a href="#">Process</a></li>				
							</ul>
						</div>
						
					
					<div class="col-sm-12">
						<a class="feat-content-block-wide"  style="background: url('<?php printThemePath(); ?>/assets/featured-images/Fellowship_Project_Announcement-20.jpg'); background-size: cover;">
							
							<h5><span class="blog-cat">Behind the Scenes</span> / <span class="blog-date">July 2017</span></h5>
							
							<h3>Meet LaNeshe, Our New Marketing Manager</h3>
							
							
							<p>LaNeshe recently joined our team as the Marketing Manager. Here are some fun facts about her and places in the city that bring her joy.</p>
														
														
						</a>
					</div>
					
								
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(rgba(71,142,187, 0.7), rgba(58,89,141, 0.7)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5><span class="blog-cat">Behind the Scenes</span> / <span class="blog-date">July 2017</span></h5>
							
							<h3>Meet LaNeshe, our New Marketing Manager</h3>
							
							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(45deg, rgba(219,178,103, 0.5), rgba(219,178,103, 0.5)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							
							<h5><span class="blog-cat">Community</span> / <span class="blog-date">May 2017</span></h5>
							
							<h3>Fall Conferences: Better than Summer Conferences?</h3>
							
							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(rgba(71,142,187, 0.7), rgba(58,89,141, 0.7)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5><span class="blog-cat">Community</span> / <span class="blog-date">May 2017</span></h5>	
							
							<h3>Design Brew Meetup - What Games Can Teach Us About Design</h3>
							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(45deg, rgba(227,146,96, 0.65), rgba(237,106,89, 0.65)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5><span class="blog-cat">Tools &amp; Tech</span> / <span class="blog-date">April 2017</span></h5>
							
							<h3>Cool Blog Title</h3>
							
							

							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(rgba(71,142,187, 0.7), rgba(58,89,141, 0.7)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5><span class="blog-cat">Tools &amp; Tech</span> / <span class="blog-date">March 2017</span></h5>
							
							<h3>Another Cool Blog Title</h3>
							
							
							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(45deg, rgba(219,178,103, 0.5), rgba(219,178,103, 0.5)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5><span class="blog-cat">Tools &amp; Tech</span> / <span class="blog-date">March 2017</span></h5>
							
							<h3>Doing Neat Things with Processing</h3>
							
							

							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(rgba(71,142,187, 0.7), rgba(58,89,141, 0.7)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5><span class="blog-cat">Tools &amp; Tech</span> / <span class="blog-date">February 2017</span></h5>
							
							<h3>Blog Post by a Fellow</h3>
							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(rgba(71,142,187, 0.7), rgba(58,89,141, 0.7)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5><span class="blog-cat">Process</span> / <span class="blog-date">January 2017</span></h5>
							
							<h3>Best Practices in Snack Ordering</h3>
							
							

							
						</a>
					</div>
					
					<div class="col-sm-4">
						
						<a href="#" class="feat-content-block" style="background: linear-gradient(45deg, rgba(227,146,96, 0.65), rgba(237,106,89, 0.65)), url('<?php printThemePath(); ?>/assets/thumbnail-images/thumbnail-image-01@1x.jpg');">
							
							<h5><span class="blog-cat">Tools &amp; Tech</span> / <span class="blog-date">December 2016</span></h5>
							
							<h3>CSS Houdini: Hacking the Browser is Okay Now</h3>
							
							
						</a>
					</div>
					
					
				</div>
			</section>
	</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
