<?php
include 'header.php';

?>

        <div class="col-sm-9">
            <div class="pay">
                <h1 class="text-center">Report OF Paymets</h1>
                <hr>

                <div class="mt-5">
                    <div class="float-right pl-2 pb-4">
                        <button class="btn btn-success ml-auto" onclick="print()">Print All</button>
                    </div>
                    <table class="table-bordered pt-2"  id="employess">
                        <tr>
                            <th>#</th>
                            <th>NAME</th>
                            <th>Employee ID</th>
                            <th>Salary</th>
                            <th>Date Of Paymets</th>
                            <th>Action</th>
                            
                        </tr>
                        <?php
                        require 'DB.php';
                         $qry = "SELECT * FROM payslips";
                         $products =$conn->query($qry);
                         while ($row= $products->fetch_assoc())
                         {
                         ?>
                         <tr>
                         <td><?php echo $row['pay_id']; ?></td>
                         <td><?php echo $row['e_name']; ?></td>
                         <td><?php echo $row['e_idno']; ?></td>
                         <td><?php echo $row['e_salary']; ?></td>
                         <td><?php echo $row['p_day']; ?></td>
                        <td> <a href="./print.php?id=<?php echo $row['pay_id']; ?>"><button class="btn btn-success text-white">Print</button></a>
                        <a href="./delete.php?id=<?php echo $row['pay_id']; ?>"><button class="btn ml-auto btn-danger text-white">Delete</button></a>
                    </td>


                        </tr>
                        <?php } ?>
                        
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>

<script>
function print(){
    window
}
</script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>
</html>