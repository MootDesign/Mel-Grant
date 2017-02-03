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
<div class="navbar-header">
<button style="display: block!important; position: absolute; top: 5vw; left: 5vw;" onclick="openNav()" type="button" class="navbar-toggle collapsed full-height-menu-toggle toggle-menu" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="st0-menu bar-one"></span>
<span class="st0-menu bar-two"></span>
<span class="st0-menu bar-three"></span>
</button>
</div>

<div class="container-full-width">
<img class="banner-image" src="<?php echo get_template_directory_uri(); ?>/img/banner.jpg">
</div>

	
<script type="text/javascript">
	/* Open when someone clicks on the span element */
function openNav() {
	jQuery(document).ready(function($){
   	 	document.getElementById("myNav").style.width = "100%";
   	 	$('.bar-one').addClass("open");
    	$('.bar-two').addClass("open");
    	$('.bar-three').addClass("open");
    });
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
	jQuery(document).ready(function($){
    	$('.bar-one').removeClass("open");
    	$('.bar-two').removeClass("open");
    	$('.bar-three').removeClass("open");
    	$('.toggle-menu').removeClass("open");
    });
}
</script>