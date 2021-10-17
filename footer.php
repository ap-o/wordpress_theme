

<footer>
<div class="container ">
<div class="jumbotron"  style="background-color: <?= get_theme_mod( 'footer_color', $default = false ) ?>; padding-bottom: 1rem; margin-bottom: 0rem;" >
	
	<div class="row">
		<!--   Footer widgets -->
		<div class="col-3">
			<?php if (is_active_sidebar('footer1')) : ?>
				
				
					<?php dynamic_sidebar('footer1'); ?>
				

			<?php endif; ?>
		</div>


		<div class="col-3">
			<?php if (is_active_sidebar('footer2')) : ?>
				
				
					<?php dynamic_sidebar('footer2'); ?>
				

			<?php endif; ?>
		</div>
		
		
		<div class="col-3">
			<?php if (is_active_sidebar('footer3')) : ?>
				
				
					<?php dynamic_sidebar('footer3'); ?>
				

			<?php endif; ?>
		</div>

		<div class="col-3">
			<?php if (is_active_sidebar('footer4')) : ?>
				
				
					<?php dynamic_sidebar('footer4'); ?>
				

			<?php endif; ?>
		</div>

		<!--   Footer widgets end -->
		
	</div>
	<hr>
		<p align="center"><?php  bloginfo('name'); ?>- &copy; <?php echo date('Y'); ?> </p>
</div>
</div>	
</footer>


<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>
</html>