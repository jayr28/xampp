<?php 
	$todos = file_get_contents('todos.json');
//reads the content of the file indicated
	$todos = json_decode($todos, true);
//converts the file contents to PHP associative array

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Todo List</h1>
	<input type="text" placeholder="Add New To-do">
	<ul>
		<?php 
		var_dump($todos);//displays the contents of an array
		foreach ($todos as $index => $todo){
			echo "<li id='" . $index . "'>" . $todo['task'] . "</li>";
			//0:{task:task1, done:true} index:todo
		}



		 ?>

	</ul>

	<script
 		 src="http://code.jquery.com/jquery-3.3.1.min.js"
  		 integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  		 crossorigin="anonymous">
  	</script>
  	<script type="text/javascript" src="todos.js"></script>

</body>
</html>