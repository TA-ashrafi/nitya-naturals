<?php
/**
 * Template Name: Contact Us
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main id="primary" class="site-main">
	<div class="page-header-banner">
		<div class="container">
			<h1><?php esc_html_e('Contact Us', 'nitya-naturals'); ?></h1>
			<p><?php esc_html_e('Start Your Own Supplement Business - Get In Touch With Us', 'nitya-naturals'); ?></p>
		</div>
	</div>

	<section class="section">
		<div class="container">
			<div style="text-align: center; margin-bottom: 30px;">
				<img src="<?php echo esc_url($theme_uri . '/assets/images/What-Makes-it-Special.png'); ?>" alt="Start your own supplement business" style="margin: 0 auto; max-width: 100%; height: auto; border-radius: 8px;">
			</div>

			<div class="feature-grid" style="margin-bottom: 40px;">
				<div class="feature-card">
					<div class="feature-icon"><i class="fa-solid fa-location-dot"></i></div>
					<h3><?php esc_html_e('Our Address', 'nitya-naturals'); ?></h3>
					<p><?php echo esc_html(get_theme_mod('nitya_address', '1, Mirzapur Rd, Naini, Allahabad, Uttar Pradesh')); ?></p>
				</div>

				<div class="feature-card">
					<div class="feature-icon"><i class="fa-solid fa-envelope"></i></div>
					<h3><?php esc_html_e('Email Us', 'nitya-naturals'); ?></h3>
					<p><?php echo esc_html(get_theme_mod('nitya_email', 'exports@nityanaturals.com')); ?></p>
					<p><?php echo esc_html(get_theme_mod('nitya_email_alt', 'ald.nitya@gmail.com')); ?></p>
				</div>

				<div class="feature-card">
					<div class="feature-icon"><i class="fa-solid fa-phone"></i></div>
					<h3><?php esc_html_e('Call / WhatsApp', 'nitya-naturals'); ?></h3>
					<p><?php echo esc_html(get_theme_mod('nitya_phone', '+91-75240-98888')); ?></p>
				</div>
			</div>

			<form class="custom-form" method="post" action="">
				<h2 style="text-align: center; color: var(--primary-color); margin-bottom: 25px;"><?php esc_html_e('Send Us An Email', 'nitya-naturals'); ?></h2>

				<div class="form-group">
					<label for="your-name"><?php esc_html_e('Your Name (required)', 'nitya-naturals'); ?></label>
					<input type="text" id="your-name" name="your-name" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="your-email"><?php esc_html_e('Your Email (required)', 'nitya-naturals'); ?></label>
					<input type="email" id="your-email" name="your-email" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="your-number"><?php esc_html_e('Contact Number (required)', 'nitya-naturals'); ?></label>
					<input type="text" id="your-number" name="your-number" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="your-message"><?php esc_html_e('Your Message', 'nitya-naturals'); ?></label>
					<textarea id="your-message" name="your-message" class="form-control" rows="6"></textarea>
				</div>

				<div style="text-align: center; margin-top: 20px;">
					<button type="submit" class="btn-submit"><?php esc_html_e('Send Message', 'nitya-naturals'); ?></button>
				</div>
			</form>
		</div>
	</section>
</main>

<?php
get_footer();
