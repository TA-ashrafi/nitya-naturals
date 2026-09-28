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
		<div class="mockup-react-card">
			<div class="mockup-card-media">
				<img src="<?php echo esc_url($mockup_img); ?>" alt="<?php esc_attr_e('Custom Packaging & Private Label Mockups - Nitya Naturals', 'nitya-naturals'); ?>" class="mockup-card-img">
			</div>
			<div class="mockup-card-content">
				<span class="sub-heading-pill"><i class="fa-solid fa-box-open"></i> CUSTOM PACKAGING & LABELING</span>
				<h2>Custom Brand Packaging & Label Design</h2>
				<p>Stand out in international markets with premium food-grade containers, dropper bottles, blister packs, amber glass jars, and custom label design complying with global regulatory guidelines.</p>

				<div class="mockup-perks-list">
					<div class="mockup-perk-item"><i class="fa-solid fa-check"></i> Custom Bottle & Container Sizing</div>
					<div class="mockup-perk-item"><i class="fa-solid fa-check"></i> Multi-language Regulatory Labeling</div>
					<div class="mockup-perk-item"><i class="fa-solid fa-check"></i> Tamper-evident Safety Seals & Boxes</div>
				</div>

				<a href="<?php echo esc_url(home_url('/private-label/')); ?>" class="btn-card-action">
					Explore Packaging Options <i class="fa-solid fa-arrow-right"></i>
				</a>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
