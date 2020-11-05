<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Paint Estimate</h1>
<?php

	include('inc-rectangle-object.php');
	
    $length = $_POST['length'];
    $width = $_POST['width'];
    $height = $_POST['height'];
	
    $longWall = new Rectangle();
    $shortWall = new Rectangle();
  
    $longWall->setX($height);
    $longwall->setY($length);
    $shortWall->setX($height);
    $shortwall->setY($width);
    
    $totalArea = (2 * $longWall->getArea() ) + (2 * $shortWall->getArea() );
	
	print("The total area is $totalArea square feet.");
?>
</body>
</html>