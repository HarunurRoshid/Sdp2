<html>
<head>

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
            .mainmenu .collapse ul ul ul ul{position:absolute;top:0;left:-100%;min-width:250px;display:none;z-index:1}

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

<div class="container-fluid">
    <div id="menu_area" class="menu-area">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-light navbar-expand-lg mainmenu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon bg-white"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Link</a></li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2</a>
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
                            <li><a href="#">Service</a></li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<div id="mmenu_screen" class="container-fluid main_container">

    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-12 border-danger" id="mmenu_screen--book">
                    hello
                    <!-- Button for booking -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 border-dark" id="mmenu_screen--information">
                    <!-- Button for information -->hi
                </div>
            </div>
        </div>
        <div class="col-sm-6 border-success" id=" mmenu_screen--direktaction">
            <!-- Button for direktaction -->wow
        </div>
    </div>

</div>









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





<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='shopping';
$connection=mysqli_connect($hostname,$username,$password);
if($connection){
    $id=$_GET['id'];
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
$sql="SELECT * FROM  product  WHERE id=$id";
if(mysqli_query($connection,$sql)){
    $resource_id=mysqli_query($connection,$sql);
}

?>
<!--        <div class="container" style="width: 800px">-->
<!--        <div class="row" style="margin: 50px">-->

<?php while($result=mysqli_fetch_assoc($resource_id)){ ?>

<div>product name :<?php  echo $result['name'];?></div>
<div> Category id:   <?php  echo $result['cat_id'];?></div>
<div>Category name:   <?php  echo $result['cat_name'];?></div>
<div>Model:   <?php  echo $result['model'];?></div>
<div>Band:   <?php  echo $result['band'];?></div>
<div>Warranty:   <?php  echo $result['warranty'];?></div>
<div>display:   <?php  echo $result['display'];?></div>
<div>processor:   <?php  echo $result['processor'];?></div>
<div>ram:   <?php  echo $result['ram'];?></div>
<div>storage:   <?php  echo $result['storage'];?></div>
<div>gpu:   <?php  echo $result['gpu'];?></div>
<div>gpu:   <?php  echo $result['keyboard'];?></div>
<div>os:   <?php  echo $result['os'];?></div>
<div>weight:   <?php  echo $result['weight'];?></div>
<div>description:   <?php  echo $result['description'];?></div>
<div>special price:   <?php  echo $result['special_price'];?></div>
<div>regular price:   <?php  echo $result['regular_price'];?></div>
<div> <img src=" <?php  echo $result['image'];?>"></div>

<?php } ?>

