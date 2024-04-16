<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codexlab
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<!-- wrapper -->
		<div class="mil-wrapper" id="top">

			<!-- cursor -->
			<div class="mil-ball">
				<span class="mil-icon-1">
					<svg viewBox="0 0 128 128">
						<path
							d="M106.1,41.9c-1.2-1.2-3.1-1.2-4.2,0c-1.2,1.2-1.2,3.1,0,4.2L116.8,61H11.2l14.9-14.9c1.2-1.2,1.2-3.1,0-4.2	c-1.2-1.2-3.1-1.2-4.2,0l-20,20c-1.2,1.2-1.2,3.1,0,4.2l20,20c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9c1.2-1.2,1.2-3.1,0-4.2	L11.2,67h105.5l-14.9,14.9c-1.2,1.2-1.2,3.1,0,4.2c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9l20-20c1.2-1.2,1.2-3.1,0-4.2L106.1,41.9	z" />
					</svg>
				</span>
				<div class="mil-more-text">More</div>
				<div class="mil-choose-text">Сhoose</div>
			</div>
			<!-- cursor end -->

			<!-- preloader -->
			<!-- <div class="mil-preloader">
				<div class="mil-preloader-animation">
					<div class="mil-pos-abs mil-animation-1">
						<p class="mil-h3 mil-muted mil-thin">Pioneering</p>
						<p class="mil-h3 mil-muted">Creative</p>
						<p class="mil-h3 mil-muted mil-thin">Excellence</p>
					</div>
					<div class="mil-pos-abs mil-animation-2">
						<div class="mil-reveal-frame">
							<p class="mil-reveal-box"></p>
							<p class="mil-h3 mil-muted mil-thin">ashley.com</p>
						</div>
					</div>
				</div>
			</div> -->
			<!-- preloader end -->

			<!-- scrollbar progress -->
			<div class="mil-progress-track">
				<div class="mil-progress"></div>
			</div>
			<!-- scrollbar progress end -->

			<!-- menu -->
			<div class="mil-menu-frame">
				<!-- frame clone -->
				<div class="mil-frame-top">
					<a href="/" class="mil-logo">
						<img src="http://codexlab-theme.local/wp-content/uploads/2024/04/logo.png" alt="Codexlab logo"
							width="50">
					</a>
					<div class="mil-menu-btn">
						<span></span>
					</div>
				</div>
				<!-- frame clone end -->
				<div class="container">
					<div class="mil-menu-content">
						<div class="row">
							<div class="col-xl-5">

								<nav class="mil-main-menu" id="swupMenu">
									<ul>
										<li class="mil-has-children mil-active">
											<a href="/">Homepage</a>

										</li>
										<li class="mil-has-children">
											<a href="/portfolio">Portfolio</a>

										</li>
										<li class="mil-has-children">
											<a href="/services">Services</a>

										</li>

										<li class="mil-has-children">
											<a href="#.">About Us</a>
										</li>
									</ul>
								</nav>

							</div>
							<div class="col-xl-7">

								<div class="mil-menu-right-frame">
									<div class="mil-animation-in">
										<div class="mil-animation-frame">
											<div class="mil-animation mil-position-1 mil-scale" data-value-1="2"
												data-value-2="2"></div>
										</div>
									</div>
									<div class="mil-menu-right">
										<div class="row">
											<div class="col-lg-7 mil-mb-60">

												<h6 class="mil-muted mil-mb-30">Projects</h6>

												<ul class="mil-menu-list">
													<li><a href="project-1.html" class="mil-light-soft">Stock Mart Lanka</a></li>
													<!-- <li><a href="project-2.html" class="mil-light-soft">Home Security
															Camera</a>
													</li>
													<li><a href="project-3.html" class="mil-light-soft">Kemia Honest
															Skincare</a></li>
													<li><a href="project-4.html" class="mil-light-soft">Cascade of
															Lava</a></li>
													<li><a href="project-5.html" class="mil-light-soft">Air Pro by
															Molekule</a>
													</li>
													<li><a href="project-6.html" class="mil-light-soft">Tony's
															Chocolonely</a>
													</li> -->
												</ul>

											</div>
											<div class="col-lg-5 mil-mb-60">

												<h6 class="mil-muted mil-mb-30">Useful links</h6>

												<ul class="mil-menu-list">
													<li><a href="#." class="mil-light-soft">Privacy Policy</a></li>
													<li><a href="#." class="mil-light-soft">Terms and conditions</a>
													</li>
													<li><a href="#." class="mil-light-soft">Cookie Policy</a></li>
													<li><a href="#." class="mil-light-soft">Careers</a></li>
												</ul>

											</div>
										</div>
										<div class="mil-divider mil-mb-60"></div>
										<div class="row justify-content-between">

											<div class="col-lg-4 mil-mb-60">

												<h6 class="mil-muted mil-mb-30">Sri Lanka</h6>

												<p class="mil-light-soft mil-up">Colombo, Sri Lanka
													<span class="mil-no-wrap">+51 174 705 812</span>
												</p>

											</div>
											<!-- <div class="col-lg-4 mil-mb-60">

												<h6 class="mil-muted mil-mb-30">Germany</h6>

												<p class="mil-light-soft">Leehove 40, 2678 MC De Lier, Netherlands <span
														class="mil-no-wrap">+31 174 705 811</span></p>

											</div> -->
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- menu -->

			<!-- curtain -->
			<div class="mil-curtain"></div>
			<!-- curtain end -->

			<!-- frame -->
			<div class="mil-frame">
				<div class="mil-frame-top">
					<a href="/" class="mil-logo"> <img
							src="http://codexlab-theme.local/wp-content/uploads/2024/04/logo.png" alt="Codexlab logo"
							width="50">
					</a>
					<div class="mil-menu-btn">
						<span></span>
					</div>
				</div>
				<div class="mil-frame-bottom">
					<!-- <div class="mil-current-page"></div> -->
					<div class="mil-back-to-top">
						<a href="#top" class="mil-link mil-dark mil-arrow-place">
							<span>Back to top</span>
						</a>
					</div>
				</div>
			</div>
			<!-- frame end -->

			<!-- content -->
			<div class="mil-content">
				<div id="swupMain" class="mil-main-transition">