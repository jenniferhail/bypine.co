<?php
/**
 * Home Page
 *
 * @package Pine
 */

get_header(); ?>

<section id="primary" role="main" class="row">

	<div class="featured-image">
		<?php 

		$image = get_field('featured_image');

		if( !empty($image) ): ?>

			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		<?php endif; ?>
	</div>

	<h2 class="caption-left"><?php the_field('left_caption'); ?></h2>
	<h2 class="caption-right"><?php the_field('right_caption'); ?></h2>

	<?php while ( have_posts() ) : the_post(); ?>
		<div class="two-column">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	<?php endwhile; // end of the loop. ?>

	<div class="one-column">
		<h3 class="question"><?php the_field('one_column_title'); ?></h3>
		<p class="answer"><?php the_field('one_column_content'); ?></p>
	</div>

</section><!-- #primary -->

<?php get_footer(); ?>