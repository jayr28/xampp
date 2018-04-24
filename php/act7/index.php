<!DOCTYPE html>
<html>
<head>
	<title>gift of christmas</title>

</head>
<body>

	<?php

	$gifts=["partridge in a pear tree","2 turtle doves","3 french hens","4 calling birds","5 golden rings","6 geese a laying","7 swans a swimming",'8 maids in milking',"9 ladies dancing","10 lords a leaping", "11 pipers piping","12 drummers drumming"];
/*	$days=["1st","2nd","3rd","4th","5th","6th","7th",
		"8th","9th","10th","11th","12th"]
*/
	/*for($days=0;$days <13; $days++){
		echo "on the " . ($days+1) ."th day of christmas my ture love sent to me<br>";

		for ($items=1; $items<$days; $items++){
		 echo $gifts[$items]. "<br>";
		} echo "<br>";
	}*/

		for($days=0;$days <12; $days++){
			switch ($days){
				case 0:
					echo "on the".($days+1). "st day of christmas<br>";
					break;

				case 1:
					echo "on the".($days+1). "nd day of christmas<br>";
					break;

				case 2:
					echo "on the".($days+1). "rd day of christmas<br>";
					break;

				default:
					echo "on the".($days+1). "th day of christmas<br>";
		}
		/*echo "on the " . ($days+1) ."th day of christmas my true love sent to me<br>";*/

		for ($items=$days; $items>=0; $items--){
			if ( $days > 0 && $items == 0){
				echo "and " . $gifts[$items] . "<br>";
			}else {
				echo $gifts[$items]. "<br>";
			}
		 
		} echo "<br>";
	}


	











































	?>
</body>
</html>