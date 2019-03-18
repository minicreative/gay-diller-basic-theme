<?php if (get_field('show_buttons')): ?>
	<div class="front-page-buttons">
	<?php while (have_rows('buttons')) {
		the_row();
		echo "<a href='".get_sub_field('link')."'>".get_sub_field('title')."</a>";
	} ?>
	</div>
<?php endif; ?>