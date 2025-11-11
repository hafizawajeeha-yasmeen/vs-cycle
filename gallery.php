<?php   include ('code.php') ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>vs_cycle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="vs_cycle Products & services" />
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
    <!-- <link href="css/style.css" type="text/css" rel="stylesheet" media="all"> -->
    <link href="css/stylegallery.css" type="text/css" rel="stylesheet" media="all">
  
    <!--gallery -->
    <link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
    <!-- //gallery -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //web-fonts -->
    <script >
		function calculate()
{
        tp = document.getElementById("firstNumber").value;
        t = document.getElementById("secondNumber").value;
        s=document.getElementById("result").innerHTML = t - tp;
        if(tp==1000){
            document.getElementById("discount").innerHTML="5%";
       s=[tp-(tp/100)*5];

         document.getElementById("remaining").innerHTML=s;
        }else if(tp>1000&&tp<=2000){
    document.getElementById("discount").innerHTML="10%";
    s=[tp-(tp/100)*10];
         document.getElementById("remaining").innerHTML=s;
        }
        else if(tp>2000){
    document.getElementById("discount").innerHTML="15%";
    s=[tp-(tp/100)*15];

         document.getElementById("remaining").innerHTML=s;
        }
        else{
    document.getElementById("discount").innerHTML="0%";
       s=[tp-(tp/100)*0];
         document.getElementById("remaining").innerHTML=s;
        }

}
	</script>
    <style>
    .container_open{
    display: block;
    z-index: 2;
    height: 58%;}
    </style>
    <style type="text/css">
