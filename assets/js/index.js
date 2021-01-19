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

  $("#lpcase").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 10000,
    arrows: false,
    dots: false,
    centerMode: true,
    centerPadding: "20vw",
    cssEase: 'linear',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  // // 動画処理
  // if ($("#pv").length) {
  //   videojs("pv", {
  //     controls: true,
  //     autoplay: false,
  //     preload: "auto",
  //   });
  // }

  // // デモ画面
  // $(".features__demos__btns-btn").on("click", function () {
  //   $(".features__demos__btns-btn").removeClass("active");
  //   $(this).addClass("active");
  //   $("#demo-img").attr("src", $(this).attr("data-src"));
  //   $("#demo-txt>.txt-data").html($(this).attr("data-txt"));
  //   $("#demo-txt>.txt-icon").html($(this).children("p:first-child").html());
  // });

  // スムーススクロール
  $(".smooth").on("click", function () {
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - 100;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  // スクロールイベント
  $(window).on("scroll", function () {
    let s = $(window).scrollTop();
    if (s > 300) {
      $(".header .navbar").addClass("scroll");
    } else {
      $(".header .navbar").removeClass("scroll");
    }
  });

  // faq
  $(".faq__list__inner-ttl").on("click", function () {
    $(this).next(".faq__list__inner-ans").slideToggle();
    $(this).toggleClass("active");
  });
});

// 特徴ページ　スライド
function checkBreakPoint() {
	w = $(window).width();
	if (w <= 767) {
		// スマホ向け（767px以下のとき）
    $("#system-flow").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 300,
      arrows: false,
      dots: false,
      centerMode: true,
    });
	} else {
		// PC向け
		$("#system-flow").slick('unslick');
	}
}
// ウインドウがリサイズする度にチェック
$(window).resize(function(){
	checkBreakPoint();
});
// 初回チェック
checkBreakPoint();
