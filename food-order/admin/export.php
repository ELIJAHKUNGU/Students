<?php  
      //export.php  
      if(isset($_POST["export"]))  
      {  
      $connect = mysqli_connect("localhost", "root", "", "food-order");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=orders.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array("id", "food", "price", "qty", "total", "order_date", "status", "customer_name", "customer_contact", "customer_email", "customer_address"));  
      $query = "SELECT * from tbl_order ORDER BY id DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
    }

 ?>  