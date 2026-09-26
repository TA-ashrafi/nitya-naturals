<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'nitya-naturals'); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-inner">

			<!-- LEFT NAVIGATION (ABOUT US + PRODUCTS) -->
			<nav class="nav-left">
				<ul class="menu">
					<li><a href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php esc_html_e('ABOUT US', 'nitya-naturals'); ?></a></li>
					<li class="menu-item-has-children">
						<a href="#"><?php esc_html_e('PRODUCTS', 'nitya-naturals'); ?></a>
						<ul class="sub-menu">
							<li><a href="<?php echo esc_url(home_url('/ayurvedic-medicine-manufacturer/')); ?>"><?php esc_html_e('Product Range', 'nitya-naturals'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/best-manufacturer-of-ayurved-medicines/')); ?>"><?php esc_html_e('Product Categories', 'nitya-naturals'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/how-to-register-ayurvedic-medicine-in-india/')); ?>"><?php esc_html_e('Product Development Form', 'nitya-naturals'); ?></a></li>
						</ul>
					</li>
				</ul>
			</nav>

			<!-- CENTER LOGO -->
			<div class="site-logo">
				<?php
				if (has_custom_logo()) {
					the_custom_logo();
				} else {
					$logo_url = get_template_directory_uri() . '/assets/images/Nitya-Naturals_FINAL-WhiteLogo.png';
					?>
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="logo-link">
						<img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?> Logo" class="logo-img">
					</a>
					<?php
				}
				?>
			</div>

			<!-- RIGHT NAVIGATION (SERVICES + CONTACT US) -->
			<nav class="nav-right">
				<ul class="menu">
					<li class="menu-item-has-children">
						<a href="#"><?php esc_html_e('SERVICES', 'nitya-naturals'); ?></a>
						<ul class="sub-menu">
							<li><a href="<?php echo esc_url(home_url('/herbal-manufacturer/')); ?>"><?php esc_html_e('Planning & Selection', 'nitya-naturals'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/third-party-manufacturing/')); ?>"><?php esc_html_e('Manufacturing', 'nitya-naturals'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/private-label/')); ?>"><?php esc_html_e('Packaging & Labeling', 'nitya-naturals'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/export-medicine/')); ?>"><?php esc_html_e('Fulfillment & Transportation', 'nitya-naturals'); ?></a></li>
						</ul>
					</li>
					<li><a href="<?php echo esc_url(home_url('/start-your-own-supplement-business/')); ?>"><?php esc_html_e('CONTACT US', 'nitya-naturals'); ?></a></li>
				</ul>
			</nav>

			<!-- MOBILE TOGGLE -->
			<button class="mobile-menu-toggle" aria-controls="mobile-menu-wrapper" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle Navigation', 'nitya-naturals'); ?>">
				<i class="fa-solid fa-bars mobile-menu-icon"></i>
				<span class="mobile-menu-label"><?php esc_html_e('MENU', 'nitya-naturals'); ?></span>
			</button>

		</div>

		<!-- MOBILE OVERLAY & FULLSCREEN MENU -->
		<div class="mobile-menu-overlay" id="mobile-menu-overlay"></div>

		<div class="mobile-menu-wrapper" id="mobile-menu-wrapper" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e('Mobile Navigation', 'nitya-naturals'); ?>">
			<div class="mobile-menu-header">
				<div class="mobile-menu-brand">
					<?php
					$mobile_logo = get_template_directory_uri() . '/assets/images/Nitya-Naturals_FINAL-WhiteLogo.png';
					?>
					<img src="<?php echo esc_url($mobile_logo); ?>" alt="<?php bloginfo('name'); ?>" class="mobile-logo-img">
				</div>
				<button class="mobile-menu-close" id="mobile-menu-close" aria-label="<?php esc_attr_e('Close Menu', 'nitya-naturals'); ?>">
					<i class="fa-solid fa-xmark"></i>
				</button>
			</div>

			<div class="mobile-menu-content">
				<ul class="menu">
					<li><a href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php esc_html_e('ABOUT US', 'nitya-naturals'); ?></a></li>
					<li class="menu-item-has-children">
						<div class="mobile-parent-wrapper">
							<a href="<?php echo esc_url(home_url('/ayurvedic-medicine-manufacturer/')); ?>"><?php esc_html_e('PRODUCTS', 'nitya-naturals'); ?></a>
							<button type="button" class="submenu-toggle-btn" aria-label="<?php esc_attr_e('Toggle Submenu', 'nitya-naturals'); ?>">
								<i class="fa-solid fa-chevron-down"></i>
							</button>
						</div>
						<ul class="sub-menu">
							<li><a href="<?php echo esc_url(home_url('/ayurvedic-medicine-manufacturer/')); ?>"><?php esc_html_e('Product Range', 'nitya-naturals'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/best-manufacturer-of-ayurved-medicines/')); ?>"><?php esc_html_e('Product Categories', 'nitya-naturals'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/how-to-register-ayurvedic-medicine-in-india/')); ?>"><?php esc_html_e('Product Development Form', 'nitya-naturals'); ?></a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<div class="mobile-parent-wrapper">
							<a href="<?php echo esc_url(home_url('/herbal-manufacturer/')); ?>"><?php esc_html_e('SERVICES', 'nitya-naturals'); ?></a>
							<button type="button" class="submenu-toggle-btn" aria-label="<?php esc_attr_e('Toggle Submenu', 'nitya-naturals'); ?>">
								<i class="fa-solid fa-chevron-down"></i>
							</button>
						</div>
						<ul class="sub-menu">
							<li><a href="<?php echo esc_url(home_url('/herbal-manufacturer/')); ?>"><?php esc_html_e('Planning & Selection', 'nitya-naturals'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/third-party-manufacturing/')); ?>"><?php esc_html_e('Manufacturing', 'nitya-naturals'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/private-label/')); ?>"><?php esc_html_e('Packaging & Labeling', 'nitya-naturals'); ?></a></li>
							<li><a href="<?php echo esc_url(home_url('/export-medicine/')); ?>"><?php esc_html_e('Fulfillment & Transportation', 'nitya-naturals'); ?></a></li>
						</ul>
					</li>
					<li><a href="<?php echo esc_url(home_url('/start-your-own-supplement-business/')); ?>"><?php esc_html_e('CONTACT US', 'nitya-naturals'); ?></a></li>
				</ul>

				<div class="mobile-menu-footer">
					<a href="<?php echo esc_url(home_url('/start-your-own-supplement-business/')); ?>" class="mobile-cta-btn">
						<i class="fa-solid fa-paper-plane"></i> <?php esc_html_e('Get In Touch', 'nitya-naturals'); ?>
					</a>
					<div class="mobile-contact-info">
						<a href="tel:+917524098888"><i class="fa-solid fa-phone"></i> +91 75240 98888</a>
						<a href="mailto:exports@nityanaturals.com"><i class="fa-solid fa-envelope"></i> exports@nityanaturals.com</a>
					</div>
				</div>
			</div>
		</div>

	</header>