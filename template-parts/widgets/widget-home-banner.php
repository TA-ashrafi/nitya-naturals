<?php
/**
 * Widget Template: Home Banner Section
 */
$theme_uri = get_template_directory_uri();
$hero_img = isset($args['hero_img']) ? $args['hero_img'] : get_theme_mod('nitya_home_hero_img', $theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.jpg');
if ($hero_img) :
?>
<section class="hero-banner nitya-widget-hero">
	<img src="<?php echo esc_url($hero_img); ?>" alt="<?php esc_attr_e('Nitya Naturals Luxury Ayurveda', 'nitya-naturals'); ?>">
</section>
<?php endif; ?>
