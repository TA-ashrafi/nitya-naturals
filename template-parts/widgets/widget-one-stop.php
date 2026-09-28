<?php
/**
 * Widget Template: One Stop Shop Section
 */
$theme_uri = get_template_directory_uri();
$img  = isset($args['img']) ? $args['img'] : get_theme_mod('nitya_home_special_img', $theme_uri . '/assets/images/What-Makes-it-Special.png');
$text = isset($args['text']) ? $args['text'] : get_theme_mod('nitya_home_special_text', __('In order to get started we first need to know your requirements and how we can fulfill them. You can choose from a list of our existing products and dosage forms or we can help you custom create a product of your need.', 'nitya-naturals'));
?>
<section class="section section-bg-light nitya-widget-one-stop">
	<div class="container">
		<?php if ($img) : ?>
		<div style="text-align: center; margin-bottom: 30px;">
			<img src="<?php echo esc_url($img); ?>" alt="<?php esc_attr_e('One stop shop for all your manufacturing needs - Nitya Naturals', 'nitya-naturals'); ?>" style="margin: 0 auto; border-radius: 8px;">
		</div>
		<?php endif; ?>
		<?php if ($text) : ?>
		<p style="text-align: center; max-width: 800px; margin: 0 auto;">
			<?php echo esc_html($text); ?>
		</p>
		<?php endif; ?>
	</div>
</section>
