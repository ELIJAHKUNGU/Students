<?php
include 'header.php';

?>

        <div class="col-sm-9">
            <div class="employees">
                <h1 class="text-center">LIST OF Employees</h1>
                <hr>
                <div class="mt-5">
                    <table class="table-bordered" id="employess">
                        <tr>
                            <th>#</th>
                            <th>NAME</th>
                            <th>Phone Number</th>
                            <th>Email Address</th>
                            <th>ID NO</th>
                            <th>Age(YS)</th>
                            <th> Address</th
                            ><th>Loans</th>
                            <th>Marital Status</th>
                            <th>Salary</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                        <?php
                        require 'DB.php';
                         $qry = "SELECT * FROM employees";
                         $products =$conn->query($qry);
                         while ($row= $products->fetch_assoc())
                         {
                         ?>

                            <td><?php echo $row['e_id']; ?></td>
                            <td><?php echo $row['e_name']; ?></td>
                            <td><?php echo $row['e_phone']; ?> </td>
                            <td><?php echo $row['e_email']; ?></td>
                            <td><?php echo $row['e_idno']; ?></td>
                            <td><?php echo $row['e_age']; ?></td>
                            <td><?php echo $row['e_address']; ?></td>
                            <td><?php echo $row['e_loans']; ?></td>
                            <td><?php echo $row['e_status']; ?></td>
                            <td><?php echo $row['e_salary']; ?></td>
                            <td>
                            <a href="./pay.php?id=<?php echo $row['e_id']; ?>"><button class="btn btn-success text-white">Pay</button></a>
                            <a href="./edit.php?id=<?php echo $row['e_id']; ?>"><button class="btn btn-info text-white">Edit</button></a>
                            <a href="./delete.php?id=<?php echo $row['e_id']; ?>"><button class="btn btn-danger text-white">Delete</button></a>
                               
                            </td>
                        </tr>
                        <?php } ?>
                       
                    </table>
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