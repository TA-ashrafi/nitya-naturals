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

<div id="top" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'nitya-naturals'); ?></a>

	<!-- ============ UTILITY BAR ============ -->
	<div class="topbar">
	  <div class="wrap">
	    <span>Export division of <b>Baidyanath Ayurveda Naini</b> &nbsp;·&nbsp; Ayurveda since 1917</span>
	    <span class="hide-sm"><a href="tel:+917524098888">+91 75240 98888</a> &nbsp;·&nbsp; <a href="mailto:exports@nityanaturals.com">exports@nityanaturals.com</a></span>
	  </div>
	</div>

	<!-- ============ HEADER ============ -->
	<header class="site-head" id="siteHead">
	  <div class="wrap head-inner">
	    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Nitya Naturals home">
	      <svg viewBox="0 0 48 48" fill="none" aria-hidden="true">
	        <circle cx="24" cy="24" r="22.5" stroke="#C9A227" stroke-width="1.2"/>
	        <path d="M24 37c0-9 5-15 12-17-1 10-6 15-12 17Z" fill="#6B8F71"/>
	        <path d="M24 37c0-9-5-15-12-17 1 10 6 15 12 17Z" fill="#2A5747"/>
	        <path d="M24 37V19" stroke="#0F2A21" stroke-width="1.4" stroke-linecap="round"/>
	        <circle cx="24" cy="14" r="3.4" fill="#C9A227"/>
	      </svg>
	      <span>
	        <span class="brand-name">NITYA</span>
	        <span class="brand-sub">Naturals</span>
	      </span>
	    </a>

	    <nav class="nav" id="navLinks">
	      <a href="<?php echo esc_url(is_front_page() ? '#about' : home_url('/#about')); ?>"><?php esc_html_e('About Us', 'nitya-naturals'); ?></a>
	      <a href="<?php echo esc_url(is_front_page() ? '#products' : home_url('/#products')); ?>"><?php esc_html_e('Products', 'nitya-naturals'); ?></a>
	      <a href="<?php echo esc_url(is_front_page() ? '#services' : home_url('/#services')); ?>"><?php esc_html_e('Services', 'nitya-naturals'); ?></a>
	      <a href="<?php echo esc_url(is_front_page() ? '#contact' : home_url('/#contact')); ?>"><?php esc_html_e('Contact Us', 'nitya-naturals'); ?></a>
	    </nav>

	    <div class="nav-cta">
	      <a class="btn btn--solid" href="<?php echo esc_url(is_front_page() ? '#factory' : home_url('/#factory')); ?>"><?php esc_html_e('Book a Factory Visit', 'nitya-naturals'); ?></a>
	      <button class="burger" id="burger" aria-label="Menu" aria-expanded="false"><span></span></button>
	    </div>
	  </div>
	  <div class="mobile-panel" id="mobilePanel">
	    <a href="<?php echo esc_url(is_front_page() ? '#about' : home_url('/#about')); ?>"><?php esc_html_e('About Us', 'nitya-naturals'); ?></a>
	    <a href="<?php echo esc_url(is_front_page() ? '#products' : home_url('/#products')); ?>"><?php esc_html_e('Products', 'nitya-naturals'); ?></a>
	    <a href="<?php echo esc_url(is_front_page() ? '#services' : home_url('/#services')); ?>"><?php esc_html_e('Services', 'nitya-naturals'); ?></a>
	    <a href="<?php echo esc_url(is_front_page() ? '#contact' : home_url('/#contact')); ?>"><?php esc_html_e('Contact Us', 'nitya-naturals'); ?></a>
	    <a href="<?php echo esc_url(is_front_page() ? '#factory' : home_url('/#factory')); ?>"><?php esc_html_e('Book a Factory Visit', 'nitya-naturals'); ?></a>
	  </div>
	</header>
