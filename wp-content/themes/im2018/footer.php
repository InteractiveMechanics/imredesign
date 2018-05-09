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
					
					<!-- Begin MailChimp Signup Form -->

					<form action="https://interactivemechanics.us4.list-manage.com/subscribe/post?u=60a7a9b85d71c540f39a195f3&amp;id=185fdc2b87" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    
						<label class="sr-only" for="mce-EMAIL">Email</label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Sign Up for Our Email List" aria-labelledby="email"/>
						
						<input type="checkbox" value="1" name="group[19773][1]" id="mce-group[19733]-19733-0" checked="checked" class="hidden">
					 
						  
						<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_60a7a9b85d71c540f39a195f3_185fdc2b87" tabindex="-1" value=""></div>
					    
					    <label class="sr-only" for="submit">Submit</label>
					   <input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe"  class="btn">
					   
					  					    
					</form>

					
					
					<!--End mc_embed_signup-->					
					
					
				
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
					<a class="" href="<?php echo home_url(); ?>">
						<?php include("assets/logos/logo-footer.svg"); ?>
					</a>
					
					<div class="site-info">
						<h3><?php the_field('footer_tagline', 'option'); ?></h3>
						<address>
							<h5><?php the_field('footer_street_address', 'option'); ?> <?php the_field('footer_city', 'option'); ?>, <?php the_field('footer_state', 'option'); ?> <?php the_field('footer_zip', 'option'); ?></h5>
						</address>
						<h5><a href="mailto:<?php the_field('footer_email_address', 'option'); ?>" target="_blank"><?php the_field('footer_email_address', 'option'); ?></a> <span class="hidden-xs">&#47; <a href="<?php the_field('footers_careers_page_url', 'option'); ?>"><?php the_field('footer_careers_page_link', 'option'); ?></a><span></h5>
					</div>
					
				</div>
			</div>
			
		</section><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
