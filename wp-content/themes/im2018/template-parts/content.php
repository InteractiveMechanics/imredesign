<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package im2018
 */

?>

						



		<?php 	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
				$post_category = get_the_category();
				$first_category = $post_category[0]->cat_name;
				$post_date = get_the_date('F Y');
		?>

		
		<div class="col-sm-4">
								
			<a href="<?php echo the_permalink(); ?>"  id="post-<?php the_ID(); ?>" class="feat-content-block" style="background: linear-gradient(rgba(71,142,187, 0.7), rgba(58,89,141, 0.7)), url('<?php echo $featured_img_url; ?>');">
									
				<h5><span class="blog-cat"><?php echo $first_category; ?></span> / <span class="blog-date"><?php echo $post_date; ?></span></h5>
									
				<h3><?php the_title(); ?></h3>
									
									
									
			</a>
		</div>
	
	
