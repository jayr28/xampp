<html>
<head>

	<meta charset="utf-8">
	<title>Here is my content</title>
</head>
<body>



	<?php
		include_once "heading.php";
		
	?>

	<h2>content</h2>
	<?php 

		include_once "footer.php";
		sample();

	echo "<br>";

	if (function_exists("array_combine"))
	{
		echo "function exist";
	}
	else
	{
		echo "function does not exist - better write your own";
	}

	phpinfo()
	?>

	

</body>
</html>