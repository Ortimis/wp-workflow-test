<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awps
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid" role="contentinfo">
		<div class="site-info">
			<div class="container">
				<div class="row justify-center">
					<ul class="footer-menu">
						<li> <a href="#">Impressum</a> </li>
					</ul>
				</div>
				<div class="row justify-center">
					<p class="copy-text">Resonance e.V. &copy; <?php echo date("Y"); ?></p> 
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
