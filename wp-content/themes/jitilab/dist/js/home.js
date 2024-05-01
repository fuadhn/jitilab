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