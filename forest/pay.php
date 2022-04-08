
   
            <?php
            include 'sidebar.php';
           

            if (isset($_GET["id"])){
                $id = $_GET["id"];
                require 'db.php';
                $sql="SELECT * FROM `hello` WHERE  id= $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                extract($row);
            }

            // if (isset($_POST["save"])) {
            //    require 'db.php';
            //     extract($_POST);
            //     $sql = "INSERT INTO `payment`( `order_id`, `user_id`, `amount`, `name`, `reference`) 
            //     VALUES ('$order_id','$user_id','$amount','$name','$reference')";
            //     if ($conn->query($sql) === TRUE) {
                
            //         header("location:index.php?success=Payment processed successfully ");
                
            //     } else {
            //         header("location:pay.php?error=Payment not  processed successfully");
                
                
            //     }
            // }
            ?>
            
            <div class="col-sm-9">
                <div class="shadow">
                    <div class=" ">
                        <h2 class=" text-center pt-5 font-weight-bold" style="font-size: 25px">
                          
                        </h2>
                    </div>
                    <div class="card-body">
                    <p>The following accounts</p>
                            <ol class="pl-5">
                                <li>KCB Account :9214994003</li>
                                <li>NCBA Account :9214994003</li>
                            </ol>
                       
                            
                           
                            <div class="pl-5">
                                <p>KIndly note the transaction takes approximate an one hour to be verified</p>
                            </div>
                            <div class="p-5">
                            <div class="form-group">
                                <label for="title">Order No</label>
                                <input type="hidden" placeholder="" value="<?php echo $id; ?>" disabled class="form-control pt-4 pb-4" name="order_id" required>
                                <?php
                                 require 'config.php';
                                //  echo $user_id;

                                ?>
                                <input type="hidden" placeholder="" value="<?php echo $user_id; ?>" class="form-control pt-4 pb-4" name="user_id" required>
                                <input type="text" placeholder="" value="<?php echo '#AP-00'.$id; ?>" class="form-control pt-4 pb-4"  required>
                            </div>
                            <div class="form-group">
                                <label for="title">Amount Expected</label>
                                <?php
                                    $amount = 0;
                                    $product =   $row['uname'];
                                    if ($product == 'Timber'){
                                     $amount = $row['pword'] * 25;
                                    }else if($product == 'Fireword'){
                                     $amount = $row['pword'] * 120;
                                    }else if($product == 'Plywood'){
                                         $amount = $row['pword'] * 150;
                                        
                                    }else{
                                        'invalid';
                                    }
                                ?>
                                <input type="text" class="form-control pt-4 pb-4" disabled  value="<?php echo $amount; ?>"  name="amount" required>
                            </div>
                            
                            <div class="form-group">
                                <?php
                                session_start();
                                require 'config.php';
                                $user_id =  $user_details ['user_id'];

                                 require 'db.php';
                                $sql="SELECT * FROM `hello` WHERE  user_id= $user_id";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                extract($row);
                                $phone = $row['phone'];
                            
                          
                                ?>
                                <label for="title">Phone</label>
                                <input type="text" disabled placeholder="phone" value="<?php echo  $phone?>" class="form-control pt-4 pb-4" name="phone" required>
                            </div>
                            


                            <!-- <div class="form-group">
                                <label for="title">MPESA Transaction ID/ Bank Reference NO</label>
                                <input type="text" class="form-control pt-4 pb-4"  name="reference" required>
                            </div> -->

                            <div class="d-flex">
                            <a href="./MpesaProcessor.php?amount=<?php echo$amount?>">
                                <button style="text-transform: uppercase;" name="save" class="btn btn-success  mr-3 ">Submit</button>
                                </a>

                            </div>
                            </div>

                        
                        
                       
                        
                        </div>


                    </div>
                </div>
            </div>
            
        </div>


    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>