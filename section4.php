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
<div data-role="dialog" id="s4score">	
			<div data-role="header" id="header" data-theme="c">
				<h1>Score card</h1>
				<h2><span class="section-marker">Section</span> <span>4</span></h2>
			</div>
		
	
	        <?php
//section 4 q1
  $answer4_1 = $_POST['radio-s4q1'];
  
  //question2
  $answer4_2 = $_POST['checkbox-s4q2a'];
  $answer4_2a = $_POST['checkbox-s4q2b'];
  $answer4_2b = $_POST['checkbox-s4q2c'];
  $answer4_2c = $_POST['checkbox-s4q2d'];
  
  
  //question3
$answer4_3 = $_POST['radio-s4q3'];
  
  //question4
  $answer4_4 = $_POST['checkbox-s4q4a'];
  $answer4_5 = $_POST['checkbox-s4q4b'];
  $answer4_6 = $_POST['checkbox-s4q4c'];
  $answer4_7 = $_POST['checkbox-s4q4d'];
  
  //question5
  $answer4_8 = $_POST['checkbox-s4q5a'];
  $answer4_9 = $_POST['checkbox-s4q5b'];
  $answer4_10 = $_POST['checkbox-s4q5c'];
  $answer4_11 = $_POST['checkbox-s4q5d'];
  
  //question6 
  $answer4_11a = $_POST['checkbox-s4q6a'];
  $answer4_11b = $_POST['checkbox-s4q6b'];
  $answer4_11c = $_POST['checkbox-s4q6c'];
  
  //question7
  $answer4_12 = $_POST['slider-1'];
  $answer4_12a = $_POST['radio-s4q7'];
  
  //question8
  $answer4_13 = $_POST['radio-s4q8'];
  
  //question9
  $answer4_14 = $_POST['radio-s4q9'];
  
  //question10
  $answer4_15 = $_POST['radio-s4q10'];                        
          
                
            $totalCorrect = 0;
            
             //section 4
                       if ($answer4_1 == "correct") { $totalCorrect++; }
                       
                       if ($answer4_2a == "correct") { $totalCorrect++; }
                       if ($answer4_2b == "correct") { $totalCorrect++; }
                       if ($answer4_2c == "correct") { $totalCorrect++; }
                       
                        if ($answer4_3 == "correct") { $totalCorrect++; }
                       
                       if ($answer4_4 == "correct") { $totalCorrect++; }
                       if ($answer4_5 == "correct") { $totalCorrect++; }
                       if ($answer4_6 == "correct") { $totalCorrect++; }
                       
                       if ($answer4_8 == "correct") { $totalCorrect++; }
                       
                        if ($answer4_11a == "correct") { $totalCorrect++; }
                       
                       if ($answer4_12 >= 75) { $totalCorrect++; }
                      
                       
                       if ($answer4_12a == "correct") { $totalCorrect++; }
                       
                       if ($answer4_13 == "correct") { $totalCorrect++; }
                       if ($answer4_14 == "correct") { $totalCorrect++; }
                       if ($answer4_15 == "correct") { $totalCorrect++; }
           
                 $sumTotal = $totalCorrect-$deduct13-$deduct14-$deduct15;               
             
