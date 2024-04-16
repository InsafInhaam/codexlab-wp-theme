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
<div class="mil-dark-bg">
    <div class="mil-inner-banner">
        <div class="mi-invert-fix">
            <div class="mil-banner-content mil-up">
                <div class="mil-animation-frame">
                    <div class="mil-animation mil-position-4 mil-scale" data-value-1="6" data-value-2="1.4"></div>
                </div>
                <div class="container">
                    <ul class="mil-breadcrumbs mil-light mil-mb-60">
                        <li><a href="home-1.html">Homepage</a></li>
                        <li><a href="services.html">Services</a></li>
                    </ul>
                    <h1 class="mil-muted mil-mb-60">This is <span class="mil-thin">what</span><br> we do <span
                            class="mil-thin">best</span></h1>
                    <a href="#services" class="mil-link mil-accent mil-arrow-place mil-down-arrow">
                        <span>Our services</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- services -->
    <section id="services">
        <div class="mi-invert-fix">
            <div class="container mil-p-120-60">
                <div class="row">
                    <div class="col-lg-5">

                        <div class="mil-lines-place mil-light"></div>

                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <a href="service.html"
                                    class="mil-service-card-lg mil-more mil-accent-cursor mil-offset">
                                    <h4 class="mil-muted mil-up mil-mb-30">Branding and <br>Identity Design</h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">Our creative agency is a team
                                        of professionals focused on helping your brand grow.</p>
                                    <ul class="mil-service-list mil-light mil-mb-30">
                                        <li class="mil-up">UX Audits</li>
                                        <li class="mil-up">Design thinking</li>
                                        <li class="mil-up">Methodologies</li>
                                        <li class="mil-up">Wireframing</li>
                                    </ul>
                                    <div class="mil-link mil-accent mil-arrow-place mil-up">
                                        <span>Read more</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <a href="service.html" class="mil-service-card-lg mil-more mil-accent-cursor">
                                    <h4 class="mil-muted mil-up mil-mb-30">Website Design <br>and Development</h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">Our creative agency is a team
                                        of professionals focused on helping your brand grow.</p>
                                    <ul class="mil-service-list mil-light mil-mb-30">
                                        <li class="mil-up">UX Audits</li>
                                        <li class="mil-up">Design thinking</li>
                                        <li class="mil-up">Methodologies</li>
                                        <li class="mil-up">Wireframing</li>
                                    </ul>
                                    <div class="mil-link mil-accent mil-arrow-place mil-up">
                                        <span>Read more</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <a href="service.html"
                                    class="mil-service-card-lg mil-more mil-accent-cursor mil-offset">
                                    <h4 class="mil-muted mil-up mil-mb-30">Advertising and <br>Marketing Campaigns</h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">Our creative agency is a team
                                        of professionals focused on helping your brand grow.</p>
                                    <ul class="mil-service-list mil-light mil-mb-30">
                                        <li class="mil-up">UX Audits</li>
                                        <li class="mil-up">Design thinking</li>
                                        <li class="mil-up">Methodologies</li>
                                        <li class="mil-up">Wireframing</li>
                                    </ul>
                                    <div class="mil-link mil-accent mil-arrow-place mil-up">
                                        <span>Read more</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <a href="service.html" class="mil-service-card-lg mil-more mil-accent-cursor">
                                    <h4 class="mil-muted mil-up mil-mb-30">Creative Consulting <br>Concept Development
                                    </h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">Our creative agency is a team
                                        of professionals focused on helping your brand grow.</p>
                                    <ul class="mil-service-list mil-light mil-mb-30">
                                        <li class="mil-up">UX Audits</li>
                                        <li class="mil-up">Design thinking</li>
                                        <li class="mil-up">Methodologies</li>
                                        <li class="mil-up">Wireframing</li>
                                    </ul>
                                    <div class="mil-link mil-accent mil-arrow-place mil-up">
                                        <span>Read more</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- services end -->

<?php
include get_template_directory() . '/template-parts/call-to-action.php';
?>

<?php
get_footer();
