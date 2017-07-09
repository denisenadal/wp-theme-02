<?php
/**
 * The main template file
* The template used for displaying page content
 *Denise Nadal Portfolio Site Custom Theme 2016
 */

get_header(); 
$slug = get_the_slug();

echo'<main ';
if ($slug=="portfolio" || $slug=="illustration"){
		echo 'class="portfolio-page"';
	}
	elseif ($slug=="graphic-design" || $slug=="web"){
		echo 'class="blue-bg portfolio-page"';
	}
echo'>'; /*end main*/ ?>
	<div class="inner-wrap">
			
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>
	</div><!-- .inner-wrap -->
</main><!-- main -->

<?php get_footer(); ?>
