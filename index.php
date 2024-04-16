<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codexlab
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- banner -->
	<div class="mil-inner-banner mil-p-0-120">
		<div class="mil-banner-content mil-up">
			<div class="mil-animation-frame">
				<div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
			</div>
			<div class="container">
				<ul class="mil-breadcrumbs mil-mb-60">
					<li><a href="home-1.html">Homepage</a></li>
					<li><a href="blog.html">Blog</a></li>
				</ul>
				<h1 class="mil-mb-60">Latest <span class="mil-thin">Blogs</span></h1>
				<a href="#blog" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
					<span>Publications</span>
				</a>
			</div>
		</div>
	</div>
	<!-- banner end -->

	<!-- blog -->
	<section id="blog">
		<div class="container mil-p-120-120">
			<div class="row align-items-center mil-mb-30">
				<div class="col-lg-4 mil-mb-30">
					<h3 class="mil-up">Categories:</h3>
				</div>
				<div class="col-lg-8 mil-mb-30">
					<div class="mil-adaptive-right mil-up">
						<ul class="mil-category-list">
							<?php
							// Get all categories
							$categories = get_categories();

							// Display each category as a filter link
							foreach ($categories as $category) {
								printf(
									'<li><a href="%1$s" %2$s>%3$s</a></li>',
									esc_url(get_category_link($category->term_id)),
									is_category($category->term_id) ? 'class="mil-active"' : '',
									esc_html($category->name)
								);
							}
							?>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
				// Define custom query parameters
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 6, // Adjust the number of posts per page as needed
					'paged' => $paged,
				);

				// Create custom query
				$blog_query = new WP_Query($args);

				// Loop through posts
				if ($blog_query->have_posts()):
					while ($blog_query->have_posts()):
						$blog_query->the_post();
						?>
						<div class="col-lg-12">
							<a href="<?php the_permalink(); ?>" class="mil-blog-card mil-blog-card-hori mil-more mil-mb-60">
								<div class="mil-cover-frame mil-up">
									<?php if (has_post_thumbnail()): ?>
										<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>"
											alt="<?php the_title_attribute(); ?>">
									<?php endif; ?>
								</div>
								<div class="mil-post-descr">
									<div class="mil-labels mil-up mil-mb-30">
										<div class="mil-label mil-upper mil-accent">
											<?php echo esc_html(get_the_category()[0]->name); ?>
										</div>
										<div class="mil-label mil-upper"><?php echo esc_html(get_the_date('M j, Y')); ?></div>
									</div>
									<h4 class="mil-up mil-mb-30"><?php the_title(); ?></h4>
									<p class="mil-post-text mil-up mil-mb-30">
										<?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
									</p>
									<div class="mil-link mil-dark mil-arrow-place mil-up">
										<span>Read more</span>
									</div>
								</div>
							</a>
						</div>
						<?php
					endwhile;

					// Add pagination links
					echo '<div class="mil-pagination">';
					echo paginate_links(
						array(
							'total' => $blog_query->max_num_pages,
							'current' => max(1, get_query_var('paged')),
						)
					);
					echo '</div>';

					// Reset post data
					wp_reset_postdata();
				else:
					// No posts found
					echo 'No posts found.';
				endif;
				?>
			</div>
		</div>
	</section>
	<!-- blog end -->

</main><!-- #main -->

<?php
get_footer();
?>