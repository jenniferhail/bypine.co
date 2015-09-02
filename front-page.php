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

	<?php if( the_content() ) : while( have_posts() ) : the_post(); ?>
		<article class="two-column">
			<?php the_content(); ?>
		</article><!-- .entry-content -->
	<?php endwhile; endif; // end of the loop. ?>

	<article class="one-column">
		<h3 class="question"><?php the_field('one_column_title'); ?></h3>
		<div class="answer"><?php the_field('one_column_content'); ?></div>
	</article>

</section><!-- #primary -->

<section id="blog-feed" class="row">

	<?php
	// The Query
	$blog_feed = new WP_Query( 'post_count=4' ); ?>

	<?php if ( $blog_feed->have_posts() ) : ?>

		<?php while ( $blog_feed->have_posts() ) : $blog_feed->the_post(); ?>

				<?php get_template_part( 'content', 'summary' ); ?>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<!-- Do Nothing -->
	<?php endif; ?>

</section><!-- #blog-feed -->

<script>
<!--
home_navbar();
pine_letter();
//-->
</script>

<?php get_footer(); ?>