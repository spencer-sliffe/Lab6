<!DOCTYPE html>
<html>
   <head>
      <meta charset=UTF-8" />
      <title>PHP Quiz</title>
      <link rel="stylesheet" type="text/css" href="quiz.css" />
   </head>
   <body>
      <div id="page-wrap">
         <h1>Results</h1>
         <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect = $totalCorrect + 20; }
            if ($answer2 == "D") { $totalCorrect = $totalCorrect + 20; }
            if ($answer3 == "C") { $totalCorrect = $totalCorrect + 20; }
            if ($answer4 == "D") { $totalCorrect = $totalCorrect + 20; }
            if ($answer5 == "C") { $totalCorrect = $totalCorrect + 20; }
            
            echo "<div id='results'>Grade: $totalCorrect%</div>";
            echo "
            <div id='question-1'>
            Question 1: How many numbers are in Pi?</br>
            Your Answer: $answer1</br>
            Correct Answer: Infinite</br>
            </div>
            <div id='question-2'>
            </br>Question 2: What is the capital of Kansas?</br>
            Your Answer: $answer2</br>
            Correct Answer: Topeka</br>
            </div>
            <div id='question-3'>
            </br>Question 3: How do you spell 11?</br>
            Your Answer: $answer3</br>
            Correct Answer: eleven</br>	
            </div>
            <div id='question-4'>
            </br>Question 4: What port is SSH?</br>
            Your Answer: $answer4</br>
            Correct Answer: 2222</br>
            </div>
            <div id='question-5'>
            </br>Question 5: What is the Jayhawks record in football?</br>
            Your Answer: $answer5</br>
            Correct Answer: 6-3</br>
            </div>
            "            
            ?>
      </div>
   </body>
</html>