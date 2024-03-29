<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liber-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php liber_theme_post_thumbnail(); ?>

	<section class="entry-content page">
		<div class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div><!-- .entry-header -->
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'liber-theme' ),
				'after'  => '</div>',
			) );
			?>
			<?php if ( get_edit_post_link() ) : ?>
			<div class="entry-footer">
				<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'liber-theme' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
			</div><!-- .entry-footer -->
		<?php endif; ?>
	</section><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
