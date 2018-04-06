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
      if ($pageID == 14) {
    ?>
    <div class="col-lg-5 col-md-5 col-sm-5">
      <?=get_post(122)->post_content?>
    </div>
    <div class="col-lg-7 col-md-7 col-sm-7" style="padding-left: 40px; border-left: 1px solid #eeeeee;">
      <div class="contact-form"><?=do_shortcode(get_post(111)->post_content)?></div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 pd60">
      <h2><?=get_post(109)->post_title?></h2>
      <div class="maps">
        <?=get_post(109)->post_content?>
      </div>
    </div>
    <div class="clearfix"></div>
    <?php  } else if ($pageID == 2) { ?>

    <?php  } else { ?>

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