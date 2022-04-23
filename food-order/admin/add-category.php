<?php include('partials/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>
        <br><br>
    
        <?php  
        if(isset($_SESSION['add'])){
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if(isset($_SESSION['upload'])){
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        
        ?>
        
        <br>
        <!-- Add category form starts here-->
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Category Title">
                    </td>
                </tr>
                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
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
                    <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                    
                </tr>
            </table>
        </form>

        <?php 
        //check whether the submit button is clicked or not
        if(isset($_POST['submit'])){
            //echo 'clicked';
            //1.Get the value from category forms
         $title = mysqli_real_escape_string($conn, $_POST['title']);

         //for radio input type, we need to check the button if its selected or not
        if(isset($_POST['featured'])){
            //get the value from form
            $featured = $_POST['featured'];
        }else{
            //set default value
            $featured = "No";
        }
        
        if(isset($_POST['active'])){
            //get the value from form
            $active = $_POST['active'];
        }else{
            //set default value
            $active = "No";
        }
        //check whether the image is selected or not and set the value for image name accordingly
        //print_r($_FILES['image']);
        //die();//break the code here

        if(isset($_FILES['image']['name'])){

            //upload image
            //to upload image we need image name, source path and destination path
            $image_name = $_FILES['image']['name'];
            //upload image only if image is selected
            if($image_name != ""){
            //auto rename our image
            //Get the extension of our image
            $ext = end(explode('.', $image_name));

            //rename the image
            //$image_name = "Food_category_".rand(000, 999).'.'.$ext;

            $source_path = $_FILES['image']['tmp_name'];

            $destination_path = "../images/category/".$image_name;

            //finally uplaod the image
            $upload = move_uploaded_file($source_path, $destination_path);

            //check whether the image is uploaded or not & if not redirect with an error message

            if($upload==false){
               $_SESSION['upload'] = "<div class='error'>Failed to upload image! </div>";
               header('location:'.SITEURL.'admin/add-category.php');
            
                //stop the process for it not to be saved to the db
                die();
            }
        }
        }else{
            //dont upload image and set image_value as blank
            $image_name = "";
        }

        //2.Create an sql query to insert category into db
        $sql = "INSERT INTO tbl_category SET
        title='$title',
        image_name = '$image_name',
        featured='$featured',
        active='$active'
        ";

        //3.Execute the query and save in db
        $res = mysqli_query($conn, $sql);

        //4.Check whether the query executed or not and data added or not
        if($res==TRUE){
        //Query executed and category added
        $_SESSION['add'] = "<div class='success'>Category added successfully!</div>";
        //redirect to manage category page
        header("location:".SITEURL."admin/manage-category.php");
        }else{
        //Failed to add category
        $_SESSION['add'] = "<div class='error'>Failed to add category!</div>";
        //redirect to add category page
        header("location:".SITEURL."admin/add-category.php");
        }
        }
        
        
        ?>
    </div>
</div>





<?php include('partials/footer.php'); ?>