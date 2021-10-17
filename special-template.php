<?php

/*
Template Name: Special Layout
*/

get_header();



	if(have_posts()):
		while(have_posts()): the_post();
?>
			<div class="container">
				<article class="post alert alert-light" style="background-color: #e1a2a21f">

					<h1 align="center"><?php  the_title(); ?></h1>
					
					<!--div class="alert alert-success" role="alert">
						<p align="center"><i>"Custom page Template" applied on this page.</i></p>
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