<?php
$erorrcode = "";
$errormeg = "This filed can not be Empty!";
$connection = mysqli_connect('localhost', 'root', '', 'book_db');
if (!$connection) die(mysqli_connect_error() . "Connected failed");

if (isset($_POST['send'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];


   if (empty($name)) {
      $erorrcode = 1;
   } else if (empty($email)) {
      $erorrcode = 2;
   } else if (empty($phone)) {
      $erorrcode = 3;
   } else if (empty($address)) {
      $erorrcode = 4;
   } else if (empty($location)) {
      $erorrcode = 5;
   } else if (empty($guests)) {
      $erorrcode = 6;
   } else if (empty($arrivals)) {
      $erorrcode = 7;
   } else if (empty($leaving)) {
      $erorrcode = 8;
   } else {

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving)
                    values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";

      if (mysqli_query($connection, $request)) {
         mysqli_close($connection);
         header("Location:booksuccesses.php");
         exit();
      } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo">travel.Eth</a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>

      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
      <h1>book now</h1>
   </div>

   <!-- booking section starts  -->

   <section class="booking">

      <h1 class="heading-title">book your trip!</h1>

      <form action="" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>name: <span style="color:red"> <?php
                                                      if ($erorrcode == 1)
                                                         echo $errormeg; ?></span> </span>
               <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
               <span>email: <span style="color:red"> <?php
                                                      if ($erorrcode == 2)
                                                         echo $errormeg; ?></span> </span>
               <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
               <span>phone: <span style="color:red"> <?php
                                                      if ($erorrcode == 3)
                                                         echo $errormeg; ?></span> </span>
               <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
               <span>address: <span style="color:red"> <?php
                                                         if ($erorrcode == 4)
                                                            echo $errormeg; ?></span> </span>

               <datalist id="cities">
                  <option value="Addis Ababa"></option>
                  <option value="Gondar"></option>
                  <option value="Mekelle"></option>
                  <option value="Nekemte"></option>
                  <option value="Adama"></option>
                  <option value="Awassa"></option>
                  <option value="Bahir Dar"></option>
                  <option value="Dire Dawa"></option>
                  <option value="Dessie"></option>
                  <option value="Jimma"></option>
                  <option value="Jijiga"></option>
                  <option value="Shashamane"></option>
                  <option value="Bishoftu"></option>
                  <option value="Sodo"></option>
                  <option value="Arba Minch"></option>
                  <option value="Hosaena"></option>
                  <option value="Harar"></option>
                  <option value="Dilla"></option>
                  <option value='Debre Birhan'></option>
                  <option value='Asella'></option>
                  <option value='Debre Mark'></option>
                  <option value='Kombolcha'></option>
                  <option value='Debre Tabor'></option>
                  <option value='Adigrat'></option>
                  <option value='Areka'></option>
                  <option value='Weldiya'></option>
                  <option value='Sebeta'></option>
                  <option value='Burayu'></option>
                  <option value='Shire'></option>
                  <option value='Ambo'></option>
                  <option value='Arsi Negele'></option>
                  <option value='Aksum'></option>
                  <option value='Gambela'></option>
                  <option value='Bale Robe'></option>
                  <option value='Butajira'></option>
                  <option value='Batu'></option>
                  <option value='Boditi'></option>
                  <option value='Adwa'></option>
                  <option value='Yirgalem'></option>
                  <option value='Waliso'></option>
                  <option value='Welkite'></option>
                  <option value='Gode'></option>
                  <option value='Meki'></option>
                  <option value='Negele Borana'></option>
                  <option value='Alaba Kulito'></option>
                  <option value='Alamata'></option>
                  <option value='Chiro'></option>
                  <option value='Tepi'></option>
                  <option value='Durame'></option>
                  <option value='Goba'></option>
                  <option value='Assosa'></option>
                  <option value='Gimbi'></option>
                  <option value='Wukro'></option>
                  <option value='Haramaya'></option>
                  <option value='Mizan Teferi'></option>
                  <option value='Sawla'></option>
                  <option value='Mojo'></option>
                  <option value='Dembi Dolo'></option>
                  <option value='Aleta Wendo'></option>
                  <option value='Metu'></option>
                  <option value='Mota'></option>
                  <option value='Fiche'></option>
                  <option value='Finote Selam'></option>
                  <option value='Bule Hora Town'></option>
                  <option value='Bonga'></option>
                  <option value='Kobo'></option>
                  <option value='Jinka'></option>
                  <option value='Dangila'></option>
                  <option value='Degehabur'></option>
                  <option value='Dimtu'></option>
                  <option value='Agaro'></option>
               </datalist>
               <input type="text" list="cities" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
               <span>where to: <span style="color:red"> <?php
                                                         if ($erorrcode == 5)
                                                            echo $errormeg; ?></span> </span>
               <input type="text" list="cities" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
               <span>how many: <span style="color:red"> <?php
                                                         if ($erorrcode == 6)
                                                            echo $errormeg; ?></span> </span>
               <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
               <span>arrivals: <span style="color:red"> <?php
                                                         if ($erorrcode == 7)
                                                            echo $errormeg; ?></span> </span>
               <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
               <span>leaving: <span style="color:red"> <?php
                                                         if ($erorrcode == 8)
                                                            echo $errormeg; ?></span> </span>
               <input type="date" name="leaving">
            </div>
         </div>

         <input type="submit" value="submit" class="btn" name="send">

      </form>

   </section>

   <!-- booking section ends -->

















   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         </div>

         <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         </div>

         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +251-111-638-385 </a>
            <a href="#"> <i class="fas fa-phone"></i> +251-911-474-501</a>
            <a href="#"> <i class="fas fa-envelope"></i> benji400@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> ethiopia, addis ababa - 1000</a>
         </div>

         <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>

      </div>

      <div class="credit"> created by <span>mr. kaleab hegie</span> | all rights reserved! </div>

   </section>

   <!-- footer section ends -->









   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>