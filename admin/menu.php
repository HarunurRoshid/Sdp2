<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="https://www.bgctub-edu.net/php_files/standard/user_home/user_home.php?home=yes&tm=main"><i class="fa fa-hospital"></i>  <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Flash Sale
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="addcost.php">Add sale </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="veiwcost.php">view sale</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="popular.php">Electronic Devices</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="cser.php">Electronic Accessories</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="max.php">TV & Home Appliances</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="epic.php">Health & Beauty</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="metro.php">Babies & Toys</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="belview.php">Groceries & Pets</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="sevron.php">Home & Lifestyle</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="lanset.php">Women's Fashion</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="mount.php">Men's Fashion</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="lifeline.php">Watches & Accessories</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="doctors.php">Sports & Outdoor</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="madison.php">Automotive & Motorbike  </a>
                    </div>
                </li>


                        <!-- /.col-md-4  -->
                <li class="nav-item ">
                    <a class="nav-link " href="product.php" >
                       product
                    </a>

                </li>

           <li class="nav-item ">
                    <a class="nav-link " href="viewambulance.php" id="navbarDropdown" >
                       Store
                    </a>


                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="blood.php" id="navbarDropdown" >
                      offer
                    </a>

                </li>
            </ul>

            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">stock</a>
            </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['name']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="?logout=true">LogOut</a>


                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
