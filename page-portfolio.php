<?php
# Default page template
get_header();



	if(have_posts()):
		while(have_posts()): the_post();
?>
	
	<div class="container">
		
		<div class="row">  
			<div class="col-7 "> 
					<article class="post alert alert-secondary" style="background-color: <?= get_theme_mod( 'portfolio_color', $default = false ) ?>; border-color: <?= get_theme_mod( 'portfolio_color', $default = false ) ?>">
					
						<h3 align="center"><?php  the_title(); ?></h3>
					
					<!--div class="alert alert-success" role="alert">
						<p align="center"><i>"portfolio Page template" applied on this page.</i></p>
					</div-->
						
						<p><?php the_content(); ?></p>
					</article>
			
		
	<?php
		endwhile;

	else:
		echo "<h1>No content found</h1>";
	endif;

	?>
	</div>
	<div class="col-5 ">
		<div class="alert alert-warning" style="background-color: <?= get_theme_mod( 'portfolio_color2', $default = false ) ?>; border-color: <?= get_theme_mod( 'portfolio_color2', $default = false ) ?>">
			<div align="center"><small>Latest works</small></div><br>
		<?php 
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			$args = array( 'post_type' => 'photo', 'posts_per_page' => '4',  'paged' => $paged);
			$the_query = new WP_Query( $args ); 
		?>
		<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<!--div class="alert alert-dark container" style="background-color: #d9d8d6c2;">
				<div class="row">
					<div class="col-3">
						<br>
						<?php  the_post_thumbnail('small-thumbnail'); ?> 
					</div>
					<div class="col-9"><br>
						<small><b><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></b></small>
						<small><i><?php the_excerpt(); ?></i></small>
						
					</div>
				</div>
			</div-->


			<?php get_template_part('content-photo',get_post_format()); ?>
		<?php endwhile;
			//wp_reset_postdata(); ?>
		<?php else:  ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

		<br><div align="center">
			<?php wp_pagenavi(array( 'query' => $the_query )); //page navigation

			 wp_reset_query(); ?>
		</div>
		</div>
	</div>

	</div> <!-- row end -->
</div>
	<?php

	

get_footer();
?>
