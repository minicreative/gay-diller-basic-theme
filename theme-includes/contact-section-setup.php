<?php

// Setup widget areas
function diller_contact_section_setup() {
	register_sidebar( array(
		'name'          => 'Main Contact Section',
		'id'            => 'contact-section-main',
		'before_widget' => '<div class=\'column main\'>',
		'after_widget'  => '</div>',
	));
	register_sidebar( array(
		'name'          => 'Side Contact Section',
		'id'            => 'contact-section-side',
		'before_widget' => '<div class=\'column side\'>',
		'after_widget'  => '</div>',
	));
}
add_action('widgets_init', 'diller_contact_section_setup');

// Setup customizer
function diller_contact_section_customizer ($wp_customize) {

	// Background image
	$wp_customize->add_setting('diller_contact_section_bg');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'diller_contact_section_bg', array(
		'label' => 'Contact Section Background Image',
		'section' => 'minicreative_graphics',
		'settings' => 'diller_contact_section_bg',
		'priority' => 300,
	)));
}

add_action('customize_register', 'diller_contact_section_customizer');

// Functions
function diller_contact_section_style () {
	if (get_theme_mod('diller_contact_section_bg'))
		echo get_bg_image(get_theme_mod('diller_contact_section_bg'));
}

?>