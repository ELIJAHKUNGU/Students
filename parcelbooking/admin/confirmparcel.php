
   
            <?php
            session_start();
            include 'header.php';
            require 'config.php';
           

            if (isset($_GET["id"])){
                $id = $_GET["id"];
                require 'db.php';
                $sql="SELECT * FROM `people_requests` WHERE  request_id= $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                extract($row);
            }

            
            ?>
            
            <div class="col-sm-9">
                <div class="shadow">
                    <div class=" ">
                        <h2 class=" text-center pt-5 font-weight-bold" style="font-size: 25px">
                          
                        </h2>
                    </div>
                    <div class="card-body">
                   
                            
                    <form action="confirmparcel.php" method="post" enctype="multipart/form-data">
                            
                           
                            
                            <div class="p-5">
                            <div class="form-group">
                                <label for="title">Order No</label>
                                <input type="hidden" placeholder=""  value="<?php echo $id; ?>" class="form-control pt-4 pb-4" name="order_id" required>
                                <?php
                                 require 'config.php';
                                //  echo $user_id;

                                ?>
                                <input type="hidden" placeholder=""  value="<?php echo $user_id; ?>" class="form-control pt-4 pb-4" name="user_id" required>
                                <input type="text" placeholder="" class="text-white" disabled value="<?php echo '#AP-00'.$id; ?>" class="form-control pt-4 pb-4"  required>
                            </div>
                            <div class="form-group">
                                <label for="title">Amount Expected</label>
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
                                <input type="text"  class="form-control text-white pt-4 pb-4" disabled value="<?php echo $amount; ?>"  name="amount" required>
                            </div>
                            
                           
                            


                            <div class="form-group">
                                <label for="title">Status</label>
                                <select name="status" class="form-control" id="">
                                    <option value="1">Paid</option>
                                    <option value="0">Unpaid</option>

                                </select>
                              
                            </div>

                            <div class="d-flex">
                                <button style="text-transform: uppercase;"  name="save" class="btn btn-success  mr-3 ">Submit</button>
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