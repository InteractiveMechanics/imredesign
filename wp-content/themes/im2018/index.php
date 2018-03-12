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
						
					
					
					
					
					
					<?php 

					$posts = get_field('featured_post', get_option('page_for_posts'));
					
					
					if( $posts ): ?>
					    <div class="col-sm-12">
						    <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) 
							    	$post_category = get_the_category();
									$first_category = $post_category[0]->cat_name;
									$post_date = get_the_date('F Y');

						    ?>
					   			<a href="<?php echo get_permalink( $p->ID ); ?>" class="feat-content-block-wide"  style="background: url('<?php the_field("banner_img"); ?>'); background-size: cover;">
							
								<h5><span class="blog-cat"><?php echo $first_category; ?></span> / <span class="blog-date"><?php echo $post_date; ?></span></h5>
								
								<h3><?php echo get_the_title( $p->ID ); ?></h3>
								
								
								<p><?php get_the_excerpt($p -> ID); ?></p>
					        </a>
														
										
					    <?php endforeach; ?>
					    </div>
					   
					<?php endif; ?>
					
					
					
									
					
					
					<?php $args = array( 'post_type' => 'post');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); 
					
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
						$post_permalink = get_post_permalink(get_the_ID());
						$post_category = get_the_category();
						$first_category = $post_category[0]->cat_name;
						$post_date = get_the_date('F Y');

					
					?>
						
						<div class="col-sm-4">
							
							<a href="<?php echo $post_permalink; ?>" class="feat-content-block" style="background: linear-gradient(rgba(71,142,187, 0.7), rgba(58,89,141, 0.7)), url('<?php echo $featured_img_url; ?>');">
								
								<h5><span class="blog-cat"><?php echo $first_category; ?></span> / <span class="blog-date"><?php echo $post_date; ?></span></h5>
								
								<h3><?php the_title(); ?></h3>
								
								
								
							</a>
						</div>
						
						
					<?php endwhile; ?>
					
				
					
					
				</div>
			</section>
	</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
