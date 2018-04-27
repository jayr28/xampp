<!DOCTYPE html>
<html>
<head>
	<title>function</title>
</head>
<body>


<?php

	function printTable($rows,$cols){
		echo "<table border=1>";

		for ($i=0; $i<$rows; $i++){
			echo "<tr>";
			for ($j=0; $j<$cols; $j++){
				echo "<td> Content </td>";
			}	
	}	echo "</tr>";

	echo "</table>";
	}
	printTable(1,1); echo "<br>";
	printTable(2,3); echo "<br>";
	printTable(3,5); echo "<br>";

	echo "<br>";
	echo "<br>";

	function add ($a,$b){
		$sum = $a + $b;
		return $sum;
	}

	$number1 =20;
	$number2 =12;
	$total = add ($number1,$number2);

	echo "total is " . $total;

	echo "<br>";

	function subtract ($a,$b){
		$difference = $a - $b;
		return $difference;
	}

	$number1 =20;
	$number2 =12;
	$total = subtract ($number1,$number2);	

	echo "total is " . $total;	

	echo "<br>";

	

	function multiply ($a,$b){
		$quotient = $a * $b;
		return $quotient;
	}		

	$number1=20;
	$number2=12;
	$total = multiply ($number1,$number2);

	echo "total is " . $total;

	echo "<br>"; 


	function divide ($a,$b){
		$dividend = $a / $b;
		return $dividend;
	}		

	$number1=20;
	$number2=12;
	$total = divide ($number1,$number2);

	echo "total is " . $total;


	echo "<br>"; 


	function modulo ($a,$b){
		$remainder = $a % $b;
		return $remainder;
	}		

	$number1=20;
	$number2=12;
	$total = modulo ($number1,$number2);

	echo "total is " . $total;
	

	echo "<br>";

	function longdate($timestamp)
	{
		return date("D, jS  M y", $timestamp); // firts is time 
	}

	echo longdate(time());

	echo "<br>";

	echo time();

	echo "<br>";

	$lowered = strtolower ("aNy # Letters and Punctuation you WANT");

	echo $lowered;

	echo "<br>";

	$uppered = strtoupper ("aNy # Letters and Punctuation you WANT");

	echo $uppered;

	echo "<br>";

	$ucfixed = ucfirst ("any # of letters and punctuation you want");

	echo $ucfixed; 

	echo "<br>";
/*
	function fix_names($n1, $n2, $n3)
	{
		$n1 = ucfirst(strtolower($n1));
		$n2 = ucfirst(strtolower($n2));
		$n3 = ucfirst(strtolower($n3));
		return $n1 . " " . $n2 . " " . $n3;
	}

	echo fix_names("WILLIAM",  "henry", "gatES");

	echo "<br>";
*/
/*
	$rainbow=["red","orange","yellow","green","blue","indigo","violet"];
	$day="MonDay";

	$day = strtolower($day);


		switch (strtolower($day)){
			case "monday":
				echo "wear " . $rainbow[0];
				break;

			case "tuesday":
				echo "wear " . $rainbow[1];
				break;

			case "wednesday":
				echo "wear " . $rainbow[2];
				break;

			case "thursday":
				echo "wear " . $rainbow[3];
				break;

			case "thursday":
				echo "wear " . $rainbow[3];
				break;
			
			default:
/*				echo ""
				break;
			}*/

	echo "<br>";

	$a1 = "WILLIAM"; $a2 = "henry"; $a3 = "gatES";

	echo $a1 . " " . $a2 . " " . $a3 . "<br>";
	fix_names();

	echo $a1 . " " . $a2 . " " . $a3;

	function fix_Names()
	{
		global $a1; $a1 = ucfirst(strtolower($a1));
		global $a2; $a2 = ucfirst(strtolower($a2));
		global $a3; $a3 = ucfirst(strtolower($a3));
	}

	echo "<br>";


	function times ($a,$b){
		$Area = $a * $b;
		return $Area;
	}

	function getPeri ($a,$b){
		$getPeri = 2 * ( $a+$b)
		return 
	}		

	$width=20;
	$length=15;
	$total = times ($width,$length);

	echo "total area of a rectangle is " . $total;

	echo "<br>"; 

	//including files and extended files




	

	


















	

	


?>	

</body>
</html>