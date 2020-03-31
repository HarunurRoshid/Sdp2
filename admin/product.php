<?php
session_start();
if($_SESSION['id'] == null){
    header('Location: index.php');
}
require_once '../Apps/classes/Database.php';
require_once '../Apps/classes/Login.php';
$login = new \App\classes\Login();
if(isset($_GET['logout'])){
    $login ->adminLogout();
}
?>
<html>
<head>
    <title>Product</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../asset/js/bootstrap.js"></script>
</head>
<body>
<?php include 'menu.php'  ?>
<h4 align="center"><a class="text-success" href="addproduct.php">ADD Product</a></h4>
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

        <button class="btn-danger btn"><a href="product_delete.php?id=<?php echo $result['id']; ?>" class="text-white">Delete</a></button>
        <button class="btn-success btn"><a href="product_update.php?id=<?php echo $result['id']; ?>" class="text-white">Update</a></button>
<hr/>
<hr/>

    <?php } ?>

</div>


<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">

</script>

<script>
    $(document).ready(function(){

        //Apply the datatables plugin to your table
        $('#myTable').DataTable();

    });
</script>
<script>
    $(document).ready(function() {
        // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up
        $(window).resize(function(){
            if ($(window).width() >= 980){

                // when you hover a toggle show its dropdown menu
                $(".navbar .dropdown-toggle").hover(function () {
                    $(this).parent().toggleClass("show");
                    $(this).parent().find(".dropdown-menu").toggleClass("show");
                });

                // hide the menu when the mouse leaves the dropdown
                $( ".navbar .dropdown-menu" ).mouseleave(function() {
                    $(this).removeClass("show");
                });

                // do something here
            }
        });



// document ready
    });
</script>

<script>
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</body>
</html>
<!--        </div>-->
<!--    </div>-->



