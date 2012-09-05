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
	<!-- jQuery bits -->

<link rel="stylesheet" href="css/jquery.mobile-1.2.0-beta.1.min.css" />
<link rel="stylesheet" href="css/custom.css" />

<script src="phonegap.js"></script>
<script src="js/jquery-1.8.1.min.js"></script>
<script src="js/energize.js"></script>
<script src="js/application.js"></script>
<script src="js/jquery.mobile-1.2.0-beta.1.min.js"></script>


</head> 
<body> 
<div data-role="dialog">	
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
$answer2_7 = $_POST['checkbox-s2q4a'];
$answer2_7a = $_POST['checkbox-s2q4b'];
$answer2_7b = $_POST['checkbox-s2q4c'];
$answer2_7c = $_POST['checkbox-s2q4d'];

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
$answer2_20 = $_POST['checkbox-s2q8a'];
$answer2_20a = $_POST['checkbox-s2q8b'];
$answer2_20b = $_POST['checkbox-s2q8c'];
$answer2_20c = $_POST['checkbox-s2q8d'];
$answer2_20d = $_POST['checkbox-s2q8e'];


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
                 if ($answer2_7b == "correct") { $totalCorrect++; }
                 if ($answer2_7c == "correct") { $totalCorrect++; }
                           
                 if ($answer2_8 == "correct") { $totalCorrect++; } 
                 if ($answer2_9 == "correct") { $totalCorrect++; } 
                 
                 
                 if ($answer2_14 == "correct") { $totalCorrect++; }           
                 if ($answer2_15 == "correct") { $totalCorrect++; }           
                 
                 if ($answer2_16 == "correct") { $totalCorrect++; }           
                 if ($answer2_17 == "correct") { $totalCorrect++; }           
                 if ($answer2_18 == "correct") { $totalCorrect++; }           
                 if ($answer2_19 == "correct") { $totalCorrect++; }           
                 
                      
                 if ($answer2_20 == "correct") { $totalCorrect++; }           
               if ($answer2_20d == "correct") { $totalCorrect++; }           
                 
                 
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
      
      $sumTotal = $totalCorrect-$deduct3-$deduct4-$deduct5-$deduct6-$deduct7; 
                 
                       
mysql_connect("213.171.200.46", "tkmaxx", "onboard2012!") or die(mysql_error());
mysql_select_db("tkmaxx") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q1 $answer2_1')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q2 $answer2_2')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q2 $answer2_3')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q2 $answer2_4')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q2 $answer2_5')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q3 $answer2_6')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q4 $answer2_7')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q5 $answer2_8')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q5 $answer2_9')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q5 $answer2_10')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q5 $answer2_11')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q6 $answer2_12')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q6 $answer2_13')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q6 $answer2_14')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q6 $answer2_15')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q7 $answer2_16')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q7 $answer2_17')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q7 $answer2_18')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q7 $answer2_19')") or die(mysql_error());  

mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q8 $answer2_20')") or die(mysql_error());
     
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q9 $answer2_21')") or die(mysql_error());     mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q9 $answer2_22')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q9 $answer2_23')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q10 $answer2_24')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q11 $answer2_25')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q11 $answer2_26')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q11 $answer2_27')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q12 $answer2_27a')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q13 $answer2_28')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q13 $answer2_29')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q13 $answer2_30')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q13 $answer2_31')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q14 $answer2_32')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q15 $answer2_33')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q15 $answer2_34')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q15 $answer2_35')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q15 $answer2_36')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q16 $answer2_36a')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q16 $answer2_36b')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q16 $answer2_37c')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s2q17 $answer2_37')") or die(mysql_error());
                           
       echo "
           
           	            	
           		<div data-role='content' class='question-score'>
           			<div class='congratulations'>
           				<h4>Section 2 score</h4>
           
           				<p class='scorecard-title'>You scored</p>
           
           				<p class='scorecard-score'>$sumTotal</p>
           
           		";
           		
           		
           		 if ($sumTotal == "34") echo "<p class='scorecard-wrong'>Well done maximum points !</p>";
           		
           		if (
           		($answer2_1 == "wrongB") || ($answer2_1 == "wrongC") || ($answer2_1 == "wrongD") || ($answer2_2 == "wrongA") || ($answer2_6 == "wrongA" || $answer2_6 == "wrongB" || $answer2_6 ==  "wrongD")
           		|| ($answer2_7a == "wrongB") || ($answer2_10 == "wrongC") || ($answer2_11 == "wrongD") || ($answer2_12 == "wrongA") || ($answer2_13 == "wrongB")		
           		|| ($answer2_16 == "wrong_1a" || $answer2_16 == "wrong_1c" || $answer2_16 == "wrong_1d" || $answer2_16 == "wrong_1e" || $answer2_16 == "wrong_1f") || ($answer2_17 == "wrong_2a" || $answer2_17 ==  "wrong_2b" || $answer2_17 ==  "wrong_2d" || $answer2_17 ==  "wrong_2e" || $answer2_17 ==  "wrong_2f") || ($answer2_18 == "wrong_3a" || $answer2_18 == "wrong_3b" || $answer2_18 == "wrong_3c" ||  $answer2_18 == "wrong_3e" || $answer2_18 == "wrong_3f") || ($answer2_19 == "wrong_4b" || $answer2_19 == "wrong_4c" || $answer2_19 == "wrong_4d" || $answer2_19 == "wrong_4e" || $answer2_19 == "wrong_4f")  || ($answer2_20a == "wrongB") || ($answer2_20b == "wrongC") || ($answer2_20c == "wrongD") || ($answer2_23 == "wrongC") || ($answer2_24 == "wrong") || ($answer2_25 == "wrongA") || ($answer2_27 == "wrongC") || ($answer2_28 == "wrong_1a" || $answer2_28 == "wrong_1c" || $answer2_28 == "wrong_1d") || ($answer2_29 == "wrong_1a" || $answer2_29 == "wrong_1c" || $answer2_29 == "wrong_1d") || ($answer2_30 == "wrong_1a" || $answer2_30 == "wrong_1c" || $answer2_30 == "wrong_1d") || ($answer2_31 == "wrong_1a" ||  $answer2_31 == "wrong_1c" || $answer2_31 == "wrong_1d") || ($answer2_32 == "wrong")  || ($answer2_33 == "wrong_1a" || $answer2_33 ==  "wrong_1b" || $answer2_33 == "wrong_1c" || $answer2_33 == "wrong_1d" || $answer2_33 == "wrong_1f")  || ($answer2_34 == "wrong_1a" || $answer2_34 == "wrong_1b" || $answer2_34 == "wrong_1c" || $answer2_34 == "wrong_1e" || $answer2_34 == "wrong_1f") || ($answer2_35 == "wrong_1b" || $answer2_35 ==  "wrong_1c" || $answer2_35 ==  "wrong_1d" || $answer2_35 ==  "wrong_1e" || $answer2_35 == "wrong_1f") || ($answer2_36 == "wrong_1a" || $answer2_36 == "wrong_1b" || $answer2_36 == "wrong_1c" || $answer2_36 == "wrong_1d" || $answer2_36 == "wrong_1e") || ($answer2_36a == "wrongB" || $answer2_36a == "wrongC" || $answer2_36a == "wrongE") || ($answer2_36b == "wrongA" || $answer2_36b == "wrongB" || $answer2_36b == "wrongC") || ($answer2_36c == "wrongB" || $answer2_36c ==  "wrongC" || $answer2_36c == "wrongD" || $answer2_36c == "wrongF") || ($answer2_37 == "wrongA" || $answer2_37 == "wrongB")
           		
           		           		
           		
           		
           		)  echo "<p class='scorecard-wrong'>You answered the following incorrectly:</p>";	
           
          if ($answer2_1 == "wrongB")  echo "               		
           						<div class='question-top'></div>
           						<div class='question-box'>
           							<div class='scorecard-answers'>
           								<h5>1. What percentage of our customers steal?</h5>
           		
           								<ul class='wrong-answers'>
           									<li>Your answer:</li>
           									<li>5%</li>
           								</ul>
           		
           								<ul class='correct-answers'>
           									<li>Correct answer:</li>
           									<li>Unknown</li>
           								</ul>
           							</div>
           						</div>
           						<div class='question-bottom'></div>";
           						

if  ($answer2_1 == "wrongC")  echo "               		
 						<div class='question-top'></div>
 						<div class='question-box'>
 							<div class='scorecard-answers'>
 								<h5>1. What percentage of our customers steal?</h5>
 		
 								<ul class='wrong-answers'>
 									<li>Your answer:</li>
 									<li>10%</li>
 								</ul>
 		
 								<ul class='correct-answers'>
 									<li>Correct answer:</li>
 									<li>Unknown</li>
 								</ul>
 							</div>
 						</div>
 						<div class='question-bottom'></div>";

