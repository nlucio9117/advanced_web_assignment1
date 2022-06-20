<?php 
//php code inserted before html so that values can be captured before anything else happens

/*
Author: Natasha Lucio 
Course: CSCI 4000-01 
Program Date: 2-7-2021 
Description: Question 1 Assignment 1
*/


//get data from the form

//creates a php variable called "$movie" to get input from variable " 'movie' "
$movie_name = filter_input(INPUT_POST, 'movie'); 

//creates a php variable called "$director" to get input from variable " 'director' "
$directed_by = filter_input(INPUT_POST, 'director');  

//creates a php variable called "$release_date" to get input from variable " 'release_date' "
$release_date = filter_input(INPUT_POST, 'release_date'); 

//creates a php variable called "$budget" to get input from variable " 'budget' "
$budget = filter_input(INPUT_POST, 'budget',
FILTER_VALIDATE_FLOAT); 

//creates a php variable called "$box_office" to get input from variable " 'box_office' "
$box_office = filter_input(INPUT_POST, 'box_office',
FILTER_VALIDATE_FLOAT); 

//create variable "$profit" to calculate profit amount from difference of box office and budget amount
$profit = $box_office - ($budget);


?>




<!DOCTYPE html>

<html lang="en"> <!-- specifies language used by this document -->
<head>
	<title>Natasha Lucio's Movie Page</title> <!--page title-->
	<meta charset="utf-8"> <!-- character coding -->
	<link rel="stylesheet" href="style.css"> <!-- link to external style sheet -->
	
</head>

<body>
	<main>
		<h1>Natasha Lucio&#39;s Favorite Movie</h1>
		<br><!--line break-->
		
		<h3>This page displays the information of Natasha Lucio&#39;s favorite movie.</h3>
		
		<!--beginning of unordered list-->
		<ul>
			<li>Movie name: <?php echo $movie_name; ?></li>
			
			<li>Directed by: <?php echo $directed_by; ?></li>
			
			<li>Release Date: <?php echo $release_date; ?></li>
			
			<li>Budget (US$, million): <?php echo $budget; ?></li>
			
			<li>Box Office (US$, million): <?php echo $box_office; ?></li>
			
			<li>Profit (US$, million): <?php echo $profit; ?></li>
			
		</ul>
		
		<br> <!--line break-->
		<a href = "index.htm" title="main page">back to first page</a> <!--link to index.htm page-->
	</main>
</body>
</html>