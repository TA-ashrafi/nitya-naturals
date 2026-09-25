<?php
/**
 * Template Name: Product Range
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="page-header-banner">
		<div class="container">
			<h1><?php esc_html_e('Product Range', 'nitya-naturals'); ?></h1>
			<p><?php esc_html_e('Ayurvedic Medicine Manufacturer - Products Available by Nitya Naturals', 'nitya-naturals'); ?></p>
		</div>
	</div>

	<!-- Product Range Catalog Table Widget -->
	<?php get_template_part('template-parts/widgets/widget-product-range'); ?>

</main>

<?php
get_footer();
