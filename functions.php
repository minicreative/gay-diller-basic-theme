<?php

// Plugin Includes =======================================================
include("theme-includes/contact-section-setup.php");
include("theme-includes/footer-setup.php");

// Parent Theme Overrides ================================================

// Include fonts and libraries
function print_head_includes () {
	include("site-includes/head.php");
}

// Add Gutenberg support
function get_content_class() {
	if (get_post_type() == "page" || get_post_type() == "post") 
		return "gutenberg";
}

// Setup site footer
function print_site_footer () {
	include("theme-includes/contact-section.php");
	include("theme-includes/footer.php");
	include("theme-includes/copyright.php");
}

// Customizers ======================================================
function diller_customize_register ($wp_customize) {

	// Page Header Background
	// $wp_customize->add_setting('diller_page_header_bg');
	// $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'diller_page_header_bg', array(
	// 	'label' => 'Page Header Background',
	// 	'section' => 'minicreative_graphics',
	// 	'settings' => 'diller_page_header_bg'
	// )));

}

add_action('customize_register', 'diller_customize_register');
