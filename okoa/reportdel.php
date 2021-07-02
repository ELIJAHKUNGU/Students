<?php

if (isset($_GET['id']))
{
    $id =$_GET["id"];
    require 'DB.php';
    $sql ="DELETE FROM `report_refugee` WHERE   report_id = $id";
    //echo  $sql;
    mysqli_query($conn, $sql);
    header("location:reports.php"); //redirect to show.php

}
