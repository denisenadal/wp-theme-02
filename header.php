<?php
/**
 * The template for displaying the header
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="http://denisenadal.com/wp-content/uploads/2016/10/favicon.ico" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" rel="stylesheet">
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/scripts.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/mobile.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/subpages.css">
	<title>Denise Nadal <?php wp_title(); ?></title>
	<style>
	/*real css*/
	#posts-page .wp-post-image{
		float:left;
		margin-right: 1rem;
	}
	#posts-page .post_listing .btn{
		float:right;
	}
	#posts-page .post_listing{
		border-bottom: solid #ccc 1px;
		padding:2rem;
		margin-bottom:2rem;}
	#posts-page .post_listing::after{
		content:"";
		display:table;
		clear:both;
	}
	</style>
</head>
<?php
	$post = get_post();
	if ($post->post_type=="attachment"){
		echo'<body id="attachment-page">' ;
	}
	elseif (is_home()){
		echo'<body id="posts-page">' ;
	}
	elseif ($post->post_type=="post"){
		echo'<body class="entry-page" id="'. get_the_ID() .'">' ;
	}
	else{
		$slug = get_the_slug();
		if($slug=="denisenadal.com"){
			$slug = "index";
			}
		echo'<body id="'.$slug.'">' ;
		}
		?>

	<header>
		<div class="inner-wrap">
			<a href="/" id="site_title">
				<h1>Denise Nadal</h1>
				<h2>Web & Graphic Designer</h2>
			</a>
			<nav>
				<?php wp_nav_menu( array('container' => '','menu-class' => '', 'theme_location' => 'header-menu' ) ); ?>
			</nav><!-- .main-navigation -->
		</div><!-- .inner-wrap -->
	</header><!-- .site-header -->
