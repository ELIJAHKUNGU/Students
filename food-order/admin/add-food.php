<?php 
include ("partials/menu.php"); ?>

<div class="main-content">
<div class="wrapper">
<h1>Add Food</h1>

<br><br>

<?php
if(isset($_SESSION['upload'])){
    echo $_SESSION['upload'];
    unset($_SESSION['upload']);
}

?>

<form action="" method="POST" enctype="multipart/form-data">
<table class="tbl-30">
    <tr>
        <td>Title: </td>
        <td><input type="text" name="title" placeholder="Title of the food"></td>
    </tr>
    <tr>
        <td>Description: </td>
        <td><textarea name="description" cols="30" rows="5" placeholder="Description of the food."></textarea></td>
    </tr>
    <tr>
        <td>Price: </td>
        <td><input type="number" name="price" placeholder="Price(Ksh)"></td>
        
    </tr>
    <tr>
        <td>Select Image: </td>
        <td><input type="file" name="image"></td>
    </tr>
    <tr>
        <td>Category: </td>
        <td><select name="category">

        <?php
        //Create php code to show categories in db
        //1.Create sql query to get all active categories from db
        $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

        //Execute the query
        $res = mysqli_query($conn, $sql);

        //Count rows to check whether we have categories or not
        $count = mysqli_num_rows($res);

        if($count > 0){
            //We have categories
            while($row = mysqli_fetch_assoc($res)){
                $id = $row['id'];
                $title = $row['title'];
                ?>
                <option value="<?php echo $id; ?>"><?php echo $title; ?></option>
                <?php

            }
        }else{
            //we dont have categories        
            ?>
            <option value="0">No category found</option>
            <?php
        
        
        }
        
        ?>
            
        </select></td>
    </tr>
    <tr>
        <td>Featured: </td>
        <td>
            <input type="radio" name="featured" value="Yes"> Yes
            <input type="radio" name="featured" value="No"> No
        </td>
    </tr>
    <tr>
        <td>Active: </td>
        <td>
            <input type="radio" name="active" value="Yes"> Yes
            <input type="radio" name="active" value="No"> No
        </td>
    </tr>
    <tr>
        <td colspan="2">
        <input type="submit" name="submit" value="Add Food" class="btn-secondary"> 
            
        </td>
    </tr>
    


</table>


</form>

<?php 
//Check whether submit button is clicked or not
if(isset($_POST['submit']))
{
    //1.Get the data from the form
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    
    //check whether the radio button for featured & active are checked or not
     if(isset($_POST['featured'])){
        $featured = $_POST['featured'];
     }else {
        $featured = "No";//setting default value
     }

     if(isset($_POST['active'])){
        $active = $_POST['active'];
     }else {
        $active = "No";
     }


    //2.Upload image if selected
    //check whether the select image is clicked or not and upload image image only if image is selected
    if(isset($_FILES['image']['name'])){
        //Get details for selected image
        $image_name = $_FILES['image']['name'];

        //check whether the image is selected or not and upload if selected only
        if($image_name != ""){
            //image is selected
            //A.rename the image
            //Get the extension of selected image 
            //$ext =  end(explode('.', $image_name));

            //create new name for image
            //$image_name = "Food-name-".rand(0000, 9999).".".$ext;

            //B.Upload the image
            //Get the src path and destination path
            $src = $_FILES['image']['tmp_name'];

            $dst = "../images/food/".$image_name;

            //Finally upload selected image
            $upload = move_uploaded_file($src, $dst);

            //Check whether image uploaded or not
            if($upload==FALSE){
                //failed to upload image
                $_SESSION['upload'] = "<div class='error'>Failed to upload image! </div>";
                header("location:".SITEURL."admin/add-food.php");
                die();//stop the process

            }
        }
    }
    else {
        $image_name = "";//setting default value as blank
    }

    //3.Insert into db
    //For numerical value we do not need to pass value inside quotes '' but for string value its compulsory
    $sql2 = "INSERT INTO tbl_food SET
    title =  '$title',
    description =  '$description',
    price =  $price,
    image_name =  '$image_name',
    category_id =  $category,
    featured =  '$featured',
    active =  '$active'
    ";
     
     //execute query
     $res2 = mysqli_query($conn, $sql2);

     //check whether data is inserted or not
     if($res2==true){
         //data inserted successfully
         $_SESSION['add'] = "<div class='success'>Food added successfully! </div>";
         header("location:".SITEURL."admin/manage-food.php");
     }else {
        //data inserted unsuccessfully
        $_SESSION['add'] = "<div class='error'>Failed to add food! </div>";
        header("location:".SITEURL."admin/manage-food.php");
     }
    
}



?>

</div>
</div>






<?php include("partials/footer.php"); ?>
