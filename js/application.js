// remap jQuery to $
(function($){})(window.jQuery);

//document.addEventListener("deviceready", onDeviceReady, false);


 
$(document).on("pageinit", function(event){

$.mobile.phonegapNavigationEnabled = true;
//$.mobile.page.prototype.options.domCache = true;
$.mobile.buttonMarkup.hoverDelay = 0;
$.preloadCssImages();

$('#pumque').click(function(){
$('.nextsection').css("visibility", "hidden");
$('#resultsbutton').css("visibility", "visible");
});

//
//$('.resultsbutton').click(function() {
//alert('HELLO!');
//
// $('.nextsection').css("visibility", "visible");
// $('#resultsbutton').css("visibility", "hidden");
//  });


$('#stuck1').click(function() {
   $('#hide1').css("display", "none");
    $('#deduct').val('1');
    });  
  

 $('#stuck2').click(function() {
   $('#hide2').css("display", "none");
   $('#deduct2').val('1');
   });
 
 //section 2
 
 $('#stuck3').click(function() {
   $('#hide3').css("display", "none");
    $('#deduct3').val('1');
   });
 
 $('#stuck4').click(function() {
   $('#hide4').css("display", "none");
    $('#deduct4').val('1');
   });
 
 $('#stuck5').click(function() {
   $('#hide5').css("display", "none");
    $('#deduct5').val('1');
   });
 
 $('#stuck6').click(function() {
   $('#hide6').css("display", "none");
    $('#deduct6').val('1');
   });
   
 $('#stuck7').click(function() {
   $('#hide7').css("display", "none");
    $('#deduct7').val('1');
   });
 
 //section3
 $('#stuck8').click(function() {
   $('#hide8').css("display", "none");
   $('#deduct8').val('1');
   });
 
  
 $('#stuck9').click(function() {
   $('#hide9').css("display", "none");
   $('#deduct9').val('1');
   });
 
 $('#stuck10').click(function() {
   $('#hide10').css("display", "none");
   $('#deduct10').val('1');
   });
 
 $('#stuck11').click(function() {
   $('#hide11').css("display", "none");
   $('#deduct11').val('1');
   
   });
 
 $('#stuck12').click(function() {
   $('#hide12').css("display", "none");
   $('#deduct12').val('1');
   
   });
 
 //section4
 
 $('#stuck13').click(function() {
   $('#hide13').css("display", "none");
   $('#deduct13').val('1');
   });
 
 $('#stuck14').click(function() {
   $('#hide14').css("display", "none");
   $('#deduct14').val('1');
   });
 
 $('#stuck15').click(function() {
   $('#hide15').css("display", "none");
   $('#deduct15').val('1');
   });
 
 });

$.preloadCssImages = function(){
  
 <!--//--><![CDATA[//><!--
 			var images = new Array()
 			function preload() {
 				for (i = 0; i < preload.arguments.length; i++) {
 					images[i] = new Image()
 					images[i].src = preload.arguments[i]
 				}
 			}
 			preload(
 				"images/tkmaxx/correct.png",
 				"images/tkmaxx/cross.png",
 				"images/tkmaxx/footer_ipad.png",
 				"images/tkmaxx/header_ipad.png",
 				"images/tkmaxx/image-background-selected.png",
 				"images/tkmaxx/image-background.png",
 				"images/tkmaxx/notepadfooter_ipad.png",
 				"images/tkmaxx/notepadheader_ipad.png",
 				"images/tkmaxx/notepadheader_iphone.png",
 				"images/tkmaxx/scorecard-percent.png",
 				"images/tkmaxx/scorecard.png",
 				"images/tkmaxx/selected.png",
 				"images/tkmaxx/texture_blue_ipad.jpg",
 				"images/tkmaxx/texture_red_iphone.jpg",
 				"images/tkmaxx/texture_score_ipad.jpg",
 				"images/tkmaxx/texture_wood_ipad.jpg",
 				"images/tkmaxx/timer.png",
 				"images/tkmaxx/welcome_ipad.jpg",
 				"images/tkmaxx/welcome_iphone.jpg",
 				"http://www.adamprocter.co.uk/wip/tkmaxxquiz/images/texture_score_ipad.jpg"
 			)
 		//--><!]]>
 }
 
 