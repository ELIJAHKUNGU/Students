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

                            <th> USER ID</th>
                                <th>Username</th>
                                <th> Email</th>
                                <th>Phone Number</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                        <?php
                      require 'db.php';
                      $qry = "SELECT * FROM `users` order by user_id DESC";
                      $products =$conn->query($qry);
                      while ($row= $products->fetch_assoc())
                      {
                        
                      
                        // INSERT INTO `users`(`user_id`, `username`, `email`, `phoneNumber`, `password`)
                    extract($row);
                    ?>
                                <tr>
                                    <td>#p-00
                                        <?php echo $row["user_id"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["username"] ?> </td>
                                    <td>
                                        <?php echo $row["email"] ?> </td>
                                    <td>
                                        <?php echo $row["phoneNumber"] ?> </td>

                                    
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