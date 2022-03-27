
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
         
            <ol>
               
            </ol>
           
            <hr>
            

            <table id="patient" class="display  mt-2" style="border: 2px solid gray; width:140%">
                <thead>
                    <tr>
                        <th>user ID</th>
                        <th> username </th>
                       
                        <th>company_name</th>
                        <th>email </th>
                        <th>phoneNumber</th>
                        <th>Registration Date</th>
                        
                        

                    </tr>
                </thead>
                <tbody>

                <?php
                      require 'db.php';
                    //   $doctor_name = $row2['doctor_name'];
                    //   echo $doctor_name;
                      $qry = "SELECT * FROM `users` order by user_id DESC";
                      $products =$conn->query($qry);
                      while ($row= $products->fetch_assoc())

                      {
                          ?>
                        <!-- `users`(`user_id`, `username`, `company_name`, `email`, `phoneNumber`, 
                        `address`, `password`, `get_date`) -->
                     <tr>
                        <td>#AP-00<?php echo $row['user_id']?></td>
                        <td><?php echo $row['username']?> <?php echo $row['lname']?></td>
                        <td><?php echo $row['company_name']?> </td>
                        <td><?php echo $row['email']?> </td>
                        <td><?php echo $row['phoneNumber']?> </td>
                        <td><?php echo $row['get_date']?> </td>
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