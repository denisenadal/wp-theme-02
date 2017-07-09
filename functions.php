<?php
/**
 *functions file
 *Denise Nadal Portfolio Site Custom Theme 2016
 */
 include_once(dirname(__FILE__).'/includes/menus.php');
 include_once(dirname(__FILE__).'/includes/sidebars.php');
 include_once(dirname(__FILE__).'/includes/portfolio_posts.php');
 include_once(dirname(__FILE__).'/includes/taxonomies.php');



 /*add support for post thumbnails*/
add_theme_support('post-thumbnails');

/*add get the slug function*/
function get_the_slug( $id=null ){
	if( empty($id) ):
		global $post;
			if( empty($post) )
			 return ''; // No global $post var available.
		$id = $post->ID;
		  endif;
		$slug = basename( get_permalink($id) );
		 return $slug;
		}
/**
 * Display the page or post slug
 *
 * Uses get_the_slug() and applies 'the_slug' filter.
 */
function the_slug( $id=null ){
	 echo apply_filters( 'the_slug', get_the_slug($id) );
	}
/**
 * Removes auto formatting
 */
remove_filter('the_content', 'wpautop');

 /**
 *allows svgs
 */
 function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
 ?>
