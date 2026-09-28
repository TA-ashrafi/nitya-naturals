<?php
/**
 * Widget Template: Hero Banner Section
 */
$theme_uri = get_template_directory_uri();
$hero_img  = isset($args['hero_img']) && !empty($args['hero_img']) ? $args['hero_img'] : $theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.jpg';

$kicker = get_theme_mod('nitya_hero_kicker', __('Private Label · Contract Manufacturing', 'nitya-naturals'));
$title  = get_theme_mod('nitya_hero_title', __('We manufacture the Ayurvedic brand you are building.', 'nitya-naturals'));
$sub    = get_theme_mod('nitya_hero_sub', __('Nitya Naturals gives brand owners a one-stop solution for manufacturing — so you can concentrate on marketing. Your formulas, your label, our cGMP line. On time, within budget, faster than the competition.', 'nitya-naturals'));
$wa_num = get_theme_mod('nitya_whatsapp', '917524098888');
?>
<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <div class="eyebrow-rule"><span class="kicker"><?php echo esc_html($kicker); ?></span></div>
      <h1><?php echo wp_kses_post($title); ?></h1>
      <p class="hero-sub"><?php echo esc_html($sub); ?></p>
      <div class="hero-actions">
        <a class="btn btn--gold" href="#develop"><?php esc_html_e('Request a Quote', 'nitya-naturals'); ?>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a class="btn btn--ghost" href="<?php echo esc_url('https://wa.me/' . preg_replace('/\D/', '', $wa_num)); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Chat on WhatsApp', 'nitya-naturals'); ?></a>
      </div>
    </div>

    <div class="hero-art" data-reveal>
      <span class="hero-corner hero-corner--tr"></span>
      <span class="hero-corner hero-corner--bl"></span>
      <div class="hero-frame">
        <img src="<?php echo esc_url($hero_img); ?>" alt="<?php esc_attr_e('Nitya Naturals Facility', 'nitya-naturals'); ?>" width="860" height="1075" />
      </div>
      <div class="hero-seal">
        <b><?php esc_html_e('cGMP Certified', 'nitya-naturals'); ?></b>
        <span><?php esc_html_e('21 CFR 211 · 21 CFR 210 · 21 CFR 820 · ICH Q7 · ISO 9001:2008', 'nitya-naturals'); ?></span>
      </div>
    </div>
  </div>
</section>

<!-- ============ COMPLIANCE TICKER ============ -->
<div class="ticker" aria-hidden="true">
  <div class="ticker-track">
    <span class="ticker-item">US FDA cGMP</span><span class="ticker-item">21 CFR 211</span><span class="ticker-item">21 CFR 210</span><span class="ticker-item">21 CFR 820</span><span class="ticker-item">ICH Q7</span><span class="ticker-item">ISO 9001:2008</span><span class="ticker-item">GMP Certified Machinery</span><span class="ticker-item">Export Ready Documentation</span>
    <span class="ticker-item">US FDA cGMP</span><span class="ticker-item">21 CFR 211</span><span class="ticker-item">21 CFR 210</span><span class="ticker-item">21 CFR 820</span><span class="ticker-item">ICH Q7</span><span class="ticker-item">ISO 9001:2008</span><span class="ticker-item">GMP Certified Machinery</span><span class="ticker-item">Export Ready Documentation</span>
  </div>
</div>
