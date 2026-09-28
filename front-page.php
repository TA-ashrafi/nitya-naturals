<?php
/**
 * Front Page Template - Modularized with Widgets
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (is_active_sidebar('home-widgets')) : ?>
		<?php dynamic_sidebar('home-widgets'); ?>
	<?php else : ?>
		<!-- Default Fallback Widgets for Home Page -->
		<?php get_template_part('template-parts/widgets/widget-home-banner'); ?>
		<?php get_template_part('template-parts/widgets/widget-home-about'); ?>
		<?php get_template_part('template-parts/widgets/widget-one-stop'); ?>
		<?php get_template_part('template-parts/widgets/widget-capabilities'); ?>
		<?php get_template_part('template-parts/widgets/widget-mockup-banner'); ?>
		<?php get_template_part('template-parts/widgets/widget-services'); ?>
		<?php get_template_part('template-parts/widgets/widget-chyawanprash'); ?>
	<?php endif; ?>

	<!-- Book Factory Visit Callout -->
	<section class="section" style="background: var(--primary-color); color: #fff; text-align: center;">
		<div class="container">
			<h2 style="color: #fff; font-size: 28px; margin-bottom: 15px;"><?php echo esc_html(get_theme_mod('nitya_home_visit_title', 'BOOK A FACTORY VISIT NOW')); ?></h2>
			<p style="color: rgba(255,255,255,0.9); font-size: 16px; margin-bottom: 25px;">
				<?php echo esc_html(get_theme_mod('nitya_home_visit_text', 'Contact us on WhatsApp @ +91 75240 98888 or email us at ald.nitya@gmail.com')); ?>
			</p>
			<?php $whatsapp_num = get_theme_mod('nitya_whatsapp', '919935556123'); ?>
			<a href="https://wa.me/<?php echo esc_attr($whatsapp_num); ?>" target="_blank" rel="noopener noreferrer" class="btn-submit" style="background: #25d366; color: #fff; font-size: 16px; padding: 14px 40px;">
				<i class="fa-brands fa-whatsapp"></i> <?php esc_html_e('Connect on WhatsApp', 'nitya-naturals'); ?>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