.form-style-8{
	font-family: 'Open Sans Condensed', arial, sans;
	width: 500px;
	padding: 30px;
	background: #FFFFFF;
	margin: 50px auto;
	box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
.form-style-8 h2{
	background: #4D4D4D;
	text-transform: uppercase;
	font-family: 'Open Sans Condensed', sans-serif;
	color: #ffff;
	font-size: 18px;
	font-weight: 100;
	padding: 20px;
	margin: -30px -30px 30px -30px;
}
.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 input[type="datetime"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="search"],
.form-style-8 input[type="time"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	outline: none;
	display: block;
	width: 100%;
	padding: 7px;
	border: none;
	border-bottom: 1px solid #ddd;
	background: transparent;
	margin-bottom: 10px;
	font: 16px Arial, Helvetica, sans-serif;
	height: 45px;
}
.form-style-8 textarea{
	resize:none;
	overflow: hidden;
}
.form-style-8 input[type="button"], 
.form-style-8 input[type="submit"]{
	-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	box-shadow: inset 0px 1px 0px 0px #45D6D6;
	background-color: #2CBBBB;
	border: 1px solid #27A0A0;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	font-family: 'Open Sans Condensed', sans-serif;
	font-size: 14px;
	padding: 8px 18px;
	text-decoration: none;
	text-transform: uppercase;
}
.form-style-8 input[type="button"]:hover, 
.form-style-8 input[type="submit"]:hover {
	
	background-color:#0000;
    
}
</style>

</head>

<body>
    <!-- banner inner-->
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
                        <li class="m_nav_item menu__item" id="m_nav_item_1">
                                <a href="index.php" class="menu__link"> Home </a>
                            </li>
                            <li class="m_nav_item menu__item " id="moble_nav_item_3">
                                <a href="services.php" class="menu__link">Services</a>
                            </li>
                            <li class="m_nav_item menu__item menu__item--current" id="moble_nav_item_3">
                                <a href="gallery.php" class="menu__link">Gallery</a>
                            </li>
                            <li class="m_nav_item menu__item " id="moble_nav_item_4">
                                <a href="contact.php" class="menu__link">Contact</a>
                            </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_6">
                                <a href="logout.php" class="menu__link"> Logout </a>
                            </li>
                            <li>
                            <form action="#" method="post" class="last">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="display" value="1" />
                                <button class="w3view-cart" type="submit" name="submit" value="">view cart
                                    <span class="fa fa-cart-arrow-down" aria-hidden="true"></span>
                                </button>
                            </form></li>
                            
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
                        <i class="fa fa-phone" aria-hidden="true"></i>+920000000000 </li>
                    <li>
                        <i class="fa fa-envelope-o list-icon" aria-hidden="true"></i>
                        <a href="mailto:info@example.com">vs-cycle@gmail.com</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="inner-bg"></div>
    <!--/banner-inner-->
    <!-- gallery -->
    
    
    
    <div class="section-w3ls agileits-gallery text-center" id="portfolio">
        <div class="container">
            <h3 class="w3ls-title">
                
                <span>D</span>ecoration <span>P</span>ieces</h3>
                <div class="top-grid">
            <div class="gallery-w3layouts">
                <div class="col-sm-3 w3_tab_img_left">
                   
                        <div class="cart-grid" id="cart-1">  </div>
                        <a class="cm-overlay" href="images1/2.jpg">
                            <figure class="imghvr-shutter-in-out-diag-2">
                                <img src="images1/2.jpg" alt=" " class="img-responsive"/>
                            </figure>
                        </a>
                   


                  <div class="agile-gallery-info">
                        <h5>Flower Cycles</h5>
                        <ul class="info">
							<li>$60.00</li>
							<li class="right-text">$115.00</li>
						</ul>
                        <div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #001" />
								<button type="submit" class="button w3l-cart" data-id="cart-1">add to cart</button>
							</form>
						</div>
                    </div>
                </div></div>

                <div class="col-sm-3 w3_tab_img_left">
                    <div class="demo">
                        <div class="cart-grid" id="cart-2"></div>
                        <a class="cm-overlay" href="images1/6.jpg">
                            <figure class="imghvr-shutter-in-out-diag-2">
                                <img src="images1/6.jpg" alt=" " class="img-responsive" />
                            </figure>
                        </a>
                    </div>
                    <div class="agile-gallery-info">
                        <h5>Candle Piece</h5>
                        <ul class="info">
							<li>$50.00</li>
							<li class="right-text">$115.00</li>
                        </ul>
                        <div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #002" />
								<button type="submit" class="button w3l-cart" data-id="cart-2">add to cart</button>
							</form>
						</div>
                    </div>
                </div>


                <div class="col-sm-3 w3_tab_img_left">
                    <div class="demo">
                        <a class="cm-overlay" href="images1/5.jpg">
                            <figure class="imghvr-shutter-in-out-diag-2">
                                <img src="images1/5.jpg" alt=" " class="img-responsive"  />
                            </figure>
                        </a>
                    </div>
                    <div class="agile-gallery-info">
                        <h5>Equipage</h5>
                        <ul class="info">
							<li>$60.00</li>
							<li class="right-text">$115.00</li>
						</ul>
                      <div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #003" />
								<button type="submit" class="button w3l-cart" data-id="cart-3">add to cart</button>
							</form>
						</div>
                    </div>
                </div>
                <div class="col-sm-3 w3_tab_img_left">
                    <div class="demo">
                        <a class="cm-overlay" href="images1/4.jpg">
                            <figure class="imghvr-shutter-in-out-diag-2">
                                <img src="images1/4.jpg" alt=" " class="img-responsive" />
                            </figure>
                        </a>
                    </div>
                    <div class="agile-gallery-info">
                        <h5>House</h5>
                        <ul class="info">
							<li>$60.00</li>
							<li class="right-text">$115.00</li>
						</ul>
                        <div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #004" />
								<button type="submit" class="button w3l-cart" data-id="cart-4">add to cart</button>
							</form>
						</div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-3 w3_tab_img_left">
                    <div class="demo">
                        <a class="cm-overlay" href="images1/8.jpg">
                            <figure class="imghvr-shutter-in-out-diag-2">
                                <img src="images1/8.jpg" alt=" " class="img-responsive" />
                            </figure>
                        </a>
                    </div>
                    <div class="agile-gallery-info">
                        <h5>Balloon Candles</h5>
                        <ul class="info">
							<li>$60.00</li>
							<li class="right-text">$115.00</li>
						</ul>
                        <div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #005" />
								<button type="submit" class="button w3l-cart" data-id="cart-5">add to cart</button>
							</form>
						</div>
                    </div>
                </div>
                <div class="col-sm-3 w3_tab_img_left">
                    <div class="demo">
                        <a class="cm-overlay" href="images1/11.jpg">
                            <figure class="imghvr-shutter-in-out-diag-2">
                                <img src="images1/11.jpg" alt=" " class="img-responsive" />
                            </figure>
                        </a>
                    </div>
                    <div class="agile-gallery-info">
                        <h5>Golden Vase</h5>
                        <ul class="info">
							<li>$60.00</li>
							<li class="right-text">$115.00</li>
						</ul>
                        <div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #006" />
								<button type="submit" class="button w3l-cart" data-id="cart-6">add to cart</button>
							</form>
						</div>
                    </div>
                </div>
                <div class="col-sm-3 w3_tab_img_left">
                    <div class="demo">
                        <a class="cm-overlay" href="images1/12.jpg">
                            <figure class="imghvr-shutter-in-out-diag-2">
                                <img src="images1/12.jpg" alt=" " class="img-responsive" />
                            </figure>
                        </a>
                    </div>
                    <div class="agile-gallery-info">
                       <h5>Candles</h5>
                       <ul class="info">
                        <li>$60.00</li>
                        <li class="right-text">$115.00</li>
                    </ul>
                    <div class="snipcart-details ">
                        <form action="#" method="post">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="w3l_item" value="Striped Top ">
                            <input type="hidden" name="amount" value="25.00">
                            <input type="hidden" name="item_name" value="Product #007" />
                            <button type="submit" class="button w3l-cart" data-id="cart-7">add to cart</button>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3 w3_tab_img_left">
                    <div class="demo">
                        <a class="cm-overlay" href="images1/13.jpg">
                            <figure class="imghvr-shutter-in-out-diag-2">
                                <img src="images1/13.jpg" alt=" " class="img-responsive" />
                            </figure>
                        </a>
                    </div>
                    <div class="agile-gallery-info">
                        <h5>Tables Decore</h5>
                        <ul class="info">
							<li>$60.00</li>
							<li class="right-text">$115.00</li>
						</ul>
                        <div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #008" />
								<button type="submit" class="button w3l-cart" data-id="cart-8">add to cart</button>
							</form>
						</div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="section-w3ls agileits-gallery text-center" id="portfolio">
        <div class="container">
            <h3 class="w3ls-title">
                <span>H</span>andmade<span>J</span>ewellery</h3>
                <div class="gallery-w3layouts">
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                            
                            <div class="cart-grid" id="cart-1"></div>
                            <a class="cm-overlay" href="images1/j1.jpeg">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/j1.jpeg" alt=" " class="img-responsive"/>
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>Necklace</h5>
                            <ul class="info">
                                <li>$6.00</li>
                                <li class="right-text">$15.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="6.00">
                                    <input type="hidden" name="item_name" value="Product #009" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-1">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                            
                            <a class="cm-overlay" href="images1/j2.jpg">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/j2.jpg" alt=" " class="img-responsive" />
                                </figure>
                                
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>Bali earrings</h5>
                            <ul class="info">
                                <li>$5.00</li>
                                <li class="right-text">$15.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="5.00">
                                    <input type="hidden" name="item_name" value="Product #010" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-2">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                           
                            <a class="cm-overlay" href="images1/j3.jpg">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/j3.jpg" alt=" " class="img-responsive"  />
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>jewelry set</h5>
                            <ul class="info">
                                <li>$15.00</li>
                                <li class="right-text">$30.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="15.00">
                                    <input type="hidden" name="item_name" value="Product #011" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-3">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                           
                            <a class="cm-overlay" href="images1/j4.jpeg">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/j4.jpeg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>Cuff bracelet</h5>
                            <ul class="info">
                                <li>$5.00</li>
                                <li class="right-text">$15.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="5.00">
                                    <input type="hidden" name="item_name" value="Product #012" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-4">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                            
                            <a class="cm-overlay" href="images1/j5.png">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/j5.png" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>Bangles</h5>
                            <ul class="info">
                                <li>$10.00</li>
                                <li class="right-text">$20.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="10.00">
                                    <input type="hidden" name="item_name" value="Product #013" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-5">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                            
                            <a class="cm-overlay" href="images1/j6.jpg">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/j6.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>Blue Bracelet</h5>
                            <ul class="info">
                                <li>$15.00</li>
                                <li class="right-text">$25.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="15.00">
                                    <input type="hidden" name="item_name" value="Product #014" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-6">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                            
                            <a class="cm-overlay" href="images1/j7.jpg">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/j7.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>Small Bracelets</h5>
                            <ul class="info">
                                <li>$30.00</li>
                                <li class="right-text">$60.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="30.00">
                                    <input type="hidden" name="item_name" value="Product #015" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-7">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                            
                            <a class="cm-overlay" href="images1/j8.webp">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/j8.webp" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>Necklace</h5>
                            <ul class="info">
                                <li>$20.00</li>
                                <li class="right-text">$50.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="20.00">
                                    <input type="hidden" name="item_name" value="Product #016" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-8">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
    <div class="section-w3ls agileits-gallery text-center" id="portfolio">
        <div class="container">
            <h3 class="w3ls-title">
                <span>D</span>esk<span>O</span>rganizer</h3>
                <div class="gallery-w3layouts">
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                           
                            <a class="cm-overlay" href="images1/d1.jpg">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/d1.jpg" alt=" " class="img-responsive"/>
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>Wood Box</h5>
                            <ul class="info">
                                <li>$20.00</li>
                                <li class="right-text">$40.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="20.00">
                                    <input type="hidden" name="item_name" value="Product #017" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-1">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                            
                            <a class="cm-overlay" href="images1/d2.jpg">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/d2.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>Stationary Box</h5>
                            <ul class="info">
                                <li>$15.00</li>
                                <li class="right-text">$30.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="15.00">
                                    <input type="hidden" name="item_name" value="Product #018" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-2">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                            
                            <a class="cm-overlay" href="images1/d3.jpg">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/d3.jpg" alt=" " class="img-responsive"  />
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>Color Box</h5>
                            <ul class="info">
                                <li>$10.00</li>
                                <li class="right-text">$30.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="10.00">
                                    <input type="hidden" name="item_name" value="Product #019" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-3">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                            
                            <a class="cm-overlay" href="images1/d4.jpg">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/d4.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>Blue St-Box</h5>
                            <ul class="info">
                                <li>$15.00</li>
                                <li class="right-text">$40.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="15.00">
                                    <input type="hidden" name="item_name" value="Product #020" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-4">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                           
                            <a class="cm-overlay" href="images1/d5.webp">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/d5.webp" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>Box pairs</h5>
                            <ul class="info">
                                <li>$10.00</li>
                                <li class="right-text">$30.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="10.00">
                                    <input type="hidden" name="item_name" value="Product #021" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-5">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                           
                            <a class="cm-overlay" href="images1/d6.jpg">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/d6.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>Book Organizer</h5>
                            <ul class="info">
                                <li>$15.00</li>
                                <li class="right-text">$30.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="15.00">
                                    <input type="hidden" name="item_name" value="Product #021" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-6">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                            
                            <a class="cm-overlay" href="images1/d7.jpg">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/d7.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>White Wood Box</h5>
                            <ul class="info">
                                <li>$30.00</li>
                                <li class="right-text">$50.00</li>
                            </ul>
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="30.00">
                                    <input type="hidden" name="item_name" value="Product #022" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-6">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 w3_tab_img_left">
                        <div class="demo">
                           
                            <a class="cm-overlay" href="images1/d8.webp">
                                <figure class="imghvr-shutter-in-out-diag-2">
                                    <img src="images1/d8.webp" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                        <div class="agile-gallery-info">
                            <h5>Mobile Hold Box</h5>
                            <ul class="info">
                                <li>$20</li>
                                <li class="right-text">$40</li>
                            </ul>
                            
                            <div class="snipcart-details ">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3l_item" value="Striped Top ">
                                    <input type="hidden" name="amount" value="20.00">
                                    <input type="hidden" name="item_name" value="Product #023" />
                                    <button type="submit" class="button w3l-cart" data-id="cart-7">add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
        

   
    <!-- /gallery -->

    <div class="form-style-8">
  <h2>Invoice Generate</h2>
 Enter total price: <input type="text" id="firstNumber" /><br>
Enter payment: <input type="text" id="secondNumber" /><br>
<center><input type="button" onClick="calculate()" Value="Submit" style="background-color:#e96147;color:#fff"/><center>
</form>
<br>
<p style="color:#000">Before discount : 
<span id = "result"></span>
</p>
<p style="color:#000">The discount is : 
<span id = "discount"></span>
</p>
<p style="color:#000">After discount : 
<span id = "remaining"></span>
</p>
</div>


    
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
                            <a href="index.html">Beverages</a>
                        </h2>
                        <h5 class="f1">about us</h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem atus error sit volupt unde omnis iste
                            iatis un.</p>
                    </div>
                    <div class="col-md-6  w3_agile-footer1 f2">
                        <div class="col-md-4 col-sm-4 col-xs-4 inner-li">
                            <h5>Drink</h5>
                            <ul class="w3ls-footer-bottom-list">
                                <li>
                                    <a class="page-scroll scroll" href="#about">volupta</a>
                                </li>
                                <li>
                                    <a class="page-scroll scroll" href="#pricing">omnis</a>
                                </li>
                                <li>
                                    <a class="page-scroll scroll" href="#gallery">iatis</a>
                                </li>
                                <li>
                                    <a class="page-scroll scroll" href="#team">Sedutp</a>
                                </li>
                                <li>
                                    <a class="page-scroll scroll" href="#contact">undeo</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 inner-li">
                            <h5>buy online</h5>
                            <ul class="w3ls-footer-bottom-list">
                                <li>
                                    <a href="#">iste</a>
                                </li>
                                <li>
                                    <a href="#">perspi</a>
                                </li>
                                <li>
                                    <a href="#">natus</a>
                                </li>
                                <li>
                                    <a href="#">atisu</a>
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
                <p>© 2018 Beverages. All Rights Reserved | Design by
                    <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a>
                </p>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- //gallery -->
    
    <script src="js/minicart.min.js"></script>
	<script>
		// Mini Cart
		paypal1.minicart1.render({ //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js
			action: '#q'
		});

		if (~window.location.search.indexOf('reset=true')) {
			paypal1.minicart1.reset();
		}
    </script>
    <script src="js/jquery.tools.min.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/jquery.cm-overlay.js"></script>
    <script>
        $(document).ready(function () {
            $('.cm-overlay').cmOverlay();
        });
    </script>
    <!-- //gallery -->
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