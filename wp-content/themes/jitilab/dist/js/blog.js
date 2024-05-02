var updateListPost = function() {
  if($('.jtl-post-item').length && !$('.jtl-post-item').last().hasClass('ended')) {
    var _scroll_top = $(window).scrollTop();
    var _element = $('.jtl-post-item').last();
    var _list_area = _element.offset().top / 2;

    if(_scroll_top > _list_area) {
      var _target = '#jtlAllPosts';
      var _max_posts = $(_target).data('max');
      var _category = ($(_target).data('category') ? $(_target).data('category') : '');
      var _tag = ($(_target).data('tag') ? $(_target).data('tag') : '');
      var _keyword = ($(_target).data('keyword') ? $(_target).data('keyword') : '');
      var _offset = $(_target).find('.jtl-post-item').length;

      if(_offset > 0) {
        _element.addClass('ended');
        
        $('#jtlLoadMore').removeClass('jtl-invisible');
        $('#jtlLoadMore').addClass('jtl-visible');

        setTimeout(function() {
          $.get( wpObj.ajax_url, {
            action: 'load_more_post',
            security: wpObj.security,
            offset: _offset,
            max_posts: _max_posts,
            category: _category,
            tag: _tag,
            keyword: _keyword
          }, function( response ) {
            $('#jtlLoadMore').removeClass('jtl-visible');
            $('#jtlLoadMore').addClass('jtl-invisible');

            if ( undefined !== response.success && false === response.success ) {
              return;
            }
          
            if(response.html !== null) {
              $(_target).append(response.html);
  
              lazyload_images();
            }
          });
        }, 300)
      }
    }
  }
}

updateListPost();

var timer_blog = null;

window.addEventListener('scroll', function() {
  if(timer_blog !== null) {
    clearTimeout(timer_blog);        
  }

  timer_blog = setTimeout(function() {
    updateListPost();
  }, 0);
}, false);