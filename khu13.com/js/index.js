;(function($){


    var setHeight = function(){
        $('.infomation').each( function(){
          var maxHeight = 0;
          $('.itemheight', this).each( function(){
            maxHeight = Math.max($(this).height(), maxHeight );
          }).height(maxHeight)
        });
    }
    $(window).resize(setHeight).trigger('resize');
 

  $(function(){


    setHeight();
    var slider = $('.bxslider').bxSlider({
      auto : true,
      mode: 'vertical'
    });
    var slider = $('.gaslider').bxSlider({
      auto : true
    });



  });
})(jQuery);