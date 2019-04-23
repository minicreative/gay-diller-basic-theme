<?php

// Plugin Includes =======================================================
include("theme-includes/page-header-bg-setup.php");
include("theme-includes/contact-section-setup.php");
include("theme-includes/footer-setup.php");

// Custom Functions =======================================================

// Include fonts and libraries
function print_head_includes () {
	include("site-includes/head.php");
}

// Setup site footer
function print_site_footer () {
	include("theme-includes/contact-section.php");
	include("theme-includes/footer.php");
	include("theme-includes/copyright.php");
}

// Customizers
function diller_customize_register ($wp_customize) {	
}
add_action('customize_register', 'diller_customize_register');

// Default Parent Theme Overrides =========================================

// Content classes
function get_content_class() {
	if (!is_singular())
		return "list";
	if (get_post_type() == "page" || 
		get_post_type() == "post" ||
		get_post_type() == "project"
	) 
		return "gutenberg";
}

// Support custom post types setup in child theme
function print_post_title() {
	if (get_post_type() == "post") {
		echo get_the_title(get_option('page_for_posts'));
	}
	else if (get_post_type() == "project") {
		echo get_the_title(get_page_by_path('portfolio'));
	}
	else echo get_the_title();
}
function print_post_preview () {
	include("theme-includes/post-preview.php");
}
function print_content () {
	if (get_post_type() == "page") the_content();
	else include("theme-includes/post-content.php");
}

// Gutenberg Support
function gutenberg_wide_setup() {
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'gutenberg_wide_setup' );

