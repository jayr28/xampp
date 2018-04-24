<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

/*	$a = 1; $b = 0;
	echo ($a AND $b) . "<br>";
	echo ($a OR $b) . "<br>";
	echo ($a XOR $b) . "<br>";
	echo !a . "<br>";*/


	$page = "Home";

	if ($page == "Home")
		echo "You selected Home";
	elseif ($page == "About") 
		echo "You selected About";
	elseif ($page == "News") 
		echo "You selected News";
	elseif ( $page == "Login")
		echo "You selected Login"; 


	$page ="Home";
	switch ($page){
		case "Home":
		echo "You selected Home";
		break;
		case "About":
		echo "You selected News";
		break;
		case "Login":
		echo "You selected Login";
		break;
		case "Links":
		echo "You selected Links";
		break;
	}

	$count = 1;
	while ($count <= 12)
	{
		echo "$count times 12 is ". $count * 12 . "<br>";
		$count++;
	}

	$count = 15;
	do 
	{
		echo "$count times 12 is ". $count * 12 . "<br>";
		$count++;
	} while ($count <= 12);

	for ($count = 1; $count <= 12; ++$count){
		echo "$count times 12 is ". $count * 12 . "<br>";
	}

	$a = 1;
	$b = ++$a;
	echo $a;
	echo $b;

	$c = 1;
	$d = $c++;
	echo $c;
	echo $d;


	?>

</body>
</html>