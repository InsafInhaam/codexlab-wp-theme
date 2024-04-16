<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codexlab
 */

get_header();
?>


<!-- banner -->
<div class="mil-inner-banner">
    <div class="mil-banner-content mil-up">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
        </div>
        <div class="container">
            <ul class="mil-breadcrumbs mil-mb-60">
                <li><a href="/">Homepage</a></li>
                <li><a href="/portfolios">Portfolio</a></li>
            </ul>
            <h1 class="mil-mb-60">Designing a <br> Better <span class="mil-thin">World Today</span></h1>
            <a href="#portfolio" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                <span>Our works</span>
            </a>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- portfolio -->
<?php
$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => -1,
);

$portfolio_query = new WP_Query($args);

if ($portfolio_query->have_posts()):
    $counter = 1;
    ?>

    <section id="portfolio">
        <div class="container mil-portfolio mil-p-120-60">

            <div class="mil-lines-place"></div>
            <div class="mil-lines-place mil-lines-long"></div>

            <div class="row justify-content-between align-items-center">
                <?php while ($portfolio_query->have_posts()):
                    $portfolio_query->the_post();
                    $counter += 1 ?>
                    <div class="<?php echo $counter % 2 == 0 ? 'col-lg-6' : 'col-lg-5' ?>">
                        <a href="<?php the_permalink(); ?>" class="mil-portfolio-item mil-more mil-mb-0">
                            <div class="mil-cover-frame mil-vert mil-up">
                                <div class="mil-cover">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                                </div>
                            </div>
                            <div class="mil-descr">
                                <div class="mil-labels mil-up mil-mb-15">
                                    <?php
                                    $categories = get_the_terms(get_the_ID(), 'portfolio_category');
                                    if (!empty($categories)):
                                        ?>
                                        <div class="mil-label mil-upper mil-accent"><?php echo $categories[0]->name; ?></div>
                                    <?php endif; ?>

                                    <div class="mil-label mil-upper"><?php echo get_post_meta(get_the_ID(), 'date', true); ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <h4 class="mil-up"><?php the_title(); ?></h4>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php
    wp_reset_postdata();
endif;
?>

<!-- portfolio end -->

<?php
include get_template_directory() . '/template-parts/call-to-action.php';
?>


<?php
get_footer();
