<?php
/**
 * Created by Huy Ngo.
 * User: huyng
 * Date: 06/04/18
 * Time: 10:09 PM
 */
?>

<div class="container-fluid second-container">
  <div class="solution">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2"></div>
      <?php
      $myposts = _getAllPostByCate(SOLUTION_CATEGORY_ID);

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
    <article><?=get_post(HAVEQUESTION_POST_ID)->post_content?></article>
  </div>
</div>

<div class="container-fluid second-container">
  <div class="facilisis">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3"></div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h3><?=get_post(FACILISSIS_POST_ID)->post_title?></h3>
        <article><?=get_post(FACILISSIS_POST_ID)->post_content?></article>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3"></div>
    </div>
  </div>
</div>