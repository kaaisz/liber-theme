<?php get_header();?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section class="intro" id="intro">
      <div class="content">
        <p class="intro__title"><?php the_field('top_title', 55);?></p>
        <p class="intro__content"><?php the_field('top_description', 55);?></p>
      </div>
    </section>
    <section class="main" id="main">
      <header class="page-header">
        <?php
        the_archive_title( '<h2 class="page-title">', '</h2>' );
        ?>
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
            <a href=<?php the_permalink();?>>
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
    </section>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();?>