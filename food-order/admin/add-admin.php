<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br> 

        <?php 
        //Checking whether the session is set or not
          if(isset($_SESSION['add']))
          {
              echo $_SESSION['add'];//Display the session message if set
              unset($_SESSION['add']);//Remove session message
          }
        ?>
        <br>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                    
                </tr>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" placeholder="Your username"></td>
                    
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" placeholder="Your password"></td>
                    
                </tr>
                <tr>
                    <td colspan="2">
                    <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
    </div>
</div>

<?php include('partials/footer.php');
?>


<?php 
// Process the value from form and save in database 

// Check whether the submit button is clicked or not 
    if(isset($_POST['submit'])){
    // Button is clicked

    //1. Get the data from form
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));//Password encryption using md5()
    
    //2.SQL query to save data to database
    $sql = "INSERT INTO tbl_admin SET
            full_name ='$full_name',
            username ='$username',
            password ='$password'
            ";
    
    //3.Executing query and saving data in DB
    $res = mysqli_query($conn, $sql);
    
    //4.Check whether the (Query is executed) data is inserted or not and display appropriate message 
    if($res==TRUE) {
        //Data inserted
        //create a session variable to display message
        $_SESSION['add'] = "<div class='success'>Admin added successfully!</div>";
        //Redirect page to manage-admin.php
        header("location:".SITEURL.'admin/manage-admin.php');
    
    }else
    {
        //Data not inserted
        //create a session variable to display message
        $_SESSION['add'] = "<div class='error'>Failed to add admin!</div>";
        //Redirect page to add-admin
        header("location:".SITEURL.'admin/add-admin.php');
    }
}


?>
