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
      <h2><?=get_post(21)->post_title;?></h2>
      <div class="row vestibulum">
        <?php
          $post = get_post(21)->post_content;
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
        <h2><?=get_post(23)->post_title;?></h2>
        <article><?=get_post(23)->post_content?></article>

        <input type="button" class="btn btn-info" value="request a demo">
      </div>
    </div>

    <div class="container-fluid second-container">
      <?php $imgBg = _getPostFeaturedImg(25); ?>
      <div class="habitasse bg-image" style="background-image: url('<?=$imgBg?>')">
        <div class="habitasse-caption"><?=get_post(23)->post_title?></div>
      </div>
    </div>

    <div class="container-fluid second-container pagewidth">
      <div class="">
        <div class="h4"></div>
        <div class="txtcenter"></div>
      </div>
    </div>