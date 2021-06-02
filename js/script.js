$(document).ready(function () {
  $("#menu").click(function () {
    $(this).toggleClass("fa-times");
    $(".navbar navbar-expand-lg navbar-dark").toggleClass("nav-toggle");
  });

  $("#login").click(function () {
    $(".login-form").addClass("popup");
  });

  $(".login-form form .fa-times").click(function () {
    $(".login-form").removeClass("popup");
  });

  $(window).on("load scroll", function () {
    $("#menu").removeClass("fa-times");
    $(".navbar navbar-expand-lg navbar-dark").removeClass("nav-toggle");

    $(".login-form").removeClass("popup");

    $("section").each(function () {
      let top = $(window).scrollTop();
      let height = $(this).height();
      let id = $(this).attr("id");
      let offset = $(this).offset().top - 200;

      if (top > offset && top < offset + height) {
        $(".navbar ul li a").removeClass("active");
        $(".navbar navbar-expand-lg navbar-dark").find(`[href="#${id}"]`).addClass("active");
      }
    });
  });
});
