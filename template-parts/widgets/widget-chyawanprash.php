<?php
/**
 * Widget Template: State of the Art Chyawanprash Facility
 */
$theme_uri = get_template_directory_uri();
$title = isset($args['title']) ? $args['title'] : get_theme_mod('nitya_home_chyawanprash_title', 'STATE-OF-THE-ART CHYAWANPRASH FACILITY');
$text  = isset($args['text']) ? $args['text'] : get_theme_mod('nitya_home_chyawanprash_text', 'Situated in Prayagraj within the prime organic Amla belt, our specialized Chyawanprash manufacturing unit combines traditional copper kettle processing with modern cGMP automated processing lines for global health brands.');
$img   = isset($args['img']) ? $args['img'] : get_theme_mod('nitya_home_chyawanprash_img', $theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.pdf-1536x768.png');
?>
<section class="section section-bg-light nitya-widget-chyawanprash">
	<div class="container">
		<div class="facility-react-grid">
			<div class="facility-content-block">
				<span class="sub-heading-pill"><i class="fa-solid fa-industry"></i> PRAYAGRAJ MANUFACTURING UNIT</span>
				<h2 class="section-title-left"><?php echo esc_html($title); ?></h2>
				<p class="facility-lead-text"><?php echo esc_html($text); ?></p>

				<div class="facility-perks-row">
					<div class="facility-perk-card">
						<div class="perk-icon-box"><i class="fa-solid fa-tree"></i></div>
						<div class="perk-text-box">
							<h4>Fresh Organic Amla Sourcing</h4>
							<p>Direct proximity to wild forest groves ensures nutrient-rich raw materials.</p>
						</div>
					</div>
					<div class="facility-perk-card">
						<div class="perk-icon-box"><i class="fa-solid fa-vial-circle-check"></i></div>
						<div class="perk-text-box">
							<h4>cGMP Kettle Processing</h4>
							<p>Automated temperature control preserving active botanical phytochemicals.</p>
						</div>
					</div>
				</div>

				<a href="<?php echo esc_url(home_url('/start-your-own-supplement-business/')); ?>" class="btn-card-action" style="display: inline-flex; margin-top: 10px;">
					Schedule Facility Visit <i class="fa-solid fa-arrow-right"></i>
				</a>
			</div>

			<?php if ($img) : ?>
			<div class="facility-media-block">
				<div class="facility-image-card">
					<img src="<?php echo esc_url($img); ?>" alt="<?php esc_attr_e('Chyawanprash Manufacturing Facility Prayagraj - Nitya Naturals', 'nitya-naturals'); ?>" class="facility-card-img">
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
