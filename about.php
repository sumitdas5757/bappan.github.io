<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
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
<link rel="stylesheet" type="text/css" href="css/about-eduty.css">
<style>
    body {
        background-image: url("images/bg-texture.png");
    }
</style>
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="index.html"><h1>Eduty</h1></a>
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

    <section class="about_achievements">
        <div class="container about_achievements-container">
            <div class="about_achievements-left">
                <img src="images/about achievements.svg">
            </div>

            <div class="about_achievements-right">
                <h1>Achievements</h1>
                <p>
                    If you believe in yourself and have dedication and pride - and never quit, you'll be a winner. The price of victory is high but so are the rewards. You were born to win, but to be a winner, you must plan to win, prepare to win, and expect to win.                </p>
                <div class="achievements_cards">
                    <article class="achievement_card">
                        <span class="achievement_icon">
                            <i class="uil uil-book-open"></i>
                        </span>
                        <h3>450+</h3>
                        <p>Study Materials</p>
                    </article>
                    <article class="achievement_card">
                        <span class="achievement_icon">
                            <i class="uil uil-users-alt"></i>
                        </span>
                        <h3>83,000+</h3>
                        <p>Students</p>
                    </article>
                    <article class="achievement_card">
                        <span class="achievement_icon">
                            <i class="uil uil-trophy"></i>
                        </span>
                        <h3>52+</h3>
                        <p>Awards</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.html" class="footer_logo"><h4>Eduty</h4></a>
                <p>
                    Grow Your skills to advance your career path
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