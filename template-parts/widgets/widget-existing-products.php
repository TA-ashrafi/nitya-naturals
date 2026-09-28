<?php
/**
 * Widget Template: Existing Products Stock Categories
 */
$categories = array(
	array(
		'title' => 'Allergy',
		'desc'  => 'Respiratory and seasonal support formulas for daily wellness routines.'
	),
	array(
		'title' => 'Cholesterol',
		'desc'  => 'Lipid-management blends positioned for heart-health led brands.'
	),
	array(
		'title' => 'Diabetes',
		'desc'  => 'Glucose-support ranges with proven herbal actives and dosing guidance.'
	),
	array(
		'title' => 'Immunity',
		'desc'  => 'High-volume immunity categories — chyawanprash, herbal decoctions and tablets.'
	),
	array(
		'title' => 'Kidney Care',
		'desc'  => 'Renary support formulations developed for long-term daily use.'
	),
	array(
		'title' => 'Weight Management',
		'desc'  => 'Metabolism and detox ranges built for competitive retail price points.'
	)
);
?>
<section class="section existing-products-section" id="products">
	<div class="container">
		<div class="section-heading-box">
			<span class="sub-heading-badge"><i class="fa-solid fa-boxes-stacked"></i> EXISTING PRODUCTS</span>
			<h2 class="section-title-center">Pre-formulated stock, <em>ready to carry your label.</em></h2>
			<p class="section-desc-center">
				Choose from our pre-formulated stock product categories. Each range is already developed, trialled and produced — you bring the brand.
			</p>
		</div>

		<div class="existing-products-grid">
			<?php foreach ($categories as $cat) : ?>
				<div class="existing-product-card">
					<h3><?php echo esc_html($cat['title']); ?></h3>
					<p><?php echo esc_html($cat['desc']); ?></p>
					<div class="card-foot">
						<i class="fa-solid fa-check"></i> Ready to private label
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="show-more-categories-wrap">
			<a href="<?php echo esc_url(home_url('/best-manufacturer-of-ayurved-medicines/')); ?>" class="btn-show-more-cat">
				Show More Product Categories <i class="fa-solid fa-arrow-right"></i>
			</a>
		</div>
	</div>
</section>
