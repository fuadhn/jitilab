// ==================================================
// Modify blockquote

if($('article.jtl-content blockquote').length) {
  $('article.jtl-content blockquote').each(function(e) {
    $(this).prepend('<i class="fa-solid fa-quote-left jtl-blockquote-accent"></i>');
  })
}

// End: Modify blockquote
// ==================================================

// ==================================================
// Modify details

if($('article.jtl-content details').length) {
  var _index = 0;
  $('article.jtl-content details').each(function(e) {
    $(this).attr('open', '');
    $(this).append('<div class="jtl-wrap-circle"><span class="jtl-circle"></span></div>');

    if(_index === 0) {
      $(this).addClass('first');
    } else if(_index === $('article.jtl-content details').length - 1) {
      $(this).addClass('last');
    }

    _index++;
  })

  $('article.jtl-content details').on('click', (function(e) {
    e.preventDefault();
  }))
}

// End: Modify details
// ==================================================

// ==================================================
// Modify block group

if($('article.jtl-content .wp-block-group').length) {
  var _index = 0;
  $('article.jtl-content .wp-block-group').each(function(e) {
    if(_index === 0) {
      $(this).addClass('first');
    } else if(_index === $('article.jtl-content .wp-block-group').length - 1) {
      $(this).addClass('last');
    }

    _index++;
  })
}

// End: Modify block group
// ==================================================