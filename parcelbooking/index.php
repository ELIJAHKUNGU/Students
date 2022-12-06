<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'header.php';
$conn = mysqli_connect("localhost", "root", "", "autoride");

?>

<!-- !Primary Navigation -->
<div class="banner">
    <div class="col-sm-6">
        <div class="container">
            <div class="p-5">
                <h1>Easy Way To Make Your Deliveries</h1>
                <p>Here at Autoride we facilitrate your parcel delivery</p>
                <div class="pl-5 mt-5">
                    <div class="d-flex">
                        <button class="btn btn-primary">Check Now</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</header>
<section>
    <div class="container browser shadow pt-5 pb-5">
        <form action="index.php" method="post" role="form" target="_blank">

            <div class="row">


                <div class="col-sm-9">
                    <div class="form-group pt-4">
                        <label for="">Parcel NO / Client Name</label>
                        <input type="search" name="search" placeholder="Enter Parcel No / Client Name" class="form-control" id="">

                    </div>
                </div>
                <div class="col-sm-2 pt-5">

                    <button class="btn btn-primary" name="save">Check Now</button>

                </div>

            </div>
        </form>
    </div>

</section>

<?php
if (isset($_POST["save"])) {
    ?>    
<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search text-center">
    <div class="container">

        <?php

        //Get the search keyword
        //$name = mysqli_real_escape_string($con, trim($_POST["name"]));
        $search = mysqli_real_escape_string($conn,  trim($_POST["search"]));

        ?>


    </div>
</section>
<!-- fOOD sEARCH Section Ends Here -->



<!-- fOOD MEnu Section Starts Here -->
<section class="food-menu">
    <div class="container">



        <?php
        
        //SELECT `request_id`, `username`, `parcel_idno`, `phone`, `email`, `pickup_location`, `date_m`, `time_t`, `model`, `weight`,
        // `status` FROM `people_requests` WHERE 1 
        //Sql query to get foods based on search keyword
        require './db.php';
        $sql = "SELECT * FROM `people_requests` WHERE parcel_idno LIKE '%$search%' OR `username` LIKE '%$search%'";

        //execute the query
        $res = mysqli_query($conn, $sql);

        //count rows
        $count = mysqli_num_rows($res);

        //check whether the rows have food or not
        if ($count > 0) {
            //food is available
            while ($row = mysqli_fetch_assoc($res)) {
                //Get the deets
                $request_id = $row['request_id'];
                $username = $row['username'];

                $parcel_idno = $row['parcel_idno'];
                $phone = $row['phone'];
                $email = $row['email'];
                $pickup_location = $row['pickup_location'];
                $date_m = $row['date_m'];
                $status = $row['status'];
                $time_t = $row['time_t'];
                $weight = $row['weight'];


        ?>

                <div class="food-menu-box">
                    <!-- <div class="food-menu-img">
                    <?php

                    //check whether image is available or not
                    // if($image_name==""){
                    //     //food is unavailable
                    //     echo "<div class='error'>Image not available! </div>";
                    // }else{
                    //     //image available
                    //     
                    ?>
                    //     <?php

                            // }
                            // 
                            ?>
                    
                </div> -->

                    <div class="food-menu-desc">
                        <table id="patient" class="display table-bordered   mt-2" style="border: 2px solid gray;">
                            <thead>
                                <tr>

                                    <th>Order ID</th>
                                    <th>Username</th>
                                    <th>Parcel IDNO</th>
                                    <th>Pickup Location</th>
                                    <th>Date Order</th>
                                    <th>weight in KGS</th>
                                    <th>Amount</th>
                                    <th>model</th>


                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>RPP-00<?php echo $request_id ?></td>
                                    <td><?php echo $username ?></td>
                                    <td><?php echo $parcel_idno ?></td>
                                    <td><?php echo $pickup_location ?></td>
                                    <td><?php echo $date_m . ' ' . $time_t ?></td>
                                    <td><?php echo $weight ?></td>
                                    <th>
                                        <?php

                                        $amount = 0;
                                        $location = $row['pickup_location'];

                                        if ($location == 'Mombasa-Nairobi') {
                                            echo  $amount =  400 *  $weight;
                                        } else  if ($location == 'Nairobi-Mombasa') {
                                            echo  $amount =  400 *  $weight;
                                        } else if ($location == 'Mombasa-Kisumu') {
                                            echo  $amount =  1000 *  $weight;
                                        } else {
                                            echo  "invalid";
                                        }

                                        ?>

                                    </th>

                                    <td><?php echo $row['model'] ?></td>

                                    <!-- <
                            td> <a href='payparcel.php?id=p# echo $row['request_id'] ?>'
                            ><button class='btn btn-success'>Pay</button></a>  </td>
                            <td> -->
                                    <!-- <td> -->



                                    <!-- </td> -->
                            <?php
                        }
                    }
               
                    ?>    

                                </tr>


                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="clearfix"></div>
    </div>

</section>
<?php
}
                    
?>

<section>
    <div class="container">
        <div class="pt-5">
            <div class="pt-5">
                <div class="d-flex justify-content-center">
                    <img src="./images/logo.png" alt="" srcset="">

                </div>
                <div class="text-center">
                    <p class="mt-2">Large Growing Fleet of Bus and Vans</p>
                    <h1 style="font-weight: 900; font-size: 3rem;">Travel in Style</h1>
                </div>
            </div>
        </div>
        <img src="./images/bus.png" class="img-fluid" alt="">
    </div>
</section>


<?php
include 'footer.php';

?>