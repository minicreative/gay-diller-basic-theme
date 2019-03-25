<?php

function get_page_header_style () {
	return get_bg_image(get_theme_mod('diller_page_header_bg'));
}

function diller_page_header_bg_setup ($wp_customize) {
	$wp_customize->add_setting('diller_page_header_bg');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'diller_page_header_bg', array(
		'label' => 'Page Header Background',
		'section' => 'minicreative_graphics',
		'settings' => 'diller_page_header_bg',
		'priority' => 50
	)));
}
add_action('customize_register', 'diller_page_header_bg_setup');