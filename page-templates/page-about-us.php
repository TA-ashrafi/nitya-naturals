<?php
/**
 * Template Name: About Us
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="page-header-banner">
		<div class="container">
			<h1><?php echo esc_html(get_theme_mod('nitya_about_header_title', 'ABOUT US')); ?></h1>
			<p><?php echo esc_html(get_theme_mod('nitya_about_header_sub', 'One Stop Solution for Herbal Preparations, Packaging & Delivery')); ?></p>
		</div>
	</div>

	<section class="section">
		<div class="container">
			<div style="max-width: 900px; margin: 0 auto; text-align: justify;">
				<?php $p1 = get_theme_mod('nitya_about_p1', 'About Us – Nitya Naturals Private Limited is a One Stop Solution for Herbal Preparations, Packaging & Delivery. Nitya Naturals Private Limited is a private labeling / third-party / contract manufacturing company as well as the export division of Baidyanath Ayurveda Naini. Nitya Naturals is backed by the pioneers of Ayurveda, since 1917. It is a comprehensive and scientific system of natural health care unit headed by the President of Baidyanath (Mr. Dhananjay Sharma). Nitya Naturals focuses on the complete revival of ancient Ayurveda to preserve health.'); ?>
				<?php if ($p1) : ?><p><?php echo esc_html($p1); ?></p><?php endif; ?>

				<?php $p2 = get_theme_mod('nitya_about_p2', 'We are a research based organization and many of our formulations have had extremely encouraging results. Our strong research allows us to fulfill contract manufacturing of ayurvedic medicines. Our GMP certified facility is equipped with modern machinery and the staff is trained for compliance of CGMP enforced by US FDA covering 21CFR211, 21CFR 210, 21CFR 820, ICH Q7 & ISO 9001:2008. The company is presently engaged in the manufacturing of Ayurvedic formulations in the form of capsules, tablets, syrups and oils.'); ?>
				<?php if ($p2) : ?><p><?php echo esc_html($p2); ?></p><?php endif; ?>

				<?php $p3 = get_theme_mod('nitya_about_p3', 'The head office and the manufacturing unit of Nitya Naturals is at Allahabad. Nitya Naturals has been manufacturing Herbal Dietary Supplements for brand owners for the last 15 years. Our factory is equipped with the cutting-edge machinery in pharmaceutical production and employs state of art technology to ensure a high degree of quality production conforming to the highest international standards. We have made it easier for brand owners by providing them one-stop solution for the manufacturing needs so that they can concentrate on marketing while we provide products on time, within budget and faster than the competition.'); ?>
				<?php if ($p3) : ?><p><?php echo esc_html($p3); ?></p><?php endif; ?>

				<?php $p4 = get_theme_mod('nitya_about_p4', 'Though we employ the most modern techniques, we still take care to see that the preparation adheres strictly to the norms and procedures laid out in the ancient books of Ayurveda. This discipline, experience of four generations and quality in our output makes us the most preferred brand for contact manufacturing of ayurvedic medicines.'); ?>
				<?php if ($p4) : ?><p><?php echo esc_html($p4); ?></p><?php endif; ?>
			</div>
		</div>
	</section>

	<section class="section section-bg-light">
		<div class="container">
			<h2 class="section-title"><?php echo esc_html(get_theme_mod('nitya_about_legacy_title', 'Our Legacy')); ?></h2>
			<div style="max-width: 900px; margin: 0 auto; text-align: justify;">
				<?php $lp1 = get_theme_mod('nitya_about_legacy_p1', 'In the year 2013, Nitya became a manufacturing unit equipped with four dosage forms to cater to the export market. Nitya decided to start its export with USA first. By trying to achieve the most difficult quality parameters for ourselves has benefited us in many ways. We have trained and complied to the US FDA requirements; our documentation is CFR 210 211 compliant. Further our continuous drive to keep ourselves CGMP compliant has ensured that we select equipment of the same standards and follow documentation accordingly.'); ?>
				<?php if ($lp1) : ?><p><?php echo esc_html($lp1); ?></p><?php endif; ?>

				<?php $lp2 = get_theme_mod('nitya_about_legacy_p2', 'Our founder’s legacy of 100 plus years of Ayurvedic traditional knowledge and experience, has not been a deterrent to look at new developments and technologies in the field of Ayurveda. In fact, to the contrary it has helped us better understand which technologies are more suitable to adopt while maintaining the scientific requirements of Ayurveda. We take particular interest in identifying green technologies that are evolved across the world, which we feel are more adaptable. Currently we have adopted extracts from the SCFE CO2 method to standardise and increase the bio availability of some of our products.'); ?>
				<?php if ($lp2) : ?><p><?php echo esc_html($lp2); ?></p><?php endif; ?>

				<?php $lp3 = get_theme_mod('nitya_about_legacy_p3', 'With this legacy we work towards creating a disease free society. The formulations and the medicines we create are sustainably grown and harvested by local farmers. We are committed towards responsible and environment friendly practices.'); ?>
				<?php if ($lp3) : ?><p><?php echo esc_html($lp3); ?></p><?php endif; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<h2 class="section-title"><?php echo esc_html(get_theme_mod('nitya_about_founder_title', 'Our Founder')); ?></h2>
			<div style="max-width: 800px; margin: 0 auto; text-align: center;">
				<?php $founder_img = get_theme_mod('nitya_about_founder_img', ''); ?>
				<?php if ($founder_img) : ?>
					<div style="margin-bottom: 20px;">
						<img src="<?php echo esc_url($founder_img); ?>" alt="Founder" style="max-width: 220px; margin: 0 auto; border-radius: 50%; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
					</div>
				<?php endif; ?>
				<h3 style="color: var(--primary-color); margin-bottom: 5px;"><?php echo esc_html(get_theme_mod('nitya_about_founder_name', 'Mr. Dhananjay Sharma')); ?></h3>
				<p><strong><?php echo esc_html(get_theme_mod('nitya_about_founder_desig', 'President Shree Baidyanath Ayurved Pvt. Ltd. | Director Nitya Naturals Private Limited')); ?></strong></p>
				<p style="text-align: justify; margin-top: 20px;">
					<?php echo esc_html(get_theme_mod('nitya_about_founder_desc', 'Mr. Dhananjay (Founder) is a graduate from premiere institute of India and did his Masters from Bentley University USA. With an experience of more than 30 years, Mr. Dhananjay is a prolific entrepreneur and a business leader. He takes pride in Corporate Responsibilities that he holds in Baidyanath Ayurveda India’s oldest Ayurveda company. He has worked extensively to inspire the western world to adopt Ayurveda and thus, he has established a goodwill in Ayurveda and health care industry across the globe. Nitya Naturals was one of the initiatives by Mr. Dhananjay to spread Ayurveda outside India. He has vast global exposure and he has travelled extensively to more than 50 countries.')); ?>
				</p>
			</div>
		</div>
	</section>

	<section class="section section-bg-light">
		<div class="container">
			<h2 class="section-title"><?php echo esc_html(get_theme_mod('nitya_about_mgmt_title', 'Additions to our Management')); ?></h2>
			<div class="feature-grid">
				<div class="feature-card">
					<h3 style="color: var(--secondary-color);"><?php echo esc_html(get_theme_mod('nitya_about_m1_name', 'Ram Jo Sharma')); ?></h3>
					<p style="font-size: 14px; text-align: justify;">
						<?php echo esc_html(get_theme_mod('nitya_about_m1_desc', 'Ram Jo is a graduate in Marketing & Management from the University of Texas. He is a self-driven and dynamic fourth generation entrepreneur in Baidyanath Ayurveda. He handles Business development, budgeting, decision making, and team building at Nitya Naturals.')); ?>
					</p>
				</div>

				<div class="feature-card">
					<h3 style="color: var(--secondary-color);"><?php echo esc_html(get_theme_mod('nitya_about_m2_name', 'Jairaj Sharma')); ?></h3>
					<p style="font-size: 14px; text-align: justify;">
						<?php echo esc_html(get_theme_mod('nitya_about_m2_desc', 'Jairaj is also the fourth generation entrepreneur who focuses on resilience and innovation, bringing fresh ideas to research and development of new products. His prime responsibility is new business development, sales effectiveness, and new market entry.')); ?>
					</p>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
