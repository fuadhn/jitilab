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

// End: Set height main and sidebar
// ==================================================