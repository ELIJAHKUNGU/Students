<?php
include 'sidebar.php';
?>


<div class=" d-flex flex-column justify-content-center ">
                    <div class="d-flex p-5 justify-content-between">
                        <h5>Date Of Application</h5>
                        <?php echo date("d-m-Y") ?>
                            </h5>                    </div>
                    <hr>
                    <table id="demo" class="table table-bordered">
                        <thead>
                            <tr>
                            <td>Bursary Type</td>
                                <td>ID</td>
                                <td>Download ID</td>
                                
                                <td>Fees Statement</td>
                                <th>Download Statement</th>
                                <td>Fees Structure</td>
                                <th>Download Fees</th>
                                <th>Send Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $con=mysqli_connect("localhost","root","","bursary");

                                $sqli = "SELECT * FROM `tblfiles`";

                                $res = mysqli_query($con, $sqli);
                                while ($row = mysqli_fetch_array($res)) {
                                    $file_id = $row['file_id'];
                                 $sql2 = "SELECT * FROM `Fees_structure` where  file_id = '$file_id'";
                                $results = mysqli_query($con, $sql2);
                                while ($row2 = mysqli_fetch_array($results)) {
                                $sql3 = "SELECT * FROM `Fees_structure` where  file_id = '$file_id'";
                                $result = mysqli_query($con, $sql3);
                                while ($row3 = mysqli_fetch_array($result)) {
                                $sql4 = "SELECT * FROM `bursaries` where  b_id = '$file_id'";
                                $result2 = mysqli_query($con, $sql4);
                                while ($row4 = mysqli_fetch_array($result2)) {
                                echo '<tr>';
                                echo '<td>'.$row4['b_type'].'</td>';
                                echo '<td>'.$row['FileName'].'</td>';
                                echo '<td><a class="btn" href="'.$row['Location'].'">
                                               <img src="./assets/feather/arrow-down-circle.svg" class="text-center d-flex justify-content-center" alt="" srcset="">
                                </a></td>';

                                echo '<td>'.$row2['FileName'].'</td>';
                                echo '<td><a class="btn" href="'.$row2['Location'].'">
                                               <img src="./assets/feather/arrow-down-circle.svg" class="text-center d-flex justify-content-center" alt="" srcset="">
                                </a></td>';

                                echo '<td>'.$row3['FileName'].'</td>';
                                echo '<td><a class="btn" href="'.$row3['Location'].'">
                                               <img src="./assets/feather/arrow-down-circle.svg" class="text-center d-flex justify-content-center" alt="" srcset="">
                                </a></td>';
                                ?>
                                <td>
                                
                                     <a href="sendemail.php?id=<?php echo $row4['b_id'] ?>"><button class="btn btn-outline-primary">SendEmail</button></a>
                                </td>
                                <td>
                                <?php
                                $status = $row4['status'];
                                if ($status == 1 ){
                                    ?>
                                    <button  class="btn  btn-outline-success">Confirmed</button>

                                    <?php

                                }elseif ($status == 0 ){
                                    ?>
                                     <a href="bussaryconfirm.php?id=<?php echo $row4['b_id'] ?>"><button class="btn btn-outline-primary">Confirm</button></a>
                                    
                                   <?php

                                }else{
                                    ?>
                                    <button  class="btn btn-outline-danger">Unsuccessfully</button>

                                    <?php


                                }


                                ?>
                                </td>
                                <?php
                               
                                echo '</tr>';
                                }
                            }
                            }
                            
                        }
                                mysqli_close($con);
                            ?>
                        </tbody>


                </div>
<?php
include 'footer.php';
?>