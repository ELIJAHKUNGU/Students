<?php
if (isset($_GET['cart_id'])) {
    $id = $_GET["cart_id"];
    require 'db.php';
    $sql = "delete from cart where cart_id = $id";
    //echo  $sql;
    $result = mysqli_query($conn, $sql);
    if ($result === TRUE) {
        header("location:cart.php?success=The item have been successfully deleted from  cart ");
    } else {
        header("location:cart.php?error=The item wasn't not deleted from cart contact +2547 4377 0216 for help ");
    }
}
?>
