<?php
require 'security.php';
if (isset($_POST["save"])){
        //save to db
        require 'DB.php';
        extract($_POST);
        $sql ="INSERT INTO `stocks`(`stock_id`, `stock_name`, `category`, `quantity`, `price`) 
        VALUES ('null','$name','$category','$quantity','$price')";
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        header("location:show.php");   
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Products</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
include 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header bg-warning">
                <h2 class="text-white text-center font-weight-bold" style="font-size: 25px">New Product</h2></div>
                <div class="card-body">
                            <?php
                            if (isset($message))
                                echo "<p class='text-danger'>$message</p>";
                            ?>
                    <form action="save.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="title">Name OF Product</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="title">Category</label>
                            <select name="category" class="form-control">
                                <option value="Bales">BALES</option>
                                <option value="Pieces">Pieces</option>
                                <option value="Dozens">Dozens</option>
                                <option value="Trays">Trays</option>
                                <option value="Boxs">Boxs/cottons</option>
                                <option value="KGS">KGS</option>
                               
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="title">Quantity</label>
                            <input type="number" class="form-control" name="quantity" required>
                        </div>

                        <div class="form-group">
                            <label for="title">Price</label>
                            <input type="number" step="0.50" class="form-control" name="price" required>
                        </div>
                        

                        <button type="submit" name="save" class="btn btn-info btn-block">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






</body>
</html>