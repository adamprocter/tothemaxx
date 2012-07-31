// remap jQuery to $
(function($){})(window.jQuery);

  

/* trigger when page is ready */
$(document).ready(function (){

  $.preloadCssImages();
  
  var current_width = $(window).width();
       //do something with the width value here!
      if(current_width < 400){
        
       // jQuery('input').attr("data-mini",true);
        // jQuery('a').attr("data-mini",true);
        // jQuery('h2').css("display","none");
//        jQuery('footer').css("background","x")
       
        
     
        
      }

});