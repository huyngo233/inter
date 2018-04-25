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
      $pId = !is_page() ? HOMEINTRO_POST_ID : get_the_ID();

      $customPage = get_post($pId);
      if ($customPage) {
        $customField = get_post_meta($pId);
        $video = $customField['video'][0];
        if (!$video) {
          $pageImg = _getPostFeaturedImg($pId);
        }
      }

      if (!is_page()) {
    ?>
      <div class="col-lg-6 col-md-6 col-sm-6 bg-background">
        <?php
          if ($video) {
            print $video;
          } else {
            print "<div class=\"bg-image\"  style=\"background-image: url('{$pageImg}')\"></div>";
          }
        ?>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 bg-caption hidden-xs-down">
        <?php $post = get_post(HOMEINTRO_POST_ID); ?>
        <div class="bg-caption-box">
          <h4><?=$post->post_title?></h4>
          <p class="bg-separate">&nbsp;&nbsp;&nbsp;&nbsp;</p>
          <p class="caption-explain"><?=$post->post_content?></p>
        </div>
      </div>

    <?php
      } else {
        if (!$video && !$pageImg) {
          $pageImg  = _getPostFeaturedImg(PAGE_DEFAULT_BACKGROUND_ID);
        }

        if ($video) {
          $videoCaption = $customField['video'][1];
          print "<div class='col-lg-12 col-md-12 col-sm-12 video player-box'>{$video}";
          print $videoCaption ? "<div class='player-caption'>{$videoCaption}</div>" : "";
          print "<div class='player-button'>" . VIDEO_BTN_NAME . " <i class=\"fa fa-play\" aria-hidden=\"true\"></i></div>";
          print "</div>";
        } else {
          print "<div class=\"page-intro bg-image\" style=\"background-image: url('{$pageImg}')\"></div>";

        }
      }
    ?>
    <div class="clearfix"></div>
  </div>
</div>

