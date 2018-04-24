<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php echo "Hello World!";

/*
	$username = "john";*/
	/*$email_from ="Pedro Peterson";
	$email_subject = "Hey,$username! You have a new message!";
	$email_body = "You have received a new message from your website contact form .\n\n" . "The message came from $email_from";
*/
	/*echo "$email_subject";
	echo "$email_body";
*/
	$username = "Jane Smith";
	echo $username;
	echo "<br>";
	$current_user = $username; 
	echo $current_user;

	echo 'Buzz Lightyear once said:"You\'re a toy"';
	echo 'This will not expand: \n a newline';
	echo 'Variable do not $expand either';
	
	$team = array('Kato', 'Shem','Angeli', 'Ali','Carmela' );
	$colors = array('red', 'green','orange' );
	$fruits = array('mango','apple','orange');

	echo $team[2]."<br>";
	echo $colors[0]."<br>";
	echo $fruits[1]."<br>";
	echo $fruits[2]."<br>";

	define("ROOT_LOCATION", "/usr/local/www");


	$directory = ROOT_LOCATION;

	?>	

	<h1>
		<?php
			echo "Hello World!";
		?>
	</h1>		



</head>
<body>

</body>
</html>