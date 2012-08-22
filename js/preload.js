jQuery.preloadCssImages = function(){
 
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
				"images/tkmaxx/welcome_iphone.png"
			)
		//--><!]]>
}

