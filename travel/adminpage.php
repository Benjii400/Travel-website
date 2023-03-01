<?php
session_start();
if ($_SESSION['staus'] != 'Login') {
    header('location:Adminlogin.php');
}
$connection = mysqli_connect('localhost', 'root', '', 'book_db');
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
                    <a href="adminViewReg.php">
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
                        <div class="title"> View Registrations </div>
                    </a>
                </li>
                <li>
                    <a href="AddAdmi.php">
                        <i class="fa fa-plus-circle"></i>
                        <div class="title"> Add new admin</div>
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
            <div class="welcome" width="100%" border="1px">
                <p>Welcome</p>
                <div id="dash">
                    <div class="dashcard">
                        <div style="background-color:#FFBB5A;" class="line"></div>
                        <div style="background-color:#FFBB5A;" class="title">
                            <p>
                                Customer</p>
                        </div>
                        <div class="titleinfo">Total Customer</div>
                        <div class="count">
                            <h2>11</h2>
                        </div>
                        <a style="color: #FFBB5A;" href="Admincustomer.php">View More→</a>
                    </div>

                    <div class="dashcard">
                        <div style="background-color:#FFBB5A;" class="line"></div>
                        <div style="background-color:#FFBB5A;" class="title">
                            <p>
                                Customer</p>
                        </div>
                        <div class="titleinfo">Total Customer</div>
                        <div class="count">
                            <h2>11</h2>
                        </div>
                        <a style="color: #FFBB5A;" href="Admincustomer.php">View More→</a>
                    </div>
                </div>
            </div>
</body>

</html>

<style>
    /*Dashbord*/
    #dash {
        display: inline-block;
        margin-top: 50px;
        margin-left: 20px;
    }

    #dash2 {
        margin-top: 50px;
        display: inline-block;
    }

    .dashcard {
        width: 250px;
        height: 190px;
        background-color: white;
        margin: 5px;
        box-shadow: 10px 10px 10px rgb(173, 173, 173);
    }

    .dashcard .line {
        background-color: #4a5fc1;
        width: 10px;
        height: 190px;
    }

    .dashcard .title {
        background-color: #4a5fc1;
        position: relative;
        top: -190px;
        margin-left: 10px;
        padding-bottom: 10px;
        padding-left: 30px;
        padding-right: 30px;
    }

    #dash .dashcard .title p {
        color: white;
        margin: 0;
        font-size: 20px;
    }

    .titleinfo {
        position: relative;
        bottom: 180px;
        left: 20px;
        font-size: large;
        color: gray;
    }

    .count {
        color: gray;
        position: relative;
        top: -180px;
        left: 7px;
        font-size: 30px;
    }

    #dash a,
    #dash2 a {
        text-decoration: none;
        color: #4a5fc1;
        position: relative;
        top: -100px;
        left: 25px;
        font-size: 20px;
        padding: 0;
        margin-left: 100px;
    }

    #dash a:hover,
    #dash2 a:hover {
        font-weight: 600;
    }

    #dash h2,
    #dash p,
    #dash2 h2,
    #dash2 p {
        margin: 0;
    }
</style>