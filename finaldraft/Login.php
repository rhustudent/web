<?php

  require('./config.php');
  
	$conn=new mysqli("$dbhost","$dbuser","$dbpass");
	$conn->select_db("$dbname");

  $error="";
  if(isset($_POST['submit'])){
    if(empty($_POST['username'] || empty($_POST['password']))){
        $error="Username or password is invalid";
        
    }
    else{
      $username = $_POST['username'];
      $pass = $_POST['password'];

      $query =  mysqli_query($conn, "SELECT * FROM prof WHERE username='$username'");

      $rows = mysqli_num_rows($query);
	  $data = mysqli_fetch_row($query);
      if($rows == 1 && ($username == 'admin')){
        header("Location: welcomeAdmin.php");
      }
      else if($rows == 1)
      {
		if (password_verify($pass, $data[6])) {
			echo 'Password is valid!';
			header("Location: index.html");
		} else {
			echo 'Invalid password.';
			
		}
      }
      mysqli_close($conn);
    }
  }
  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
    
</head>
<body>
    
    <section>
      <div class="layer"></div>
        <div class="container">
          <div class="login-form">
            <h1>Sign In</h1>
              <form action="" method="post">
                <input type="text" name="username" 
                id="username" placeholder="username/e-mail">
                <input type="password" id="password" name="password" placeholder="password">
                <input type="submit" name="submit" value="Login">
                
              </form>
              <a href="signup.php">CREATE AN ACCOUNT<a><br><br>
              <a id="home" href="index.html">HOME<a>
            </div>
        </div>
      </section>

</body>
</html>

