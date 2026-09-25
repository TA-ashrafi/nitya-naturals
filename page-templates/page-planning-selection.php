<?php
/**
 * Template Name: Planning & Selection
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main id="primary" class="site-main">
	<div class="page-header-banner">
		<div class="container">
			<h1><?php esc_html_e('Planning & Selection', 'nitya-naturals'); ?></h1>
			<p><?php esc_html_e('One of the Best Herbal Manufacturer of Products - Nitya Naturals', 'nitya-naturals'); ?></p>
		</div>
	</div>

	<section class="section">
		<div class="container">
			<div style="text-align: center; margin-bottom: 35px;">
				<img src="<?php echo esc_url($theme_uri . '/assets/images/What-Makes-it-Special.png'); ?>" alt="Planning & Selection Banner" style="margin: 0 auto; max-width: 850px; border-radius: 8px;">
			</div>

			<div style="max-width: 900px; margin: 0 auto;">
				<h2 style="color: var(--primary-color); font-size: 22px; margin-bottom: 15px;"><?php esc_html_e('PRODUCT PLANNING & SELECTION:', 'nitya-naturals'); ?></h2>

				<p style="text-align: justify;"><?php esc_html_e('Planning and Selection of Products – You can plan and select a single product targeted to a specific ailment or a range of products for various ailments. Our in-house product experts will interact with you to arrive at that selection, with a three-step process:', 'nitya-naturals'); ?></p>

				<ul style="padding-left: 20px; list-style-type: decimal; margin-bottom: 25px; line-height: 1.8;">
					<li><strong><?php esc_html_e('Step 1:', 'nitya-naturals'); ?></strong> <?php esc_html_e('You can choose from the range of products already registered with us; our experts will engage with you to complete that selection.', 'nitya-naturals'); ?></li>
					<li><strong><?php esc_html_e('Step 2:', 'nitya-naturals'); ?></strong> <?php esc_html_e('You may choose to give your own formulation. In that case we would require adequate time for registering the product before we commence manufacturing.', 'nitya-naturals'); ?></li>
					<li><strong><?php esc_html_e('Step 3:', 'nitya-naturals'); ?></strong> <?php esc_html_e('You may take advantage of the vast knowledge that exists with Nitya Naturals and do a collaborative customization for your own needs.', 'nitya-naturals'); ?></li>
				</ul>

				<h2 style="color: var(--primary-color); font-size: 22px; margin-top: 35px; margin-bottom: 15px;"><?php esc_html_e('LEGAL SPECIFICATIONS:', 'nitya-naturals'); ?></h2>
				<p style="text-align: justify;"><?php esc_html_e('As a Herbal manufacturer we make sure to comply with all legal requirements across the globe. Depending on the country of import, we work with you to comply with regulatory requirements of the segment you are working in. These would also include labeling specifications and disclosures. Further on the type and quantity of your request, we typically send a price quote within 48 hours.', 'nitya-naturals'); ?></p>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
