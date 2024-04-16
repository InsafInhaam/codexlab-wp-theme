<?php
// Ensure WordPress can recognize this as a single portfolio item
get_header(); ?>

<?php
// Start the loop
while (have_posts()):
    the_post(); ?>
    <!-- banner -->
    <div class="mil-inner-banner">
        <div class="mil-banner-content mil-up">
            <div class="mil-animation-frame">
                <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
            </div>
            <div class="container">
                <ul class="mil-breadcrumbs mil-mb-60">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Homepage</a></li>
                    <li><a href="/portfolios">Portfolio</a></li>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                </ul>
                <h1 class="mil-mb-60"><?php the_title(); ?></h1>
                <a href="#project" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                    <span>Read more</span>
                </a>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- project -->
    <section id="project">
        <div class="container mil-p-120-120">
            <div class="swiper-container mil-1-slider mil-up">
                <div class="swiper-wrapper">
                    <?php
                    // Check if portfolio gallery fields exist
                    $portfolio_gallery_1 = get_field('portfolio_gallery_1');
                    $portfolio_gallery_2 = get_field('portfolio_gallery_2');
                    $portfolio_gallery_3 = get_field('portfolio_gallery_3');
                    $portfolio_gallery_4 = get_field('portfolio_gallery_4');
                    $portfolio_gallery_5 = get_field('portfolio_gallery_5');

                    // Check if each gallery field has images
                    if ($portfolio_gallery_1 || $portfolio_gallery_2 || $portfolio_gallery_3): ?>
                        <?php if ($portfolio_gallery_1): ?>
                            <div class="swiper-slide">
                                <div class="mil-image-frame mil-horizontal mil-drag">
                                    <img src="<?php echo esc_url($portfolio_gallery_1['url']); ?>"
                                        alt="<?php echo esc_attr($portfolio_gallery_1['alt']); ?>">
                                    <a data-fancybox="gallery" data-no-swup
                                        href="<?php echo esc_url($portfolio_gallery_1['url']); ?>" class="mil-zoom-btn">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/zoom.svg"
                                            alt="zoom">
                                    </a>
                                </div>
                            </div>

                        <?php endif; ?>
                        <?php if ($portfolio_gallery_2): ?>
                            <div class="swiper-slide">
                                <div class="mil-image-frame mil-horizontal mil-drag">
                                    <img src="<?php echo esc_url($portfolio_gallery_2['url']); ?>"
                                        alt="<?php echo esc_attr($portfolio_gallery_2['alt']); ?>">
                                    <a data-fancybox="gallery" data-no-swup
                                        href="<?php echo esc_url($portfolio_gallery_2['url']); ?>" class="mil-zoom-btn">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/zoom.svg"
                                            alt="zoom">
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($portfolio_gallery_3): ?>
                            <div class="swiper-slide">
                                <div class="mil-image-frame mil-horizontal mil-drag">
                                    <img src="<?php echo esc_url($portfolio_gallery_3['url']); ?>"
                                        alt="<?php echo esc_attr($portfolio_gallery_3['alt']); ?>">
                                    <a data-fancybox="gallery" data-no-swup
                                        href="<?php echo esc_url($portfolio_gallery_3['url']); ?>" class="mil-zoom-btn">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/zoom.svg"
                                            alt="zoom">
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($portfolio_gallery_4): ?>
                            <div class="swiper-slide">
                                <div class="mil-image-frame mil-horizontal mil-drag">
                                    <img src="<?php echo esc_url($portfolio_gallery_4['url']); ?>"
                                        alt="<?php echo esc_attr($portfolio_gallery_4['alt']); ?>">
                                    <a data-fancybox="gallery" data-no-swup
                                        href="<?php echo esc_url($portfolio_gallery_4['url']); ?>" class="mil-zoom-btn">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/zoom.svg"
                                            alt="zoom">
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($portfolio_gallery_5): ?>
                            <div class="swiper-slide">
                                <div class="mil-image-frame mil-horizontal mil-drag">
                                    <img src="<?php echo esc_url($portfolio_gallery_5['url']); ?>"
                                        alt="<?php echo esc_attr($portfolio_gallery_5['alt']); ?>">
                                    <a data-fancybox="gallery" data-no-swup
                                        href="<?php echo esc_url($portfolio_gallery_5['url']); ?>" class="mil-zoom-btn">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/zoom.svg"
                                            alt="zoom">
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="mil-info mil-up">
                <div>Client: &nbsp;<span class="mil-dark"><?php echo get_field('client'); ?></span></div>
                <div>Date: &nbsp;<span class="mil-dark"><?php echo get_field('date'); ?></span></div>
                <div>Author: &nbsp;<span class="mil-dark"><?php echo get_the_author(); ?></span></div>
            </div>
            <div class="row justify-content-between mil-p-120-90">
                <div class="col-lg-5">
                    <h3 class="mil-up mil-mb-60"><?php the_title(); ?></h3>
                </div>
                <div class="col-lg-6">
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->
                </div>
            </div>
            <div class="mil-works-nav mil-up">
                <!-- <a href="#" class="mil-link mil-dark mil-arrow-place mil-icon-left">
                    <span>Prev project</span>
                </a>
                <a href="/portfolios" class="mil-link mil-dark">
                    <span>All projects</span>
                </a>
                <a href="#" class="mil-link mil-dark mil-arrow-place">
                    <span>Next project</span>
                </a> -->
            </div>
        </div>
    </section>
    <!-- project end -->
    <?php
endwhile; // End of the loop.

include get_template_directory() . '/template-parts/call-to-action.php';
?>

<?php
// Include the footer
get_footer();
