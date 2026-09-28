<?php
/**
 * Widget Template: One Stop Shop Section
 */
$theme_uri = get_template_directory_uri();
$img  = isset($args['img']) ? $args['img'] : get_theme_mod('nitya_home_special_img', $theme_uri . '/assets/images/What-Makes-it-Special.png');
$text = isset($args['text']) ? $args['text'] : get_theme_mod('nitya_home_special_text', __('We manage every phase of manufacturing—from raw material sourcing and custom formulation to cGMP production, packaging, and international export logistics.', 'nitya-naturals'));
?>
<section class="section section-bg-light nitya-widget-one-stop">
	<div class="container">
		<div class="section-heading-box">
			<span class="sub-heading-badge"><i class="fa-solid fa-cube"></i> COMPLETE TURNKEY SOLUTION</span>
			<h2 class="section-title-center">Your Complete Ayurvedic Manufacturing Partner</h2>
			<p class="section-desc-center"><?php echo esc_html($text); ?></p>
		</div>

		<?php if ($img) : ?>
		<div class="one-stop-card-frame">
			<img src="<?php echo esc_url($img); ?>" alt="<?php esc_attr_e('Turnkey Manufacturing Capabilities - Nitya Naturals', 'nitya-naturals'); ?>" class="one-stop-graphic-img">
		</div>
		<?php endif; ?>
	</div>
</section>
