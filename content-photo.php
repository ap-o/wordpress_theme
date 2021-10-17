
			<div class="alert alert-dark container" style="background-color: #d9d8d6c2;">
				<div class="row">
					<div class="col-3">
						<br>
						<?php  the_post_thumbnail('small-thumbnail'); ?> 
					</div>
					<div class="col-9"><br>

						<?php  if(is_page('content-photo' )){ ?>
							
							<small><b><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></b></small>
						
						<?php  } else{  ?>

							<small><b><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></b></small>

						<?php  }?>

						<?php if (!is_page( 'portfolio' )) { ?>
								<div class="small"><i><?php the_time('F jS, Y'); ?> &nbsp;|&nbsp; <!--by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a--> |&nbsp;Portfolio type
								<?php
									$portfolio_type = wp_get_post_terms( $post->ID, 'portfolio_types' );
									$separator =', ';
									$output='';
									//var_dump($portfolio_type);
									foreach ($portfolio_type as $p) {
										$output = $output .'<a href="'. get_term_link($p).'">'. $p->name .'</a>'.$separator;
										//echo trim($output, $separator);

									}

									echo trim($output, $separator);
								?></i> 
							</div><hr>
							<?php } ?>
						<small><i><?php the_excerpt(); ?></i></small>

						<?php if (!is_page( 'portfolio' )) { ?>
								<hr>

								<div class="small">  Tags: &nbsp; <?php
									$portfolio_tag = wp_get_post_terms( $post->ID, 'portfolio_tags' );
									$separator =', ';
									$tag_output='';
									//var_dump($portfolio_tag);
									foreach ($portfolio_tag as $p) {
										$tag_output = $tag_output .'<a href="'. get_term_link($p).'">'. $p->name .'</a>'.$separator;
										//echo trim($output, $separator);
										
									}

									echo trim($tag_output, $separator);
								?>
							</div>
						<?php } ?>
						
					</div>
				</div>
			</div>
		