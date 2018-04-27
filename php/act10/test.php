

<form action="post_example.php" method="POST">
	Input1:<br>
		<input type="text" name="input1"><br>
	Name:<br>
	 <input type="text" name="name"><br><br>
	 <input type="submit" value="submit">	

<?php

	if(isset($_GET['input1'])){
	  echo "Input: ". htmlspecialchars($_GET['input1']) . "
		<br>";
	}
	if(isset($_GET['input1'])){
	  echo "Name: ". htmlspecialchars($_GET['name']);
	} 
?>
	

	
</form>