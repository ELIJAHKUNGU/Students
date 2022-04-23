<?php include('partials/menu.php');
?>

    <!-- Main content section starts -->
    <div class="main-content">
    <div class="wrapper">
        <h1>MANAGE ADMIN</h1>
        <br >
        
        <?php 
          if(isset($_SESSION['add'])){
              echo $_SESSION['add'];//Displaying Session message
              unset ($_SESSION['add']);//Removing Session message
          }
          if(isset($_SESSION['delete'])){
              echo $_SESSION['delete'];//Displaying Session message
              unset ($_SESSION['delete']);//Removing Session message
          }
          if(isset($_SESSION['update'])){ 
              echo $_SESSION['update'];//Displaying Session message
              unset ($_SESSION['update']);//Removing Session message
          }
          if(isset($_SESSION['user-not-found'])){
              echo $_SESSION['user-not-found'];//Displaying Session message
              unset ($_SESSION['user-not-found']);//Removing Session message
          }
          if(isset($_SESSION['change-pwd'])){
              echo $_SESSION['change-pwd'];//Displaying Session message
              unset ($_SESSION['change-pwd']);//Removing Session message
          }
          if(isset($_SESSION['pwd-not-match'])){
            echo $_SESSION['pwd-not-match'];//Displaying Session message
            unset ($_SESSION['pwd-not-match']);//Removing Session message
        }
    
          

        ?>
        <br ><br >

        <!-- Button to add admin -->
        <a href="add-admin.php" class="btn-primary">Add Admin</a>
        <br ><br ><br >
         <table class="tbl-full">
             <tr>
                <th>S.N</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
             </tr>
             <?php 
             //Query to get all admin
             $sql = "SELECT * FROM tbl_admin";

             //execute the query
             $res = mysqli_query($conn, $sql);

             //Check whether the Query is executed or not
             if($res==TRUE)
             {
                 //COunt to check whether we have data in DB
                 $count = mysqli_num_rows($res);//Function to get all the rows in db
                 $sn = 1;//Auto increment of id
                 if($count > 0) {
                     //We have data in db
                     while($rows = mysqli_fetch_assoc($res)){
                         //USing while loop to get all data from db.It will run as long as we have data in db
                        //Get individual data
                        $id = $rows['id'];
                        $full_name = $rows['full_name'];
                        $username = $rows['username'];

                        //Display the values in our table
                        ?>
                     <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['username']; ?></td>
                <td>
                    <a href="<?php echo SITEURL;?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change password</a>
                    <a href="<?php echo SITEURL;?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update admin</a>
                 <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete admin</a><!--Passing an id in URL is GET method whereas in form is POST method-->
                 </td>
                    </tr>


                        <?php
                     }
                     
                 }
                 else {
                     //We dont have data in db
                 }
             }
             
             
             
             ?>
             </table>
        </div>
        <div class="clear-fix"></div>
    </div>
    <!-- Main content section ends -->

    <?php include('partials/footer.php'); ?>
   
