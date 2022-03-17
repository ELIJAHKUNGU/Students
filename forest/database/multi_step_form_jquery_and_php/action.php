<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<div class="container" style="padding:50px 50px;">
<div class="row well alert alert-success"><?php 
// echo "<pre>";print_R($_POST);



if (isset($_POST["save"])) {
require 'db.php';
extract($_POST);

    $sql = "INSERT INTO `orders`(`order_id`, `location`, `product`, `quantity`, `location2`)
     VALUES ('$data[email]','$data[password]','$data[fName]','$data[lName]')";
    $result =  mysqli_query($conn, $sql);
    if ($result){
        header("location:orders.php?success=Your account has been  successfully created login");
        exit();

    }else{
        header("location:quiz.php?error=Yerroe");
    }





}


?>
</div>
</div>