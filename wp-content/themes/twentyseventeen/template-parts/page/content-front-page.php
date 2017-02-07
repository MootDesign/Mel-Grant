<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg"></div>


	<nav id="site-navigation" class="main-navigation" role="navigation" align="center">

		<!-- <ul id="primary-menu">

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

		</ul> -->

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

	</nav><!-- #site-navigation -->


<div class="container-full-width">
	<div class="col-xs-12" align="center">
	<img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png" width="186px;">
	</div>
	
	<div class="col-xs-12" align="center"><h1 style="font-size: 29px; font-weight: bold; color: #000">ME</h1></div>
	
	<div class="col-xs-12" align="center"><h5 style="margin-top: 25px; color: #d5d6d8; font-weight: normal; font-size: 12px;">MELANIE GRANT</h5></div>
</div>
<div class="container-full-width">

	<div class="col-xs-5" style="margin-top: 80px;"></div>
	<div class="col-xs-2" align="center" style="margin-top: 80px;"><?php the_post_thumbnail(); ?></div>
	<div class="col-xs-5" style="margin-top: 80px;"></div>
	
	<div class="col-sm-12" style="margin-top: 40px;" align="center"><?php the_content(); ?></div>
</div>