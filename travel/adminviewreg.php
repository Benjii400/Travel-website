<?php
session_start();
if ($_SESSION['staus'] != 'Login') {
    header('location:Adminlogin.php');
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
    <style>
        #table {
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
            overflow: scroll;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: lightslategray;
            color: white;
        }
    </style>
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
                        <div class="title"> View Registrations</div>
                    </a>
                </li>
                <li>
                    <a href="AddAdmi.php">
                        <i class="fa fa-plus-circle"></i>
                        <div class="title">Add new admin</div>
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
            </div>
            <div>
                <div class="last-appointments">
                    <?php
                    $connection = mysqli_connect('localhost', 'root', '', 'book_db');
                    $sql = "SELECT * FROM  book_form";
                    $result = mysqli_query($connection, $sql);

                    if ($result->num_rows > 0) { ?>
                        <table id="table" style="width: 100%;">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Location</th>
                                <th>Guests</th>
                                <th>Arrival</th>
                                <th>Leaving</th>
                            </tr>

                            <?php
                            $count = 1;
                            while ($row = $result->fetch_assoc()) { ?>
                                <form name="actiononbus" method="POST" action="">
                                    <tr>
                                        <td>
                                            <?php echo $count++; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["name"] ?>
                                        </td>
                                        <td>
                                            <?php echo $row["email"] ?>
                                        </td>
                                        <td>
                                            <?php echo $row["phone"] ?>
                                        </td>
                                        <td>
                                            <?php echo $row["address"] ?>
                                        </td>
                                        <td>
                                            <?php echo $row["location"] ?>
                                        </td>
                                        <td>
                                            <?php echo $row["guests"] ?>
                                        </td>
                                        <td>
                                            <?php echo $row["arrivals"] ?>
                                        </td>
                                        <td>
                                            <?php echo $row["leaving"] ?>
                                        </td>
                                    </tr>
                                </form>
                            <?php
                            }
                            ?>
                        </table> <?php
                                } else {
                                    echo "0 results";
                                }
                                $connection->close();
                                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>