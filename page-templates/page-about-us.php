<?php
/**
 * Template Name: About Us
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (is_active_sidebar('about-widgets')) : ?>
		<?php dynamic_sidebar('about-widgets'); ?>
	<?php else : ?>
		<!-- Main About Header and Description Paragraphs Widget -->
		<?php get_template_part('template-parts/widgets/widget-about-main'); ?>

		<!-- Our Legacy Widget -->
		<?php get_template_part('template-parts/widgets/widget-our-legacy'); ?>

		<!-- Our Founder Widget -->
		<?php get_template_part('template-parts/widgets/widget-our-founder'); ?>

		<!-- Additions to Management Widget -->
		<?php get_template_part('template-parts/widgets/widget-management'); ?>
	<?php endif; ?>

</main>

<?php
get_footer();
