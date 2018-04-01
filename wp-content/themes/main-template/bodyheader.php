<?php
/**
 * The template for displaying the body
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<div class="body-wrap">
  <div class="container-fluid main-container pagewidth">
    <?php get_mainmenu()?>
    <div class="row">
      <?php if (!is_page()) { ?>

      <?php } ?>
    </div>
    <?php  if (!is_page()) { ?>

    </div>
    <?php } ?>
  </div>

