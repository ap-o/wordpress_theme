<?php
# Default page template
get_header();



	if(have_posts()):
		while(have_posts()): the_post();
?>
	
<div class="container">
	<article class="post" style="background-color: <?= get_theme_mod( 'contact_color', $default = false ) ?>; border-color: <?= get_theme_mod( 'contact_color', $default = false ) ?>">
	
	<br>
	<h3 align="center"><?php  the_title(); ?></h3>
			
			<!--div class="alert alert-success" role="alert">
				<p align="center"><i>"Default Page template" applied on this page.</i></p>
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
