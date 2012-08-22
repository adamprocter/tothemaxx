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
	<link rel="stylesheet" href="css/jquery.mobile-1.1.1.min.css" />

	<!-- Custom css -->
	<link rel="stylesheet" href="css/custom.css" />

</head> 
<body> 
<div data-role="dialog" id="s1score">	
			<div data-role="header" id="header" data-theme="c">
				<h1>Score card</h1>
				<h2><span class="section-marker">Section</span> <span>2</span></h2>
			</div>
		
	
	        <?php
//section 2 question1 
 $answer2_1 = $_POST['radio-s2q1'];

//question 2
$answer2_2 = $_POST['checkbox-s2q2a'];
$answer2_3 = $_POST['checkbox-s2q2b'];
$answer2_4 = $_POST['checkbox-s2q2c'];
$answer2_5 = $_POST['checkbox-s2q2d'];
 
 
 //question 3
 $answer2_6 = $_POST['radio-s2q3'];
 
 //question 4
  $answer2_7 = $_POST['radio-s2q4'];
 
 //question5
 $answer2_8 = $_POST['checkbox-s2q5a'];
 $answer2_9 = $_POST['checkbox-s2q5b'];
 $answer2_10 = $_POST['checkbox-s2q5c'];
 $answer2_11 = $_POST['checkbox-s2q5d'];
 
 //question6
 $answer2_12 = $_POST['checkbox-s2q6a'];
 $answer2_13 = $_POST['checkbox-s2q6b'];
 $answer2_14 = $_POST['checkbox-s2q6c'];
 $answer2_15 = $_POST['checkbox-s2q6d'];
 
 //question7
 $answer2_16 = $_POST['select-s2q7a'];
 $answer2_17 = $_POST['select-s2q7b'];
 $answer2_18 = $_POST['select-s2q7c'];
 $answer2_19 = $_POST['select-s2q7d'];
 
 //question8
 $answer2_20 = $_POST['radio-s2q8'];
 
 //question9
 $answer2_21 = $_POST['checkbox-s2q9a'];
 $answer2_22 = $_POST['checkbox-s2q9b'];
 $answer2_23 = $_POST['checkbox-s2q9c'];
 
 //question10
 $answer2_24 = $_POST['radio-s2q10'];
 
 //question11
 $answer2_25 = $_POST['checkbox-s2q11a'];
 $answer2_26 = $_POST['checkbox-s2q11b'];
 $answer2_27 = $_POST['checkbox-s2q11c'];
 
 //question12 - Freeform Text
 $answer2_27a = $_POST['textareaTS'];
 
 
 //question13
 $answer2_28 = $_POST['select-s2q13a'];
 $answer2_29 = $_POST['select-s2q13b'];
 $answer2_30 = $_POST['select-s2q13c'];
 $answer2_31 = $_POST['select-s2q13d'];
 
 //question14
 $answer2_32 = $_POST['radio-s2q14'];
 
 //question15
 $answer2_33 = $_POST['select-s2q15a'];
 $answer2_34 = $_POST['select-s2q15b'];
 $answer2_35 = $_POST['select-s2q15c'];
 $answer2_36 = $_POST['select-s2q15d'];
 
 //question16
 $answer2_36a = $_POST['select-s2q16a'];
 $answer2_36b = $_POST['select-s2q16b'];
 $answer2_37c = $_POST['select-s2q16c'];
 
 //question17
 $answer2_37 = $_POST['radio-s2q17'];                        
          
                
            $totalCorrect = 0;
         //section2  
                     if ($answer2_1 == "correct") { $totalCorrect++; }
         
                     if ($answer2_3 == "correct") { $totalCorrect++; }
                     if ($answer2_4 == "correct") { $totalCorrect++; }   
                     if ($answer2_5 == "correct") { $totalCorrect++; }           
                     if ($answer2_6 == "correct") { $totalCorrect++; }           
                     if ($answer2_7 == "correct") { $totalCorrect++; }           
                     if ($answer2_8 == "correct") { $totalCorrect++; } 
                     
                     if ($answer2_13 == "correct") { $totalCorrect++; }           
                     if ($answer2_14 == "correct") { $totalCorrect++; }           
                     if ($answer2_15 == "correct") { $totalCorrect++; }           
                     if ($answer2_16 == "correct") { $totalCorrect++; }           
                     if ($answer2_17 == "correct") { $totalCorrect++; }           
                     if ($answer2_18 == "correct") { $totalCorrect++; }           
                          
                     if ($answer2_20 == "correct") { $totalCorrect++; }           
                     if ($answer2_21 == "correct") { $totalCorrect++; }           
                     if ($answer2_22 == "correct") { $totalCorrect++; }           
                      
                     if ($answer2_24 == "correct") { $totalCorrect++; }           
                           
                     if ($answer2_26 == "correct") { $totalCorrect++; }
                             
                                 
                     if (strpos($answer2_27a,"ticket") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"switching") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"shopper") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"removes") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"remove") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"swop") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"swops") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"swap") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"swaps") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"price") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"tag") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"item") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"expensive") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"switch") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"switches") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"packaging") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"box") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"packet") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"low") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"lower") !==false) { $totalCorrect++; }
                     if (strpos($answer2_27a,"price") !==false) { $totalCorrect++; }
                     
                     
                     if ($answer2_28 == "correct") { $totalCorrect++; }       
                     if ($answer2_29 == "correct") { $totalCorrect++; }
                     if ($answer2_30 == "correct") { $totalCorrect++; }
                     if ($answer2_31 == "correct") { $totalCorrect++; }
                             
                     if ($answer2_32 == "correct") { $totalCorrect++; }
                     
                     if ($answer2_33 == "correct") { $totalCorrect++; }       
                     if ($answer2_34 == "correct") { $totalCorrect++; }
                     if ($answer2_35 == "correct") { $totalCorrect++; }
                     if ($answer2_36 == "correct") { $totalCorrect++; }        
                     
                     if ($answer2_36a == "correct") { $totalCorrect++; }           
                     if ($answer2_36b == "correct") { $totalCorrect++; }           
                     if ($answer2_36c == "correct") { $totalCorrect++; }           
                    
                     if ($answer2_37 == "correct") { $totalCorrect++; }        
         
                               
             
            echo "
            
            	            	
            		<div data-role='content' class='question-score'>
            			<div class='congratulations'>
            				<h4>Section 2 score</h4>
            
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
<!--	<script src="childbrowser.js"></script>	-->
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/ios-orientationchange-fix.min.js"></script>
	<script src="js/jquery.mobile-1.1.1.min.js"></script>
	<script src="js/preloadCssImages.jQuery_v5.js"></script>
	<script src="js/application.js"></script>
		
</body>
</html>