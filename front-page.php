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
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    
    <section class="intro indicator-trigger" id="intro">
    <?php get_template_part( 'template-parts/intro-scroll-indicator', 'none' )?>
      <div class="intro__container">
        <div class="intro__content-wrap">
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
              <?php 
                  $thumbnail_id = get_post_thumbnail_id();
                  $image = wp_get_attachment_image_src( $thumbnail_id, 'full' );
                  $srcset = wp_get_attachment_image_srcset( $thumbnail_id );
                  $image_large = wp_get_attachment_image_src( $thumbnail_id, 'large' );
                  $image_minify = wp_get_attachment_image_src( $thumbnail_id, 'medium' );
                  $image_min = wp_get_attachment_image_src( $thumbnail_id, 'small' );
                  $src_full = $image[0];
                  $src_large = $image_large[0];
                  $src_minify = $image_minify[0];
                  if(is_front_page()):
                      if(!empty($image[0])) :
              ?>          
                          <picture>
                            <source media="(min-width: 680px)" data-srcset="<?php echo($src_large)?>">
                            <source media="(min-width: 300px)" data-srcset="<?php echo($src_large)?> 2x, <?php echo($src_medium)?> 1x">
                            <!-- <img class="article__img lazy" data-src="<?php // echo($src_full); ?>" data-srcset="<?php // echo($srcset); ?>" alt="挿絵：<?php // the_title();?>〜<?php // the_field('article_sub_title');?>"> -->
                            <img class="article__img lazy" src="<?php echo($src_minify); ?>" alt="挿絵：<?php the_title();?>〜<?php the_field('article_sub_title');?>">
                          </picture>

                      <?php else: ?>
                          <div class="article__img"></div>
              <?php 
                      endif; 
                  endif;
              ?>
              <?php //the_post_thumbnail('large', array('class' => 'article__img'));?>
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
        <div class="share__cont">
          <a class="twitter-timeline lazy" data-width="280" data-height="100%" href="https://twitter.com/liber_community?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <h3>Facebook</h3>
        <div class="share__cont">
          <div class="iframe-cont noscroll">
            <div class="fb-page lazy" data-href="https://www.facebook.com/liber.community0/" data-tabs="timeline" data-width="280" data-height="1000" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/liber.community0/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/liber.community0/">Facebook</a></blockquote></div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();?>