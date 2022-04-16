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

                <table id="people"  class="display table-bordered  mt-2" style="border: 2px solid gray;">
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
                            <th>Cancel Order</th>
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
                        <td>#p-00  <?php echo $row["request_id"] ?></td>
                        <td> <?php echo $row["username"] ?> </td>
                        <td> <?php echo $row["idNo"] ?> </td>
                        <td> <?php echo $row["pickup_location"] ?> </td>
                      
                        <td> <?php echo  $row["time_t"]. "|" .$row["date_m"]?></td>
                        <td> <?php echo $row["no_seats"] ?> </td>

                        <td> <?php echo $row["model"] ?> </td>
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
                        
                        <td> <a href="deletep.php?id=<?php echo $row["request_id"] ?>"><button class="btn btn-outline-warning">cancel</button></a>  </td>
                        <td><a href="pay.php?id=<?php echo $row["request_id"] ?>"><button type="submit">PAY </button></a>     </tr>
                      
                    <?php
                      }
                    ?>
                    </tbody>
                </table>


        </div>
       </div>


        </div>

    </section>





<!-- Modal
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        form
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

    <script src="./js/jquery.min.js "></script>
    <script src="./js/bootstrap.min.js "></script>
    <script src="./owl-carousel/js/owl.carousel.min.js "></script>
    <script src="./js/bootstrap.js "></script>
    <script src="./js/index.js "></script>
    <script src="./DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#people').DataTable();
        });
    </script>


    </body>

    </html>