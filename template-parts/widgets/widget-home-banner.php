<?php
/**
 * Widget Template: Full-Screen Animated Hero Banner
 */
$theme_uri = get_template_directory_uri();
$hero_img  = isset($args['hero_img']) ? $args['hero_img'] : get_theme_mod('nitya_home_hero_img', $theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.jpg');
?>
<section class="fullscreen-hero-banner">
	<div class="hero-bg-layer" style="background-image: url('<?php echo esc_url($hero_img); ?>');"></div>
	<div class="hero-overlay-dark"></div>

	<div class="hero-center-content container">
		<span class="hero-sub-badge animate-fade-in">
			<i class="fa-solid fa-leaf"></i> EXPORT & CONTRACT MANUFACTURING DIVISION OF BAIDYANATH
		</span>

		<h1 class="hero-brand-heading animate-title">
			<span class="brand-text-accent">NITYA NATURALS</span>
		</h1>

		<p class="hero-tagline animate-fade-up">
			Pioneering Authentic Ayurvedic Formulations & Private Label Supplement Manufacturing for Global Healthcare Brands
		</p>

		<div class="hero-action-buttons animate-fade-up-delayed">
			<a href="<?php echo esc_url(home_url('/ayurvedic-medicine-manufacturer/')); ?>" class="btn-hero-main">
				<i class="fa-solid fa-boxes-stacked"></i> Explore Product Range
			</a>
			<a href="<?php echo esc_url(home_url('/start-your-own-supplement-business/')); ?>" class="btn-hero-glass">
				<i class="fa-solid fa-paper-plane"></i> Request Custom Quote
			</a>
		</div>

		<!-- ANIMATED SCROLL DOWN INDICATOR -->
		<a href="#about-section" class="hero-scroll-indicator" aria-label="<?php esc_attr_e('Scroll to content', 'nitya-naturals'); ?>">
			<span class="scroll-mouse">
				<span class="scroll-wheel"></span>
			</span>
			<span class="scroll-text">SCROLL DOWN</span>
		</a>
	</div>
</section>
