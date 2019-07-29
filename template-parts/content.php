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
		<?php	if ( is_singular() ) :?>
			<div class="article-page__title">
				<h1 class="article-page__title_main"><?php the_title();?></h1>
				<p class="article-page__title_subs"><?php the_field('article_sub_title'); ?></p>
			</div>
		<?php else : ?>
			<div class="article-page__title">
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
		<div class="share">
			<h3>シェア</h3>
			<div class="share__container">
				<div class="share__button">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="icon-twitter" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
						<path class="st0" d="M139.7,79.6c0.1,0.9,0.1,1.8,0.1,2.7c0,27.1-20.6,58.3-58.3,58.3c-11.6,0-22.4-3.4-31.5-9.2  c1.6,0.2,3.2,0.3,4.9,0.3c9.6,0,18.4-3.2,25.4-8.8c-9-0.2-16.6-6.1-19.2-14.2c1.3,0.2,2.5,0.3,3.9,0.3c1.8,0,3.7-0.3,5.4-0.7  c-9.4-1.9-16.4-10.2-16.4-20.1v-0.3c2.7,1.5,5.9,2.5,9.3,2.6c-5.5-3.7-9.1-10-9.1-17.1c0-3.8,1-7.3,2.8-10.4  c10.1,12.5,25.3,20.6,42.3,21.5c-0.3-1.5-0.5-3.1-0.5-4.7c0-11.3,9.1-20.5,20.5-20.5c5.9,0,11.2,2.5,15,6.5c4.6-0.9,9.1-2.6,13-4.9  c-1.5,4.8-4.8,8.8-9,11.3c4.1-0.4,8.1-1.6,11.8-3.2C147.2,73.1,143.7,76.7,139.7,79.6L139.7,79.6z"/>
					</svg>
					Twitter
				</div>
				<div class="share__button">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="icon-note" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
						<path class="st0" d="M67.2,138.9h65.7V61.2H85.4c-0.3,0-0.9,0.3-1.2,0.6c-5.6,6-11.1,12.1-16.6,18.1c-0.3,0.3-0.5,0.9-0.5,1.5  L67.2,138.9z M139.4,48c3.6,0,6.6,3,6.6,6.6v90.9c0,3.6-2.9,6.6-6.6,6.6H60.6c-3.6,0-6.6-3-6.6-6.6c0-0.7,0-64,0-66.5  c0-2.6,0.8-4.7,2.6-6.6l19.8-21.6c1.7-1.9,3.7-2.7,6.2-2.7H139.4z M80.3,93.8c-2.9,0-5.3-2.4-5.3-5.3c0-2.9,2.4-5.3,5.3-5.3h8.9l0-9  c0-2.9,2.4-5.3,5.3-5.3s5.3,2.4,5.3,5.3v14.2c0,2.9-2.4,5.3-5.3,5.3H80.3z"/>
					</svg>
					Note
				</div>
				<div class="share__button">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="icon-facebook" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
						<path class="st0" d="M89.2,150v-44.7h-15V87.5h15v-14c0-15.2,9.3-23.5,22.9-23.5c6.5,0,12.1,0.5,13.7,0.7v15.9h-9.4  c-7.4,0-8.8,3.5-8.8,8.7v12.2h16.7l-2.3,17.8h-14.4V150"/>
					</svg>
					Facebook
				</div>
				<div class="share__button">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="icon-line" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
						<path class="st0" d="M110.7,88.4v15.9c0,0.4-0.3,0.7-0.7,0.7h-2.5c-0.2,0-0.5-0.1-0.6-0.3l-7.3-9.8v9.4c0,0.4-0.3,0.7-0.7,0.7h-2.5  c-0.4,0-0.7-0.3-0.7-0.7V88.5c0-0.4,0.3-0.7,0.7-0.7h2.5c0.2,0,0.5,0.1,0.6,0.3l7.3,9.8v-9.4c0-0.4,0.3-0.7,0.7-0.7h2.5  C110.4,87.7,110.7,88.1,110.7,88.4L110.7,88.4z M92.4,87.7h-2.5c-0.4,0-0.7,0.3-0.7,0.7v15.9c0,0.4,0.3,0.7,0.7,0.7h2.5  c0.4,0,0.7-0.3,0.7-0.7V88.4C93.1,88.1,92.8,87.7,92.4,87.7L92.4,87.7z M86.3,101h-6.9V88.4c0-0.4-0.3-0.7-0.7-0.7h-2.5  c-0.4,0-0.7,0.3-0.7,0.7v15.9c0,0.2,0.1,0.4,0.2,0.5c0.1,0.1,0.3,0.2,0.5,0.2h10.2c0.4,0,0.7-0.3,0.7-0.7v-2.5  C87,101.4,86.7,101,86.3,101L86.3,101z M124.1,87.7h-10.2c-0.4,0-0.7,0.3-0.7,0.7v15.9c0,0.4,0.3,0.7,0.7,0.7h10.2  c0.4,0,0.7-0.3,0.7-0.7v-2.5c0-0.4-0.3-0.7-0.7-0.7h-6.9v-2.7h6.9c0.4,0,0.7-0.3,0.7-0.7v-2.6c0-0.4-0.3-0.7-0.7-0.7h-6.9v-2.7h6.9  c0.4,0,0.7-0.3,0.7-0.7v-2.5C124.8,88.1,124.5,87.7,124.1,87.7L124.1,87.7z M150,68.2v63.7c0,10-8.2,18.1-18.2,18.1H68.1  c-10,0-18.1-8.2-18.1-18.2V68.1c0-10,8.2-18.1,18.2-18.1h63.7C141.9,50,150,58.2,150,68.2z M136.2,95.6c0-16.3-16.3-29.6-36.4-29.6  S63.4,79.3,63.4,95.6c0,14.6,12.9,26.8,30.4,29.2c4.3,0.9,3.8,2.5,2.8,8.2c-0.2,0.9-0.7,3.6,3.1,2c3.9-1.6,21-12.3,28.6-21.1  C133.7,108,136.2,102.1,136.2,95.6z"/>
					</svg>
					Line
				</div>
			</div>
		</div>
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //liber_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
