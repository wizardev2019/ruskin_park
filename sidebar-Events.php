<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Ruskin Park
 */

if ( ! is_active_sidebar( 'Events' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'Events' ); ?>
</div><!-- #secondary -->
