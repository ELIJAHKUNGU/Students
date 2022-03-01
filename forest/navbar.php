<?php


session_start();
if (!isset($_SESSION["info"])){
   header("location:login.php");
}
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/all.min.css">
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/bootstrap.css">
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/bootstrap.min.css">
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/style.css">
    <title>FOREST MANAGEMENT SYSTEM</title>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Ashley movie shop</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--Navbar Links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="save.php">Add New Movie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="show.php">Show  Movies</a>
            </li>



        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Logged In as <?=print_r( $_SESSION["info"]["username`"]);?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
            </li>
        </ul>
    </div>
</nav>