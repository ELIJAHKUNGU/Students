<?php include('partials/menu.php'); 
?>
<div class="main-content">
    <div class="wrapper"><h1>MANAGE FOOD</h1>
    <br>

    <?php 
    if(isset($_SESSION['add'])){
        echo $_SESSION['add'];
        unset ($_SESSION['add']);
    }
    if(isset($_SESSION['delete'])){
        echo $_SESSION['delete'];
        unset ($_SESSION['delete']);
    }
    if(isset($_SESSION['upload'])){
        echo $_SESSION['upload'];
        unset ($_SESSION['upload']);
    }
    
    if(isset($_SESSION['unauthorized'])){
        echo $_SESSION['unauthorized'];
        unset ($_SESSION['unauthorized']);
    }
    if(isset($_SESSION['update'])){
        echo $_SESSION['update'];
        unset ($_SESSION['update']);
    }
    if(isset($_SESSION['remove-failed'])){
        echo $_SESSION['remove-failed'];
        unset ($_SESSION['remove-failed']);
    }
    
    
    ?>
    <br>
        <!-- Button to add admin -->
        <a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-primary">Add Food</a>
        <br ><br ><br >
         <table class="tbl-full">
             <tr>
                 <th>S.N</th>
                 <th>Title</th>
                 <th>Price</th>
                 <th>Image</th>
                 <th>Featured</th>
                 <th>Active</th>
                 <th>Actions</th>
             </tr>

             <?php
             //create an sql query to get all the food 
             $sql = "SELECT * FROM tbl_food";

             //Execute the query
             $res = mysqli_query($conn, $sql);

             //check whether food is there or not
             $count = mysqli_num_rows($res);

             //create serial number variable and set default as 1
             $sn = 1.;
             if($count>0){
                 //we have food in db
                 //Get the foods from db and display
                 while($row = mysqli_fetch_assoc($res)){
                     //Get values from individual columns
                     $id = $row['id'];
                     $title = $row['title'];
                     $price = $row['price'];
                     $image_name = $row['image_name'];
                     $featured = $row['featured'];
                     $active = $row['active'];

                     ?>
                <tr>
                 <td><?php echo $sn++; ?></td>
                 <td><?php echo $title; ?></td>
                 <td>Ksh<?php echo $price; ?></td>
                 <td>
                     <?php 
                     //check whether we have image or not
                     if($image_name==""){
                         //we do not have image, display error message
                         echo "<div class='error'>Image not added!</div>";
                     }else
                     ?>
                     <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" width="100px">
                     <?php
                     
                     
                     ?>
                </td>
                 <td><?php echo $featured; ?></td>
                 <td><?php echo $active; ?></td>
                 
                 <td><a href="<?php echo SITEURL; ?>admin/update-food.php?id=<?php echo $id; ?>" class="btn-secondary">Update food</a>
                 <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php
                  echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete food</a>
                 </td>
             </tr>




                     <?php
                 }
             }else{
                //food unavailable
                echo "<tr><td colspan='7' class='error'> Food not added yet .</td></tr>";

             }
             

            ?>
             
             
             
         </table>
</div>
</div>
<?php include('partials/footer.php'); 
?>