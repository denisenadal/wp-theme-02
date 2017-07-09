<?php
/**
* The template used for displaying a blog posts index page
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
		<div class="row">
			<div id="blog-sidebar" class="col3l col3m left-edge">
				<?php if ( ! dynamic_sidebar() ) : ?>
				<?php endif; ?>
			</div>
			<div id="blog-post" class="col9l col9m right-edge">
				<a href="/blog/"><h1><?php $current_user = wp_get_current_user(); echo" ". $current_user->display_name;?> Blog</h1></a>
				<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post();

						get_template_part( 'content', get_post_format() );

					endwhile; endif;
				?>
			</div><!-- end blog wrap -->
		</div><!--end row -->
	</div><!-- .inner-wrap -->
</main><!-- main -->

<?php get_footer(); ?>
