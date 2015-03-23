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
<footer id="footer" role="contentinfo" class="row container">
	<div id="copyright">
		&copy; <?php echo date( 'Y' ); echo '&nbsp;'; echo bloginfo( 'name' ); ?>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>