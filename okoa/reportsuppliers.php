<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suppliers Portal</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


</head>
<body>

<?php
require 'navbar.php';
?>
<div class="ml-3 container mr-3">
<h2 class="text-center mt-5">Tent Allocation Details</h2>
<hr>
    <table class="table table-bordered mt-5" id="reports">
        <thead>
        <tr>
            <th>#</th>
            <th>Suppliers Name</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Tent Name</th>
            <th> Date</th>
            <th>Delete</th>
           
        </tr>

        </thead>
        <tbody>
        <?php
        require 'DB.php';
        $sql="SELECT * FROM `report_supplier`   order by sr_id desc";
        $results=mysqli_query($conn,$sql);
        while ($row =mysqli_fetch_assoc($results))
        {
            extract($row);
            echo "<tr>
                    <td>$sr_id</td>
                    <td>$sc_id</td>
                    <td>$s_name</td>
                    <td>$s_quantity</td>
                    <td>$tent_name</td>
                    <td>$date_d</td>
                  
                    <td> <a href='redel.php?id=$sr_id' class='btn btn-danger'>Delete</a> </td>
                </tr>";
        }
        ?>
        </tbody>
    </table>


</div>
<script>
    $(document).ready(function() {
        $('#reports').DataTable();
    } );

</script>

</body>
</html>