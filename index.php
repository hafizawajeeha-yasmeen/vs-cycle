<?php   include ('code.php') ?>
<?php if(isset($_SESSION['login'])){
  header('location:home.php');
  exit();
} ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>VS-Cycle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="VS-Cycle Product & Services" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
  
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
     <link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
 
    <script src="js/jquery-2.2.3.min.js"></script>
    
     <script type="text/javascript" src="js/numscroller-1.0.js"></script>
    <script src="js/bootstrap.js"></script>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
 
</head>

<body>
    <!--/banner-bottom-->
    <div class="w3_agilits_banner_bootm">
        <!-- header -->
        <div class="container">
            <div class="w3_agile_logo">
                <h1>
                    <a href="images1/logo.PNG">
                        <img src="images1/logo.PNG" alt="" width="150px" height="90px" alt="" class="img-circle"/></a>
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
                        <li class="m_nav_item menu__item menu__item--current" id="m_nav_item_1">
                                <a href="index.php" class="menu__link"> Home </a>
                            </li>
                            <li class="m_nav_item menu__item " id="m_nav_item_1">
                                    <a href="Login.php" class="menu__link"> Login</a>
                            </li>
                            <li class="m_nav_item menu__item menu__item-current" id="m_nav_item_1">
                                <a href="register.php" class="menu__link"> Register</a>
                            </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_6">
                                <a href="contact.php" class="menu__link"> Contact </a>
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
                        <i class="fa fa-phone" aria-hidden="true"></i> +920000000000</li>
                    <li>
                        <i class="fa fa-envelope-o list-icon" aria-hidden="true"></i>
                        <a href="mailto:info@example.com">vs-cycle@gmail.com</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!--//banner-bottom-->
    <!--/banner-section-->
    <div id="demo-1" data-zs-src='["images1/d6.jpg","images1/j7.jpg","images1/j8.webp","images1/g4.jpg","images1/g1.jpg","images1/j5.png","images1/recycle1.jpg"]' data-zs-overlay="dots">
        <div class="demo-inner-content">

           
        </div>
    </div>
    <!--/banner-section-->
    <!--about -->
    <div id="about" class="wthree-about section-w3ls">
        <div class="container">
            <div class="agileits-banner-grids text-center">
                <div class="banner-bottom-girds">
                    <div class="services_agile" id="services">
                        <div class="services-top">
                            <div class="col-md-3 col-sm-4 col-xs-4 service_grid text-center">
                                <div class="serviceinfo_agile ih-item circle colored effect17 active">
                                    <div class="img">
                                        <img src="images1/sufyan.jpg" class="img-responsive" alt="img">
                                    </div>
                                    <div class="info">
                                        <p>Jewellery</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-4 service_grid text-center">
                                <div class="serviceinfo_agile ih-item circle colored effect17">
                                    <div class="img">
                                        <img src="images1/d6.jpg" class="img-responsive" alt="img">
                                    </div>
                                    <div class="info">
                                        <p>Desk Organizer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-4 service_grid text-center">
                                <div class="serviceinfo_agile ih-item circle colored effect17">
                                    <div class="img">
                                        <img src="images1/1.jpg" class="img-responsive" alt="img">
                                    </div>
                                    <div class="info">
                                        <p>Decoration Pieces</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-4 service_grid text-center">
                                <div class="serviceinfo_agile ih-item circle colored effect17">
                                    <div class="img">
                                        <img src="images1/re.png" class="img-responsive" alt="img">
                                    </div>
                                    <div class="info">
                                        <p>Recycle Products</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <h3 class="w3ls-title">
                <span>a</span>bout us</h3>
                <h5>Buy amazing decorative things from us & also sell your unworthy thing</h5>
            <div class="col-md-7  w3ls-about-left">
               
                <p class="about-bottom">VS-Cycle is an innovative waste management service website that strives to revolutionize the waste management industry for both individuals and councils. Our goal at VS-Cycle is to empower people to improve the environment and preserve our planet by providing a convenient and reliable recycling service. </p>
            </div>
            <div class="col-md-5 w3ls-row">
                <div class="col-md-6 col-sm-6 wthree-about-left">
                    <img src="images1/plastic.jpg" class="img-responsive" alt="" />
                </div>
                <div class="col-md-6 col-sm-6 w3ls-row alert wthree-about-right">
                    <img src="images1/104.jpg" class="img-responsive" alt="" />
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>

        </div>
    </div>
    <!-- //about -->

    <!-- menu -->
    <div class="w3ls-services section-w3ls">
        <div class="container">
            <h3 class="w3ls-title">
                <span>P</span>roducts <span>&</span>    <span>S</span>ervices</h3>
            <div class="grid">
                <figure class="col-md-3 col-xs-6 w3l-service-hover">
                    <img src="images1/mah.jpg" alt="t1" class="img-responsive" />
                    <figcaption>
                    </figcaption>
                </figure>
                <figure class="col-md-3 col-xs-6  w3l-service-hover s2">
                    <img src="images1/sufyan.jpg" alt="t2" class="img-responsive" />
                    <figcaption>
                    
                    </figcaption>
                </figure>
                <figure class="col-md-3 col-xs-6 w3l-service-hover s3">
                    <img src="images1/mahnoor.jpg" alt="t1" class="img-responsive" />
                    <figcaption>
                     
                    </figcaption>
                </figure>
                <figure class="col-md-3 col-xs-6 w3l-service-hover s4">
                    <img src="images1/100.jpg" alt="t3" class="img-responsive" />
                    <figcaption>
                 
                    </figcaption>
                </figure>
                <div class="clearfix"></div>
                <figure class="col-md-3 col-xs-6  w3l-service-hover s2">
                    <img src="images1/101.jpg" alt="t2" class="img-responsive" />
                    <figcaption>
                      
                    </figcaption>
                </figure>
                <figure class="col-md-3 col-xs-6 w3l-service-hover s4">
                    <img src="images1/fan.jpg" alt="t3" class="img-responsive" />
                    <figcaption>
                   
                    </figcaption>
                </figure>

                <figure class="col-md-3 col-xs-6 w3l-service-hover">
                    <img src="images1/103.jpg" alt="t1" class="img-responsive" />
                    <figcaption>
                       
                    </figcaption>
                </figure>
                <figure class="col-md-3 col-xs-6 w3l-service-hover s3">
                    <img src="images1/104.jpg" alt="t1" class="img-responsive" />
                    <figcaption>
                  
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <!-- //menu -->
 
 
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
                            <a href="index.html">VS-Cycle</a>
                        </h2>
                        <h5 class="f1">about us</h5>
                        <p>Buy amazing decorative things from us & also sell your unworthy things</p>
                    </div>
                    <div class="col-md-6  w3_agile-footer1 f2">
                        <div class="col-md-4 col-sm-4 col-xs-4 inner-li">
                            <h5>Products</h5>
                            <ul class="w3ls-footer-bottom-list">
                                <li>
                                    <a class="page-scroll scroll" href="#about">Decoration Pieces</a>
                                </li>
                                <li>
                                    <a class="page-scroll scroll" href="#pricing">Jewellery
                                    </a>
                                </li>
                                <li>
                                    <a class="page-scroll scroll" href="#gallery">Desk Organizer</a>
                                </li>
                                <li>
                                    <a class="page-scroll scroll" href="#team">Sedutp</a>
                                </li>
                                <!-- <li>
                                    <a class="page-scroll scroll" href="#contact">undeo</a>
                                </li> -->
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 inner-li">
                            <h5>Recycling Services</h5>
                            <ul class="w3ls-footer-bottom-list">
                                <li>
                                    <a href="#">Plastic</a>
                                </li>
                                <li>
                                    <a href="#">Iron</a>
                                </li>
                                <li>
                                    <a href="#">Paper</a>
                                </li>
                                <li>
                                    <a href="#">Other Items</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 inner-li">
                            <h5>support</h5>
                            <ul class="w3ls-footer-bottom-list">
                                <li>
                                    <a href="#">suppport</a>
                                </li>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="#">media</a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3  w3_agile-footer1 f3">
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
            <div class="agileits_w3layouts-copyright">
                <p>© 2020 VS-Cycle Team
                    <a href="index.html" target="=_blank">VS-Cycle</a>
                </p>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- banner slider -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/jquery.zoomslider.min.js"></script>
    <!-- //banner slider -->
    <!-- //gallery -->
    <script src="js/jquery.tools.min.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/jquery.cm-overlay.js"></script>

    <script>
        $(document).ready(function () {
            $('.cm-overlay').cmOverlay();
        });
    </script>
    <!-- //gallery -->
    <!-- testimonials -->
    <!-- required-js-files-->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                items: 1,
                lazyLoad: true,
                autoPlay: false,
                navigation: true,
                navigationText: true,
                pagination: true,
            });
        });
    </script>
    <!--//required-js-files-->
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
  
    
    <script>
        $('#myModal').modal('show');
    </script>
   
</body>

</html>