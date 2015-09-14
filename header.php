<?php
/**
 * The header template
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Pine
 */
?>

<!DOCTYPE html>
 
<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <!-- favicon & links -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="p:domain_verify" content="506d3b083c674a9c2f45bb17492ee1b7"/>
    
    <!-- Typekit -->
    <script>
      (function(d) {
        var config = {
          kitId: 'zii2ovq',
          scriptTimeout: 3000
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>

    <!-- stylesheets are enqueued via functions.php -->

    <!-- all other scripts are enqueued via functions.php -->
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/html5shiv.js" type="text/javascript"></script>
    <![endif]-->

    <?php // Lets other plugins and files tie into our theme's <head>:
    wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
	<div id="page">
		<!--
        <header id="site-header" role="banner" class="row">            
			<a href="<?php echo esc_url( home_url() ); ?>/" class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png'" alt="<?php bloginfo('name'); ?>">
			</a>
		</header>
        -->

        <header>

            <div class="left">
                <div class="home-logo">
                    <a href="<?php echo esc_url( home_url() ); ?>/" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/assets/images/logo.png'" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div>
                <nav class="access" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </nav><!-- #access -->             
            </div>

            <div class="featured-image">
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
                <div class="caption-right">
                    <?php if( the_field('right_caption') ): ?>
                        <h2><?php the_field('right_caption'); ?></h2>
                    <?php endif; ?>
                </div>
            </div>            

        </header>

		<div id="main" class="row">