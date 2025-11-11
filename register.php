
<?php   include ('code.php') ?>


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
            function validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
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
      
        <style>
              .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
</style>
    </head>
    
    <body>
      
        <div class="w3_agilits_banner_bootm">
         
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
                            <li class="m_nav_item menu__item" id="m_nav_item_1">
                                    <a href="index.php" class="menu__link"> Home </a>
                                </li>
                                <li class="m_nav_item menu__item " id="m_nav_item_1">
                                    <a href="Login.php" class="menu__link"> Login</a>
                                </li>
                                <li class="m_nav_item menu__item menu__item--current" id="m_nav_item_1">
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
        <div class="inner-bg"></div>
        <div class="heading " style="margin-top: 100px;">
            <div class="container ">
                <div class="row">
                    <h3 class="w3ls-title ">
                        <span>R</span>egistration <span>F</span>orm</h3>
                </div>
            </div>
        </div>
        
    
        <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
    
                </div>
                <div class="col-md-4 ">
                    <div class="signup-form">
                        <form action="index.php" method="post" onsubmit="return validate();">
                            <h2>Register</h2>
                            <p class="hint-text">Create your account. It's free and only takes a minute.</p>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
                                    <div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
                                </div>        	
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password"   name="password"  placeholder="Password" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required="required">
                            </div>        
                            <div class="form-group">
                                <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn  btn-lg btn-block" name="r_btn" style=" background-color: #e96147;color: #fff;" >Register Now</button>
                            </div>
                        </form>
                        <div class="text-center">Already have an account? <a href="login.php" style="color:green;">Sign in</a></div>
                    </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </div>
    
       
    
         <div class="agile-footer w3ls-section" style="margin-top: 100px;">
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
        
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/jquery.zoomslider.min.js"></script>
      
        <script src="js/jquery.tools.min.js"></script>
        <script src="js/jquery.mobile.custom.min.js"></script>
        <script src="js/jquery.cm-overlay.js"></script>
    
        <script>
            $(document).ready(function () {
                $('.cm-overlay').cmOverlay();
            });
        </script>
   
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
   
        <script>
            $(document).ready(function () {
         
    
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });
    
            });
        </script>
          <script src="js/SmoothScroll.min.js"></script>
        
          <script src="js/main.js"></script>
         
         
        </body>
        </html>
   
    