<?php
/**
 * Widget Template: Hero Banner Section
 */
$theme_uri = get_template_directory_uri();
$hero_img  = isset($args['hero_img']) && !empty($args['hero_img']) ? $args['hero_img'] : $theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.jpg';
?>
<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <div class="eyebrow-rule"><span class="kicker"><?php esc_html_e('Private Label · Contract Manufacturing', 'nitya-naturals'); ?></span></div>
      <h1><?php esc_html_e('We manufacture the', 'nitya-naturals'); ?> <em><?php esc_html_e('Ayurvedic brand', 'nitya-naturals'); ?></em> <?php esc_html_e('you are building.', 'nitya-naturals'); ?></h1>
      <p class="hero-sub"><?php esc_html_e('Nitya Naturals gives brand owners a one-stop solution for manufacturing — so you can concentrate on marketing. Your formulas, your label, our cGMP line. On time, within budget, faster than the competition.', 'nitya-naturals'); ?></p>
      <div class="hero-actions">
        <a class="btn btn--gold" href="#develop"><?php esc_html_e('Request a Quote', 'nitya-naturals'); ?>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a class="btn btn--ghost" href="https://wa.me/917524098888" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Chat on WhatsApp', 'nitya-naturals'); ?></a>
      </div>

      <div class="stats">
        <div class="stat"><div class="stat-num"><span data-count="15">0</span></div><div class="stat-label"><?php esc_html_e('Years manufacturing herbal supplements', 'nitya-naturals'); ?></div></div>
        <div class="stat"><div class="stat-num"><span data-count="6">0</span></div><div class="stat-label"><?php esc_html_e('Dosage forms on one line', 'nitya-naturals'); ?></div></div>
        <div class="stat"><div class="stat-num"><span data-count="1917">0</span></div><div class="stat-label"><?php esc_html_e('Ayurvedic heritage since', 'nitya-naturals'); ?></div></div>
        <div class="stat"><div class="stat-num"><span data-count="21">0</span><sup>CFR</sup></div><div class="stat-label"><?php esc_html_e('US FDA cGMP compliance', 'nitya-naturals'); ?></div></div>
      </div>
    </div>

    <div class="hero-art" data-reveal>
      <span class="hero-corner hero-corner--tr"></span>
      <span class="hero-corner hero-corner--bl"></span>
      <div class="hero-frame">
        <img src="<?php echo esc_url($hero_img); ?>" alt="<?php esc_attr_e('Fresh amla harvested from the Prayagraj amla belt', 'nitya-naturals'); ?>" width="860" height="1075" />
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
