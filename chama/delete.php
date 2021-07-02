<?php

if (isset($_GET['id']))
{
    $id =$_GET["id"];
    require 'DB.php';
    $sql ="DELETE FROM `group` WHERE  g_id = $id";
    //echo  $sql;
    mysqli_query($conn, $sql);
    header("location:groups.php"); //redirect to show.php

}
