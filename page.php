<?php
/**
 * Generic Page Fallback
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	while (have_posts()) :
		the_post();
		?>
		<div class="page-header-banner">
			<div class="container">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>

		<section class="section">
			<div class="container">
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
	<?php
	endwhile;
	?>
</main>

<?php
get_footer();
