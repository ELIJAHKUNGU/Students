<?php 
//include the constants file
include("../config/constants.php");

//check whether the id and image_name value is set or not
if(isset($_GET['id']) && isset($_GET['image_name'])){
    //Get the value and delete

    $id = $_GET['id'];
    $image_name = $_GET['image_name'];

    //remove physical image if available
    if($image_name!=""){
        //removing image from the folder
        $path = "../images/category/".$image_name;
        $remove = unlink($path);//boolean which by default is TRUE
        
        //if failed to remove image set error message then stop the process
        if($remove==FALSE){
        
            $_SESSION['remove'] = "<div class='error'>Failed to remove category image!</div>";
            header("location:".SITEURL."admin/manage-category.php");
            //stop the process
            die();

        }

    }
    //delete data from db; create query to delete data from the db
        $sql = "DELETE FROM tbl_category WHERE id=$id";

        //execute the query
        $res = mysqli_query($conn, $sql);

        //check whether data has been deleted from db or not
        if($res==true){
            //Set a success message
            $_SESSION['delete'] = "<div class='success'>Category deleted successfully!!</div>";
            header('location:'.SITEURL.'admin/manage-category.php');
        }
        else{
            //redirect with error message
            $_SESSION['delete'] = "<div class='success'>Failed to delete category!!</div>";
            header('location:'.SITEURL.'admin/manage-category.php');
        }
}else
{
    //redirect to manage category
    header("location:".SITEURL."admin/manage-category.php"); 
}



?>