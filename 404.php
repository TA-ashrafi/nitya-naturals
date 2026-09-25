<?php
/**
 * 404 Template
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="page-header-banner">
		<div class="container">
			<h1><?php esc_html_e('404 - Page Not Found', 'nitya-naturals'); ?></h1>
		</div>
	</div>

	<section class="section" style="text-align: center;">
		<div class="container">
			<h2><?php esc_html_e('Oops! That page can’t be found.', 'nitya-naturals'); ?></h2>
			<p><?php esc_html_e('It looks like nothing was found at this location. Try returning to the homepage.', 'nitya-naturals'); ?></p>
			<p style="margin-top: 20px;"><a href="<?php echo esc_url(home_url('/')); ?>" class="btn-submit"><?php esc_html_e('Back to Home', 'nitya-naturals'); ?></a></p>
		</div>
	</section>
</main>

<?php
get_footer();
