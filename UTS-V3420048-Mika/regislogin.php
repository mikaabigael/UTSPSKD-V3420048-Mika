<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Registrasi - Login</title>

  <head>
    <meta charset="UTF-8">
    <title>Registrasi - Login</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  </head>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <section class="forms-section">
    <h1 class="section-title">LOGIN - REGISTRASI</h1>
    <div class="forms">
      <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
          Login
          <span class="underline"></span>
        </button>
        <form class="form form-login" method="post">
          <fieldset>
            <legend>Please, enter your email and password for login.</legend>
            <div class="input-block">
              <label for="username">Username</label>
              <input name="username" type="text" required>
            </div>
            <div class="input-block">
              <label for="password">Password</label>
              <input name="password" type="password" required>
            </div>
          </fieldset>
          <button type="submit" class="btn-login" name="login">Login</button>
        </form>
      </div>
      <?php
        session_start();
        require_once "config.php";
        ?>
        <?php if (isset($_POST['login'])) {
          $username = $_POST['username'];
          $password = md5($_POST['password']);

          $sql = $conn->query("SELECT * FROM loginsiswa WHERE username='$username' AND password='$password'");
          $cek = mysqli_num_rows($sql);

          if ($cek > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            echo "<script>alert('berhasil login');document.location='dashboard.php';</script>";
          } else {
            echo "<script>alert('gagal login');document.location='regislogin.php';</script>";
          }
        }
        ?>

      <?php include "config.php"; ?>
      <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
          Sign Up
          <span class="underline"></span>
        </button>
        <form class="form form-signup" method="post">
          <fieldset>
            <legend>Please, enter your email, password and password confirmation for sign up.</legend>
            <div class="input-block">
              <label for="username">Username</label>
              <input name="username" type="text" required>
            </div>
            <div class="input-block">
              <label for="password">Password</label>
              <input name="password" type="password" required>
            </div>
          </fieldset>
          <button type="submit" class="btn-signup" name="daftar">Continue</button>
        </form>
      </div>
    </div>
    
    <?php if (isset($_POST['daftar'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);
     
      $conn->query("INSERT INTO loginsiswa VALUES('', '$username', '$password')
                        ");
      echo "<script>alert('daftar berhasil');document.location='regislogin.php';</script>";
    }
    ?>

  </section>
  <!-- partial -->
  <script src="./script.js"></script>

</body>

</html>