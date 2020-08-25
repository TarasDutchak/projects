$(document).ready(function () {
  // wow js (animated)
  new WOW().init();
  // home page phone slider
  $('.sdkfutures-sect').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: false,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          dots: true,
        }
      }
    ]
  });
  // rewiews slider
  $('.rewiews-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: true,
    dots: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          dots: true,
          arrows: false,
        }
      }
    ]
  });
  // select styling
  $(function () {
    $('select').styler();
  });
  // monet-slider
  $('.monet-slider').slick({
    autoplay: true,
    autoplaySpeed: 2500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          autoplay: true,
          autoplaySpeed: 2000,
          slidesToShow: 1,
          dots: true,
          arrows: false,
        }
      }
    ]
  });
  // phone menu
  $('.burger').click(function () {
    $('.head-container .col-12.phone-hide').addClass('show-menu');
  });
  $('.close-menu').click(function () {
    $('.head-container .col-12.phone-hide').removeClass('show-menu');
  });
  // parallax
  $("#scene, #scene1").parallax();
  // desc monetization carousel
  $('.carousel').on('slid.bs.carousel', function () {
    $(".carousel-indicators2 li").removeClass("active");
    indicators = $(".carousel-indicators li.active").data("slide-to");
    a = $(".carousel-indicators2").find("[data-slide-to='" + indicators + "']").addClass("active");
  });
});

