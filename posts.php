<?php

include "Admin/dashboard/logic.php";
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
                            <p><strong><span>Welcome to Namwianga Ward</span></strong></p>
                        </div>
                    </div><!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="index-hrsm.html">Covid-19 Is Real, Stay Safe !!!</a>
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
                            <h3><b> <a class="d-block" href="index.html" rel="home">
                                        <p>Namwianga ward</p>
                                    </a></b></h3>
                        </div><!-- .site-branding -->
                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <b>
                                <h3>
                                    <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="projects.html">Our Projects</a></li>
                                        <li><a href="news.html">News</a></li>
                                        <li class="current-menu-item"><a href="posts.php">Posts</a></li>
                                        <li><a href="other.html">Others</a></li>
                                        <li><a href="contact.html">Contact us</a></li>
                                        <li><a href="login/index.php">Login</a></li>
                                    </ul>
                                </h3>
                            </b>
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
    </header>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>News</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->
    <div class="container mt-5">
        <!-- Display posts from database -->
        <div class="row">
            <?php foreach ($query as $q) { ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['title']; ?></h5>
                            <p class="card-text"><?php echo substr($q['content'], 0, 50); ?>...</p>
                            <a href="view-post.php?id=<?php echo $q['id'] ?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">

                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>

                        <ul>
                            <li><a href="#">Ministry of Health</a></li>
                            <li><a href="#">World Health Organization</a></li>
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">Local Government</a></li>
                            <li><a href="#">Ministry of Youth</a></li>
                            <li><a href="#">Ministry of Education</a></li>
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Latest News</h2>

                            <ul>
                                <li>
                                    <h3><a href="#">A new cause to help</a></h3>
                                    <div class="posted-date">Sep 12, 2023</div>
                                </li>

                                <li>
                                    <h3><a href="#">ward 24 general cleaning</a></h3>
                                    <div class="posted-date">OCT 23, 2023</div>
                                </li>

                                <li>
                                    <h3><a href="#">Fundraising ventures</a></h3>
                                    <div class="posted-date">Dec 12, 2023</div>
                                </li>
                            </ul>
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+260 976985288</span></li>
                                <li><i class="fa fa-envelope"></i><span>info@namwiangacommunity.icu</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Along Sipatunyana road Kalomo</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | SIN: 1907197330 | NAME: THOMAS SIAPENGA by <a href="#" target="_blank">Matero Ward 24</a>
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


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>