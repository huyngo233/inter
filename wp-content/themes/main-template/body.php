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

    <!--   EXCHANGE BOX-->
    <div class="container-fluid second-container pagewidth">
      <div class="row ">

        <div class="clearfix"></div>
      </div>
    </div>

    <!--  WHY CRYPTO-->
    <div class="container-fluid second-container pagewidth">
      <div class="">
        <div class="h4"><?php print get_category(12)->name ?></div>
        <div>
          <div class="row">

          </div>
        </div>
      </div>
    </div>

    <!--  OTHER CURRENCIES WE OFFER-->
    <div class="container-fluid second-container pagewidth">
      <div class="others">
        <div class="h4"><?php print get_category(17)->name ?></div>
        <div class="row">

        </div>
      </div>
    </div>
    <!--  Book an Appointment-->
    <div class="container-fluid second-container pagewidth">
      <div class="">
        <div class="h4"></div>
        <div class="txtcenter"></div>
      </div>
    </div>