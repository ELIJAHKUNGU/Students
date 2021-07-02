<?php
require "security.php";
?>


<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="#">OKOA REFUGEE</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--Navbar Links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="portalrefugee.php">Portal Refugee</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="portalsupplier.php">Portal Suppliers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="save.php">Capture Refugee Details</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="addsupliers.php">Capture Suppliers Details</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Reports
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="reports.php">Report Refugees</a>
                    <a class="dropdown-item" href="reportsuppliers.php">Report Suppliers</a>
                  
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tent.php">Tent</a>
            </li>



        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Logged In as <?=$_SESSION["info"]["names"]?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
            </li>
        </ul>
    </div>
</nav>
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>