<?php
/**
 * Index Fallback Template
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="page-header-banner">
		<div class="container">
			<h1><?php bloginfo('name'); ?></h1>
			<p><?php bloginfo('description'); ?></p>
		</div>
	</div>

	<section class="section">
		<div class="container">
			<?php
			if (have_posts()) :
				while (have_posts()) :
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('form-group'); ?> style="margin-bottom: 30px; padding-bottom: 20px; border-bottom: 1px solid var(--border-color);">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="entry-excerpt">
							<?php the_excerpt(); ?>
						</div>
					</article>
					<?php
				endwhile;
				the_posts_navigation();
			else :
				?>
				<p><?php esc_html_e('No posts found.', 'nitya-naturals'); ?></p>
			<?php
			endif;
			?>
		</div>
	</section>
</main>

<?php
get_footer();
