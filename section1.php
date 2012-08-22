<!--
	jQuery Mobile Boilerplate
	index.html
-->
<!doctype html>
<html>
<head>
	<title>TK Maxx App</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<!--<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">-->
	

	<!-- jQuery Mobile CSS bits -->
	<!--	<link rel="stylesheet" href="css/jquery.mobile-1.1.1.min.css" />-->
		<link rel="stylesheet" href="css/12/jquery.mobile-1.2.0-alpha.1.min.css" />

	<!-- Custom css -->
	<link rel="stylesheet" href="css/custom.css" />

</head> 
<body> 
<div data-role="dialog" class="question-blue">
			<div data-role="header" id="header" data-theme="c">
				<h1>Score card</h1>
				<h2><span class="section-marker">Section</span> <span>1</span></h2>
			</div>
		
	
	        <?php
//            the name of the html thing
            $answer1_1 = $_POST['radio-s1q1'];
            
            //question 2
            $answer1_2 = $_POST['checkbox-s1q2a'];
            $answer1_3 = $_POST['checkbox-s1q2b'];
            $answer1_4 = $_POST['checkbox-s1q2c'];
            $answer1_5 = $_POST['checkbox-s1q2d'];
             
            //question 3
            $answer1_6 = $_POST['checkbox-s1q3'];
                       
            //question 4
            $answer1_7 = $_POST['radio-s1q4'];
                        
          
                
            $totalCorrect = 0;
            
            //section1
            if ($answer1_1 == "correct") { $totalCorrect++; }
            if ($answer1_2 == "correct") { $totalCorrect++; }
            if ($answer1_3 == "correct") { $totalCorrect++; }
            if ($answer1_5 == "correct") { $totalCorrect++; }
            if ($answer1_7 == "correct") { $totalCorrect++; }
           
                               
             
            echo "
            
            	            	
            		<div data-role='content' class='question-score'>
            			<div class='congratulations'>
            				<h4>Section 1 score</h4>
            
            				<p class='scorecard-title'>You scored</p>
            
            				<p class='scorecard-score'>$totalCorrect</p>
            
            			
            
            			
            		<p class='scorecard-wrong'>You got these questions wrong:</p>
            		
            						<div class='question-top'>DUMMY DATA BELOW</div>
            						<div class='question-box'>
            							<div class='scorecard-answers'>
            								<h5>3. What tools do TK Maxx use to stop internal theft?</h5>
            		
            								<ul class='wrong-answers'>
            									<li>Your answer:</li>
            									<li>Guard Dogs</li>
            									<li>HO Reporting</li>
            								</ul>
            		
            								<ul class='correct-answers'>
            									<li>Correct answer:</li>
            									<li>CCTV</li>
            									<li>Hidden Cameras</li>
            								</ul>
            							</div>
            						</div>
            						<div class='question-bottom'></div>
            		           					
            					
            				</div>
            		   </div>
            		
            		</div>
            			
            		<div data-role='footer' id='footer' data-theme='c' data-position='fixed' data-tap-toggle='false'></div>				
            	</div>";
            
        ?>
	
	
	
	</div>
	
<script src="phonegap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
<!--	<script src="js/ios-orientationchange-fix.min.js"></script>-->
	<!--	<script src="js/preloadCssImages.jQuery_v5.js"></script>-->
		<script src="js/preload.js"></script>
		
	<script src="js/application.js"></script>
<!--	<script src="js/jquery.mobile-1.1.1.min.js"></script>-->
	<script src="js/jquery.mobile-1.2.0-alpha.1.min.js"></script>
	
		
</body>
</html>