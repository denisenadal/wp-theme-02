<?php
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
