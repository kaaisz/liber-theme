<?php
/**
 * Template part for displaying scroll indicator
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liber-theme
 */

 get_header();?>
<!-- 裏表紙 -->

<!-- invoke scroll indicator -->
<?php //get_template_part( 'template-parts/intro-scroll-indicator', 'none' )?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section class="indicator-trigger main" id="article">
      <header class="page-header">
        <h2 class="page-title"><?php single_cat_title(); ?></h2>
      </header><!-- .page-header -->
        <div class="content shelf">
        <?php
        $field_value = get_field('article_ura_title');

        if ( !have_posts() ):
          echo '<div>Sorry, No posts here.</div>';
        endif;

        if ( have_posts() ) :
        /* Start the Loop */
        while ( have_posts() ) :
          the_post();

          /*
          * Include the Post-Type-specific template for the content.
          * If you want to override this in a child theme, then include a file
          * called content-___.php (where ___ is the Post Type name) and that will be used instead.
          */
          // get_template_part( 'template-parts/content-page', get_post_type() );
        ?>
          <div class="article">
            <a class="article__container" href=<?php the_permalink();?>>
              <div class="article__img"></div>
              <div class="article__title ptrn-a">
                <h3 class="article__title_main-ura"><?php the_field('article_ura_title');?></h3>
                <h4 class="article__title_subs-ura"><?php the_field('article_ura_description');?></h3>
              </div>
            </a>
          </div>
        <?php endwhile;

        the_posts_navigation();

        else :

        get_template_part( 'template-parts/content', 'none' );

      endif;
      ?>
      </div>
      <?php get_template_part ('template-parts/content-social', 'none');?>
    </section>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();?>