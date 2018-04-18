/* global screenReaderText */
/**
 * Theme JS file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($) {

  $('.player-button').click(function () {
    var videoURL = $('#video-player').attr('src');
    $('#video-player').attr('src', videoURL + '&autoplay=1');

    $(this).hide();
    $('.player-caption').hide();

    return false;
  });

});

function moveToPage() {
  var target = jQuery('#menu-item-18 > a');
  var page = target.attr('href');

  window.location.href = page;
}