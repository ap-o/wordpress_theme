<?php
# Default page template
get_header();



	if(have_posts()):
		while(have_posts()): the_post();
?>
	
	<div class="container">
		
	<div class="row"> 
				<div class="col-3">
		<?php get_sidebar('second'); ?>
	</div> 
			<div class="col-9 "> 
				<article class="post alert alert-secondary">
							
					<div class="container">
					<div class="row">
						<div class="col-5">
						<br>
							<?php  the_post_thumbnail('medium-thumbnail'); ?> 
						</div>
						
						<div class="col-7"><br>
							<b><h4><?php the_title(); ?></h4></b>
							<div class="small"><i><?php the_time('F jS, Y'); ?> &nbsp;|&nbsp; <!--by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a--> |&nbsp; Portfolio type
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

							<p><i><?php the_content(); ?></i></p>

							<ul style="list-style: none;">

								<?php if( get_post_meta( $post->ID, 'Camera', true )):?>
									<li><b>Camera : &nbsp;</b><i><?php echo get_post_meta( $post->ID, 'Camera', true ); ?></i></li>
								<?php endif; ?>

								<?php if( get_post_meta( $post->ID, 'Accessories', true )):?>
									<li><b>Accessories : &nbsp;</b><i><?php echo get_post_meta( $post->ID, 'Accessories', true ); ?></i></li>
								<?php endif; ?>

								<?php if( get_post_meta( $post->ID, 'Location or Event', true )):?>
									<li><b>Location or Event : &nbsp;</b><i><?php echo get_post_meta( $post->ID, 'Location or Event', true ); ?></i></li>
								<?php endif; ?>
							
							</ul>

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
						</div>
					</div>
					</div>
					<br>
				</article>
	<?php
		endwhile;

	else:
		echo "<h1>No content found</h1>";
	endif;

	?>	
			</div>
	
	</div>

	</div> 

	<?php

	

get_footer();
?>
