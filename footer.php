<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package liber-theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="footer site-footer">
		<div class="site-info">
			<p class="copyright"><?php echo date(Y);?> &copy; Timelag.ltd All rights reserved.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page @header.php -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/main.js"></script>

</body>
</html>
