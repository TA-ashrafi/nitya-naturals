<?php
/**
 * Widget Template: Capabilities Cards (Dosage Form, Existing Products, NPD)
 */
$dosage_title = isset($args['dosage_title']) ? $args['dosage_title'] : get_theme_mod('nitya_home_dosage_title', 'VERSATILE DOSAGE FORMS');
$dosage_desc  = isset($args['dosage_desc']) ? $args['dosage_desc'] : get_theme_mod('nitya_home_dosage_desc', 'State-of-the-art production across diverse delivery formats catered to consumer preferences:');
$dosage_items_raw = isset($args['dosage_items']) ? $args['dosage_items'] : get_theme_mod('nitya_home_dosage_items', "Capsules\nTablets\nSyrups & Liquids\nHerbal Oils\nCreams & Ointments\nTraditional Pastes");

$existing_title = isset($args['existing_title']) ? $args['existing_title'] : get_theme_mod('nitya_home_existing_title', 'READY-TO-MARKET CATEGORIES');
$existing_desc  = isset($args['existing_desc']) ? $args['existing_desc'] : get_theme_mod('nitya_home_existing_desc', 'Choose from over 50+ pre-formulated, lab-tested Ayurvedic wellness categories:');
$existing_items_raw = isset($args['existing_items']) ? $args['existing_items'] : get_theme_mod('nitya_home_existing_items', "Immunity & Vitality\nDiabetes & Metabolism\nJoint & Ortho Care\nSkin & Hair Health\nKidney & Liver Support\nCardiac & Circulation");

$npd_title = isset($args['npd_title']) ? $args['npd_title'] : get_theme_mod('nitya_home_npd_title', 'CUSTOM PRODUCT DEVELOPMENT');
$npd_desc  = isset($args['npd_desc']) ? $args['npd_desc'] : get_theme_mod('nitya_home_npd_desc', 'Collaborate with our R&D specialists to create proprietary, market-ready formulas:');
$npd_items_raw = isset($args['npd_items']) ? $args['npd_items'] : get_theme_mod('nitya_home_npd_items', "Custom Herbal Formulations\nStandardized Botanical Extracts\nBioavailability Enhancement\nPackaging & Label Design\nRegulatory Compliance Guidance");

$dosage_items = is_array($dosage_items_raw) ? $dosage_items_raw : array_filter(array_map('trim', explode("\n", $dosage_items_raw)));
$existing_items = is_array($existing_items_raw) ? $existing_items_raw : array_filter(array_map('trim', explode("\n", $existing_items_raw)));
$npd_items = is_array($npd_items_raw) ? $npd_items_raw : array_filter(array_map('trim', explode("\n", $npd_items_raw)));
?>
<section class="section nitya-widget-capabilities">
	<div class="container">
		<div class="section-heading-box">
			<span class="sub-heading-badge"><i class="fa-solid fa-gears"></i> MANUFACTURING CAPABILITIES</span>
			<h2 class="section-title-center">Comprehensive Production Expertise</h2>
			<p class="section-desc-center">Whether expanding your current supplement line or launching a custom herbal innovation, Nitya Naturals provides full-spectrum manufacturing capabilities.</p>
		</div>

		<div class="capabilities-grid-cards">
			<!-- CARD 1: DOSAGE FORMS -->
			<div class="capability-card-item">
				<div class="card-header-row">
					<div class="card-icon-circle"><i class="fa-solid fa-capsules"></i></div>
					<span class="step-badge-tag">01</span>
				</div>
				<h3><?php echo esc_html($dosage_title); ?></h3>
				<p class="card-description"><?php echo esc_html($dosage_desc); ?></p>
				<?php if (!empty($dosage_items)) : ?>
					<div class="pill-tag-container">
						<?php foreach ($dosage_items as $item) : ?>
							<span class="pill-item-tag"><i class="fa-solid fa-check"></i> <?php echo esc_html($item); ?></span>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>

			<!-- CARD 2: EXISTING PRODUCTS -->
			<div class="capability-card-item featured-capability-card">
				<div class="card-header-row">
					<div class="card-icon-circle"><i class="fa-solid fa-leaf"></i></div>
					<span class="step-badge-tag">02</span>
				</div>
				<h3><?php echo esc_html($existing_title); ?></h3>
				<p class="card-description"><?php echo esc_html($existing_desc); ?></p>
				<?php if (!empty($existing_items)) : ?>
					<div class="pill-tag-container">
						<?php foreach ($existing_items as $item) : ?>
							<a href="<?php echo esc_url(home_url('/best-manufacturer-of-ayurved-medicines/')); ?>" class="pill-item-tag link-pill-tag">
								<i class="fa-solid fa-tag"></i> <?php echo esc_html($item); ?>
							</a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				<div class="card-action-wrap">
					<a href="<?php echo esc_url(home_url('/best-manufacturer-of-ayurved-medicines/')); ?>" class="btn-card-action-link">
						Browse All Categories <i class="fa-solid fa-arrow-right"></i>
					</a>
				</div>
			</div>

			<!-- CARD 3: NEW PRODUCT DEVELOPMENT -->
			<div class="capability-card-item">
				<div class="card-header-row">
					<div class="card-icon-circle"><i class="fa-solid fa-flask"></i></div>
					<span class="step-badge-tag">03</span>
				</div>
				<h3><?php echo esc_html($npd_title); ?></h3>
				<p class="card-description"><?php echo esc_html($npd_desc); ?></p>
				<?php if (!empty($npd_items)) : ?>
					<div class="pill-tag-container">
						<?php foreach ($npd_items as $item) : ?>
							<span class="pill-item-tag"><i class="fa-solid fa-vial"></i> <?php echo esc_html($item); ?></span>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				<div class="card-action-wrap">
					<a href="<?php echo esc_url(home_url('/how-to-register-ayurvedic-medicine-in-india/')); ?>" class="btn-card-action-link">
						Submit R&D Request <i class="fa-solid fa-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
