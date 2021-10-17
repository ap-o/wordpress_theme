<?php
	#specific page template

get_header();



	if(have_posts()):
		while(have_posts()): the_post();
?>
	
			<div class="container ">
				<article class="post alert alert-light" style="background-color: <?= get_theme_mod( 'about_color', $default = false ) ?>">
					
					<h1 align="center"><?php  the_title(); ?></h1>
						
					<!--div class="alert alert-dark" role="alert">
						<p align="center"><i>"About page template" applied on this page.</i></p>
					</div-->

					<p><?php the_content(); ?></p>

				</article>
			</div>

<?php
		endwhile;

	else:
		echo "<h1>No content found</h1>";
	endif;

	

get_footer();
?>