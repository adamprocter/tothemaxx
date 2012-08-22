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
<div data-role="dialog" id="s1score">	
			<div data-role="header" id="header" data-theme="c">
				<h1>Score card</h1>
				<h2><span class="section-marker">Section</span> <span>3</span></h2>
			</div>
		
	
	        <?php
     
 //section 3 question1 
 $answer3_1 = $_POST['radio-s3q1'];
 
 //question2
 $answer3_2 = $_POST['checkbox-s3q2a'];
 $answer3_3 = $_POST['checkbox-s3q2b'];
 $answer3_4 = $_POST['checkbox-s3q2c'];
 $answer3_5 = $_POST['checkbox-s3q2d'];
 $answer3_6 = $_POST['checkbox-s3q2e'];
 
 //question3
 $answer3_7 = $_POST['radio-s3q3'];
 
 //question4
 $answer3_8 = $_POST['checkbox-s3q4a'];
 $answer3_9 = $_POST['checkbox-s3q4b'];
 $answer3_10 = $_POST['checkbox-s3q4c'];
 $answer3_11 = $_POST['checkbox-s3q4d'];
 
 //question5 not sure how to select ?
  
  //question6
 $answer3_12 = $_POST['checkbox-s3q6a'];
 $answer3_13 = $_POST['checkbox-s3q6b'];
 $answer3_14 = $_POST['checkbox-s3q6c'];
 
   //question7 free form 0080043215167
 $answer3_15 = $_POST['textareaCL'];
 
 //question8
 $answer3_16 = $_POST['checkbox-s3q8a'];
 $answer3_17 = $_POST['checkbox-s3q8b'];
 $answer3_18 = $_POST['checkbox-s3q8c'];
 $answer3_19 = $_POST['checkbox-s3q8d'];
 $answer3_20 = $_POST['checkbox-s3q8e'];
 
 //question9
 $answer3_21 = $_POST['checkbox-s3q9a'];
 $answer3_22 = $_POST['checkbox-s3q9b'];
 $answer3_23 = $_POST['checkbox-s3q9c'];
 $answer3_24 = $_POST['checkbox-s3q9d'];
 $answer3_25 = $_POST['checkbox-s3q9e'];
 
 //question10
$answer3_26 = $_POST['radio-s3q10'];
 
 //question11
 $answer3_27 = $_POST['checkbox-s3q11a'];
 $answer3_28 = $_POST['checkbox-s3q11b'];
 $answer3_29 = $_POST['checkbox-s3q11c'];
 $answer3_30 = $_POST['checkbox-s3q11d'];
 
 //question12
 $answer3_31 = $_POST['select-s3q12a'];
 $answer3_32 = $_POST['select-s3q12b'];
 $answer3_33 = $_POST['select-s3q12c'];
                        
          
                
            $totalCorrect = 0;
            
        //section3
        	if ($answer3_1 == "correct") { $totalCorrect++; }        
         
        if ($answer3_3 == "correct") { $totalCorrect++; }        
        if ($answer3_5 == "correct") { $totalCorrect++; }        
        if ($answer3_6 == "correct") { $totalCorrect++; }        
        if ($answer3_7 == "correct") { $totalCorrect++; }        
           
           if ($answer3_8 == "correct") { $totalCorrect++; }        
           if ($answer3_9 == "correct") { $totalCorrect++; }        
           if ($answer3_11 == "correct") { $totalCorrect++; }    
          
          if ($answer3_12 == "correct") { $totalCorrect++; }        
          if ($answer3_13 == "correct") { $totalCorrect++; }  
          
        if ($answer3_15 == "0080043215167") { $totalCorrect++; } 
          
         if ($answer3_16 == "correct") { $totalCorrect++; }  
         if ($answer3_17 == "correct") { $totalCorrect++; } 
         if ($answer3_18 == "correct") { $totalCorrect++; } 
         if ($answer3_19 == "correct") { $totalCorrect++; }  
          
         if ($answer3_21 == "correct") { $totalCorrect++; }
         if ($answer3_22 == "correct") { $totalCorrect++; }           
         if ($answer3_23 == "correct") { $totalCorrect++; }
         if ($answer3_24 == "correct") { $totalCorrect++; }
         if ($answer3_25 == "correct") { $totalCorrect++; }
          
         if ($answer3_26 == "correct") { $totalCorrect++; }
         if ($answer3_27 == "correct") { $totalCorrect++; }
         if ($answer3_28 == "correct") { $totalCorrect++; }
         if ($answer3_29 == "correct") { $totalCorrect++; }
         
         if ($answer3_31 == "correct") { $totalCorrect++; }
         if ($answer3_32 == "correct") { $totalCorrect++; }
         if ($answer3_33 == "correct") { $totalCorrect++; }
        
           
                               
            echo "
                
                	            	
                		<div data-role='content' class='question-score'>
                			<div class='congratulations'>
                				<h4>Section 3 score</h4>
                
                				<p class='scorecard-title'>You scored</p>
                
                				<p class='scorecard-score'>$totalCorrect</p>
                
                			
                
                			
                		<p class='scorecard-wrong'>You got these questions wrong:</p>
                		
                						<div class='question-top'></div>
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
                			
                		<div data-role='footer' data-theme='c' data-position='fixed' data-tap-toggle='false'></div>				
                	";
                
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