<?php include("partials/menu.php"); ?>

<?php 
//check whether the id is set or not
if(isset($_GET['id']))
{
$id = $_GET['id'];

//Query to get the selected food
$sql2 = "SELECT * FROM tbl_food WHERE id=$id";

$res2 = mysqli_query($conn, $sql2);

//get the value based on the query executed
$row2 = mysqli_fetch_assoc($res2);

//get the individual values of selected rows
$title = $row2['title'];
$description = $row2['description'];
$price = $row2['price'];
$current_image = $row2['image_name'];
$current_category = $row2['category_id'];
$featured = $row2['featured'];
$active = $row2['active'];
}
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Food</h1>
    
    <br><br>

    <form action="" method="POST" enctype="multipart/form-data">
        <table class="tbl-30">
        <tr>
            <td>Title: </td>
                <td>
                    <input type="text" name="title" value="<?php echo $title; ?>">
                </td>
        </tr>
        <tr>
            <td>Description: </td>
                <td>
                    <textarea name="description" cols="30" rows="5"><?php echo $description; ?></textarea>
                </td>
        </tr>
        <tr>
            <td>Price: </td>
                <td>
                    <input type="number" name="price" value="<?php echo $price; ?>">
                </td>
        </tr>
        <tr>
            <td>Current image: </td>
                <td>
                    <?php 
                    //check whether image is availble or not
                    if($current_image == ""){
                        //image not available
                        echo "<div class='error'>Image not available!</div>";
                    }else {
                        //image available
                        ?>
                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $current_image; ?>" width="100px">
                        <?php
                    }
                    
                    ?>
                </td>
        </tr>
        <tr>
            <td>Select New Image: </td>
                <td>
                    <input type="file" name="image">
                </td>
        </tr>
        <tr>
            <td>Category: </td>
            <td>
                <select name="category">
                <?php
                //query to get active categories
                $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

                $res = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);

                if($count>0){
                    //category available
                    while($row = mysqli_fetch_assoc($res)){
                        $category_id = $row['id'];
                        $category_title = $row['title'];
                        ?>
                        <option <?php if($current_category == $category_id){ echo "selected";} ?> value="<?php echo $category_id; ?>"><?php echo $category_title; ?></option>
                        <?php
                    }
                }
                else{
                    //category unavailable
                    echo "<option value='0'>Category not available.</option>";
                }
                
                ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>Featured: </td>
                <td>
                    <input <?php if($featured == "Yes"){ echo "checked";} ?> type="radio" name="featured" value="Yes"> Yes
                    <input <?php if($featured == "No"){ echo "checked";} ?> type="radio" name="featured" value="No"> No
                </td>
        </tr>
        <tr>
            <td>Active: </td>
                <td>
                    <input <?php if($active == "Yes"){ echo "checked";} ?> type="radio" name="active" value="Yes"> Yes
                    <input <?php if($active == "No"){ echo "checked";} ?> type="radio" name="active" value="No"> No
                </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                <input type="submit" name="submit" value="Update food" class="btn-secondary"> 
            </td>
        </tr>
        </table>
    </form>
    
    <?php 
    //check whether the btn is clicked or not
        if(isset($_POST['submit'])){
        //echo "cliiiiiiiiiiiiiiickeD@!!";
        //1.Get all the details from the form
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $current_image = $_POST['current_image'];
        $category = $_POST['category'];

        $featured = $_POST['featured'];
        $active = $_POST['active'];

        //2.Upload image if selected
        if(isset($_FILES['image']['name'])){
            //upload button clicked
            $image_name = $_FILES['image']['name'];//new image name

            //check whether the file is available or not
            if($image_name != ""){
                //image is available therefore rename it
                $ext = end(explode('.', $image_name));
                $image_name = "food-name-".rand(0000, 9999).'.'.$ext;
                
                //Get the src and dst path for the new image
                $src = $_FILES['image']['tmp_name'];
                $dst = "../images/food/".$image_name;

                $upload = move_uploaded_file($src, $dst);

                //check whether the image is uploaded or not
                if($upload==false){
                    $_SESSION['upload'] = "<div class='error'>Failed to upload the image!</div>";
                    //redirect to manage food
                    header('location:'.SITEURL.'admin/manage-food.php');
                    //stop the process
                    die();
             

             //3.Remove image if new image is uploaded and current image exists
             //B.remove current image if available
             if($current_image!=""){
                 //current image is available, thus remove it
                 $remove_path = "../images/food/".$current_image;

                 $remove = unlink($remove_path);

                 if($remove==false){
                     //failed to remove current image
                     $_SESSION['remove-failed'] = "<div class='error'>Failed to remove current image!</div>";
                     header('location:'.SITEURL.'admin/manage-food.php');
                    //stop the process
                    die();
             }
                 }
             }
            }
        else{
        $image_name = $current_image;
                }
        }
        else {
        $image_name = $current_image;
        }
        
        //4.update the food in the db
        $sql3 = "UPDATE tbl_food SET
        title = '$title',
        description = '$description',
        price = $price,
        image_name = '$image_name',
        category_id = '$category',
        featured = '$featured',
        active = '$active'
        WHERE id=$id
        ";

        //execute query
        $res3 = mysqli_query($conn, $sql3);

        if($res3==true){
            //query executed and updated
            $_SESSION['update'] = "<div class='success'>Food updated successfully!</div>";
            header('location:'.SITEURL.'admin/manage-food.php');
                   
        }
        else {
            //failed
            $_SESSION['update'] = "<div class='error'>Failed to update food!</div>";
            header('location:'.SITEURL.'admin/manage-food.php');
        }
    }
    ?>
    
</div>
</div>




<?php include("partials/footer.php"); ?>








