<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
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
<link rel="stylesheet" type="text/css" href="css/eduty.css">

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
                <li><a href="study-material.php">Study Materils</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact-eduty.php">Contact</a></li>
                <li><a href="eduty.php?logout=<?php echo $user_id; ?>">Logout</a></li>
                
               
                

            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>

    </nav>

    <!--===================END OF NAVBAR===============-->





    <header>
        <div class="container header_container">
            <div class="header_left">
                <h2>Welcome, <?php echo $fetch_info['name'] ?></h2>
                <p>
                    Victory is in having done your best. If you’ve done your best, you’ve won.
                </p>
                
                <a href="courses.html" class="btn btn-primary">Get Started</a>

            </div>

        <div class="header_right">
            <div class="header_right-image">
                <img src="images/headr.svg" alt="header"> 
            </div>
        </div>
    </header>
    <!--===================END OF HEADER===============-->




    <section class="categories">
        <div class="container categories_container">
            <div class="categories_left">
                <h1>Categories</h1>
                <p>
                All of the top achievers I know are life-long learners. Looking for new skills, insights, and ideas. If they’re not learning, they’re not growing and not moving toward excellence.
                </p>
                <a href="courses.html" class="btn">Explore Now</a>
            </div>

            <div class="categories_right">
                <article class="category">
                    <span class="category_icon"><i class="uil uil-book-open"></i></span>
                    <h5>NCERT Solutions</h5>
                    <p>Chapter Wise NCERT Solutions </p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-notes"></i></span>
                    <h5>Previous Year Question Papers</h5>
                    <p>Chapter wise Notes</p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-megaphone"></i></span>
                    <h5>Sample Papers</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing </p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-book"></i></span>
                    <h5>Important Notes</h5>
                    <p>Get help to complete your Assignment  </p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-megaphone"></i></span>
                    <h5>Assignment</h5>
                    <p>Lorem ipsum dolor, sit amet</p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-notes"></i></span>
                    <h5>General Knowledge</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing </p>
                </article>
                
            </div>
        </div>
    </section>
    <!--===================END OF CATEGORIES===============-->




    <section class="courses">
        <h2>Our Popular Courses</h2>
        <div class="container courses_container">
            <article class="course">
                <div class="course_iamge">
                    <img src="./images/main basic.jpg">
                </div>
                <div class="course_info">
                    <h4>Basic</h4>
                    <p>
                        <i class="uil uil-check"></i>Get NCERT Answers.<br><i class="uil uil-check"></i> Ask your Doubts.
                    </p>
                    <a href="courses.html" class="btn btn-primary">Learn More</a>
            </article>

            <article class="course">
                <div class="course_iamge">
                    <img src="./images/standard199.jpg">
                </div>
                <div class="course_info">
                    <h4>Standard</h4>
                    <p>
                        <i class="uil uil-check"></i>Get NCERT Answers.<br><i class="uil uil-check"></i> Ask your Doubts.                    </p>
                    <a href="courses.html" class="btn btn-primary">Learn More</a>
            </article>

            <article class="course">
                <div class="course_iamge">
                    <img src="./images/BASIC (1).jpg">
                </div>
                <div class="course_info">
                    <h4>Premium</h4>
                    <p>
                        <i class="uil uil-check"></i>Get NCERT Answers.<br><i class="uil uil-check"></i> Ask your Doubts.                    </p>
                    <a href="courses.html" class="btn btn-primary">Learn More</a>
            </article>
        </div>
    </section>
<!--===================END OF COURSES===============-->





    <section class="faqs">
        <h2>Frequently Asked Questions</h2>
        <div class="container faqs_container">
            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>What do I get on Eduty?</h4>
                    <p>
                    At Eduty we have broken down studying into 4 parts:<br>
- The Learn section gives you concept notes and study material.<br>
- The Practice section adapts to your progress and gives you the right questions, sets and adaptive tests to practice.<br>
- In the Doubts section you can ask a question and a tutor will respond to you instantly.<br>
- The Tests section gives you real exam practice and lets you compete with lakhs of students from around the country.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>Can I use Eduty for free?</h4>
                    <p>
                    Joining Eduty is absolutely free! You can learn with our Notes, Study Materils, Concepts and Stories for every topic in your syllabus. You can try it out to see how Eduty works. To take full advantage of our platform, you will have to subscribe to a paid package.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>Which books do I need with Eduty?</h4>
                    <p>
                    Eduty has a question bank that has more than 1 lakh questions, with hints, solutions. Eduty has Study material and concept notes. These are neatly organised into chapters and topics. Also depending on your progress Eduty shows you exactly what you need right now. So with Eduty, everything you need is available at the tap of a button. You will never need a book!
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How can I pay online?</h4>
                    <p>
                    You can pay online by using any of the following options: Netbanking, Credit Card, Debit Card and UPI.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>I am a good student, but cannot afford to pay. Can you give me a scholarship?</h4>
                    <p>
                    We do not think your circumstances should stop your learning. Do email us at eduty@gmail.com with some details on your marks and performance and we will try to offer you a scholarship on the basis of your merit to cover some part of your costs of using Eduty. This is entirely at our discretion.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>I go to a coaching class, why should I use<br> Eduty?</h4>
                    <p>
                    Whether a student uses coaching classes or other ways to supplement school teaching, a large part of learning is self study. It helps you make the most of your limited time. You can learn or practice anytime, anywhere at your own pace; ask questions 24x7 and take tests with lakhs of students. Eduty provides guidance like a personal tutor. Eduty learns about you, adapts to your needs and grows with you to help you achieve your study goals.
                    </p>
                </div>
            </article>
        </div>
    </section>
    <!--===================END OF COURSES===============-->

    <section class="container testimonials_container mySwiper">
        <h2>Students Sharing Their Eduty<br>Experience</h2>
        <div class="swiper-wrapper">
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/student 1.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>Sumit Das</h5>
                    <small>Class-11</small>
                </div>
                <div class="testimonial_body">
                    <p>
                        Organic Chemistry was  like a phobia to me! I Couldn't even attempt it in competative exams. Thank You for helping me achive the confidence level I have today for Organic Chemistry.
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/student 2.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>Harshit Das</h5>
                    <small>Master</small>
                </div>
                <div class="testimonial_body">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima iste quidem ratione perferendis impedit nostrum dolorem nisi fugiat dicta harum ducimus architecto ipsa magnam, praesentium tempora est, hic, cum consequatur.
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/student 1.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>Sourodeep Das</h5>
                    <small>Tutor</small>
                </div>
                <div class="testimonial_body">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima iste quidem ratione perferendis impedit nostrum dolorem nisi fugiat dicta harum ducimus architecto ipsa magnam, praesentium tempora est, hic, cum consequatur.
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/student 2.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>Srijay Das</h5>
                    <small>Engineer</small>
                </div>
                <div class="testimonial_body">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima iste quidem ratione perferendis impedit nostrum dolorem nisi fugiat dicta harum ducimus architecto ipsa magnam, praesentium tempora est, hic, cum consequatur.
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/student 1.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>Srishti Das</h5>
                    <small>Doctor</small>
                </div>
                <div class="testimonial_body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error obcaecati non facilis rem sit magnam quis tempora, dolores alias suscipit nostrum necessitatibus doloremque pariatur illo sequi iusto laudantium quaerat harum! Modi ex dolore error magnam nobis hic ipsa quas, neque, sit iure deleniti nemo reiciendis expedita placeat fugiat natus voluptatum.
                    </p>
                </div>
            </article>
        </div>
    </section>

<!--===================END OF TESTIMONIAL===============-->

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
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 5000,
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      </script>

    
</body>
</html>