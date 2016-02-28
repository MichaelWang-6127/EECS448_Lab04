<!DOCTYPE html>
<link href= "style.css"
            rel= "stylesheet"
            type= "text/css"/>
<?php

	$shipping = $_GET['ship'];
	$quantity1 = $_GET['q1'];
	$quantity2 = $_GET['q2'];
	$quantity3 = $_GET['q3'];
	$username = $_GET['username'];
	$password = $_GET['password'];

	$amount;
	$title;
	$subtotal;

	echo "Thanks for ordering ".$username."<br>".PHP_EOL;
	echo "Password: ".$password."<br>".PHP_EOL;

	echo "<table style='width:100%; border:5px solid black'>";
		echo "<tr>".PHP_EOL; 
		    echo "<th>".PHP_EOL;
		    $title = "Quantity";
		    echo "<th>".$title."</th>".PHP_EOL;
		    $title = "Cost per item";
		    echo "<th>".$title."</th>".PHP_EOL;
		    $title = "subtotal";
		    echo "<th>".$title."</th>".PHP_EOL;
	  	echo "</tr>".PHP_EOL;

	  	echo "<tr>".PHP_EOL; 
	  		$title = "small box";
		    echo "<th>".$title."</th>".PHP_EOL;
		    echo "<td>".$quantity1."</td>".PHP_EOL;
		    $title = "$2.00";
		    echo "<td>".$title."</td>".PHP_EOL;
		    $subtotal = 2*$quantity1;
		    echo "<td>$".$subtotal.".00"."</td>".PHP_EOL;
	  	echo "</tr>".PHP_EOL;

	  	echo "<tr>".PHP_EOL; 
	  		$title = "medium box";
		    echo "<th>".$title."</th>".PHP_EOL;
		    echo "<td>".$quantity2."</td>".PHP_EOL;
		    $title = "$4.00";
		    echo "<td>".$title."</td>".PHP_EOL;
		    $subtotal = 4*$quantity2;
		    echo "<td>"."$".$subtotal.".00"."</td>".PHP_EOL;
	  	echo "</tr>".PHP_EOL;

		echo "<tr>".PHP_EOL; 
			$title = "big box";
		    echo "<th>" .$title. "</th>".PHP_EOL;
		    echo "<td>".$quantity3."</td>".PHP_EOL;
		    $title = "$8.00";
		    echo "<td>".$title."</td>".PHP_EOL;
		    $subtotal = 8*$quantity3;
		    echo "<td>"."$".$subtotal.".00"."</td>".PHP_EOL;
	  	echo "</tr>".PHP_EOL;
	  		
	  	echo "<tr>".PHP_EOL;
	  		echo "<th>" ."Shipping". "</th>".PHP_EOL;
	  		if($shipping == "5.00")
	  		{
	  			$title = "standard";
	  			$amount = 5;
	  			$subtotal = "$5.00";
	  		} 
	  		else if($shipping == "10.00") 
	  		{
	  			$title = "express";
	  			$amount = 10;
	  			$subtotal = "$10.00";
	  		} 
	  		else if($shipping == "15.00")
	  		{
	  			$title = "overnight";
	  			$amount = 15;
	  			$subtotal = "$15.00";
	  		}
	  		echo "<td colspan='2'>" .$title."</td>".PHP_EOL;
	  		echo "<td>" .$subtotal. "</td>".PHP_EOL;
	  	echo "</tr>".PHP_EOL;

	  	echo "<tr>".PHP_EOL;
	  		$title = "Total Cost";
	  		echo "<th colspan='3'>" .$title."</th>".PHP_EOL;
	  		$amount = ($amount + $quantity1 * 2 + $quantity2 * 4 + $quantity3 * 8);
	  		echo "<th>$".$amount.".00</th>".PHP_EOL;
	  	echo "</tr>".PHP_EOL;
	  	echo "</table>";


?>