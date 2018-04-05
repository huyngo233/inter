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

    <div class="container-fluid second-container">
      <div class="platform txtcenter">
        <h2><?=get_cat_name(9)?></h2>
        <div class="row">
          <?php
            $myposts = _getAllPostByCate(9);
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

    <div class="container-fluid second-container">
      <div class="solution">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
          <?php
            $myposts = _getAllPostByCate(3);

            foreach ($myposts as $key => $post) {
              if ($key % 2) {
                $paddingClass = 'pl30';
              } else {
                $paddingClass = 'pr30';
              }
              print "<div class=\"col-lg-4 col-md-4 col-sm-4 {$paddingClass}\">";
              print "<h4>{$post->post_title}</h4>";
              print "<div>{$post->post_content}</div>";
              print "</div>";
            }
          ?>
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>

    <div class="container-fluid second-container" style="background-color: #1a70a6;">
      <div class="havequestion">
        <article><?=get_post(34)->post_content?></article>
      </div>
    </div>

    <div class="container-fluid second-container">
      <div class="facilisis">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3"></div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h3><?=get_post(36)->post_title?></h3>
            <article><?=get_post(36)->post_content?></article>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3"></div>
        </div>
      </div>
    </div>
