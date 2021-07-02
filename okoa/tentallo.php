<?php


if (isset($_GET["id"])){
    $id = $_GET["id"];
    require 'DB.php';
    $sql="SELECT * FROM `refugees` WHERE  r_id= $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);
}

if (isset($_POST["save"])) {
    require 'DB.php';
    extract($_POST);
    
        $sql = "INSERT INTO `report_refugee`(`report_id`, `camp_id`, `re_name`, `tent_name`) 
        VALUES ('null','$camp_id','$re_name','$tent_name')";
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
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Camp ID</label>
                        <input type="text" class="form-control" name="camp_id"  value="<?=$c_id?>" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Refugee Name</label>
                        <input type="text" name="re_name" class="form-control" value="<?=$r_name?>" required>
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