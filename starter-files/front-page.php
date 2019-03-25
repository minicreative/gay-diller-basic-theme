<?php get_header(); ?>

<!-- Slider -->
<?php include("theme-includes/front-page-gallery-slider.php"); ?>

<!-- Buttons -->
<?php include("theme-includes/front-page-buttons.php"); ?>

<!-- Content -->
<div class="content front-page" style="<?= get_content_style() ?>">
	<div class="container">
		<?php the_content(); ?>
	</div>
</div>

<?php get_footer(); ?>