<?php
/**
 * Widget Template: Home Hero Banner Section
 */
$theme_uri = get_template_directory_uri();
$hero_img  = isset($args['hero_img']) ? $args['hero_img'] : get_theme_mod('nitya_home_hero_img', $theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.jpg');
$whatsapp  = get_theme_mod('nitya_whatsapp', '919935556123');
?>
<section class="hero-banner nitya-widget-hero parallax-hero">
	<div class="hero-bg-overlay" style="background-image: url('<?php echo esc_url($hero_img); ?>');"></div>
	<div class="hero-content-wrapper container">
		<div class="hero-text-block">
			<span class="hero-badge"><i class="fa-solid fa-award"></i> Premier Ayurvedic Private Label & Contract Manufacturer</span>
			<h1 class="hero-title">World-Class Herbal Manufacturing & Private Labeling</h1>
			<p class="hero-subtitle">Backing global healthcare brands with over a century of Ayurvedic heritage, state-of-the-art cGMP manufacturing, and complete turnkey export solutions.</p>

			<div class="hero-cta-buttons">
				<a href="<?php echo esc_url(home_url('/ayurvedic-medicine-manufacturer/')); ?>" class="btn-hero-primary">
					<i class="fa-solid fa-leaf"></i> Explore Product Range
				</a>
				<a href="<?php echo esc_url(home_url('/start-your-own-supplement-business/')); ?>" class="btn-hero-secondary">
					<i class="fa-solid fa-paper-plane"></i> Contact Our Experts
				</a>
			</div>
		</div>

		<div class="hero-stats-grid">
			<div class="hero-stat-card">
				<div class="stat-number">100+</div>
				<div class="stat-label">Years of Heritage</div>
			</div>
			<div class="hero-stat-card">
				<div class="stat-number">15+</div>
				<div class="stat-label">Years Exporting Globally</div>
			</div>
			<div class="hero-stat-card">
				<div class="stat-number">cGMP</div>
				<div class="stat-label">US FDA Compliant Facility</div>
			</div>
			<div class="hero-stat-card">
				<div class="stat-number">100%</div>
				<div class="stat-label">Natural Formulations</div>
			</div>
		</div>
	</div>
</section>
