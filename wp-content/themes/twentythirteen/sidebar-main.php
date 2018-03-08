<?php
/**
 * The sidebar containing the footer widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="secondary" class="sidebar-container" role="complementary">
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- .widget-area -->
	</div><!-- #secondary -->
<?php else : ?>
	<div id="secondary" class="sidebar-container" role="complementary">
        <?php if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?>
<!--
		<div class="widget-area">
			<?php //if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?>
		</div>
-->
        <!-- .widget-area -->
	</div><!-- #secondary -->

<?php endif; ?>
