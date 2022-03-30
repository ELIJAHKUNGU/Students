<?php
if (isset($_GET['id']))
{
    $id =$_GET["id"];
    require 'DB.php';
    $sql ="delete from movies where movie_id = $id";
    //echo  $sql;
    mysqli_query($conn, $sql);

}
header("location:show.php"); //redirect to show.php