<?php
/**
 * Home Page
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
	
		<?php 

		$image = get_field('featured_image');

		if( !empty($image) ): ?>

			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		<?php endif; ?>

		<h2 class="caption-left"><?php the_field('left_caption'); ?></h2>
		<h2 class="caption-right"><?php the_field('right_caption'); ?></h2>

	</div>

	<?php while ( have_posts() ) : the_post(); ?>
		<article class="two-column">
			<?php the_content(); ?>
		</article><!-- .entry-content -->
	<?php endwhile; // end of the loop. ?>

	<article class="one-column">
		<h3 class="question"><?php the_field('one_column_title'); ?></h3>
		<div class="answer"><?php the_field('one_column_content'); ?></div>
	</article>

</section><!-- #primary -->

<?php get_footer(); ?>