<?php
/**
 * Template Name: Third-Party Manufacturing
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main id="primary" class="site-main">
	<div class="page-header-banner">
		<div class="container">
			<h1><?php esc_html_e('Manufacturing', 'nitya-naturals'); ?></h1>
			<p><?php esc_html_e('Third Party Manufacturing of Supplements / Medicines - Nitya Naturals', 'nitya-naturals'); ?></p>
		</div>
	</div>

	<section class="section">
		<div class="container">
			<div style="max-width: 900px; margin: 0 auto; text-align: justify;">
				<p><?php esc_html_e('When you choose Nitya Naturals for your third party manufacturing of supplements, you are choosing experience. As a member of the Baidyanath family of businesses, we draw upon more than 100 years of experience in manufacturing Ayurvedic, herbal and other supplements.', 'nitya-naturals'); ?></p>

				<h2 style="color: var(--primary-color); font-size: 22px; margin-top: 30px; margin-bottom: 15px;"><?php esc_html_e('Manufacturing Your Dietary Supplements with Nitya Naturals', 'nitya-naturals'); ?></h2>
				<p><?php esc_html_e('Flexibility and innovativeness are key when you are deciding on what and how to manufacture your supplement for your chosen segment. We help you by providing key options:', 'nitya-naturals'); ?></p>

				<div class="feature-grid" style="margin-top: 25px;">
					<div class="feature-card" style="text-align: left;">
						<h3 style="color: var(--secondary-color);"><?php esc_html_e('Dosage Form / Delivery Form', 'nitya-naturals'); ?></h3>
						<p><?php esc_html_e('Nitya Naturals offers you Tablets, Food Grade All-Veg Capsules, Powders, Pastes, Creams and liquids in Syrups or Oils.', 'nitya-naturals'); ?></p>
					</div>

					<div class="feature-card" style="text-align: left;">
						<h3 style="color: var(--secondary-color);"><?php esc_html_e('Manufacturing Services', 'nitya-naturals'); ?></h3>
						<p><?php esc_html_e('We take you from start to finish. We manufacture everything in-house. Filling, sealing, labeling and making the product ready to ship is all achieved within our facility.', 'nitya-naturals'); ?></p>
					</div>

					<div class="feature-card" style="text-align: left;">
						<h3 style="color: var(--secondary-color);"><?php esc_html_e('Documentation & Compliance', 'nitya-naturals'); ?></h3>
						<p><?php esc_html_e('All our production processes comply with US FDA 21CFR 211 & 210, ICH Q7 & GMP. Each process follows pre-established Standard Operating Procedures (SOP) in compliance with Good Documentation Practices (GDP).', 'nitya-naturals'); ?></p>
					</div>

					<div class="feature-card" style="text-align: left;">
						<h3 style="color: var(--secondary-color);"><?php esc_html_e('In-House Laboratory', 'nitya-naturals'); ?></h3>
						<p><?php esc_html_e('Nitya Naturals has an in-house Analytical and Micro-Biology Laboratory in compliance with Good Laboratory Practices (GLP) with required modern instruments for quality assurance.', 'nitya-naturals'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
