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
                                <th>Parcel IDNO</th>
                                <th>Pickup Location</th>
                                <th>Date Order</th>
                                <th>weight in KGS</th>
                                <th>Amount</th>
                                <th>model</th>

                                
                            
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
                    // extract($row);
                    ?>
                                <tr>
                                    <td>RPP-00
                                        <?php echo $row['request_id']?>
                                    </td>
                                    <td>
                                        <?php echo $row['username']?>
                                    </td>
                                    <td>
                                        <?php echo $row['parcel_idno']?>
                                    </td>
                                    <td>
                                        <?php echo $row['pickup_location']?>
                                    </td>
                                    <td>
                                        <?php echo $row['date_m'] .' '.$row['time_t'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['weight']?>
                                    </td>
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

                                    <td>
                                        <?php echo $row['model']?>
                                    </td>
                                     <td>
                                    <?php
                                        $status = $row['status'];
                                        if ($status == 1 ){
                                            ?>
                                            <button  class="btn btn-outline-success">Confirmed</button>

                                            <?php

                                        }else{
                                            ?>
                                            <a href="confirm.php?id=<?php echo $row['request_id'] ?>"><button class="btn btn-outline-primary">Confirm</button></a>
                                            
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
    </section>

    <?php
include 'footer.php';
?>