<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package codexlab
 */

get_header();
?>


<?php
while (have_posts()):
	the_post();
	?>

	<!-- banner -->
	<div class="mil-inner-banner">
		<div class="mil-banner-content mil-center mil-up">
			<div class="container">
				<ul class="mil-breadcrumbs mil-center mil-mb-60">
					<li><a href="<?php echo esc_url(home_url('/')); ?>">Homepage</a></li>
					<li><a
							href="<?php echo esc_url(get_post_type_archive_link(get_post_type())); ?>"><?php echo esc_html(get_post_type()); ?></a>
					</li>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				</ul>
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
	<!-- banner end -->

	<!-- publication -->
	<section id="blog">
		<div class="container mil-p-120-90">
			<div class="row justify-content-center">
				<div class="col-lg-12">

					<?php if (has_post_thumbnail()): ?>
						<div class="mil-image-frame mil-horizontal mil-up">
							<?php the_post_thumbnail('large', array('class' => 'mil-scale')); ?>
						</div>
					<?php endif; ?>


					<div class="mil-info mil-up mil-mb-90">
						<div>Category: &nbsp;<span class="mil-dark"><?php echo get_the_category_list(', '); ?></span>
						</div>
						<div>Date: &nbsp;<span class="mil-dark"><?php echo get_the_date('F Y'); ?></span></div>
						<div>Author: &nbsp;<span class="mil-dark"><?php the_author(); ?></span></div>
					</div>

				</div>
				<div class="col-lg-8">

					<?php the_content(); ?>

				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-8 mt-5">
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()):
						comments_template();
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- publication end -->

	<?php
endwhile; // End of the loop.
?>

<?php
include get_template_directory() . '/template-parts/sections/related-articles/index.php';
?>


<?php
// get_sidebar();
get_footer();
?>