<?php 
// cek apkah tombol submit sudah ditekan atau belum 
if (isset($_POST["submit"])) {

// cek username & password
if($_POST["username"] == "admin" && $_POST["password"] == "123") {
    // jika benar,redirect ke halaman admin
    header("Location: admin.php");
    exit;
}
else {
    // jika salah, tampilkan pesan kesalahan
    $error = true;
}

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)) : ?>
    <p>username / password salah!</p>
    <?php endif; ?>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>