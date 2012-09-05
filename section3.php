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
 
 //question5 
  $answer3_11a = $_POST['checkbox-s3q5a'];
  $answer3_11b = $_POST['checkbox-s3q5b'];
  $answer3_11c = $_POST['checkbox-s3q5c'];
  $answer3_11d = $_POST['checkbox-s3q5d'];
  $answer3_11e = $_POST['checkbox-s3q5e'];
  
  
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
$answer3_26 = $_POST['checkbox-s3q10a'];
$answer3_26a = $_POST['checkbox-s3q10b'];
$answer3_26b = $_POST['checkbox-s3q10c'];
$answer3_26c = $_POST['checkbox-s3q10d'];
 
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
         
         if ($answer3_11a == "correct") { $totalCorrect++; }  
        if ( $answer3_11c == "correct") { $totalCorrect++; }  
        if ( $answer3_11d == "correct") { $totalCorrect++; }  
        if ( $answer3_11e == "correct") { $totalCorrect++; }   
        
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
         if ($answer3_26a == "correct") { $totalCorrect++; }
         if ($answer3_26b == "correct") { $totalCorrect++; }
         
         if ($answer3_27 == "correct") { $totalCorrect++; }
         if ($answer3_28 == "correct") { $totalCorrect++; }
         if ($answer3_29 == "correct") { $totalCorrect++; }
         
         if ($answer3_31 == "correct") { $totalCorrect++; }
         if ($answer3_32 == "correct") { $totalCorrect++; }
         if ($answer3_33 == "correct") { $totalCorrect++; }
        
         $sumTotal = $totalCorrect-$deduct8-$deduct9-$deduct10-$deduct11-$deduct12; 
           
           
mysql_connect("213.171.200.46", "tkmaxx", "onboard2012!") or die(mysql_error());
mysql_select_db("tkmaxx") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q1 $answer3_1')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q2 $answer3_2')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q2 $answer3_3')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q2 $answer3_4')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q2 $answer3_5')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q2 $answer3_6')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q3 $answer3_7')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q4 $answer3_8')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q4 $answer3_9')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q4 $answer3_10')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q4 $answer3_11')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q5 $answer3_11a')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q5 $answer3_11b')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q5 $answer3_11c')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q5 $answer3_11d')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q5 $answer3_11e')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q6 $answer3_12')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q6 $answer3_13')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q6 $answer3_14')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q7 $answer3_15')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q8 $answer3_16')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q8 $answer3_17')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q8 $answer3_18')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q8 $answer3_19')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q8 $answer3_20')") or die(mysql_error());
         
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q9 $answer3_21')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q9 $answer3_22')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q9 $answer3_23')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q9 $answer3_24')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q9 $answer3_25')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q10 $answer3_26')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q11 $answer3_27')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q11 $answer3_28')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q11 $answer3_29')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q11 $answer3_30')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q12 $answer3_31')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q12 $answer3_32')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s3q12 $answer3_33')") or die(mysql_error());
                                          
            echo "
                
                	            	
                		<div data-role='content' class='question-score'>
                			<div class='congratulations'>
                				<h4>Section 3 score</h4>
                
                				<p class='scorecard-title'>You scored</p>
                
                				<p class='scorecard-score'>$sumTotal</p>";
                				
                
                if ($sumTotal == "33") echo "<p class='scorecard-wrong'>Well done maximum points !</p>";				
                
                if (($answer3_2 == "wrongA") || ($answer3_3 == "wrongC") || ($answer3_7 == "wrongA" || $answer3_7 ==  "wrongB" || $answer3_7 ==  "wrongC") || ($answer3_10 == "wrong") || ($answer3_11b == "wrong") || ($answer3_14 == "wrong") || ($answer3_15 != "0080043215167") || ($answer3_20 == "wrong") || ($answer3_26 == "wrong") || ($answer3_30 == "wrong") || ($answer3_31 == "wrong1b" || $answer3_31 ==  "wrong1c")  || ($answer3_32 == "wrong2a" || $answer3_32 == "wrong2b")  || ($answer3_33 == "wrong3a" || $answer3_33 == "wrong3c")            
                
                
                ) echo "<p class='scorecard-wrong'>You answered the following incorrectly:</p>";
                
                
                			
                if ($answer3_2 ==  "wrongA" || $answer3_4 == "wrongC" ) echo "<div class='question-top'></div>
                									<div class='question-box'>
                						 							<div class='scorecard-answers'>
                			<h5>2. What are the signs that an associate might be dishonest?</h5>			           				 														 		
                								<ul class='wrong-answers'>
		      													</ul>
                													
                														<ul class='correct-answers'>
                																<li>Correct answer:</li>
                																<li>Bragging about or inviting you to join a scam to steal stuff</li>
                															<li>Appearing to spend money beyond their means</li>
                															<li>They always say they have no money, but always have lots of new expensive things</li>
                															</ul>
                								
                						 							</div>
                						 						</div>
                						 						<div class='question-bottom'></div>";
                						 						
                						 						                
 if ($answer3_7 ==  "wrongA" ) echo "<div class='question-top'></div>
 									<div class='question-box'>
 						 							<div class='scorecard-answers'>
 			<h5>3. What shouldn't you do if you are suspicious about a colleague?</h5>			           				 														 		
 								<ul class='wrong-answers'>
 								<li>Your answer:</li>
 								<li>Talk to a Manager</li>
 													</ul>
 													
 														<ul class='correct-answers'>
 																<li>Correct answer:</li>
 																<li>Ask them questions about your suspicions</li>
 														</ul>
 								
 						 							</div>
 						 						</div>
 						 						<div class='question-bottom'></div>";                						 							
