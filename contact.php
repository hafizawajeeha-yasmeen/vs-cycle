<?php   include ('code.php') ?>
<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'vs_cycle');
if(!$db){
    echo mysqli_error($connection);
}
if($_POST)
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
     $insert="insert into contact(fname,lname,email,subject,message)values('$fname','$lname','$email','$subject','$message')";
    $query=mysqli_query($connection,$insert);
    if(!$query){
        echo mysqli_error($connection);
    }
    else{
        echo "<script>alert('Your message has been received!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <title>VS-CYCLE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"/>
    <meta name="keywords" content="VS-Cycle products & services" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
   
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    <!-- banner inner -->
    <div class="w3_agilits_banner_bootm">
        <!-- header -->
        <div class="container">
            <div class="w3_agile_logo">
                <h1>
                    <a href="index.html">
                        <img src="images1/logo.png" alt=""width="150px" height="90px" class="img-circle" /></a>
                </h1>
            </div>
            <div class="agileits_w3layouts_nav">
                <div id="toggle_m_nav">
                    <div id="m_nav_menu" class="m_nav">
                        <div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
                        <div class="m_nav_ham" id="m_ham_2"></div>
                        <div class="m_nav_ham" id="m_ham_3"></div>
                    </div>

                </div>
                <div id="m_nav_container" class="m_nav wthree_bg">
                    <nav class="menu menu--sebastian">
                        <ul id="m_nav_list" class="m_nav menu__list">
                        <li class="m_nav_item menu__item " id="m_nav_item_1">
                                <a href="home.php" class="menu__link"> Home </a>
                            </li>
                           
                            <li class="m_nav_item menu__item" id="moble_nav_item_4">
                                <a href="gallery.php" class="menu__link">Gallery</a>
                            </li>
                            <li class="m_nav_item menu__item menu__item--current" id="moble_nav_item_6">
                                <a href="contact.php" class="menu__link"> Contact </a>
                            </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_6">
                                <a href="logout.php" class="menu__link"> Logout </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--// header -->
        <div class="w3_agilits_inner_bottom">
            <div class="wthree_agile_login">
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>+9200000000000</li>
                    <li>
                        <i class="fa fa-envelope-o list-icon" aria-hidden="true"></i>
                        <a href="VSCYCLE@gmail.com">VSCYCLE@gmail.com</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="inner-bg"></div>
    <!--/banner-inner-->
    <!-- contact -->
    <div class="contact-bottom section-w3ls main-pos" id="contact">
        <div class="container">
            <h3 class="w3ls-title">
                <span>c</span>ontact<span>U</span>s</span></h3>
            <div class="contact-right-w3l">
                <form action="#" method="post">
                    <div class="contact-input">
                        <input type="text" class="name" name="fname" placeholder="First Name" required="">
                    </div>
                    <div class="contact-input">
                        <input type="text" class="name" name="lname" placeholder="Last Name" required="">
                    </div>
                    <div class="contact-input">
                        <input type="email" class="name" name="email" placeholder="Email" required="">
                    </div>
                    <div class="contact-input">
                        <input type="text" class="name" name="subject" placeholder="Subject" required="">
                    </div>
                    <div class="contact-input">
                        <textarea placeholder="Your Message" required="" name="message"></textarea>
                    </div>
                    <input type="submit" value="SEND MESSAGE" name="submit">
                </form>
            </div>
            <div class="clearfix"></div>
            <div class="contact-main">
                <div class="col-md-6 col-sm-6 col-xs-6 contact-left-w3ls">
                    <h3 class="h3-w3l">contact info</h3>
                    <div class="mail contact-grid-agileinfo c1">
                        <div class="contact-icon-wthree">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                        </div>
                        <div class="contact-text-agileinfo">
                            <h4>Mail us</h4>
                            <p>
                                <a href="VSCYCLE@gmail.com">VSCYCLE@gmail.com</a>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="call contact-grid-agileinfo c2">
                        <div class="contact-icon-wthree">
                            <span class="fa fa-phone" aria-hidden="true"></span>
                        </div>
                        <div class="contact-text-agileinfo">
                            <h4>Call us</h4>
                            <p>+9200000000000</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="visit contact-grid-agileinfo">
                        <div class="contact-icon-wthree">
                            <span class="fa fa-home" aria-hidden="true"></span>
                        </div>
                        <div class="contact-text-agileinfo">
                            <h4>Visit us</h4>
                            <p>ABC road 190D Fsd Pakistan</p>
            </div>
        </div>
    </div>
    <!-- //contact -->
    <!-- footer -->
    <div class="agile-footer w3ls-section">
        <div class="container">
            <div class="list-footer">
                <ul class="footer-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="services.html">Menu</a>
                    </li>
                    <li>
                        <a href="gallery.html">Gallery</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="agileits_w3layouts-footer-bottom">
                <div class="w3_agile-footer-grids">
                    <div class="col-md-3  w3_agile-footer1 f1">
                        <h2>
                            <a href="index.html">VSCYCLE</a>
                        </h2>
                        <h5 class="f1">about us</h5>
                        <p>Buy amazing decorative things from us & also sell your unworthy things.</p>
                    </div>
                        <h5>follow us</h5>
                        <ul class="footer-social-icons">
                            <li>
                                <a href="#">
                                    <i class="fa icon1 fa-facebook icons" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa icon2 fa-twitter icons" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa icon3 fa-google-plus icons" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa icon3 fa-linkedin icon4 icons" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
         var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear' 
         };
         */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- navigation  -->
    <script src="js/main.js"></script>
    <!-- //navigation -->
</body>

</html>