<?php

if (isset($_GET['id']))
{
    $id =$_GET["id"];
    require 'DB.php';
    $sql ="DELETE FROM `report_supplier` WHERE    sr_id = $id";
    //echo  $sql;
    mysqli_query($conn, $sql);
    header("location:reportsuppliers.php"); //redirect to show.php

}
