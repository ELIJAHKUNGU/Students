<?php
include 'header.php';
?>



    <section>
        <div class="container pl-5 mt-5 mb-5 pb-5">
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

                    <style>
                        th,tr{
                            width: 10%;
                            text-align: center;
                        }
                    </style>

                    <table id="patient" class="display table-bordered  table-responsive  mt-2" style="border: 2px solid gray; min-width:1100px;">
                        <thead>
                            <tr>

                            <th>Order ID</th>
                                <th>Username</th>
                                <th> ID NO</th>
                                <th>Pickup Location</th>
                                <th>Date Order</th>

                                <th>No of Seats</th>
                                <th>model</th>
                                <th>Amount</th>
                                
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php
                      require 'db.php';
                      $qry = "SELECT * FROM `people_people` order by request_id DESC";
                      $products =$conn->query($qry);
                      while ($row= $products->fetch_assoc())
                      {
                        
                      
                        // `people_people`(`request_id`, `user_id`, `idNo`, `username`
                        // , `pickup_location`, `date_m`, `time_t`, `model`, `no_seats
                    extract($row);
                    ?>
                                <tr>
                                    <td>#p-00
                                        <?php echo $row["request_id"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["username"] ?> </td>
                                    <td>
                                        <?php echo $row["idNo"] ?> </td>
                                    <td>
                                        <?php echo $row["pickup_location"] ?> </td>

                                    <td>
                                        <?php echo  $row["time_t"]. "|" .$row["date_m"]?>
                                    </td>
                                    <td>
                                        <?php echo $row["no_seats"] ?> </td>

                                    <td>
                                        <?php echo $row["model"] ?> </td>
                                    <th>
                                        <?php
                            $amount = 0;
                            $location = $row["pickup_location"]; 
                            $seats = $row["no_seats"];
                            if($location == "Mombasa-Nairobi"){
                              echo  $amount =  1000 *  $seats;

                            }else  if($location == "Nairobi-Mombasa"){
                                echo  $amount =  1500 *  $seats;

                            }else if($location == "Mombasa-Kisumu"){
                                echo  $amount =  3500 *  $seats;
                            }else{
                                echo  "invalid";
                            }

                            ?>

                                    </th>

                                   
                                    <td>
                                <?php
                                $status = $row['status'];
                                if ($status == 1 ){
                                    ?>
                                    <button  class="btn btn-outline-success">Confirmed</button>

                                    <?php

                                }else{
                                    ?>
                                     <a href="editpeople.php?id=<?php echo $row['request_id'] ?>"><button class="btn btn-outline-primary">Allocate</button></a>
                                    
                                   <?php

                                }
                                ?>
                                </td>
                                <?php

                                
                      }
                    ?>
                        </tbody>
                    </table>


            </div>
    </section>

    <?php
include 'footer.php';
?>