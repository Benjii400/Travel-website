<?php
session_start();
if ($_SESSION['staus'] != 'Login') {
    header('location:Adminlogin.php');
}
$erorrcode = "";
$errormeg = "This filed can not be Empty!";
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (!$connection) die(mysqli_connect_error() . "Connected failed");

if (isset($_POST['login_button'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $request = " insert into administrator(Name,Username,Password)
                    values('$name','$username','$password') ";
    if (mysqli_query($connection, $request)) {
        mysqli_close($connection);
        header("Location:adminaddsuccesses.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Admin panel</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-clinic-medical"></i>
                        <div class="title">Tools</div>
                    </a>
                </li>
                <li>
                    <a href="adminpage.php">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="adminviewreg.php">
                        <i class="fa fa-eye-slash"></i>
                        <div class="title">View Registrations </div>
                    </a>
                </li>
                <li>
                    <a href="AddAdmi.php">
                        <i class="fa fa-plus-circle"></i>
                        <div class="title"> Add new admin </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <div class="title">Settings</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        <div class="title">Help</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="top-bar">
                <p>Travel.et</p>
                <div class="adnav">
                    <i class="fas fa-sign-out"><a href="sessiondestroy.php">Logout</a></i>
                </div>
            </div>
            <div class="welcome">
                <p>Welcome</p>
                <div class="ADD">
                    <p>Please enter the user name and password of the new Admin</p>
                    <form method="POST" action="">
                        <label for="name"> Name: </label><input id="name" name="name" type="text">
                        <label for="Username"></label>Username:<input id="Username" name="username" type="text">
                        <label for="Password"></label>Password: <input id="Password" name="password" type="password">
                        <button type="submit" name="login_button">SUBMIT</button>
                    </form>
                </div>
            </div>

        </div>
</body>

</html>