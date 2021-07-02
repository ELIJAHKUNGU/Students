<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Refugees</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


</head>
<body>

<?php
require 'navbar.php';
?>
<div class="ml-3 mr-3">
<h2 class="text-center mt-5">REFUGEES DETAILS</h2>
<hr>
    <table class="table table-bordered mt-5" id="movies">
        <thead>
        <tr>
            <th>#</th>
            <th>Camp ID</th>
            <th>Full Name</th>
            <th>Sex</th>
            <th>D.O.B</th>
            <th>Marital Status</th>
            <th>Nationality</th>
            <th>Disability</th>
            <th>Reason for Displacement</th>
            <th>Delete</th>
            <th>Update</th>
            <th>Allocate Tent</th>
        </tr>

        </thead>
        <tbody>
        <?php
        require 'DB.php';
        $sql="SELECT * FROM `refugees`  order by r_id desc";
        $results=mysqli_query($conn,$sql);
        while ($row =mysqli_fetch_assoc($results))
        {
            extract($row);
            echo "<tr>
                    <td>$r_id</td>
                    <td>$c_id</td>
                    <td>$r_name</td>
                    <td>$sex</td>
                    <td>$dob</td>
                    <td>$r_status</td>
                    <td>$r_nationality</td>
                    <td>$disability</td>
                    <td>$reason</td>

                    <td> <a href='delete.php?id=$r_id' class='btn btn-danger'>Delete</a> </td>
                    <td> <a href='update.php?id=$r_id' class='btn btn-success'>Update</a> </td>
                    <td> <a href='tentallo.php?id=$r_id' class='btn btn-success'>Allocate</a> </td>
                </tr>";
        }
        ?>
        </tbody>
    </table>


</div>


</body>
</html>