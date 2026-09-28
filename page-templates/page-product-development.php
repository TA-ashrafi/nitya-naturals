<?php
/**
 * Template Name: Product Development Form
 */

get_header();
?>

<main id="primary" class="site-main">
  <div class="page-header-banner">
    <div class="wrap">
      <div class="eyebrow-rule"><span class="kicker kicker--gold"><?php esc_html_e('Custom Formulation', 'nitya-naturals'); ?></span></div>
      <h1><?php esc_html_e('New Product Development', 'nitya-naturals'); ?></h1>
      <p class="lead" style="color: var(--cream-deep); max-width: 60ch;"><?php esc_html_e('Custom formulation, regulatory guidance, and end-to-end manufacturing for your Ayurvedic product line.', 'nitya-naturals'); ?></p>
    </div>
  </div>

  <section class="section">
    <div class="wrap">
      <div class="panel" style="margin-bottom: 50px;">
        <div class="panel-grid">
          <div>
            <span class="kicker kicker--gold"><?php esc_html_e('Custom Formulation & Guidance', 'nitya-naturals'); ?></span>
            <h2 class="h2" style="margin-top: 18px; color: var(--cream);"><?php esc_html_e('Tell us what you want to launch.', 'nitya-naturals'); ?></h2>
            <p class="lead" style="margin-top: 18px; color: rgba(245,240,228,.78);"><?php esc_html_e('With the knowledge and expertise of our team, we help you custom-create any product according to your requirements. Send your brief and we will reply with feasibility, cost, and timeline.', 'nitya-naturals'); ?></p>

            <ul class="steps">
              <li><b>01</b> <?php esc_html_e('New product name & concept', 'nitya-naturals'); ?></li>
              <li><b>02</b> <?php esc_html_e('Intended composition & active herbs', 'nitya-naturals'); ?></li>
              <li><b>03</b> <?php esc_html_e('Product functions & target ailment', 'nitya-naturals'); ?></li>
              <li><b>04</b> <?php esc_html_e('Target audience & positioning', 'nitya-naturals'); ?></li>
              <li><b>05</b> <?php esc_html_e('Preferred dosage form & MOQ', 'nitya-naturals'); ?></li>
            </ul>
          </div>

          <div>
            <form id="rfqForm" novalidate>
              <div class="field-row">
                <div class="field">
                  <label for="pname"><?php esc_html_e('New Product Name *', 'nitya-naturals'); ?></label>
                  <input id="pname" name="pname" placeholder="<?php esc_attr_e('e.g. Amla Immunity Gummies', 'nitya-naturals'); ?>" required />
                  <span class="err"><?php esc_html_e('Please enter a product name.', 'nitya-naturals'); ?></span>
                </div>
                <div class="field">
                  <label for="company"><?php esc_html_e('Company / Brand *', 'nitya-naturals'); ?></label>
                  <input id="company" name="company" placeholder="<?php esc_attr_e('Brand or company name', 'nitya-naturals'); ?>" required />
                  <span class="err"><?php esc_html_e('Please enter your company name.', 'nitya-naturals'); ?></span>
                </div>
              </div>

              <div class="field-row">
                <div class="field">
                  <label for="email"><?php esc_html_e('Email Address *', 'nitya-naturals'); ?></label>
                  <input id="email" name="email" type="email" placeholder="<?php esc_attr_e('you@company.com', 'nitya-naturals'); ?>" required />
                  <span class="err"><?php esc_html_e('Please enter a valid email address.', 'nitya-naturals'); ?></span>
                </div>
                <div class="field">
                  <label for="phone"><?php esc_html_e('WhatsApp / Phone *', 'nitya-naturals'); ?></label>
                  <input id="phone" name="phone" placeholder="<?php esc_attr_e('+91 75240 98888', 'nitya-naturals'); ?>" required />
                  <span class="err"><?php esc_html_e('Please enter a contact number.', 'nitya-naturals'); ?></span>
                </div>
              </div>

              <div class="field">
                <label for="composition"><?php esc_html_e('Intended Composition & Actives', 'nitya-naturals'); ?></label>
                <textarea id="composition" name="composition" placeholder="<?php esc_attr_e('List herbs, actives, strengths, or ingredients to avoid', 'nitya-naturals'); ?>"></textarea>
              </div>

              <div class="field-row">
                <div class="field">
                  <label for="form"><?php esc_html_e('Dosage Form', 'nitya-naturals'); ?></label>
                  <select id="form" name="form">
                    <option><?php esc_html_e('Capsules', 'nitya-naturals'); ?></option>
                    <option><?php esc_html_e('Tablets', 'nitya-naturals'); ?></option>
                    <option><?php esc_html_e('Syrups', 'nitya-naturals'); ?></option>
                    <option><?php esc_html_e('Oils', 'nitya-naturals'); ?></option>
                    <option><?php esc_html_e('Creams', 'nitya-naturals'); ?></option>
                    <option><?php esc_html_e('Pastes / Chyawanprash', 'nitya-naturals'); ?></option>
                    <option><?php esc_html_e('Not sure yet', 'nitya-naturals'); ?></option>
                  </select>
                </div>
                <div class="field">
                  <label for="moq"><?php esc_html_e('Target MOQ / Volume *', 'nitya-naturals'); ?></label>
                  <input id="moq" name="moq" placeholder="<?php esc_attr_e('e.g. 5,000 units per month', 'nitya-naturals'); ?>" required />
                  <span class="err"><?php esc_html_e('Please enter target volume.', 'nitya-naturals'); ?></span>
                </div>
              </div>

              <div class="field">
                <label for="brief"><?php esc_html_e('Product Functions, Purpose & Registrations', 'nitya-naturals'); ?></label>
                <textarea id="brief" name="brief" placeholder="<?php esc_attr_e('Describe intended users, target age, ailment/function, and registration notes', 'nitya-naturals'); ?>"></textarea>
              </div>

              <button class="btn btn--gold" type="submit"><?php esc_html_e('Send Development Brief', 'nitya-naturals'); ?>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
              </button>
              <p class="form-note"><?php esc_html_e('Submitting opens WhatsApp with your brief pre-filled. You can also email us at', 'nitya-naturals'); ?> <a href="mailto:<?php echo esc_attr(get_theme_mod('nitya_email_alt', 'ald.nitya@gmail.com')); ?>" style="color:var(--gold)"><?php echo esc_html(get_theme_mod('nitya_email_alt', 'ald.nitya@gmail.com')); ?></a>.</p>
            </form>

            <div class="form-success" id="formSuccess" role="status">
              <h4><?php esc_html_e('Brief Ready to Send!', 'nitya-naturals'); ?></h4>
              <p><?php esc_html_e('WhatsApp has opened with your pre-filled brief. If not,', 'nitya-naturals'); ?> <a id="waFallback" href="#"><?php esc_html_e('click here to send via WhatsApp', 'nitya-naturals'); ?></a> <?php esc_html_e('or email us directly.', 'nitya-naturals'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
