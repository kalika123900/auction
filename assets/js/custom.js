// Custom JS

$(document).ready(function () {
  // for home slider 1
  $(".autoplay").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // for dp toggle bar
  $(".dp-toggle-bars").click(function () {
    $(".dp-toggle-menu").toggleClass("open");
  });

  // for category slider 2
  $(".autoplay2").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
  });

  // for category slider 3
  $(".autoplay3").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 380,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  //  for sticky bar
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
      $(".css2-wt-wrapper-content").addClass("stick");
    } else {
      $(".css2-wt-wrapper-content").removeClass("stick");
    }
  });

  // for upload file
  $(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

  // for login/signup toggling
  // $(".signup-form").click(function() {
  //     $(".signup-toggle").css('display', 'block');
  //     $(".login-modal-wrapper").css('display', 'none');
  //     $(".signup-modal-wrapper").css('display', 'block');
  //     $(".modal-left-wrapper").css('height', '814');
  // });

  // $(".login-form").click(function() {
  //     $(".login-toggle").css('display', 'block');
  //     $(".signup-modal-wrapper").css('display', 'none');
  //     $(".login-modal-wrapper").css('display', 'block');
  //     $(".modal-left-wrapper").css('height', '684');
  // });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });

  // for list grid view
  $("#list").click(function (event) {
    event.preventDefault();
    $("#products .item").addClass("list-group-item");
    $(".filter-box").css("display", "none");
    $(".l_filter_box").css("display", "block");
  });
  $("#grid").click(function (event) {
    event.preventDefault();
    $("#products .item").removeClass("list-group-item");
    $("#products .item").addClass("grid-group-item");
    $(".filter-box").css("display", "block");
    $(".l_filter_box").css("display", "none");
  });

  // for blogs slider 1
  $(".autoplay4").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
  });

  $(".slider-for").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".slider-nav",
  });
  $(".slider-nav").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".slider-for",
    dots: false,
    centerMode: false,
    focusOnSelect: true,
  });
});
