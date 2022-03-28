
    <style>
        body {
            background-color: #E5E5E5;
        }
        
        .btn {
            background-color: green;
            color: #fff;
            border-radius: 15px;
        }
        
        .btn:hover {
            background-color: rgb(222, 223, 222);
            color: rgb(17, 153, 51);
        }
    </style>
    <?php
    include 'sidebar.php';
    ?>
  
        <div class="col-sm-9">
            <div class="pt-2 mt-2 pl-4">
            <table id="patient" class="display  " style="border: 2px solid gray; width:145%">
                <thead>
                    <tr>
                        <th>PAYMENT ID</th>
                        <th>Order NO </th>
                        
                        <th>User Acc</th>
                        <th>Amount </th>
                        <th>Depositor Name</th>
                        <th>Reference ID</th>
                        <th>Transaction Date</th>
                        <th>Confirm</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                <?php
                      require 'db.php';
                    //   $sql="SELECT * FROM `hello`";
                    //   $result = mysqli_query($conn, $sql);
                    //   $row2 = mysqli_fetch_assoc($result);
                    //   $doctor_id = $row2['doctor_id'];

                    
                      
                     
                    //   $doctor_name = $row2['doctor_name'];
                    //   echo $doctor_name;
                      $qry = "SELECT * FROM `payment` order by payment_id DESC";
                      $products =$conn->query($qry);
                      while ($row= $products->fetch_assoc())

                      {
                          ?>
                        
                      
                        <!-- <`payment`(`payment_id`, `order_id`, `user_id`, `amount`, `name`, 
                        `reference`) VALUES  -->
                     <tr>
                        <td>#PA-00-<?php echo $row['payment_id']?></td>
                        <td>#AP-00-<?php echo $row['order_id']?> </td>
                       
                        <td>#AP-00-<?php echo $row['user_id']?> </td>
                        <td> <?php echo $row['amount']?> </td>

                        <td><?php echo $row['name']?> </td>
                        <td><?php echo $row['reference']?> </td>
                       
                        <td><?php echo $row['date_time']?></td>
                       <td>
                       <?php 
                          require 'db.php';
                          $order_id = $row['order_id']; 
                            $sql="SELECT * FROM `hello` where id='$order_id'";
                            $result = mysqli_query($conn, $sql);
                            $row2 = mysqli_fetch_assoc($result);
                        
                            $paid = $row2['paid'];
                            if ($paid == 1){
                                ?>
                                <button id="paid" class="btn btn-outline-primary" >paid</button>

                                <?php

                            }else{
                                ?>
                                  <a href='confirm.php?id=<?php echo $row2['id']?>'><button class="btn btn-outline-success">pay</button></a>
                                <?php
                            }


                        ?>
                       </td>

                        
                        <td>  <a href='deletepayments.php?id=<?php echo $row2['id']?>'>Delete</a> </td>


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



    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#patient').DataTable();
        });
    </script>
</body>

</html>