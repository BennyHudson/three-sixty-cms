<?php
	function wedo_menus() {
	  register_nav_menus(array( 
				'header'      => __( 'Header Menu' ),
				'footer'      => __( 'Footer Menu' ),
			)
	  );
	}
?>
