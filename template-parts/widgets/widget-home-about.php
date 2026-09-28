<?php
/**
 * Widget Template: Home About Summary
 */
$theme_uri = get_template_directory_uri();
$title = isset($args['title']) ? $args['title'] : get_theme_mod('nitya_home_about_title', __('ABOUT NITYA NATURALS', 'nitya-naturals'));
$text  = isset($args['text']) ? $args['text'] : get_theme_mod('nitya_home_about_text', __('Nitya Naturals Private Limited is the export division and contract manufacturing wing of Baidyanath Ayurveda Naini. Backed by over a century of Ayurvedic excellence since 1917, we deliver comprehensive herbal product solutions for brand owners globally.', 'nitya-naturals'));
?>
<section id="about-section" class="section nitya-widget-about-summary">
	<div class="container">
		<div class="about-react-grid">
			<div class="about-content-col">
				<span class="sub-heading-pill"><i class="fa-solid fa-shield-halved"></i> TRUSTED SINCE 1917</span>
				<h2 class="section-title-left"><?php echo esc_html($title); ?></h2>

				<p class="about-lead-text">
					<?php echo esc_html($text); ?>
				</p>
				<p class="about-sub-text">
					Our cGMP certified manufacturing facility is equipped with modern machinery and adheres strictly to international compliance guidelines including US FDA CGMP (21 CFR 210/211). We empower supplement and health brand owners with reliable end-to-end solutions.
				</p>

				<div class="about-stats-row">
					<div class="stat-pill">
						<span class="stat-num">100+</span>
						<span class="stat-txt">Years Heritage</span>
					</div>
					<div class="stat-pill">
						<span class="stat-num">15+</span>
						<span class="stat-txt">Years Exporting</span>
					</div>
					<div class="stat-pill">
						<span class="stat-num">cGMP</span>
						<span class="stat-txt">FDA Compliant</span>
					</div>
				</div>

				<a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="btn-about-link">
					Discover Our Legacy <i class="fa-solid fa-arrow-right"></i>
				</a>
			</div>

			<div class="about-card-col">
				<div class="about-floating-card">
					<img src="<?php echo esc_url($theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.pdf-1-1536x768.jpg'); ?>" alt="<?php esc_attr_e('Nitya Naturals Heritage', 'nitya-naturals'); ?>" class="about-card-img">
					<div class="about-card-badge">
						<i class="fa-solid fa-award"></i>
						<span>Baidyanath Pioneers</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
