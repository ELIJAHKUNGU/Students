<?php
require 'security.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Stocks</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

</head>
<body>
    

<?php
include 'navbar.php';
?>

<div class="container">
    <table class="table mt-5" id="stocks">
        <thead class="bg-secondary">
        <tr>
            <th>#</th>
            <th>Name Product</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Price</th>
            
            <th>Delete</th>
            <th>Update</th>
            <th>sell</th>
        </tr>
        </thead>
        <tbody>

        <?php
        require 'DB.php';
        $sql ="SELECT * FROM `stocks`  order by stock_id desc";
        $results = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($results)){
            extract($row); //$price $quantity
            echo "<tr>
                        <td>$stock_id</td>
                        <td>$stock_name</td>
                       
                        <td>$category</td>
                        <td>$quantity</td>
                        <td>$price</td>            
                        <td> <a href='delete.php?id=$stock_id' class='btn btn-danger'>Remove</a> </td>            
                        <td> <a href='update.php?id=$stock_id' class='btn btn-info'>Update</a> </td>            
                        <td> <a href='sell.php?id=$stock_id' class='btn btn-info'>sell</a> </td>            
                   </tr>";

        }


        ?>


        </tbody>
    </table>

</div>

<script>
    $(document).ready(function() {
        $('#stocks').DataTable();
    } );

</script>
</body>
</html>