<?php
/**
 * Widget Template: Our Founder Section
 */
$title = isset($args['title']) ? $args['title'] : get_theme_mod('nitya_about_founder_title', 'Our Founder');
$name  = isset($args['name']) ? $args['name'] : get_theme_mod('nitya_about_founder_name', 'Mr. Dhananjay Sharma');
$desig = isset($args['desig']) ? $args['desig'] : get_theme_mod('nitya_about_founder_desig', 'President Shree Baidyanath Ayurved Pvt. Ltd. | Director Nitya Naturals Private Limited');
$img   = isset($args['img']) ? $args['img'] : get_theme_mod('nitya_about_founder_img', '');
$desc  = isset($args['desc']) ? $args['desc'] : get_theme_mod('nitya_about_founder_desc', 'Mr. Dhananjay (Founder) is a graduate from premiere institute of India and did his Masters from Bentley University USA. With an experience of more than 30 years, Mr. Dhananjay is a prolific entrepreneur and a business leader. He takes pride in Corporate Responsibilities that he holds in Baidyanath Ayurveda India’s oldest Ayurveda company. He has worked extensively to inspire the western world to adopt Ayurveda and thus, he has established a goodwill in Ayurveda and health care industry across the globe. Nitya Naturals was one of the initiatives by Mr. Dhananjay to spread Ayurveda outside India. He has vast global exposure and he has travelled extensively to more than 50 countries. His inspiration to the western minds on teachings of ‘Acharya Vaghbhatta’ has been compiled in the book ‘Age according to Ayurveda’ written by him and his colleague. He takes up many social activities and continues to drive the CSR activities of Nitya Naturals apart from his personal contribution.');
?>
<section class="section nitya-widget-our-founder">
	<div class="container">
		<?php if ($title) : ?><h2 class="section-title"><?php echo esc_html($title); ?></h2><?php endif; ?>
		<div style="max-width: 800px; margin: 0 auto; text-align: center;">
			<?php if ($img) : ?>
				<div style="margin-bottom: 20px;">
					<img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($name); ?>" style="max-width: 220px; margin: 0 auto; border-radius: 50%; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
				</div>
			<?php endif; ?>
			<?php if ($name) : ?><h3 style="color: var(--primary-color); margin-bottom: 5px;"><?php echo esc_html($name); ?></h3><?php endif; ?>
			<?php if ($desig) : ?><p><strong><?php echo esc_html($desig); ?></strong></p><?php endif; ?>
			<?php if ($desc) : ?>
			<p style="text-align: justify; margin-top: 20px;">
				<?php echo esc_html($desc); ?>
			</p>
			<?php endif; ?>
		</div>
	</div>
</section>
