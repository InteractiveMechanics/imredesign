<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package im2018
 */

get_header(); ?>

<?php $archive_year = get_the_time('Y'); ?>
	

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="jumbotron jumbo-short">
				<div class="media-container">
					<img src="<?php printThemePath(); ?>/assets/backgrounds/background-01@1x.jpg" />
				</div>
				
				<div class="container-fluid">
					<div class="row">
						
						<div class="col-md-7 col-sm-10">
							<h1>Blog: <?php echo $archive_year; ?></h1>
							<h5 class="visible-xs"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">View All Posts</a></h5>
						</div>
						
						
						
					</div>	
	  			</div>
			</div>
			
				
	<article id="cs-archive">
		<section class="container-fluid">
			<div class="row">
			<div class="col-sm-12">
							<ul class="filter-group filter-blue hidden-xs">
								<li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">All Articles</a></li>
								
								<?php 
									
									$categories = get_categories(array(
								    	'orderby' => 'name',
										'order'   => 'ASC',
										'exclude' => 1  //exclude uncategorized
									) );
								
									foreach ($categories as $category): 
										$cat_name = $category->name;
										$cat_link = get_category_link( $category->term_id );
									
									
								?>
								
									<li><a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a></li>
								
								<?php endforeach; ?>		
							</ul>
						</div>
						


			


		<?php
		if ( have_posts() ) : ?>
		
		<?php 
			$args = array(
	
				'numberposts' => '1',
				'orderby' => 'post_date'
							
			);
			
			$recent_posts = wp_get_recent_posts($args);
		
		?>
		
		<?php foreach ($recent_posts as $recent): 
						$featured_link = get_the_permalink($recent->ID);
						$featured_banner_img = get_field('banner_img', $recent->ID); 
						$featured_title = get_the_title($recent->ID);
						$post_category = get_the_category();
						$first_category = $post_category[0]->cat_name;
						$post_date = get_the_date('F Y');
						$overlay_color = get_field('overlay_color', $recent->ID);

						
						
					?>
						<div class="col-sm-12">
							<a href="<?php echo $featured_link; ?>" class="feat-content-block-wide"  style="background: <?php echo $overlay_color; ?>, url('<?php echo $featured_banner_img; ?>');">
								
							
								
								<h5><span class="blog-cat"><?php echo $first_category; ?></span> / <span class="blog-date"><?php echo $post_date; ?></span></h5>
								<h3><?php the_title(); ?></h3>
								
								<p><?php echo get_the_excerpt(); ?></p>								
							
	
													
							</a>
						</div>
			<?php endforeach; ?> 

		

			
			<?php
				$args = array(
					'offset' => 1,
					'year' => $archive_year
				);
				
				//$loop = new WP_Query( $args ); 

			
			echo do_shortcode('[ajax_load_more container_type="div" year="'. $archive_year .'" repeater="template_6" posts_per_page="3" post_type="post" offset="1"]');
			
			


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
			</div>
		</section>
	</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
