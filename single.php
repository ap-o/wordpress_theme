<?php
# single post page

get_header();


?>


<div class="container">
<div class="row">

	<div class="col-3">
		<?php get_sidebar(); ?>
	</div>

	<div class="col-9">
<?php
	#post loop -------------------------------------------------------------------------------------
	if(have_posts()):
		while(have_posts()): the_post();

		#include content page
		get_template_part('content', get_post_format());
	

		endwhile;

	else:
		echo "<h1>No content found</h1>";
	endif;
	#post loop -------------------------------------------------------------------------------------
?>

	</div>

	

</div>
</div>	
<?php   /* global $post;
    $post_slug = $post->post_name;

    echo $post_slug;*/

get_footer();
?>