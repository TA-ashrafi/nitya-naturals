<?php
/**
 * Widget Template: Capabilities Cards (Dosage Form, Existing Products, NPD)
 */
$dosage_title = isset($args['dosage_title']) ? $args['dosage_title'] : get_theme_mod('nitya_home_dosage_title', 'DOSAGE FORM');
$dosage_desc  = isset($args['dosage_desc']) ? $args['dosage_desc'] : get_theme_mod('nitya_home_dosage_desc', 'Nitya Naturals can produce a variety of nutraceutical product forms that meet the needs of your target market and end consumer:');
$dosage_items_raw = isset($args['dosage_items']) ? $args['dosage_items'] : get_theme_mod('nitya_home_dosage_items', "Capsules\nTablets\nSyrups\nOils\nCreams\nPastes");

$existing_title = isset($args['existing_title']) ? $args['existing_title'] : get_theme_mod('nitya_home_existing_title', 'EXISTING PRODUCTS');
$existing_desc  = isset($args['existing_desc']) ? $args['existing_desc'] : get_theme_mod('nitya_home_existing_desc', 'Choose from our pre-formulated stock product categories including:');
$existing_items_raw = isset($args['existing_items']) ? $args['existing_items'] : get_theme_mod('nitya_home_existing_items', "Allergy\nCholesterol\nDiabetes\nImmunity\nKidney Care\nWeight Management");

$npd_title = isset($args['npd_title']) ? $args['npd_title'] : get_theme_mod('nitya_home_npd_title', 'NEW PRODUCT DEVELOPMENT');
$npd_desc  = isset($args['npd_desc']) ? $args['npd_desc'] : get_theme_mod('nitya_home_npd_desc', 'With the knowledge and expertise of our team, we help you custom create any product according to your requirements:');
$npd_items_raw = isset($args['npd_items']) ? $args['npd_items'] : get_theme_mod('nitya_home_npd_items', "New Product Name\nIntended Composition\nProduct Functions\nProduct Position\nDosage Form & MOQ");

$dosage_items = is_array($dosage_items_raw) ? $dosage_items_raw : array_filter(array_map('trim', explode("\n", $dosage_items_raw)));
$existing_items = is_array($existing_items_raw) ? $existing_items_raw : array_filter(array_map('trim', explode("\n", $existing_items_raw)));
$npd_items = is_array($npd_items_raw) ? $npd_items_raw : array_filter(array_map('trim', explode("\n", $npd_items_raw)));
?>
<section class="section nitya-widget-capabilities">
	<div class="container">
		<div class="feature-grid">
			<div class="feature-card">
				<div class="feature-icon"><i class="fa-solid fa-capsules"></i></div>
				<h3><?php echo esc_html($dosage_title); ?></h3>
				<p><?php echo esc_html($dosage_desc); ?></p>
				<?php if (!empty($dosage_items)) : ?>
					<ul style="text-align: left; padding-left: 20px; list-style: disc; margin-top: 10px;">
						<?php foreach ($dosage_items as $item) : ?>
							<li><?php echo esc_html($item); ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>

			<div class="feature-card">
				<div class="feature-icon"><i class="fa-solid fa-leaf"></i></div>
				<h3><?php echo esc_html($existing_title); ?></h3>
				<p><?php echo esc_html($existing_desc); ?></p>
				<?php if (!empty($existing_items)) : ?>
					<ul style="text-align: left; padding-left: 20px; list-style: disc; margin-top: 10px;">
						<?php foreach ($existing_items as $item) : ?>
							<li><a href="<?php echo esc_url(home_url('/best-manufacturer-of-ayurved-medicines/')); ?>"><?php echo esc_html($item); ?></a></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>

			<div class="feature-card">
				<div class="feature-icon"><i class="fa-solid fa-flask"></i></div>
				<h3><?php echo esc_html($npd_title); ?></h3>
				<p><?php echo esc_html($npd_desc); ?></p>
				<?php if (!empty($npd_items)) : ?>
					<ul style="text-align: left; padding-left: 20px; list-style: disc; margin-top: 10px;">
						<?php foreach ($npd_items as $item) : ?>
							<li><?php echo esc_html($item); ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
				<p style="margin-top: 15px;"><a href="<?php echo esc_url(home_url('/how-to-register-ayurvedic-medicine-in-india/')); ?>" class="btn-submit" style="padding: 8px 18px; font-size: 13px;"><?php esc_html_e('Fill Development Form', 'nitya-naturals'); ?></a></p>
			</div>
		</div>
	</div>
</section>
