<?php


 
//create a custom taxonomy name it subjects for your posts
 
function custom_taxonomies() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Portfolio types', 'taxonomy general name' ),
    'singular_name' => _x( 'Portfolio type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Portfolio types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Portfolio type' ),
    'parent_item_colon' => __( 'Parent Portfolio type:' ),
    'edit_item' => __( 'Edit Portfolio type' ), 
    'update_item' => __( 'Update Portfolio type' ),
    'add_new_item' => __( 'Add New Portfolio type' ),
    'new_item_name' => __( 'New Portfolio type Name' ),
    'menu_name' => __( 'Portfolio types' ),
  );    
 
// Now register the custom hierarchical taxonomy
  register_taxonomy('portfolio_types',array('portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    //'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'portfolio_type' ),
  ));

// register the custom non-hierarchical taxonomy
   register_taxonomy('portfolio_tags',array('portfolio'),array(
    'hierarchical' => false,
    'labels' => array('name' => _x( 'Portfolio tags', 'taxonomy general name' )),
    'show_ui' => true,
    //'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'portfolio_tag' ),
  ));
 
}

add_action( 'init', 'custom_taxonomies', 0 );


###############################################################################
## display custom taxonomy filter in admin panel
###############################################################################
/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
function filter_post_type_by_portfolio_types() {
	global $typenow;
	$post_type = 'photo'; // change to your post type
	$taxonomy  = 'portfolio_types'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => sprintf( __( 'Show all %s', 'textdomain' ), $info_taxonomy->label ),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}
add_action('restrict_manage_posts', 'filter_post_type_by_portfolio_types');

/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
function convert_id_to_term_in_query($query) {
	global $pagenow;
	$post_type = 'photo'; // change to your post type
	$taxonomy  = 'portfolio_types'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}

add_filter('parse_query', 'convert_id_to_term_in_query');


###############################################################################
## display custom taxonomy filter 2nd in admin panel
###############################################################################

/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
function filter_post_type_by_portfolio_tags() {
	global $typenow;
	$post_type = 'photo'; // change to your post type
	$taxonomy  = 'portfolio_tags'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => sprintf( __( 'Show all %s', 'textdomain' ), $info_taxonomy->label ),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}
add_action('restrict_manage_posts', 'filter_post_type_by_portfolio_tags');

/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
function tsm_convert_id_to_term_in_query($query) {
	global $pagenow;
	$post_type = 'photo'; // change to your post type
	$taxonomy  = 'portfolio_tags'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}

add_filter('parse_query', 'tsm_convert_id_to_term_in_query');