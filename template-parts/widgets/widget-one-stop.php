<?php
/**
 * Widget Template: New Product Development Dark Panel Section
 */
?>
<section class="section" id="develop">
  <div class="wrap">
    <div class="panel" data-reveal>
      <div class="panel-grid">
        <div>
          <span class="kicker kicker--gold"><?php esc_html_e('New Product Development', 'nitya-naturals'); ?></span>
          <h2 class="h2" style="margin-top:18px"><?php esc_html_e('Tell us what you want to launch.', 'nitya-naturals'); ?></h2>
          <p class="lead" style="margin-top:18px"><?php esc_html_e('With the knowledge and expertise of our team, we help you custom-create any product according to your requirements. Send the brief and we come back with feasibility, cost and timeline.', 'nitya-naturals'); ?></p>
          <ul class="steps">
            <li><b>01</b> <?php esc_html_e('New product name', 'nitya-naturals'); ?></li>
            <li><b>02</b> <?php esc_html_e('Intended composition', 'nitya-naturals'); ?></li>
            <li><b>03</b> <?php esc_html_e('Product functions', 'nitya-naturals'); ?></li>
            <li><b>04</b> <?php esc_html_e('Product position', 'nitya-naturals'); ?></li>
            <li><b>05</b> <?php esc_html_e('Dosage form & MOQ', 'nitya-naturals'); ?></li>
          </ul>
        </div>

        <div>
          <form id="rfqForm" novalidate>
            <div class="field-row">
              <div class="field"><label for="pname"><?php esc_html_e('New product name', 'nitya-naturals'); ?></label><input id="pname" name="pname" placeholder="e.g. Amla Immunity Gummies" /><span class="err"><?php esc_html_e('Please enter a product name.', 'nitya-naturals'); ?></span></div>
              <div class="field"><label for="company"><?php esc_html_e('Company', 'nitya-naturals'); ?></label><input id="company" name="company" placeholder="Brand or company" /><span class="err"><?php esc_html_e('Please enter your company.', 'nitya-naturals'); ?></span></div>
            </div>
            <div class="field-row">
              <div class="field"><label for="email"><?php esc_html_e('Email', 'nitya-naturals'); ?></label><input id="email" name="email" type="email" placeholder="you@company.com" /><span class="err"><?php esc_html_e('Please enter a valid email.', 'nitya-naturals'); ?></span></div>
              <div class="field"><label for="phone"><?php esc_html_e('WhatsApp / Phone', 'nitya-naturals'); ?></label><input id="phone" name="phone" placeholder="+91 ..." /><span class="err"><?php esc_html_e('Please enter a contact number.', 'nitya-naturals'); ?></span></div>
            </div>
            <div class="field"><label for="composition"><?php esc_html_e('Intended composition', 'nitya-naturals'); ?></label><textarea id="composition" name="composition" placeholder="Herbs, actives, strengths you have in mind"></textarea></div>
            <div class="field-row">
              <div class="field"><label for="form"><?php esc_html_e('Dosage form', 'nitya-naturals'); ?></label>
                <select id="form" name="form">
                  <option><?php esc_html_e('Capsules', 'nitya-naturals'); ?></option><option><?php esc_html_e('Tablets', 'nitya-naturals'); ?></option><option><?php esc_html_e('Syrups', 'nitya-naturals'); ?></option><option><?php esc_html_e('Oils', 'nitya-naturals'); ?></option><option><?php esc_html_e('Creams', 'nitya-naturals'); ?></option><option><?php esc_html_e('Pastes', 'nitya-naturals'); ?></option><option><?php esc_html_e('Not sure yet', 'nitya-naturals'); ?></option>
                </select>
              </div>
              <div class="field"><label for="moq"><?php esc_html_e('Target MOQ / volume', 'nitya-naturals'); ?></label><input id="moq" name="moq" placeholder="e.g. 5,000 units per month" /><span class="err"><?php esc_html_e('Please give a rough volume.', 'nitya-naturals'); ?></span></div>
            </div>
            <div class="field"><label for="brief"><?php esc_html_e('Product functions & position', 'nitya-naturals'); ?></label><textarea id="brief" name="brief" placeholder="What it should do, who it is for, where it sits on the shelf"></textarea></div>
            <button class="btn btn--gold" type="submit"><?php esc_html_e('Send Development Brief', 'nitya-naturals'); ?>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </button>
            <p class="form-note"><?php esc_html_e('Submitting opens WhatsApp with your brief pre-filled, so nothing is lost. You can also email us at', 'nitya-naturals'); ?> <a href="mailto:ald.nitya@gmail.com" style="color:var(--gold)">ald.nitya@gmail.com</a>.</p>
          </form>

          <div class="form-success" id="formSuccess" role="status">
            <h4><?php esc_html_e('Brief ready to send.', 'nitya-naturals'); ?></h4>
            <p><?php esc_html_e('WhatsApp should have opened with your development brief. If it did not,', 'nitya-naturals'); ?> <a id="waFallback" href="#"><?php esc_html_e('tap here', 'nitya-naturals'); ?></a> <?php esc_html_e('or email it to', 'nitya-naturals'); ?> <a href="mailto:ald.nitya@gmail.com">ald.nitya@gmail.com</a> <?php esc_html_e('and our team will reply with feasibility, cost and timeline.', 'nitya-naturals'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
