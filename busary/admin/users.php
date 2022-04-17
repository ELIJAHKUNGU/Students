<?php
session_start();
include 'sidebar.php';



?>


<div class=" d-flex flex-column justify-content-center ">
                   <hr>
                   
                    <table id="demo" class="table table-bordered">
                        <thead>
                            <tr>
                            <th>User_id</th>
                                <th>Email</th>
                                <th>Student NAME</th>
                                
                                <th>Institution Name</th>
                                <th>School Address</th>
                                <th>Registration No</th>
                                <th>Sex</th>
                                <th>Course</th>
                                <th>Level of Study</th>
                                <th>County </th>
                                <th>Sub County</th>
                                <th>Ward</th>
                                <th>Village</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $con=mysqli_connect("localhost","root","","bursary");
                    //         <!-- (`user_id`, `email`, `s_n`, `i_n`, `s_a`, `reg`, `sex`, `course`, `l_o_s`,
                    // `country`, `s_county`, `ward`, `village`, `password`, `status` -->

                            $sqli = "SELECT * FROM `users`";

                                $res = mysqli_query($con, $sqli);
                                while ($row = mysqli_fetch_array($res)) {
                                    
                                ?>
                                        <tr>
                                        <td>US00-<?php echo $row['user_id'] ?> </td>
                                        <td><?php echo $row['email'] ?> </td>
                                        <td><?php echo $row['s_n'] ?> </td>
                                        <td><?php echo $row['i_n'] ?> </td>
                                        <td><?php echo $row['s_a'] ?> </td>
                                        <td><?php echo $row['reg'] ?> </td>
                                        <td><?php echo $row['sex'] ?> </td>
                                        <td><?php echo $row['course'] ?> </td>
                                        <td><?php echo $row['l_o_s'] ?> </td>
                                        <td><?php echo $row['country'] ?> </td>
                                        <td><?php echo $row['s_county'] ?> </td>
                                        <td><?php echo $row['ward'] ?> </td>
                                        <td><?php echo $row['village'] ?> </td>
                                        </tr>
                                        
                                        <?php
                                      }
                                
                            ?>
                        </tbody>


                </div>
<?php
include 'footer.php';
?>