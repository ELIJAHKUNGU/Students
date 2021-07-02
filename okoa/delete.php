<?php

if (isset($_GET['id']))
{
    $id =$_GET["id"];
    require 'DB.php';
    $sql ="DELETE FROM `suppliers` WHERE s_id = $id";
    //echo  $sql;
    mysqli_query($conn, $sql);
    header("location:portalsupplier.php"); //redirect to show.php

}
