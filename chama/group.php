<?php
if (isset($_POST["save"])) {
    require 'DB.php';
    extract($_POST);
    
        $sql = "INSERT INTO `group`(`g_id`, `g_name`, `g_m`, `g_t`, `date`)
         VALUES ('null','$g_name','$g_m','$g_t','$date')";
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
        <div class="col-sm-3">
            <div class="sidebar-menu">
                <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <a href="./index.php">Home</a>
                </div>
                <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <a href="./loans.php">Loans</a>
                </div>
                 
                 <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                         <i class="fa fa-bars"></i>
                    </div>
                    <a href="./groups.php">Groups</a>
                </div>
                 <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="./group.php">Create Group</a>
                </div>
                
                 <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="./members.php">Members</a>
                </div>
                <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="./viewmembers.php">View Members</a>
                </div>
                 <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <a href="./register.php">Register member</a>
                </div>
                <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <a href="./logout.php">Log Out</a>
                </div>
                

                
               
            </div>
        </div>
        <div class="col-sm-6">
            <form action="group.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Name Of Group</label>
                    <input type="text" class="form-control" name="g_name" required>
                </div>
                <div class="form-group">
                    <label for="title">Monthly Contributions</label>
                    <input type="number" class="form-control" name="g_m" required>
                </div>
                <div class="form-group">
                    <label for="title">Members Totals</label>
                    <input type="number" class="form-control" name="g_t" required>
                </div>
                <div class="form-group">
                    <label for="title">Date OF Registration</label>
                    <input type="date" class="form-control" name="date" required>
                </div>
                
                <button name="save" class="btn btn-dark btn-block">Save</button>

            </form>
        </div>
        </div>
       </div>
    </div>
</body>
</html>