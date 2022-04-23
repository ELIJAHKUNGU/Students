<?php include('../config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <title>Login - Viki Foods</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap');
  * {
    font-family: "Quicksand", sans-serif;
}
    </style>
</head>

<body>
    <div class="login">
        <h1 class="text-center">Login</h1>
        <br>

        <?php 
        if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        if(isset($_SESSION['no-login-message'])){
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }
        ?>
        <br><br>

        <!-- login form starts here -->
        <form action="" method="POST" class="text-center">
        Username:
        <input type="text" name="username" placeholder="Enter username"><br><br>
        
        Password:
        <input type="password" name="password" placeholder="Enter password"><br><br>
        
        <input type="submit" name="submit" value="Login" class="btn-primary"><br><br>

        </form>



        <p class="text-center">Created by - <a href="../viki_durags/index.html" target="_blank">Viki</a></p>
    </div>
</body>
</html>

<?php 
//check whether the submit button is clicked or not
if(isset($_POST['submit'])){
    //1.Get the data from the login form
    $username = mysqli_real_escape_string($conn, $_POST['username']);//mysqli_real_escape_string prevents vulnerabilities from hacks
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

    //2.Check whether the username and pwd exist or 
    $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

    //3.Execute the query
    $res = mysqli_query($conn, $sql);
    
    //4.Count rows to check whether user exists or not
    $count = mysqli_num_rows($res);

    if($count==1){
        //user available
        $_SESSION['login'] = "<div class='success text-center'>Login successful!! </div>";
        $_SESSION['user'] = $username;//to check whether the users logged in or not and logout will unset it

        header('location:'.SITEURL.'admin/');
    }else{
        //User doesnt exist
        $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match! </div>";
        header("location:".SITEURL."admin/login.php");
    }

}

?>