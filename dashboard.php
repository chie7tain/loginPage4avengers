<?php
include_once('connect.php');

//checking login
session_start();
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	<title>Home</title>
</head>
<body>
	<header>
	<div>
		<h2 class="logo"><a href="index.html"></a>Avengers</h2>
	</div>
	<div>
	<h1 class='goodlooks'>Welcome to your dashboard</h1>
	<p>what a wonderfull day to be an avenger</p>
	</div>
	
	</header>


</body>
</html>