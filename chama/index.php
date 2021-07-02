<?php
require "security.php";
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
                <h1>Chama</h1>
            </div>
            <div class="search">
                <input type="text" placeholder="search your Chama">
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
                    <a href="./grou.php">Create Group</a>
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
        <div class="col-sm-8">
         <div class="mt-5 pt-5">
         <h1 class="text-center mt-5">Hello there ? </h1>
         </div>
           <h4 class="text-center mt-3">Welcome to Chama App , we lender loans</h4>
           
        </div>
       </div>
    </div>
</body>
</html>