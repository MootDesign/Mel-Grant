<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Mel Grant home">
		<title>Mel Grant</title>

		<?php wp_head(); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	</head>
	
	<?php 
		
		if( is_front_page() ):
			$awesome_classes = array( 'moot-class', 'my-class' );
		else:
			$awesome_classes = array( 'no-moot-class' );
		endif;
		
	?>
	
<body <?php body_class( $awesome_classes ); ?>>
<div class="container-full-width">
<img src="<?php echo get_template_directory_uri(); ?>/img/banner.jpg">
</div>