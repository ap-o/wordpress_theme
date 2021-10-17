<?php get_header(); ?>


<div class="container">
	<div class="row">
		<div class="col-3">
			<?php get_sidebar(); ?>
		</div>
		

		<div class="col-9">
				<div class="alert alert-warning" style="background-color: <?= get_theme_mod( 'blog_color', $default = false ) ?>; border-color: <?= get_theme_mod( 'blog_color', $default = false ) ?>;" >
						<h2 align="center">Blog posts</h2><br>
				<?php
						$paged = get_query_var('paged') ? get_query_var('paged') : 1;
						$args = array(  
						        'post_type' => 'post',
						        'post_status' => 'publish',
						        'posts_per_page' => '', 
						        'orderby' => 'date', 
						        'order' => 'DSC', 
						        'category__not_in' => array( 10 ), //exclude post_type 10 (gallery type)
						        //'cat' => '11',
						        'paged' => $paged
						    );

					    $loop = new WP_Query( $args ); 
			#post loop --------------------------------------------------
			
			if($loop->have_posts()):
				while($loop->have_posts()): $loop->the_post();
					#include content page
					get_template_part('content', get_post_format());
					//get_template_part('content');

				endwhile;

			else:
				echo "<h1>No content found</h1>";
			endif;

			#post loop end ----------------------------------------------


				?>	<br>
				<div align="center">
					<?php wp_pagenavi(array( 'query' => $loop )); //page navigation

					 wp_reset_query(); ?>
				</div>
			</div>

		</div>
	</div>
</div>
<?php get_footer(); ?>