// remap jQuery to $
(function($){})(window.jQuery);

  

/* trigger when page is ready */
$(document).ready(function (){

  $.preloadCssImages();
  
//  function startTimer(){
//    var count = 60;
//    countdown = setInterval(function(){
//      $("p.countdown").html(count);
//      if (count == 0) {
//        count = 0;
//      }
//      count--;
//    }, 1000);
//  });
  
  
  
  var current_width = $(window).width();
       //do something with the width value here!
      if(current_width < 400){
        
       // jQuery('input').attr("data-mini",true);
        // jQuery('a').attr("data-mini",true);
        // jQuery('h2').css("display","none");
//        jQuery('footer').css("background","x")
       
        
     
        
      }

});