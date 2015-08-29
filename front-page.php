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

<p>Please <a class="show-popup" href="#" data-showpopup="1" >click here</a> to see the popup.</p>
<div class="overlay-bg">
</div>
<!-- Begin MailChimp Signup Form -->
	<div class="overlay-content popup1" id="mc_embed_signup">
	<form action="//bypine.us10.list-manage.com/subscribe/post?u=90363b999232548e9532004b0&amp;id=874c472f49" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	    <div id="mc_embed_signup_scroll">
		<button class="close-btn">X</button>
	<div class="mc-field-group">
		<label for="mce-EMAIL">Email Address </label>
		<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
	</div>
	<div class="mc-field-group">
		<label for="mce-FNAME">First Name </label>
		<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
	</div>
		<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	    <div style="position: absolute; left: -5000px;"><input type="text" name="b_90363b999232548e9532004b0_874c472f49" tabindex="-1" value=""></div>
	    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
	    </div>
	</form>
	</div>
<!--End mc_embed_signup-->

<script>
<!--
home_navbar();
pine_letter();
//-->
</script>

<?php get_footer(); ?>