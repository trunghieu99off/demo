<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    bootstrap-->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <!--    font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--    main css-->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <title>Product</title>
</head>

<body>
    <div class="container-fluid">
        <!--   HEADER   -->
        <div id="header">
            <nav class="navbar navbar-fixed-top ">
                <div class="container">
                    <!-- logo -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="#" class="navbar-brand">
                                <img src="img/D2T-logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <!-- logo -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-9">
                        <div class="header-search">
                            <form class="form-inline" action="">
                                <select class="input-select">
                                    <option value="0">All Categories</option>
                                    <option value="1">Brands</option>
                                    <option value="1">Products</option>
                                </select>
                                <input class="input" type="text" placeholder="Search here">
                                <button class="search-btn" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- Menu Toggle -->
                    <div class="menu-toggle">
                        <a href="#">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                    <!-- /Menu Toogle -->

                    <!-- /SEARCH BAR -->
            </nav>
        </div>
        <!--    HEADER  -->

        <!-- NAVIGATION -->
        <div id="navigation">
            <div class="container">
                <div id="responsive-nav">
                    <ul class="main-nav nav navbar">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Hot Deals</a></li>
                        <li><a href="#">Gents</a></li>
                        <li><a href="#">Ladies</a></li>
                        <li><a href="#">Smart Watches</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- NAVIGATION -->

        <!--    SECTION-->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="product-slider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-slide-number="0">
                                    <img src="img/product1.jpg" class="d-block " alt="...">
                                </div>
                                <div class="carousel-item" data-slide-number="1">
                                    <img src="img/product2.jpg" class="d-block " alt="...">
                                </div>
                                <div class="carousel-item" data-slide-number="2">
                                    <img src="img/product3.jpg" class="d-block " alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#product-slider" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#product-slider" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                            <ul class="carousel-indicators">
                                <li data-target="#product-slider" data-slide-to="0" class="active">
                                    <a class="selected">
                                        <img src="img/product1.jpg">
                                    </a>
                                </li>
                                <li data-target="#product-slider" data-slide-to="1">
                                    <a class="selected">
                                        <img src="img/product2.jpg" alt="">
                                    </a>
                                </li>
                                <li data-target="#product-slider" data-slide-to="2">
                                    <a class="selected">
                                        <img src="img/product2.jpg" alt="">
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div>
                    <div class="product-details col-md-6">
                        <div class="product-details">
                            <h2 class="product-name">product name</h2>
                            <div>
                                <h3 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h3>
                                <span class="product-available">In Stock</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <ul class="product-links">
                                <li>Share:</li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                            </ul>

                            <ul class="product-links">
                                <li>Category:</li>
                                <li><a href="#">Brand</a></li>
                                <li><a href="#">Men's</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Product tab -->
                    <div class="col-md-12">
                        <div id="product-tab">
                            <!-- Nav tabs -->
                            <ul class="nav tab-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab1">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab2">Details</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="tab1" class="container tab-pane active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab2" class="container tab-pane fade in">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-hover">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Specification</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Brand:</th>
                                                        <td class="text-right">Casio</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Gender:</th>
                                                        <td class="text-right">Gents</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Alarm:</th>
                                                        <td class="text-right">Yes</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Backlight:</th>
                                                        <td class="text-right">Yes</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Case Material:</th>
                                                        <td class="text-right">Stainless Steel and Resin</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Case Shape:</th>
                                                        <td class="text-right">Circle</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Chronograph:</th>
                                                        <td class="text-right">Yes</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Date Function:</th>
                                                        <td class="text-right">Yes</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Movement:</th>
                                                        <td class="text-right">Quartz</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Strap colour:</th>
                                                        <td class="text-right">Black</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Strap Type:</th>
                                                        <td class="text-right">Rubber</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Water Resistancy:</th>
                                                        <td class="text-right">200 metres</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Guarantee:</th>
                                                        <td class="text-right">2 years</td>
                                                    </tr>

                                                </tbody>

                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    SECTION-->

        <!--    FOOTER  -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">ABOUT US</h3>
                            <p>Bring the world to your hand</p>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-phone"></i>1800 1779</a></li>
                                <li><a href="#"><i class="fas fa-envelope"></i>aptech2@aprotrain.com</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i>212-214 Nguyen Dinh Chieu Str.,
                                        3
                                        Dist.,
                                        Ho
                                        Chi Minh City, Viet Nam</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">INFORMATION</h3>
                            <ul class="footer-links">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Orders & Returns</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">FOLLOW US</h3>
                            <ul class="footer-follow">
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <h3 class="footer-title">Sign up for the <span>D2T</span></h3>
                            <p>Be the first to know about the latest news and get exclusive offers</p>
                            <form>
                                <input class="input" type="email" placeholder="Enter Your Email">
                                <button class="send-btn"><i class="fas fa-envelope"></i> Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    FOOTER  -->
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>