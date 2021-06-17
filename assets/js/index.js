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
  // $(".home__system__slide").slick({
  //   slidesToShow: 4,
  //   slidesToScroll: 1,
  //   autoplay: true,
  //   autoplaySpeed: 5000,
  //   arrows: true,
  //   dots: true,
  //   responsive: [
  //     {
  //       breakpoint: 768,
  //       settings: {
  //         slidesToShow: 2,
  //       },
  //     },
  //   ],
  // });

  // step
  function sliderSetting(){
    var width = $(window).width();
    if(width <= 750){
      $('.home__about__list').not('.slick-initialized').slick({
        slidesToShow: 1.2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: true,
      });
        } else {
          $('.slide.slick-initialized').slick('unslick');
      }
    }
    sliderSetting();
    $(window).resize( function() {
      sliderSetting();
    });

  // seo
  $(".ac dt").on("click", function() {
    $(this).next().slideToggle();
  });

  var $win = $(window),
      $main = $('main'),
      $nav = $('.scroll-flex'),
      fixedClass = 'is-fixed';

  // $win.on('load scroll', function() {
  //   var value = $(this).scrollTop();
  //   if ( value > 280 ) {
  //     $nav.addClass(fixedClass);
  //   } else {
  //     $nav.removeClass(fixedClass);
  //   }
  // });

});

// メニューをクリックで閉じる
$('.drawer__menu__wrap a').on('click', function(event) {
  $('.drawer__checkbox').trigger('click');
});