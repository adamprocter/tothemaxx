<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Scoring</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Test Score - with result data</h1>
		
        <?php
        
        $persons_name = $_POST['textarea-name'];
        $persons_store = $_POST['textarea-store'];
        
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
                        
          echo "<h1>$persons_name</h1><br /><h1>$persons_store</h1><br /><h2>Section 1 results - </h2> <strong>Q1</strong> $answer1_1<br /> <strong>Q2</strong> $answer1_2, $answer1_3, $answer1_4, $answer1_5<br /> <strong>Q3</strong> $answer1_6<br /> <strong>Q4</strong> $answer1_7";
       
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
       
           
        
        echo "<h2>Section 2 results -</h2><strong>Q1</strong> $answer2_1<br /> <strong>Q2</strong> $answer2_2, $answer2_3, $answer2_4, $answer2_5<br /> <strong>Q3</strong> $answer2_6,<br /> <strong>Q4</strong> $answer2_7<br /> <strong>Q5</strong> $answer2_8, $answer2_9, $answer2_10,$answer2_11<br /> <strong>Q6</strong> $answer2_12, $answer2_13, $answer2_14, $answer2_15<br /> <strong>Q7</strong> $answer2_16, $answer2_17, $answer2_18, $answer2_19<br /> <strong>Q8</strong> $answer2_20 <br /> <strong>Q9</strong>  $answer2_21, $answer2_22,  $answer2_23<br /> <strong>Q10</strong>  $answer2_24<br /> <strong>Q11</strong> $answer2_25, $answer2_26, $answer2_27 <br /><strong>Q12</strong>$answer2_27a <br /> <strong>Q13</strong> $answer2_28, $answer2_29, $answer2_30, $answer2_31<br /> <strong>Q14</strong> $answer2_32<br /> <strong>Q15</strong> $answer2_33, $answer2_34, $answer2_35, $answer2_36<br />  <strong>Q16</strong>$answer2_36a, $answer2_36b, $answer2_36c <br /><strong>Q17</strong> $answer2_37";
          
          
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
          
           echo "<h2>Section 3 results -</h2><strong>Q1</strong> $answer3_1<br /><strong>Q2</strong>$answer3_2, $answer3_3,$answer3_4,$answer3_5,$answer3_6 <br /> <strong>Q3</strong> $answer3_7 <br /> <strong>Q4</strong>$answer3_8,$answer3_9,$answer3_10,$answer3_11 <br /> <strong>Q6</strong>$answer3_12,$answer3_13,$answer3_14 <br /> <strong>Q7</strong>$answer3_15 <br /> <strong>Q8</strong> $answer3_16, $answer3_17, $answer3_18, $answer3_19, $answer3_20 <br /> <strong>Q9</strong>$answer3_21,$answer3_22,$answer3_23,$answer3_24,$answer3_25 <br /> <strong>Q10</strong> $answer3_26 <br /> <strong>Q11</strong>$answer3_27,$answer3_28,$answer3_29,$answer3_30 <br /> <strong>Q12</strong> $answer3_31,$answer3_32,$answer3_33";
          
          //section 4 q1
          $answer4_1 = $_POST['radio-s4q1'];
          
          //question2
          $answer4_2 = $_POST['radio-s4q2'];
          
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
          
          echo "<h2>Section 4 results -</h2><strong>Q1</strong> $answer4_1<br /><strong>Q2</strong>$answer4_2 <br /><strong>Q3</strong> $answer4_3 <br /><strong>Q4</strong>$answer4_4, $answer4_5, $answer4_5, $answer4_6 <br /><strong>Q5</strong>$answer4_8,$answer4_9, $answer4_10 , $answer4_11 <br /><strong>Q6</strong>$answer4_11a, $answer4_11b, $answer4_11c <br /><strong>Q7</strong>$answer4_12 <br /><strong>Q8</strong>$answer4_13 <br /><strong>Q9</strong>$answer4_14 <br /><strong>Q10</strong>$answer4_15";
          
          //section 5 q1  free form
           $answer5_1 = $_POST['textareaST'];
          
          //question2 free form
           $answer5_2 = $_POST['textareaSH'];
            
            echo "<h2>Section 5 results -</h2><strong>Q1</strong> $answer5_1<br /><strong>Q2</strong>$answer5_2";
                
            $totalCorrect = 0;
            
            //section1
            if ($answer1_1 == "correct") { $totalCorrect++; }
            if ($answer1_2 == "correct") { $totalCorrect++; }
            if ($answer1_3 == "correct") { $totalCorrect++; }
            if ($answer1_5 == "correct") { $totalCorrect++; }
            if ($answer1_7 == "correct") { $totalCorrect++; }
           
           
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
             
           //section 4
           if ($answer4_1 == "correct") { $totalCorrect++; }
           if ($answer4_2 == "correct") { $totalCorrect++; }
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
           
             
            echo "<div id='results'><h1> You total was $totalCorrect</h1>  </div>";
            
        ?>
	
	</div>
	
</body>

</html>