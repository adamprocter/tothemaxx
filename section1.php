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
            $answer1_7 = $_POST['checkbox-s1q4a'];
            $answer1_7a = $_POST['checkbox-s1q4b'];
            $answer1_7b = $_POST['checkbox-s1q4c'];
            $answer1_7c = $_POST['checkbox-s1q4d'];
                        
          $deduct = $_POST['deduct'];
          $deduct2 = $_POST['deduct2'];
                
            $totalCorrect = 1;
            
            //section1
            if ($answer1_1 == "correct") { $totalCorrect++; }
            
            //question2
            if ($answer1_2 == "correct") { $totalCorrect++; }
            if ($answer1_3 == "correct") { $totalCorrect++; }
            if ($answer1_5 == "correct") { $totalCorrect++; }
           
           //question4
           if ($answer1_7 == "correct") { $totalCorrect++; }
           if ($answer1_7a == "correct") { $totalCorrect++; }
           if ($answer1_7b == "correct") { $totalCorrect++; }                    
           if ($answer1_7c == "correct") { $totalCorrect++; }
           
         
           
      	   $sumTotal = $totalCorrect-$deduct-$deduct2; 


// Make a MySQL Connection
mysql_connect("213.171.200.46", "tkmaxx", "onboard2012!") or die(mysql_error());
mysql_select_db("tkmaxx") or die(mysql_error());

mysql_query ("INSERT INTO onboard(answer) VALUES ('NEW ASSOCIATE')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s1q1 $answer1_1')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s1q2 $answer1_2')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s1q2 $answer1_3')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s1q2 $answer1_4')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s1q2 $answer1_5')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s1q3 $answer1_6')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s1q4 $answer1_7')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s1q4 $answer1_7a')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s1q4 $answer1_7b')") or die(mysql_error());
mysql_query ("INSERT INTO onboard(answer) VALUES ('s1q4 $answer1_7c')") or die(mysql_error());


// echo "<h2>Section 1 results - </h2> <strong>Q1</strong> $answer1_1<br /> <strong>Q2</strong> $answer1_2, $answer1_3, $answer1_4, $answer1_5<br /> <strong>Q3</strong> $answer1_6<br /> <strong>Q4</strong> $answer1_7,$answer1_7a,$answer1_7b,$answer1_7c <br />
// <h2>wrong answers</h2>";
// 

            echo "       
            	    
            		<div data-role='content' class='question-score'>
            			<div class='congratulations'>
            				<h4>Section 1 score</h4>
            
            				<p class='scorecard-title'>You scored</p>
            
            				<p class='scorecard-score'>$sumTotal</p>
            
            			
            ";
         
         
          if ($sumTotal == "8") echo "<p class='scorecard-wrong'>Well done maximum points !</p>";
            
            if (($answer1_1 == "wrong2") || ($answer1_1 == "wrong3") || ($answer1_5 == "wrongD")) echo "<p class='scorecard-wrong'>You answered the following incorrectly:</p>";
            
            
            if ($answer1_1 == "wrong2") echo "
             			
             		
             						<div class='question-top'></div>
             						<div class='question-box'>
             							<div class='scorecard-answers'>
             								<h5>1. What do we mean by Shrink at TJX Europe?</h5>
             		
             								<ul class='wrong-answers'>
             									<li>Your answer:</li>
             									<li>It's what happens when clothes are washed too hot</li>
             									</ul>
             		
             								<ul class='correct-answers'>
             									<li>Correct answer:</li>
             									<li>'Unknown loss'. The cash difference between what should be in the store and what actually is in the store</li>
             								</ul>
             							</div>
             						</div>
             						<div class='question-bottom'></div>
             		           					
             					
             				";
          
          
        if ($answer1_1 == "wrong3") echo "
         			
         		
         						<div class='question-top'></div>
         						<div class='question-box'>
         							<div class='scorecard-answers'>
         								<h5>1. What do we mean by Shrink at TJX Europe?</h5>
         		
         								<ul class='wrong-answers'>
         									<li>Your answer:</li>
         									<li>A phychiatrist</li>
         									</ul>
         		
         								<ul class='correct-answers'>
         									<li>Correct answer:</li>
         									<li>'Unknown loss'. The cash difference between what should be in the store and what actually is in the store</li>
         								</ul>
         							</div>
         						</div>
         						<div class='question-bottom'></div>
         		           					
         					
         				";
                   
                   
                   if ($answer1_5 == "wrongD") echo "
                    			
                    		
                    						<div class='question-top'></div>
                    						<div class='question-box'>
                    							<div class='scorecard-answers'>
                    								<h5>2. What are the causes of Shrink at TJX Europe?</h5>
                    		
                    								<ul class='wrong-answers'>
                    									<li>Your answer:</li>
                    									<li>Broken Washing machines</li>
                    									</ul>
                    		
                    								<ul class='correct-answers'>
                    									<li>Correct answer:</li>
                    									<li>External Theft</li>
                    									<li>Interal Theft</li>
                    									<li>Human error</li>
                    								</ul>
                    							</div>
                    						</div>
                    						<div class='question-bottom'></div>
                    		           					
                    					
                    				";
                    				
                    		                   				
                                  
          ?>      	
          </div>			 
            		</div>
            			
            		<div data-role='footer' data-theme='c' data-position='fixed' data-tap-toggle='false'></div>				
         	
	
	</div>
	
		
</body>
</html>