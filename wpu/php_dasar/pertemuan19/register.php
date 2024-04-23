<?php 
require 'functions.php';

if (isset($_POST["register"])) {

    if( registrasi($_POST) > 0) {
        echo"<script>
                alert('User baru berhasil ditambahkan!');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
      <h1>Register</h1>
      <form action="" method="post">
        <label for="username">Username</label><br />
        <input type="text" name="username" id="username" /><br />
        <label for="password">Password</label><br />
        <input type="password" name="password" id="password" /><br />
        <label for="password2">Konfirmasi Password</label><br />
        <input type="password" name="password2" id="password2" /><br />
        <button type="submit" name="register">Register</button>
      </form>
    </div>
  </body>
</html>
