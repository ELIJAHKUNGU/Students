
<?php 

require 'db.php';
extract($_POST);
    $location = $_POST['location'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $location2 = $_POST['location2'];
    

    $sql = "INSERT INTO `orders`(`order_id`, `location`, `product`, `quantity`, `location2`)
     VALUES ('$location','$product','$quantity','$location2')";
    $result =  mysqli_query($conn, $sql);
    if ($result){
        header("location:orders.php?success=Your account has been  successfully created login");
        exit();

    }else{
        header("location:placeorder.php?error=Yerroe");
    }








?>



                            