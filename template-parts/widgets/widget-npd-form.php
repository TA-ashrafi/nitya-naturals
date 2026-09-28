<?php
/**
 * Widget Template: New Product Development Brief Form
 */
$theme_uri = get_template_directory_uri();
$whatsapp_num = get_theme_mod('nitya_whatsapp', '917524098888');
?>
<section class="section npd-brief-section" id="npd-form-section">
	<div class="container">
		<div class="npd-brief-wrapper">

			<!-- LEFT COLUMN: BRIEF INFO & STEPS -->
			<div class="npd-info-col">
				<span class="npd-badge"><?php esc_html_e('NEW PRODUCT DEVELOPMENT', 'nitya-naturals'); ?></span>
				<h2 class="npd-heading"><?php esc_html_e('Tell us what you want to launch.', 'nitya-naturals'); ?></h2>
				<p class="npd-desc">
					<?php esc_html_e('With the knowledge and expertise of our team, we help you custom-create any product according to your requirements. Send the brief and we come back with feasibility, cost and timeline.', 'nitya-naturals'); ?>
				</p>

				<ul class="npd-steps-list">
					<li class="npd-step-item">
						<span class="step-num">01</span>
						<span class="step-text"><?php esc_html_e('New product name', 'nitya-naturals'); ?></span>
					</li>
					<li class="npd-step-item">
						<span class="step-num">02</span>
						<span class="step-text"><?php esc_html_e('Intended composition', 'nitya-naturals'); ?></span>
					</li>
					<li class="npd-step-item">
						<span class="step-num">03</span>
						<span class="step-text"><?php esc_html_e('Product functions', 'nitya-naturals'); ?></span>
					</li>
					<li class="npd-step-item">
						<span class="step-num">04</span>
						<span class="step-text"><?php esc_html_e('Product position', 'nitya-naturals'); ?></span>
					</li>
					<li class="npd-step-item">
						<span class="step-num">05</span>
						<span class="step-text"><?php esc_html_e('Dosage form & MOQ', 'nitya-naturals'); ?></span>
					</li>
				</ul>
			</div>

			<!-- RIGHT COLUMN: BRIEF FORM -->
			<div class="npd-form-col">
				<form id="npdBriefForm" class="npd-form" data-whatsapp="<?php echo esc_attr($whatsapp_num); ?>">
					<div class="npd-form-grid">

						<!-- Row 1: Product Name & Company -->
						<div class="npd-form-group">
							<label for="npd_product_name"><?php esc_html_e('NEW PRODUCT NAME', 'nitya-naturals'); ?></label>
							<input type="text" id="npd_product_name" name="product_name" class="npd-input" placeholder="<?php esc_attr_e('e.g. Amla Immunity Gummies', 'nitya-naturals'); ?>" required>
						</div>

						<div class="npd-form-group">
							<label for="npd_company"><?php esc_html_e('COMPANY', 'nitya-naturals'); ?></label>
							<input type="text" id="npd_company" name="company" class="npd-input" placeholder="<?php esc_attr_e('Brand or company', 'nitya-naturals'); ?>" required>
						</div>

						<!-- Row 2: Email & Phone -->
						<div class="npd-form-group">
							<label for="npd_email"><?php esc_html_e('EMAIL', 'nitya-naturals'); ?></label>
							<input type="email" id="npd_email" name="email" class="npd-input" placeholder="<?php esc_attr_e('you@company.com', 'nitya-naturals'); ?>" required>
						</div>

						<div class="npd-form-group">
							<label for="npd_phone"><?php esc_html_e('WHATSAPP / PHONE', 'nitya-naturals'); ?></label>
							<input type="tel" id="npd_phone" name="phone" class="npd-input" placeholder="<?php esc_attr_e('+91 ...', 'nitya-naturals'); ?>" required>
						</div>

						<!-- Row 3: Intended Composition -->
						<div class="npd-form-group npd-full-width">
							<label for="npd_composition"><?php esc_html_e('INTENDED COMPOSITION', 'nitya-naturals'); ?></label>
							<textarea id="npd_composition" name="composition" class="npd-textarea" rows="3" placeholder="<?php esc_attr_e('Herbs, actives, strengths you have in mind', 'nitya-naturals'); ?>"></textarea>
						</div>

						<!-- Row 4: Dosage Form & Target MOQ -->
						<div class="npd-form-group">
							<label for="npd_dosage"><?php esc_html_e('DOSAGE FORM', 'nitya-naturals'); ?></label>
							<select id="npd_dosage" name="dosage" class="npd-select">
								<option value="Capsules" selected><?php esc_html_e('Capsules', 'nitya-naturals'); ?></option>
								<option value="Tablets"><?php esc_html_e('Tablets', 'nitya-naturals'); ?></option>
								<option value="Gummies"><?php esc_html_e('Gummies', 'nitya-naturals'); ?></option>
								<option value="Syrup/Liquid"><?php esc_html_e('Syrup/Liquid', 'nitya-naturals'); ?></option>
								<option value="Powder"><?php esc_html_e('Powder', 'nitya-naturals'); ?></option>
								<option value="Oil"><?php esc_html_e('Oil', 'nitya-naturals'); ?></option>
								<option value="Ointment/Cream"><?php esc_html_e('Ointment/Cream', 'nitya-naturals'); ?></option>
								<option value="Other"><?php esc_html_e('Other', 'nitya-naturals'); ?></option>
							</select>
						</div>

						<div class="npd-form-group">
							<label for="npd_target_moq"><?php esc_html_e('TARGET MOQ / VOLUME', 'nitya-naturals'); ?></label>
							<input type="text" id="npd_target_moq" name="target_moq" class="npd-input" placeholder="<?php esc_attr_e('e.g. 5,000 units per month', 'nitya-naturals'); ?>">
						</div>

						<!-- Row 5: Product Functions & Position -->
						<div class="npd-form-group npd-full-width">
							<label for="npd_functions_position"><?php esc_html_e('PRODUCT FUNCTIONS & POSITION', 'nitya-naturals'); ?></label>
							<textarea id="npd_functions_position" name="functions_position" class="npd-textarea" rows="3" placeholder="<?php esc_attr_e('What it should do, who it is for, where it sits on the shelf', 'nitya-naturals'); ?>"></textarea>
						</div>

					</div>

					<button type="submit" class="btn-npd-submit">
						<span><?php esc_html_e('SEND DEVELOPMENT BRIEF', 'nitya-naturals'); ?></span>
						<i class="fa-solid fa-arrow-right"></i>
					</button>

					<p class="npd-form-note">
						<?php esc_html_e('Submitting opens WhatsApp with your brief pre-filled, so nothing is lost. You can also email us at', 'nitya-naturals'); ?>
						<a href="mailto:ald.nitya@gmail.com">ald.nitya@gmail.com</a>.
					</p>
				</form>
			</div>

		</div>
	</div>
</section>
