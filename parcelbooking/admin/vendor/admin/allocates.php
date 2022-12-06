<?php
include 'header.php';
?>



    <section>
        <?php
        
       

        if (isset($_GET["id"])){
            $id = $_GET["id"];
            require 'db.php';
            $sql="SELECT * FROM `people_people` WHERE  request_id= $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            extract($row);
        }
        
        if (isset($_POST["save"]))
            {
                 extract($_POST);
                 $id =$row['request_id'];
                require 'db.php';
                $sql ="UPDATE `people_people` SET `request_id`='$id',`status`='$paid',`seats`='$seats'  WHERE request_id='$id'";
                $result =  mysqli_query($conn ,$sql);
                if($result){
                    header("location:people.php?success=Your payment have been successfully ");

                }else{
                    header("location:allocates.php?error=Your payment wasn't have been successfully ");
                }
            
                
               
                
            }
            ?>
            

        
        
       
       <div class="container ml-5 pt-5 pl-5 mt-5 mb-5 pb-5 shadow">

        <form action="" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <?php  print_r($row);?>
                <div class="d-block">
                    <style>
                        #seats{
                            font-weight:900;
                            color:red;
                        }

                    </style>
                    <label for="">NO SEATS NEEDED</label>
                    <input type="text" id="seats" disabled class="form-control" value="<?php echo $row['no_seats']?>" id="">
                </div>
            </div>
            <div class="form-group">
                <div class="d-block">
                    <label for="">Confirm Payments</label>
                    <div class="form-group">
                        <label for="title">Verified</label>
                        <select name="paid" class="form-control" id="">
                            <option value="1">Paid</option>
                            <option value="0">unpaid</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="d-block">
                    <label for="">Seat numbers</label>
                    <input type="seats" placeholder="5-10 or 2,1,1,5"  class="form-control" name="seats" id="">
                </div>
            </div>
            
            <button name="save" class="btn btn-primary">Confirm</button>
            


        </form>
        <!-- <form action="" method="post">
                            
                           
                            <div class="pl-5">
                                <p>Kindly confirm  transaction verified</p>
                            </div>
                            <div class="p-5">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>" id="">
                               
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

        </form> -->
        
    </section>

    <?php
include 'footer.php';
?>