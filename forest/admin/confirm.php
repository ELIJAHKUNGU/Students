
   
            <?php
            include 'sidebar.php';
           

            if (isset($_GET["id"])){
                $id = $_GET["id"];
                require 'db.php';
                $sql="SELECT * FROM `hello` WHERE  id= $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                // print($row);
                extract($row);
                // <!-- `hello`(`id`, `user_id`, `fname`, `lname`, 
                // `email`, `phone`, `dd`, `nn`, `yyyy`, `uname`, `pword`, `date_cart`) -->
            }

            if (isset($_POST["save"]))
            {
                 extract($_POST);
                 $id =$row['id'];
                require 'db.php';
                $sql ="UPDATE `hello` SET `id`='$id',`paid`='$paid' WHERE id='$id'";
                // UPDATE `hello` SET `id`='[value-1]',`user_id`='[value-2]',`fname`='[value-3]',`
                // lname`='[value-4]',`email`='[value-5]',`phone`='[value-6]',`dd`='[value-7]',`nn`='[value-8]'
                // ,`yyyy`='[value-9]',`uname`='[value-10]'
                // ,`pword`='[value-11]',`date_cart`='[value-12]',`paid`='[value-13]' WHERE 1
                $result =  mysqli_query($conn ,$sql);
                if($result){
                    header("location:payments.php?success=Your payment have been successfully ");

                }else{
                    header("location:confirm.php?error=Your payment wasn't have been successfully ");
                }
            
                
               
                
            }
            ?>

            
            <div class="col-sm-9">
                <div class="shadow mt-5">
                    <div class=" ">
                        <h2 class=" text-center pt-5 font-weight-bold" style="font-size: 25px">
                          
                        </h2>
                    </div>
                    <div class="card-body">
                  
                        <form action="" method="post">
                            
                           
                            <div class="pl-5">
                                <p>Kindly confirm  transaction verified</p>
                            </div>
                            <div class="p-5">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>" id="">
                                <label for="title">Verified</label>
                               <select name="paid" class="form-control" id="">
                                   <option value="1">Paid</option>
                                   <option value="0">unpaid</option>
                               </select>
                            </div>
                            <div class="d-flex">
                                <button style="text-transform: uppercase;" name="save" class="btn btn-success  mr-3 ">Submit</button>
                            </div>
                           
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