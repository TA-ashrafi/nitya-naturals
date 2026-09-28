	<!-- ============ FOOTER ============ -->
	<footer class="site-foot" id="colophon">
	  <div class="wrap">
	    <div class="foot-grid">
	      <div>
	        <div class="foot-brand">
	          <?php
	          $footer_logo = get_theme_mod('nitya_footer_logo');
	          if ($footer_logo) : ?>
	            <img src="<?php echo esc_url($footer_logo); ?>" alt="Nitya Naturals" style="max-height: 48px; width: auto;" />
	          <?php elseif (has_custom_logo()) : ?>
	            <?php the_custom_logo(); ?>
	          <?php else : ?>
	            <svg viewBox="0 0 48 48" fill="none" aria-hidden="true">
	              <circle cx="24" cy="24" r="22.5" stroke="#C9A227" stroke-width="1.2"/>
	              <path d="M24 37c0-9 5-15 12-17-1 10-6 15-12 17Z" fill="#6B8F71"/>
	              <path d="M24 37c0-9-5-15-12-17 1 10 6 15 12 17Z" fill="#2A5747"/>
	              <path d="M24 37V19" stroke="#F5F0E4" stroke-width="1.4" stroke-linecap="round"/>
	              <circle cx="24" cy="14" r="3.4" fill="#C9A227"/>
	            </svg>
	            <span><span class="brand-name">NITYA</span><span class="brand-sub">Naturals</span></span>
	          <?php endif; ?>
	        </div>
	        <p><?php esc_html_e('Nitya Naturals Private Limited is a Private Labeling and Contract Manufacturing company as well as the export division of Baidyanath Ayurveda Naini.', 'nitya-naturals'); ?></p>
	      </div>
	      <div>
	        <h4><?php esc_html_e('Contact Info', 'nitya-naturals'); ?></h4>
	        <ul>
	          <li><?php echo esc_html(get_theme_mod('nitya_address', '1, Mirzapur Rd, Naini, Allahabad, Uttar Pradesh')); ?></li>
	          <li><a href="tel:+917524098888">+91 75240 98888</a></li>
	          <li><a href="mailto:exports@nityanaturals.com">exports@nityanaturals.com</a></li>
	        </ul>
	      </div>
	      <div>
	        <h4><?php esc_html_e('Quick Links', 'nitya-naturals'); ?></h4>
	        <ul>
	          <li><a href="<?php echo esc_url(is_front_page() ? '#about' : home_url('/#about')); ?>"><?php esc_html_e('About Us', 'nitya-naturals'); ?></a></li>
	          <li><a href="<?php echo esc_url(home_url('/ayurvedic-medicine-manufacturer/')); ?>"><?php esc_html_e('Product Range', 'nitya-naturals'); ?></a></li>
	          <li><a href="<?php echo esc_url(home_url('/third-party-manufacturing/')); ?>"><?php esc_html_e('Manufacturing', 'nitya-naturals'); ?></a></li>
	          <li><a href="<?php echo esc_url(is_front_page() ? '#contact' : home_url('/#contact')); ?>"><?php esc_html_e('Contact Us', 'nitya-naturals'); ?></a></li>
	        </ul>
	      </div>
	    </div>
	    <div class="foot-bottom">
	      <span><?php echo esc_html(get_theme_mod('nitya_copyright_text', '© Copyright ' . date('Y') . ' | All Rights Reserved | Nitya Naturals')); ?></span>
	      <span><?php esc_html_e('Private Label · Contract Manufacturing · Exports', 'nitya-naturals'); ?></span>
	    </div>
	  </div>
	</footer>

	<a class="wa-float" href="https://wa.me/917524098888" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Chat with Nitya Naturals on WhatsApp', 'nitya-naturals'); ?>">
	  <svg viewBox="0 0 32 32" aria-hidden="true"><path d="M16 3a13 13 0 0 0-11.1 19.7L3 29.5l7-1.9A13 13 0 1 0 16 3Zm7.3 18.3c-.3.9-1.8 1.7-2.5 1.8-.7.1-1.5.2-4.8-1.2-4-1.7-6.6-5.8-6.8-6.1-.2-.3-1.6-2.1-1.6-4s1-2.9 1.4-3.3c.4-.4.8-.5 1.1-.5h.8c.3 0 .6-.1.9.7.3.8 1.1 2.7 1.2 2.9.1.2.2.5 0 .8-.2.3-.3.5-.5.8-.2.2-.4.5-.2.9.2.4.9 1.5 1.9 2.4 1.3 1.2 2.4 1.5 2.8 1.7.4.2.6.2.8-.1.2-.3 1-1.1 1.2-1.5.2-.4.5-.3.8-.2.3.1 2.4 1.1 2.8 1.3.4.2.7.3.8.5.1.2.1.9-.2 1.8Z"/></svg>
	</a>

</div><!-- #top -->

<?php wp_footer(); ?>
</body>
</html>
