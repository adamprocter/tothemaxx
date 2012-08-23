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

<link rel="stylesheet" href="css/jquery.mobile-1.2.0-alpha.1.min.css" />
<link rel="stylesheet" href="css/custom.css" />

<script src="phonegap.js"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/energize.js"></script>
<script src="js/application.js"></script>
<script src="js/jquery.mobile-1.2.0-alpha.1.min.js"></script>


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
  
  //question6 no correct answer ?
  $answer4_11a = $_POST['checkbox-s4q6a'];
  $answer4_11b = $_POST['checkbox-s4q6b'];
  $answer4_11c = $_POST['checkbox-s4q6c'];
  
  //question7
  $answer4_12 = $_POST['textareaMD'];
  
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
                        if ($answer4_11b == "correct") { $totalCorrect++; }
                       
            //           if ($answer4_12 => 75) { $totalCorrect++; }
                       
                       if ($answer4_13 == "correct") { $totalCorrect++; }
                       if ($answer4_14 == "correct") { $totalCorrect++; }
                       if ($answer4_15 == "correct") { $totalCorrect++; }
           
                               
             
           echo "
               
               	            	
               		<div data-role='content' class='question-score'>
               			<div class='congratulations'>
               				<h4>Section 4 score</h4>
               
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

	
		
</body>
</html>