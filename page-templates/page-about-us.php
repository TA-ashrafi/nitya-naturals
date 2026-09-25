<?php
/**
 * Template Name: About Us
 */

get_header();
?>

<main id="primary" class="site-main">

<?php
if (is_active_sidebar('about-widgets')) :
	dynamic_sidebar('about-widgets');
else :
	get_template_part('template-parts/widgets/widget-about-main');
	get_template_part('template-parts/widgets/widget-our-legacy');
	get_template_part('template-parts/widgets/widget-our-founder');
	get_template_part('template-parts/widgets/widget-management');
endif;
?>

</main>

<?php
get_footer();
