<?php  
      //export.php  
      if(isset($_POST["export"]))  
      {  
      $connect = mysqli_connect("localhost", "root", "", "autoride");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=seatsbooked.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array("request_id", "user_id", "idNo", "username", "pickup_location", "date_m", "time_t", "model", "no_seats", "seats", "status"));  
      $query = "SELECT * from people_people ORDER BY request_id DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
    }

 ?>  