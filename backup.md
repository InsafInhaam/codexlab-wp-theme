<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'codexlab'); ?></a>

<!-- <header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if (is_front_page() && is_home()):
				?>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
			else:
				?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
			endif;
			$codexlab_description = get_bloginfo('description', 'display');
			if ($codexlab_description || is_customize_preview()):
				?>
				<p class="site-description"><?php echo $codexlab_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'codexlab'); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id' => 'primary-menu',
				)
			);
			?>
		</nav>
	</header> -->
<!-- #masthead -->

    <footer id="colophon" class="site-footer">
    	<div class="site-info">
    		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'codexlab' ) ); ?>">
    			<?php
    			/* translators: %s: CMS name, i.e. WordPress. */
    			printf( esc_html__( 'Proudly powered by %s', 'codexlab' ), 'WordPress' );
    			?>
    		</a>
    		<span class="sep"> | </span>
    			<?php
    			/* translators: 1: Theme name, 2: Theme author. */
    			printf( esc_html__( 'Theme: %1$s by %2$s.', 'codexlab' ), 'codexlab', '<a href="http://underscores.me/">Underscores.me</a>' );
    			?>
    	</div><!-- .site-info -->
    </footer><!-- #colophon -->

</div><!-- #page -->

    <section class="error-404 not-found">
    	<header class="page-header">
    		<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'codexlab'); ?></h1>
    	</header><!-- .page-header -->

    	<div class="page-content">
    		<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'codexlab'); ?>
    		</p>

    		<?php
    		get_search_form();

    		the_widget('WP_Widget_Recent_Posts');
    		?>

    		<div class="widget widget_categories">
    			<h2 class="widget-title"><?php esc_html_e('Most Used Categories', 'codexlab'); ?></h2>
    			<ul>
    				<?php
    				wp_list_categories(
    					array(
    						'orderby' => 'count',
    						'order' => 'DESC',
    						'show_count' => 1,
    						'title_li' => '',
    						'number' => 10,
    					)
    				);
    				?>
    			</ul>
    		</div><!-- .widget -->

    		<?php
    		/* translators: %1$s: smiley */
    		$codexlab_archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'codexlab'), convert_smilies(':)')) . '</p>';
    		the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$codexlab_archive_content");

    		the_widget('WP_Widget_Tag_Cloud');
    		?>

    	</div><!-- .page-content -->
    </section>
    <!-- .error-404 -->
