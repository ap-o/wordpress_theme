<!-- Aside post formate page -->
<article class="post">
	<div class="alert alert-dark">
		<small><i> 

			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a> &nbsp;| &nbsp;

			<?php the_time('F jS, Y  - g:i a'); ?> &nbsp;

		</i></small>

		<?php the_content();?>
	</div>
</article>