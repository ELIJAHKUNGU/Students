
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
                        <th>USER ID</th>
                        <th>First Name </th>
                        
                        <th>Last Name</th>
                        <th>Amount</th>
                        <th>Phone NO </th>
                        <th>EMAIL</th>
                      
                        <th>Status</th>
                      

                    </tr>
                </thead>
                <tbody>

                <?php
                      require 'db.php';
                  
                      $qry = "SELECT * FROM `hello`  where paid='1'";
                      $products =$conn->query($qry);
                      while ($row= $products->fetch_assoc())

                      {
                          ?>
                        
                      
                         <!-- `hello`(`id`, `user_id`, `fname`, `lname`, 
                        `email`, `phone`, `dd`, `nn`, `yyyy`, `uname`, `pword`, `date_cart`) -->
                     <tr>
                        <td>#PA-00-<?php echo $row['user_id']?></td>
                        <td><?php echo $row['fname']?> </td>
                       
                        <td>#AP-00-<?php echo $row['lname']?> </td>
                        <td>  <?php
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
                        ?> </td>
                        <td><?php echo $row['phone']?> </td>

                        <td><?php echo $row['email']?> </td>
                        

                       
                       <td>
                       <?php 
                          
                        
                            $paid = $row['paid'];
                            if ($paid == 1){
                                ?>
                                <button id="paid" class="btn btn-outline-primary" >paid</button>

                                <?php

                            }else{
                                ?>
                                  <a href='confirm.php?id=<?php echo $row['id']?>'><button class="btn btn-outline-success">pay</button></a>
                                <?php
                            }


                        ?>
                       </td>

                        


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