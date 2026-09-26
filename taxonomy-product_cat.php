<?php
/**
 * Taxonomy Template for Product Category Archive
 */

get_header();

$current_term = get_queried_object();
$term_name = ($current_term && isset($current_term->name)) ? $current_term->name : __('Products', 'nitya-naturals');
$term_desc = ($current_term && isset($current_term->description)) ? $current_term->description : '';
?>

<main id="primary" class="site-main">
	<div class="page-header-banner">
		<div class="container">
			<h1><?php echo esc_html($term_name); ?></h1>
			<p><?php esc_html_e('Explore Ayurvedic Products under ', 'nitya-naturals'); ?> <?php echo esc_html($term_name); ?></p>
		</div>
	</div>

	<section class="section">
		<div class="container">
			<?php if (!empty($term_desc)) : ?>
				<p style="text-align: center; max-width: 900px; margin: 0 auto 30px;">
					<?php echo esc_html($term_desc); ?>
				</p>
			<?php endif; ?>

			<div class="products-grid-3">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); 
						$thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
						if (!$thumb_url) {
							$gallery = get_post_meta(get_the_ID(), '_product_gallery_images', true);
							if (!empty($gallery) && is_array($gallery)) {
								$thumb_url = $gallery[0];
							} else {
								$thumb_url = get_template_directory_uri() . '/assets/images/Free_Dropddper_Bottle_Mockup-copy-1024x768.jpg';
							}
						}
					?>
						<div class="product-card">
							<div class="product-card-image">
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>">
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
					<?php endwhile; ?>
				<?php else : ?>
					<div class="no-products-found" style="grid-column: 1 / -1; text-align: center; padding: 40px;">
						<h3><?php esc_html_e('No products found in this category.', 'nitya-naturals'); ?></h3>
						<p><?php esc_html_e('Please check back soon or browse other product categories.', 'nitya-naturals'); ?></p>
						<a href="<?php echo esc_url(home_url('/best-manufacturer-of-ayurved-medicines/')); ?>" class="btn-submit" style="margin-top: 15px; display: inline-block;"><?php esc_html_e('View All Categories', 'nitya-naturals'); ?></a>
					</div>
				<?php endif; ?>
			</div>

			<div class="pagination-wrapper" style="margin-top: 40px; text-align: center;">
				<?php the_posts_pagination(array(
					'mid_size'  => 2,
					'prev_text' => __('&laquo; Previous', 'nitya-naturals'),
					'next_text' => __('Next &raquo;', 'nitya-naturals'),
				)); ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
