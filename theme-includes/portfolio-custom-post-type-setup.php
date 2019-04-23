<?php

// Setup custom post type
function create_portfolio_post_type() {
	register_post_type('project', array(
		'show_ui' => true,
		'labels' => array(
			'name' => 'Portfolio',
			'singular_name' => 'Project',
			'add_new_item' => 'Add new project',
			'edit_item' => 'Edit project',
			'new_item' => 'New project',
			'items_list' => 'Portfolio list',
		),
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
	));
}
add_action('init', 'create_portfolio_post_type');

// Setup project image size
add_image_size('project-thumbnail', 400, 285, true);

// Setup display function
function display_portfolio_items($size = 'third', $limit = null) {

	// Make query
	$query = array(
		'post_type' => 'project',
		'meta_key' => 'project_date',
		'orderby' => 'meta_value',
		'order' => 'ASC'
	);
	if ($limit) $query['posts_per_page'] = $limit;
	$portfolio = new WP_Query($query);

	// Print query
	echo "<div class='columns stacked'>";
	if ($portfolio->post_count) {
		while ($portfolio->have_posts()) {
			$portfolio->the_post();
			echo "<div class='column ".$size."'>";
			print_post_preview();
			echo "</div>";
		}
	} else {
		echo "<div class='column full'>No projects found.</div>";
	}
	echo "</div>";

	// Reset the_post
	wp_reset_postdata();
}