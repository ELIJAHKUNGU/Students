<?php

if (isset($_GET['id']))
{
    $id =$_GET["id"];
    require 'DB.php';
    $sql ="DELETE FROM `loans` WHERE l_id = $id";
    //echo  $sql;
    mysqli_query($conn, $sql);
    header("location:loans.php"); //redirect to show.php

}
