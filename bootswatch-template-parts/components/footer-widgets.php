<?
/**
 * The footer widgets.
 *
 * @package Bootswatch
 */
?>

 <?php if ( is_active_sidebar( 'footer' ) ) { ?>
	<div class="row"><hr></div>
	<div class="row">
		<?php dynamic_sidebar( 'footer' ); ?>
	</div>
<?php } ?>
