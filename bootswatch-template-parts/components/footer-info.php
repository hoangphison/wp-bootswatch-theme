<?php
/**
 * The footer widgets.
 *
 * @package Bootswatch
 */

( function() {

	$author = array(
		'name'  => __( 'Nabil Kadimi', 'bootswatch' ),
		'title' => __( 'Independent WordPress Developer', 'bootswatch' ),
		'url'   => 'https://kadimi.com',
	);

	?>

	<div class="row">
		<div class="col-md-12"><hr></div>
		<div class="col-md-4 col-md-offset-8">
			<p class="muted pull-right small">
				&copy; <?php echo esc_html( date( 'Y' ) ); ?>
				<span class="site-title"><?php echo esc_html( get_bloginfo( 'title' ) ); ?></span>
				<?php
				if ( apply_filters( 'bootswatch_show_theme_author', true ) ) {
					echo '&ndash; ';
					printf(
						// Translators: Author details.
						esc_html( __( 'Designed by %s.', 'bootswatch' ) ),
						sprintf(
							'<a href="%1$s" title="%2$s">%3$s</a>',
							esc_url( $author['url'] ),
							esc_html( $author['title'] ),
							esc_html( $author['name'] )
						)
					);
				}
				?>
			</p>
		</div>
	</div>

	<?php

} )();
