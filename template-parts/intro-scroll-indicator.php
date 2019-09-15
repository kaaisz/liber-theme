<?php
/**
 * Template part for displaying scroll indicator
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liber-theme
 */

?>

<div class="indicator">
  <?php if (ua_smartphone() == true): ?>
    <p class="indicator__text">Scroll to left</p>
  <?php else: ?>
    <p class="indicator__text">Scroll to left</p>
  <?php endif;?>
  <div class="indicator__bars">
    <span class="indicator__bar"></span>
    <span class="indicator__bar"></span>
    <span class="indicator__bar"></span>
  </div>
</div>