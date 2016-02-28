<!DOCTYPE html>

<?php


	$answer1 = $_GET['answer1'];
	$answer2 = $_GET['answer2'];
	$answer3 = $_GET['answer3'];
	$answer4 = $_GET['answer4'];
	$answer5 = $_GET['answer5'];
	$a;
	$b;
	$c;
	$d;
	$e;
	$score = 0;
	
	$a = "Question 1: What is the capital of Spain?";
	echo "<br>" .$a. "</br>".PHP_EOL;
	$b = "You answered: " . $answer1;
	echo "<br>" .$b. "</br>".PHP_EOL;
	$c = "Correct answer: Madrid";
	echo "<br>" .$c. "</br>".PHP_EOL;
	
	$a = "Question 2: What is the capital of Canada?";
	echo "<br>" .$a. "</br>".PHP_EOL;
	$b = "You answered: " . $answer2;
	echo "<br>" .$b. "</br>".PHP_EOL;
	$c = "Correct answer: Ottawa";
	echo "<br>" .$c. "</br>".PHP_EOL;

	$a = "Question 3: What is the capital of China?";
	echo "<br>" .$a. "</br>".PHP_EOL;
	$b = "You answered: " . $answer3;
	echo "<br>" .$b. "</br>".PHP_EOL;
	$c = "Correct answer: Beijing";
	echo "<br>" .$c. "</br>".PHP_EOL;

	$a = "Question 4: What is the capital of Australia?";
	echo "<br>" .$a. "</br>".PHP_EOL;
	$b = "You answered: " . $answer4;
	echo "<br>" .$b. "</br>".PHP_EOL;
	$c = "Correct answer: Canberra";
	echo "<br>" .$c. "</br>".PHP_EOL;

	$a = "Question 5: What is the capital of England?";
	echo "<br>" .$a. "</br>".PHP_EOL;
	$b = "You answered: " . $answer5;
	echo "<br>" .$b. "</br>".PHP_EOL;
	$c = "Correct answer: London";
	echo "<br>" .$c. "</br>".PHP_EOL;

	$a = "Madrid";
	$b = "Ottawa";
	$c = "Beijing";
	$d = "Canberra";
	$e = "London";

	if(strcmp($answer1, $a) === 0)
	{
		$score = $score + 1;
	}
	
	if(strcmp($answer2, $b) === 0)
	{
		$score = $score + 1;
	}
	
	if(strcmp($answer3, $c) === 0)
	{
		$score = $score + 1;
	}
	
	if(strcmp($answer4, $d) === 0)
	{
		$score = $score + 1;
	}
	
	if(strcmp($answer5, $e) === 0)
	{
		$score = $score + 1;
	}

	$d = "You got ".$score." questions right!";
	echo "<br>".$d."</br>";
	$score = $score * 20;
	$e = "You got a ".$score."%";
	echo "<br>".$e."</br>";

	
?>