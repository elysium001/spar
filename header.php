<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'spar' ); ?></a>

	<header id="masthead" class="site-header py-3">
		<div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
          </div>
          <div class="col-4 text-center">
		  	<?php
			// the_custom_logo('d-inline-block align-top');
			// the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php
			else :
				?>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php
			endif;
			$spar_description = get_bloginfo( 'description', 'display' );
			if ( $spar_description || is_customize_preview() ) :
				?>
				<!-- <p class="site-description"><?php echo $spar_description; /* WPCS: xss ok. */ ?></p> -->
			<?php endif; ?>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div>
        </div>
	</header><!-- #masthead -->
	<div class="nav-scroller py-1 mb-2">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'bs-example-navbar-collapse-1',
					'menu_class'      => 'navbar-nav mr-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				) );
			?>
		</nav><!-- #site-navigation -->
	</div>

	<div id="content" class="site-content">
