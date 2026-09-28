<?php
/**
 * Front Page Template - Redesigned Modular Layout
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (is_active_sidebar('home-widgets')) : ?>
		<?php dynamic_sidebar('home-widgets'); ?>
	<?php else : ?>
		<!-- Fullscreen Hero Banner -->
		<?php get_template_part('template-parts/widgets/widget-home-banner'); ?>

		<!-- Dedicated Trust & Statistics Bar -->
		<?php get_template_part('template-parts/widgets/widget-home-about'); ?>

		<!-- One-Stop Turnkey Showcase -->
		<?php get_template_part('template-parts/widgets/widget-one-stop'); ?>

		<!-- Manufacturing Capabilities Cards -->
		<?php get_template_part('template-parts/widgets/widget-capabilities'); ?>

		<!-- Existing Products Stock Categories -->
		<?php get_template_part('template-parts/widgets/widget-existing-products'); ?>

		<!-- New Product Development Form -->
		<?php get_template_part('template-parts/widgets/widget-product-development'); ?>

		<!-- Packaging & Mockups Banner -->
		<?php get_template_part('template-parts/widgets/widget-mockup-banner'); ?>

		<!-- Services Process Cards -->
		<?php get_template_part('template-parts/widgets/widget-services'); ?>

		<!-- Prayagraj Facility Showcase -->
		<?php get_template_part('template-parts/widgets/widget-chyawanprash'); ?>
	<?php endif; ?>

	<!-- BOOK FACTORY VISIT / CONTACT CALLOUT SECTION -->
	<section class="visit-callout-section">
		<div class="container">
			<div class="visit-callout-card-frame">
				<span class="sub-heading-badge badge-light-bg"><i class="fa-solid fa-building-user"></i> DIRECT MANUFACTURER ACCESS</span>
				<h2 class="visit-title-text"><?php echo esc_html(get_theme_mod('nitya_home_visit_title', 'BOOK A FACTORY VISIT & CONSULTATION')); ?></h2>
				<p class="visit-desc-text">
					Tour our state-of-the-art Prayagraj facility, review raw material sourcing, and discuss custom product development with our technical leadership team.
				</p>

				<div class="visit-cta-button-group">
					<?php $whatsapp_num = get_theme_mod('nitya_whatsapp', '919935556123'); ?>
					<a href="https://wa.me/<?php echo esc_attr($whatsapp_num); ?>" target="_blank" rel="noopener noreferrer" class="btn-whatsapp-cta">
						<i class="fa-brands fa-whatsapp"></i> <?php esc_html_e('Connect on WhatsApp', 'nitya-naturals'); ?>
					</a>
					<a href="mailto:<?php echo esc_attr(get_theme_mod('nitya_email', 'exports@nityanaturals.com')); ?>" class="btn-email-cta">
						<i class="fa-solid fa-envelope"></i> <?php esc_html_e('Email Sales Team', 'nitya-naturals'); ?>
					</a>
				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
