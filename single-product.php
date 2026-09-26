<?php
/**
 * Single Product Page Template
 */

get_header();

while (have_posts()) : the_post();
	$product_id = get_the_ID();

	// Main featured image
	$featured_img = get_the_post_thumbnail_url($product_id, 'large');
	if (!$featured_img) {
		$featured_img = get_template_directory_uri() . '/assets/images/Free_Dropddper_Bottle_Mockup-copy-1024x768.jpg';
	}

	// Gallery images
	$gallery_images = get_post_meta($product_id, '_product_gallery_images', true);
	if (!is_array($gallery_images)) {
		$gallery_images = array();
	}

	// Combine featured image with gallery
	$all_images = array_merge(array($featured_img), $gallery_images);
	$all_images = array_unique(array_filter($all_images));

	// Categories
	$terms = get_the_terms($product_id, 'product_cat');
	$cat_names = array();
	if ($terms && !is_wp_error($terms)) {
		foreach ($terms as $term) {
			$cat_names[] = '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a>';
		}
	}
?>

<main id="primary" class="site-main">
	<div class="page-header-banner">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<p><?php esc_html_e('Ayurvedic & Herbal Product Details', 'nitya-naturals'); ?></p>
		</div>
	</div>

	<section class="section product-single-section">
		<div class="container">
			<div class="product-single-wrapper">

				<!-- LEFT COLUMN: IMAGES & GALLERY -->
				<div class="product-gallery-col">
					<div class="product-main-image">
						<img id="mainProductImage" src="<?php echo esc_url($all_images[0]); ?>" alt="<?php the_title_attribute(); ?>">
					</div>

					<?php if (count($all_images) > 1) : ?>
						<div class="product-thumbnails-grid">
							<?php foreach ($all_images as $index => $img_url) : ?>
								<div class="product-thumb-item <?php echo ($index === 0) ? 'active' : ''; ?>" onclick="switchProductImage('<?php echo esc_url($img_url); ?>', this)">
									<img src="<?php echo esc_url($img_url); ?>" alt="Thumbnail <?php echo $index + 1; ?>">
								</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>

				<!-- RIGHT COLUMN: PRODUCT DETAILS -->
				<div class="product-info-col">
					<h2 class="product-title"><?php the_title(); ?></h2>

					<?php if (!empty($cat_names)) : ?>
						<div class="product-category-meta">
							<strong><?php esc_html_e('Categories:', 'nitya-naturals'); ?></strong> <?php echo implode(', ', $cat_names); ?>
						</div>
					<?php endif; ?>

					<div class="product-description-content">
						<?php the_content(); ?>
					</div>

					<div class="product-action-box">
						<h3><?php esc_html_e('Interested in Private Labeling or Third-Party Manufacturing?', 'nitya-naturals'); ?></h3>
						<p><?php esc_html_e('Get in touch with us today to receive customized formulations, pricing, and packaging details.', 'nitya-naturals'); ?></p>
						<a href="<?php echo esc_url(home_url('/start-your-own-supplement-business/')); ?>" class="btn-submit"><?php esc_html_e('Inquire For Custom Branding', 'nitya-naturals'); ?> &rarr;</a>
					</div>
				</div>

			</div>

			<!-- BOTTOM SECTION: RELATED PRODUCTS -->
			<div class="related-products-section">
				<h3 class="related-title"><?php esc_html_e('Related Products', 'nitya-naturals'); ?></h3>
				<div class="products-grid-3">
					<?php
					$related_args = array(
						'post_type'      => 'product',
						'posts_per_page' => 3,
						'post__not_in'   => array($product_id),
						'orderby'        => 'rand',
					);
					if ($terms && !is_wp_error($terms)) {
						$term_ids = wp_list_pluck($terms, 'term_id');
						$related_args['tax_query'] = array(
							array(
								'taxonomy' => 'product_cat',
								'field'    => 'term_id',
								'terms'    => $term_ids,
							),
						);
					}
					$related_query = new WP_Query($related_args);

					if (!$related_query->have_posts()) {
						// Fallback query if no category match
						unset($related_args['tax_query']);
						$related_query = new WP_Query($related_args);
					}

					if ($related_query->have_posts()) :
						while ($related_query->have_posts()) : $related_query->the_post();
							$rel_thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
							if (!$rel_thumb) {
								$rel_gallery = get_post_meta(get_the_ID(), '_product_gallery_images', true);
								if (!empty($rel_gallery) && is_array($rel_gallery)) {
									$rel_thumb = $rel_gallery[0];
								} else {
									$rel_thumb = get_template_directory_uri() . '/assets/images/Free_Dropddper_Bottle_Mockup-copy-1024x768.jpg';
								}
							}
					?>
							<div class="product-card">
								<div class="product-card-image">
									<a href="<?php the_permalink(); ?>">
										<img src="<?php echo esc_url($rel_thumb); ?>" alt="<?php the_title_attribute(); ?>">
									</a>
								</div>
								<div class="product-card-body">
									<h3 class="product-card-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<div class="product-card-excerpt">
										<?php the_excerpt(); ?>
									</div>
									<a href="<?php the_permalink(); ?>" class="btn-product-view"><?php esc_html_e('View Product Details', 'nitya-naturals'); ?> &rarr;</a>
								</div>
							</div>
					<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
			</div>

		</div>
	</section>
</main>

<script type="text/javascript">
function switchProductImage(src, elem) {
	var mainImg = document.getElementById('mainProductImage');
	if (mainImg) {
		mainImg.src = src;
	}
	var thumbs = document.querySelectorAll('.product-thumb-item');
	thumbs.forEach(function(item) {
		item.classList.remove('active');
	});
	if (elem) {
		elem.classList.add('active');
	}
}
</script>

<?php
endwhile;
get_footer();
