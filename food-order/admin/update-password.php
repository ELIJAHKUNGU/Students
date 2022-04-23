<?php include("partials/menu.php"); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br><br>

        <?php 
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }

        ?> 

        <form action="" method="POST">
        <table class="tbl_30"> 
            <tr>
                <td>Current password: </td>
                <td>
                    <input type="password" name="current_password" placeholder="Current password">
                </td>
            </tr>
            <tr>
                <td>New Password: </td>
                <td>
                    <input type="password" name="new_password" placeholder="New password">
                </td>
            </tr>
            <tr>
                <td>Confirm Password: </td>
                <td>
                    <input type="password" name="confirm_password" placeholder="Confirm password">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <input type="hidden" name="id" value="<?php echo $id;  ?>">
                <input type="submit" name="submit" value="Change password" class="btn-secondary">
                </td>
            </tr>

        </table>
        </form>

        
        <?php
        //check whether the submit button is clicked or not
        if(isset($_POST['submit'])){
            //echo "clicked";
            //1.Get the data from form
            $id = $_POST['id'];
            $current_password = md5($_POST['current_password']);
            $new_password = md5($_POST['new_password']);
            $confirm_password = md5($_POST['confirm_password']);


            //2.Check whether the user with current id and password exists or not
            $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";
            
            //Execute the query
            $res = mysqli_query($conn, $sql);

            if($res==TRUE){
                //check whether data is available or not
                $count = mysqli_num_rows($res);
                if($count==1){
                //User exists and password can be changed
                //echo "user found";

                //check whether the new password and confirm password matches or not
                if($new_password==$confirm_password){
                    //update the password
                    $sql2 = "UPDATE tbl_admin SET 
                    password='$new_password'
                    WHERE id=$id
                    ";

                    //Execute the query
                    $res2 = mysqli_query($conn, $sql2);

                    //Check whether the query is executed or not
                    if($res2==TRUE){
                        //display success message
                        $_SESSION['change-pwd'] = "<div class='success'>Password changed successfully!</div>";
                        //Redirect the user
                        header("location:".SITEURL.'admin/manage-admin.php');
                    }else{
                        //display error message
                        $_SESSION['change-pwd'] = "<div class='error'>Failed to change password!</div>";
                        //Redirect the user
                        header("location:".SITEURL.'admin/manage-admin.php');
                    }
                }else{
                    //redirect to manage admin page with error message
                    $_SESSION['pwd-not-match'] = "<div class='error'>Password did not match!</div>";
                //Redirect the user
                header("location:".SITEURL.'admin/update-password.php');
                }
                
                }
                else{
                //User doesn't exist; set message and redirect
                $_SESSION['user-not-found'] = "<div class='error'>User not found!</div>";
                //Redirect the user
                header("location:".SITEURL.'admin/manage-admin.php');
                }
            }
            
        }


        ?>
            </div>
        </div>


<?php include("partials/footer.php"); ?>