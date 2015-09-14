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
			<a href="mailto:hello@bypine.co"><i class="icon-email"></i><span class="email">hello@bypine.co</span></a><a href="tel:1-270-304-7616"><i class="icon-phone"></i><span class="phone">+1 270 3047616</span></a><a href="http://www.instagram.com/bypine"><i class="icon-instagram"></i></a><a href="http://www.facebook.com/bypine"><i class="icon-facebook"></i></a><a href="http://www.pinterest.com/jenniferhail"><i class="icon-pinterest"></i></a>
		</div>
		<div id="copyright">
			<a href="/privacy-policy"><span class="privacy">Privacy Policy</span></a>&copy; <?php echo date( 'Y' ); echo '&nbsp;'; echo bloginfo( 'name' ); ?>
		</div>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>