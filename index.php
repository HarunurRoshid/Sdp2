<html>
<head>
       <title>MYDOKAN</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>
        .menu-area{background: #1a1211
        }
        .dropdown-menu{padding:0;margin:0;border:0 solid transition!important;border:0 solid rgba(0,0,0,.15);border-radius:0;-webkit-box-shadow:none!important;box-shadow:none!important}
        .mainmenu a, .navbar-default .navbar-nav > li > a, .mainmenu ul li a , .navbar-expand-lg .navbar-nav .nav-link{color:#fff;font-size:16px;text-transform:capitalize;padding:16px 15px;font-family:'Roboto',sans-serif;display: block !important;}
        .mainmenu .active a,.mainmenu .active a:focus,.mainmenu .active a:hover,.mainmenu li a:hover,.mainmenu li a:focus ,.navbar-default .navbar-nav>.show>a, .navbar-default .navbar-nav>.show>a:focus, .navbar-default .navbar-nav>.show>a:hover{color: #fff;background: #4CAF50;outline: 0;}
        /*==========Sub Menu=v==========*/
        .mainmenu .collapse ul > li:hover > a{background: #4CAF50;}
        .mainmenu .collapse ul ul > li:hover > a, .navbar-default .navbar-nav .show .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .show .dropdown-menu > li > a:hover{background: #4CAF50;}
        .mainmenu .collapse ul ul ul > li:hover > a{background: #4CAF50;}

        .mainmenu .collapse ul ul, .mainmenu .collapse ul ul.dropdown-menu{background:#1565C0;}
        .mainmenu .collapse ul ul ul, .mainmenu .collapse ul ul ul.dropdown-menu{background:#1E88E5}
        .mainmenu .collapse ul ul ul ul, .mainmenu .collapse ul ul ul ul.dropdown-menu{background:#64B5F6}

        /******************************Drop-down menu work on hover**********************************/
        .mainmenu{background: none;border: 0 solid;margin: 0;padding: 0;min-height:20px;width: 100%;}
        @media only screen and (min-width: 767px) {
            .mainmenu .collapse ul li:hover> ul{display:block}
            .mainmenu .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none}
            /*******/
            .mainmenu .collapse ul ul li{position:relative}
            .mainmenu .collapse ul ul li:hover> ul{display:block}
            .mainmenu .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}
            /*******/
            .mainmenu .collapse ul ul ul li{position:relative}
            .mainmenu .collapse ul ul ul li:hover ul{display:block}
            .mainmenu .collapse ul ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none;z-index:1}

        }
        @media only screen and (max-width: 767px) {
            .navbar-nav .show .dropdown-menu .dropdown-menu > li > a{padding:16px 15px 16px 35px}
            .navbar-nav .show .dropdown-menu .dropdown-menu .dropdown-menu > li > a{padding:16px 15px 16px 45px}
        }





        @media (min-width: 768px) {

            /* show 3 items */
            .carouselPrograms .carousel-inner .active,
            .carouselPrograms .carousel-inner .active + .carousel-item,
            .carouselPrograms .carousel-inner .active + .carousel-item + .carousel-item {
                display: block;
            }

            .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
            .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
                transition: none;
            }

            .carouselPrograms .carousel-inner .carousel-item-next,
            .carouselPrograms .carousel-inner .carousel-item-prev {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            .carouselPrograms .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -33.333%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* left or forward direction */
            .carouselPrograms .active.carousel-item-left + .carousel-item-next.carousel-item-left,
            .carouselPrograms .carousel-item-next.carousel-item-left + .carousel-item,
            .carouselPrograms .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
            .carouselPrograms .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* farthest right hidden item must be abso position for animations */
            .carouselPrograms .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* right or prev direction */
            .carouselPrograms .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
            .carouselPrograms .carousel-item-prev.carousel-item-right + .carousel-item,
            .carouselPrograms .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
            .carouselPrograms .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }

    </style>
</head>
<body>
<header>
    <div style="height: 30px;width: 100%;background-color: white;">
       <a href="" style="margin-left: 300px;text-decoration: none;color: #1a1211;font-style: italic;tab-size: 20px;"> SIGNIN</a>
        <a href="" style="margin-left: 400px;text-decoration: none;color: #1a1211;font-style: italic;tab-size: 20px;"> LOGIN</a>
        <a href="" style="margin-left: 500px;text-decoration: none;color: #1a1211;font-style: italic;tab-size: 20px;"> APPS</a>


    </div>
</header>
<div class="container-fluid">
<div id="menu_area" class="menu-area">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-light navbar-expand-lg mainmenu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon bg-white"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="active"><a href="index.php" style="text-decoration: none;">
                                <span style="font-weight: bolder;color: #1a1211;font-size: 30px;margin:0px;">M</span>
                                <span  style="font-weight: bolder;font-style:italic;color:green;font-size: 30px;margin:0px;">Y</span>
                                <span style="font-weight: bolder;font-style:italic;color:red;font-size: 30px;margin:0px;">D</span>
                                <span style="font-weight: bolder;font-style:italic;color:red;font-size: 30px;margin:0px;">O</span>
                                <span style="font-weight: bolder;font-style:italic;color:red;font-size: 30px;margin:0px;">K</span>
                                <span  style="font-weight: bolder;font-style:italic;color:green;font-size: 30px;margin:0px;" >A</span>
                                <span style="font-weight: bolder;color: #1a1211;font-size: 30px;margin:0px;">N</span>
                                <span class="sr-only">(current)</span></a></li>


                        <li class="dropdown ml-5 mt-2" style="margin-left: 800px;" >
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electronic Devices</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">Mobiles</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a href="#">Xiaomi </a></li>
                                                <li><a href="#">Samsung</a></li>
                                                <li><a href="#">vivo</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Tablets</a>
                                        </li>
                                        <li><a href="#">Laptops</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a href="#">Macbook </a></li>
                                                <li><a href="#"> NOtebook</a></li>
                                                <li><a href="#">Gaming</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Desktops</a></li>
                                        <li><a href="#">Cameras</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a href="#">DSLR </a></li>
                                                <li><a href="#">Security </a></li>
                                                <li><a href="#">mini security</a></li>
                                            </ul></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electronic Accessories</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">Mobile Accessories </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a href="#">DSLR </a></li>
                                                <li><a href="#">Security </a></li>
                                                <li><a href="#">mini security</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Computer Accessories </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a href="#">DSLR </a></li>
                                                <li><a href="#">Security </a></li>
                                                <li><a href="#">mini security</a></li>
                                            </ul></li>
                                        <li><a href="#">Laptop Accessories</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a href="#">DSLR </a></li>
                                                <li><a href="#">Security </a></li>
                                                <li><a href="#">mini security</a></li>
                                            </ul></li>
                                        <li><a href="#">Software</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a href="#">DSLR </a></li>
                                                <li><a href="#">Security </a></li>
                                                <li><a href="#">mini security</a></li>
                                            </ul></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TV & Home Appliances</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown3</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Health & Beauty</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown3</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Babies & Toys</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown3</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Groceries & Pets</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown3</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home & Lifestyle</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown3</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Women's Fashion</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown3</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Men's Fashion</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown3</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Watches & Accessories</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown3</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown" style="text-decoration: none;">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">Sports & Outdoor</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown3</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                                <li class="dropdown" style="text-decoration: none;">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">Automotive & Motorbike</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown3</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <form class="form-inline d-flex justify-content-center col-lg-12 md-form form-sm active-purple active-purple-2 mt-3" style="width: 600px;">
<!--                                <i class="fas fa-search" aria-hidden="true"></i>-->
                                <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                                       aria-label="Search">
                            </form>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>
</div>


<!-- carousel-->
    <div class="container-fluid">
        <div id="carouselExample" class="carouselPrograms carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-md-4  active">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 1" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="apple-macbook-air-2019-intel-core-i5-silver-11569736209.jpg" alt="slide 1">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 3" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="xiaomi_9T_pro.png" alt="slide 2">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 4" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="nikon-d3500-digital-slr-camera-with-af-s-18-55mm-11554018869.jpg" alt="slide 3">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 5" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=4" alt="slide 4">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 6" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=5" alt="slide 5">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 7" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6" alt="slide 6">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 8" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=7" alt="slide 7">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4  ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 2" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=8" alt="slide 8">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

























    <!--- card--->
    <?php
    $hostname='localhost';
    $username='root';
    $password='';
    $dbname='shopping';
    $connection=mysqli_connect($hostname,$username,$password);
    if($connection){
        // echo'server connect';
        $db_select=mysqli_select_db($connection,$dbname);
        if($db_select){
//            echo'select';

        }
        else{
            die("data not selec".mysqli_error($db_select));
        }
    }
    else {

        die("sever not connect" . mysqli_error($connection));
    }
    $sql="SELECT * FROM  product";
    if(mysqli_query($connection,$sql)){
        $resource_id=mysqli_query($connection,$sql);
    }

    ?>
    <?php while($result=mysqli_fetch_assoc($resource_id)){ ?>

<a href="demo.php?id=<?php echo $result['id']; ?>" style="text-decoration: none;color: #1a1211;">
    <div class="card-deck" style="float: left;width: 442px;align-content: center">
        <div class="card" style="float: left;width: 300px;">
            <img class="card-img-top" src="<?php echo $result['image']; ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php  echo $result['name'];?></h5>
                <h5 class="card-title"> Regular Price :<?php  echo $result['regular_price'];?></h5>
                <h5 class="card-title">Special Price :<?php  echo $result['special_price'];?></h5>
                       </div>
        </div>

    </div>
</a>
    <?php }?>

            <a href="">see more</a>



</div>









<!------ JS CODE ---------->

<script language="javascript">

    (function($){
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');

            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });

            return false;
        });
    })(jQuery)




    $('#carouselExample').on('slide.bs.carousel', function (e) {


        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 3;
        var totalItems = $('.carousel-item').length;

        if (idx >= totalItems-(itemsPerSlide-1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i=0; i<it; i++) {
                // append slides to end
                if (e.direction=="left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                }
                else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });





    $(document).ready(function() {
        /* show lightbox when clicking a thumbnail */
        $('a.thumb').click(function(event){
            event.preventDefault();
            var content = $('.modal-body');
            content.empty();
            var title = $(this).attr("title");
            $('.modal-title').html(title);
            content.html($(this).html());
            $(".modal-profile").modal({show:true});
        });

    });

</script>
</body>
</html>