if ($answer2_1 == "wrongD") echo "               		
 						<div class='question-top'></div>
 						<div class='question-box'>
 							<div class='scorecard-answers'>
 								<h5>1. What percentage of our customers steal?</h5>
 		
 								<ul class='wrong-answers'>
 									<li>Your answer:</li>
 									<li>100%</li>
 								</ul>
 		
 								<ul class='correct-answers'>
 									<li>Correct answer:</li>
 									<li>Unknown</li>
 								</ul>
 							</div>
 						</div>
 						<div class='question-bottom'></div>";
 						
         						
           						
           						
        						
if ($answer2_2 == "wrongA") echo "<div class='question-top'></div>
									<div class='question-box'>
						 							<div class='scorecard-answers'>
										<h5>2. What must you do when the EAS alarm sounds at the store entrance / exit?</h5>
						 								<ul class='wrong-answers'>
						 									<li>Your answer:</li>
						 									<li>Chase the customer down the street shouting 'thief'</li>
						 									</ul>
						 		
						 								<ul class='correct-answers'>
						 									<li>Correct answer:</li>
						 									<li>Approach the customer calmly and offer your assistance.</li>
						 									<li>If a tag has been left on the item politely ask the customer to check their receipt and have the tag removed if the item has been paid for</li>
						 									<li>Contact a Manager or Loss Prevention if there is a problem</li>
						 								</ul>
						 							</div>
						 						</div>
						 						<div class='question-bottom'></div>";
						 						
						 						
