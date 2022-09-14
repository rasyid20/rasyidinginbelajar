<!DOCTYPE html>

<html>

<head>

<title>Hasil Login</title>

<link rel="stylesheet" href="style.css" type="text/css">

</head> <body>

<?php

$nama -$_POST["username"]; Semail- $_POST["email"];

?>

<form action-"tampil.php" method="POST">
  <h2>Selamat Anda berhasil login </h2> <div class="imgcontainer">

<img src="icon.png" alt="Avatar" class="avatar">

</div>

<div class="container">

<label><b>Username: <?php echo $nama; ?></b></ label><br><br>

<label><b>Password: <?php echo $email; ?></b></label>

</div>

<div class="container" style="background-color:#flflfl">

</div>

</form>

</body>

</html>
