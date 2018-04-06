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
  <div class="row" <?=(!is_page()) ? 'style="border: 1px solid #ccc;"' : ''?>>
    <?php
      if (!is_page()) {
        $imgBg = _getPostFeaturedImg(HOMEINTRO_POST_ID);
    ?>
      <div class="col-lg-6 col-md-6 col-sm-6 bg-background">
        <div class="bg-image"  style="background-image: url('<?=$imgBg?>')"></div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 bg-caption">
        <?php $post = get_post(HOMEINTRO_POST_ID); ?>
        <div class="bg-caption-box">
          <h4><?=$post->post_title?></h4>
          <p class="bg-separate">&nbsp;&nbsp;&nbsp;&nbsp;</p>
          <p class="caption-explain"><?=$post->post_content?></p>
        </div>
      </div>

    <?php
      } else {
        $customPage = get_post(get_the_ID());
        if ($customPage) {
          $customField = get_post_meta(get_the_ID());
          $video = $customField['video'][0];
          if (!$video) {
            $pageImg = _getPostFeaturedImg(get_the_ID());
          }
        } else {
          $pageImg  = get_post(PAGE_DEFAULT_BACKGROUND_ID)->post_content;
        }
        if ($video) {
          print "<div class='col-lg-12 col-md-12 col-sm-12 video'>{$video}</div>";
        } else {
          print "<div class=\"page-intro bg-image\" style=\"background-image: url('{$pageImg}')\"></div>";
        }
      }
    ?>
    <div class="clearfix"></div>
  </div>
</div>

