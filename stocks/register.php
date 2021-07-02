<?php


if (isset($_POST["password"])) {
    require 'DB.php';
    extract($_POST);
    $sql = "INSERT INTO `users`(`user_id`, `names`, `email`, `password`)
                        VALUES (null,'$name','$email','$password')";
    mysqli_query($conn, $sql);

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User </title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
//include 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card bg-secondary">
                <div class="card-header bg-info"><h2 class="text-white text-center font-weight-bold" style="font-size: 25px">Register</h2></div>

                <div class="card-body">


                        <?php
                        if (isset($message))
                            echo "<p class='text-danger'>$message</p>";
                        ?>

                    <form action="register.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>


                        <div class="form-group">
                            <label for="title">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="title">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <button class="btn btn-info btn-block">Sign Up</button>

                    </form>
              </div>
            </div>
        </div>
    </div>
</div>






</body>
</html>