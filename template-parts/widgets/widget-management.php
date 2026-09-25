<?php
/**
 * Widget Template: Additions to Management Section
 */
$title   = isset($args['title']) ? $args['title'] : get_theme_mod('nitya_about_mgmt_title', 'Additions to our Management');
$m1_name = isset($args['m1_name']) ? $args['m1_name'] : get_theme_mod('nitya_about_m1_name', 'Ram Jo Sharma');
$m1_desc = isset($args['m1_desc']) ? $args['m1_desc'] : get_theme_mod('nitya_about_m1_desc', 'Ram Jo is a graduate in Marketing & Management from the University of Texas. He is a self-driven and dynamic entrepreneur. Ram is the fourth generation entrepreneur, in Baidyanath Ayurveda and his vision is aligned with the company to make Ayurveda and its benefits known to the world. He gained experience in the field of alternative medicine in USA before joining Nitya Naturals. He effectively utilizes proficient knowledge & skills to meet with every challenge in sales and marketing. He strongly believes in constant growth with focused and planned strategy. He handles different responsibilities like Business development, budgeting, decision making, team building at Nitya Naturals.');

$m2_name = isset($args['m2_name']) ? $args['m2_name'] : get_theme_mod('nitya_about_m2_name', 'Jairaj Sharma');
$m2_desc = isset($args['m2_desc']) ? $args['m2_desc'] : get_theme_mod('nitya_about_m2_desc', 'Jairaj is also the fourth generation entrepreneur who focuses on resilience and innovation. Jairaj is the youngest entrepreneur and brings fresh ideas to the team. He is also focused on research and development of new products in Nitya Naturals. He focuses of the improvement of performance of the team through system training and effectiveness, strategic planning. His prime responsibility is new business development, sales effectiveness, new market entry along with exposures to all business segments, Functions and development.');
?>
<section class="section section-bg-light nitya-widget-management">
	<div class="container">
		<?php if ($title) : ?><h2 class="section-title"><?php echo esc_html($title); ?></h2><?php endif; ?>
		<div class="feature-grid">
			<div class="feature-card">
				<h3 style="color: var(--secondary-color);"><?php echo esc_html($m1_name); ?></h3>
				<p style="font-size: 14px; text-align: justify;">
					<?php echo esc_html($m1_desc); ?>
				</p>
			</div>

			<div class="feature-card">
				<h3 style="color: var(--secondary-color);"><?php echo esc_html($m2_name); ?></h3>
				<p style="font-size: 14px; text-align: justify;">
					<?php echo esc_html($m2_desc); ?>
				</p>
			</div>
		</div>
	</div>
</section>
