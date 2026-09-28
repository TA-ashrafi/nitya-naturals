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

<?php
$phone      = get_theme_mod('nitya_phone', '+91 75240 98888');
$email      = get_theme_mod('nitya_email', 'exports@nityanaturals.com');
$wa_num     = get_theme_mod('nitya_whatsapp', '917524098888');
?>

<div id="top" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'nitya-naturals'); ?></a>

	<!-- ============ UTILITY BAR ============ -->
	<div class="topbar">
	  <div class="wrap">
	    <span>Export division of <b>Baidyanath Ayurveda Naini</b> &nbsp;·&nbsp; Ayurveda since 1917</span>
	    <span class="hide-sm"><a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a> &nbsp;·&nbsp; <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></span>
	  </div>
	</div>

	<!-- ============ HEADER ============ -->
	<header class="site-head" id="siteHead">
	  <div class="wrap head-inner">
	    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Nitya Naturals home">
	      <?php if (has_custom_logo()) : ?>
	        <?php the_custom_logo(); ?>
	      <?php else : ?>
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
	      <?php endif; ?>
	    </a>

	    <nav class="nav" id="navLinks">
	      <a href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php esc_html_e('About Us', 'nitya-naturals'); ?></a>

	      <!-- Products Dropdown -->
	      <div class="nav-item dropdown">
	        <a href="javascript:void(0)" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><?php esc_html_e('Products', 'nitya-naturals'); ?> <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></a>
	        <div class="dropdown-menu">
	          <a href="<?php echo esc_url(home_url('/ayurvedic-medicine-manufacturer/')); ?>"><?php esc_html_e('Product Range', 'nitya-naturals'); ?></a>
	          <a href="<?php echo esc_url(home_url('/best-manufacturer-of-ayurved-medicines/')); ?>"><?php esc_html_e('Product Categories', 'nitya-naturals'); ?></a>
	          <a href="<?php echo esc_url(home_url('/how-to-register-ayurvedic-medicine-in-india/')); ?>"><?php esc_html_e('Product Development', 'nitya-naturals'); ?></a>
	        </div>
	      </div>

	      <!-- Services Dropdown -->
	      <div class="nav-item dropdown">
	        <a href="javascript:void(0)" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><?php esc_html_e('Services', 'nitya-naturals'); ?> <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg></a>
	        <div class="dropdown-menu">
	          <a href="<?php echo esc_url(home_url('/herbal-manufacturer/')); ?>"><?php esc_html_e('Planning & Selection', 'nitya-naturals'); ?></a>
	          <a href="<?php echo esc_url(home_url('/third-party-manufacturing/')); ?>"><?php esc_html_e('Manufacturing', 'nitya-naturals'); ?></a>
	          <a href="<?php echo esc_url(home_url('/private-label/')); ?>"><?php esc_html_e('Packaging & Labeling', 'nitya-naturals'); ?></a>
	          <a href="<?php echo esc_url(home_url('/export-medicine/')); ?>"><?php esc_html_e('Fulfillment & Transport', 'nitya-naturals'); ?></a>
	        </div>
	      </div>

	      <a href="<?php echo esc_url(home_url('/start-your-own-supplement-business/')); ?>"><?php esc_html_e('Contact Us', 'nitya-naturals'); ?></a>
	    </nav>

	    <div class="nav-cta">
	      <a class="btn btn--solid" href="<?php echo esc_url(is_front_page() ? '#factory' : home_url('/#factory')); ?>"><?php esc_html_e('Book a Factory Visit', 'nitya-naturals'); ?></a>
	      <button class="burger" id="burger" aria-label="Menu" aria-expanded="false"><span></span></button>
	    </div>
	  </div>

	  <!-- Full Screen Mobile Overlay Menu -->
	  <div class="mobile-panel" id="mobilePanel">
	    <div class="mobile-panel-inner wrap">
	      <a href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php esc_html_e('About Us', 'nitya-naturals'); ?></a>

	      <div class="mobile-sub-group">
	        <span class="mobile-group-title"><?php esc_html_e('Products', 'nitya-naturals'); ?></span>
	        <a href="<?php echo esc_url(home_url('/ayurvedic-medicine-manufacturer/')); ?>"><?php esc_html_e('Product Range', 'nitya-naturals'); ?></a>
	        <a href="<?php echo esc_url(home_url('/best-manufacturer-of-ayurved-medicines/')); ?>"><?php esc_html_e('Product Categories', 'nitya-naturals'); ?></a>
	        <a href="<?php echo esc_url(home_url('/how-to-register-ayurvedic-medicine-in-india/')); ?>"><?php esc_html_e('Product Development', 'nitya-naturals'); ?></a>
	      </div>

	      <div class="mobile-sub-group">
	        <span class="mobile-group-title"><?php esc_html_e('Services', 'nitya-naturals'); ?></span>
	        <a href="<?php echo esc_url(home_url('/herbal-manufacturer/')); ?>"><?php esc_html_e('Planning & Selection', 'nitya-naturals'); ?></a>
	        <a href="<?php echo esc_url(home_url('/third-party-manufacturing/')); ?>"><?php esc_html_e('Manufacturing', 'nitya-naturals'); ?></a>
	        <a href="<?php echo esc_url(home_url('/private-label/')); ?>"><?php esc_html_e('Packaging & Labeling', 'nitya-naturals'); ?></a>
	        <a href="<?php echo esc_url(home_url('/export-medicine/')); ?>"><?php esc_html_e('Fulfillment & Transport', 'nitya-naturals'); ?></a>
	      </div>

	      <a href="<?php echo esc_url(home_url('/start-your-own-supplement-business/')); ?>"><?php esc_html_e('Contact Us', 'nitya-naturals'); ?></a>
	      <a class="btn btn--gold mobile-cta-btn" href="<?php echo esc_url(is_front_page() ? '#factory' : home_url('/#factory')); ?>"><?php esc_html_e('Book a Factory Visit', 'nitya-naturals'); ?></a>
	    </div>
	  </div>
	</header>
