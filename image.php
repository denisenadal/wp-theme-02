<?php
/**
 * The main template file
* The template used for displaying image attachments
 *Denise Nadal Portfolio Site Custom Theme 2016
 */

get_header(); 
$slug = get_the_slug();

?>
<main class="portfolio-page blue-bg">
	<div class="inner-wrap">
		<div class="row">
			<div class="portfolio_item gd_portfolio col6l col8m left-edge">

			<?php echo wp_get_attachment_image( $post->ID, $size="full", $icon = false, array( "class" => "flex-img" ) ); ?>
			</div>
			<div class="portfolio_item gd_portfolio col6l col4m left-edge">
					<h2 class="entry-title"><?php the_title(); ?></h2>
					<p><?php the_excerpt();?></p>
			</div><!-- END PORTFOLIO ITEM-->
		</div><!--end row -->
	</div><!-- .inner-wrap -->
</main><!-- main -->

<?php get_footer(); ?>
