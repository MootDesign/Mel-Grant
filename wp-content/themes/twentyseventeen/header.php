<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>
<!--
	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div>
			</div>
		<?php endif; ?>

	</header>

	<nav id="site-navigation" class="main-navigation" role="navigation" align="center">

		<ul id="primary-menu">

		<?php

			$locations = get_theme_mod( 'nav_menu_locations' );

			$menu_id = @$locations[ 'primary' ];



			$items = wp_get_nav_menu_items( $menu_id );



			// foreach( $items as $item ) :

		?>

				<li>

					<span class="plus"></span>

					<a href="#"><?php echo $item->post_title ?></a>

					<span class="subtitle"><?php echo $item->post_excerpt ?></span>

				</li>

		<?php

			// endforeach;

		?>

		</ul>

		<ul id="primary-menu">

			<li class="item col-sm-12">

				<a href="#" class="">words</a>

			</li>

			<li class="item col-sm-12" data-bg="white">

				<a href="#" class="">shoots</a>

			</li>

			<li class="item col-sm-12">

				<a href="#news" class="">inspiration</a>

			</li>

			<li class="item col-sm-12">

				<a href="#" class="">me</a>
			</li>

		</ul>

	</nav> 
	
	<?php
	// If a regular post or page, and not the front page, show the featured image.
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
		echo '<div class="single-featured-image-header">';
		the_post_thumbnail( 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
