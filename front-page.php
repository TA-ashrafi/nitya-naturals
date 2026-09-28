<?php
/**
 * Front Page Template - Redesigned Nitya Naturals Layout
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
		<?php get_template_part('template-parts/widgets/widget-capabilities'); ?>
		<?php get_template_part('template-parts/widgets/widget-product-range'); ?>
		<?php get_template_part('template-parts/widgets/widget-one-stop'); ?>
		<?php get_template_part('template-parts/widgets/widget-services'); ?>
		<?php get_template_part('template-parts/widgets/widget-chyawanprash'); ?>
	<?php endif; ?>

	<!-- ============ CONTACT ============ -->
	<section class="section" id="contact">
	  <div class="wrap">
	    <div class="eyebrow-rule" data-reveal><span class="kicker"><?php esc_html_e('Contact Us', 'nitya-naturals'); ?></span></div>
	    <h2 class="h2" data-reveal><?php esc_html_e("Let's start with", 'nitya-naturals'); ?> <em><?php esc_html_e('your requirement.', 'nitya-naturals'); ?></em></h2>

	    <div class="contact-grid" style="margin-top:46px">
	      <article class="contact-card" data-reveal>
	        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round"><path d="M21 11.5a8.4 8.4 0 0 1-12.3 7.4L3 21l2.2-5.4A8.4 8.4 0 1 1 21 11.5Z"/></svg></span>
	        <h3><?php esc_html_e('WhatsApp', 'nitya-naturals'); ?></h3>
	        <p><?php esc_html_e('Fastest way to reach the exports desk.', 'nitya-naturals'); ?></p>
	        <p style="margin-top:10px"><a href="https://wa.me/917524098888" target="_blank" rel="noopener noreferrer">+91 75240 98888</a></p>
	      </article>
	      <article class="contact-card" data-reveal>
	        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round"><path d="M3 6.5h18v11H3z"/><path d="m3 7 9 6 9-6"/></svg></span>
	        <h3><?php esc_html_e('Email', 'nitya-naturals'); ?></h3>
	        <p><?php esc_html_e('For briefs, spec sheets and quotes.', 'nitya-naturals'); ?></p>
	        <p style="margin-top:10px"><a href="mailto:exports@nityanaturals.com">exports@nityanaturals.com</a><br /><a href="mailto:ald.nitya@gmail.com">ald.nitya@gmail.com</a></p>
	      </article>
	      <article class="contact-card" data-reveal>
	        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round"><path d="M12 21s-7-5.6-7-11a7 7 0 1 1 14 0c0 5.4-7 11-7 11Z"/><circle cx="12" cy="10" r="2.5"/></svg></span>
	        <h3><?php esc_html_e('Facility', 'nitya-naturals'); ?></h3>
	        <p><?php echo esc_html(get_theme_mod('nitya_address', '1, Mirzapur Rd, Naini, Allahabad, Uttar Pradesh, India')); ?></p>
	        <p style="margin-top:10px"><a href="tel:+917524098888">+91 75240 98888</a></p>
	      </article>
	    </div>
	  </div>
	</section>

</main>

<?php
get_footer();
