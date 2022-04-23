<?php
include('partials/menu.php');
?>

    <!-- Main content section starts -->
    <div class="main-content">
    <div class="wrapper">
        <h1>DASHBOARD</h1>

        <?php 
        if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        ?>
        <br><br>
        
        <div class="col-4 text-center">
            <?php
            //Sql query
            $sql = "SELECT * FROM tbl_category";
            //execute the query
            $res = mysqli_query($conn, $sql);
            //count rows
            $count = mysqli_num_rows($res);
            ?>

            <h1><?php echo $count; ?></h1>
            <br >
            <a style = "text-decoration:none;color:#000;" href="<?php echo SITEURL;?>admin/manage-category.php">Categories</a>
            
        </div>
        
        
        <div class="col-4 text-center">
            
        <?php
            //Sql query
            $sql2 = "SELECT * FROM tbl_food";
            //execute the query
            $res2 = mysqli_query($conn, $sql2);
            //count rows
            $count2 = mysqli_num_rows($res2);
            ?>

            <h1><?php echo $count2; ?></h1>
            <br >
            <a style = "text-decoration:none;color:#000;" href="<?php echo SITEURL;?>admin/manage-food.php">Foods</a>
            
        </div>
        <div class="col-4 text-center">
        <?php
            //Sql query
            $sql3 = "SELECT * FROM tbl_order";
            //execute the query
            $res3 = mysqli_query($conn, $sql3);
            //count rows
            $count3 = mysqli_num_rows($res3);
            ?>

            <h1><?php echo $count3; ?></h1>
            <br >
            <a style = "text-decoration:none;color:#000;" href="<?php echo SITEURL;?>admin/manage-order.php">Total Orders</a>
        </div>
        <div class="col-4 text-center">
        <?php
            //Sql query
            $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";
            //execute the query
            $res4 = mysqli_query($conn, $sql4);
            //Get the value
            $row4 = mysqli_fetch_assoc($res4);

            //get the total value
            $total_revenue = $row4['Total'];

            ?>
            <h1>Ksh<?php echo $total_revenue; ?></h1>
            <br >
            Total Revenue
        </div>
        <div class="clear-fix"></div>
        </div>
        
    </div>
    <!-- Main content section ends -->

    <?php include('partials/footer.php');
    ?>
    