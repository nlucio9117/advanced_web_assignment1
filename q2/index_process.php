<?php 
//php code inserted before html so that values can be captured before anything else happens

/*
Author: Natasha Lucio 
Course: CSCI 4000-01 
Program Date: 2-7-2021 
Description: Question 2 Assignment 1
*/


//creates a php variable called "$customers_age" to get input from variable " 'age' "
$customers_age = filter_input(INPUT_POST, 'age',
FILTER_VALIDATE_INT); //get data from the form


// if-else-if statement
if ($customers_age < 4){
	$cost = 3;
}
elseif ($customers_age >= 4 && $customers_age <= 16){
	$cost = 7;
}
else	{
	$cost = 9;
}

//formatting variable $cost to display dollar sign and two decimal places
$cost_f = '$'.number_format($cost, 2);

?>



<!DOCTYPE html>

<html lang="en"> <!-- specifies language used by this document -->
<head>
	<title>Natasha Lucio's Dance Ticket Price</title> <!--page title-->
	<meta charset="utf-8"> <!-- character coding -->
	<link rel="stylesheet" href="style.css"> <!-- link to external style sheet -->
	
</head>

<body>
	<main>
		<h1>Natasha Lucio&#39;s Dance Ticket Price</h1>
		<br><!--line break-->
		
		<h2>This page will decide the cost of Natasha&#39;s dance ticket based on her customer's age.</h2>
		<br><!--line break-->
		
		<!--beginning of unordered list-->
		<ul>
			<li>Under age 4 (age &#60; 4) cost is $3.00</li>
			<li>Between ages 4 and 16 (4 &#8805; age &#8804; 16) cost is $7.00</li>
			<li>Older than 16 (age &#62; 16) cost is $9.00</li>
		</ul>
		
		<h3>The customer is <?php echo $customers_age ?> and the cost of Natasha&#39;s ticket is <?php echo $cost_f; ?>
		<br><!--line break-->
		
		<br> <!--line break-->
		<a href = "index.htm" title="main page">back to first page</a> <!--link to index.htm page-->
	</main>
</body>
</html>