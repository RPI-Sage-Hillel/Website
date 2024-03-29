<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!-- Header and Nav -->
	<div class="top-bar row">
		<div class="two columns">
			<div id="logo">
				<a href="<?php echo esc_url(home_url()); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php get_template_part ('logo'); ?>
				</a>
			</div>
		</div>
		<nav id="site-navigation" class="main-navigation fourteen columns" role="navigation">
			<h3 class="menu-toggle"><?php esc_attr_e( 'Menu', 'bartleby' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'bartleby' ); ?>"><?php esc_attr_e( 'Skip to content', 'bartleby' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav-menu') ); ?>
			<?php global $bartleby_options; $bartleby_settings = get_option( 'bartleby_options', $bartleby_options ); ?>
		</nav>
		<?php //if( $bartleby_settings['social_bar'] ) get_template_part( 'social' , 'block' ); ?>

	</div>
  <!-- End Header and Nav -->