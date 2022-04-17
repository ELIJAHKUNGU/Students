<?php


if (isset($_POST["submit"])) {
    require 'DB.php';
    extract($_POST);
    $email = $_POST['email'];
    $sql2 = "SELECT * FROM users where email = '$email'";
    $result = mysqli_query($conn,$sql2);

    if (mysqli_num_rows($result) > 0){
        header("Location:register.php?error=The Email Address exist login");
       
    }else{
   
        extract($_POST);
        $sql = "INSERT INTO `users`( `email`, `s_n`, `i_n`, `s_a`, `reg`, `sex`, `course`, `l_o_s`, `country`, `s_county`, `ward`, `village`,`password`)
        VALUES ('$email','$s_n','$i_n','$s_a','$reg','$sex','$course','$l_o_s','$country','$s_county','$ward','$village', '$password')";
        // mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if ($conn->query($sql) === TRUE) {
            header("location:login.php?success=Your account has been  successfully created login");
        } else {
            header("location:register.php?error=Data have wasn't added successfully   +2547  220 000");
        }
        $conn->close();
    }
}
?>