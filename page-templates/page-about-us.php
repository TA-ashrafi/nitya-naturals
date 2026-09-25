<?php
/**
 * Template Name: About Us
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- About Us Main Content Widget -->
	<?php get_template_part('template-parts/widgets/widget-about-main'); ?>

	<!-- Our Legacy Widget -->
	<?php get_template_part('template-parts/widgets/widget-our-legacy'); ?>

	<!-- Our Founder Widget -->
	<?php get_template_part('template-parts/widgets/widget-our-founder'); ?>

	<!-- Additions to Management Widget -->
	<?php get_template_part('template-parts/widgets/widget-management'); ?>

</main>

<?php
get_footer();