if ($answer3_7 ==  "wrongB" ) echo "<div class='question-top'></div>
									<div class='question-box'>
						 							<div class='scorecard-answers'>
			<h5>3. What shouldn't you do if you are suspicious about a colleague?</h5>			           				 														 		
								<ul class='wrong-answers'>
								<li>Your answer:</li>
								<li>Call CrimeLine</li>
													</ul>
													
														<ul class='correct-answers'>
																<li>Correct answer:</li>
																<li>Ask them questions about your suspicions</li>
														</ul>
								
						 							</div>
						 						</div>
						 						<div class='question-bottom'></div>";    
if ($answer3_7 ==  "wrongC" ) echo "<div class='question-top'></div>
									<div class='question-box'>
						 							<div class='scorecard-answers'>
			<h5>3. What shouldn't you do if you are suspicious about a colleague?</h5>			           				 														 		
								<ul class='wrong-answers'>
								<li>Your answer:</li>
								<li>Talk to Loss Prevention</li>
													</ul>
													
														<ul class='correct-answers'>
																<li>Correct answer:</li>
																<li>Ask them questions about your suspicions</li>
														</ul>
								
						 							</div>
						 						</div>
						 						<div class='question-bottom'></div>";    
   if ($answer3_10 ==  "wrong" ) echo "<div class='question-top'></div>
   									<div class='question-box'>
   						 							<div class='scorecard-answers'>
   			<h5>4. What do you know about CrimeLine?</h5>			           				 														 		
   								<ul class='wrong-answers'>
   								<li>Your answer:</li>
   								<li>Everyone finds out you have called</li>
   													</ul>
   													
   														<ul class='correct-answers'>
   																<li>Correct answer:</li>
   																<li>You can get a reward</li>
   																<li>It's OK if someone calls for you</li>
   																<li>You don't have to see or hear anything. You can just report a suspicion</li>
   																</ul>
   								
   						 							</div>
   						 						</div>
   						 						<div class='question-bottom'></div>";    
                   	              
