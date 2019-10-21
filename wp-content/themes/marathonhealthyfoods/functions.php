<?php
/*	@desc attach custom admin login CSS file	*/
function custom_login_css() {
  echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/login.css" />';
}
add_action('login_head', 'custom_login_css');

/*	@desc update logo URL to point towards Homepage	*/
function custom_login_header_url($url) {
  return get_option('home');
}
add_filter( 'login_headerurl', 'custom_login_header_url' );

function custom_login_header_title($title) {
  $blog_title = get_bloginfo('name');
  return $blog_title;
}
add_filter( 'login_headertitle', 'custom_login_header_title' );

/*	@desc update admin icon to client icon	*/
function custom_admin_icon_css() {
  echo '<link rel="shortcut icon" href="'.get_stylesheet_directory_uri().'/images/logo.ico" />';
}

add_action('admin_head', 'custom_admin_icon_css');
function remove_footer_admin () {
    echo '<span id="footer-thankyou">Template implemented and developed by <a href="http://www.holewinskigroup.com/" target="_blank" title="The Holewinski Group">The Holewinski Group</a>.</span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

function mhf_remove_version() {return '';}
add_filter('the_generator', 'mhf_remove_version');

// Remove Query String
function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

// Add a unique id attribute to the body tag of an HTML page
function id_the_body() {
        global $post, $wp_query, $wpdb;
        $post = $wp_query->post;
	$body_id = "";
        if ($post->post_type == 'page') $body_id = 'page-' . $post->ID;
        if ($post->post_type == 'post') $body_id = 'post-' . $post->ID;
        if ( is_front_page() ) $body_id = 'front';
        if ( is_home() ) $body_id = 'home';
        if ( is_category() ) $body_id = 'category-' . get_query_var('cat');
        if ( is_tag() ) $body_id = 'tag-' . get_query_var('tag');
        if ( is_author() ) $body_id = 'author-' . get_query_var('author');
        if ( is_date() ) $body_id = 'date-archive';
        if (is_search()) $body_id = 'search-archive';
        if (is_404()) $body_id = '404-error';
        if ($body_id) echo "id=\"$body_id\"";
}
// Add special class names for the parents of the page
function class_the_body($more_classes='') {
        global $post, $wp_query, $wpdb;
        $post = $wp_query->post;
		$parent_id_string = "";
        if ($post->ancestors) {
                /* reverse the order of the array elements b/c we want the immediate parent to be last in the class list */
                $parent_array = array_reverse($post->ancestors);
                foreach ($parent_array as $key => $parent_id) {
                        $parent_id_string = $parent_id_string . ' childof-' . 
$parent_id;
                }
        }
	$type = "";
        if ($post->post_type == 'page') $type = 'page';
        if ($post->post_type == 'post') $type = 'single';
        // these 2 are not needed since we id the body with home
        //if (is_home()) $type = 'home';
        //if (is_front_page()) $type = 'front';
        if (is_category()) $type = 'archive category-archive';
        if (is_tag()) $type = 'archive tag-archive';
        if (is_author()) $type = 'archive author-archive';
        // again, these 3 are not needed since we id the body with these
        if (is_date()) $type = 'archive date-archive';
        if (is_search()) $type = 'archive search-archive';
        if (is_404()) $type = '404-error';
        // need a lot of trimming b/c any combination of these could be blank
		if($parent_id_string) {
			$classes = trim($parent_id_string . ' ' . $more_classes);
		}else{
			$classes = trim($more_classes);
		}
        if ($type) $classes = $type . ' ' . $classes;
        $classes = trim($classes);
        if ($classes) echo " class=\"$classes\"";
}
?>