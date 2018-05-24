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
							
							<div class="col-md-7 col-sm-10">
								<h1>Blog</h1>
							</div>
							
							<div class="col-md-7 col-sm-10">
								<p></p>
							</div>
							
												
						</div>	
		  			</div>
			</div>
			
			<article id="cs-archive">
				<section class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<ul class="filter-group filter-blue hidden-xs">
								<li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="active">All Articles</a></li>
								
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

					$posts = get_field('featured_post', get_option('page_for_posts'));
					
					
					if( $posts ): ?>
					    <div class="col-sm-12">
						    <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) 
							    	$post_category = get_the_category($p->ID);
									$first_category = $post_category[0]->cat_name;
									$post_date = get_the_date('F Y', $p->ID);
									$overlay_color = get_field('overlay_color', $p->ID);

						    ?>
					   			<a href="<?php echo get_permalink( $p->ID ); ?>" class="feat-content-block-wide"  style="background: <?php echo $overlay_color; ?>, url('<?php the_field("banner_img", $p->ID); ?>'); background-size: cover;">
							
									<h5>Featured Post</h5>
								
								<h3><?php echo get_the_title( $p->ID ); ?></h3>
								
								
								<p><?php get_the_excerpt($p -> ID); ?></p>
					        </a>
														
										
					    <?php endforeach; ?>
					    </div>
					   
					<?php endif; ?>
					
					
					
									
					
					
										
					<?php echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="3"]'); ?> 
					
				
				</div>
			</section>
	</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
