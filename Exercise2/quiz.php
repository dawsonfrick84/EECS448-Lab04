<?php
//access the global array called $_POST to get the values from the text fields
$q1= $_POST["1"];
$q2 = $_POST["2"];
$q3 = $_POST["3"];
$q4 = $_POST["4"];
$q5 = $_POST["5"];
$score = 0;

echo "<html>
<head>
  <title>Quiz Results</title>
</head>
<style>
body{
  font-family: 'Arial';
}
</style>
<h1>Quiz Results:</h1>
";


echo "Question 1: What is the third letter of the greek alphabet?<br>
You answered: <b>" . $q1 . "</b><br>
Correct answer: <b>Gamma</b><br><br><br>";

echo "Question 2: What was the original name of the Denver Nuggets in the ABA?<br>
You answered: <b>" . $q2 . "</b><br>
Correct answer: <b>Denver Rockets</b><br><br><br>";

echo "Question 3: What year did the band Rush release '2112'?<br>
You answered: <b>" . $q3 . "</b><br>
Correct answer: <b>1976</b><br><br><br>";

echo "Question 4: What year was the University of Kansas Established?<br>
You answered: <b>" . $q4 . "</b><br>
Correct answer: <b>1865</b><br><br><br>";

echo "Question 5: Who plays the character of Jerry on the hit TV show 'Seinfeld'?<br>
You answered: <b>" . $q5 . "</b><br>
Correct answer: <b>Jerry Seinfeld</b><br><br><br>";


if($q1=="Gamma"){$score=$score+1;}
if($q2=="Denver Rockets"){$score=$score+1;}
if($q3=="1976"){$score=$score+1;}
if($q4=="1865"){$score=$score+1;}
if($q5=="Jerry Seinfeld"){$score=$score+1;}
$percent=($score/5)*100;
echo "You answered " . $score . " questions correctly<br>
Your score: " . $percent . "%";


?>
