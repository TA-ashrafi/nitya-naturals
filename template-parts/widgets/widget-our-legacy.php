<?php
/**
 * Widget Template: Our Legacy Section
 */
$title = isset($args['title']) ? $args['title'] : get_theme_mod('nitya_about_legacy_title', 'Our Legacy');
$p1    = isset($args['p1']) ? $args['p1'] : get_theme_mod('nitya_about_legacy_p1', 'In the year 2013, Nitya became a manufacturing unit equipped with four dosage forms to cater to the export market. Nitya decided to start its export with USA first. By trying to achieve the most difficult quality parameters for ourselves has benefited us in many ways. We have trained and complied to the US FDA requirements; our documentation is CFR 210 211 compliant. Further our continuous drive to keep ourselves CGMP compliant has ensured that we select equipment of the same standards and follow documentation accordingly.');
$p2    = isset($args['p2']) ? $args['p2'] : get_theme_mod('nitya_about_legacy_p2', 'Our founder’s legacy of 100 plus years of Ayurvedic traditional knowledge and experience, has not been a deterrent to look at new developments and technologies in the field of Ayurveda. In fact, to the contrary it has helped us better understand which technologies are more suitable to adopt while maintaining the scientific requirements of Ayurveda. We take particular interest in identifying green technologies that are evolved across the world, which we feel are more adaptable. Currently we have adopted extracts from the SCFE CO2 method to standardise and increase the bio availability of some of our products.');
$p3    = isset($args['p3']) ? $args['p3'] : get_theme_mod('nitya_about_legacy_p3', 'With this legacy we work towards creating a disease free society. The formulations and the medicines we create are sustainably grown and harvested by local farmers. We are committed towards responsible and environment friendly practices.');
?>
<section class="section section-bg-light nitya-widget-our-legacy">
	<div class="container">
		<?php if ($title) : ?><h2 class="section-title"><?php echo esc_html($title); ?></h2><?php endif; ?>
		<div style="max-width: 900px; margin: 0 auto; text-align: justify;">
			<?php if ($p1) : ?><p><?php echo esc_html($p1); ?></p><?php endif; ?>
			<?php if ($p2) : ?><p><?php echo esc_html($p2); ?></p><?php endif; ?>
			<?php if ($p3) : ?><p><?php echo esc_html($p3); ?></p><?php endif; ?>
		</div>
	</div>
</section>
