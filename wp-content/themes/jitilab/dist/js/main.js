// ==================================================
// Lazy load

function lazyload_images() {
  var lazyLoadImages = document.querySelectorAll('.jtl-lazyload');

  if(lazyLoadImages.length > 0) {
    for(var i=0; i<lazyLoadImages.length; i++) {
      var sourceImage = lazyLoadImages[i].getAttribute('data-image');
      var elementPosition = lazyLoadImages[i].offsetTop;
      var windowScrollPosition = window.outerHeight + window.scrollY;
      var elementTag = lazyLoadImages[i].tagName;

      if(windowScrollPosition > elementPosition) {
        if(elementTag === 'IMG') {
          lazyLoadImages[i].setAttribute('src', sourceImage);
          lazyLoadImages[i].classList.remove('jtl-lazyload');
        } else {
          lazyLoadImages[i].style.backgroundImage = "url('" + sourceImage + "')";
          lazyLoadImages[i].classList.remove('jtl-animate-pulse');
          lazyLoadImages[i].classList.remove('jtl-lazyload');
        }
      }
    }
  }
}

lazyload_images();

document.addEventListener('scroll', (e) => {
  lazyload_images();
})

// End: Lazy load
// ==================================================

// ==================================================
// Set height main and sidebar

var _window_height = $(window).height();
var _adminbar_height = ($('#wpadminbar').length ? $('#wpadminbar').outerHeight() : 0);
var _header_height = ($('#jtlHeader').length ? $('#jtlHeader').outerHeight() : 0);
var _footer_height = ($('#jtlFooter').length ? $('#jtlFooter').outerHeight() : 0);
var _min_height = _window_height - (_adminbar_height + _header_height + _footer_height);

// Main
$('#jtlMain').css({
  'min-height': _min_height
})

// Dropdown menu
$('.jtl-dropdown-nav ul.jtl-parent').css({
  'max-height': _min_height
})

// End: Set height main and sidebar
// ==================================================

// ==================================================
// Header sticky

// Clone header menu
var _header_sticky = $('#jtlHeader').clone();

_header_sticky.removeAttr('id');
_header_sticky.find('#jtlNavTopbar').remove();
_header_sticky.addClass('jtl-header-sticky');

_header_sticky.prependTo('body');

// Update header sticky state
var timer = null;

window.addEventListener('scroll', function() {
  if(timer !== null) {
    clearTimeout(timer);        
  }

  timer = setTimeout(function() {
    var _scroll_top = $(this).scrollTop();

    if(_scroll_top > 450) {
      if(!$('header.jtl-header-sticky').hasClass('active')) {
        $('header.jtl-header-sticky').addClass('active');
      }
    } else if(_scroll_top < 150) {
      if($('header.jtl-header-sticky').hasClass('active')) {
        $('header.jtl-header-sticky').removeClass('active');
      }
    }
  }, 0);
}, false);

// End: Header sticky
// ==================================================

if($('.jtl-dropdown-nav').length) {
  $('.jtl-dropdown-nav ul.jtl-parent > li').on('click', (function(e) {
    e.preventDefault();

    $('.jtl-dropdown-nav ul.jtl-parent > li').removeClass('active');
    $(this).toggleClass('active');
  }))

  $('.jtl-dropdown-nav ul.jtl-parent > li > ul > li').on('click', (function(e) {
    e.stopPropagation();
  }))
}

if($('.jtl-toggle-dropdown').length) {
  $('.jtl-toggle-dropdown').on('click', (function(e) {
    e.preventDefault();

    $('.jtl-dropdown-nav').toggleClass('active');
  }))
}