if ($answer2_6 == "wrongA" || $answer2_6 == "wrongB" || $answer2_6 == "wrongD") echo "<div class='question-top'></div>
									<div class='question-box'>
						 							<div class='scorecard-answers'>
										<h5>3. Which of the following is not an Alert Signal?</h5>			               						 														 		
						 								<ul class='correct-answers'>
						 									<li>Correct answer:</li>
						 									<li>A warning siren that sounds throughout the store when someone is stealing.</li>
						 								</ul>
						 							</div>
						 						</div>
						 						<div class='question-bottom'></div>";						 						
		if ($answer2_7a ==  "wrongB" ) echo "<div class='question-top'></div>
											<div class='question-box'>
								 							<div class='scorecard-answers'>
					<h5>4. Which of the following are Alert Signals?</h5>			               						 														 		
	 								<ul class='wrong-answers'>
	 															<li>Your answer:</li>
	 															<li>A Secret signal only associates know</li>
	 															</ul>
	 								
	 														<ul class='correct-answers'>
	 															<li>Correct answer:</li>
	 															<li>Defeated Tags</li>
	 															<li>Watching for associates</li>
	 															<li>Behaving nervously</li>
	 														</ul>
	 								
								 							</div>
								 						</div>
								 						<div class='question-bottom'></div>";						 						
		if ($answer2_10 ==  "wrongC" || $answer2_11 == "wrongD") echo "<div class='question-top'></div>
											<div class='question-box'>
								 							<div class='scorecard-answers'>
					<h5>5. What should you do if you see something suspicious?</h5>			               						 														 		
										<ul class='wrong-answers'>
																										
																<ul class='correct-answers'>
																	<li>Correct answer:</li>
																	<li>Report it to a Manager or Loss Prevention</li>
																	<li>Approach them and ask if they need any help</li>
																</ul>
										
								 							</div>
								 						</div>
								 						<div class='question-bottom'></div>";
								 						
		if ($answer2_12 ==  "wrongA" || $answer2_13 == "wrongB") echo "<div class='question-top'></div>
											<div class='question-box'>
								 							<div class='scorecard-answers'>
					<h5>6. What should you do if you see someone conceal TJX mechandise?</h5>			               						 														 		
										<ul class='wrong-answers'>
																										
																<ul class='correct-answers'>
																	<li>Correct answer:</li>
																	<li>Approach them and ask if they need any help</li>
																	<li>Ask them if they need a basket</li>
																</ul>
										
								 							</div>
								 						</div>
								 						<div class='question-bottom'></div>";
								 						
		if ( ($answer2_16 ==  "wrong_1a" || $answer2_16 == "wrong_1c" || $answer2_16 == "wrong_1d" || $answer2_16 == "wrong_1e" || $answer2_16 == "wrong_1f") || ($answer2_17 ==  "wrong_2a" || $answer2_17 == "wrong_2b" ||$answer2_17 ==  "wrong_2d" || $answer2_17 == "wrong_2e" ||$answer2_17 ==  "wrong_2f") ||
		($answer2_18 ==  "wrong_3a" || $answer2_18 == "wrong_3b" || $answer2_18 == "wrong_3c" || $answer2_18 == "wrong_3e" || $answer2_18 ==  "wrong_3f") ||
		($answer2_19 ==  "wrong_4b" || $answer2_19 == "wrong_4c" || $answer2_19 == "wrong_4d" || $answer2_19 == "wrong_4e" || $answer2_19 == "wrong_4f")
		
		) echo "<div class='question-top'></div>
											<div class='question-box'>
								 							<div class='scorecard-answers'>
					<h5>7. Match the Fitting Room Tag Colour to the Number</h5>			               						 														 		
										<ul class='wrong-answers'>
																										
																<ul class='correct-answers'>
																	<li>Correct answer:</li>
																	<li>Room 1 = Yellow</li>
																	<li>Room 3 = Red</li>
																	<li>Room 5 = Blue</li>
																	<li>Room 6 = Brown</li>
																</ul>
										
								 							</div>
								 						</div>
								 						<div class='question-bottom'></div>";						 						
	if ($answer2_20a ==  "wrongB" || $answer2_20b == "wrongC" || $answer2_20c ==  "wrongD" ) echo "<div class='question-top'></div>
										<div class='question-box'>
							 							<div class='scorecard-answers'>
				<h5>8. What should you do if someone returns less items from the fitting room?</h5>			               						 														 		
									<ul class='wrong-answers'>
																									
															<ul class='correct-answers'>
																<li>Correct answer:</li>
																<li>Ask them to check if the item is still in their fitting room cubicle</li>
																<li>Inform a Manager or Loss Prevention</li>
															</ul>
									
							 							</div>
							 						</div>
							 						<div class='question-bottom'></div>";
		
		
		if ($answer2_23 ==  "wrongC") echo "<div class='question-top'></div>
											<div class='question-box'>
								 							<div class='scorecard-answers'>
					<h5>9. What factors make the biggest difference to reducing fitting room theft?</h5>			               						 														 		
										<ul class='wrong-answers'>
																										
															<li>Your answer:</li>
															<li>Extensive Police Training</li>
															</ul>
															
																<ul class='correct-answers'>
																		<li>Correct answer:</li>
																		<li>Concentration</li>
																		<li>Following procedures</li>
																	
																	</ul>
										
								 							</div>
								 						</div>
								 						<div class='question-bottom'></div>";						 										
   
   if ($answer2_24 ==  "wrong") echo "<div class='question-top'></div>
   									<div class='question-box'>
   						 							<div class='scorecard-answers'>
   			<h5>10. Should you accuse someone of shoplifting?</h5>			               						 														 		
   								<ul class='wrong-answers'>
   																								
   													<li>Your answer:</li>
   													<li>Yes</li>
   													</ul>
   													
   														<ul class='correct-answers'>
   																<li>Correct answer:</li>
   																<li>No</li>
   															
   															</ul>
   								
   						 							</div>
   						 						</div>
   						 						<div class='question-bottom'></div>";						 
   						 						
   						 						
 if ($answer2_25 ==  "wrongA" || $answer2_27 == "wrongC") echo "<div class='question-top'></div>
 									<div class='question-box'>
 						 							<div class='scorecard-answers'>
 			<h5>11. What should you do if you think someone has stolen something?</h5>			               						 														 		
 								<ul class='wrong-answers'>
 																								
 														<ul class='correct-answers'>
 															<li>Correct answer:</li>
 															<li>Report it to your Manager or Loss Prevention right away</li>
 														</ul>
 								
 						 							</div>
 						 						</div>
 						 						<div class='question-bottom'></div>";
 
if ( ($answer2_28 ==  "wrong_1a" || $answer2_28 == "wrong_1c" || $answer2_28 == "wrong_1d" ) || ($answer2_29 ==  "wrong_1a" || $answer2_29 == "wrong_1c" || $answer2_29 == "wrong_1d")||
($answer2_30 ==  "wrong_1a" || $answer2_30 == "wrong_1c" || $answer2_30 == "wrong_1d" )||
($answer2_31 ==  "wrong_1a" || $answer2_31 == "wrong_1c" || $answer2_31 == "wrong_1d")

) echo "<div class='question-top'></div>
									<div class='question-box'>
						 							<div class='scorecard-answers'>
			<h5>13. How have these tickets been switched?</h5>			               						 														 		
								<ul class='wrong-answers'>
																								
														<ul class='correct-answers'>
															<li>Correct answer:</li>
															<li>1. Red Ticket doesn't match the original ticket data</li>
															<li>2.The ticket has not been switched</li>
															<li>3.The white ticket has been switched</li>
															<li>4.The ticket does not match the price indicator</li>
														</ul>
								
						 							</div>
						 						</div>
						 						<div class='question-bottom'></div>"; 
   						 						
   						 						
   						 						
