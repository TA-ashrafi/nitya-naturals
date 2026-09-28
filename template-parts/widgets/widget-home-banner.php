<?php
/**
 * Widget Template: Premium Fullscreen Hero Banner Section
 */
$theme_uri = get_template_directory_uri();
$hero_img  = isset($args['hero_img']) ? $args['hero_img'] : get_theme_mod('nitya_home_hero_img', $theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.jpg');
?>
<section class="premium-hero-section fullscreen-hero">
	<div class="hero-bg-media" style="background-image: url('<?php echo esc_url($hero_img); ?>');"></div>
	<div class="hero-gradient-overlay"></div>

	<div class="container hero-content-box">
		<span class="hero-tag-pill">
			<i class="fa-solid fa-leaf"></i> EXPORT & CONTRACT MANUFACTURING DIVISION OF BAIDYANATH
		</span>

		<h1 class="hero-main-title">
			We manufacture the <em>Ayurvedic brand</em> you are building.
		</h1>

		<p class="hero-main-desc">
			Nitya Naturals gives brand owners a one-stop solution for manufacturing — so you can concentrate on marketing. Your formulas, your label, our cGMP line. On time, within budget, faster than the competition.
		</p>

		<div class="hero-button-group">
			<a href="#develop" class="btn-hero-solid">
				<i class="fa-solid fa-paper-plane"></i> Request a Quote
			</a>
			<a href="https://wa.me/917524098888" target="_blank" rel="noopener noreferrer" class="btn-hero-outline">
				<i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
			</a>
		</div>

		<!-- SCROLL INDICATOR -->
		<a href="#about" class="hero-scroll-down" aria-label="<?php esc_attr_e('Scroll to content', 'nitya-naturals'); ?>">
			<i class="fa-solid fa-chevron-down"></i>
		</a>
	</div>
</section>
