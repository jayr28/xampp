<?
  session_start()
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <p>Please Login</p>
 <?php 
  if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
    //isset ->exist and not empty
    echo $_SESSION['message'];
    session_unset();
    session_destroy();
  }

 ?>


   <form action="session_home.php" method="POST">
     Username:<br>
     <input type="text" name="Username"><br>
     Password:<br>
     <input type="Password" name="Password"><br><br>
     <button type="submit">submit</button>


   </form>
   <script
      src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>


</body>
</html>