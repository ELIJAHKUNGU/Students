<?php include("partials-front/menu.php"); ?>

<?php
//check whether food id is set or not
if(isset($_GET['food_id'])){
    //get the food id and details of selected food
    $food_id = $_GET['food_id'];

    //get deets of the selected food
    $sql = "SELECT * FROM tbl_food WHERE id=$food_id";

    //execute the query
    $res = mysqli_query($conn, $sql);

    //count the rows
    $count = mysqli_num_rows($res);
   
    //check whether data is there or not
    if($count==1){
    //we have food/data
    //Get the data from db
    $row = mysqli_fetch_assoc($res);

    $title = $row['title'];
    $price = $row['price'];
    $image_name = $row['image_name'];

}else{
    //food not available😊
    //redirect
    header('location:'.SITEURL);
}

}
else{
    //redirect
    header('location:'.SITEURL);
}

?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
           
            <h2 class="text-center text-white">Fill this form to confirm your reservation.</h2>

            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                       
                    <?php
                    //check whether image name is there or not
                    if($image_name==""){
                        //image not available
                        echo "<div class='error'>Image not found!!</div>";
                    }else{
                        //image available
                        ?>
                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" class="img-responsive img-curve">
                        <?php
                    }

                    ?>
                       
                    </div>
   
                    <div class="food-menu-desc">
                        <h3><?php echo $title; ?></h3>
                        <input type="hidden" name="food" value="<?php echo $title; ?>">

                        <p class="food-price">Ksh<?php echo $price; ?></p>
                        <input type="hidden" name="price" value="<?php echo $price; ?>">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                       
                    </div>

                </fieldset>
               
                <fieldset>
                    <legend>Reservation Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Viki durags" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 0711...." class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. hi@vikifoods.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Reservation" class="btn btn-primary">
                </fieldset>

            </form>

            <br><br>
            <h3 style="text-align:center;">NB* If you exceed 20 min beyond the time given, your reservation is cancelled!</h3>
       
        <?php
        //check whether the submit button is clicked or not
       
        if(isset($_POST['submit'])){

            //Get all the deets from the form
            // $food = $_POST['food'];
            // $price = $_POST['price'];
            // $qty = $_POST['qty'];
            // $total = $price * $qty;// total = price * quantity
            // $order_date = date("Y-m-d h:i:sa");
            // $status = "ordered";// ordered, and cancelled
            // $customer_name = $_POST['full-name'];
            // $customer_contact = $_POST['contact'];
            // $customer_email = $_POST['email'];
            // $customer_address = $_POST['address'];
            extract($_POST);
            $status = $_POST['ordered'];
            $sql2 = "INSERT INTO `tbl_order`(`food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) 
            VALUES ('$food','$price','$qty','$total','$order_date','$status','$customer_name','$customer_contact','$customer_email','$customer_address')";

            //save the deets in db
            //create sql to save the data
            // $sql2 = "INSERT INTO tbl_order SET
            // food = '$food',
            // price = '$price,
            // qty = '$qty',
            // total = '$total',
            // order_date = '$order_date',
            // status = '$status',
            // customer_name = '$customer_name',
            // customer_contact = '$customer_contact',
            // customer_email = '$customer_email',
            // customer_address = '$customer_address'
            // ";

            //execute the query
            // $res2 = mysqli_query($conn, $sql2);

            // //check whether query executed successfully or not
            // if($res2==true){
            //     $_SESSION['order'] = "<div class='success text-center'>Food reserved successfully!</div>";
            //     header('location:'.SITEURL);
            // }else{
            //     //failed to save order
            //     $_SESSION['order'] = "<div class='error text-center'>Food reserved unsuccessfully!</div>";
            //     header('location:'.SITEURL);
            // }
            header("Location:hello.php");
        }
        ?>
        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <?php include("partials-front/footer.php"); ?>

</body>
</html>