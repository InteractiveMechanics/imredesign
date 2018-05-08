<?php $thumbnail_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
		$overlay_color = get_field('overlay_color');
					?>					
					
								
					<div class="col-sm-4">
						
						<a href="<?php the_permalink(); ?>" class="feat-content-block" style="background: <?php echo $overlay_color; ?>, url('<?php echo $thumbnail_img_url; ?>');">
							
							<?php

									$terms = get_the_terms(get_the_ID(), 'services' );
	
									foreach ( $terms as $term ) {
	
										echo '<h5>' . $term->name . '</h5>';
	
									}				

							?>
							
							<h3><?php the_title(); ?></h3>
							
							<?php $posts = get_field('case_study_client');
							
								if( $posts ): ?>
									
									<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                        
									 <?php $client_logo_inverted = get_field('logo_inverted', $p->ID); ?>
									
									   <img src="<?php echo $client_logo_inverted['url']; ?>" alt="<?php echo $client_logo_inverted['alt']; ?>"/>
									<?php endforeach; ?>
									
							<?php endif; ?>

							
	
							
						</a>
					</div>