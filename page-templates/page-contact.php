<?php
/**
 * Template Name: Contact Us
 */

get_header();
$theme_uri  = get_template_directory_uri();
$phone      = get_theme_mod('nitya_phone', '+91 75240 98888');
$email      = get_theme_mod('nitya_email', 'exports@nityanaturals.com');
$email_alt  = get_theme_mod('nitya_email_alt', 'ald.nitya@gmail.com');
$address    = get_theme_mod('nitya_address', '1, Mirzapur Rd, Naini, Allahabad, Uttar Pradesh, India');
$wa_num     = get_theme_mod('nitya_whatsapp', '917524098888');
?>

<main id="primary" class="site-main">
  <div class="page-header-banner">
    <div class="wrap">
      <div class="eyebrow-rule"><span class="kicker kicker--gold"><?php esc_html_e('Get In Touch', 'nitya-naturals'); ?></span></div>
      <h1><?php esc_html_e('Contact Us', 'nitya-naturals'); ?></h1>
      <p class="lead" style="color: var(--cream-deep); max-width: 60ch;"><?php esc_html_e('Start your own supplement business or inquire about contract manufacturing and private labeling.', 'nitya-naturals'); ?></p>
    </div>
  </div>

  <section class="section">
    <div class="wrap">
      <div class="contact-grid" style="margin-bottom: 60px;">
        <article class="contact-card">
          <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><path d="M21 11.5a8.4 8.4 0 0 1-12.3 7.4L3 21l2.2-5.4A8.4 8.4 0 1 1 21 11.5Z"/></svg></span>
          <h3><?php esc_html_e('WhatsApp Desk', 'nitya-naturals'); ?></h3>
          <p><?php esc_html_e('Fastest way to reach our exports & manufacturing desk.', 'nitya-naturals'); ?></p>
          <p style="margin-top:12px;"><a href="https://wa.me/<?php echo esc_attr($wa_num); ?>" style="color:var(--forest); font-weight:700;"><?php echo esc_html($phone); ?></a></p>
        </article>

        <article class="contact-card">
          <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><path d="M3 6.5h18v11H3z"/><path d="m3 7 9 6 9-6"/></svg></span>
          <h3><?php esc_html_e('Email Enquiries', 'nitya-naturals'); ?></h3>
          <p><?php esc_html_e('For development briefs, spec sheets, and price quotes.', 'nitya-naturals'); ?></p>
          <p style="margin-top:12px;"><a href="mailto:<?php echo esc_attr($email); ?>" style="color:var(--forest); font-weight:700;"><?php echo esc_html($email); ?></a><br /><a href="mailto:<?php echo esc_attr($email_alt); ?>"><?php echo esc_html($email_alt); ?></a></p>
        </article>

        <article class="contact-card">
          <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><path d="M12 21s-7-5.6-7-11a7 7 0 1 1 14 0c0 5.4-7 11-7 11Z"/><circle cx="12" cy="10" r="2.5"/></svg></span>
          <h3><?php esc_html_e('cGMP Facility', 'nitya-naturals'); ?></h3>
          <p><?php echo nl2br(esc_html($address)); ?></p>
          <p style="margin-top:12px;"><a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $phone)); ?>" style="color:var(--forest); font-weight:700;"><?php echo esc_html($phone); ?></a></p>
        </article>
      </div>

      <!-- Contact Form & Facility Information -->
      <div class="panel">
        <div class="panel-grid">
          <div>
            <span class="kicker kicker--gold"><?php esc_html_e('Send Us A Message', 'nitya-naturals'); ?></span>
            <h2 class="h2" style="margin-top:18px; color:var(--cream);"><?php esc_html_e('Let\'s start with your requirement.', 'nitya-naturals'); ?></h2>
            <p class="lead" style="margin-top:18px; color:rgba(245,240,228,.78);"><?php esc_html_e('Whether you need pre-formulated stock products, custom formulation, or a factory visit to Prayagraj, our team is ready to assist you.', 'nitya-naturals'); ?></p>

            <div style="margin-top: 30px; border-top: 1px solid rgba(245,240,228,.14); padding-top: 20px;">
              <h4 style="font-size: 20px; color: var(--gold); margin-bottom: 10px;"><?php esc_html_e('Export & Manufacturing Desk', 'nitya-naturals'); ?></h4>
              <p style="color: rgba(245,240,228,.8); font-size: 15px; margin-bottom: 8px;"><strong><?php esc_html_e('Facility Location:', 'nitya-naturals'); ?></strong> Naini, Prayagraj, Uttar Pradesh, India</p>
              <p style="color: rgba(245,240,228,.8); font-size: 15px; margin-bottom: 8px;"><strong><?php esc_html_e('Working Hours:', 'nitya-naturals'); ?></strong> Monday – Saturday: 9:00 AM – 7:00 PM IST</p>
            </div>
          </div>

          <div>
            <form id="rfqForm" novalidate>
              <div class="field-row">
                <div class="field">
                  <label for="pname"><?php esc_html_e('Your Name *', 'nitya-naturals'); ?></label>
                  <input id="pname" name="pname" placeholder="<?php esc_attr_e('Your full name', 'nitya-naturals'); ?>" required />
                  <span class="err"><?php esc_html_e('Please enter your name.', 'nitya-naturals'); ?></span>
                </div>
                <div class="field">
                  <label for="company"><?php esc_html_e('Company / Brand *', 'nitya-naturals'); ?></label>
                  <input id="company" name="company" placeholder="<?php esc_attr_e('Company name', 'nitya-naturals'); ?>" required />
                  <span class="err"><?php esc_html_e('Please enter your company.', 'nitya-naturals'); ?></span>
                </div>
              </div>

              <div class="field-row">
                <div class="field">
                  <label for="email"><?php esc_html_e('Email Address *', 'nitya-naturals'); ?></label>
                  <input id="email" name="email" type="email" placeholder="<?php esc_attr_e('you@company.com', 'nitya-naturals'); ?>" required />
                  <span class="err"><?php esc_html_e('Please enter a valid email.', 'nitya-naturals'); ?></span>
                </div>
                <div class="field">
                  <label for="phone"><?php esc_html_e('WhatsApp / Phone *', 'nitya-naturals'); ?></label>
                  <input id="phone" name="phone" placeholder="<?php esc_attr_e('+91 75240 98888', 'nitya-naturals'); ?>" required />
                  <span class="err"><?php esc_html_e('Please enter a contact number.', 'nitya-naturals'); ?></span>
                </div>
              </div>

              <div class="field">
                <label for="moq"><?php esc_html_e('Requirement / Interest *', 'nitya-naturals'); ?></label>
                <input id="moq" name="moq" placeholder="<?php esc_attr_e('e.g. Private labeling capsules, Factory Visit, Syrup manufacturing', 'nitya-naturals'); ?>" required />
                <span class="err"><?php esc_html_e('Please mention your requirement.', 'nitya-naturals'); ?></span>
              </div>

              <div class="field">
                <label for="brief"><?php esc_html_e('Your Message / Specific Requirements', 'nitya-naturals'); ?></label>
                <textarea id="brief" name="brief" rows="4" placeholder="<?php esc_attr_e('Provide details on quantities, formulations, or questions you have', 'nitya-naturals'); ?>"></textarea>
              </div>

              <button class="btn btn--gold" type="submit"><?php esc_html_e('Send Message / Brief', 'nitya-naturals'); ?>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
              </button>
            </form>

            <div class="form-success" id="formSuccess" role="status">
              <h4><?php esc_html_e('Message Prepared!', 'nitya-naturals'); ?></h4>
              <p><?php esc_html_e('WhatsApp has opened with your message. If not,', 'nitya-naturals'); ?> <a id="waFallback" href="#"><?php esc_html_e('click here to send via WhatsApp', 'nitya-naturals'); ?></a>.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
