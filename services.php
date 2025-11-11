<?php   include ('code.php') ?>
<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'vs_cycle');
if(!$db){
    echo mysqli_error($connection);
}
if($_POST)
{
    $name=$_POST['name'];
$quan=$_POST['quantity'];
    $num=$_POST['phone_number'];
    $add=$_POST['address'];  
     $insert="insert into service(name,quantity,phone_number,address)values('$name','$quan','$num','$add')";
    $query=mysqli_query($connection,$insert);
    if(!$query){
      echo mysqli_error($connection);
    }
    else{
        echo "<script>alert('Rider will be its on way')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>VS-Cycle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
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
    <style>
     #popup{display:none;boarder:1px solid black;width:50%; height:200px;}
     #pop{display:none;boarder:1px solid black;width:50%; height:200px;}
     #up{display:none;boarder:1px solid black;width:50%; height:200px;}
      #mob{display:none;boarder:1px solid black;width:50%; height:200px;}
           #ile{display:none;boarder:1px solid black;width:50%; height:200px;}
           #mah{display:none;boarder:1px solid black;width:50%; height:200px;}
           #noor{display:none;boarder:1px solid black;width:50%; height:200px;}
           #hello{display:none;boarder:1px solid black;width:50%; height:200px;}
    </style>
</head>

<body>
    <!-- banner-inner -->
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
                        <li class="m_nav_item menu__item" id="m_nav_item_1">
                                <a href="home.php" class="menu__link"> Home </a>
                            </li>
                            <li class="m_nav_item menu__item menu__item--current" id="moble_nav_item_3">
                                <a href="services.php" class="menu__link">Services</a>
                            </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_4">
                                <a href="gallery.php" class="menu__link">Gallery</a>
                            </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_6">
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
    
    <div class=" w3ls-services section-w3ls">
        <div class="container">
            <h3 class="w3ls-title">
                <span>Sale</span>here</h3>
               <center> <h3> From the categories below, chose the items you want to sale</h3></center>
            <div class="grid">
                <figure class="col-md-3 col-xs-6 w3l-service-hover">
                    <img src="images1/g2.jpg" alt="t1" class="img-responsive" />
                    <figcaption onclick="document.getElementById('popup').style.display='block'">
                        <h4>Paper</h4>

                        <div id="popup" >
                             <form action="#" method="post" style="color:black;">
                             <input type="varchar" class="" name="name" placeholder="Name of Product" required="">
                        <input type="varchar" class="quantity" name="quantity" placeholder="quantity" required=""><br>
                    
                    
                        <input type="int" class="" name="phone_number" placeholder="phone_number" required="">
                    
                    
                        <input type="varchar" class="name" name="address" placeholder="address" required=""><br>
                         <input type="submit" value="submit" name="submit" style="    width: 211%;background-color:#d66047;color:#fff;">
                    
                      
                    
                </form>
                         
                            
                        </div>
                    </figcaption>
                   
                        
                </figure>
                <figure class="col-md-3 col-xs-6  w3l-service-hover s2">
                    <img src="images1/g3.jpg" alt="t2" class="img-responsive" />
                    <figcaption onclick="document.getElementById('mob').style.display='block'">
                        <h4>Cardborad</h4>
                        <div id="mob">
                             <form action="#" method="post" style="color:black;">
                    
                        
                    
                             <input type="varchar" class="" name="name" placeholder="Name of Product" required="">
                        <input type="varchar" class="quantity" name="quantity" placeholder="quantity" required=""><br>
                    
                    
                        <input type="int" class="" name="phone_number" placeholder="phone_number" required="">
                    
                    
                        <input type="varchar" class="name" name="address" placeholder="address" required=""><br>
                         <input type="submit" value="submit" name="submit" style="    width: 211%;background-color:#d66047;color:#fff;">
                    
                      
                    
                </form>
                        
                            
                        </div>
                    </figcaption>
                </figure>
                <figure class="col-md-3 col-xs-6 w3l-service-hover s3">
                    <img src="images1/g1.jpg" alt="t1" class="img-responsive" />
                    <figcaption onclick="document.getElementById('ile').style.display='block'">
                        <h4>Plastic</h4>
                        <div id="ile">
                             <form action="#" method="post" style="color:black;">
                             <input type="varchar" class="" name="name" placeholder="Name of Product" required="">
                        <input type="varchar" class="quantity" name="quantity" placeholder="quantity" required=""><br>
                    
                    
                        <input type="int" class="" name="phone_number" placeholder="phone_number" required="">
                    
                    
                        <input type="varchar" class="name" name="address" placeholder="address" required=""><br>
                         <input type="submit" value="submit" name="submit"style="    width: 211%;background-color:#d66047;color:#fff;" >
                    
                      
                    
                </form>
                        
                            
                        </div>
                    </figcaption>
                </figure>
                <figure class="col-md-3 col-xs-6 w3l-service-hover s4">
                    <img src="images1/g4.jpg" alt="t3" class="img-responsive" />
                    <figcaption onclick="document.getElementById('mah').style.display='block'">
                        <h4>Fabric</h4>
                        <div id="mah">
                             <form action="#" method="post" style="color:black;">
                    
                             <input type="varchar" class="" name="name" placeholder="Name of Product" required="">
                    
                    
                        <input type="varchar" class="quantity" name="quantity" placeholder="quantity" required=""><br>
                    
                    
                        <input type="int" class="" name="phone_number" placeholder="phone_number" required="">
                    
                    
                        <input type="varchar" class="name" name="address" placeholder="address" required=""><br>
                         <input type="submit" value="submit" name="submit" style="    width: 211%;background-color:#d66047;color:#fff;">
                    
                      
                    
                </form>
                        
                            
                        </div>
                    </figcaption>
                </figure>
                <div class="clearfix"></div>
                <figure class="col-md-3 col-xs-6  w3l-service-hover s2">
                    <img src="images1/g6.jpg" alt="t2" class="img-responsive" />
                    <figcaption onclick="document.getElementById('noor').style.display='block'">
                        <h4>Glass</h4>
                        <div id="noor">
                             <form action="#" method="post" style="color:black;">
                    
                        
                             <input type="varchar" class="" name="name" placeholder="Name of Product" required="">
                    
                        <input type="varchar" class="quantity" name="quantity" placeholder="quantity" required=""><br>
                    
                    
                        <input type="int" class="" name="phone_number" placeholder="phone_number" required="">
                    
                    
                        <input type="varchar" class="name" name="address" placeholder="address" required=""><br>
                         <input type="submit" value="submit" name="submit" style="    width: 211%;background-color:#d66047;color:#fff;">
                    
                      
                    
                </form>
                        
                            
                        </div>
                    </figcaption>
                </figure>
                <figure class="col-md-3 col-xs-6 w3l-service-hover s4">
                    <img src="images1/g7.jpg" alt="t3" class="img-responsive" />
                    <figcaption onclick="document.getElementById('hello').style.display='block'">
                        <h4>Wood</h4>
                        <div id="hello">
                             <form action="#" method="post" style="color:black;">
                    
                        
                             <input type="varchar" class="" name="name" placeholder="Name of Product" required="">
                    
                        <input type="varchar" class="quantity" name="quantity" placeholder="quantity" required=""><br>
                    
                    
                        <input type="int" class="" name="phone_number" placeholder="phone_number" required="">
                    
                    
                        <input type="varchar" class="name" name="address" placeholder="address" required=""><br>
                         <input type="submit" value="submit" name="submit" style="    width: 211%;background-color:#d66047;color:#fff;">
                    
                      
                    
                </form>
                        
                            
                        </div>
                    </figcaption>
                </figure>

                <figure class="col-md-3 col-xs-6 w3l-service-hover">
                    <img src="images1/g8.jpg" alt="t1" class="img-responsive" />
                    <figcaption onclick="document.getElementById('up').style.display='block'">
                        <h4>Rubber</h4>
                        <div id="up">
                             <form action="#" method="post" style="color:black;">
                    
                             <input type="varchar" class="" name="name" placeholder="Name of Product" required="">
                    
                    
                        <input type="varchar" class="quantity" name="quantity" placeholder="quantity" required=""><br>
                    
                    
                        <input type="int" class="" name="phone_number" placeholder="phone_number" required="">
                    
                    
                        <input type="varchar" class="name" name="address" placeholder="address" required=""><br>
                         <input type="submit" value="submit" name="submit" style="    width: 211%;background-color:#d66047;color:#fff;">           
                    
                </form>              </div>
                    </figcaption>
                </figure>
                <figure class="col-md-3 col-xs-6 w3l-service-hover s3">
                    <img src="images1/g9.jpg" alt="t1" class="img-responsive" />
                    <figcaption onclick="document.getElementById('pop').style.display='block'">
                        <h4>Others</h4>
                        <div id="pop">
                             <form action="#" method="post" style="color:black;">
                    
                        
                             <input type="varchar" class="" name="name" placeholder="Name of Product" required="">
                    
                        <input type="varchar" class="quantity" name="quantity" placeholder="quantity" required=""><br>
                    
                    
                        <input type="int" class="" name="phone_number" placeholder="phone_number" required="">
                    
                    
                        <input type="varchar" class="name" name="address" placeholder="address" required=""><br>
                         <input type="submit" value="submit" name="submit" style="    width: 211%;background-color:#d66047;color:#fff;">
                    
                      
                    
                </form>
                        
                            
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <!-- //menu -->






    <!-- services -->
    <div class="panel-sec section-w3ls">
        <div class="container">
            <h3 class="agileits-title"> Rate List</h3>
            <!-- timings -->
            <div class="w3l-about timing">
                <div class="col-md-4 w3_service_bottom_grid1">
                    <div class="about-w3left">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h5 class="panel-title asd">
                                        <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            <i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Paper
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false"
                                    style="height: 0px;">
                                    <div class="panel-body panel_text">
                                        <ul class="b-list">
                                            <li>A1 Quality 1kg=50Rs. </li>
                                            <li>Damaged 1kg=25Rs.</li>
                                            <li>Magazine 1kg=100Rs.</li>
                                            <li>Scripts 1kg=100Rs.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h5 class="panel-title asd">
                                        <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            <i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Cardboard
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false"
                                    style="height: 0px;">
                                    <div class="panel-body panel_text">
                                        <ul class="b-list">
                                            <li> A1 Quality 1kg=100Rs. </li>
                                            <li>Damaged 1kg=50Rs. </li>
                                            <li>Thick board 1k=200Rs.</li>
                                            <li>Thin board 1kg=100Rs.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h5 class="panel-title asd">
                                        <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            <i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Plastic
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false"
                                    style="height: 0px;">
                                    <div class="panel-body panel_text">
                                        <ul class="b-list">
                                            <li> Thick 1kg=250Rs. </li>
                                            <li>Thin 1k=200Rs. </li>
                                            <li>Shaped 1kg=300Rs.</li>
                                            <li>Deformed 1kg=200Rs.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h5 class="panel-title asd">
                                        <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true"
                                            aria-controls="collapseFour">
                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            <i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Fabric
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour" aria-expanded="true">
                                    <div class="panel-body panel_text">
                                        <ul class="b-list">
                                            <li>Cotton 1k=300Rs.</li>
                                            <li>Fur 1kg=500Rs. </li>
                                            <li>Jean 1kg=500Rs.</li>
                                            <li>Velvet 1kg=400Rs.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 timing-col">
                    <div class="col-md-7 agile_timing_right">
                        <h4>For other items</h4>
                        <ul>
                            <li>
                                <span>Contact us through our page between</span>: 11:00 AM - 10:00 PM</li>
                            <li>
                                <span>Saturday-Sunday</span>: 10:00 PM - 11:00 PM</li>
                        </ul>
                    </div>
                    <div class="col-md-5 menu-bg"></div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //timings -->
    </div>
    <!-- //services -->
    <!-- services bottom -->
    
            <div class="clearfix"> </div>
        </div>
    </div>
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
                        <p>Buy amazing recycled items from us and also sale your unworthy items</p>
                    </div>
                    <div class="col-md-6  w3_agile-footer1 f2">
                        <div class="col-md-4 col-sm-4 col-xs-4 inner-li">
                            <h5>Products</h5>
                            <ul class="w3ls-footer-bottom-list">
                                <li>
                                    <a class="page-scroll scroll" href="#about">Decoration Pieces</a>
                                </li>
                                <li>
                                    <a class="page-scroll scroll" href="#pricing">Jewellery</a>
                                </li>
                                <li>
                                    <a class="page-scroll scroll" href="#gallery">Desk Organizer</a>
                                </li>
                                <li>
                                    <a class="page-scroll scroll" href="#team">Bags</a>
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
                <p>2020 VS-Cycle Team
                    <a href="http://w3layouts.com/" target="=_blank">VS-Cycle </a>
                </p>
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