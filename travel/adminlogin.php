<?php
session_start();
$erorrcode =  "";
$errormeg = "This field can not be empty";
$connection = mysqli_connect('localhost', 'root', '', 'book_db');
$password = "";
$invalid = 'invalid username or password';
if (isset($_POST['login_button'])) {
  if (isset($_POST['username'])) {
    $username = $_POST['username'];
  }
  if (isset($_POST['password'])) {
    $password = $_POST['password'];
  }
  if (empty($username)) $erorrcode = 1;
  else if (empty($password)) $erorrcode = 2;
  else {

    $qurey = "SELECT * FROM administrator WHERE Username='$username' and Password='$password'";
    $result = mysqli_query($connection, $qurey);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row['Username'] == "$username") {
        $_SESSION['AdminLogin'] = $username;
        $_SESSION['staus'] = 'Login';
        header('location:adminViewReg.php');
      } else {
        echo "Incorrect Password";
      }
    } else {
      $erorrcode = 3;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdminLogin</title>

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
  body {
    background-image: linear-gradient(90deg, lightgrey, grey);
    font-family: "Roboto", sans-serif;
  }
</style>

<body>
  <div class="login-page">
    <div class="form">
      <h1>ADMIN LOGIN</h1>
      <form method="POST" action="">
        <span style="color:red"> <?php if ($erorrcode == 1) echo $errormeg;
                                  else if ($erorrcode == 3) echo $invalid; ?></span>
        <input name="username" type="text" placeholder="Email" />
        <br>
        <span style="color:red"> <?php if ($erorrcode == 2) echo $errormeg; ?></span>
        <input name="password" type="password" placeholder="Password" />
        <button type="submit" style="color:white;" name="login_button">Login</button>
      </form>
    </div>
  </div>
</body>

</html>