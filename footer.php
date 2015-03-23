<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Pine
 */
?>

	</div><!-- #main -->

</div><!-- #page -->
<footer id="footer" role="contentinfo" class="row">
	<div class="container">
		<div id="contact-info">
			<a href="mailto:hello@bypine.co"><span class="email">hello@bypine.co</span></a><a href="tel:1-270-304-7616"><span class="phone">+1 270 3047616</span></a>
		</div>
		<div id="copyright">
			&copy; <?php echo date( 'Y' ); echo '&nbsp;'; echo bloginfo( 'name' ); ?>
		</div>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>