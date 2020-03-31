<?php
session_start();
if ($_SESSION['id'] == null) {
    header('Location: index.php');
}
require_once '../Apps/classes/Database.php';
require_once '../Apps/classes/Login.php';
$login = new \App\classes\Login();
if (isset($_GET['logout'])) {
    $login->adminLogout();
}
$con =mysqli_connect('localhost','root','','shopping');
mysqli_select_db($con,'shopping');
if(isset($_POST['submit'])){
    $id=$_GET['id'];
    $product_name=$_POST['name'];
    $cat_name=$_POST['cat_name'];
    $cat_id=$_POST['cat_id'];
    $model=$_POST['model'];
    $band=$_POST['band'];
    $warranty=$_POST['warranty'];
    $display=$_POST['display'];
    $processor=$_POST['processor'];
    $ram=$_POST['ram'];
    $Storage=$_POST['storage'];
    $gpu=$_POST['gpu'];
    $wifi=$_POST['wifi'];
    $regular_price=$_POST['regular_price'];
    $special_price=$_POST['special_price'];
    $keyboard=$_POST['keyboard'];
    $os=$_POST['os'];
    $weight=$_POST['weight'];
    $description=$_POST['description'];
    $files =$_FILES['file'];

//            print_r($files);
    $filename=$files['name'];
//            print_r($filename);
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];
//            convert jpg
    $fileext=explode('.',$filename);
    $filecheck= strtolower(end($fileext));

    $fileextstored= array('png','jpg','jpeg');

    if(in_array( $filecheck, $fileextstored)){
        $destinationfile='upload/'. $filename;
        move_uploaded_file( $filetmp, $destinationfile);
        $sql="UPDATE `product` SET `name`='$product_name',`cat_id`='$cat_id',`cat_name`='$cat_name',`model`='$model',`band`='$band',`warranty`='$warranty',`display`='$display',`processor`='$processor',`ram`='$ram',`storage`='$Storage',`gpu`='$gpu',`keyboard`='$keyboard',`os`='$os',`weight`='$weight',`special_price`='$special_price',`regular_price`='$regular_price',`description`='$description',`image`='$destinationfile',`wifi`='$wifi' WHERE id=$id";
        $query=mysqli_query($con,$sql);
        echo "hello";
        if($query){
            header('Location: product.php');
            echo 'selete';
        }
        else{
            die('no selet'.mysqli_error($con));
        }
    }
}
?>



<html>
<head>
    <title>update product</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'menu.php'  ?>
<div class="container">
    <br>
    <h1 class="text-white bg-dark text-center">Add product</h1>
    <div class="col-lg-8 m-auto d-block">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product">product name :</label>
                <input type="text" name="name" id="product" class="form-control">

            </div>
            <div class="form-group">
                <label >category name :</label>
                <input type="text" name="cat_name"  class="form-control" >

            </div>
            <div class="form-group">
                <label >category id :</label>
                <input type="number" name="cat_id"  class="form-control" >

            </div>
            <div class="form-group">
                <label >Model</label>

                <input type="text" name="model"  class="form-control" >

            </div>
            <div class="form-group">
                <label >Band</label>
                <input type="text"  name="band" class="form-control">
            </div>
            <div class="form-group">
                <label >warranty</label>
                <input type="text"  name="warranty" class="form-control">
            </div>
            <div class="form-group">
                <label >Display</label>
                <input type="text"  name="display" class="form-control">
            </div>
            <div class="form-group">
                <label >Processor</label>
                <input type="text"  name="processor" class="form-control">
            </div>
            <div class="form-group">
                <label >Ram</label>
                <input type="text"  name="ram" class="form-control">
            </div>
            <div class="form-group">
                <label >storage</label>
                <input type="text"  name="storage" class="form-control">
            </div>
            <div class="form-group">
                <label >GPU</label>
                <input type="text"  name="gpu" class="form-control">
            </div>
            <div class="form-group">
                <label >keyboard</label>
                <input type="text"  name="keyboard" class="form-control">
            </div>
            <div class="form-group">
                <label >wifi</label>
                <input type="text"  name="wifi" class="form-control">
            </div>
            <div class="form-group">
                <label >Operation System </label>
                <input type="text"  name="os" class="form-control">
            </div>
            <div class="form-group">
                <label >Weight</label>
                <input type="text"  name="weight" class="form-control">
            </div>

            <div class="form-group">
                <label >special_price:</label>
                <input type="text"  name="special_price" class="form-control">


            </div>
            <div class="form-group">
                <label >Regular_price:</label>
                <input type="text"  name="regular_price" class="form-control">


            </div>
            <div class="form-group">
                <label >description:</label>
                <input type="text" name="description"  class="form-control">

            </div>


            <div class="form-group">
                <label for="file"> pic :</label>
                <input type="file" name="file" id="file" class="form-control">

            </div>
            <input type="submit" name="submit" value="submit" class="btn btn-success">
        </form>
    </div>
</div>
</body>
</html>


