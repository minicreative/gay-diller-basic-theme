<?php

// Setup widget area
function gay_diller_footer_setup() {
	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer',
		'before_widget' => '<div class=\'footercol\'>',
		'after_widget'  => '</div>',
	));
}
add_action('widgets_init', 'gay_diller_footer_setup');