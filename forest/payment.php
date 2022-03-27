
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
            <p>The following are measurement we used</p>
            <ol>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Quantity of measurement</th>
                        <td>Amount</td>

                    </tr>
                    <tr>
                        <td>Timber </td>
                        <td>1</td>
                        <td>Linear Feet</td>
                        <td>25</td>

                    </tr>
                
                    <tr>
                        <td>Fuel Wood </td>
                        <td>1</td>
                        <td>Cord</td>
                        <td>120</td>

                    </tr>
                    <tr>
                        <td>Plywood</td>
                        <td>1</td>
                        <td>Pieces</td>
                        <td>150</td>

                    </tr>
                
                </table>
            </ol>
           
            <hr>
            

            <table id="patient" class="display  mt-2" style="border: 2px solid gray;">
                <thead>
                    <tr>
                        <th>invoice ID</th>
                        <th>Names Verification </th>
                        
                        <th>Pick Up location</th>
                        <th>Amount </th>
                        <th>Phone Number</th>
                        <th>Date Pickup</th>
                        <th>Order Date</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Pay</th>
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
                      $qry = "SELECT * FROM `hello` order by id DESC";
                      $products =$conn->query($qry);
                      while ($row= $products->fetch_assoc())

                      {
                          ?>
                        
                      
                        <!-- `hello`(`id`, `user_id`, `fname`, `lname`, 
                        `email`, `phone`, `dd`, `nn`, `yyyy`, `uname`, `pword`, `date_cart`) -->
                     <tr>
                        <td>#AP-00<?php echo $row['id']?></td>
                        <td><?php echo $row['fname']?> <?php echo $row['lname']?></td>
                       
                        <td><?php echo $row['yyyy']?> </td>
                        <td>
                        <?php
                        $amount = 0;
                        $product =   $row['uname'];
                        if ($product == 'Timber'){
                          echo $amount = $row['pword'] * 25;
                        }else if($product == 'Fireword'){
                           echo $amount = $row['pword'] * 120;
                        }else if($product == 'Plywood'){
                            echo $amount = $row['pword'] * 150;
                            
                        }else{
                            echo 'invalid';
                        }
                        ?>




                        </td>

                        <td><?php echo $row['phone']?> </td>
                        <td><?php echo $row['dd']?> <?php echo $row['nn']?>  </td>
                        <td><?php echo $row['date_cart']?> </td>
                        <td><?php echo $row['uname']?></td>

                        <td><?php echo $row['pword']?></td>
                        <td>
                           <style>
                               #paid{
                                cursor: not-allowed;
                               }

                           </style>
                            <?php
                            $paid = $row['paid'];
                            if ($paid == 1){
                                ?>
                                <button id="paid" class="btn btn-outline-primary" >paid</button>

                                <?php

                            }else{
                                ?>
                                  <a href='pay.php?id=<?php echo $row['id']?>'><button class="btn btn-outline-success">pay</button></a>
                                <?php
                            }
                            



                            ?>
                         </td>
                        <td>Delete</td>


                        </td>
                    </tr>
                    <?php
                      }
                      ?>
                </tbody>
            </table>


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