<?php
/**
 * Widget Template: New Product Development Brief Form
 */
$whatsapp_num = get_theme_mod('nitya_whatsapp', '917524098888');
?>
<section class="section npd-brief-section" id="npd-form-section">
	<div class="container">
		<div class="npd-brief-wrapper npd-layout-single">

			<!-- TOP: INFO -->
			<div class="npd-info-col">
				<span class="npd-badge"><?php esc_html_e('NEW PRODUCT DEVELOPMENT', 'nitya-naturals'); ?></span>
				<h2 class="npd-heading"><?php esc_html_e('Tell us what you want to launch.', 'nitya-naturals'); ?></h2>
				<p class="npd-desc">
					<?php esc_html_e('With the knowledge and expertise of our team, we help you custom-create any product according to your requirements. Send the brief and we come back with feasibility, cost and timeline.', 'nitya-naturals'); ?>
				</p>
			</div>

			<!-- FORM -->
			<div class="npd-form-col">
				<form id="npdBriefForm" class="npd-form" data-whatsapp="<?php echo esc_attr($whatsapp_num); ?>">
					<div class="npd-form-grid">

						<div class="npd-form-group">
							<label for="npd_product_name"><span class="npd-num">01</span> <?php esc_html_e('New product name', 'nitya-naturals'); ?></label>
							<input type="text" id="npd_product_name" name="product_name" class="npd-input" placeholder="<?php esc_attr_e('e.g. Amla Immunity Gummies', 'nitya-naturals'); ?>" required>
						</div>

						<div class="npd-form-group">
							<label for="npd_company"><span class="npd-num">02</span> <?php esc_html_e('Company', 'nitya-naturals'); ?></label>
							<input type="text" id="npd_company" name="company" class="npd-input" placeholder="<?php esc_attr_e('Brand or company', 'nitya-naturals'); ?>" required>
						</div>

						<div class="npd-form-group">
							<label for="npd_email"><span class="npd-num">03</span> <?php esc_html_e('Email', 'nitya-naturals'); ?></label>
							<input type="email" id="npd_email" name="email" class="npd-input" placeholder="<?php esc_attr_e('you@company.com', 'nitya-naturals'); ?>" required>
						</div>

						<div class="npd-form-group">
							<label for="npd_phone"><span class="npd-num">04</span> <?php esc_html_e('WhatsApp / Phone', 'nitya-naturals'); ?></label>
							<input type="tel" id="npd_phone" name="phone" class="npd-input" placeholder="<?php esc_attr_e('+91 ...', 'nitya-naturals'); ?>" required>
						</div>

						<div class="npd-form-group npd-full-width">
							<label for="npd_composition"><span class="npd-num">05</span> <?php esc_html_e('Intended composition', 'nitya-naturals'); ?></label>
							<textarea id="npd_composition" name="composition" class="npd-textarea" rows="3" placeholder="<?php esc_attr_e('Herbs, actives, strengths you have in mind', 'nitya-naturals'); ?>"></textarea>
						</div>

						<div class="npd-form-group">
							<label for="npd_dosage"><span class="npd-num">06</span> <?php esc_html_e('Dosage form', 'nitya-naturals'); ?></label>
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
							<label for="npd_target_moq"><span class="npd-num">07</span> <?php esc_html_e('Target MOQ / Volume', 'nitya-naturals'); ?></label>
							<input type="text" id="npd_target_moq" name="target_moq" class="npd-input" placeholder="<?php esc_attr_e('e.g. 5,000 units per month', 'nitya-naturals'); ?>">
						</div>

						<div class="npd-form-group npd-full-width">
							<label for="npd_functions_position"><span class="npd-num">08</span> <?php esc_html_e('Product functions & position', 'nitya-naturals'); ?></label>
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