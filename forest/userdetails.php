
    <
        <?php
        require 'config.php';
      
        
            include 'sidebar.php';
            //get the id
            //retrieve the user
            //display
            //update the user
            require 'db.php';
            $id = $user_id;
            $sql="select * from users where user_id = $id";
            $result= mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            extract($row);
            

           
            if (isset($_POST["update_register"]))
            {
                 extract($_POST);
                 $id = $user_id;
                require 'db.php';
                $sql ="UPDATE `users` SET `username`='$value_2',`company_name`='$value_3',`email`='$value_4',`phoneNumber`='$value_5',`address`='$value_6',`password`='$value_7'
                 WHERE  user_id=$id";
                
                mysqli_query($conn ,$sql) or die (mysqli_error($conn));
                header("location:userdetails.php?success=Your details have been successfully updated kindly logout to update");
            }


        ?>

            
            <div class="col-sm-9 ">
                <div class="shadow">
                    <div class=" ">
                        <h2 class=" text-center pt-5 font-weight-bold" style="font-size: 25px">
                            User Details / Edit
                            <?php
                            // print_r( $row);
                            ?>
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="get">
                        <div class="form-group">
                                <label for="title">UserID</label>
                                <input type="text" disabled class="form-control pt-4 pb-4" value ="<?php echo $row['user_id'];?>"  required>
                            </div>
                            <div class="form-group">
                                <label for="title">Full Name</label>
                                <input type="text"  class="form-control pt-4 pb-4" value ="<?php echo $row['username'];?>" name="value_2" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Company Name</label>
                                <input type="text"  class="form-control pt-4 pb-4" value ="<?php echo $row['company_name'];?>" name="value_3" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Email</label>
                                <input type="email"  class="form-control pt-4 pb-4" value ="<?php echo $row['email'];?>" name="value_4" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Phone Number</label>
                                <input type="number" placeholder="+ 000" value ="<?php echo $row['phoneNumber'];?>" class="form-control pt-4 pb-4" name="value_5" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="title">Address</label>
                                <input type="text" value ="<?php echo $row['address'];?>"  class="form-control pt-4 pb-4" name="value_6" required>
                            </div>


                            <div class="form-group">
                                <label for="title">Password</label>
                                <input type="password" value ="<?php echo $row['password'];?>" class="form-control pt-4 pb-4" name="value_7" required>
                            </div>

                            <div class="d-flex">
                                <button style="text-transform: uppercase;" name="update_register" class="btn btn-success  mr-3 ">Update User</button>


                        </form>
                       
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="./js/jquery.min.js "></script>
    <script src="./js/bootstrap.min.js "></script>
    <script src="./js/isotope.js "></script>
    <script src="./owl-carousel/js/owl.carousel.min.js"></script>
    <script src="./js/index.js"></script>

</body>

</html>