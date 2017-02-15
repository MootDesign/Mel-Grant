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

<a href="#" id="site-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" /></a>

<div id="home-banner-wrapper">
	<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg"></div>

	<div class="home-banner-desc">
		<h1 class="site-name">Melanie Grant</h1>
		<p class="site-desc">Lorem ipsum dolor sit amet</p>
	</div>
</div>
<div id="home-main-content">
	<div class="container-full-width home-about">
		<div class="col-xs-12" align="center">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_down2.png" width="186px;">
		</div>

		<div class="col-xs-12" align="center"><h1 style="font-size: 29px; font-weight: bold; color: #000">ME</h1></div>

		<div class="col-xs-12" align="center"><h5 style="margin-top: 25px; color: #d5d6d8; font-weight: normal; font-size: 12px;">MELANIE GRANT</h5></div>
	</div>
	<div class="container-full-width home-about-content">

		<div class="col-xs-5" style="margin-top: 80px;"></div>
		<div class="col-xs-2" align="center" style="margin-top: 80px;"><?php the_post_thumbnail('medium'); ?></div>
		<div class="col-xs-5" style="margin-top: 80px;"></div>

		<div class="col-sm-12" style="margin-top: 40px;" align="center"><?php the_content(); ?></div>
	</div>

	<div class="container" style="margin-top: 100px;">
			<?php
		$args = array(
			'posts_per_page'   => -1,
			'category'         => '5',
			'post_type'        => 'post',
			'post_status'      => 'publish',
			'suppress_filters' => true
		);
		$x = 1;
		$date = get_the_date( $format, $post->ID );
		$posts_array = get_posts( $args );
			foreach ($posts_array as $post) {
		if ($x == 2) { $offset = ""; $x = 0; } else { $offset = "vert-offset-top-12"; }
				?>
				<div class="col-sm-6 <?=$offset?>" style="margin-bottom: 50px;" align="center">
					<a href="<?=get_permalink();?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>">
					<p><?=$date?></p>
					<p><?=$post->post_content?></span></p>
				</div></a>
				<?php
			$x++;
			}
		 ?>

	</div>
</div>
