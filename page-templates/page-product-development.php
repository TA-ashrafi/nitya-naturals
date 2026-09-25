<?php
/**
 * Template Name: Product Development Form
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="page-header-banner">
		<div class="container">
			<h1><?php esc_html_e('Product Development Form', 'nitya-naturals'); ?></h1>
			<p><?php esc_html_e('How to register ayurvedic medicine in India - Custom Formulation Form', 'nitya-naturals'); ?></p>
		</div>
	</div>

	<section class="section">
		<div class="container">
			<p style="text-align: center; max-width: 850px; margin: 0 auto 30px;">
				<?php esc_html_e('With the knowledge and expertise of our team, we can help you custom create any product according to your needs and guide you on how to register ayurvedic medicine in India and abroad. In order to get started, please fill out the form below:', 'nitya-naturals'); ?>
			</p>

			<form class="custom-form" method="post" action="">
				<div class="form-group">
					<label for="first-name"><?php esc_html_e('Name *', 'nitya-naturals'); ?></label>
					<input type="text" id="first-name" name="first-name" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="email-address"><?php esc_html_e('Email Address *', 'nitya-naturals'); ?></label>
					<input type="email" id="email-address" name="email-361" class="form-control" required>
				</div>

				<h3 style="margin-top: 25px; border-bottom: 1px solid var(--border-color); padding-bottom: 8px; color: var(--primary-color);"><?php esc_html_e('Product Name', 'nitya-naturals'); ?></h3>

				<div class="form-group">
					<label for="product-new"><?php esc_html_e('New Product Name', 'nitya-naturals'); ?></label>
					<input type="text" id="product-new" name="product-new" class="form-control">
				</div>

				<div class="form-group">
					<label for="product-composition"><?php esc_html_e('Intended Composition', 'nitya-naturals'); ?></label>
					<input type="text" id="product-composition" name="product-composition" class="form-control" placeholder="<?php esc_attr_e('Separate Ingredients with Comma', 'nitya-naturals'); ?>">
				</div>

				<div class="form-group">
					<label for="product-ingredient"><?php esc_html_e('Ingredients to be avoided', 'nitya-naturals'); ?></label>
					<input type="text" id="product-ingredient" name="product-ingredient" class="form-control">
				</div>

				<div class="form-group">
					<label for="product-quality"><?php esc_html_e('Appropriate Quality Standards', 'nitya-naturals'); ?></label>
					<input type="text" id="product-quality" name="product-quality" class="form-control" placeholder="<?php esc_attr_e('(List with Specification and Units)', 'nitya-naturals'); ?>">
				</div>

				<h3 style="margin-top: 25px; border-bottom: 1px solid var(--border-color); padding-bottom: 8px; color: var(--primary-color);"><?php esc_html_e('Product Function', 'nitya-naturals'); ?></h3>

				<div class="form-group">
					<label for="product-purpose"><?php esc_html_e('Purpose', 'nitya-naturals'); ?></label>
					<input type="text" id="product-purpose" name="product-Purpose" class="form-control">
				</div>

				<div class="form-group">
					<label for="product-ailment"><?php esc_html_e('Proposed Product Action / Ailment', 'nitya-naturals'); ?></label>
					<input type="text" id="product-ailment" name="product-Ailment" class="form-control">
				</div>

				<div class="form-group">
					<label for="product-strength"><?php esc_html_e('Strength', 'nitya-naturals'); ?></label>
					<input type="text" id="product-strength" name="product-Strength" class="form-control">
				</div>

				<h3 style="margin-top: 25px; border-bottom: 1px solid var(--border-color); padding-bottom: 8px; color: var(--primary-color);"><?php esc_html_e('Product Position', 'nitya-naturals'); ?></h3>

				<div class="form-group">
					<label for="intended-user"><?php esc_html_e('Intended User', 'nitya-naturals'); ?></label>
					<input type="text" id="intended-user" name="intended-User" class="form-control">
				</div>

				<div class="form-group">
					<label for="product-age"><?php esc_html_e('Target Age', 'nitya-naturals'); ?></label>
					<input type="text" id="product-age" name="product-Age" class="form-control">
				</div>

				<div class="form-group">
					<label for="product-sex"><?php esc_html_e('Sex', 'nitya-naturals'); ?></label>
					<select id="product-sex" name="menu-761" class="form-control">
						<option value="Male"><?php esc_html_e('Male', 'nitya-naturals'); ?></option>
						<option value="Female"><?php esc_html_e('Female', 'nitya-naturals'); ?></option>
						<option value="Both" selected><?php esc_html_e('Both', 'nitya-naturals'); ?></option>
					</select>
				</div>

				<div class="form-group">
					<label><?php esc_html_e('Dosage Form', 'nitya-naturals'); ?></label>
					<div class="checkbox-group">
						<label class="checkbox-item"><input type="checkbox" name="dosage-form[]" value="Syrup"> Syrup</label>
						<label class="checkbox-item"><input type="checkbox" name="dosage-form[]" value="Oil"> Oil</label>
						<label class="checkbox-item"><input type="checkbox" name="dosage-form[]" value="Capsule"> Capsule</label>
						<label class="checkbox-item"><input type="checkbox" name="dosage-form[]" value="Tablet"> Tablet</label>
						<label class="checkbox-item"><input type="checkbox" name="dosage-form[]" value="Cream"> Cream</label>
					</div>
				</div>

				<h3 style="margin-top: 25px; border-bottom: 1px solid var(--border-color); padding-bottom: 8px; color: var(--primary-color);"><?php esc_html_e('Additional Information', 'nitya-naturals'); ?></h3>

				<div class="form-group">
					<label for="product-moq"><?php esc_html_e('Target Minimum Order Quantity (MOQ)', 'nitya-naturals'); ?></label>
					<input type="text" id="product-moq" name="product-MOQ" class="form-control">
				</div>

				<div class="form-group">
					<label for="registrations"><?php esc_html_e('Registrations Requirement Notes', 'nitya-naturals'); ?></label>
					<input type="text" id="registrations" name="Registrations" class="form-control" placeholder="<?php esc_attr_e('(Registrations in India for new product takes a minimum of 100 days)', 'nitya-naturals'); ?>">
				</div>

				<div style="text-align: center; margin-top: 25px;">
					<button type="submit" class="btn-submit"><?php esc_html_e('Submit Requirement', 'nitya-naturals'); ?></button>
				</div>
			</form>
		</div>
	</section>
</main>

<?php
get_footer();
