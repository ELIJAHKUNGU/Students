<?php
session_start();
include 'sidebar.php';
include 'config.php';

 $user_id =  $user_details ['user_id'];


?>


<div class=" d-flex p-5 flex-column justify-content-center shadow pr-3">
                    <div class="d-flex p-5 justify-content-between">
                        <h5>Date Of Application</h5>
                        <h5 class="ml-5">
                        <?php echo date("d-m-Y") ?>
                            </h5>
                    </div>
                    <hr>
                    <table  id="demo" class="table table-bordered mr-3" >
                        <thead>
                            <tr>
                            <td>Bursary ID</td>
                            <th>Busary Type</th>
                                <td>ID</td>
                                <td>Download ID</td>
                                
                                <td>Fees Statement</td>
                                <th>Download Statement</th>
                                <td>Fees Structure</td>
                                <th>Download Fees</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $con=mysqli_connect("localhost","root","","bursary");

                                $sqli = "SELECT * FROM `tblfiles` where user_id= '$user_id'";

                                $res = mysqli_query($con, $sqli);
                                while ($row = mysqli_fetch_array($res)) {
                                    $file_id = $row['file_id'];
                                 $sql2 = "SELECT * FROM `Fees_structure` where  file_id = '$file_id' and user_id= '$user_id'";
                                $results = mysqli_query($con, $sql2);
                                while ($row2 = mysqli_fetch_array($results)) {
                                $sql3 = "SELECT * FROM `Fees_structure` where  file_id = '$file_id' and user_id= '$user_id'";
                                $result = mysqli_query($con, $sql3);
                                while ($row3 = mysqli_fetch_array($result)) {
                                $sql4 = "SELECT * FROM `bursaries` where  b_id = '$file_id' and user_id= '$user_id'";
                                $result2 = mysqli_query($con, $sql4);
                                while ($row4 = mysqli_fetch_array($result2)) {
                                echo '<tr>';
                                echo  '<td> BN-00'  .$row4['b_id'].'</td>';
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