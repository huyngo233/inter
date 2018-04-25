<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

      <footer id="main-footer" class="container-fluid site-footer" role="contentinfo">
        <div class="site-map">
          <div class="row">
            <div class='col-lg-2 col-md-2 col-sm-2'></div>
            <?php
              $menuName =get_nav_menu_locations();
              $location = 'sitemap';
              for ($i = 1; $i < MAX_SITEMAP_NUMBER; $i++) {
                if (has_nav_menu($location . $i)) {
                  print "<div class='col-lg-2 col-md-2 col-sm-2'>";
                  print "<nav class=\"sitemap-navigation\" role=\"navigation\">";
                  print "<h3>" . wp_get_nav_menu_object($menuName[$location . $i])->name . "</h3>";
                  wp_nav_menu(array(
                    'menu_class'     => 'nav-menu',
                    'theme_location' => $location . $i,
                  ));
                  print "</nav>";
                  print "</div>";
                }
              }
            ?>
            <div class='col-lg-2 col-md-2 col-sm-2'></div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="site-info row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="footer-logo text-left">
              <a href="<?=get_home_url()?>">
                <?=get_post(FOOTER_POST_ID)->post_content;?>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 text-right footer-logo-span">
            <span class="hidden-xs"><?=get_post(COPYRIGHT_POST_ID)->post_content;?></span>
          </div>
          <div class="clearfix"></div>
          </div><!-- .site-info -->
      </footer><!-- .site-footer -->
    </div>
  </body>
</html>
