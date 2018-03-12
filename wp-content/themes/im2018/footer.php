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
						<a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank" class="list-group-item"><?php include("assets/icons/icon-facebook.svg"); ?></a>
						<a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank" class="list-group-item"><?php include("assets/icons/icon-twitter.svg"); ?></a>
						<a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank" class="list-group-item"><?php include("assets/icons/icon-instagram.svg"); ?></a>
						<a href="<?php the_field('dribble_link', 'option'); ?>" target="_blank" class="list-group-item"><?php include("assets/icons/icon-dribbble.svg"); ?></a>
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
						<h3><?php the_field('footer_tagline', 'option'); ?></h3>
						<address>
							<h5><?php the_field('footer_street_address', 'option'); ?> <?php the_field('footer_city', 'option'); ?>, <?php the_field('footer_state', 'option'); ?> <?php the_field('footer_zip', 'option'); ?></h5>
						</address>
						<h5><a href="emailto:<?php the_field('footer_email_address', 'option'); ?>"><?php the_field('footer_email_address', 'option'); ?></a> <span class="hidden-xs">&#47; <a href="<?php the_field('footers_careers_page_url', 'option'); ?>"><?php the_field('footer_careers_page_link', 'option'); ?></a><span></h5>
					</div>
					
				</div>
			</div>
			
		</section><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
