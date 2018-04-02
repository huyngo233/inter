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

<div class="container-fluid main-container pagewidth">
  <?php get_mainmenu()?>
  <div class="row" style="border: 1px solid #ccc;">
    <?php
      if (!is_page()) {
        $imgBg = _getPostFeaturedImg(1);
    ?>
      <div class="col-lg-6 col-md-6 col-sm-6 bg-background">
        <div class="bg-image"  style="background-image: url('<?=$imgBg?>')"></div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 bg-caption">
        <?php $post = get_post(1); ?>
        <div class="bg-caption-box">
          <h4><?=$post->post_title?></h4>
          <p class="bg-separate">&nbsp;&nbsp;&nbsp;&nbsp;</p>
          <p class="caption-explain"><?=$post->post_content?></p>
        </div>
      </div>
      <div class="clearfix"></div>
    <?php } else { ?>


    <?php } ?>
  </div>
</div>

