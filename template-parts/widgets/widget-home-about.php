<?php
/**
 * Widget Template: Home About Summary
 */
$theme_uri = get_template_directory_uri();
$title = isset($args['title']) ? $args['title'] : get_theme_mod('nitya_home_about_title', __('ABOUT NITYA NATURALS', 'nitya-naturals'));
$text  = isset($args['text']) ? $args['text'] : get_theme_mod('nitya_home_about_text', __('Nitya Naturals Private Limited is the export division and contract manufacturing wing of Baidyanath Ayurveda Naini. Backed by over a century of Ayurvedic excellence since 1917, we deliver comprehensive herbal product solutions for brand owners globally.', 'nitya-naturals'));
?>
<section class="section nitya-widget-about-summary">
	<div class="container">
		<div class="about-summary-grid">
			<div class="about-summary-text-col">
				<span class="sub-heading-tag"><i class="fa-solid fa-shield-halved"></i> TRUSTED SINCE 1917</span>
				<h2 class="section-heading-left"><?php echo esc_html($title); ?></h2>
				<p class="about-intro-p">
					<?php echo esc_html($text); ?>
				</p>
				<p class="about-body-p">
					Our cGMP certified manufacturing facility is equipped with modern machinery and adheres strictly to international compliance guidelines including US FDA CGMP (21 CFR 210/211). We empower supplement and health brand owners with reliable end-to-end solutions, enabling rapid market access without compromising on quality or tradition.
				</p>

				<div class="about-highlights-list">
					<div class="highlight-item">
						<i class="fa-solid fa-circle-check"></i>
						<span>100+ Years Legacy of Baidyanath Ayurveda</span>
					</div>
					<div class="highlight-item">
						<i class="fa-solid fa-circle-check"></i>
						<span>Compliance with US FDA 21 CFR Standards</span>
					</div>
					<div class="highlight-item">
						<i class="fa-solid fa-circle-check"></i>
						<span>Turnkey Contract Manufacturing & Private Labeling</span>
					</div>
				</div>

				<a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="btn-read-more">
					Learn More About Us <i class="fa-solid fa-arrow-right"></i>
				</a>
			</div>

			<div class="about-summary-media-col">
				<div class="about-image-card">
					<img src="<?php echo esc_url($theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.pdf-1-1536x768.jpg'); ?>" alt="<?php esc_attr_e('Nitya Naturals Facility & Heritage', 'nitya-naturals'); ?>">
					<div class="about-experience-badge">
						<span class="exp-num">15+</span>
						<span class="exp-text">Years Export Excellence</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
