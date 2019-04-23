<div class="post-preview">

	<!-- Post Thumbnail -->
	<?php if (has_post_thumbnail()) {

		// Print thumbnail
		echo "<a href='".get_the_permalink()."'>";
		if (get_post_type() == "project")
			echo get_the_post_thumbnail(null, "project-thumbnail", ['class' => 'featured-image']);
		else echo get_the_post_thumbnail(null, "full", ['class' => 'featured-image']);
		echo "</a>";
	} ?>

	<div class="info">

		<!-- Title -->
		<?php echo "<a href='".get_the_permalink()."'><h2>".get_the_title()."</h2></a>"; ?>
			
		<!-- Date Display -->
		<div class="meta">
		<?php 
			if (get_post_type() == "post")
				echo "Posted on ".get_the_date("F j, Y");
			else if (get_post_type() == "event")
				print_event_date(get_the_ID());
			else if (get_post_type() == "project")
				echo get_field('project_description');
		?>
		</div>

		<!-- Excerpt Display -->
		<div class="excerpt"><?php the_excerpt(); ?></div>

		<!-- Read More -->
		<a href="<?php the_permalink(); ?>" class="read-more">Read More >></a>

		<!-- Post Categories -->
		<?php print_post_categories(); ?>
		
	</div>

	<div class="clear"></div>
</div>