<?php
require 'security.php';
?>
<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>All Sales</title>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"


</head>
<body>
<?php
include 'navbar.php';
?>

<div class="container">
    <table class="table" id="movies">
        <thead class="bg-secondary">
        <tr><th>#</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Date</th>

        </tr>
        </thead>
        <tbody>

        <?php
        require 'DB.php';
        $sql ="SELECT stocks.stock_name, sales.sale_id, sales.quantity, sales.total, sales.date
               FROM stocks
               JOIN sales
               ON stocks.stock_id =sales.stock_id";
        $results = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($results)){
            extract($row); //$price $quantity
            echo "<tr>
                        <td>$sale_id</td>
                        <td>$stock_name</td>
                        <td>$quantity</td>
                        <td>$total</td>
                        <td>$date</td>            
                                  
                   </tr>";

        }


        ?>


        </tbody>
    </table>

</div>

<script>
    $(document).ready(function() {
        $('#movies').DataTable();
    } );

</script>
</body>
</html>