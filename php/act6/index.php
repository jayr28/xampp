<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$rainbow= ["red","orange","yellow","green","blue","indigo","violet"];
		sort($rainbow);
		foreach ($rainbow as $color){
			echo $color."<br>";
		}

		echo "<br>";

		rsort($rainbow);
		foreach ($rainbow as $color){
			echo $color . "<br>";
		}

	/*	for ($x=0; $x < $arrlenght; $x+=2){
			echo $colors[$x];
		}*/
		echo "<br>";

		$ages = ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];
			 foreach ($ages as $patientName => $age){
			 	echo "Name=$patientName, value=$age";
			 }

		echo "<br>";

		$myTeam= ["Center"=>"Rodman","powerForward"=>"Pippen","smallForward"=>"Kukoc","ShootingGuard"=>"Jordan","pointGuard"=>"Harper"];
			foreach ($myTeam as $position => $myTeam){
				echo " name = $myTeam postion = $position,";
			}

		echo "<br>";

		$team_ironman= ["Tony","War Machine","Vision","Spiderman"];
		$team_cap =["Cap America","Bucky","Hawkeye","Falcon"];
		$civil_war = [$team_ironman, $team_cap];



		$student1=['name'=>'Kynt','age'=>21, 'occupation'=>'RTP']; 
		$student2=['name'=>'Sian','age'=>18, 'occupation'=>['student','laber']];

		$b8dc=[$student1,$student2];
		echo $b8dc[1]['name']. " ay " .$b8dc[1]['occupation'][0];

		?> 
</body>
</html>