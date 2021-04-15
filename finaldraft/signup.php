<?php
  require('./config.php');
  
	$conn=new mysqli("$dbhost","$dbuser","$dbpass");
	$conn->select_db("$dbname");
  
  $error="";
  if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) ){
        $error="field can't be empty";   
    }
    else{
      $username = $_POST['username'];
      $pass = $_POST['password'];
	  $options = [
		'cost' => 12,
		];
	  $hash = password_hash($pass, PASSWORD_BCRYPT, $options);
	  $email = $_POST['email'];

      $query =  mysqli_query($conn, "INSERT INTO `prof` (`id`, `username`, `password`, `email`) VALUES (NULL, '$username', '$hash', '$email');");

      $rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM prof WHERE username='$username'"));
      if($rows == 1){
        header("Location: Login.php");
      }
      else{
        $error = "Registration Unsuccessful";
        echo "".$error;
      }
      
      
      mysqli_close($conn);
    }
  }
  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css"/>
    
</head>
<body>

    <section>
  <div class="layer"></div>
  <div class="container">
    <div class="login-form">
      <h1>SIGN UP</h1>
      <form action="" method="post">
        <input type="text" name="username" id="username" placeholder="username">
		<input type="text" name="email" id="email" placeholder="e-mail">
        <input type="password" name="password" id="password" placeholder="password">
        <input type="submit" name="submit" value="SIGN UP">
      </form>
      <a href="Login.php">BACK<a>
    </div>
  </div>
</section>

</body>
</html>

