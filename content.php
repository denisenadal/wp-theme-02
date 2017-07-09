<?php
/**
 * The template used for displaying page content
 *Denise Nadal Portfolio Site Custom Theme 2016
 */
 /*if a blog listing or archive page*/
	if ( is_home() || is_archive() ) {
		echo'<div class="post_listing row">';
        echo'<div class="post_thumb-wrap col3l col3m"><a href="'. get_permalink() .'">';
		if ( has_post_thumbnail() )
			the_post_thumbnail( 'thumbnail' );
		else
			echo '<img class="attachment-thumbnail size-thumbnail wp-post-image" src="http://cdn.shopify.com/s/files/1/1025/0131/files/Emoji_Kittens_Tania_Hennessy_doughnut__2016_Tania_Hennessy.jpg?12822751672608629734"  width="150" height="auto"  alt="Example Image" title="Example" />';
        echo'</a> </div>   <div class="listing_details col9l col9m">';
        ?>
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <?php
		echo '<p>' . get_the_excerpt() . '</p>';
		echo '<a class="btn" href="' . get_permalink() . '">Read More</a>';
		echo'</div></div>';

	}
/*if a posts page */
    elseif ( is_single() ){
        the_title( '<h2 class="subheader">', '</h2>' );
        if ( has_post_thumbnail() )
            the_post_thumbnail('thumbnail', array('class' => 'float-left'));
        else
            echo '<img class=" float-left attachment-thumbnail size-thumbnail wp-post-image" src="http://cdn.shopify.com/s/files/1/1025/0131/files/Emoji_Kittens_Tania_Hennessy_doughnut__2016_Tania_Hennessy.jpg?12822751672608629734"  width="150" height="auto"  alt="Example Image" title="Example" />';
        the_content();
    }

/*If not a blog page*/
	else {
		$slug = get_the_slug();

		if ( $slug=="graphic-design"){
			$slug="graphic design";
			}

		if ( $slug=="illustration" || $slug=="graphic design" || $slug=="web"){
				echo '<h1>Portfolio <span class="subheader">'.$slug.'</span></h1>';
			}
		elseif($slug=="denisenadal.com" || $slug=="contact"){ echo'';}
		else { the_title( '<h1>', '</h1>' );}
		the_content();
	}
	?>

<?php edit_post_link();?>
