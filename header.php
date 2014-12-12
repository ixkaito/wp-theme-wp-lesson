<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site">

	<header class="site-header">
		<h1 class="site-title"><a href="<?php echo esc_url( home_url() ); ?>" ><?php bloginfo( 'name' ); ?></a></h1>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		<?php wp_nav_menu(); ?>
	</header><!-- .site-header -->

	<div class="site-body">

		<aside class="sidebar">
			<?php get_sidebar(); ?>
		</aside><!-- .sidebar -->

		<div class="site-content">