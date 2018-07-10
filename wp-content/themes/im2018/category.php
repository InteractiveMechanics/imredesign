<?php get_header(); ?>

<main>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<div class="jumbotron jumbo-short">
					<div class="media-container">
						<img src="<?php printThemePath(); ?>/assets/backgrounds/background-01@1x.jpg" />
					</div>
					
					<div class="container-fluid">
						<div class="row">
							
							<div class="col-md-12 hero-text-wrapper">
								<h1>Blog</h1>
								<h5 class="visible-xs"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">View All Posts</a></h5>
								<ul class="filter-group filter-blue hidden-xs">
								<li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">All Articles</a></li>
								
								<?php 
									$current_cat = get_queried_object();
									$current_cat_id = $current_cat->term_id;
									
									$categories = get_categories(array(
								    	'orderby' => 'name',
										'order'   => 'ASC',
										'exclude' => 1  //exclude uncategorized
									) );
								
									foreach ($categories as $category): 
										$cat_name = $category->name;
										$cat_link = get_category_link( $category->term_id );
										$cat_id = $category->term_id;
										
									
								?>
								
									<?php if ( $current_cat_id == $cat_id): ?>
								
									<li><a href="<?php echo $cat_link; ?>" class="active"><?php echo $cat_name; ?></a></li>
									
									<?php else: ?>
									
									<li><a href="<?php echo $cat_link; ?>" class="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></a></li>
									
									<?php endif; ?>
								
								<?php endforeach; ?>		
							</ul>

							</div>
							
												
						</div>	
		  			</div>
			</div>
			
			<article id="cs-archive">
				<section class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
						</div>
						
					
					
					
					<?php
						$current_cat = get_queried_object();
						$current_cat_id = $current_cat->term_id;

						
						$args = array(
							'post_type' => 'post',
							'cat' => $current_cat_id,
							'numberposts' => '1',
							'orderby' => 'post_date'
							
						);
						$recent_posts = wp_get_recent_posts($args);
					?>
					
					<?php if ($recent_posts): ?>	
					
					<div class="col-sm-12">
					
					<?php foreach ($recent_posts as $recent): 
						$featured_banner_img = get_field('banner_img', $recent->ID); 
						$featured_title = get_the_title($recent->ID);
						$post_category = get_the_category();
						$first_category = $post_category[0]->cat_name;
						$post_date = get_the_date('F Y');
						$post_excerpt = get_the_excerpt($recent->ID);
						$overlay_color = get_field('overlay_color', $recent->ID);
												
					?>
					
					
					
						<a href="<?php the_permalink( $recent->ID ); ?>" class="feat-content-block-wide"  style="background: <?php echo $overlay_color; ?>, url('<?php echo $featured_banner_img; ?>'); background-size: cover;">
							
								<h5><span class="blog-cat"><?php echo $first_category; ?></span> / <span class="blog-date"><?php echo $post_date; ?></span></h5>
								
								<h3><?php echo $featured_title; ?></h3>
								
								
								<?php if ($post_excerpt): ?>
								<p><?php echo $post_excerpt; ?></p>
								<?php endif; ?>
					        </a>
														
										
					    <?php endforeach; ?>
					    </div>
					    <?php endif; ?>
					   
										
					
					
									
					
					
					<?php 
						$current_cat = get_queried_object();
						$current_cat_id = $current_cat->term_id;
						$current_cat_slug = $current_cat->slug;
						$i == 0;
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
										
						
						
						
						
					<?php endwhile; ?>
					<?php echo do_shortcode('[ajax_load_more container_type="div" repeater="template_4" post_type="post" category="'.$current_cat_slug .'" posts_per_page="3" offset="1"]'); ?> 
				
					
					
				</div>
			</section>
	</article>

		</main><!-- #main -->
	</div><!-- #primary -->





</main>

<?php get_footer(); ?>