<?php
/**
 * Front Page Template
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main id="primary" class="site-main">

	<!-- Hero Banner Section -->
	<?php $hero_img = get_theme_mod('nitya_home_hero_img', $theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.jpg'); ?>
	<?php if ($hero_img) : ?>
	<section class="hero-banner">
		<img src="<?php echo esc_url($hero_img); ?>" alt="Nitya Naturals Luxury Ayurveda">
	</section>
	<?php endif; ?>

	<!-- About Us Summary Section -->
	<section class="section">
		<div class="container">
			<h1 class="section-title"><?php echo esc_html(get_theme_mod('nitya_home_about_title', 'ABOUT US')); ?></h1>
			<p style="text-align: center; max-width: 950px; margin: 0 auto 20px;">
				<?php echo esc_html(get_theme_mod('nitya_home_about_text', 'Nitya Naturals Private Limited is a private labeling and contract manufacturing company as well as the export division of Baidyanath Ayurveda Naini. Nitya Naturals is backed by the pioneers of Ayurveda since 1917 and headed by the President of Baidyanath (Mr. Dhananjay Sharma). Our GMP certified facility is equipped with modern machinery and the staff is trained for compliance of CGMP enforced by US FDA covering 21CFR211, 21CFR 210, 21CFR 820, ICH Q7 & ISO 9001:2008. Nitya Naturals has been manufacturing Herbal Dietary Supplements for brand owners for the last 15 years. We have made it easier for brand owners by providing them one-stop-solution for the manufacturing needs so that they can concentrate on marketing, provide products on time, within budget and faster than the competition.')); ?>
			</p>
		</div>
	</section>

	<!-- What Makes It Special Section -->
	<section class="section section-bg-light">
		<div class="container">
			<?php $special_img = get_theme_mod('nitya_home_special_img', $theme_uri . '/assets/images/What-Makes-it-Special.png'); ?>
			<?php if ($special_img) : ?>
			<div style="text-align: center; margin-bottom: 30px;">
				<img src="<?php echo esc_url($special_img); ?>" alt="One stop shop for all your manufacturing needs - Nitya Naturals" style="margin: 0 auto; border-radius: 8px;">
			</div>
			<?php endif; ?>
			<p style="text-align: center; max-width: 800px; margin: 0 auto;">
				<?php echo esc_html(get_theme_mod('nitya_home_special_text', 'In order to get started we first need to know your requirements and how we can fulfill them. You can choose from a list of our existing products and dosage forms or we can help you custom create a product of your need.')); ?>
			</p>
		</div>
	</section>

	<!-- Capabilities Section -->
	<section class="section">
		<div class="container">
			<div class="feature-grid">
				<div class="feature-card">
					<div class="feature-icon"><i class="fa-solid fa-capsules"></i></div>
					<h3><?php echo esc_html(get_theme_mod('nitya_home_dosage_title', 'DOSAGE FORM')); ?></h3>
					<p><?php echo esc_html(get_theme_mod('nitya_home_dosage_desc', 'Nitya Naturals can produce a variety of nutraceutical product forms that meet the needs of your target market and end consumer:')); ?></p>
					<?php
					$dosage_raw = get_theme_mod('nitya_home_dosage_items', "Capsules\nTablets\nSyrups\nOils\nCreams\nPastes");
					$dosage_items = array_filter(array_map('trim', explode("\n", $dosage_raw)));
					if (!empty($dosage_items)) : ?>
						<ul style="text-align: left; padding-left: 20px; list-style: disc; margin-top: 10px;">
							<?php foreach ($dosage_items as $item) : ?>
								<li><?php echo esc_html($item); ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>

				<div class="feature-card">
					<div class="feature-icon"><i class="fa-solid fa-leaf"></i></div>
					<h3><?php echo esc_html(get_theme_mod('nitya_home_existing_title', 'EXISTING PRODUCTS')); ?></h3>
					<p><?php echo esc_html(get_theme_mod('nitya_home_existing_desc', 'Choose from our pre-formulated stock product categories including:')); ?></p>
					<?php
					$existing_raw = get_theme_mod('nitya_home_existing_items', "Allergy\nCholesterol\nDiabetes\nImmunity\nKidney Care\nWeight Management");
					$existing_items = array_filter(array_map('trim', explode("\n", $existing_raw)));
					if (!empty($existing_items)) : ?>
						<ul style="text-align: left; padding-left: 20px; list-style: disc; margin-top: 10px;">
							<?php foreach ($existing_items as $item) : ?>
								<li><a href="<?php echo esc_url(home_url('/best-manufacturer-of-ayurved-medicines/')); ?>"><?php echo esc_html($item); ?></a></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>

				<div class="feature-card">
					<div class="feature-icon"><i class="fa-solid fa-flask"></i></div>
					<h3><?php echo esc_html(get_theme_mod('nitya_home_npd_title', 'NEW PRODUCT DEVELOPMENT')); ?></h3>
					<p><?php echo esc_html(get_theme_mod('nitya_home_npd_desc', 'With the knowledge and expertise of our team, we help you custom create any product according to your requirements:')); ?></p>
					<?php
					$npd_raw = get_theme_mod('nitya_home_npd_items', "New Product Name\nIntended Composition\nProduct Functions\nProduct Position\nDosage Form & MOQ");
					$npd_items = array_filter(array_map('trim', explode("\n", $npd_raw)));
					if (!empty($npd_items)) : ?>
						<ul style="text-align: left; padding-left: 20px; list-style: disc; margin-top: 10px;">
							<?php foreach ($npd_items as $item) : ?>
								<li><?php echo esc_html($item); ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<p style="margin-top: 15px;"><a href="<?php echo esc_url(home_url('/how-to-register-ayurvedic-medicine-in-india/')); ?>" class="btn-submit" style="padding: 8px 18px; font-size: 13px;"><?php esc_html_e('Fill Development Form', 'nitya-naturals'); ?></a></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Mockup Showcase Section -->
	<?php $mockup_img = get_theme_mod('nitya_home_mockup_img', $theme_uri . '/assets/images/Free_Dropddper_Bottle_Mockup-copy-1024x768.jpg'); ?>
	<?php if ($mockup_img) : ?>
	<section class="section section-bg-light">
		<div class="container" style="text-align: center;">
			<img src="<?php echo esc_url($mockup_img); ?>" alt="Nitya Naturals Oils & Liquids" style="margin: 0 auto; max-width: 750px; border-radius: 8px;">
		</div>
	</section>
	<?php endif; ?>

	<!-- Services Process Section -->
	<section class="section">
		<div class="container">
			<h2 class="section-title"><?php echo esc_html(get_theme_mod('nitya_home_services_title', 'OUR SERVICES')); ?></h2>
			<p style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
				<?php echo esc_html(get_theme_mod('nitya_home_services_desc', 'Our team assists you with a step-by-step process to give you and your brand a stress-free and reliable method for fulfilling all your manufacturing and private labeling requirements.')); ?>
			</p>

			<div class="feature-grid">
				<div class="feature-card">
					<div class="feature-icon"><i class="fa-regular fa-calendar-check"></i></div>
					<h3><a href="<?php echo esc_url(home_url('/herbal-manufacturer/')); ?>"><?php esc_html_e('Planning & Selection', 'nitya-naturals'); ?></a></h3>
					<p><?php esc_html_e('Select existing formulas or collaborate on custom formulations suited to your market.', 'nitya-naturals'); ?></p>
				</div>
				<div class="feature-card">
					<div class="feature-icon"><i class="fa-solid fa-gears"></i></div>
					<h3><a href="<?php echo esc_url(home_url('/third-party-manufacturing/')); ?>"><?php esc_html_e('Manufacturing', 'nitya-naturals'); ?></a></h3>
					<p><?php esc_html_e('State-of-the-art cGMP production across tablets, capsules, liquids, and pastes.', 'nitya-naturals'); ?></p>
				</div>
				<div class="feature-card">
					<div class="feature-icon"><i class="fa-solid fa-box-open"></i></div>
					<h3><a href="<?php echo esc_url(home_url('/private-label/')); ?>"><?php esc_html_e('Packaging & Labeling', 'nitya-naturals'); ?></a></h3>
					<p><?php esc_html_e('Full design and compliance labeling support in food-grade containers.', 'nitya-naturals'); ?></p>
				</div>
				<div class="feature-card">
					<div class="feature-icon"><i class="fa-solid fa-truck-fast"></i></div>
					<h3><a href="<?php echo esc_url(home_url('/export-medicine/')); ?>"><?php esc_html_e('Fulfillment & Transport', 'nitya-naturals'); ?></a></h3>
					<p><?php esc_html_e('Seamless logistics and export delivery across international markets.', 'nitya-naturals'); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Chyawanprash Facility Section -->
	<section class="section section-bg-light">
		<div class="container">
			<h2 class="section-title"><?php echo esc_html(get_theme_mod('nitya_home_chyawanprash_title', 'STATE OF THE ART CHYAWANPRASH FACILITY')); ?></h2>
			<p style="text-align: center; max-width: 900px; margin: 0 auto 20px;">
				<?php echo esc_html(get_theme_mod('nitya_home_chyawanprash_text', 'We here at Nitya Naturals have created a state of the art Chyawanprash facility with GMP certified machinery. Our facility is located in the heart of the Amla belt at Prayagraj, 2 km from the holy sangam and 5 km from the Ashram of sage Acharya Bharadwaj. The proximity to the Amla forest allows us to get fresh organic Amla straight from trees to the pan. This facility was created to manufacture Chyawanprash for various brands across the world with the highest level of quality.')); ?>
			</p>
			<?php $chyawanprash_img = get_theme_mod('nitya_home_chyawanprash_img', $theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.pdf-1536x768.png'); ?>
			<?php if ($chyawanprash_img) : ?>
			<div style="text-align: center; margin-top: 30px;">
				<img src="<?php echo esc_url($chyawanprash_img); ?>" alt="Chyawanprash Facility" style="margin: 0 auto; max-width: 850px; border-radius: 8px;">
			</div>
			<?php endif; ?>
		</div>
	</section>

	<!-- Book Factory Visit Callout -->
	<section class="section" style="background: var(--primary-color); color: #fff; text-align: center;">
		<div class="container">
			<h2 style="color: #fff; font-size: 28px; margin-bottom: 15px;"><?php echo esc_html(get_theme_mod('nitya_home_visit_title', 'BOOK A FACTORY VISIT NOW')); ?></h2>
			<p style="color: rgba(255,255,255,0.9); font-size: 16px; margin-bottom: 25px;">
				<?php echo esc_html(get_theme_mod('nitya_home_visit_text', 'Contact us on WhatsApp @ +91 75240 98888 or email us at ald.nitya@gmail.com')); ?>
			</p>
			<?php $whatsapp_num = get_theme_mod('nitya_whatsapp', '919935556123'); ?>
			<a href="https://wa.me/<?php echo esc_attr($whatsapp_num); ?>" target="_blank" rel="noopener noreferrer" class="btn-submit" style="background: #25d366; color: #fff; font-size: 16px; padding: 14px 40px;">
				<i class="fa-brands fa-whatsapp"></i> <?php esc_html_e('Connect on WhatsApp', 'nitya-naturals'); ?>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
