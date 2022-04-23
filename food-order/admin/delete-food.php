<?php

include ("../config/constants.php");


 if(isset($_GET['id']) AND isset($_GET['image_name']))//either use '&&' or 'AND'
 {
     //process to delete
     //1.Get id and image_name
     $id = $_GET['id'];
     $image_name = $_GET['image_name'];

     //2.Remove image if available
     //Check whether image is available or not and delete only if available
     if($image_name != ""){

     $path = "../images/food/".$image_name;
     $remove = unlink($path);

    //check whether the image is removed or not
     if($remove==false)
     {
         //failed to remove image
         $_SESSION['upload'] = "<div class='error'>Failed to remove image file!</div>";
         header("location:".SITEURL."admin/manage-food.php");
         die();//stop the process of deleting food
     }
    }

     //3.Remove food from db
     $sql = "DELETE FROM tbl_food WHERE id=$id";

     //execute the query
     $res = mysqli_query($conn, $sql);

     //check whether the query executed or not and then set the session messo respectively
     if($res==true){
        //food deleted
        $_SESSION['delete'] = "<div class='success'>Food deleted successfully!</div>";
        header("location:".SITEURL."admin/manage-food.php");
     }
     else{
        //failed delete and redirect
        $_SESSION['delete'] = "<div class='error'>Failed to delete food!</div>";
        header("location:".SITEURL."admin/manage-food.php");

     }

 }else{
     //redirect to manage food
     $_SESSION['unauthorized'] = "<div class='error'>Unauthorized access! </div>";
     header("location:".SITEURL."admin/manage-food.php");
     
 }
 
 ?>