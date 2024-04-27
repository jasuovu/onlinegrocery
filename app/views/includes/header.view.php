<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grocery Store</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?=ROOT?>/style/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?=ROOT?>/style/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?=ROOT?>/style/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?=ROOT?>/style/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?=ROOT?>/style/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?=ROOT?>/style/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?=ROOT?>/style/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?=ROOT?>/style/css/style.css" type="text/css">
</head>


<body>
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
        <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Cart</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid"> <!-- Changed from container to container-fluid -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./home"><img src="<?=ROOT?>/assets/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="Search products">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

        <!-- Hero Section Begin -->
        <section class="hero">
        <div class="container-fluid"> <!-- Changed from container to container-fluid -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Frozen</a></li>
                            <li><a href="#">Fresh</a></li>
                            <li><a href="#">Beverages</a></li>
                            <li><a href="#">Pet-food</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./shop-grid.html">All Products</a></li>
                            <li><a href="#">Cart</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
