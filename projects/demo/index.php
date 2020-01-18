<!DOCTYPE html>
<html>
<head>
	<title>Demo Project</title>
	<link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

	<?php


include "../inc/database.php";

$db  = new database();
$airports = $db->sql("select * from aiports");
var_dump($airports);



	?>

<div class="container">

<div class="airports">

<h3> World Airports </h3>

<table class="table table-bordered">
<tr>
	<td>ID</td>
	<td>City</td>
	<td>Country</td>
	<td>Code</td>
</tr>

<tr>
	<td>ID</td>
	<td>City</td>
	<td>Country</td>
	<td>Code</td>
</tr>


</table>


</div>



<style>

	tr:first-child{
		background-color: blue;
		color:white;
	}

	table{
		background-color: white;

	}

.airports{
	width:80%;
	background-color: lightblue;
	border:1px solid black;
	margin:auto;
	padding:5px;
}

body{
}	
</style>


</body>
</html>