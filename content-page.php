<?php
/**
 * Page Template
 *
 * @package Pine
 */

get_header(); ?>

<section id="primary" role="main" class="row">

	<div class="home-logo">
		<a href="<?php echo esc_url( home_url() ); ?>/" class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/assets/images/logo.png'" alt="<?php bloginfo('name'); ?>">
		</a>
	</div>

	<div class="featured-image">

        <nav class="access" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav><!-- #access --> 
	
		<?php 

		$image = get_field('featured_image');

		if( !empty($image) ): ?>

			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		<?php endif; ?>

		<div class="caption-left">
			<?php 

			$image = get_field('left_caption');

			if( !empty($image) ): ?>

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
		</div>

		<h2 class="caption-right"><?php the_field('right_caption'); ?></h2>

	</div>

	<?php if( the_content() ): ?>
		<article class="two-column">
			<?php the_content(); ?>
		</article><!-- .entry-content -->
	<?php endif; ?>

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