<?php
	#archive page

get_header();


?>
<div class="container">
	<div class="alert alert-warning" role="alert">
		<h3 align="center"><i>Archive</i></h3>
	</div>
</div>	
<div class="container">
<div class="row">
	

	<div class="col-3">
		<?php get_sidebar(); ?>
	</div>

	<div class="col-9">
<?php
	if(have_posts()):

?>			<div class="alert alert-secondary" role="alert" align="center">
				<i><?php

				if(is_category()){
					echo 'Category archive:- '; single_cat_title();
				}elseif(is_tag()){
					echo 'Tag archive:- '; single_tag_title();
				}elseif(is_day()){
					echo 'Daily archive:- '; the_time('D j');
				}elseif(is_author()){
					the_post();
					echo 'Author archive:- '; the_author();
					rewind_posts();
				}elseif(is_month()){
					echo 'Monthly archive:- '; the_time('F Y');
				}elseif(is_year()){
					echo 'Yearly archive:- '; the_time('Y');
				}else{
					echo 'archive';	
				}

				?></i>
			</div>
<?php		
		while(have_posts()): the_post();
			#include content page
			get_template_part('content',get_post_format());
?>

		<hr>
<?php			
		endwhile;

	else:
		echo "<h1>No content found</h1>";
	endif;
?>
	<br><div align="center">
			<?php wp_pagenavi(); //page navigation ?>
	</div><br>

</div>
</div>
</div>	
<?php 
	

get_footer();
?>