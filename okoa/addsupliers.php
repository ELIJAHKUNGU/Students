<?php
if (isset($_POST["save"])) {
    require 'DB.php';
    extract($_POST);
    
        $sql = "INSERT INTO `suppliers`(`s_id`, `sc_id`, `s_name`, `s_item`, `s_quantity`, `s_day`)
         VALUES ('null','$sc_id','$s_name','$s_item','$s_quantity','$s_quantity')";
        mysqli_query($conn, $sql);
        header("location:portalsupplier.php");


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
              SUPPLIERS DETAILS
                
                </div>
            </div>
            <div class="card-body">
                <?php
                if (isset($message))
                    echo "<p class='text-danger'>$message</p>"


                ?>

                <form action="addsupliers.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Suppliers ID</label>
                        <input type="numerical" class="form-control" name="sc_id" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Suppliers Full Name</label>
                        <input type="text" class="form-control" name="s_name" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Item Name</label>
                        <input type="numerical" class="form-control" name="s_item" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Quantity</label>
                        <input type="numerical" class="form-control" name="s_quantity" required>
                    </div>
                   

                    <button name="save" class="btn btn-dark btn-block">Approve</button>

                </form>

            </div>
        </div>


    </div>
</div>


</body>
</html>