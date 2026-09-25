<?php
/**
 * Template Name: Fulfillment & Transportation
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main id="primary" class="site-main">
	<div class="page-header-banner">
		<div class="container">
			<h1><?php esc_html_e('Fulfillment & Transportation', 'nitya-naturals'); ?></h1>
			<p><?php esc_html_e('Seamless Export and Supply Chain Logistics - Nitya Naturals', 'nitya-naturals'); ?></p>
		</div>
	</div>

	<section class="section">
		<div class="container">
			<div style="max-width: 900px; margin: 0 auto; text-align: justify;">
				<h2 style="color: var(--primary-color); font-size: 24px; margin-bottom: 15px;"><?php esc_html_e('Global Export & Logistics Solutions:', 'nitya-naturals'); ?></h2>
				<p><?php esc_html_e('Nitya Naturals handles end-to-end fulfillment and transportation for your private label supplements and herbal medicines. From secure export packaging and container loading to customs documentation and international freight dispatch, our experienced logistics team ensures your order arrives safely, on time, and fully compliant with destination customs regulations.', 'nitya-naturals'); ?></p>

				<div class="feature-grid" style="margin-top: 30px;">
					<div class="feature-card" style="text-align: left;">
						<div class="feature-icon"><i class="fa-solid fa-box-archive"></i></div>
						<h3 style="color: var(--secondary-color);"><?php esc_html_e('Export Grade Packaging', 'nitya-naturals'); ?></h3>
						<p><?php esc_html_e('Heavy-duty corrugated master cartons, palletizing, shrink wrapping, and moisture protection suitable for long-distance air and sea shipping.', 'nitya-naturals'); ?></p>
					</div>

					<div class="feature-card" style="text-align: left;">
						<div class="feature-icon"><i class="fa-solid fa-file-contract"></i></div>
						<h3 style="color: var(--secondary-color);"><?php esc_html_e('Customs & Documentation', 'nitya-naturals'); ?></h3>
						<p><?php esc_html_e('Full support with Certificate of Analysis (COA), Certificate of Free Sale, Phytosanitary Certificate, Bill of Lading, and US FDA / EU export documentation.', 'nitya-naturals'); ?></p>
					</div>

					<div class="feature-card" style="text-align: left;">
						<div class="feature-icon"><i class="fa-solid fa-plane-departure"></i></div>
						<h3 style="color: var(--secondary-color);"><?php esc_html_e('Flexible Freight Options', 'nitya-naturals'); ?></h3>
						<p><?php esc_html_e('Choice of air freight express or sea freight container shipments depending on budget, urgency, and volume requirements.', 'nitya-naturals'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
