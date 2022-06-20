<?php 
//php code inserted before html so that values can be captured before anything else happens

/*
Author: Natasha Lucio 
Course: CSCI 4000-01 
Program Date: 2-7-2021 
Description: Question 3 Assignment 1
*/


//creates a php variable called "$power_level" to get input from variable " 'power_level' "
$power_level = filter_input(INPUT_POST, 'power_level',
FILTER_VALIDATE_INT); //get data from the form



// if-else-if statement
if ($power_level < 0){
	$message = 'Po eats too many noodles.';
}
else if ($power_level >= 0 && $power_level <= 200){
	$message = 'Po reaches the training hall.';
}
else if ($power_level >= 201 && $power_level <= 400) {
	$message = 'Po reaches the student barracks.';
}
else if ($power_level >= 401 && $power_level <= 600) {
	$message = 'Po reaches the Peach Tree of Heavenly Wisdom.';
}
else if ($power_level >= 601 && $power_level <= 800) {
	$message = 'Po climbs the Wu Da Mountains.';
}
else if ($power_level >= 801 && $power_level <= 1000) {
	$message = 'Po trains at the Pool of Sacred Tears.';
}
else {
	$message = 'Po defeats Tai Lung!';
}

?>




<!DOCTYPE html>

<html lang="en"> <!-- specifies language used by this document -->
<head>
	<title>Natasha Lucio's Kung Fu Panda Po Power Level</title> <!--page title-->
	<meta charset="utf-8"> <!-- character coding -->
	<link rel="stylesheet" href="style.css"> <!-- link to external style sheet -->
	
</head>

<body>
	<main>
		<h1>Natasha Lucio&#39;s Kung Fu Panda</h1>
		<h1>Po Power Level</h1>
		<br>
		
		<h2>This page will prompt Natasha Lucio for Kung Fu Panda Po&#39;s power level (in numbers).
		The program will convert the given input into Po's power metric.</h2>
		<br>
		
			<p>less than 0: Po eats too many noodles</p>
			
			<p>0 to 200: Po reaches the training hall</p>
			
			<p>201 to 400: Po reaches the student barracks</p>
			
			<p>401 to 600: Po reaches the Peach Tree of Heavenly Wisdom</p>
			
			<p>601 to 800: Po climbs the Wu Da Mountains</p>
			
			<p>801 to 1000: Po trains at the Pool of Sacred Tears</p>
			
			<p>Greater than 1000: Po defeats Tai Lung</p>
			<br>
			
			<h3>Po&#39;s power level is <?php echo $power_level ?>.</h3>
			<br> <!--line break-->
			<span style="color:black; font-size:20px; font-weight:bold"><?php echo $message; ?></span>
			<br><!--line break-->
		
		<br> <!--line break-->
		<a href = "index.htm" title="main page">back to first page</a> <!--link to index.htm page-->
	</main>
</body>
</html>