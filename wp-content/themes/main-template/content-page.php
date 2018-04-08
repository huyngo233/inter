<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<?php
$pageID = get_the_ID();
if ($pageID == PRODUCT_PAGE_ID) {
  $additional = " id='content-page-product' ";
} else {
  $additional = " id='content-page' ";
}
?>
<div <?=$additional?>>
  <div class="row">
    <?php if ($pageID == CONTACT_PAGE_ID) { ?>
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
            if (in_array($k, [0, 3])) {
              $postContentLeft  = "<img src='" . _getPostFeaturedImg($post->id) . "'>";
              $postContentRight = $post->post_content;
            } else {
              $postContentRight = "<img src='" . _getPostFeaturedImg($post->id) . "'>";
              $postContentLeft  = $post->post_content;
            }
            print "<div class='col-lg-1 col-md-1 col-sm-1'></div>";
            print "<div class='col-lg-5 col-md-5 col-sm-5 product-story'>";
            print "<div class='product-inf-left'>" . $postContentLeft . "</div>";
            print "</div>";
            print "<div class='col-lg-5 col-md-5 col-sm-5 product-story'>";
            print "<div class='product-inf-right'>" . $postContentRight . "</div>";
            print "</div>";
            print "<div class='col-lg-1 col-md-1 col-sm-1'></div>";
            print "<div class='col-lg-12 col-md-12 col-sm-12 pd60'></div>";
          } else {
            $bgImg = _getPostFeaturedImg($post->id);
            print "<div class='col-lg-12 col-md-12 col-sm-12' style='padding-bottom: 60px'>";
            print "<div class='bg-image product-bg' style=\"background-image: url('{$bgImg}')\">";
            if ($post->post_content) {
              print "<div class='product-bg-caption'>{$post->post_content}</div>";
            }
            print "</div>";
            print "</div>";
          }
        }
        print "<div class=\"clearfix\"></div>";
      }

      get_module('product');
    } else { ?>

    <div class="" id="show-page" >
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
          <?php the_content(); ?>
          <?php
            if ($pageID == ABOUT_PAGE_ID) {
              print "<div class='txtcenter mt80'><button type='button' class='btn btn-info'>" . ABOUT_US_PAGE_BTN . "</button></div>";
            }

          ?>
        </div><!-- .entry-content -->
      </article><!-- #post-## -->
    </div>
    <?php } ?>
  </div>
</div>