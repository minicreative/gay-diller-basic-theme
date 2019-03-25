<div class="front-page-gallery-slider diller-slider" style="<?= get_bg_image(get_field('slider_background')['url']) ?>">
	<div class="slides">
	<?php while (have_rows('slider')) {
		the_row();
		echo "<div class='slide'>";
			if (get_sub_field('link')) echo "<a href='".get_sub_field('link')."'>";
			foreach (get_sub_field('images') as $image) {
				echo "<img src='{$image['url']}' />";
			}
			if (get_sub_field('link')) echo "</a>";
		echo "</div>";
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