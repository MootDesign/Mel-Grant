<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Mel Grant
 * @since 1.0
 * @version 1.0
 */

?>

<button  id="burger-menu1" class="hamburger hamburger--vortex" type="button">
  <span class="hamburger-box">
    <span class="hamburger-inner"></span>
  </span>
</button>


<div id="myNav" class="overlay">


  <!-- Overlay content -->
  <div class="overlay-content">
		<?php
			$menu_name = 'main_menu';
			$menuLocations = get_nav_menu_locations();
	    $menuID = $menuLocations['top'];
	    $primaryNav = wp_get_nav_menu_items($menuID);

			foreach ( $primaryNav as $navItem ) {
		    echo '<a href="'.$navItem->url.'">'.$navItem->title.'</a>';
			}
		?>
  </div>

</div>
