<?php if (get_field('show_buttons')): ?>
	<div class="front-page-buttons">
	<?php while (have_rows('buttons')) {
		the_row();
		echo "<a href='".get_sub_field('link')."' style='background-color:".get_sub_field('background_color')."'>";
			echo "<h2>".get_sub_field('title')."</h2>";
			if (get_sub_field('description')) echo "<span>".get_sub_field('description')."</span>";
		echo "</a>";
	} ?>
	</div>
<?php endif; ?>