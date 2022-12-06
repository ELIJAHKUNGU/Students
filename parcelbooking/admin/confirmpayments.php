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
                <div class="d-block ml-auto">
                    <a href="./confirmpayments.php"><button
                        style="background-color: #5EC961; color: #fff; border-radius: 20px;"
                        class="btn pt-2 pb-2 pl-4 pr-4">Confirm Payments</button>
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

                <table id="patient"  class="display table-bordered   mt-2" style="border: 2px solid gray;">
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
                           
                            <th>Cancel Order</th>
                            <th>Pay</th>
                            

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
                    // extract($row);
                    ?>
                   <tr>
                        <td>RPP-00<?php echo $row['request_id']?></td>
                        <td><?php echo $row['username']?></td>
                        <td><?php echo $row['parcel_idno']?></td>
                        <td><?php echo $row['pickup_location']?></td>
                        <td><?php echo $row['date_m'] .' '.$row['time_t'] ?></td>
                        <td><?php echo $row['weight']?></td>
                        <th>
                            <?php
                        
                        $amount = 0;
                        $location = $row['pickup_location']; 
                        $weight = $row['weight'];
                        if($location == 'Mombasa-Nairobi'){
                          echo  $amount =  400 *  $weight;

                        }else  if($location == 'Nairobi-Mombasa'){
                            echo  $amount =  400 *  $weight;

                        }else if($location == 'Mombasa-Kisumu'){
                            echo  $amount =  1000 *  $weight;
                        }else{
                            echo  "invalid";
                        }

                        ?>

                    </th>

                        <td><?php echo $row['model']?></td>
                        
                        <td> <a href='deleteparcel.php?id=<?php echo $row['request_id'] ?>'><button class='btn btn-danger'>Cancel</button></a>  </td>
                        <!-- <
                            td> <a href='payparcel.php?id=p# echo $row['request_id'] ?>'
                            ><button class='btn btn-success'>Pay</button></a>  </td>
                            <td> -->
                                <td>
                          <?php
                                $status = $row['status'];
                                if ($status == 1 ){
                                    ?>
                                    <button  class="btn btn-outline-success">Confirmed</button>

                                    <?php

                                }else{
                                    ?>
                          <a href="confirmparcel.php?id=<?php echo $row["request_id"] ?>"><button  class="btn btn-outline-primary">Confirm </button></a> 
                                    
                                   <?php

                                }
                                ?>
                                
                               
                      </td>

                        
                        </tr>
                        <?php
                
                    }
                    ?>
                    </tbody>
                </table>


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