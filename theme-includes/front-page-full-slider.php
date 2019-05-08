<div class="front-page-full-slider diller-slider">
	<div class="slides">
		<?php while (have_rows('slides')) {
			the_row();
			if (get_sub_field('slide_link')) echo "<a href='".get_sub_field('slide_link')."'>";
			echo "<div class='slide' style=\"".get_bg_image(get_sub_field('slide_background')['url'])."\">";
				echo "<div class='flex'>";
				if (get_sub_field('slide_title') || get_sub_field('slide_description')) {
					echo "<div class='info'>";
						if (get_sub_field('slide_title'))
							echo "<div class='title'>".get_sub_field('slide_title')."</div>";
						if (get_sub_field('slide_title') && get_sub_field('slide_description'))
							echo "<div class='divider'></div>";
						if (get_sub_field('slide_description'))
							echo "<div class='description'>".get_sub_field('slide_description')."</div>";
					echo "</div>";
				}
				echo "</div>";
			echo "</div>";
			if (get_sub_field('slide_link')) echo "</a>";
		} ?>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.slides').slick({
			dots: false,
			pauseOnHover: false,
			infinite: true,
			arrows: true,
			prevArrow: '<div class="slick-prev"></div>',
			nextArrow: '<div class="slick-next"></div>',
			autoplay: true,
			autoplaySpeed: 5000,
			speed: 1000,
			swipe: true
		});
	});
</script>