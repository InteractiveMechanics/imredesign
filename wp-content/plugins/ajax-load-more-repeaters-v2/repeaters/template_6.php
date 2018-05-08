<?php 	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
				$post_category = get_the_category();
				$first_category = $post_category[0]->cat_name;
				$post_date = get_the_date('F Y');
				$overlay_color = get_field('overlay_color');

		?>

		
		<div class="col-sm-4">
								
			<a href="<?php echo the_permalink(); ?>"  id="post-<?php the_ID(); ?>" class="feat-content-block" style="background: <?php echo $overlay_color; ?>, url('<?php echo $featured_img_url; ?>');">
									
				<h5><span class="blog-cat"><?php echo $first_category; ?></span> / <span class="blog-date"><?php echo $post_date; ?></span></h5>
									
				<h3><?php the_title(); ?></h3>
									
									
									
			</a>
		</div>