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
<div data-role="dialog" id="s5score">	
			<div data-role="header" id="header" data-theme="c">
				<h1>Score card</h1>
				<h2><span class="section-marker">Section</span> <span>5</span></h2>
			</div>
		
		
	
	        <?php
	        
	        session_start(); 
//section 5 q1  free form
 $answer5_1 = $_POST['textareaST'];

//question2 free form
 $answer5_2 = $_POST['radio-s5q2'];
  
                        
          
                
            $totalCorrect = 0;
            
            mysql_connect("213.171.200.46", "tkmaxx", "onboard2012!") or die(mysql_error());
            mysql_select_db("tkmaxx") or die(mysql_error());
            
            mysql_query ("INSERT INTO onboard(answer) VALUES ('s5q1 $answer5_1')") or die(mysql_error());
            
            mysql_query ("INSERT INTO onboard(answer) VALUES ('s5q2 $answer5_2')") or die(mysql_error());
            mysql_query ("INSERT INTO onboard(answer) VALUES ('END OF QUIZ')") or die(mysql_error());
            
            
            //section5
//            if (strpos($answer5_1,"topic") !==false) { $totalCorrect++; }

$totalCorrect++;
            if ($answer5_2 == "correct") { $totalCorrect++; }
           
                $sumTotal = $totalCorrect;               
            
$_SESSION['section5total'] = $sumTotal;
$hello = $_SESSION['section2total']+$_SESSION['section1total']+$_SESSION['section3total']+$_SESSION['section4total']+$_SESSION['section5total'];
             
           echo "                      	            	
               		<div data-role='content' class='question-score'>
               			<div class='congratulations'>
               				<h4>Section 5 score</h4>
               
               				<p class='scorecard-title'>You scored</p>
               
               				<p class='scorecard-score'>$sumTotal</p>";
               
  if ($sumTotal == "2") echo "<p class='scorecard-wrong'>Well done maximum points !</p>";
               			
if ( ($answer5_2 == "wrong")  

) echo "<p class='scorecard-wrong'>You answered the following incorrectly:</p>";
         
         		
                        
         if ($answer5_2 == "wrong" ) echo "<div class='question-top'></div>
         									<div class='question-box'>
         						 							<div class='scorecard-answers'>
         			<h5>2. Who is the Shrink Hero?</h5>			           				 														 		
         								<ul class='wrong-answers'>
         							<li>Your answer:</li>
         							<li>Pengiun the Profit Protector</li>
         													</ul>
         													
         														<ul class='correct-answers'>
         														<li>Correct answer:</li>
         																<li>Ant-i Shrink</li>
         															</ul>
         								
         						 							</div>
         						 						</div>
         						 						<div class='question-bottom'></div>"; 
                 						
               	
               
           ?>
	
	
			</div> 	
			          <a href="#" data-role="button" data-rel="back" data-theme="b">Close</a> 		 
			
			</div>
		
	<div data-role='footer' data-theme='c' data-position='fixed' data-tap-toggle='false'></div>	
	</div>
	

	
</body>
</html>