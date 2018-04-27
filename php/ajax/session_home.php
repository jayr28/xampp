

<?php
	session_start();

	$username =htmlspecialchars($_POST['username']);
	$password =htmlspecialchars($_POST['password']);

	if (authenticate($username,$password)){
		echo 'User is valid';

		/*echo "<a href=\"session_page1.php\"><button>HomePage</button></a>";	*/

		$_SESSION["user"]= $username;
		header('location: session_page1.php');//moves to the page specified in location:
	} else {
		/*echo 'Incorrect login details.';*/
		$_SESSION["message"]="invalid login details";
		
		header('location:login.php');

	/*	echo "<a href=\"login.php\"><button>LogIn again</button></a>";	*/
	}


	function authenticate ($username,$password){
		if($username== 'admin' && $password == 'secret'){
			return true;
		} else {
			return false;
		}
	}



?>

	
