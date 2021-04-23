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
  // slick
  $(".home__system__slide").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
    dots: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  // front-page.php - タブ切り替え
  let tabs = $(".tab"); // tabのクラスを全て取得し、変数tabsに配列で定義
  $(".tab").on("click", function() { // tabをクリックしたらイベント発火
    $(".active").removeClass("active"); // activeクラスを消す
    $(this).addClass("active"); // クリックした箇所にactiveクラスを追加
    const index = tabs.index(this); // クリックした箇所がタブの何番目か判定し、定数indexとして定義
    $(".content").removeClass("show").eq(index).addClass("show"); // showクラスを消して、contentクラスのindex番目にshowクラスを追加
  })

  // seo
  $(".ac dt").on("click", function() {
    $(this).next().slideToggle();
  });

  var $win = $(window),
      $main = $('main'),
      $nav = $('.scroll-flex'),
      fixedClass = 'is-fixed';

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > 280 ) {
      $nav.addClass(fixedClass);
    } else {
      $nav.removeClass(fixedClass);
    }
  });

});
