<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package im2018
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<section class="container-fluid">
			<div class="row">
				<div class="col-sm-12 footer-wrapper">
					<form class="form-inline hidden-xs">
						<label class="sr-only" for="email">Email</label>
						<input type="email" name="email" placeholder="Sign Up for Our Email List">
						
						<input class="btn" type="submit" value="Submit">
					</form>
				
					<div id="footer-social" class="social list-group">
						<a href="#" target="_blank" class="list-group-item"><?php include("assets/icons/icon-facebook.svg"); ?></a>
						<a href="#" target="_blank" class="list-group-item"><?php include("assets/icons/icon-twitter.svg"); ?></a>
						<a href="#" target="_blank" class="list-group-item"><?php include("assets/icons/icon-instagram.svg"); ?></a>
						<a href="#" target="_blank" class="list-group-item"><?php include("assets/icons/icon-dribbble.svg"); ?></a>
					</div>
					
				</div>
			</div>
		</section>
		
		<div class="full-width-border"></div>
		
		<section class="container-fluid">
			
			<div class="row">
				<div class="col-sm-12 footer-wrapper">
					<a class="" href="#">
						<?php include("assets/logos/logo-footer.svg"); ?>
					</a>
					
					<div class="site-info">
						<h3>Beautiful digital design for arts, culture, and education</h3>
						<address>
							<h5>219 Cuthbert Street Suite 210 Philadelphia, PA 19102</h5>
						</address>
						<h5><a href="">hello@interactivemechanics.com</a> <span class="hidden-xs">&#47; <a href="#">Jobs</a><span></h5>
					</div>
					
				</div>
			</div>
			
		</section><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