if ($answer3_10 ==  "wrong" ) echo "<div class='question-top'></div>
									<div class='question-box'>
						 							<div class='scorecard-answers'>
			<h5>5. What tools do TKMaxx use to stop internal theft?</h5>			           				 														 		
								<ul class='wrong-answers'>
								<li>Your answer:</li>
								<li>Guard Dogs</li>
													</ul>
													
														<ul class='correct-answers'>
																<li>Correct answer:</li>
																<li>CCTV</li>
																<li>Hidden Cameras</li>
																<li>Register Reports</li>
														<li>Head Office Data Mining</li>
																</ul>
								
						 							</div>
						 						</div>
						 						<div class='question-bottom'></div>";    
                	              


   if ($answer3_14 ==  "wrong" ) echo "<div class='question-top'></div>
   									<div class='question-box'>
   						 							<div class='scorecard-answers'>
   			<h5>6. How can you contact CrimeLine?</h5>			           				 														 		
   								<ul class='wrong-answers'>
   								<li>Your answer:</li>
   								<li>Text</li>
   													</ul>
   													
   														<ul class='correct-answers'>
   																<li>Correct answer:</li>
   																<li>Phone</li>
   																<li>EMail</li>
   														</ul>
   								
   						 							</div>
   						 						</div>
   						 						<div class='question-bottom'></div>";    
                   	              
   
   if ($answer3_15 != "0080043215167" ) echo "<div class='question-top'></div>
   									<div class='question-box'>
   						 							<div class='scorecard-answers'>
   			<h5>7. What is the CrimeLine phone number?</h5>			           				 														 		
   								<ul class='wrong-answers'>
   								<li>Your answer:</li>
   								<li>$answer3_15</li>
   													</ul>
   													
   														<ul class='correct-answers'>
   																<li>Correct answer:</li>
   																<li>0080043215167</li>
   														</ul>
   								
   						 							</div>
   						 						</div>
   						 						<div class='question-bottom'></div>";    
                   	              
   
                	              
       if ($answer3_20 ==  "wrong" ) echo "<div class='question-top'></div>
       									<div class='question-box'>
       						 							<div class='scorecard-answers'>
       			<h5>8. Why do people steal?</h5>			           				 														 		
       								<ul class='wrong-answers'>
       								<li>Your answer:</li>
       								<li>Because it is easy</li>
       													</ul>
       													
       														<ul class='correct-answers'>
       																<li>Correct answer:</li>
       																<li>Opportunity</li>
       																<li>Job dissatisfaction</li>
       																<li>Peer pressure</li>
       																<li>Need</li>
       														</ul>
       								
       						 							</div>
       						 						</div>
       						 						<div class='question-bottom'></div>";    
                       	              
       if ($answer3_26 ==  "wrong" ) echo "<div class='question-top'></div>
       									<div class='question-box'>
       						 							<div class='scorecard-answers'>
       			<h5>10. What could happen to an associate who steals from TJX Europe?</h5>			           				 														 		
       								<ul class='wrong-answers'>
       								<li>Your answer:</li>
       								<li>Not a lot</li>
       													</ul>
       													
       														<ul class='correct-answers'>
       																<li>Correct answer:</li>
       																<li>They get a criminal record</li>
       																<li>They can lose their job</li>
       																<li>They will face embarrassment</li>
       																</ul>
       								
       						 							</div>
       						 						</div>
       						 						<div class='question-bottom'></div>";   
        
        if ($answer3_30 ==  "wrong" ) echo "<div class='question-top'></div>
        									<div class='question-box'>
        						 							<div class='scorecard-answers'>
        			<h5>11. What can you do to make a difference?</h5>			           				 														 		
        								<ul class='wrong-answers'>
        								<li>Your answer:</li>
        								<li>It's not my problem</li>
        													</ul>
        													
        														<ul class='correct-answers'>
        																<li>Correct answer:</li>
        																<li>Stay alert</li>
        																<li>Report it</li>
        																<li>Don't be pressured to do something you're uncomfortable with</li>
        																</ul>
        								
        						 							</div>
        						 						</div>
        						 						<div class='question-bottom'></div>"; 
        						 						
if ( ($answer3_31 == "wrong_1b" || $answer3_31 == "wrong_1c") ||($answer3_32 == "wrong_2a" || $answer3_32 == "wrong_2b") || ($answer3_31 == "wrong_3a" || $answer3_31 == "wrong_3c")) echo "<div class='question-top'></div>
									<div class='question-box'>
						 							<div class='scorecard-answers'>
			<h5>12. Spot what's wrong</h5>			           				 														 		
								<ul class='wrong-answers'>
													</ul>
													
														<ul class='correct-answers'>
																<li>Correct answer:</li>
																<li>1. Register with money hidden</li>
																<li>2. Merchandise in rubbish</li>
																<li>3. Merchandise in locker</li>
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