<?php

	function customizer($wp_customize){

		$wp_customize->add_section('showcase', array(

			'title' => __('Showcase', 'wp'),
			'description' => sprintf(__('Options for showcase','wp')),
			'priority' => 130
		));

		# Showcase logo in navbar
 		$wp_customize->add_setting('showcase_logo', array(

			'default' => get_bloginfo('template_directory'),
			'type'  => 'theme_mod'
 		));

 		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_logo', array(

 				'label' => __('Showcase navbar logo', 'wp'),
 				'section' => 'showcase',
 				'settings' => 'showcase_logo',
 				'priority' => 1
 		)));

		# Heading showcase
		$wp_customize->add_setting('showcase_heading', array(

			'default' => _x('Enter heading','wp'),
			'type'  => 'theme_mod'
 		));

 		$wp_customize->add_control('showcase_heading', array(
 			'label' => __('Heading', 'wp'),
 			'section' => 'showcase',
 			'priority' => 2
 		));


 		# Text Showcase
 		$wp_customize->add_setting('showcase_text', array(

			'default' => _x('Enter text','wp'),
			'type'  => 'theme_mod'
 		));

 		$wp_customize->add_control('showcase_text', array(
 			'label' => __('Text', 'wp'),
 			'section' => 'showcase',
 			'priority' => 3
 		));


 		# show case text color
 		$wp_customize->add_setting('showcase_text_color', array(

 			'default'   => '#fff',
    		'transport' => 'refresh',

 		));

 		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'showcase_text_color', array(
			'label'      => __( 'Text color', 'wp' ),
			'section'    => 'showcase',
			'settings'   => 'showcase_text_color',
			'priority'   => 4

		) ) );

 		# Showcase button
 		$wp_customize->add_setting('showcase_button_url', array(

			'default' => _x('Enter URL','wp'),
			'type'  => 'theme_mod'
 		));

 		$wp_customize->add_control('showcase_button_url', array(
 			'label' => __('URL', 'wp'),
 			'section' => 'showcase',
 			'priority' => 5
 		));



 		# Button text
 		$wp_customize->add_setting('button_text', array(

			'default' => _x('Enter button text','wp'),
			'type'  => 'theme_mod'
 		));

 		$wp_customize->add_control('button_text', array(
 			'label' => __('Button Text', 'wp'),
 			'section' => 'showcase',
 			'priority' => 6
 		));


 		# Showcase image
 		$wp_customize->add_setting('showcase_image', array(

			'default' => get_bloginfo('template_directory'),
			'type'  => 'theme_mod'
 		));

 		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(

 				'label' => __('Showcase Image', 'wp'),
 				'section' => 'showcase',
 				'settings' => 'showcase_image',
 				'priority' => 7
 		)));

 		# Showcase button color change
 		$wp_customize->add_setting('showcase_btn_color', array(

 			'default'   => '#138496',
    		'transport' => 'refresh',

 		));

 		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'showcase_btn_color', array(
			'label'      => __( 'Button color', 'wp' ),
			'section'    => 'showcase',
			'settings'   => 'showcase_btn_color',
			'priority'   => 8

		) ) );
 	################################### change section ###################################	

 		# link , navbar , footer color change
 		$wp_customize->add_section('change_color', array(

			'title' => __('Change Link Navbar & Footer color', 'wp'),
			'description' => sprintf(__('Options for color change','wp')),
			'priority' => 131
		));

 		# Link color change
		$wp_customize->add_setting('link_color', array(

 			'default'   => '#0056b3',
    		'transport' => 'refresh',

 		));

 		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
			'label'      => __( 'Change link color', 'wp' ),
			'section'    => 'change_color',
			'settings'   => 'link_color',
			'priority'   => 8

		) ) );

 		# Navbar color change
		$wp_customize->add_setting('navbar_color', array(

 			'default'   => '#e3f2fd',
    		'transport' => 'refresh',

 		));

 		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'navbar_color', array(
			'label'      => __( 'Change Navbar color', 'wp' ),
			'section'    => 'change_color',
			'settings'   => 'navbar_color',
			'priority'   => 9

		) ) );

 		# footer color change
		$wp_customize->add_setting('footer_color', array(

 			'default'   => '#8cb5dd26',
    		'transport' => 'refresh',

 		));

 		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'footer_color', array(
			'label'      => __( 'Change Footer color', 'wp' ),
			'section'    => 'change_color',
			'settings'   => 'footer_color',
			'priority'   => 10

		) ) );
 		

 		################################### change section ###################################	

 		# page color change
 				

 		$wp_customize->add_section('content_color', array(
				
 			'title' => __("Change page color", "wp"),
			'description' => sprintf(__('Options for page color change','wp')),
			'priority' => 132
		));


 		# home page notice color change
		$wp_customize->add_setting('home_notice', array(

 			'default'   => '#e2e3e5',
    		'transport' => 'refresh',

 		));

 		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'home_notice', array(
			'label'      => __( "Change Home page notice color", 'wp' ),
			'section'    => 'content_color',
			'settings'   => 'home_notice',
			'priority'   => 1

		) ) );


		# home work block color change
		$wp_customize->add_setting('home_work_block', array(

 			'default'   => '#d9d8d6c2',
    		'transport' => 'refresh',

 		));

 		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'home_work_block', array(
			'label'      => __( "Change Home page work block color", 'wp' ),
			'section'    => 'content_color',
			'settings'   => 'home_work_block',
			'priority'   => 1	

		) ) );


		# home post block color change
		$wp_customize->add_setting('home_post_block', array(

 			'default'   => '#fff3cd',
    		'transport' => 'refresh',

 		));

 		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'home_post_block', array(
			'label'      => __( "Change Home page post block", 'wp' ),
			'section'    => 'content_color',
			'settings'   => 'home_post_block',
			'priority'   => 2	

		) ) );

 		# about page color change
		$wp_customize->add_setting('about_color', array(

 			'default'   => '#e1a2a21f',
    		'transport' => 'refresh',

 		));

 		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'about_color', array(
			'label'      => __( "Change About page color", 'wp' ),
			'section'    => 'content_color',
			'settings'   => 'about_color',
			'priority'   => 3

		) ) );


		# blog color change
		$wp_customize->add_setting('blog_color', array(

 			'default'   => '#fff3cd3',
    		'transport' => 'refresh',

 		));

 		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'blog_color', array(
			'label'      => __( "Change Blog page color", 'wp' ),
			'section'    => 'content_color',
			'settings'   => 'blog_color',
			'priority'   => 4

		) ) );


		# portfolio color change
		$wp_customize->add_setting('portfolio_color', array(

 			'default'   => '#e2e3e594',
    		'transport' => 'refresh',

 		));

 		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'portfolio_color', array(
			'label'      => __( "Change Portfolio page color", 'wp' ),
			'section'    => 'content_color',
			'settings'   => 'portfolio_color',
			'priority'   => 5

		) ) );


		# portfolio 2nd color change
		$wp_customize->add_setting('portfolio_color2', array(

 			'default'   => '#fff3cd',
    		'transport' => 'refresh',

 		));

 		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'portfolio_color2', array(
			'label'      => __( "Change Portfolio page 2nd color", 'wp' ),
			'section'    => 'content_color',
			'settings'   => 'portfolio_color2',
			'priority'   => 6	

		) ) );

		# contact color change
		$wp_customize->add_setting('contact_color', array(

 			'default'   => '#fff3cd',
    		'transport' => 'refresh',

 		));

 		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'contact_color', array(
			'label'      => __( "Change Contact-us page color", 'wp' ),
			'section'    => 'content_color',
			'settings'   => 'contact_color',
			'priority'   => 7	

		) ) );

	}

	add_action('customize_register', 'customizer');