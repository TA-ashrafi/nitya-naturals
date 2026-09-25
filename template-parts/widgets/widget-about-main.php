<?php
/**
 * Widget Template: About Us Main Section
 */
$header_title = isset($args['header_title']) ? $args['header_title'] : get_theme_mod('nitya_about_header_title', 'ABOUT US');
$header_sub   = isset($args['header_sub']) ? $args['header_sub'] : get_theme_mod('nitya_about_header_sub', 'One Stop Solution for Herbal Preparations, Packaging & Delivery');

$p1 = isset($args['p1']) ? $args['p1'] : get_theme_mod('nitya_about_p1', 'About Us – Nitya Naturals Private Limited is a One Stop Solution for Herbal Preparations, Packaging & Delivery. Nitya Naturals Private Limited is a private labeling / third-party / contract manufacturing company as well as the export division of Baidyanath Ayurveda Naini. Nitya Naturals is backed by the pioneers of Ayurveda, since 1917. It is a comprehensive and scientific system of natural health care unit headed by the President of Baidyanath (Mr. Dhananjay Sharma). Nitya Naturals focuses on the complete revival of ancient Ayurveda to preserve health.');
$p2 = isset($args['p2']) ? $args['p2'] : get_theme_mod('nitya_about_p2', 'We are a research based organization and many of our formulations have had extremely encouraging results. Our strong research allows us to fulfill contract manufacturing of ayurvedic medicines. Our GMP certified facility is equipped with modern machinery and the staff is trained for compliance of CGMP enforced by US FDA covering 21CFR211, 21CFR 210, 21CFR 820, ICH Q7 & ISO 9001:2008. The company is presently engaged in the manufacturing of Ayurvedic formulations in the form of capsules, tablets, syrups and oils.');
$p3 = isset($args['p3']) ? $args['p3'] : get_theme_mod('nitya_about_p3', 'The head office and the manufacturing unit of Nitya Naturals is at Allahabad. Nitya Naturals has been manufacturing Herbal Dietary Supplements for brand owners for the last 15 years. Our factory is equipped with the cutting-edge machinery in pharmaceutical production and employs state of art technology to ensure a high degree of quality production conforming to the highest international standards. We have made it easier for brand owners by providing them one-stop solution for the manufacturing needs so that they can concentrate on marketing while we provide products on time, within budget and faster than the competition.');
$p4 = isset($args['p4']) ? $args['p4'] : get_theme_mod('nitya_about_p4', 'Though we employ the most modern techniques, we still take care to see that the preparation adheres strictly to the norms and procedures laid out in the ancient books of Ayurveda. This discipline, experience of four generations and quality in our output makes us the most preferred brand for contact manufacturing of ayurvedic medicines.');
?>
<div class="nitya-widget-about-main">
	<?php if (!empty($header_title)) : ?>
	<div class="page-header-banner">
		<div class="container">
			<h1><?php echo esc_html($header_title); ?></h1>
			<?php if ($header_sub) : ?><p><?php echo esc_html($header_sub); ?></p><?php endif; ?>
		</div>
	</div>
	<?php endif; ?>

	<section class="section">
		<div class="container">
			<div style="max-width: 900px; margin: 0 auto; text-align: justify;">
				<?php if ($p1) : ?><p><?php echo esc_html($p1); ?></p><?php endif; ?>
				<?php if ($p2) : ?><p><?php echo esc_html($p2); ?></p><?php endif; ?>
				<?php if ($p3) : ?><p><?php echo esc_html($p3); ?></p><?php endif; ?>
				<?php if ($p4) : ?><p><?php echo esc_html($p4); ?></p><?php endif; ?>
			</div>
		</div>
	</section>
</div>
