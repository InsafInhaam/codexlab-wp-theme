<!-- blog -->
<section>
    <div class="container mil-p-120-60">
        <div class="row align-items-center mil-mb-30">
            <div class="col-lg-6 mil-mb-30">
                <h3 class="mil-up">Related Ariticles:</h3>
            </div>
            <div class="col-lg-6 mil-mb-30">
                <div class="mil-adaptive-right mil-up">
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="mil-link mil-dark mil-arrow-place">
                        <span>View all</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            // Query latest two posts
            $args = array(
                'posts_per_page' => 2,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $latest_posts = new WP_Query($args);
            if ($latest_posts->have_posts()) :
                while ($latest_posts->have_posts()) :
                    $latest_posts->the_post();
            ?>
                    <div class="col-lg-6">
                        <a href="<?php the_permalink(); ?>" class="mil-blog-card mil-mb-60">
                            <div class="mil-cover-frame mil-up">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="cover">
                            </div>
                            <div class="mil-post-descr">
                                <div class="mil-labels mil-up mil-mb-30">
                                    <div class="mil-label mil-upper mil-accent"><?php echo esc_html(get_the_category()[0]->name); ?></div>
                                    <div class="mil-label mil-upper"><?php echo esc_html(get_the_date('M j Y')); ?></div>
                                </div>
                                <h4 class="mil-up mil-mb-30"><?php the_title(); ?></h4>
                                <p class="mil-post-text mil-up mil-mb-30"><?php echo esc_html(wp_trim_words(get_the_content(), 20)); ?></p>
                                <div class="mil-link mil-dark mil-arrow-place mil-up">
                                    <span>Read more</span>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
<!-- blog end -->
