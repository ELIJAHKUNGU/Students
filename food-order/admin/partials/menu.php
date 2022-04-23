<?php 
    include("../config/constants.php");
    include("login-check.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <script src="../js/new.js"></script>
    <title>Menu page</title>
</head>
<body>
    <!-- Menu section starts -->
    <div class="menu">
        <div class="wrapper">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="manage-admin.php">Admin</a></li>
            <li><a href="manage-category.php">Category</a></li>
            <li><a href="manage-food.php">Food</a></li>
            <li><a href="manage-order.php">Reservations</a></li>
            <li><a href="log-out.php">Log Out</a></li>
        </ul>
        </div>
        
    </div>
    <!-- Menu section ends -->