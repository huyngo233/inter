<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<div id="content-page">
  <div class="row">
    <?php
      $pageID = get_the_ID();
      if ($pageID == CONTACT_PAGE_ID) {
    ?>
    <div class="col-lg-5 col-md-5 col-sm-5">
      <?=get_post(CONTACT_DETAIL_POST_ID)->post_content?>
    </div>
    <div class="col-lg-7 col-md-7 col-sm-7" style="padding-left: 40px; border-left: 1px solid #eeeeee;">
      <div class="contact-form"><?=do_shortcode(get_post(CONTACT_FORM_POST_ID)->post_content)?></div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 pd60">
      <h2><?=get_post(CONTACT_MAP_POST_ID)->post_title?></h2>
      <div class="maps">
        <?=get_post(CONTACT_MAP_POST_ID)->post_content?>
      </div>
    </div>
    <div class="clearfix"></div>
    <?php  } else if ($pageID == PRODUCT_PAGE_ID) {
      $posts = _getAllPostByCate(PRODUCT_CATEGORY_ID);
      if ($posts) {
        foreach ($posts as $k => $post) {
          if (!in_array($k, [1, 4])) {
            if ($k % 2 == 0) {
              $postContentLeft  = _getPostFeaturedImg($post->id);
              $postContentRight = $post->post_content;
            }
            else {
              $postContentRight = _getPostFeaturedImg($post->id);
              $postContentLeft  = $post->post_content;
            }

            print "<div class='col-lg-6 col-md-6 col-sm-6'>";
            print "<div class='product-inf-left'>" . $postContentLeft . "</div>";
            print "</div>";
            print "<div class='col-lg-6 col-md-6 col-sm-6'>";
            print "<div class='product-inf-right'>" . $postContentRight . "</div>";
            print "</div>";
          }
          else {
            $bgImg = _getPostFeaturedImg($post->id);
            print "<div class='col-lg-12 col-md-12 col-sm-12'>";
            print "<div class='bg-image product-bg' style=\"background-image: url('{$bgImg}')\"></div>";
            if ($post->post_content) {
              print "<div class='product-bg-caption'>{$post->post_content}</div>";
            }
            print "</div>";
          }
        }
        print "<div class=\"clearfix\"></div>";
      }
    } else { ?>

    <div class="" id="show-page" >
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
          <?php the_content(); ?>
        </div><!-- .entry-content -->
      </article><!-- #post-## -->
    </div>
    <?php } ?>
  </div>
</div>