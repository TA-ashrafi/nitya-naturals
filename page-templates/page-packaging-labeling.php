<?php
/**
 * Template Name: Packaging & Labeling
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main id="primary" class="site-main">
	<div class="page-header-banner">
		<div class="container">
			<h1><?php esc_html_e('Packaging & Labeling', 'nitya-naturals'); ?></h1>
			<p><?php esc_html_e('Private Label with Nitya Naturals - Product Packaging and Labeling Support', 'nitya-naturals'); ?></p>
		</div>
	</div>

	<section class="section">
		<div class="container">
			<div style="max-width: 900px; margin: 0 auto;">
				<h2 style="color: var(--primary-color); font-size: 24px; margin-bottom: 15px;"><?php esc_html_e('Packaging Options:', 'nitya-naturals'); ?></h2>
				<p style="text-align: justify;"><?php esc_html_e('The product packaging specification is an outcome of your product selection. However, our experts will work with you to arrive at the material and size of container, labels, dosage forms etc. The options are varied so we make a point of learning the right details to help you make the best product possible.', 'nitya-naturals'); ?></p>

				<p><strong><?php esc_html_e('Food Grade Bottle Varieties We Provide:', 'nitya-naturals'); ?></strong></p>
				<ul style="padding-left: 20px; list-style-type: disc; margin-bottom: 20px; line-height: 1.8;">
					<li><?php esc_html_e('Food Grade H.D.P.E. Containers', 'nitya-naturals'); ?></li>
					<li><?php esc_html_e('Food Grade P.E.T. Bottles', 'nitya-naturals'); ?></li>
					<li><?php esc_html_e('Eco-Friendly Food Grade Glass Bottles', 'nitya-naturals'); ?></li>
				</ul>
				<p><?php esc_html_e('Additionally, we use Food Grade induction sealing and provide label and outer carton on request.', 'nitya-naturals'); ?></p>

				<h2 style="color: var(--primary-color); font-size: 24px; margin-top: 40px; margin-bottom: 15px;"><?php esc_html_e('Labeling Support:', 'nitya-naturals'); ?></h2>
				<p style="text-align: justify;"><?php esc_html_e('Private Label with Nitya Naturals provides full label support from a legal standpoint as well as an artistic one, complying with importing countries legal requirements. Our team is well equipped to modify and/or customize label design as well as logo from scratch according to your needs.', 'nitya-naturals'); ?></p>

				<p style="background: var(--bg-light); border-left: 4px solid var(--secondary-color); padding: 15px 20px; margin-top: 20px;">
					<strong><?php esc_html_e('Certifications Available on Packaging:', 'nitya-naturals'); ?></strong><br>
					<?php esc_html_e('GMP, All Natural, V-caps, Halal, Kosher, and Herbal Certifications can be printed on packaging and labels.', 'nitya-naturals'); ?>
				</p>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
