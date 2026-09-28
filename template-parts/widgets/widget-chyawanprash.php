<?php
/**
 * Widget Template: Chyawanprash Facility Section
 */
$theme_uri = get_template_directory_uri();
$facility_img = isset($args['img']) && !empty($args['img']) ? $args['img'] : $theme_uri . '/assets/images/Nitya-Naturals-Brand-Book01-1.pdf-1536x768.png';
?>
<section class="section" id="factory">
  <div class="wrap facility">
    <div class="facility-art" data-reveal>
      <img src="<?php echo esc_url($facility_img); ?>" alt="<?php esc_attr_e('Inside the GMP certified Nitya Naturals chyawanprash facility in Prayagraj', 'nitya-naturals'); ?>" loading="lazy" width="1100" height="712" />
      <span class="facility-tag"><?php esc_html_e('Prayagraj · Uttar Pradesh', 'nitya-naturals'); ?></span>
    </div>
    <div data-reveal>
      <div class="eyebrow-rule"><span class="kicker kicker--gold"><?php esc_html_e('Facility', 'nitya-naturals'); ?></span></div>
      <h2 class="h2"><?php esc_html_e('A state-of-the-art', 'nitya-naturals'); ?> <em><?php esc_html_e('Chyawanprash facility.', 'nitya-naturals'); ?></em></h2>
      <p class="lead" style="margin-top:20px"><?php esc_html_e('We have created a state-of-the-art chyawanprash facility with GMP certified machinery, located in the heart of the amla belt at Prayagraj — 2 km from the holy Sangam and 5 km from the ashram of sage Acharya Bharadwaj.', 'nitya-naturals'); ?></p>
      <p class="lead" style="margin-top:16px"><?php esc_html_e('The proximity to the amla forest allows us to get fresh organic amla straight from the tree to the pan. The facility was created to manufacture chyawanprash for brands across the world at the highest level of quality.', 'nitya-naturals'); ?></p>
      <div class="chips">
        <span class="chip"><?php esc_html_e('Fresh organic amla', 'nitya-naturals'); ?></span>
        <span class="chip"><?php esc_html_e('GMP machinery', 'nitya-naturals'); ?></span>
        <span class="chip"><?php esc_html_e('Tree-to-pan sourcing', 'nitya-naturals'); ?></span>
        <span class="chip"><?php esc_html_e('Worldwide brands', 'nitya-naturals'); ?></span>
      </div>
      <div class="hero-actions" style="margin-top:6px">
        <a class="btn btn--solid" href="https://wa.me/917524098888?text=I%20would%20like%20to%20book%20a%20factory%20visit%20to%20Nitya%20Naturals" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Book a Factory Visit Now', 'nitya-naturals'); ?></a>
        <a class="btn btn--ghost" href="mailto:ald.nitya@gmail.com"><?php esc_html_e('Email the Team', 'nitya-naturals'); ?></a>
      </div>
    </div>
  </div>
</section>
