<?php 
/**
 * Archive header
 *
 * @package Pine
 */
?>
<header class="archive-header">
	<h1 class="archive-title">
		<?php
			// Formatting based on the Underscores theme
			// https://github.com/Automattic/_s/blob/master/archive.php
			if ( is_category() ) :
				single_cat_title();

			elseif ( is_tag() ) :
				single_tag_title();

			elseif ( is_tax() ) :
				single_term_title();

			elseif ( is_author() ) :
				printf( __( 'Author: %s', 'pine' ), '<span class="vcard">' . get_the_author() . '</span>' );

			elseif ( is_day() ) :
				printf( __( 'Day: %s', 'pine' ), '<span>' . get_the_date() . '</span>' );

			elseif ( is_month() ) :
				printf( __( 'Month: %s', 'pine' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'pine' ) ) . '</span>' );

			elseif ( is_year() ) :
				printf( __( 'Year: %s', '_s' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'pine' ) ) . '</span>' );
			else :
				_e( 'Archives', 'pine' );

			endif;
		?>
	</h1>
</header><!-- .page-header -->
