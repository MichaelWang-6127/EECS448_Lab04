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
	$c = "Correct answer: Ottowa";
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

	if($answer1 = "Madrid")
	{
		$score = $score + 1;
	}
	
	if($answer2 = "Ottowa")
	{
		$score = $score + 1;
	}
	
	if($answer3 = "Beijing")
	{
		$score = $score + 1;
	}
	
	if($answer4 = "Canberra")
	{
		$score = $score + 1;
	}
	
	if($answer5 = "London")
	{
		$score = $score + 1;
	}
	$d = "You got ".$score." questions right!";
	echo "<br>".$d."</br>";
	$score = $score * 20;
	$e = "You got a ".$score."%";
	echo "<br>".$e."</br>";

	
?>