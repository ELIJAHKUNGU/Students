<?php
require_once 'config.php';
include 'header.php';

?>


    </header>
    <section>
       <div class="container mb-5 pb-5">
       <div class="">
            
            <hr>
            <div class="d-flex mb-5">
                <div class="d-block ml-2">
                    <a href="./dashboard.php"><button
                        style="background-color: #5EC961; color: #fff; border-radius: 20px;"
                        class="btn pt-2 pb-2 pl-4 pr-4">BOOK</button>
                </a>
                </div>

            </div>
            <?php
             if (isset($_GET['error'])) { ?>
                <p class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                <p class="alert alert-primary" role="alert">
                    <?php echo $_GET['success']; ?>
                </p>
                <?php } ?>

                <table id="patient"  class="display table-bordered table-responsive  mt-2" style="border: 2px solid gray;">
                    <thead>
                        <tr>

                            <th>Order ID</th>
                            <th>Username</th>
                            <th>Parcel IDNO</th>
                            <th>Pickup Location</th>
                            <th>Date Order</th>
                            <th>weight in KGS</th>
                            <th>model</th>
                           
                            <th>Cancel Order</th>
                            <th>Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                      require 'db.php';
                      $qry = "SELECT * FROM `people_requests` order by request_id DESC";
                      $products =$conn->query($qry);
                      while ($row= $products->fetch_assoc())
                      {
                        
                      
                        // `people_requests`(`request_id`, `user_id`, `username`, 
                        // `parcel_idno`, `pickup_location`, `date_m`, `time_t`, `model`, `weight`
                    extract($row);
                    echo "<tr>
                        <td>#p-00$request_id</td>
                        <td>$username</td>
                        <td>$parcel_idno</td>
                        <td>$pickup_location</td>
                        <td>$date_m.$time_t</td>
                        <td>$weight</td>

                        <td>$model</td>
                        
                        <td> <a href='createappointment.php?id=$cancel'><button>Appointment</button></a>  </td>
                        <td>Confirmed</tr>";
                      
                    }
                    ?>
                    </tbody>
                </table>


        </div>
       </div>


        </div>

    </section>




    <div class="text-center text-white ">
    </div>
    </div>
    </div>
    </section>
    <script src="./js/jquery.min.js "></script>
    <script src="./js/bootstrap.min.js "></script>
    <script src="./owl-carousel/js/owl.carousel.min.js "></script>
    <script src="./js/bootstrap.js "></script>
    <script src="./js/index.js "></script>
    <script src="./DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#patient').DataTable();
        });
    </script>


    </body>

    </html>