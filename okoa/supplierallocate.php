<?php


if (isset($_GET["id"])){
    $id = $_GET["id"];
    require 'DB.php';
    $sql="SELECT * FROM `suppliers`  WHERE  s_id= $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);
}

if (isset($_POST["save"])) {
    require 'DB.php';
    extract($_POST);
  
        $sql = "INSERT INTO `report_supplier`(`sr_id`, `sc_id`, `s_name`, `s_item`, `s_quantity`, `tent_name`, `date_d`) 
        VALUES ('null','$sc_id','$s_name','$s_item','$s_quantity','$tent_name','null')";
        mysqli_query($conn, $sql);
        header("location:reports.php");
  

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> SUPPLIERS DETAILS</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
              Allocate Food
                
                </div>
            </div>
            <div class="card-body">
                <?php
                if (isset($message))
                    echo "<p class='text-danger'>$message</p>"


                ?>

                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Suppliers ID</label>
                        <input type="numerical" value="<?=$sc_id?>" class="form-control" name="sc_id" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Suppliers Full Name</label>
                        <input type="text" class="form-control" value="<?=$s_name?>" name="s_name" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Item Name</label>
                        <input type="numerical" class="form-control" value="<?=$s_item?>" name="s_item" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Quantity</label>
                        <input type="number" class="form-control" value="<?=$s_quantity?>" name="s_quantity" required>
                    </div>
                    <div class="form-group">
                        <select name="tent_name" id="" class="form-control">
                        <option value="">Select Tent</option>
                        <option value="Tent A">Tent A</option>
                        <option value="Tent B">Tent B</option>
                        <option value="Tent C">Tent B</option>
                        </select>
                    </div>
                   

                    <button name="save" class="btn btn-dark btn-block">Approve</button>

                </form>

            </div>
        </div>
        


    </div>
</div>


</body>
</html>