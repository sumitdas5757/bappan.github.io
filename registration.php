<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'User already Exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm password not Matched!';
      }elseif($image_size > 2000000){
         $message[] = 'Image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Registered Successfully!';
            header('location:login.php');
         }else{
            $message[] = 'Registeration Failed!';
         }
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
    <title>Eduty- Educational Platform</title>

    <!-- SWIPERJS -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- ICONSCOUT CON -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- GOOGLE FONTS (MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/register.css">

<style>
    body {
        background-image: url("images/bg-texture.png");
    }
</style>
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="eduty.php"><h1>Eduty</h1></a>
            <ul class="nav_menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="study-material.php">Study Materials</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact-eduty.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                
               
                

            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>

    </nav>

    <!--===================END OF NAVBAR===============-->


    <section class="content">
        <div class="container contact_container">
            <aside class="contact_aside">
                <div class="aside_image">
                    <img src="images/login.svg">
                    <h2>Login</h2>
                    <p>
                    Can't find the solution you are looking for? Here is how to get help from our experts. If you have question or need help,
                    </p>
                    <ul class="contact_details">
                        <li>
                            <i class="uil uil-phone-times"></i>
                            <h5>+91 7002504706</h5>
                        </li>
                        <li>
                            <i class="uil uil-envelope"></i>
                            <h5>support@eduty.com</h5>
                        </li>
                        <li>
                            <i class="uil uil-location-point"></i>
                            <h5>Silchar, Assam</h5>
                        </li>
                    </ul>
                    <ul class="contact_socials">
                        <li> <a href="#"><i class="uil uil-facebook-f"></i></a> </li>
                        <li> <a href="#"><i class="uil uil-instagram"></i></a> </li>
                        <li> <a href="#"><i class="uil uil-twitter"></i></a> </li>
                        <li> <a href="#"><i class="uil uil-linkedin-alt"></i></a> </li>
                    </ul>
                </div>
            </aside>


            <form action="" method="post" class="contact_form">
                <h1 class="lekha">Register Now</h1>
                <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
                
                
                    <input type="text" class="formname" name="name" placeholder="Name" required>
                    <select>
                        <option default>Select Class</option>
                        <option>Class 01</option>
                        <option>Class 02</option>
                        <option>Class 03</option>
                        <option>Class 04</option>
                        <option>Class 05</option>
                        <option>Class 06</option>
                        <option>Class 07</option>
                        <option>Class 08</option>
                        <option>Class 09</option>
                        <option>Class 10</option>
                        <option>Class 11</option>
                        <option>Class 12</option>
                    </select>
                    <input type="number" name="phone" placeholder="Phone" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="password" name="cpassword" placeholder="Confirm Password" required>
                
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
                <p class="acc">Already have an account? <a class="fgt" href="login.php">Login now</a></p>
            </form>
        </div>
    </section>






















    <footer>
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.html" class="footer_logo"><h4>Eduty</h4></a>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae dolore quo illo?
                </p>
            </div>

            <div class="footer_2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact-eduty.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>

            <div class="footer_3">
                <h4>Primary</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms And Conditions</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>

            <div class="footer_4">
                <h4>Contact Us</h4>
                <div>
                    <p>+91 7002504706</p>
                    <p>c_care@eduty.com</p>
                </div>


            <ul class="footer_socials">
                <li>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                </li>
                <li>
                    <a href="#"><i class="uil uil-instagram-alt"></i></a>
                </li>
                <li>
                    <a href="#"><i class="uil uil-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="uil uil-linkedin-alt"></i></a>
                </li>
            </ul>
            </div>
        </div>
        <div class="footer_copyright">
            <small>Copyright &copy; Eduty- Educational Platform</small>
        </div>

    </footer>






    <script src="js/main.js"></script>


    
</body>
</html>