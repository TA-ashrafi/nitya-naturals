<?php
/**
 * Template Name: Product Categories
 */

get_header();

$categories = array(
	'Allergy', 'Antacid', 'Anti-Viral', 'Blood Circulation', 'Blood Purifier',
	'Blood Thinner', 'Cardiac Care', 'Cholesterol', 'Cyst', 'Diabetes',
	'Digestion', 'Eye Care', 'Fertility', 'Gout', 'Hair Care',
	'Health Supplement', 'Immunity', 'Inflammation', 'Joint/Ortho Care', 'Kidney Care',
	'Lactation', 'Laxative', 'Liver Care', 'Lung Care', 'Massage Oils',
	'Memory', 'Men’s Health', 'Menopause', 'Mental Health', 'Metabolism',
	'Mouthwash', 'Muscular Health', 'Nasal Care', 'Nasal Drop', 'Nervine Health',
	'Oral Care', 'Osteoarthritis', 'Oils', 'Pain Management', 'Skin Care',
	'Stress & Anxiety', 'Throat Care', 'Thyroid', 'Tumour & Fistula', 'Virility/Vigor',
	'Vitality/Vigor', 'Water Retention', 'Weight Metabolism', 'Women’s Health'
);
?>

<main id="primary" class="site-main">
	<div class="page-header-banner">
		<div class="container">
			<h1><?php esc_html_e('Product Categories', 'nitya-naturals'); ?></h1>
			<p><?php esc_html_e('Best Manufacturer of Ayurved Medicines - Explore Categories', 'nitya-naturals'); ?></p>
		</div>
	</div>

	<section class="section">
		<div class="container">
			<p style="text-align: center; max-width: 900px; margin: 0 auto 30px;">
				<?php esc_html_e('Nitya Naturals is one of the best manufacturers of Ayurved medicines. All products are registered for commercial use and regulated by the Ministry of AYUSH, Drug Control Cell (DCC). Click any category to explore products.', 'nitya-naturals'); ?>
			</p>

			<div class="categories-grid">
				<?php foreach ($categories as $cat) :
					$term = get_term_by('name', $cat, 'product_cat');
					$cat_url = ($term && !is_wp_error($term)) ? get_term_link($term) : add_query_arg('cat', urlencode($cat), get_post_type_archive_link('product'));
				?>
					<div class="category-card">
						<a href="<?php echo esc_url($cat_url); ?>">
							<?php echo esc_html($cat); ?>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php if (is_active_sidebar('categories-widgets')) : ?>
		<?php dynamic_sidebar('categories-widgets'); ?>
	<?php endif; ?>
</main>

<?php
get_footer();
