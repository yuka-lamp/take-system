// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
import videojs from "video.js";
import slick from "slick-carousel";

$(window).on("load", function () {
  $(".drawer__menu-cta a").on("click", function () {
    $("#drawerCheckbox").prop("checked", false);
  });
});

$(window).on("load resize", function () {
  let w = $(window).width();
  let md = 991.98;
  if (w <= md) {
    // 画像src切り替え
    $(".img-switch").each(function () {
      $(this).attr("src", $(this).attr("src").replace("_pc", "_sp"));
    });
  }
});

$(function ($) {

  // seo
  $(".ac dt").on("click", function() {
    $(this).next().slideToggle();
  });

    $(".column__nav__list").scrollLeft(40);


});

// メニューをクリックで閉じる
$('.drawer__menu__wrap a').on('click', function(event) {
  $('.drawer__checkbox').trigger('click');
});

