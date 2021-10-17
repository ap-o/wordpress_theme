<div class="alert alert-secondary" align="center">
	
<h4 align="center"><a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a></h4><hr>



	<small><i><?php the_time('F jS, Y  - g:i a'); ?> &nbsp;|  &nbsp;by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a> &nbsp;|&nbsp;&nbsp;  <?php  echo get_comments_number(); ?> comment</i></small><br><br>

	<?php the_content(); ?>
	
</div>

<div>
	<?php comments_template(); ?>
</div>

