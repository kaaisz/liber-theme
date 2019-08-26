<?php
/**
 * Template part for displaying scroll indicator
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liber-theme
 */

?>

<div class="intro__scroll">
  <?php if (ua_smartphone() == true): ?>
    <p class="intro__scroll-text">Scroll to left</p>
  <?php else: ?>
    <p class="intro__scroll-text">Scroll to left</p>
  <?php endif;?>
  <span class="intro__scroll-bar"></span>
  <span class="intro__scroll-bar"></span>
  <span class="intro__scroll-bar"></span>
</div>