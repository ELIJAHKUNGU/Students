<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All movies</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


</head>
<body>

<?php
require 'navbar.php';
?>
<div class="container">
    <table class="table" id="movies">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Qantity</th>
            <th>Price</th>
            <th>Genre</th>
            <th>Delete</th>
            <th>Update</th>
            <th>Sell</th>
        </tr>

        </thead>
        <tbody>
        <?php
        require 'DB.php';
        $sql="select * from movies order by movie_id desc";
        $results=mysqli_query($conn,$sql);
        while ($row =mysqli_fetch_assoc($results))
        {
            extract($row);
            echo "<tr>
                    <td>$movie_id</td>
                    <td>$title</td>
                    <td><img src='$cover' width='100' height='50' alt='' class='badge-pill'></td>
                    <td>$quantity</td>
                    <td>$price</td>
                    <td>$genre</td>
                    <td> <a href='delete.php?id=$movie_id' class='btn btn-danger'>Delete</a> </td>
                    <td> <a href='update.php?id=$movie_id' class='btn btn-success'>Update</a> </td>
                    <td> <a href='sell.php?id=$movie_id' class='btn btn-success'>Sell</a> </td>
                </tr>";
        }
        ?>
        </tbody>
    </table>


</div>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );$(document).ready( function () {
        $('#movies').DataTable();
    } );
</script>

</body>
</html>