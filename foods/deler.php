<?php

if (isset($_GET['id']))
{
    $id =$_GET["id"];
    require 'DB.php';
    $sql ="DELETE FROM `refugees` WHERE  r_id = $id";
    //echo  $sql;
    mysqli_query($conn, $sql);
    header("location:portalrefugee.php"); //redirect to show.php

}
