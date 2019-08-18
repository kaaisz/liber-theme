<?php
/**
 * Template part for displaying scroll indicator
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liber-theme
 */
 get_header();?>

<!-- Website toppage - 書架 -->

<!-- invoke scroll indicator -->
<?php get_template_part( 'template-parts/intro-scroll-indicator', 'none' )?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section class="intro indicator-trigger" id="intro">
      <div class="content__wrap">
        <div class="content">

          <!-- top_title is optional -->
          <?php if (!get_field('top_title')): ?>
            <p class="intro__title"><?php the_field('top_title', 55);?></p>
          <?php endif; ?>
          <!-- top_description is required -->
          <p class="intro__content"><?php the_field('top_description', 55);?></p>
          
        </div>
      </div>
    </section>

    <section class="main" id="article">
      <header class="page-header">
        <h2 class="page-title">書架</h2>
      </header><!-- .page-header -->        
        <div class="content shelf">
        <?php
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
              <?php the_post_thumbnail('large', array('class' => 'article__img'));?>
              <div class="article__title ptrn-a">
                <h3 class="article__title_main"><?php the_title();?></h3>
                <h4 class="article__title_subs"><?php the_field('article_sub_title');?></h3>
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
      <div class="share">
        <h3>Twitter</h3>
        <a class="twitter-timeline" data-width="230" data-height="380" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </section>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();?>