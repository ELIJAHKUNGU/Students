<?php
if (isset($_POST["save"])) {
    require 'DB.php';
    extract($_POST);
    
        $sql = "INSERT INTO `tent`(`t_id`, `te_id`, `t_name`) 
        VALUES ('null','$te_id','$t_name')";
        mysqli_query($conn, $sql);
        header("location:portalrefugee.php");


}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Tent</title>
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
                Tents DETAILS
                
                </div>
            </div>
            <div class="card-body">
                <?php
                if (isset($message))
                    echo "<p class='text-danger'>$message</p>"


                ?>

                <form action="tent.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Tent ID</label>
                        <input type="text" class="form-control" name="te_id" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Tent Name</label>
                        <input type="text" class="form-control" name="t_name" required>
                    </div>
                    <button name="save" class="btn btn-dark btn-block">Approve</button>

                </form>

            </div>
        </div>


    </div>
</div>


</body>
</html>