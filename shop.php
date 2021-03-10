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
    <title>Home</title>
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
                <!--    ASIDE-->
                <div id="aside" class="col-md-3">

                    <div class="aside">
                        <h3 class="aside-title">Categories</h3>
                        <div class="checkbox-filter">

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-1">
                                <label for="category-1">
                                    Smart Watch
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-2">
                                <label for="category-2">
                                    Automatic Watch
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-3">
                                <label for="category-3">
                                    Quartz Movement
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="aside">
                        <h3 class="aside-title">Brand</h3>
                        <div class="checkbox-filter">
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-1">
                                <label for="brand-1">
                                    Apple
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-2">
                                <label for="brand-2">
                                    Samsung
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-3">
                                <label for="brand-3">
                                    Xiaomi
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-4">
                                <label for="brand-4">
                                    Orient
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-5">
                                <label for="brand-5">
                                    Casio
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-6">
                                <label for="brand-6">
                                    Omega
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <!--    /ASIDE-->

                <!--    STORE-->
                <div id="store" class="col-md-9">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        <div class="store-sort">
                            <label>
                                Sort By:
                                <select class="input-select">
                                    <option value="0">Popular</option>
                                    <option value="1">Position</option>
                                </select>
                            </label>
                            <label>
                                Show:
                                <select class="input-select">
                                    <option value="0">20</option>
                                    <option value="1">50</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <!-- /store top filter -->

                    <!-- store products -->
                    <div class="row">
                        <div class="d-flex col-md-4 col-xs-6 ">
                            <div class="product">
                                <div class="product-img">
                                    <img src="img/product1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex col-md-4 col-xs-6 ">
                            <div class="product">
                                <div class="product-img">
                                    <img src="img/product1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex col-md-4 col-xs-6 ">
                            <div class="product">
                                <div class="product-img">
                                    <img src="img/product1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex col-md-4 col-xs-6 ">
                            <div class="product">
                                <div class="product-img">
                                    <img src="img/product1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex col-md-4 col-xs-6 ">
                            <div class="product">
                                <div class="product-img">
                                    <img src="img/product1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex col-md-4 col-xs-6 ">
                            <div class="product">
                                <div class="product-img">
                                    <img src="img/product1.jpg" alt="">
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name</a></h3>
                                    <h4 class="product-price">$980.00
                                        <del class="product-old-price">$990.00</del>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- /store products -->


                    <!-- store bottom filter -->
                    <div class="store-filter clearfix">
                        <span class="store-qty">Showing 20-100 products</span>
                        <ul class="store-pagination">
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- /store bottom filter -->

                </div>
                <!-- /STORE -->
            </div>
        </div>
    </div>
    <!--    /SECTION-->

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
                            <li><a href="#"><i class="fa fa-map-marker"></i>212-214 Nguyen Dinh Chieu Str., 3 Dist., Ho
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