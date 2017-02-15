<?php
/**
 * Template Name: Words
 */
 ?>
<style type="text/css">
body {
    background: #000;
    color: #fff
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="container-full-width">Menu</div>

<div class="container" style="margin-top: 100px;">
<div class="col-xs-12" align="center" style="text-transform: uppercase; font-size: 28px;">Words</div>
<div class="col-xs-12" align="center" style="font-size: 12px; margin-top: 20px;">by MELANIE GRANT</div>
</div>


	<div class="container" style="margin-top: 100px;">
			<?php
		$args = array(
			'posts_per_page'   => -1,
			'category'         => '3',
			'post_type'        => 'post',
			'post_status'      => 'publish',
			'suppress_filters' => true
		);
		$x = 1;
		$date = get_the_date( $format, $post->ID );
		$posts_array = get_posts( $args );
			foreach ($posts_array as $post) {
		if ($x == 2) { $offset = "vert-offset-top-12"; $x = 0; } else { $offset = ""; }
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
