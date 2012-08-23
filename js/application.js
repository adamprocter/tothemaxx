// remap jQuery to $
(function($){})(window.jQuery);


$(document).on("pageinit", function(event){

$.mobile.loadPage('http://www.adamprocter.co.uk/wip/tkmaxxquiz/section1.php');
$.mobile.loadPage('http://www.adamprocter.co.uk/wip/tkmaxxquiz/section2.php');
$.mobile.loadPage('http://www.adamprocter.co.uk/wip/tkmaxxquiz/section3.php');
$.mobile.loadPage('http://www.adamprocter.co.uk/wip/tkmaxxquiz/section4.php');
$.mobile.loadPage('http://www.adamprocter.co.uk/wip/tkmaxxquiz/section5.php');

$.mobile.buttonMarkup.hoverDelay = 0;
$.preloadCssImages();
  
   
});

//$(document).bind("mobileinit", function(){
//			$.mobile.defaultPageTransition = 'slide';
//			
//			
//		});


 $('#stuck1').click(function() {
 
   $('#hide1').css("display", "none");
    });
 
 $('#stuck2').click(function() {
   $('#hide2').css("display", "none");});
 
 $('#stuck3').click(function() {
   $('#hide3').css("display", "none");});
 
 $('#stuck4').click(function() {
   $('#hide4').css("display", "none");});
 
 $('#stuck5').click(function() {
   $('#hide5').css("display", "none");});
 
 $('#stuck6').click(function() {
   $('#hide6').css("display", "none");});
 $('#stuck7').click(function() {
   $('#hide7').css("display", "none");});
 
 $('#stuck8').click(function() {
   $('#hide8').css("display", "none");});
 
 $('#stuck9').click(function() {
   $('#hide9').css("display", "none");});
 
 $('#stuck10').click(function() {
   $('#hide10').css("display", "none");});
 
 $('#stuck11').click(function() {
   $('#hide11').css("display", "none");});
 
 $('#stuck12').click(function() {
   $('#hide12').css("display", "none");});
 
 
 $('#stuck13').click(function() {
   $('#hide13').css("display", "none");});
 
 $('#stuck14').click(function() {
   $('#hide14').css("display", "none");});
 
 $('#stuck15').click(function() {
   $('#hide15').css("display", "none");});
 
 

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
 				"images/tkmaxx/texture_blue_ipad.png",
 				"images/tkmaxx/texture_red.jpg",
 				"images/tkmaxx/texture_score_ipad.jpg",
 				"images/tkmaxx/texture_wood_ipad.jpg",
 				"images/tkmaxx/timer.png",
 				"images/tkmaxx/welcome_ipad.png",
 				"images/tkmaxx/welcome_iphone.png",
 				"http://www.adamprocter.co.uk/wip/tkmaxxquiz/images/texture_score_ipad.jpg"
 			)
 		//--><!]]>
 }
 
 