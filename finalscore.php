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
	<?php
	session_start(); 

	$finalscore = $_SESSION['section2total']+$_SESSION['section1total']+$_SESSION['section3total']+$_SESSION['section4total']+$_SESSION['section5total'];
	?>
           
           <div data-role="page" id="finalscore" class="question-finalscore">	
           		<div data-role="header" id="header" data-theme="c">
           			<h1>Final Score</h1>
           		</div>
           	
           		<div data-role="content">
           			<div class="congratulations">
              				<h4>Congratulations!</h4>
           
              				<p class="scorecard-title">You've finished the quiz!</p>
              
              				<p class="scorecard-title">You scored</p>
              
              				<p class="scorecard-score"><?php echo $finalscore ?></p>			<!-- total score goes here -->
           
<!--              				<p class="scorecard-percent">100%</p>		-->
              				<!-- percentage goes here if included -->
           
              				<p class="scorecard-text">Go to the Store leaderboard poster and record your store.</p>
           
              				<a href="#" class="nextquestion" data-role="button">Home</a>
              			</div>
           		</div>	
           
           		<div data-role="footer" id="footer" data-theme="c" data-position="fixed" data-tap-toggle="false">	
           		</div>			
           	</div>
           
                                  	            	
     
	

	
</body>
</html>