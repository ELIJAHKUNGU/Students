
   
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

            if (isset($_POST["save"])) {
               require 'db.php';
                extract($_POST);
                $sql = "INSERT INTO `payment`( `order_id`, `user_id`, `amount`, `name`, `reference`) 
                VALUES ('$order_id','$user_id','$amount','$name','$reference')";
                if ($conn->query($sql) === TRUE) {
                
                    header("location:index.php?success=Payment processed successfully ");
                
                } else {
                    header("location:pay.php?error=Payment not  processed successfully");
                
                
                }
            }
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
                                <li>MPESA PAYBIL 230303 Account :9214994003</li>
                            </ol>
                        <form action="" method="post">
                            
                           
                            <div class="pl-5">
                                <p>KIndly note the transaction takes approximate an one hour to be verified</p>
                            </div>
                            <div class="p-5">
                            <div class="form-group">
                                <label for="title">Order No</label>
                                <input type="hidden" placeholder="" value="<?php echo $id; ?>" class="form-control pt-4 pb-4" name="order_id" required>
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
                                <input type="text" class="form-control pt-4 pb-4"  value="<?php echo $amount; ?>"  name="amount" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="title">Full Name</label>
                                <input type="text" placeholder="JOHN DOE" class="form-control pt-4 pb-4" name="name" required>
                            </div>
                            


                            <div class="form-group">
                                <label for="title">MPESA Transaction ID/ Bank Reference NO</label>
                                <input type="text" class="form-control pt-4 pb-4"  name="reference" required>
                            </div>

                            <div class="d-flex">
                                <button style="text-transform: uppercase;" name="save" class="btn btn-success  mr-3 ">Submit</button>
                            </div>
                            </div>

                        </form>
                        
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