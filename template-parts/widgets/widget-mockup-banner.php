<?php
/**
 * Widget Template: Mockup Showcase Banner
 */
$theme_uri = get_template_directory_uri();
$mockup_img = isset($args['mockup_img']) ? $args['mockup_img'] : get_theme_mod('nitya_home_mockup_img', $theme_uri . '/assets/images/Free_Dropddper_Bottle_Mockup-copy-1024x768.jpg');
if ($mockup_img) :
?>
<section class="section section-bg-light nitya-widget-mockup">
	<div class="container">
		<div class="mockup-banner-card">
			<img src="<?php echo esc_url($mockup_img); ?>" alt="<?php esc_attr_e('Nitya Naturals Oils & Liquids Mockup', 'nitya-naturals'); ?>" class="mockup-banner-img">
		</div>
	</div>
</section>
<?php endif; ?>
