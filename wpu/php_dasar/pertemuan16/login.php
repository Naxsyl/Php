<?php 
session_start();

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}


require 'functions.php';

if (isset($_POST["login"])) {


    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    // cek username
    if (mysqli_num_rows($result) === 1) {
    // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]) ) {

          // set session
          $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    }
    $error = true;

}   
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
      <h1>Login</h1>
        <?php if(isset($error)): ?>
            <p style="color:red; font-style:italic; ">username/password salah!</p>
        <?php endif; ?>
        
      <form action="" method="post">
        <label for="username">Username</label><br />
        <input type="text" name="username" id="username" /><br />
        <label for="password">Password</label><br />
        <input type="password" name="password" id="password" /><br />
        <button type="submit" name="login">Login</button>
      </form>
    </div>
  </body>
</html>
