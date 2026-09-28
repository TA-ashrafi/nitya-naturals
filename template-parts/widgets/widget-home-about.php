<?php
/**
 * Widget Template: Home About Summary + Dedicated Trust & Statistics Bar
 */
$theme_uri = get_template_directory_uri();
$title = isset($args['title']) ? $args['title'] : get_theme_mod('nitya_home_about_title', __('ABOUT NITYA NATURALS', 'nitya-naturals'));
$text  = isset($args['text']) ? $args['text'] : get_theme_mod('nitya_home_about_text', __('Nitya Naturals Private Limited is the export division and contract manufacturing wing of Baidyanath Ayurveda Naini. Backed by over a century of Ayurvedic excellence since 1917, we deliver comprehensive herbal product solutions for brand owners globally.', 'nitya-naturals'));
?>

<!-- DEDICATED TRUST & STATISTICS BAR -->
<div class="trust-stats-bar">
	<div class="container trust-stats-grid">
		<div class="trust-stat-card">
			<div class="stat-number">100+</div>
			<div class="stat-title">Years of Heritage</div>
			<div class="stat-desc">Legacy of Baidyanath Pioneers</div>
		</div>
		<div class="trust-stat-card">
			<div class="stat-number">15+</div>
			<div class="stat-title">Years Exporting Globally</div>
			<div class="stat-desc">Supplying Worldwide Brands</div>
		</div>
		<div class="trust-stat-card">
			<div class="stat-number">cGMP</div>
			<div class="stat-title">US FDA Compliant Facility</div>
			<div class="stat-desc">21 CFR 210/211 Certified</div>
		</div>
		<div class="trust-stat-card">
			<div class="stat-number">100%</div>
			<div class="stat-title">Natural Formulations</div>
			<div class="stat-desc">Pure Organic Botanical Ingredients</div>
		</div>
	</div>
</div>

<section id="about-section" class="section nitya-widget-about-summary">
	<div class="container">
		<div class="about-grid-wrapper">
			<div class="about-text-col">
				<span class="sub-heading-badge"><i class="fa-solid fa-shield-halved"></i> TRUSTED SINCE 1917</span>
				<h2 class="about-section-heading"><?php echo esc_html($title); ?></h2>

				<p class="about-lead-paragraph">
					<?php echo esc_html($text); ?>
				</p>
				<p class="about-body-paragraph">
					Our cGMP certified manufacturing facility is equipped with state-of-the-art machinery and trained staff ensuring full compliance with US FDA CGMP (21 CFR 210/211) standards. We empower supplement brand owners with turnkey private labeling so you can expand your product catalog rapidly and confidently.
				</p>

				<a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="btn-read-more-link">
					Learn More About Our Legacy <i class="fa-solid fa-arrow-right"></i>
				</a>
			</div>

			<div class="about-media-col">
				<div class="about-graphic-card">
					<img src="<?php echo esc_url($theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.pdf-1-1536x768.jpg'); ?>" alt="<?php esc_attr_e('Nitya Naturals Facility & Heritage', 'nitya-naturals'); ?>" class="about-graphic-img">
				</div>
			</div>
		</div>
	</div>
</section>
