<?php
/**
 * Widget Template: Our Services Section (4-Step Timeline Workflow)
 */
$title = isset($args['title']) ? $args['title'] : get_theme_mod('nitya_home_services_title', 'OUR END-TO-END SERVICES');
$desc  = isset($args['desc']) ? $args['desc'] : get_theme_mod('nitya_home_services_desc', 'A structured, transparent 4-step workflow to bring your herbal product vision to market efficiently.');
?>
<section class="section nitya-widget-services">
	<div class="container">
		<div class="section-center-head">
			<span class="sub-heading-pill"><i class="fa-solid fa-diagram-project"></i> STREAMLINED PROCESS</span>
			<h2 class="section-heading-center"><?php echo esc_html($title); ?></h2>
			<p class="section-lead-desc"><?php echo esc_html($desc); ?></p>
		</div>

		<div class="services-workflow-grid">
			<!-- STEP 1 -->
			<div class="workflow-step-card">
				<span class="workflow-step-number">01</span>
				<div class="workflow-icon-box">
					<i class="fa-regular fa-calendar-check"></i>
				</div>
				<h3><a href="<?php echo esc_url(home_url('/herbal-manufacturer/')); ?>"><?php esc_html_e('Planning & Formulation', 'nitya-naturals'); ?></a></h3>
				<p><?php esc_html_e('Select from stock formulations or collaborate with our R&D team on custom botanical ingredients.', 'nitya-naturals'); ?></p>
				<a href="<?php echo esc_url(home_url('/herbal-manufacturer/')); ?>" class="workflow-action-link"><?php esc_html_e('Learn More', 'nitya-naturals'); ?> <i class="fa-solid fa-chevron-right"></i></a>
			</div>

			<!-- STEP 2 -->
			<div class="workflow-step-card">
				<span class="workflow-step-number">02</span>
				<div class="workflow-icon-box">
					<i class="fa-solid fa-gears"></i>
				</div>
				<h3><a href="<?php echo esc_url(home_url('/third-party-manufacturing/')); ?>"><?php esc_html_e('cGMP Manufacturing', 'nitya-naturals'); ?></a></h3>
				<p><?php esc_html_e('High-precision manufacturing across tablets, capsules, syrups, oils, and traditional pastes.', 'nitya-naturals'); ?></p>
				<a href="<?php echo esc_url(home_url('/third-party-manufacturing/')); ?>" class="workflow-action-link"><?php esc_html_e('Learn More', 'nitya-naturals'); ?> <i class="fa-solid fa-chevron-right"></i></a>
			</div>

			<!-- STEP 3 -->
			<div class="workflow-step-card">
				<span class="workflow-step-number">03</span>
				<div class="workflow-icon-box">
					<i class="fa-solid fa-box-open"></i>
				</div>
				<h3><a href="<?php echo esc_url(home_url('/private-label/')); ?>"><?php esc_html_e('Packaging & Labeling', 'nitya-naturals'); ?></a></h3>
				<p><?php esc_html_e('Custom food-grade containers, compliant label design, barcode creation, and safety seals.', 'nitya-naturals'); ?></p>
				<a href="<?php echo esc_url(home_url('/private-label/')); ?>" class="workflow-action-link"><?php esc_html_e('Learn More', 'nitya-naturals'); ?> <i class="fa-solid fa-chevron-right"></i></a>
			</div>

			<!-- STEP 4 -->
			<div class="workflow-step-card">
				<span class="workflow-step-number">04</span>
				<div class="workflow-icon-box">
					<i class="fa-solid fa-truck-fast"></i>
				</div>
				<h3><a href="<?php echo esc_url(home_url('/export-medicine/')); ?>"><?php esc_html_e('Global Fulfillment', 'nitya-naturals'); ?></a></h3>
				<p><?php esc_html_e('International export documentation, customs clearance, and worldwide freight dispatch.', 'nitya-naturals'); ?></p>
				<a href="<?php echo esc_url(home_url('/export-medicine/')); ?>" class="workflow-action-link"><?php esc_html_e('Learn More', 'nitya-naturals'); ?> <i class="fa-solid fa-chevron-right"></i></a>
			</div>
		</div>
	</div>
</section>
