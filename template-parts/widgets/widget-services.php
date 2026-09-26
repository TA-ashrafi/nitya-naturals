<?php
/**
 * Widget Template: Our Services Section
 */
$title = isset($args['title']) ? $args['title'] : get_theme_mod('nitya_home_services_title', 'OUR SERVICES');
$desc  = isset($args['desc']) ? $args['desc'] : get_theme_mod('nitya_home_services_desc', 'Our team assists you with a step-by-step process to give you and your brand a stress-free and reliable method for fulfilling all your manufacturing and private labeling requirements.');
?>
<section class="section nitya-widget-services">
	<div class="container">
		<?php if ($title) : ?><h2 class="section-title"><?php echo esc_html($title); ?></h2><?php endif; ?>
		<?php if ($desc) : ?>
		<p style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
			<?php echo esc_html($desc); ?>
		</p>
		<?php endif; ?>

		<div class="feature-grid">
			<div class="feature-card">
				<div class="feature-icon"><i class="fa-regular fa-calendar-check"></i></div>
				<h3><a href="<?php echo esc_url(home_url('/herbal-manufacturer/')); ?>"><?php esc_html_e('Planning & Selection', 'nitya-naturals'); ?></a></h3>
				<p><?php esc_html_e('Select existing formulas or collaborate on custom formulations suited to your market.', 'nitya-naturals'); ?></p>
			</div>
			<div class="feature-card">
				<div class="feature-icon"><i class="fa-solid fa-gears"></i></div>
				<h3><a href="<?php echo esc_url(home_url('/third-party-manufacturing/')); ?>"><?php esc_html_e('Manufacturing', 'nitya-naturals'); ?></a></h3>
				<p><?php esc_html_e('State-of-the-art cGMP production across tablets, capsules, liquids, and pastes.', 'nitya-naturals'); ?></p>
			</div>
			<div class="feature-card">
				<div class="feature-icon"><i class="fa-solid fa-box-open"></i></div>
				<h3><a href="<?php echo esc_url(home_url('/private-label/')); ?>"><?php esc_html_e('Packaging & Labeling', 'nitya-naturals'); ?></a></h3>
				<p><?php esc_html_e('Full design and compliance labeling support in food-grade containers.', 'nitya-naturals'); ?></p>
			</div>
			<div class="feature-card">
				<div class="feature-icon"><i class="fa-solid fa-truck-fast"></i></div>
				<h3><a href="<?php echo esc_url(home_url('/export-medicine/')); ?>"><?php esc_html_e('Fulfillment & Transport', 'nitya-naturals'); ?></a></h3>
				<p><?php esc_html_e('Seamless logistics and export delivery across international markets.', 'nitya-naturals'); ?></p>
			</div>
		</div>
	</div>
</section>
