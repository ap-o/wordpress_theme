<?php


###############################################################################
###################  custom portfolio archive widget
###############################################################################

// Creating the widget 
		class custom_archive_widget extends WP_Widget {
		  
			function __construct() {
				parent::__construct(
				  
				// Base ID of your widget
				'custom_archive_widget', 
				  
				// Widget name will appear in UI
				__('Custom Archive', 'custom_widget'), 
				  
				// Widget description
				array( 'description' => __( 'Custom Archive widget', 'custom_widget' ), ) 
				);
			}
  
// Creating widget front-end
  
			public function widget( $args, $instance ) {
				$title = apply_filters( 'widget_title', $instance['title'] );
				  
				// before and after widget arguments are defined by themes
				echo $args['before_widget'];
				if ( ! empty( $title ) ) {
					echo $args['before_title'] . $title . $args['after_title'];
				}  
				// This is where you run the code and display the output
				//echo __( 'Hello', 'wpb_widget_domain' );

				################################################################
				################################################################
				$args = array(
						    'post_type'    => 'photo',
						    'type'         => 'monthly',
						    'before_widget' => '<div>',
						    'after_widget' => '</div>'

						);

				echo '<ul>'; 
				echo wp_get_archives($args);
				echo '</ul>';
				################################################################
				################################################################
				
		
				echo $args['after_widget'];

				
			}
          
// Widget Backend 
			public function form( $instance ) {
				
				if ( isset( $instance[ 'title' ] ) ) {
					$title = $instance[ 'title' ];
				} else {
					$title = __( 'Portfolio archive', 'wpb_widget_domain' );
				}
// Widget admin form
?>
				<p>
					<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
					<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
				</p>

<?php 
			
			}
      
// Updating widget replacing old instances with new
			public function update( $new_instance, $old_instance ) {
				$instance = array();
				$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
				return $instance;
			}
 
// Class wpb_widget ends here
} 
 
 
// Register and load the widget
function load_archive_widget() {
    register_widget( 'custom_archive_widget' );
}
add_action( 'widgets_init', 'load_archive_widget' );


###############################################################################
###################  custom portfolio tags widget
###############################################################################

// Creating the widget 
		class custom_tag_widget extends WP_Widget {
		  
			function __construct() {
				parent::__construct(
				  
				// Base ID of your widget
				'custom_tag_widget', 
				  
				// Widget name will appear in UI
				__('Custom Tag', 'custom_widget'), 
				  
				// Widget description
				array( 'description' => __( 'Custom Tag widget', 'custom_widget' ), ) 
				);
			}
  
// Creating widget front-end
  
			public function widget( $args, $instance ) {
				$title = apply_filters( 'widget_title', $instance['title'] );
				  
				// before and after widget arguments are defined by themes
				echo $args['before_widget'];
				if ( ! empty( $title ) ) {
					echo $args['before_title'] . $title . $args['after_title'];
				}  
				// This is where you run the code and display the output
				//echo __( 'Hello', 'wpb_widget_domain' );

				################################################################
				################################################################
				$args = array(
						    'taxonomy' => 'portfolio_tags',
						    'before_widget' => '<div>',
						    'after_widget' => '</div>',
						    'title_li' => ''

						);

				echo '<ul>'; 
				echo wp_list_categories($args);
				echo '</ul>';
				################################################################
				################################################################
				
		
				echo $args['after_widget'];

				
			}
          
// Widget Backend 
			public function form( $instance ) {
				
				if ( isset( $instance[ 'title' ] ) ) {
					$title = $instance[ 'title' ];
				} else {
					$title = __( 'Portfolio tags', 'custom_widget' );
				}
// Widget admin form
?>
				<p>
					<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
					<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
				</p>

<?php 
			
			}
      
// Updating widget replacing old instances with new
			public function update( $new_instance, $old_instance ) {
				$instance = array();
				$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
				return $instance;
			}
 
// Class wpb_widget ends here
} 
 
 
// Register and load the widget
function load_tag_widget() {
    register_widget( 'custom_tag_widget' );
}
add_action( 'widgets_init', 'load_tag_widget' );



###############################################################################
###################  custom portfolio types widget
###############################################################################
// Creating the widget 
		class custom_type_widget extends WP_Widget {
		  
			function __construct() {
				parent::__construct(
				  
				// Base ID of your widget
				'custom_type_widget', 
				  
				// Widget name will appear in UI
				__('Custom Type', 'custom_widget'), 
				  
				// Widget description
				array( 'description' => __( 'Custom Type widget', 'custom_widget' ), ) 
				);
			}
  
// Creating widget front-end
  
			public function widget( $args, $instance ) {
				$title = apply_filters( 'widget_title', $instance['title'] );
				  
				// before and after widget arguments are defined by themes
				echo $args['before_widget'];
				if ( ! empty( $title ) ) {
					echo $args['before_title'] . $title . $args['after_title'];
				}  
				// This is where you run the code and display the output
				//echo __( 'Hello', 'wpb_widget_domain' );

				################################################################
				################################################################
				$args = array(
						    'taxonomy' => 'portfolio_types',
						    'before_widget' => '<div>',
						    'after_widget' => '</div>',
						    'title_li' => ''

						);

				echo '<ul>'; 
				echo wp_list_categories($args);
				echo '</ul>';
				################################################################
				################################################################
				
		
				echo $args['after_widget'];

				
			}
          
// Widget Backend 
			public function form( $instance ) {
				
				if ( isset( $instance[ 'title' ] ) ) {
					$title = $instance[ 'title' ];
				} else {
					$title = __( 'Portfolio types', 'custom_widget' );
				}
// Widget admin form
?>
				<p>
					<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
					<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
				</p>

<?php 
			
			}
      
// Updating widget replacing old instances with new
			public function update( $new_instance, $old_instance ) {
				$instance = array();
				$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
				return $instance;
			}
 
// Class wpb_widget ends here
} 
 
 
// Register and load the widget
function load_type_widget() {
    register_widget( 'custom_type_widget' );
}
add_action( 'widgets_init', 'load_type_widget' );

