<section class="mil-portfolio-slider-frame">
    <div class="mil-animation-frame">
        <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="1" data-value-2="2" style="top: -60px; right: -4px;"></div>
    </div>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-9">
                <div class="swiper-container mil-portfolio-slider mil-up">
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                        );
                        $portfolio_query = new WP_Query($args);
                        if ($portfolio_query->have_posts()):
                            while ($portfolio_query->have_posts()):
                                $portfolio_query->the_post(); ?>
                                <div class="swiper-slide">
                                    <div class="mil-portfolio-item mil-slider-item" data-swiper-parallax="-30">
                                        <div class="mil-cover-frame mil-drag">
                                            <div class="mil-cover" data-swiper-parallax-scale="1.3">
                                                <?php the_post_thumbnail('large'); ?>
                                            </div>
                                        </div>
                                        <div class="mil-descr" data-swiper-parallax-x="104%" data-swiper-parallax-opacity="0">
                                            <div class="mil-descr-text" data-swiper-parallax-y="100%" data-swiper-parallax-opacity="0">
                                                <div class="mil-labels mil-mb-15">
                                                    <div class="mil-label mil-upper mil-accent"><?php echo esc_html(get_the_category()[0]->name); ?></div>
                                                    <div class="mil-label mil-upper"><?php echo esc_html(get_post_meta(get_the_ID(), 'date', true)); ?></div>
                                                </div>
                                                <h5><?php the_title(); ?></h5>
                                            </div>
                                            <div data-swiper-parallax-y="120" data-swiper-parallax-opacity="0">
                                                <a href="<?php the_permalink(); ?>" class="mil-button mil-arrow-place">
                                                    <span>View Project</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mil-relative">
                <div class="mil-portfolio-nav">
                    <div class="mil-portfolio-btns-frame">
                        <div class="swiper-portfolio-pagination"></div>
                        <div class="mil-slider-nav">
                            <div class="mil-slider-arrow mil-prev mil-portfolio-prev mil-arrow-place"></div>
                            <div class="mil-slider-arrow mil-portfolio-next mil-arrow-place"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
