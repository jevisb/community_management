<?php
include 'connect.php';
if(isset($_POST['submit'])){

$title = $_POST['message_title'];
$from = $_POST['sent_from'];
$purpose = $_POST['message_purpose'];
$description = $_POST['message_descritption']; 

$sql = "INSERT INTO messages(title,sent_from,message_purpose,message_description) VALUES ('$title','$from','$message_purpose','$message_descritption')";

if ($conn->query($sql) === TRUE) {
	echo "Mesage sent to the admins: ";
} 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Namwianga Ward</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/elegant-fonts.css">

    <link rel="stylesheet" href="css/themify-icons.css">

    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                    
                        <div class="header-bar-text">
                            <p><strong ><span>Welcome to Namwianga Ward</span></strong></p>
                        </div>
                    </div><!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="">Covid-19 Is Real, Stay Safe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.html" rel="home"><p>Namwianga ward</p></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="projects.html">Our Projects</a></li>
                                <li class="current-menu-item"><a href="news.html">News</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contact</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="contact-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="entry-content">
                        <h2>Get In touch with us</h2>

                      
  <ul>
                                <li><i class="fa fa-phone"></i><span>+260 976985288</span></li>
                                <li><i class="fa fa-envelope"></i><span>info@namwiangaocommunity.icu</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Along Sipatunyana road Kalomo</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form"><p>Message Us</p>
        
                            <div class="container">
                                <form action="" method="POST">
                              
                                  <label for="fname">Full Name</label>
                                  <input type="text" id="fname" name="sent_from" placeholder="Your name..">
                                  <label for="country">Country</label>
                                  <label for="title">Title</label>
                                  <input type="text" id="title" name="Message_title" placeholder="Message title">
                                  <label for="purpose">Purpose</label>
                                  <input type="text" id="purpose" name="message_purpose" placeholder="Why are you sending this message" >
                                  <label for="subject">Description</label>
                                  <textarea id="description" name="message_descritption" placeholder="Write something.." style="height:200px"></textarea>
                              
                                  <input type="submit" value="Submit">
                              
                                </form>
                              </div>
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
						All rights reserved | SIN: 1907197330 | NAME: Thomas Siapenga  by <a href="#" target="_blank">Namwianga Ward</a>
</p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>