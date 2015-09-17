<?php
/**
 * Contact Page Template
 *
 * @package Pine
 */

get_header(); ?>

<section id="primary" role="main" class="row">

	<article class="contact-left">
		<?php the_content(); ?>
	</article><!-- .entry-content -->

	<article class="contact-right">
		<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
	</article>

	<?php if( the_field('one_column_title') ): ?>
		<article class="one-column">
			<h3 class="question"><?php the_field('one_column_title'); ?></h3>
			<div class="answer"><?php the_field('one_column_content'); ?></div>
		</article>
	<?php endif; ?>

</section><!-- #primary -->

<script>
<!--
home_navbar();
pine_letter();
//-->
</script>

<?php get_footer(); ?>