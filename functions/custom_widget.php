<?php
// Creating the clock widget 
		class clock_widget extends WP_Widget {
		  
			function __construct() {
				parent::__construct(
				  
				// Base ID of your widget
				'clock_widget', 
				  
				// Widget name will appear in UI
				__('Clock', 'custom_widget'), 
				  
				// Widget description
				array( 'description' => __( 'Clock Widget', 'custom_widget' ), ) 
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
?>
				<section class="">
					<div class=" alert alert-light" align="center">
						<span id="time"></span>
						<span id="ampm"></span>
						<span id="time-emoji"></span>
					</div>
				</section>
<?php
				################################################################
				################################################################
				echo $args['after_widget'];
			}
          
// Widget Backend 
			public function form( $instance ) {
				
				if ( isset( $instance[ 'title' ] ) ) {
					$title = $instance[ 'title' ];
				} else {
					$title = __( 'New title', 'wpb_widget_domain' );
				}
// Widget admin form
?>
				<!--p>
					<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
					<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
				</p-->
				<section class="">
					<div class=" alert alert-light" align="center">
						<span id="time"></span>
						<span id="ampm"></span>
						<span id="time-emoji"></span>
					</div>
				</section>
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
function load_widget() {
    register_widget( 'clock_widget' );
}
add_action( 'widgets_init', 'load_widget' );

?>