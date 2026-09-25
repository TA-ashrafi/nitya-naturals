	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-widgets">
				<div class="footer-widget">
					<h3><?php esc_html_e('About Nitya Naturals', 'nitya-naturals'); ?></h3>
					<p><?php esc_html_e('Nitya Naturals Private Limited is a Private Labeling and Contract Manufacturing company as well as the export division of Baidyanath Ayurveda Naini.', 'nitya-naturals'); ?></p>
				</div>
				<div class="footer-widget">
					<h3><?php esc_html_e('Contact Info', 'nitya-naturals'); ?></h3>
					<p><i class="fa-solid fa-location-dot"></i> <?php echo esc_html(get_theme_mod('nitya_address', '1, Mirzapur Rd, Naini, Allahabad, Uttar Pradesh')); ?></p>
					<p><i class="fa-solid fa-phone"></i> <?php echo esc_html(get_theme_mod('nitya_phone', '+91-75240-98888')); ?></p>
					<p><i class="fa-solid fa-envelope"></i> <?php echo esc_html(get_theme_mod('nitya_email', 'exports@nityanaturals.com')); ?></p>
				</div>
				<div class="footer-widget">
					<h3><?php esc_html_e('Quick Links', 'nitya-naturals'); ?></h3>
					<?php
					if (has_nav_menu('footer')) {
						wp_nav_menu(array(
							'theme_location' => 'footer',
							'container'      => false,
						));
					} else {
						?>
						<ul class="footer-links">
							<li><a href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php esc_html_e('About Us', 'nitya-naturals'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/ayurvedic-medicine-manufacturer/')); ?>"><?php esc_html_e('Product Range', 'nitya-naturals'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/third-party-manufacturing/')); ?>"><?php esc_html_e('Manufacturing', 'nitya-naturals'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/start-your-own-supplement-business/')); ?>"><?php esc_html_e('Contact Us', 'nitya-naturals'); ?></a></li>
						</ul>
						<?php
					}
					?>
				</div>
			</div>

			<div class="footer-bottom">
				<div class="copyright-notice">
					<p><?php echo esc_html(get_theme_mod('nitya_copyright_text', '© Copyright ' . date('Y') . ' | All Rights Reserved | Nitya Naturals')); ?></p>
				</div>
				<div class="social-links">
					<?php $linkedin = get_theme_mod('nitya_linkedin', 'https://www.linkedin.com/company/nitya-naturals'); ?>
					<?php if ($linkedin) : ?>
						<a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
					<?php endif; ?>
					<?php $whatsapp = get_theme_mod('nitya_whatsapp', '919935556123'); ?>
					<?php if ($whatsapp) : ?>
						<a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</footer>

	<!-- Floating WhatsApp Button -->
	<?php $whatsapp_num = get_theme_mod('nitya_whatsapp', '919935556123'); ?>
	<?php if ($whatsapp_num) : ?>
		<a href="https://wa.me/<?php echo esc_attr($whatsapp_num); ?>" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Chat on WhatsApp', 'nitya-naturals'); ?>">
			<i class="fa-brands fa-whatsapp"></i>
		</a>
	<?php endif; ?>

	<!-- Scroll to Top -->
	<a href="#" class="back-to-top" aria-label="<?php esc_attr_e('Scroll to top', 'nitya-naturals'); ?>">
		<i class="fa-solid fa-chevron-up"></i>
	</a>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
