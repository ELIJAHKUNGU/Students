<?php


if (isset($_GET["id"])){
    $id = $_GET["id"];
    require 'DB.php';
    $sql="SELECT * FROM `members`  WHERE  m_id= $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);
}

if (isset($_POST["save"])) {
    require 'DB.php';
    extract($_POST);
    
        $sql = "INSERT INTO `loans`(`l_id`, `m_name`, `dob`, `chama`, `dor`, `da`, `loan`) 
        VALUES ('null','$m_name','$dob','$chama','$dor','$da','$loan')";
        mysqli_query($conn, $sql);
        header("location:index.php");


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCash</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./fontawesome-free-5.0.1/css/fontawesome-all.css">
</head>
<body>
    <div class="dashboard">
        <div class="top-navbar">
            <div class="logo">
                <h1>Unicash</h1>
            </div>
            <div class="search">
                <input type="text" placeholder="search your loan history">
            <i class="fa fa-search"></i>
            </div>
            <div class="account">
                <div class="message-iocn">
                    <i class="fa fa-comment-alt"></i>
                </div>
                <div class="username">
                    <img src="./images/abt1.jpg" alt="">
                    <span>Admin</span>
                </div>
            </div>
        </div>
       <div class="row">
        
        <div class="col-sm-6">
            <p class="text-danger">You are elegible for loan</p>
            <form action="loan.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
            
                    <label for="title">Full Name</label>
                    <input type="text" class="form-control" value="<?=$m_name?>" name="m_name" placeholder="eg.John Doe" required>
                </div>
                <div class="form-group">
                    <label for="title">D.O.B</label>
                  <input type="text" name="dob" id="" value="<?=$dob?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Chama </label>
                    <input type="text" class="form-control" value="<?=$chama?>" name="chama" required>
                </div>
                <div class="form-group">
                    <label for="title">Date Of Registration</label>
                  <input type="text" name="dor" id="" value="<?=$dor?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Dates Allocation</label>
                  <input type="date" name="da" id="" value="<?=$dor?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Loan </label>
                  <input type="number" placeholder="eg.1000"  name="loan" id="" class="form-control">
                </div>
                
                <button name="save" class="btn btn-dark btn-block">Save</button>

            </form>
        </div>
       </div>
    </div>
</body>
</html>