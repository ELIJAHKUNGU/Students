<?php 
//include constants.php file here
    include("../config/constants.php");

//1.Get the id of the admin to be deleted
$id = $_GET['id'];

//2.Get SQL Query to delete admin
$sql = "DELETE FROM tbl_admin WHERE id=$id";

//Execute the query
$res = mysqli_query($conn, $sql);

//Check wheteher the query executed successully or not
if($res==TRUE){
    //create a session variable to display message
    $_SESSION['delete'] = "<div class='success'>Admin deleted successfully!</div>";
        //Redirect page to manage-admin.php
    header("location:".SITEURL.'admin/manage-admin.php');
}else{
    $_SESSION['delete'] = "<div class='error'>Admin deleted unsuccessfully!</div>";
        //Redirect page to manage-admin.php
        header("location:".SITEURL.'admin/manage-admin.php');
}





?>