<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liber-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article-page'); ?>>
	<header class="entry-header">
	<?php the_post_thumbnail('large', array('class' => 'article-page__img')); ?>
	<div class="intro__scroll">
		<?php if (ua_smartphone() == true): ?>
			<p class="intro__scroll-text">Swipe to left</p>
		<?php else: ?>
			<p class="intro__scroll-text">Scroll to left</p>
		<?php endif;?>
		<span class="intro__scroll-bar"></span>
		<span class="intro__scroll-bar"></span>
		<span class="intro__scroll-bar"></span>
	</div>
		<?php	if ( is_singular() ) :?>
			<div class="article-page__title intro">
				<h1 class="article-page__title_main"><?php the_title();?></h1>
				<p class="article-page__title_subs"><?php the_field('article_sub_title'); ?></p>
			</div>
		<?php else : ?>
			<div class="article-page__title intro">
				<h2 class="entry-title article-page__title"><a href="<?php get_permalink();?>" rel="bookmark"><?php the_title();?></a></h2>
				<div class="article-page__title_subs"><?php the_field('article_sub_title'); ?></div>
			</div>
		<?php 
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<section class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'liber-theme' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'liber-theme' ),
		// 	'after'  => '</div>',
		// ) );
		?>
		<?php get_template_part ( 'template-parts/content-social', 'none' );?>
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //liber_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
