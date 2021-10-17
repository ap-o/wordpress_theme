<?php
# Front page template
get_header();



	if(have_posts()):
		while(have_posts()): the_post();
?>
	<style type="text/css">
		
		#showcase{
				  color: white;
				  background-image: url(<?php echo get_theme_mod( 'showcase_image', 'https://images.unsplash.com/photo-1438109491414-7198515b166b?q=80&fm=jpg&s=cbdabf7a79c087a0b060670a6d79726c' )?>);
				  background-position: center;
				  background-repeat: no-repeat;
				  background-size: cover;
				  border-radius: 5px;
				  height: 40%;
			}

		

	</style>


	<div class="container">
		<div class="row">   <!-- main row start -->
			
			<div class="col-9">  <!-- main 1st coloumn start   -->
				<!--div class="container"-->


			<article class="post">
			
					<!--h1 align="center"><?php  the_title(); ?></h1-->
				<!--div class="alert alert-info" role="alert">
					<p align="center"><i>"Front page template" applied on this page.</i></p>
				</div-->
					<!--h3><i><?php the_content(); ?></i></h3-->
				
					 <div class="jumbotron jumbotron-fluid" id="showcase">
					  <div class="container" align="center">

					    <h1 class="display-4" style="color: <?= get_theme_mod( 'showcase_text_color', $default = false ) ?>"><?php echo get_theme_mod( 'showcase_heading', $default = false )?></h1>
					  	 <br>
					    <p style="color: <?= get_theme_mod( 'showcase_text_color', $default = false ) ?>"><?php echo get_theme_mod( 'showcase_text', $default = false )?></p>
					    <br>
					    <a class="btn btn-info  btn-lg" href="<?php echo get_theme_mod( 'showcase_button_url', $default = 'wordpress/post' )?>" role="button" style="background-color: <?= get_theme_mod( 'showcase_btn_color', $default = false ) ?>; border-color: <?= get_theme_mod( 'showcase_btn_color', $default = false ) ?> "><?php echo get_theme_mod( 'button_text', $default = false )?></a>

					  </div>
					</div>

			</article>
		<!--/div-->

<?php
		endwhile;

	else:
		echo "<h1>No content found</h1>";
	endif;
?>
	<!--div class="container"-->
		<div class="row">  <!--  nested row start -->
				
				<div class="">
					<!--  empty div-->
				</div>


				<div class="col-9"> <!-- coloumn start   -->
					<h5 align="center">Notice</h5>

					<?php

					$args = array(  
					        'post_type' => 'post',
					        'post_status' => 'publish',
					        'posts_per_page' => 3, 
					        'orderby' => 'date', 
					        'order' => 'DSC', 
					        'cat' => '11'
					    );

				    $loop = new WP_Query( $args ); 
				        
				   if($loop->have_posts()): 

				   	while ( $loop->have_posts() ) : $loop->the_post(); 
	    	?>
	    			<div class="alert alert-secondary" align="center" style="background-color: <?= get_theme_mod( 'home_notice', $default = false ) ?>">
				       	<small><b>&nbsp;<?php the_time('F jS, Y  - g:i a'); ?></b></small>
				        <small><i><?php the_content() ?> </i></small>
				    </div>
		    <?php  
					endwhile;
					wp_reset_postdata(); 

				endif;
				

			?>
				</div>  <!-- coloumn end   -->





				<div class="col-3">   <!-- coloumn start   -->
					<h5 align="center">Latest works</h5>
					
						
					<?php 
						$paged = get_query_var('paged') ? get_query_var('paged') : 1;
						$args = array( 'post_type' => 'photo', 'posts_per_page' => '2',  'paged' => $paged);
						$the_query = new WP_Query( $args ); 
					?>
					<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="alert alert-dark" style="background-color: <?= get_theme_mod( 'home_work_block', $default = false ) ?>; border-color: <?= get_theme_mod( 'home_work_block', $default = false ) ?>" align="center">
								
								<small><b><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></b></small>
										
										<?php  the_post_thumbnail('small-thumbnail'); ?> 
										<br><br>

								<!--div class="row">
									<div class="col" align="center">
										
									</div>
									<div class=""><br>
										
										<small><i><?php //the_excerpt(); ?></i></small>
										
									</div>
								</div-->
							</div>
					<?php endwhile;
						//wp_reset_postdata(); ?>
					<?php else:  ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>

					<br><div align="center">
						<?php //page navigation

						 wp_reset_query(); ?>
					</div>
		
				</div><!-- coloumn end   -->
				
			</div><!--  nested row end -->
	<!--/div-->
			</div>  <!-- main 1st coloumn end   -->


			<div class="col-3">   <!-- main 2nd coloumn start   -->
				
				<!---h4 align="center">Latest post</h4--->

			<?php

					$args = array(  
					        'post_type' => 'post',
					        'post_status' => 'publish',
					        'posts_per_page' => 5, 
					        'orderby' => 'date', 
					        'order' => 'DSC', 
					        'cat' => '5'
					    );

				    $loop = new WP_Query( $args ); 
				        
				   if($loop->have_posts()): 

				   	while ( $loop->have_posts() ) : $loop->the_post(); 
	    	?>
	    			<div class="alert alert-secondary" style="background-color: <?= get_theme_mod( 'home_post_block', $default = false ) ?>; border-color: <?= get_theme_mod( 'home_post_block', $default = false ) ?> ">
				       	<small><b><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a> &nbsp; | &nbsp;<span style="font-size: 10px;"><?php the_time('F jS, Y'); ?></span></b> </small>
				        <small ><i><p  ><?php the_excerpt(); ?></p> </i></small>
				    </div>
		    <?php  
					endwhile;
				    wp_reset_postdata(); 
					
					
				endif;

			?>

			</div>  <!-- main 2nd coloumn end  -->
		</div>   <!-- main row end -->
		
	</div>

		

	
<?php
get_footer();
?>