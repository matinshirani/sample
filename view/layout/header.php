<?php
$header=new header();
$menu=$header->menuparent();
?>
<!doctype html>
<html lang="fa" >

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>قالب ریسپانسیو فروشگاهی pillomart :: دریافت شده از وب روبیک</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/bootstrap4-rtl.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="public/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="public/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="public/css/flaticon.css">
    <link rel="stylesheet" href="public/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="public/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="public/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="public/css/style.css">

</head>

<body class="rtl">
<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php"> <img src="public/img/logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <?php foreach ($menu as $val): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?php echo $val['url']; ?>" id="navbarDropdown_3"
                                   role="button"  aria-haspopup="true" aria-expanded="false">
                                    <?php echo $val['title']; ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <?php $child=$header->menuchild($val['id']);
                                        foreach ($child as $val2): ?>
                                    <a class="dropdown-item" href="<?php echo $val2['url']; ?>">
                                        <?php echo $val2['title']; ?>
                                    </a>
                                    <?php endforeach; ?>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex align-items-center">
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <a href="cart.html">
                            <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="جست و جو">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- Header part end-->