mysql_connect("213.171.200.46", "tkmaxx", "onboard2012!") or die(mysql_error());
mysql_select_db("tkmaxx") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q1 $answer4_1')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q2 $answer4_2')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q2 $answer4_2a')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q2 $answer4_2b')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q2 $answer4_2c')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q3 $answer4_3')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q4 $answer4_4')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q4 $answer4_5')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q4 $answer4_6')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q4 $answer4_7')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q5 $answer4_8')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q5 $answer4_9')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q5 $answer4_10')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q5 $answer4_11')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q6 $answer4_11a')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q6 $answer4_11b')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q6 $answer4_11c')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q7 $answer4_12')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q8 $answer4_13')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q9 $answer4_14')") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('s4q10 $answer4_15')") or die(mysql_error());


           echo "    
               	            	
               		<div data-role='content' class='question-score'>
               			<div class='congratulations'>
               				<h4>Section 4 score</h4>
               
               				<p class='scorecard-title'>You scored</p>
               
               				<p class='scorecard-score'>$sumTotal</p>";
         
                 			
                 
           if ($sumTotal == "15") echo "<p class='scorecard-wrong'>Well done maximum points !</p>";				
         			
                
                if ( ($answer4_1 == "wrongB") || ($answer4_1 == "wrongC") || ($answer4_2 == "wrong") || ($answer4_3 == "wrong") || ($answer4_7 == "wrong") || ($answer4_9 == "wrongB") || ($answer4_10 == "wrongC") || ($answer4_11 == "wrongD") || ($answer4_11b == "wrongB") || ($answer4_11c == "wrongC") || ($answer4_12 < 75) ||($answer4_12a == "wrong") || ($answer4_13 == "wrongA") ||($answer4_13 == "wrongB") || ($answer4_13 == "wrongC") || ($answer4_14 == "wrong") || ($answer4_15 == "wrong")           
                
                ) echo "<p class='scorecard-wrong'>You answered the following incorrectly:</p>";
                
                
                			
                      if ($answer4_1 ==  "wrongB" ) echo "<div class='question-top'></div>
                      									<div class='question-box'>
                      						 							<div class='scorecard-answers'>
                      			<h5>1. What is the tagging price point for sunglasses?</h5>			           				 														 		
                      								<ul class='wrong-answers'>
                      								<li>Your answer:</li>
                      								<li>£9.99</li>
                      													</ul>
                      													
                      														<ul class='correct-answers'>
                      																<li>Correct answer:</li>
                      																<li>All</li>
                      															</ul>
                      								
                      						 							</div>
                      						 						</div>
                      						 						<div class='question-bottom'></div>";
                       
                       if ($answer4_1 ==  "wrongC" ) echo "<div class='question-top'></div>
                       									<div class='question-box'>
                       						 							<div class='scorecard-answers'>
                       			<h5>1. What is the tagging price point for sunglasses?</h5>			           				 														 		
                       								<ul class='wrong-answers'>
                       								<li>Your answer:</li>
                       								<li>£14.99</li>
                       													</ul>
                       													
                       														<ul class='correct-answers'>
                       																<li>Correct answer:</li>
                       																<li>All</li>
                       															</ul>
                       								
                       						 							</div>
                       						 						</div>
                       						 						<div class='question-bottom'></div>";
                       						 						
         if ($answer4_2 ==  "wrong" ) echo "<div class='question-top'></div>
         									<div class='question-box'>
         						 							<div class='scorecard-answers'>
         			<h5>2. You drop merchandise on the floor and it breaks, what do you do?</h5>			           				 														 		
         								<ul class='wrong-answers'>
         								<li>Your answer:</li>
         								<li>Hide the evidence as quickly as possible</li>
         													</ul>
         													
         														<ul class='correct-answers'>
         																<li>Correct answer:</li>
         																<li>You call someone to help clean up</li>
         																<li>Tell a Manager</li>
         																<li>Make sure the breakage is recorded</li>
         															</ul>
         								
         						 							</div>
         						 						</div>
         						 						<div class='question-bottom'></div>";
         if ($answer4_3 ==  "wrong" ) echo "<div class='question-top'></div>
         									<div class='question-box'>
         						 							<div class='scorecard-answers'>
         			<h5>3. Tagging the item may damage it, what should you do?</h5>			           				 														 		
         								<ul class='wrong-answers'>
         								<li>Your answer:</li>
         								<li>Tag it anyway, better damaged than stolen</li>
         													</ul>
         													
         														<ul class='correct-answers'>
         																<li>Correct answer:</li>
         																<li>Do not tag it</li>
         																</ul>
         								
         						 							</div>
         						 						</div>
         						 						<div class='question-bottom'></div>";              		
        
        if ($answer4_7 ==  "wrong" ) echo "<div class='question-top'></div>
        									<div class='question-box'>
        						 							<div class='scorecard-answers'>
        			<h5>4. What must be checked on an lBl?</h5>			           				 														 		
        								<ul class='wrong-answers'>
        								<li>Your answer:</li>
        								<li>If it is fashionable</li>
        													</ul>
        													
        														<ul class='correct-answers'>
        																<li>Correct answer:</li>
        																<li>Tag</li>
        																<li>Ticket</li>
        																<li>Location</li>
        																</ul>
        								
        						 							</div>
        						 						</div>
        						 						<div class='question-bottom'></div>";   						 										 						
        if ($answer4_9 ==  "wrongB" || $answer4_10 ==  "wrongC" || $answer4_11 ==  "wrongD" ) echo "<div class='question-top'></div>
        									<div class='question-box'>
        						 							<div class='scorecard-answers'>
        			<h5>5. You find an item without a ticket, what do you do?</h5>			           				 														 		
        								<ul class='wrong-answers'>
        								</ul>
        													
        														<ul class='correct-answers'>
        																<li>Correct answer:</li>
        																<li>Find an exact match</li>
        														</ul>
        								
        						 							</div>
        						 						</div>
        						 						<div class='question-bottom'></div>";   						 									
        			
        if ($answer4_11a ==  "wrongB" || $answer4_11b ==  "wrongC" ) echo "<div class='question-top'></div>
        									<div class='question-box'>
        						 							<div class='scorecard-answers'>
        			<h5>6. How do you avoid issues with Mismates?</h5>			           				 														 		
        								<ul class='wrong-answers'>
        								</ul>
        													
        														<ul class='correct-answers'>
        																<li>Correct answer:</li>
        																<li>Check the multi-piece garment tickets match</li>
        														</ul>
        								
        						 							</div>
        						 						</div>
        						 						<div class='question-bottom'></div>";  
        						 						
