<?php
include("includes/dconn.php");
#If session name is set...then user is logged in
if (isset($_SESSION['name'])) {

    echo("Welcome ".$_SESSION['name']."!");
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>clickhub</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="teal">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/aos.css" type="text/css" media="all" />
</head>
<body>
    <header>
        <div class="header-overlay"></div>
        <nav class=" z-depth-0 transparent">
            <div class="nav-wrapper eight">
                <a href="#" class="brand-logo left"><img width="40px" height="auto" src="icons/icon5.png"></a>
                <ul id="nav-mobile" class="right">
                    <li><a href="http://www.luis.com">Services</a></li>
                    <li><a href="#tell">About</a></li>
                    <li><a href="#connect">Contact</a></li>
                </ul>
            </div>
        </nav>

        <div class="hContainer">

            <div class="hSection hSection2">
                <h1 class="h1">VALPOINT SCORES</h1>
                <p>
                    A music repository where you can upload your songs to the world and listen to beautiful renditions.

                </p>

                <?php
                #If user is logged in
                if (isset($_SESSION['name'])) {
                    echo '<a href="gallery.php" class="cta pulse waves-effect waves-light btn">view gallery</a>';
                } else {
                    echo '<a href="sign-up.php" class="cta pulse waves-effect waves-light btn">sign up!</a>';


                }
                ?>

            </div>
        </div>
    </header>
    <!-- what we do-->
    <div class="main-section row ">
        <div id="content" class="sub-section1 col l6" data-aos="fade-down">
            <h2>WELCOME TO CLICKHUB</h2>
            <p>
                Clickhub is your number one web solutions web design/development and other related services company in Nigeria. We are fully committed to helping our clients in realizing their projects to the last detail.
            </p>
            <p>
                You can reach us via the phone number below
            </p>
            <p class="call">
                Call Us Now On:
            </p>
            <a href="tel:+2348149428491">+2348149428491</a>
        </div>


        <div class="sub-section2 col l6">
            <img class="hide-on-small-only materialboxed" src="images/sectionImage.jpg">
        </div>
    </div>
    <!-- divider-->
    <div class="hide-on-med-and-up container green divider"></div>
    <!--Sections-->
    <section>
        <div id="content2" data-aos="zoom-in">
            <h2 id="serve">Our Services</h2>
            <p>
                We offer professional services which include web design and development, SEO, copywritng among others.
            </p>
        </div>
        <div class="sec-child-container" data-aos="">
            <div class="sect">

                <img data-aos="fade-right" class="service hide-on-large-only" src="images/wdv.jpg">
                <span class="icon"><img class="expo" src="icons/icon6.png"></span>
                <h3 data-aos="fade-left">Image gallery</h3>
                <p data-aos="zoom-in">
                    View our collection of beautiful images uploaded by our users.
                </p>

            </div>
            <div class="sect" data-aos="fade-left">

                <img class="service hide-on-large-only" src="images/wds.jpg">
                <span class="icon"><img class="expo" src="icons/icon6.png"></span>
                <h3>Video gallery</h3>
                <p>
                    Vidoes describe events better. Check out our video collection.
                </p>

            </div>
            <div class="sect" data-aos="fade-right">

                <img class="service hide-on-large-only" src="images/cw.jpg">
                <span class="icon"><img class="expo" src="icons/icon6.png"></span>
                <h3>Audio Gallery</h3>
                <p>
                    Hear our story through the voices of our users.
                </p>

            </div>

        </div>


        <?php
        if (isset($_SESSION['name'])) {
            include('logout.php');
        } else {
            include('sign-up.php');
        }

        /* If user is admin, display upload form*/
        if (isset($_SESSION['name'])) {

            if ($_SESSION['name'] == "Admin") {
                include("upload.php");
                echo '<p> go to <a class="blue-text" href = "admin.php" > admin page </a> or view our <a class="blue-text" href="gallery.php">image</a>, <a class="blue-text" href="video-gallery.php">video</a> or <a class="blue-text" href="music-gallery.php">audio</a> gallery</p>';

            } else {
                echo 'View our <a class="blue-text" href="gallery.php">image</a>, <a class="blue-text" href="video-gallery.php">video</a> or <a class="blue-text" href="music-gallery.php">audio</a> gallery';
            }
        }
        ?>

    </section>

    <!--FLOATING BUTTON-->
    <div class="fixed-action-btn">
        <a class="btn-floating btn-medium blue">
            <img class="fIcon" src="icons/icon4.png">
        </a>
        <ul>
            <li><a class="btn-floating red"><img class="fIcon" src="icons/icon4.png"></a></li>
            <li><a class="btn-floating green"><img class="fIcon" src="icons/icon1.png"></a></li>
            <li><a class="btn-floating puple"><img class="fIcon" src="icons/icon3.png"></a></li>
            <li><a class="btn-floating blue"><img class="fIcon" src="icons/icon6.png"></a></li>
        </ul>
    </div>

    <!--footer-->

    <footer class="footer">
        <div class="footer-container">
            <div id="connect" class="footer-section">
                <h4>Contact Details</h4>
                <p>
                    <span></span>&nbsp Port Harcourt
                </p>
                <p>
                    <span></span>&nbsp +2348149428491
                </p>
                <p>
                    <span></span>&nbsp <a href="mailto:valentine4d@gmail.com">valentine4d@gmail.com</a>
                </p>
            </div>

            <div class="footer-section">
                <h4>Contact us</h4>
                <p>
                    Let us hear from you
                </p>

                <?php
                if (isset($_SESSION['name'])) {
                    include('logout.php');
                } else {
                    include('sign-up.php');
                }

                /* If user is admin, display upload form*/
                if (isset($_SESSION['name'])) {

                    if ($_SESSION['name'] == "Admin") {
                        include("upload.php");
                        echo '<p> go to <a class="blue-text" href = "admin.php" > admin page </a> or view our <a class="blue-text" href="gallery.php">image</a>, <a class="blue-text" href="video-gallery.php">video</a> or <a class="blue-text" href="music-gallery.php">audio</a> gallery</p>';

                    } else {
                        echo 'View our <a class="blue-text" href="gallery.php">image</a>, <a class="blue-text" href="video-gallery.php">video</a> or <a class="blue-text" href="music-gallery.php">audio</a> gallery';
                    }
                }
                ?>

            </div>

            <div class="footer-section">

                <h4 id="tell">About us</h4>
                <p>
                    We are the best at doing what we know how to do best
                </p>
            </div>

            <div class="footer-section">
                <h4>On Social Media</h4>
                <p>
                    <a href="#">Instagram</a>
                </p>
                <p>
                    <a href="#">Twitter</a>
                </p>
                <p>
                    <a href="#">Facebook</a>
                </p>
                <p>
                    <a href="#">LinkedIn</a>
                </p>
            </div>
        </div>
        <p>
            The company name and company logo are registered
            trademarks of the company. ClickHub &copy&nbsp<span id="copy-year"></span>.
            All rights reserved.
        </p>
    </footer>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Contact us</h4>
            <p>
                Let us hear from you
            </p>

            <form action="mail.php">
                <input type="text" name="name" placeholder="Name...">
                <input type="text" name="subject" placeholder="subject">
                <input type="text" name="message" placeholder="message...">
                <input name="submit" value="submit" type="submit">
            </form>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>

    <!--JavaScript code-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <script src="js/aos.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript">
        M.AutoInit();

        AOS.init({

            offset: 250,
            duration: 900,
            easing: 'ease-in-sine'
        });

    </script>
</body>
</html>