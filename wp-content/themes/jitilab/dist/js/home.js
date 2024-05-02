// ==================================================
// Set height hero img

if($('.jtl-hero-img .jtl-img').length) {
  var jtlUpdateHeroImg = function() {
    var _height_content = $('.jtl-hero-content').outerHeight();
    var _padding = parseFloat($('.jtl-hero-wrap').css('padding-bottom'));

    $('.jtl-hero-img .jtl-img').css({
      'top': -(_height_content + _padding)
    })
  }

  jtlUpdateHeroImg();

  $(window).on('resize', (function() {
    jtlUpdateHeroImg();
  }))
}

// End: Set height hero img
// ==================================================

// ==================================================
// Achievement carousel

var _items = $('#jtlAchievementCarousel').find('.item').length * 2;

$('#jtlAchievementCarousel').owlCarousel({
  center: true,
  margin: -300,
  loop: true,
  autoWidth: true,
  items: _items,
  dots: false,
  nav: false,
  touchDrag: false,
  mouseDrag: false,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: false
})

// End: Achievement carousel
// ==================================================

// ==================================================
// News carousel

$('#jtlNewsCarousel').owlCarousel({
  center: false,
  margin: 16,
  loop: false,
  autoWidth: false,
  items: 3,
  dots: true,
  nav: false,
  touchDrag: true,
  mouseDrag: true,
  autoplay: false,
  autoplayTimeout: 3000,
  autoplayHoverPause: false,
  responsiveClass:true,
  responsive:{
    0: {
      items: 1
    },
    640: {
      items: 2
    },
    768: {
      items: 2
    },
    1024: {
      items: 2
    },
    1280: {
      items: 3
    },
    1536: {
      items: 3
    }
  }
})

// End: News carousel
// ==================================================

// ==================================================
// Event carousel

$('#jtlEventCarousel').owlCarousel({
  center: false,
  margin: 16,
  loop: false,
  autoWidth: false,
  items: 3,
  dots: true,
  nav: false,
  touchDrag: true,
  mouseDrag: true,
  autoplay: false,
  autoplayTimeout: 3000,
  autoplayHoverPause: false,
  responsiveClass:true,
  responsive:{
    0: {
      items: 1
    },
    640: {
      items: 2
    },
    768: {
      items: 2
    },
    1024: {
      items: 2
    },
    1280: {
      items: 3
    },
    1536: {
      items: 3
    }
  }
})

// End: Event carousel
// ==================================================