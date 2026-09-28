<?php
/**
 * Widget Template: Home About Summary
 */
$title = isset($args['title']) ? $args['title'] : get_theme_mod('nitya_home_about_title', __('ABOUT US', 'nitya-naturals'));
$text  = isset($args['text']) ? $args['text'] : get_theme_mod('nitya_home_about_text', __('Nitya Naturals Private Limited is a private labeling and contract manufacturing company as well as the export division of Baidyanath Ayurveda Naini. Nitya Naturals is backed by the pioneers of Ayurveda since 1917 and headed by the President of Baidyanath (Mr. Dhananjay Sharma). Our GMP certified facility is equipped with modern machinery and the staff is trained for compliance of CGMP enforced by US FDA covering 21CFR211, 21CFR 210, 21CFR 820, ICH Q7 & ISO 9001:2008. Nitya Naturals has been manufacturing Herbal Dietary Supplements for brand owners for the last 15 years. We have made it easier for brand owners by providing them one-stop-solution for the manufacturing needs so that they can concentrate on marketing, provide products on time, within budget and faster than the competition.', 'nitya-naturals'));
?>
<section class="section nitya-widget-about-summary">
	<div class="container">
		<?php if ($title) : ?><h1 class="section-title"><?php echo esc_html($title); ?></h1><?php endif; ?>
		<?php if ($text) : ?>
		<p style="text-align: center; max-width: 950px; margin: 0 auto 20px;">
			<?php echo esc_html($text); ?>
		</p>
		<?php endif; ?>
	</div>
</section>
