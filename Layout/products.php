<!DOCTYPE html>
<?php
include "../Admin/connect.php";
?>
<html>
<head>
    <!-- Meta Files -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Style Files -->
    <link href="Css/bootstrap.min.css" rel="stylesheet">
    <link href="Css/index.css" rel="stylesheet" />
    <link href="Css/products.css" rel="stylesheet" />

    <!-- Scripting Files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="JS/jquery-3.1.1.min.js"></script>
    <script src="JS/jquery.easing.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/index.js"></script>
    <script src="JS/products.js"></script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!--=================================== Navigatin Bar ================================-->

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="container">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Technology</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                   
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="Images/logos/Tecnoshop3.png" height="30" width="200" class="logo" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="home.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="products.php">Products</a>
                    </li>
                </ul>

                <!--form class="navbar-form navbar-left">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" size="10">
                  </div>
                  <button type="submit" class="btn btn-default">Go</button>
                </!--form-->

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--/.navigation bar -->

     <!--Cover photo-->
    <img src="Images/Covers/cover.jpg" class="cover" height="550">
    <!--================================ Carousel====================================== >
    <div class="container-fluid" style="margin-top: 100px">
        <section class="row">
            <div id="img" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#img" data-slide-to="0" class="active"></li>
                    <li data-target="#img" data-slide-to="1"></li>
                    <li data-target="#img" data-slide-to="2"></li>

                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="Images/slideshow/laptopsales.jpg" style="width: 100%; height: 400px" />
                        <div class="carousel-caption"></div>
                    </div>

                    <div class="item">
                        <img src="Images/slideshow/mobilesales.jpg" style="width: 100%; height: 400px" />
                        <div class="carousel-caption"></div>
                    </div>

                    <div class="item">
                        <img src="Images/slideshow/tabletsales.jpg" style="width: 100%; height: 400px" />
                        <div class="carousel-caption"></div>
                    </div>


                </div>

                <!-- Arrows Navigator >
                <a class="left carousel-control" href="#img" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#img" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

                    </div>
        </section>
    </div>
                <!-- End Arrows Navigator -->
    <!--End Slideshow-->
    <!--================================ Search ======================================= -->

    <div class="container search">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group" id="adv-search">
                    <input type="text" class="form-control" placeholder="Search for snippets" />
                    <div class="input-group-btn">
                        <div class="btn-group" role="group">
                            <div class="dropdown dropdown-lg">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="filter">Filter by</label>
                                            <select class="form-control">
                                                <option value="0" selected>All Snippets</option>
                                                <option value="1">Most popular</option>
                                                <option value="2">On Sale</option>
                                                <option value="2">Most recent</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="contain">Price</label>
                                            <span id="price"></span>
                                            <input id="slider" type="range" min="0" max="500" step="10" />

                                        </div>


                                        <!--div class="form-group">
                                        <label for="contain">Contains the words</label>
                                        <input class="form-control" type="text" />
                                      </!--div-->
                                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                    </form>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End Search-->

    <!--======================================Products===============================-->
    <div class="container">

        <div class="col-md-8 ">
            <h2 class="p4 section">Products</h2>
            <div class="container">
                <!--First product-->
				<div class="row product">
				    <!--div class="product-top"-->
					<div class="col-md-10">
                        <div class="col-md-3 product-left ">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="buy.html" class="mask">
                                    <img class="img-responsive zoom-img" src="images/images/lab4.png" alt="" /></a>
                                <div class="product-bottom">
                                    <div class="row">
                                        <h3>Dell Laptop</h3>
                                    </div>
                                    <p>Model 2012</p>
                                    <h4><a>
                                        <img src="images/images/cart-2.png" alt="" class="cart-img"></a><span class=" item_price">4000 LE</span></h4>
                                </div>
                                <!--/.product_bottom-->
                            </div>
                            <!--/.product-main-->
                        </div>
                        <!--/.col-->
						<!--Second Product-->
						<div class="col-md-3 product-left ">
							<div class="product-main simpleCart_shelfItem">
								<a href="buy.html" class="mask">
									<img class="img-responsive zoom-img" src="images/images/lab5.png" alt="" /></a>
								<div class="product-bottom">
									<div class="row">
										<h3>Hp Laptop</h3>
									</div>
									<p>Model 2014</p>
									<h4><a>
										<img src="images/images/cart-2.png" alt="" class="cart-img"></a> <span class=" item_price">5000 LE</span></h4>
								</div>
								<!--/.product_bottom-->
							</div>
							<!--/.product-main-->
						</div>
						<!--/.col-->
	
						<!--Third Product -->
						<div class="col-md-3 product-left ">
							<div class="product-main simpleCart_shelfItem">
								<a href="buy.html" class="mask">
									<img class="img-responsive zoom-img" src="images/images/lab6.png" alt="" /></a>
								<div class="product-bottom">
									<h3 class="pro">Apple Laptop</h3>
									<p class="row">Model 2015</p>
									<h4><a>
										<img src="images/images/cart-2.png" alt="" class="cart-img"></a> <span class=" item_price">10000 LE</span></h4>
								</div>
								<!--/.product_bottom-->
							</div>
							<!--/.product-main-->
						</div>
						<!--/.col-->
	
						<!--Fourth Product-->
						<div class="col-md-3 product-left ">
							<div class="product-main simpleCart_shelfItem">
								<a href="buy.html" class="mask">
									<img class="img-responsive zoom-img" src="images/images/lab7.jpg" alt="" /></a>
								<div class="product-bottom">
									<div class="row">
										<h3>Toshiba Laptop</h3>
									</div>
									<p>Model 2010</p>
									<h4><a>
										<img src="images/images/cart-2.png" alt="" class="cart-img"></a> <span class=" item_price">7000 LE</span></h4>
								</div>
								<!--/.product_bottom-->
							</div>
							<!--/.product-main-->
						</div>
						<!--/.col-->
						
					</div>
					<!--/.col-md-10-->

                </div>
				<!--/.First product-->
				<!--/.product-top-->

                <!--Second Product -->
                <div class="row product">
                    <div class="col-md-10">
						<!--First Product-->
                        <div class="col-md-3 product-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="buy.html" class="mask">
                                    <img class="img-responsive zoom-img" src="images/images/lab8.jpg" alt="" /></a>
                                <div class="product-bottom">
                                    <div class="row">
                                        <h3>Acer Laptop</h3>
                                    </div>
                                    <p>Model 2011</p>
                                    <h4><a>
                                        <img src="images/images/cart-2.png" class="cart-img" alt=""></a> <span class=" item_price">8000 LE</span></h4>
                                </div>
                                <!--/.product_bottom-->
                            </div>
                            <!--/.product-main-->
                        </div>
                        <!--/.col-->

                        <!--Second Product-->
                        <div class="col-md-3 product-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="buy.html" class="mask">
                                    <img class="img-responsive zoom-img" src="images/images/lab9.png" alt="" /></a>
                                <div class="product-bottom">
                                    <div class="row">
                                        <h3>SONY Laptop</h3>
                                    </div>
                                    <p>Model 2015</p>
                                    <h4><a>
                                        <img src="images/images/cart-2.png" alt="" class="cart-img"></a> <span class=" item_price">9000 LE</span></h4>
                                </div>
                                <!--/.product_bottom-->
                            </div>
                            <!--/.product-main-->
                        </div>
                        <!--/.col-->

                        <!--Third Product-->
                        <div class="col-md-3 product-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="buy.html" class="mask">
                                    <img class="img-responsive zoom-img" src="images/images/lab10.jpg" alt="" /></a>
                                <div class="product-bottom">
                                    <div class="row">
                                        <h3>VIO Laptop</h3>
                                    </div>
                                    <p>Model 2014</p>
                                    <h4><a>
                                        <img src="images/images/cart-2.png" alt="" class="cart-img"></a> <span class=" item_price">11000</span></h4>
                                </div>
                                <!--/.product_bottom-->
                            </div>
                            <!--/.product-main-->
                        </div>
                        <!--/.col-->

                        <!--Fourth Product-->
                        <div class="col-md-3 product-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="buy.html" class="mask">
                                    <img class="img-responsive zoom-img" src="images/images/lab11.png" alt="" /></a>
                                <div class="product-bottom">
                                    <div class="row">
                                        <h3>Lenovo laptop</h3>
                                    </div>
                                    <p>Explore now</p>
                                    <h4><a>
                                        <img src="images/images/cart-2.png" alt="" class="cart-img"></a> <span class=" item_price">12000 LE</span></h4>
                                </div>
                                <!--/.product_bottom-->
                            </div>
                            <!--/.product-main-->
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.col-md-10-->
                </div>
                <!--/.Second product-->
                <!--nav aria-label="..." style="margin-left:400px">
                  <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li ><a href="#">1 <span class="sr-only"></span></a></li>
                    <li ><a href="#">2<span class="sr-only"></span></a></li>
                    <li ><a href="#">3 <span class="sr-only"></span></a></li>
                    ...
                  </ul>
                </!--nav-->

            </div>
            <!--/.container-->


        </div>
        <!--col-md-8-->

        <!--Right side menu -->
        <!--div class="col-md-2">
            <!--div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br/>
				
					<a href="#" onclick="hidelist()">LAPTOPS</a>
						<ul style="display:none;" id="list">
							<li><a href="#">DELL</a>
							<li><a href="#">HP</a>
							<li><a href="#">Apple</a>
							<li><a href="#">Toshiba</a>
							<li><a href="#">ACER</a>
							<li><a href="#">SONY</a>
							<li><a href="#">VIO</a>
							<li><a href="#">Lenovo</a>
						</ul>
					
					<a href="#" onclick="hidelist()">TABLETS</a>
						<ul style="display:none;" id="Ul1">
							<li><a href="#">DELL</a>
							<li><a href="#">HP</a>
							<li><a href="#">Apple</a>
							<li><a href="#">Toshiba</a>
							<li><a href="#">ACER</a>
							<li><a href="#">SONY</a>
							<li><a href="#">VIO</a>
							<li><a href="#">Lenovo</a>
						</ul>
					
					<a href="#" onclick="hidelist()">MOBILE PHONES</a>
						<ul style="display:none;" id="Ul2">
							<li><a href="#">Samsung</a>
							<li><a href="#">Nokia</a>
							<li><a href="#">Iphone</a>
							<li><a href="#">Huwei</a>
							<li><a href="#">HTC</a>
							<li><a href="#">SONY</a>
							<li><a href="#">OPPO</a>
							<li><a href="#">Lenovo</a>
						</ul>
					
				
                </!--div>
            <!--/.sidenav-->

            <!--Right side menu -->
               <div class="col-md-2">
               <div id="mysidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">LAPTOPS</a>
                <a href="#">TABLETS</a>
                <a href="#">MOBILE PHONES</a>
            </div>
            <!--/.sidenav-->

            <!--LEFT ARROW -->
            <div class="relative">
                <div class="arrow">
                    <a class="btn btn-default btn-lg arrow" aria-label="Left Align">
                        <span class="glyphicon glyphicon-menu-left" onclick="openNav()" aria-hidden="true"></span>
                       
                    </a>
                </div>
            </div>
            
        </div>
        
            </!--div>
        <!-- /.col-md-2 -->

    </div>
    <!--/.container-->

    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>BUY FORM</h2>
            </div>
            <div class="modal-body">

            <form accept-charset="UTF-8" action="/" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post">
                <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" />
                    <input name="_method" type="hidden" value="PUT" />
                    <input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input class='form-control' size='4' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12'>
                <div class='text-center total'>
                  Total:
                  <span class='amount'>$300</span>
                </div>
              </div>
            </div>
            
			<button class=' btn btn-primary submit-button' type='submit'>Pay >></button>
			
			<div class='form-row'>
              <div class='col-md-12 error form-group hide'>
                <div class='alert-danger alert'>
                  Please correct the errors and try again.
                </div>
              </div>
            </div>
          </form>

            </div>
            <!--/.modal-body-->
            <div class="modal-header">

            </div>
        </div>
        <!--/.modal-content-->

    </div><!--/.modal-->

        <!--===========================footer start=================================-->
  <div id="footer">
    <div class="wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h2 class="title">ABOUT US</h2>
            <div class="">
                <blockquote><h1>Welcome to Technoshop</h1>
                  <ul><li>the Middle East’s online marketplace. 

                We connect people and products – opening up a world of possibility.we give you access to everything you need and want. Our range is unparalleled, and our prices unbeatable.                  
                This is Technoshop – the power is in your hands.</li></ul>
                </blockquote>
                 
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="title">SPONSERS</h2>
          
              
          <img src="Images/logos_brands.jpg" class="img-responsive" />
              
            
           </div>
           <div class="col-md-3">
             <h2 class="title">Contact Us</h2>
             <form action="#" method="post">
                <input class="span3" type="text" name="name" id="name" value="Name" onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
                <input class="span3" type="text" name="email" id="email" value="Email" onFocus="if (this.value == 'Email') this.value = '';" onBlur="if (this.value == '') this.value = 'Email';" />
                <textarea name="message" id="message" class="span3" onFocus="if (this.value == 'Message') this.value = '';" onBlur="if (this.value == '') this.value = 'Message';" >Message</textarea>
                <div class="clear"></div>
                <input type="reset" class="btn-default" value="Cancel!" />
                <input type="submit" class="btn-default" value="Send!" />
                <div class="clear"></div>
              </form>
            </div>
            <div class="col-md-3">
              <h2 class="title">Get in touch!</h2>
              <div class="foot">
                  <ul class="fr">
                    <li class="fa fa-facebook">
                      <a href="https://www.facebook.com">   <img src="Images/Social/facebook.png" height="50" width="50"/> </a>
                    </li>
                    <li class="fa fa-Twitter">
                      <a href="https://www.Twitter.com">    <img src="Images/Social/twitter.png" height="50" width="50"/></a>
                    </li>
                    <li class="fa fa-Instagram">
                      <a href="https://www.instagram.com/"> <img src="Images/Social/instagram.png" height="50" width="50"/> </a>
                    </li>
                    </ul>

               </div>   <!--/.foot-->
            </div>     <!--/.span3-->
        </div>       <!--/.row-->
        <div class="row">
          <hr class="featurette-divider">
          <div class="clear_fix"></div>
          <div class="top">&#94;</div>
          <script src="js/scrolling-nav.js"></script>
        </div>
      </div>       <!--/.container -->
    </div>       <!--/.wrap-->
      </div>

    <script src="JS/index.js"></script>

<!--=========================== footer end==========================-->

</body>
</html>
