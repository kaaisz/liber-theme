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
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/10.10.0/lazyload.min.js"></script>
<script src="https://cdn.rawgit.com/scottjehl/picturefill/3.0.2/dist/picturefill.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script>
(function(w, d){
var b = d.getElementsByTagName('body')[0];
var s = d.createElement("script"); s.async = true;
var v = !("IntersectionObserver" in w) ? "8.8.0" : "10.10.0";
s.src = "https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/" + v + "/lazyload.min.js";
w.lazyLoadOptions = {};
b.appendChild(s);
}(window, document));
</script>
</body>
</html>
