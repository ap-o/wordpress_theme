<!--   Post content ----------------------------------->

<article class="post">

		<?php  if(is_single()){ ?>

			<!-- Single post page title -->

			<h1><?php  the_title(); ?></h1><br><hr>

		<?php   } else { 	?>

			<!-- Post page and archive page title -->

			 <div class="alert alert-light"><h4><a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a></h4>
			
		<?php   }  ?>
		
		

		<!-- meta data of post start -->
		<div class="small">
		<i><?php the_time('F jS, Y  - g:i a'); ?> &nbsp;| by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a> &nbsp;| Posted in <?php

				$cat = get_the_category();
				$separator = ', ';
				$output= '';

				if($cat){

					foreach ($cat as $c) {
				 		$output = $output .'<a href="'.get_category_link($c->term_id).'" >'. $c->cat_name .'</a>'. $separator;
					} 
					echo trim($output, $separator);
				}
				
			?>
		</i> &nbsp;|&nbsp;&nbsp; <i> <?php  echo get_comments_number(); ?> comment</i>
		</div><hr>
		<!-- meta data of post end -->
		
		<?php  if(is_single()){ ?>

			<!-- Single post page -->
			<div class="alert alert-warning" style="background-color: #fff3cd75">
				<br><br><div align="center"><?php the_post_thumbnail('small-thumbnail');  ?></div>
				<p><?php the_content(); ?></p>
			</div>
			<br>
			<hr>
			<h2><i>Comments </i></h2><br>
			<?php comments_template(); ?>
		
		<?php   } else { 	?>

			<!-- Post page and archive page -->

			<p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>"><span class="small">Read more&raquo;</span></a></p></div>			
			
		<?php   }  ?>
	</article>