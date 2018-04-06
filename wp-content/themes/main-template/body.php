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

<body <?php body_class(); ?>>
  <div class="body-wrap">
    <!--  INIT PAGE-->
    <?php get_bodyheader(true);?>

    <div class="container-fluid second-container">
      <h2><?=get_post(VESTIBULUM_POST_ID)->post_title;?></h2>
      <div class="row vestibulum">
        <?php
          $post = get_post(VESTIBULUM_POST_ID)->post_content;
          $images = explode("\r\n", $post);

          foreach ($images as $img) {
            $img = trim($img);
            if ($img) {
              print "<div class='col-lg-3 col-md-3 col-sm-3 product'>";
              print $img;
              print "</div>";
            }
          }
        ?>
        <div class="clearfix"></div>
      </div>
    </div>

    <div class="container-fluid second-container">
      <div class="donec">
        <h2><?=get_post(DONEC_POST_ID)->post_title;?></h2>
        <article><?=get_post(DONEC_POST_ID)->post_content?></article>

        <input type="button" class="btn btn-info" value="request a demo">
      </div>
    </div>

    <div class="container-fluid second-container">
      <?php $imgBg = _getPostFeaturedImg(HABITASSE_POST_ID); ?>
      <div class="habitasse bg-image" style="background-image: url('<?=$imgBg?>')">
        <div class="habitasse-caption"><?=get_post(HABITASSE_POST_ID)->post_title?></div>
      </div>
    </div>

    <div class="container-fluid second-container">
      <div class="platform txtcenter">
        <h2><?=get_cat_name(PLATFORM_CATEGORY_ID)?></h2>
        <div class="row">
          <?php
            $myposts = _getAllPostByCate(PLATFORM_CATEGORY_ID);
            foreach ($myposts as $post) {
              print "<div class=\"col-lg-4 col-md-4 col-sm4\">";
              print $post->post_content;
              print "</div>";
            }
          ?>
          <div class="clearfix"></div>
        </div>
        <input type="button" class="btn btn-info" value="learn more about platform">
      </div>
    </div>

    <?php get_module('product'); ?>
