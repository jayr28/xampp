<!DOCTYPE html>
<html>
<head>
	<title>PHP activity </title>
</head>
<body> 

	<?php

		for($i=1; $i <7; $i++ ){
			for ($x=1; $x<7; $x++){
			echo "*";
			}echo "<br>";
		}

		echo"<br>";

		for($i=1; $i <7; $i++){
			for ($x=1; $x<$i; $x++ ){
				echo "*";
			}echo "<br>";
		}

		echo "<br>";

		for ($i=1; $i>0; $i--){
			for($x=1; $x <7; $x++){
				echo "*";
			} echo "<br>";
		}

		echo "<br>";

		for ($row=1; $row<11; $row++){
			for($col=1; $col < 11; $col++){
			echo ($row*$col);
			} echo "<br>";
		}

		echo "<br>";

		
		for ($num=1; $num<51; $num++){
			if($num % 10 ==0 ){
				echo "$num is GreyJedi<br>";
			} elseif ($num % 5 ==0 ){
				echo "$num is Grey<br>";
			} elseif ($num % 2 ==0){
				echo "$num is jedi<br>";
			} else {
				echo "$num is sith<br>";
			}
		}

		echo "<br>";
		//row1

		for ($col1=0; $col1<6; $col1++){
			if ($col1 %2== 0 ){
				echo "o";
			}else {
				echo "x";
			}
		}
		echo"<br>";

		for ($col2=0; $col2 < 6; $col2++){
			if ($col2 %2== 0){
				echo "x";
			}else {
				echo "o";
			}
		}
		echo"<br>";

		echo"<br>";


//final 
		for ($row = 1; $row < 6; $row++){
			for ($col=1; $col < 6; $col++){
				if($row % 2 == 0){
					if($col %2 == 0){
						echo "o";
					}else {
						echo "x";
					}	
				} else {
					if ($col %2 ==0){
						echo "x";
					} else {
						echo "o";
					}
				}	
			}
			echo "<br>";
		}	



























	?>


</body>
</html>