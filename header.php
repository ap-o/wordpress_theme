<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<style type="text/css">
		#showcase{
			margin-bottom: 1rem;
		}

		a{
			color: <?= get_theme_mod( 'link_color', $default = false ) ?>;
		}
	</style>
</head>
<body <?php body_class(); ?> >

	
<header>
	<div class="container">

		<div class="alert alert-primary" style="background-color: <?= get_theme_mod( 'navbar_color', $default = false ) ?>; border-color: <?= get_theme_mod( 'navbar_color', $default = false ) ?>">
		
		<!-- Main navbar -->
		
			<nav class="navbar sticky-top navbar-expand-md navbar-light " role="navigation" style="background-color: <?= get_theme_mod( 'navbar_color', $default = false ) ?>;">
				<a class="navbar-brand" href="<?php echo home_url(); ?>"> <img src="<?php echo get_theme_mod( 'showcase_logo' )?>" width="70" height="" class="d-inline-block align-top" alt="" style="border-radius: 50px;"> <br><small><?php //bloginfo('name'); ?></small>  </a>
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
			        <span class="navbar-toggler-icon"></span>
			    </button>
			    <a class="navbar-brand" href="#"></a>
			        <?php
			        wp_nav_menu( array(
			            'theme_location'    => 'header',
			            'depth'             => 2,
			            'container'         => 'div',
			            'container_class'   => 'collapse navbar-collapse',
			            'container_id'      => 'bs-example-navbar-collapse-1',
			            'menu_class'        => 'nav navbar-nav',
			            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			            'walker'            => new WP_Bootstrap_Navwalker(),
			        ) );
			        ?>
			    </div>
			</nav>

		

		</div>
	</div>
</header>

