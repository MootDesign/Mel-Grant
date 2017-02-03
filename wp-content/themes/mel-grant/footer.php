	<?php wp_footer(); ?>
	
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
	</body>
</html>