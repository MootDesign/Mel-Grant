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

<header>
        <nav id="mainNav" class="navbar navbar-custom navbar-fixed-top affix-top">
          <!-- Original nav <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top affix-top"> -->
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header page-scroll">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand page-scroll [ white ]" href="#page-top"><i class="fa fa-bars" aria-hidden="true"></i> Menu</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  
              </div>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
        </nav>
      </header>

      
<div class="container-full-width">
<img class="banner-image" src="<?php echo get_template_directory_uri(); ?>/img/banner.jpg">
</div>