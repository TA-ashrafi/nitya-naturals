<?php
/**
 * Widget Template: State of the Art Chyawanprash Facility
 */
$theme_uri = get_template_directory_uri();
$title = isset($args['title']) ? $args['title'] : get_theme_mod('nitya_home_chyawanprash_title', 'STATE OF THE ART CHYAWANPRASH FACILITY');
$text  = isset($args['text']) ? $args['text'] : get_theme_mod('nitya_home_chyawanprash_text', 'We here at Nitya Naturals have created a state of the art Chyawanprash facility with GMP certified machinery. Our facility is located in the heart of the Amla belt at Prayagraj. This facility is 2 km from the holy sangam and 5 km from the Ashram of the famous sage Acharya Bharadwaj, who is responsible for delivering the gift of Ayurveda for humankind to earth. The proximity to the Amla forest, allows us to get fresh organic Amla straight from the trees to the pan.

This facility was created to manufacture chyawanprash for various brands across the world with the highest level of quality with its latest offering in India for a brand called Age Ayurveda available only on Amazon ');
$img   = isset($args['img']) ? $args['img'] : get_theme_mod('nitya_home_chyawanprash_img', $theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.pdf-1536x768.png');
?>
<section class="section section-bg-light nitya-widget-chyawanprash">
	<div class="container">
		<?php if ($title) : ?><h2 class="section-title"><?php echo esc_html($title); ?></h2><?php endif; ?>
		<?php if ($text) : ?>
		<p style="text-align: center; max-width: 900px; margin: 0 auto 20px;">
			<?php echo esc_html($text); ?>
		</p>
		<?php endif; ?>
		<?php if ($img) : ?>
		<div style="text-align: center; margin-top: 30px;">
			<img src="<?php echo esc_url($img); ?>" alt="<?php esc_attr_e('Chyawanprash Facility', 'nitya-naturals'); ?>" style="margin: 0 auto; max-width: 100%; height: auto; border-radius: 8px;">
		</div>
		<?php endif; ?>
	</div>
</section>
