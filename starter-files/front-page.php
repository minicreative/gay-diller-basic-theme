<?php get_header(); ?>

<!-- Slider -->
<div class="front-page-slider" style="">
	<div class="slides">
	</div>
</div>

<!-- Buttons -->
<?php include("theme-includes/front-page-buttons.php"); ?>

<!-- Content -->
<div class="content front-page">
	<div class="container">
		<div class="columns">
			<div class="column half">

			</div><div class="column half">

			</div>
		</div>
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
			autoplaySpeed: 7000,
			speed: 1000,
			swipe: true
		});
	});
</script>

<?php get_footer(); ?>