<?php

function my_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar 1',
		'id'            => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'my_widgets_init' );

add_theme_support( 'post-thumbnails', array( 'post' ) );
