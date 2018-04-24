<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	 <meta content="viewport", width="device-width, initital-scale=0">
	 <meta http-equiv="X-UA-compatible" content="IE-edge">
	 
	<title>YEllow by coldplay</title>
</head>
<body>
	<?php  
		$lyrics = array('stars','shine','yellow');

		echo "look at the $lyrics[0], look how they $lyrics[1] for you, and everything you do. <br> yeah they were all $lyrics[2]<br>"; 
	?>

		<?php
			/*foreach ($lyrics as $word) {
				echo "<li> $word </li>";
			
			}

			$tudents = array("jovit","sian","chris","mart");
			foreach($students as $pangalan)
			}
*/	
		$team = array ("Kynt","Sian","Chris","Mart", "garrvin","huge");
		$colors = array("green", "blue", "red");
		$fruits = array("apple", "mango", "orange");
		$numbers = array(1,2,3,4,5,6,7,8,9);
		for ($count =0; $count <3; $count++){
			echo "<tr>";
			echo <td>"Team Name: $colors[$count] $fruits[$count]<br>"</td><td></td>;
			echo "Team members:". $team[$count*2]."". $team[$count*2+1]."<br>";
			echo $numbers[$count]."". $numbers[$count+3]."". $numbers[$count+6]."<br>";

		foreach ($count=0 $count => $value) {
			# code...
		}

		}
		?>	







</body>
</html>