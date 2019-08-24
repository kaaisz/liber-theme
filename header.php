<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package liber-theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/main.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" class="header site-header">
	<div class="site-branding">
		<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
		?>
			<nav id="site-navigation" class="nav main-navigation">
				<div class="nav__fixed">
					<div id="nav__toggle" class="nav__toggle">
						<span class="nav__bar"></span>
						<span class="nav__bar"></span>
						<span class="nav__bar"></span>
					</div>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div>
			</nav><!-- #site-navigation -->
			<div class="nav__drawer">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'        => 'nav__menus',
					) );
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'secondary-menu',
						'menu_class'        => 'nav__menus_footer',
					) );
				?>
			</div>
			<div class="nav__overlay"></div>
		<?php else : ?>
			<nav id="site-navigation" class="nav main-navigation">
				<div class="nav__fixed">
					<div id="nav__toggle" class="nav__toggle">
						<span class="nav__bar"></span>
						<span class="nav__bar"></span>
						<span class="nav__bar"></span>
					</div>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div>
			</nav><!-- #site-navigation -->
			<div class="nav__drawer">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'        => 'nav__menus',
					) );
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'secondary-menu',
						'menu_class'        => 'nav__menus_footer',
					) );
				?>
			</div>
			<div class="nav__overlay"></div>
		<?php	endif; ?>
	</div><!-- .site-branding -->
</header><!-- #masthead -->

<div id="page" class="site">

	

	<div id="content" class="site-content">
