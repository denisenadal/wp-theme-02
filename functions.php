<?php
/**
 *functions file
 *Denise Nadal Portfolio Site Custom Theme 2016
 */
 /*register sidebars*/
 register_sidebar( array(
         'name' =>'Blog Sidebar' ,
         'id' => 'sidebar-1',
         'description' => 'sidebar area for widgets on blog pages',
         'before_widget' => '<div id="%1$s" class="widget %2$s col12l">',
 	'after_widget'  => '</div>',
 	'before_title'  => '<h2 class="widget-title">',
 	'after_title'   => '</h2>',
     ) );

 /*add support for post thumbnails*/
add_theme_support('post-thumbnails');

/*registers main menu*/
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
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