if ($answer2_32 ==  "wrong") echo "<div class='question-top'></div>
									<div class='question-box'>
						 							<div class='scorecard-answers'>
			<h5>14. When should you guess the price?</h5>			               						 														 		
								<ul class='wrong-answers'>
																								
													<li>Your answer:</li>
													<li>If there's a big queue</li>
													</ul>
													
														<ul class='correct-answers'>
																<li>Correct answer:</li>
																<li>Never</li>
															
															</ul>
								
						 							</div>
						 						</div>
						 						<div class='question-bottom'></div>";		   				
						 						
						 						
if ( ($answer2_33 ==  "wrong_1a" || $answer2_33 ==   "wrong_1b" || $answer2_33 ==  "wrong_1c" ||$answer2_33 ==   "wrong_1d"|| $answer2_33 ==  "wrong_1f") || ($answer2_34 ==  "wrong_1a" || $answer2_34 == "wrong_1b" ||$answer2_34 == "wrong_1c" || $answer2_34 == "wrong_1e"|| $answer2_34 == "wrong_1f") ||
($answer2_35 ==  "wrong_1b" || $answer2_35 == "wrong_1c" || $answer2_35 == "wrong_1d" || $answer2_35 == "wrong_1e"|| $answer2_35 == "wrong_1f" )||
($answer2_36 ==  "wrong_1a" || $answer2_36 ==  "wrong_1b" || $answer2_36 == "wrong_1c" || $answer2_36 ==  "wrong_1d"|| $answer2_36 ==  "wrong_1e")

) echo "<div class='question-top'></div>
									<div class='question-box'>
						 							<div class='scorecard-answers'>
			<h5>15. Name the merchandise protection type</h5>			               						 														 		
								<ul class='wrong-answers'>
																								
														<ul class='correct-answers'>
															<li>Correct answer:</li>
															<li>1.Clamshell </li>
															<li>2.Soft Tag</li>
															<li>3.Lanyard Tag</li>
															<li>4.Gold Pen</li>
														</ul>
								
						 							</div>
						 						</div>
						 						<div class='question-bottom'></div>"; 
	
	if ( ($answer2_36a ==  "wrongB" || $answer2_36a == "wrongC" || $answer2_36a == "wrongE") || ($answer2_36b ==  "wrongA" || $answer2_36b == "wrongB" || $answer2_36b == "wrongC") ||	($answer2_36c ==  "wrongB" || $answer2_36c == "wrongC" || $answer2_36c == "wrongD" || $answer2_36c == "wrongF" )
		
	) echo "<div class='question-top'></div>
										<div class='question-box'>
							 							<div class='scorecard-answers'>
				<h5>16. Which of the following departments do we these merchandise protection types on?</h5>			               						 														 		
									<ul class='wrong-answers'>
									</ul>																
															<ul class='correct-answers'>
																<li>Correct answer:</li>
																<li>1. 25</li>
																<li>2.42 and 79</li>
																<li>3.10</li>
															
															</ul>
									
							 							</div>
							 						</div>
							 						<div class='question-bottom'></div>"; 
	
	if ($answer2_37 ==  "wrongA") echo "<div class='question-top'></div>
										<div class='question-box'>
							 							<div class='scorecard-answers'>
				<h5>17. When processing a customers purchase don't forget to: (Select odd one out)</h5>			               						 														 		
									<ul class='wrong-answers'>
																									
														<li>Your answer:</li>
														<li>Remove/de-activate the tag</li>
														</ul>
														
															<ul class='correct-answers'>
																	<li>Correct answer:</li>
																	<li>Eat Your Lunch</li>
																
																</ul>
									
							 							</div>
							 						</div>
							 						<div class='question-bottom'></div>";

if ($answer2_37 ==  "wrongB") echo "<div class='question-top'></div>
									<div class='question-box'>
						 							<div class='scorecard-answers'>
			<h5>17. When processing a customers purchase don't forget to: (Select odd one out)</h5>			               						 														 		
								<ul class='wrong-answers'>
													<li>Your answer:</li>
													<li>Use double checker</li>
													</ul>
													
														<ul class='correct-answers'>
																<li>Correct answer:</li>
																<li>Eat Your Lunch</li>
															
															</ul>
								
						 							</div>
						 						</div>
						 						<div class='question-bottom'></div>";										 								 														
           
       ?>
</div>
</div>
	
<div data-role='footer' data-theme='c' data-position='fixed' data-tap-toggle='false'></div>

</div>


</body>
</html>