<?php

if (isset($_GET['id'])){

    $id = $_GET['id'];
    require 'db.php';
    $sql="DELETE FROM `people_people` WHERE  request_id= $id";
    mysqli_query($conn,$sql);
 
    if ($conn->query($sql) === TRUE) {

        header("location:people.php?success=You order have successfully been cancled ");
    
    } else {
        header("location:people.php?error=Your Order was not cancelled  +2547  220 000");
    }
    $conn->close();
}

?>