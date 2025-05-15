<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebBandits
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-content">
			<div class="container">

			</div>
		</div>
		<div class="site-info">
			<div class="container">
			&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>
			<span class="sep"> | </span>
			Made by <a href="https://webbandits.nl" target="_blank" rel="noopener">WebBandits</a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
