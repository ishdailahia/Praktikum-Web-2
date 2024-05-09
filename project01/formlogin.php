<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (trim($email) == '' || trim($password) == '') {
    echo 'input form harus di isi!!';
  } else {
    if ($email == 'admin@gmail.com' && $password == 'admin123') {
      header('location: home.php');
      exit;
    } else {
      echo 'Email yang anda masukan Salah!!';
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="loginstyle.css">
  <title>Login</title>
</head>
<body>
  <div class="wrapper">
    <div class="title">
        <h3>Login</h3>
    </div>
    <form action="" method="post">
      <div class="field">
        <input type="text" name="email" id="email" required>
        <label>Email</label>
      </div>
      <div class="field">
        <input type="password" name="password" id="password" required>
        <label>Pasword</label>
      </div>
      <div class="content">
        <div class="checkbox">
          <input type="checkbox" id="ingatkan-saya">
          <label for="ingatkan-saya">ingatkan saya</label>
        </div>
        <div class="pass-link">
          <a href="#">Lupa password?</a>
        </div>

      </div>
      <div class="field">
        <input type="submit" value="Submit">
      </div>
      <div class="signup-link">
        Belum menjadi anggota?<a href="#">Daftar Sekarang</a>
      </div>
    </form>
  </div>
</body>
</html>