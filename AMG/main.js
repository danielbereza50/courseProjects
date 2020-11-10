$(document).ready(function () {
  $('#hide').click(function () {
    var clicks = $(this).data('clicks');
    if (clicks) {
      $(".nav").hide();
    } else {
      $(".nav").show();
    }
    $(this).data("clicks", !clicks);
  });

   $('#hide2').click(function () {
    var clicks2 = $(this).data('clicks');
    if (clicks2) {
      $(".nav2").hide();
    } else {
      $(".nav2").show();
    }
    $(this).data("clicks", !clicks2);
  });

    $('#hide3').click(function () {
    var clicks3 = $(this).data('clicks');
    if (clicks3) {
      $(".nav3").hide();
    } else {
      $(".nav3").show();
    }
    $(this).data("clicks", !clicks3);
  });

     $('#hide4').click(function () {
    var clicks4 = $(this).data('clicks');
    if (clicks4) {
      $(".nav4").hide();
    } else {
      $(".nav4").show();
    }
    $(this).data("clicks", !clicks4);
  });

      $('#hide5').click(function () {
    var clicks5 = $(this).data('clicks');
    if (clicks5) {
      $(".nav5").hide();
    } else {
      $(".nav5").show();
    }
    $(this).data("clicks", !clicks5);
  });

       $('#hide6').click(function () {
    var clicks2 = $(this).data('clicks');
    if (clicks2) {
      $(".nav6").hide();
    } else {
      $(".nav6").show();
    }
    $(this).data("clicks", !clicks6);
  });

        $('#hide7').click(function () {
    var clicks7 = $(this).data('clicks');
    if (clicks7) {
      $(".nav7").hide();
    } else {
      $(".nav7").show();
    }
    $(this).data("clicks", !clicks7);
  });

         $('#hide8').click(function () {
    var clicks8 = $(this).data('clicks');
    if (clicks8) {
      $(".nav8").hide();
    } else {
      $(".nav8").show();
    }
    $(this).data("clicks", !clicks8);
  });

          $('#hide9').click(function () {
    var clicks9 = $(this).data('clicks');
    if (clicks9) {
      $(".nav9").hide();
    } else {
      $(".nav9").show();
    }
    $(this).data("clicks", !clicks9);
  });

           $('#hide10').click(function () {
    var clicks10 = $(this).data('clicks');
    if (clicks10) {
      $(".nav10").hide();
    } else {
      $(".nav10").show();
    }
    $(this).data("clicks", !clicks10);
  });

            $('#hide11').click(function () {
    var clicks11 = $(this).data('clicks');
    if (clicks11) {
      $(".nav11").hide();
    } else {
      $(".nav11").show();
    }
    $(this).data("clicks", !clicks11);
  });

             $('#hide12').click(function () {
    var clicks12 = $(this).data('clicks');
    if (clicks12) {
      $(".nav12").hide();
    } else {
      $(".nav12").show();
    }
    $(this).data("clicks", !clicks12);
  });


  $('#recipeCarousel').carousel({
    interval: 10000
  })

  $('#recipeCarousel2').carousel({
    interval: 10000
  })

  $('.carousel .carousel-item').each(function () {
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < minPerSlide; i++) {
      next = next.next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }

      next.children(':first-child').clone().appendTo($(this));
    }
  });


  $('.carosel-control-right').click(function () {
    $(this).blur();
    $(this).parent().find('.carosel-item').first().insertAfter($(this).parent().find('.carosel-item').last());
  });
  $('.carosel-control-left').click(function () {
    $(this).blur();
    $(this).parent().find('.carosel-item').last().insertBefore($(this).parent().find('.carosel-item').first());
  });


  // Hide submenus
  $('#body-row .collapse').collapse('hide');

  // Collapse/Expand icon
  $('#collapse-icon').addClass('fa-angle-double-left');

  // Collapse click
  $('[data-toggle=sidebar-colapse]').click(function () {
    SidebarCollapse();
  });

  function SidebarCollapse() {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if (SeparatorTitle.hasClass('d-flex')) {
      SeparatorTitle.removeClass('d-flex');
    } else {
      SeparatorTitle.addClass('d-flex');
    }

    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
  }
});

