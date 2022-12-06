<?php
include 'header.php';
?>

<?php

//export.php  
if(isset($_POST["export"]))  
{  
$connect = mysqli_connect("localhost", "root", "", "autoride");  
header('Content-Type: text/csv; charset=utf-8');  
header('Content-Disposition: attachment; filename=parcel.csv');  
$output = fopen("php://output", "w");  
fputcsv($output, array("request_id", "user_id", "username", "parcel_idno", "pickup_location", "date_m", "time_t", "model", "weight", "status"));  
$query = "SELECT * from people_requests ORDER BY id DESC";  
$result = mysqli_query($connect, $query);  
while($row = mysqli_fetch_assoc($result))  
{  
     fputcsv($output, $row);  
}  
fclose($output);  
}

?>  


                        <div class="row">
                            <div class="col-sm-6  ml-5 mt-3 card gradient-bx text-white bg-danger ">
                                 
                                <div class="d-flex">
                                    <div class="d-block">
                                        <h5>Generate Report Parcels</h5>
                                        <div class="d-flex">
                                            
                                            <div class="ml-2">
                                                <span data-feather="file"></span> Orders Parcelss
                                            </div>
                                            <div class="ml-5">
                                                   
                                                  <!-- <form action="" method="POST">
                                                  <button name="export" class="btn btn-outline-primary">Generate</button>
                                                  </form> -->
                                                        <form method="post" action="export.php" align="center">  
                                                              <input type="submit" name="export" value="CSV Export" class="btn btn-outline-success" />  
                                                         </form>  
                                                    

                                                </div>
                                        </div>

                                    </div>
                                    <div class="ml-auto mt-2 pl-4 border-icon-img">
                                        <img src="./assets/icon2.svg" alt="" srcset="">
                                    </div>

                                </div>
                               
                            </div>
                            <div class="col-sm-6 ml-5 mt-3 bg-primary  ">
                               
                                  <div class="d-flex">
                                        <div class="d-block">
                                            <h5>Generate Report Booked Seats</h5>
                                            <div class="d-flex">
                                              
                                                  
                                                <div class="ml-5">
                                                    <span data-feather="shopping-cart"></span>Orders Seats


                                                </div>
                                                <div class="ml-5">
                                                   
                                                <form method="post" action="export2.php" align="center">  
                                                              <input type="submit" name="export" value="CSV Export" class="btn btn-outline-success" />  
                                                         </form>  
                                                    

                                                </div>
                                            </div>

                                        </div>
                                        <div class="icon-bars">
                                            <img src="./assets/icon8.svg" class="" alt="" srcset="">

                                        </div>
                                        <div class="ml-auto mt-2 pl-4 border-icon-img">
                                            <img src="./assets/icon10.svg" alt="" srcset="">
                                        </div>

                                    </div>
                              
                            </div>

                        </div>
                        
                            
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>


    <script src="../js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</body>

</html>