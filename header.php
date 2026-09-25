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
				<i class="fa-solid fa-bars"></i>
			</button>

		</div>

		<!-- MOBILE MENU -->
		<div class="mobile-menu-wrapper" id="mobile-menu-wrapper">
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
		</div>

	</header>