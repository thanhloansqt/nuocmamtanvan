;(function($){


    var setHeight = function(){

      if( $(window).width() > 767 ){
        $('.infomation').each( function(){
          var maxHeight = 0;
          $('.itemheight', this).each( function(){
            maxHeight = Math.max($(this).height(), maxHeight );
          }).height(maxHeight)
        });
      } else {
        $(".infomation .aboutus").removeAttr('style');
        $(".infomation .company").removeAttr('style');
        $(".infomation .advane").removeAttr('style');
      } 
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