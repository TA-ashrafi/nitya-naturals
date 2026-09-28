<?php
/**
 * Widget Template: Premium Hero Banner Section
 */
$theme_uri = get_template_directory_uri();
$hero_img  = isset($args['hero_img']) ? $args['hero_img'] : get_theme_mod('nitya_home_hero_img', $theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.jpg');
?>
<section class="premium-hero-section">
	<div class="hero-bg-media" style="background-image: url('<?php echo esc_url($hero_img); ?>');"></div>
	<div class="hero-gradient-overlay"></div>

	<div class="container hero-content-box">
		<span class="hero-tag-pill">
			<i class="fa-solid fa-leaf"></i> EXPORT & CONTRACT MANUFACTURING DIVISION OF BAIDYANATH
		</span>

		<h1 class="hero-main-title">
			Pioneering Authentic Ayurvedic Formulations & Private Label Manufacturing
		</h1>

		<p class="hero-main-desc">
			Backed by pioneers of Ayurveda since 1917, Nitya Naturals provides turnkey herbal contract manufacturing, cGMP production, and global export fulfillment for healthcare brands worldwide.
		</p>

		<div class="hero-button-group">
			<a href="<?php echo esc_url(home_url('/ayurvedic-medicine-manufacturer/')); ?>" class="btn-hero-solid">
				<i class="fa-solid fa-boxes-stacked"></i> Explore Product Range
			</a>
			<a href="<?php echo esc_url(home_url('/start-your-own-supplement-business/')); ?>" class="btn-hero-outline">
				<i class="fa-solid fa-paper-plane"></i> Request Custom Quote
			</a>
		</div>
	</div>
</section>
