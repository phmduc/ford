<?php
/**
 * Sidebar Template
 */

if ( is_active_sidebar( 'primary_widget_area' ) || is_archive() || is_single() ) :
?>
<div id="sidebar" class="col-lg-3  w-blog order-md-first col-sm-12 oder-sm-last">
	Side bar here
</div><!-- /#sidebar -->
<?php
	endif;
?>