if ($answer4_12 < 75 ) echo "<div class='question-top'></div>
									<div class='question-box'>
						 							<div class='scorecard-answers'>
			<h5>7. What was last week's Markdown% ?</h5>			           				 														 		
								<ul class='wrong-answers'>
								<li>Your answer:</li>
								<li>$answer4_12</li>
													</ul>
													
														<ul class='correct-answers'>
																<li>Correct answer:</li>
																<li>75%</li>
																</ul>
								
						 							</div>
						 						</div>
						 						<div class='question-bottom'></div>";         						 						
        						 						
        						 						
        if ($answer4_12a ==  "wrong" ) echo "<div class='question-top'></div>
        									<div class='question-box'>
        						 							<div class='scorecard-answers'>
        			<h5>7. What was last week's Markdown% ?</h5>			           				 														 		
        								<ul class='wrong-answers'>
        								<li>Your answer:</li>
        								<li>Good</li>
        													</ul>
        													
        														<ul class='correct-answers'>
        																<li>Correct answer:</li>
        																<li>Bad</li>
        																</ul>
        								
        						 							</div>
        						 						</div>
        						 						<div class='question-bottom'></div>"; 
        						 						
        if ($answer4_13 ==  "wrongA" ) echo "<div class='question-top'></div>
        									<div class='question-box'>
        						 							<div class='scorecard-answers'>
        			<h5>8. What is Scamping?</h5>			           				 														 		
        								<ul class='wrong-answers'>
        								<li>Your answer:</li>
        								<li>It goes with chips</li>
        													</ul>
        													
        														<ul class='correct-answers'>
        																<li>Correct answer:</li>
        																<li>Reducing items to be placed into clearance</li>
        															</ul>
        								
        						 							</div>
        						 						</div>
        						 						<div class='question-bottom'></div>"; 
         
        if ($answer4_13 ==  "wrongB" ) echo "<div class='question-top'></div>
        									<div class='question-box'>
        						 							<div class='scorecard-answers'>
        			<h5>8. What is Scamping?</h5>			           				 														 		
        								<ul class='wrong-answers'>
        								<li>Your answer:</li>
        								<li>Finding an exact match</li>
        													</ul>
        													
        														<ul class='correct-answers'>
        																<li>Correct answer:</li>
        																<li>Reducing items to be placed into clearance</li>
        															</ul>
        								
        						 							</div>
        						 						</div>
        						 						<div class='question-bottom'></div>";  						 						 		
        if ($answer4_13 ==  "wrongC" ) echo "<div class='question-top'></div>
        									<div class='question-box'>
        						 							<div class='scorecard-answers'>
        			<h5>8. What is Scamping?</h5>			           				 														 		
        								<ul class='wrong-answers'>
        								<li>Your answer:</li>
        								<li>Re-ticketing</li>
        													</ul>
        													
        														<ul class='correct-answers'>
        																<li>Correct answer:</li>
        																<li>Reducing items to be placed into clearance</li>
        															</ul>
        								
        						 							</div>
        						 						</div>
        						 						<div class='question-bottom'></div>";  
        
        if ($answer4_14 ==  "wrong" ) echo "<div class='question-top'></div>
        									<div class='question-box'>
        						 							<div class='scorecard-answers'>
        			<h5>9. What is a missed markdown?</h5>			           				 														 		
        								<ul class='wrong-answers'>
        								<li>Your answer:</li>
        								<li>Missing a good bargain</li>
        													</ul>
        													
        														<ul class='correct-answers'>
        																<li>Correct answer:</li>
        																<li>An item that should have been reduced, but was missed</li>
        															</ul>
        								
        						 							</div>
        						 						</div>
        						 						<div class='question-bottom'></div>";  
        
        if ($answer4_15 ==  "wrong" ) echo "<div class='question-top'></div>
        									<div class='question-box'>
        						 							<div class='scorecard-answers'>
        			<h5>10. What should you do if you make a mistake?</h5>			           				 														 		
        								<ul class='wrong-answers'>
        								<li>Your answer:</li>
        								<li>Keep quiet</li>
        													</ul>
        													
        														<ul class='correct-answers'>
        																<li>Correct answer:</li>
        																<li>Be honest and let someone know</li>
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