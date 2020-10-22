<?php
/**
 * Bootswatch classes.
 *
 * @package Bootswatch
 */

/**
 * Returns classes to be used for the primary container.
 *
 * @return Array The classes.
 */
function bootswatch_primary_classes() {
	$classes = is_active_sidebar( 'sidebar' )
		? 'col-md-8'
		: 'col-md-12'
	;

	$classes = apply_filters( 'bootswatch_primary_classes', $classes );

	return $classes;
}
