<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package codexlab
 */

get_header();
?>

<main id="primary" class="site-main">
	<!-- 404 -->
	<div class="mil-404-banner mil-dark-bg">
		<div class="mil-animation-frame">
			<div class="mil-animation mil-position-4 mil-scale" data-value-1="9" data-value-2="1.4" style="right: 40%;">
			</div>
		</div>
		<div class="mi-invert-fix mil-up">
			<div class="container">
				<div class="mil-404-frame">

					<div class="mil-scale-frame">

						<h1 class="mil-404" data-text="404">404</h1>

					</div>

					<h4 class="mil-404-text mil-dark mil-mb-20">
						<?php esc_html_e('Oops! That page can&rsquo;t be found.', 'codexlab'); ?>
					</h4>
					<p class="mil-404-text mil-mb-60"><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'codexlab'); ?>
					</p>
					<a href="/" class="mil-button mil-arrow-place">
						<span>Back to homepage</span>
					</a>
				</div>

			</div>
		</div>
	</div>
	<!-- 404 end -->
</main><!-- #main -->

<?php
get_footer();
