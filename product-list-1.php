<?php require_once("./includes/db.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--=====================================
                    META TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- AUTHOR META -->
        <meta name="author" content="mironcoder">
        <meta name="email" content="mironcoder@gmail.com">
        <meta name="profile" content="https://themeforest.net/user/mironcoder">

        <!-- TEMPLATE META -->
        <meta name="name" content="vegana">
        <meta name="title" content="vegana - vegan food ecommerce html template">
        <meta name="keywords" content="vegana, vegan, food, ecommerce, store, html, template, bootstrap, vegetarian, organic, vegetables, greengrocery, fruit, healthy, shop">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- FOR WEBPAGE TITLE -->
        <title>Vegana - Product-list-1</title>

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <!-- FOR FAVICON -->
        <link rel="icon" href="images/favicon.png">

        <!-- FOR FLATICON -->
        <link rel="stylesheet" href="fonts/flaticon/flaticon.css">

        <!-- FOR FONT AWESOME -->
        <link rel="stylesheet" href="fonts/font-awesome/fontawesome.css">

        <!-- FOR PRICE RANGE -->
        <link rel="stylesheet" href="css/vendor/jquery-ui.css">

        <!-- FOR BOOTSTRAP -->
        <link rel="stylesheet" href="css/vendor/bootstrap.min.css">

        <!-- FOR COMMON STYLE -->
        <link rel="stylesheet" href="css/custom/main.css">

        <!-- FOR PRODUCT LIST WITH LEFT SIDEBAR -->
        <link rel="stylesheet" href="css/custom/product-list-1.css">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
        <!--=====================================
                    HEADER PART START
        =======================================-->
        <header class="header-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <ul class="header-info">
                            <li>
                                <i class="fas fa-envelope"></i>
                                <p>info@vegana.com</p>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <p>+12027953213</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="header-option">
                            <div class="header-curr">
                                <i class="fas fa-money-bill"></i>
                                <select class="header-select custom-select">
                                    <option class="clr" selected>currency</option>
                                    <option class="clr" value="1">Dollers</option>
                                    <option class="clr" value="2">Pound</option>
                                    <option class="clr" value="3">Euro</option>
                                </select>
                            </div>
                            <div class="header-lang">
                                <i class="fas fa-globe"></i>
                                <select class="header-select custom-select">
                                    <option class="clr" selected>language</option>
                                    <option class="clr" value="1">English</option>
                                    <option class="clr" value="2">Turkish</option>
                                    <option class="clr" value="3">italian</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--=====================================
                    HEADER PART END
        =======================================-->


        <!--=====================================
                    NAVBAR PART START
        =======================================-->
        <nav class="navbar-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-element">
                            <ul class="left-widget">
                                <li><a class="icon icon-inline menu-bar" href="#"><i class="fas fa-align-left"></i></a></li>
                            </ul>
                            <a class="navbar-logo" href="#">
                                <img src="images/logo.png" alt="logo">
                            </a>
                            <form class="search-form navbar-src">
                                <input type="text" placeholder="Search anything...">
                                <button class="btn btn-inline">
                                    <i class="fas fa-search"></i>
                                    <span>search</span>
                                </button>
                            </form>
                            <ul class="right-widget">
                                <li><a class="icon icon-inline" href="signin-up.html"><i class="fas fa-user"></i></a></li>
                                <li><a class="icon icon-inline" href="wishlist.html"><i class="fas fa-heart"></i><sup>0</sup></a></li>
                                <li><a class="icon icon-inline" href="cartlist.html"><i class="fas fa-shopping-cart"></i><sup>0</sup></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-slide">
                            <div class="navbar-content">
                                <div class="navbar-slide-cross">
                                    <a class="icon icon-inline cross-btn" href="#"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="navbar-slide-logo">
                                    <a href="#"><img src="images/logo.png" alt="logo"></a>
                                </div>
                                <form class="search-form mb-4 navbar-slide-src">
                                    <input type="text" placeholder="Search anything...">
                                    <button class="btn btn-inline">
                                        <i class="fas fa-search"></i>
                                        <span>search</span>
                                    </button>
                                </form> 
                                <ul class="navbar-list">
                                    <li class="navbar-item active"><a class="navbar-link" href="index.html">Home</a></li>
                                    <li class="navbar-item navbar-dropdown navbar-megamenu">
                                        <a class="navbar-link dropdown-indicator" href="#">
                                            <span>Categories</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <div class="megamenu">
                                            <ul>
                                                <li><a href="#"><i class="flaticon-groceries"></i> <span>Groceries (17)</span></a></li>
                                                <li><a href="#"><i class="flaticon-bread"></i> <span>bakery (23)</span></a></li>
                                                <li><a href="#"><i class="flaticon-vegetable"></i> <span>vegetables (42)</span></a></li>
                                                <li><a href="#"><i class="flaticon-healthy-food"></i> <span>fruits (14)</span></a></li>
                                                <li><a href="#"><i class="flaticon-salad"></i> <span>salads (21)</span></a></li>
                                                <li><a href="#"><i class="flaticon-drinks"></i> <span>drinks (36)</span></a></li>
                                                <li><a href="#"><i class="flaticon-seaweed"></i> <span>seaweeds (14)</span></a></li>
                                                <li><a href="#"><i class="flaticon-nuts"></i> <span>nuts (22)</span></a></li>
                                                <li><a href="#"><i class="flaticon-marmite"></i> <span>Nutrition (18)</span></a></li>
                                                <li><a href="#"><i class="flaticon-cereal"></i> <span>cereal (54)</span></a></li>
                                                <li><a href="#"><i class="flaticon-tofu"></i> <span>tofu (17)</span></a></li>
                                                <li><a href="#"><i class="flaticon-peas"></i> <span>Legumes (43)</span></a></li>
                                                <li><a href="#"><i class="flaticon-spread"></i> <span>Seeds (36)</span></a></li>
                                                <li><a href="#"><i class="flaticon-cheese"></i> <span>cheeses (68)</span></a></li>
                                                <li><a href="#"><i class="flaticon-milk"></i> <span>Plant Milks (45)</span></a></li>
                                                <li><a href="#"><i class="flaticon-cereal"></i> <span>cereal (23)</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="navbar-item navbar-dropdown">
                                        <a class="navbar-link dropdown-indicator" href="#">
                                            <span>Shop</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul class="dropdown-list">
                                            <li><a class="dropdown-link" href="product-list-1.html">Product list-1</a></li>
                                            <li><a class="dropdown-link" href="product-list-2.html">Product list-2</a></li>
                                            <li><a class="dropdown-link" href="product-list-3.html">Product list-3</a></li>
                                            <li><a class="dropdown-link" href="product-details-1.html">Product details-1</a></li>
                                            <li><a class="dropdown-link" href="product-details-2.html">Product details-2</a></li>
                                        </ul>
                                    </li>
                                    <li class="navbar-item navbar-dropdown">
                                        <a class="navbar-link dropdown-indicator" href="#">
                                            <span>pages</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul class="dropdown-list">
                                            <li><a class="dropdown-link" href="cartlist.html">Cartlist</a></li>
                                            <li><a class="dropdown-link" href="wishlist.html">Wisthlist</a></li>
                                            <li><a class="dropdown-link" href="checkout.html">Checkout</a></li>
                                            <li><a class="dropdown-link" href="compare.html">Compare</a></li>
                                            <li><a class="dropdown-link" href="account.html">Account</a></li>
                                            <li><a class="dropdown-link" href="error.html">Error</a></li>
                                            <li><a class="dropdown-link" href="signin-up.html">Login or Register</a></li>
                                        </ul>
                                    </li>
                                    <li class="navbar-item navbar-dropdown">
                                        <a class="navbar-link dropdown-indicator" href="#">
                                            <span>blogs</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul class="dropdown-list">
                                            <li><a class="dropdown-link" href="blog-list-1.html">Blog list-1</a></li>
                                            <li><a class="dropdown-link" href="blog-list-2.html">Blog list-2</a></li>
                                            <li><a class="dropdown-link" href="blog-list-3.html">Blog list-3</a></li>
                                            <li><a class="dropdown-link" href="blog-details-1.html">Blog details-1</a></li>
                                            <li><a class="dropdown-link" href="blog-details-2.html">Blog details-2</a></li>
                                            <li><a class="dropdown-link" href="blog-details-3.html">Blog details-3</a></li>
                                        </ul>
                                    </li>
                                    <li class="navbar-item"><a class="navbar-link" href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--=====================================
                    NAVBAR PART END
        =======================================-->


        <!--=====================================
                    MOBILE-MENU PART START
        =======================================-->
        <div class="btmbar-part">
            <ul class="btmbar-widget">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="wishlist.html" class="wish-icon">
                        <i class="fas fa-heart"></i>
                        <span>Wishlist</span>
                        <sup>0</sup>
                    </a>
                </li>
                <li>
                    <a href="cartlist.html" class="cart-icon">
                        <i class="fas fa-shopping-basket"></i>
                        <span>Cart</span>
                        <sup>0</sup>
                    </a>
                </li>
                <li>
                    <a href="account.html">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--=====================================
                    MOBILE-MENU PART END
        =======================================-->


        <!--=====================================
                 SINGLE BANNER PART START
        =======================================-->
        <section class="single-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content">
                            <h2>Product list with left sidebar</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product-list-1</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                 SINGLE BANNER PART END
        =======================================-->


        <!--=====================================
                 PRODUCT LIST PART START
        =======================================-->
        <section class="product-list">
            <div class="container">
                <div class="row content-reverse">
                    <div class="col-lg-3">
                        <div class="product-ad">
                            <a href="#"><img src="images/ad-banner/01.jpg" alt="ad"></a>
                        </div>
                        <div class="product-bar">
                            <h6>Filter by Price</h6>
                            <input type="text" id="amount" readonly>
                            <div id="slider-range"></div>
                        </div>
                        <div class="product-bar">
                            <h6>Filter by brand</h6>
                            <div class="product-bar-content">
                                <input type="text" placeholder="Search">
                                <ul class="scroll-list">
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check1">
                                            <label class="custom-control-label" for="check1">mari gold</label>
                                        </div>
                                        <span class="product-cate-number">(13)</span>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2">
                                            <label class="custom-control-label" for="check2">lilly's</label>
                                        </div>
                                        <span class="product-cate-number">(28)</span>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check3">
                                            <label class="custom-control-label" for="check3">diamond</label>
                                        </div>
                                        <span class="product-cate-number">(35)</span>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check4">
                                            <label class="custom-control-label" for="check4">keya</label>
                                        </div>
                                        <span class="product-cate-number">(47)</span>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check5">
                                            <label class="custom-control-label" for="check5">tredar</label>
                                        </div>
                                        <span class="product-cate-number">(59)</span>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check6">
                                            <label class="custom-control-label" for="check6">fremant</label>
                                        </div>
                                        <span class="product-cate-number">(64)</span>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check7">
                                            <label class="custom-control-label" for="check7">Avocados</label>
                                        </div>
                                        <span class="product-cate-number">(19)</span>
                                    </li>
                                </ul>
                                <button class="clear-filter-btn">
                                    <i class="fas fa-broom"></i>
                                    <span>Clear Filter</span>
                                </button>
                            </div>
                        </div>
                        <div class="product-bar">
                            <h6>Filter by tags</h6>
                            <div class="product-bar-content">
                                <input type="text" placeholder="Search">
                                <ul class="scroll-list">
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check8">
                                            <label class="custom-control-label" for="check8">Alcohol-Free</label>
                                        </div>
                                        <span class="product-cate-number">(13)</span>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check9">
                                            <label class="custom-control-label" for="check9">Biodegradable</label>
                                        </div>
                                        <span class="product-cate-number">(28)</span>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check10">
                                            <label class="custom-control-label" for="check10">Caffeine Free</label>
                                        </div>
                                        <span class="product-cate-number">(35)</span>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check11">
                                            <label class="custom-control-label" for="check11">Dye-Free</label>
                                        </div>
                                        <span class="product-cate-number">(47)</span>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check12">
                                            <label class="custom-control-label" for="check12">Eco-Friendly</label>
                                        </div>
                                        <span class="product-cate-number">(59)</span>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check13">
                                            <label class="custom-control-label" for="check13">Gelatin-Free</label>
                                        </div>
                                        <span class="product-cate-number">(64)</span>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check14">
                                            <label class="custom-control-label" for="check14">High Fiber</label>
                                        </div>
                                        <span class="product-cate-number">(19)</span>
                                    </li>
                                </ul>
                                <button class="clear-filter-btn">
                                    <i class="fas fa-broom"></i>
                                    <span>Clear Filter</span>
                                </button>
                            </div>
                        </div>
                        <div class="product-bar">
                            <h6>Filter by Categories</h6>
                            <div class="product-bar-content">
                                <input type="text" placeholder="Search">
                                <ul class="nasted-dropdown">
                                    <li>
                                        <a href="#">
                                            <span>Vegan Bekary</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Pasta</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Noodles</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>cookies</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>desserts</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Ice cream</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Condiments</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Organic</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Ketogenic</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Raw Foods</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Gluten-Free</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                            <li><a href="#">Demo item (0)</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <button class="clear-filter-btn">
                                    <i class="fas fa-broom"></i>
                                    <span>Clear Filter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-filter">
                                    <div class="product-page-number">
                                        <p>Showing 1–9 of 130 results</p>
                                    </div>
                                    <form>
                                    <select class="product-short-select custom-select">
                                        <option  value="0">Short by Best Sell</option>
                                        <option  value="1">Short by New Item</option>
                                        <option value="2">Short by Popularity</option>
                                        <button type="submit" name="submit" class="btn btn-outline"><option value="3">Short by Average review</option>sign in now</button>
                                    </select>
                                    
                                    </form>
                                    <ul class="product-card-type">
                                        <li class="grid-verti active"><i class="fas fa-grip-vertical"></i></li>
                                        <li class="grid-hori"><i class="fas fa-grip-horizontal"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row product-card-parent">
                            <?php 
                            if(isset($_POST['0'])){
                            $sql4="SELECT * FROM products where product_status=:status ORDER BY id DESC";
                            }
                            $stmt4=$pdo->prepare($sql4);
                            $stmt4->execute([
                                ':status'=>'Active',
                            ]);
                            while($products=$stmt4->fetch(PDO::FETCH_ASSOC)){
                                $product_name=$products['product_name'];
                                $product_details=$products['product_details'];
                                $product_price=$products['product_price'];
                                $product_rating=$products['product_rating'];
                                $product_img=$products['product_img'];
                            ?>

                            
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                                <div class="product-card card-gape">
                                    <div class="product-img">
                                        <img src="./images/product/<?php echo $product_img; ?>" alt="product-1">
                                        <ul class="product-widget">
                                            <li><button><i class="fas fa-eye"></i></button></li>
                                            <li><button><i class="fas fa-heart"></i></button></li>
                                            <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-name">
                                            <h6><a href="#"><?php echo $product_name ; ?></a></h6>
                                        </div>
                                        <div class="product-price">
                                            <h6><del>$80</del> $<?php echo $product_price ; ?></h6>
                                            <div class="product-rating">
                                                <i class="fas fa-star"></i>
                                                <span><?php echo $product_rating ; ?>/5</span>
                                            </div>
                                        </div>
                                        <div class="product-btn">
                                            <a href="#">
                                                <i class="fas fa-shopping-basket"></i>
                                                <span>Add to Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php  } ?>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fas fa-long-arrow-alt-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">...</li>
                                    <li class="page-item"><a class="page-link" href="#">67</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                 PRODUCT LIST PART END
        =======================================-->


        <!--=====================================
                    NEWSLETTER PART START
        =======================================-->
        <section class="news-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-6">
                        <div class="news-content">
                            <h2>Subscribe for Latest Offers</h2>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6">
                        <form class="search-form news-form">
                            <input type="text" placeholder="Enter Email Address">
                            <button class="btn btn-inline">
                                <i class="fas fa-envelope"></i>
                                <span>Subscribe</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    NEWSLETTER PART END
        =======================================-->
        <!--=====================================
                     FOOTER PART START
        =======================================-->
        <footer class="footer-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-content">
                            <a href="#"><img src="images/logo.png" alt="logo"></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur repudiandae quisquam adipisci asperiores, ipsum ipsa repellat assumenda dolor perspiciatis.</p>
                            <ul class="footer-icon">
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-content">
                            <h3 class="title">Useful Links</h3>
                            <div class="footer-widget">
                                <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Best Seller</a></li>
                                    <li><a href="#">New Arrivals</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Location</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Carrer</a></li>
                                    <li><a href="#">Faq</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="footer-content">
                            <h3 class="title">Download the App</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dicta amet tenetur soluta blanditiis at optio molestias facilis praesentium eos! Sed placeat a labore corporis aliquam reiciendis eaque quisquam corrupti.</p>
                        </div>
                        <ul class="download-app">
                            <li><a href="#"><img src="images/logo/google.png" alt="google"></a></li>
                            <li><a href="#"><img src="images/logo/app.png" alt="app"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--=====================================
                      FOOTER PART END
        =======================================-->
        

        <!--=====================================
                 FOOTER BOTTOM PART START
        =======================================-->
        <div class="footer-bottom">
            <div class="container">
                <p>Copyright &copy; 2020. All rights reserved by - <a target="_blank" href="https://themeforest.net/user/mironcoder">Mironcoder</a></p>
                <ul class="pay-card">
                    <li><a href="#"><img src="images/pay-card/01.jpg" alt="payment-1"></a></li>
                    <li><a href="#"><img src="images/pay-card/02.jpg" alt="payment-2"></a></li>
                    <li><a href="#"><img src="images/pay-card/03.jpg" alt="payment-3"></a></li>
                    <li><a href="#"><img src="images/pay-card/04.jpg" alt="payment-4"></a></li>
                </ul>
            </div>
        </div>
        <!--=====================================
                 FOOTER BOTTOM PART END
        =======================================-->
        

        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <!-- FOR BOOTSTRAP -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/vendor/popper.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>

        <!-- FOR PRICE RANGE -->
        <script src="js/vendor/jquery-ui.js"></script>
        <script src="js/custom/price-range.js"></script>

        <!-- FOR COMMON SCRIPT -->
        <script src="js/custom/main.js"></script> 
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>
</html>




