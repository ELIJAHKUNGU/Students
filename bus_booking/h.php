<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoride-chauffeur-booking </title>
</head>

<body>
    <!-- start #header -->
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    if (isset($_POST["book_seats"])) {
        $conn = mysqli_connect("localhost","root","","autoride");
        extract($_POST);
        $sql = "INSERT INTO `people_people`(`request_id`, `user_id`,`idNo`,  `username`, `pickup_location`, `date_m`, `time_t`, `model`, `no_seats`) 
        VALUES (null,'$user_id', '$idNo','$username','$pickup_location','$date_m','$time_t','$model','$no_seats')";
         $result2 =  mysqli_query($conn, $sql);
         if ($result2){
             header("location:index.php?success=Your account has been  successfully created login");
             exit();
       }else{
         header("location:h.php?error=unknown error occurred&");
          }
    }?>

    <div class="container">
        <form action="" method="post">

            <div class="d-block">
                <?php
                    // require 'config.php';
                    // echo $user_id;
                    // echo $username;

                ?>

                <hr>
                <label for="">User_id</label>
                <input type="text" class="form-control" name="user_id" id="">

                <label for="">Username</label>
                <input type="text" class="form-control" name="username" id="">
                <div class="d-block">
                    <label for="">ID</label>
                    <input type="text" class="form-control" name="idNo" id="">
                </div>


            </div>

            <div class="form-group">
                <label for="">Choose a Pickup/Delivery location </label>
                <select name="pickup_location" class="form-control" id="">
                    <option value="">Choose a Pickup location</option>
                    <option value="Mombasa - Nairobi ">Mombasa - Nairobi </option>
                    <option value="Nairobi Mombasa "> Nairobi- Mombasa </option>
                    <option value="Mombasa - Kisumu">Mombasa - Kisumu</option>

                </select>
            </div>
            <div class="form-group">
                <div class="d-block">
                    <label for="">Select Date</label>
                    <input type="date" class="form-control" name="date_m" id="">
                </div>
            </div>
            <div class="form-group">
                <div class="d-block">
                    <label for="">Select Time</label>
                    <input type="time" class="form-control" name="time_t" id="">
                </div>
            </div>
            <div class="form-group">
                <label for="">Select Model</label>
                <select name="model" id="" class="form-control">
                    <option value="">Select the Model</option>
                    <option value="Easy Coach">Easy Coach</option>
                    <option value="Modern Coast">Modern Coast</option>
                    <option value="Express">Express </option>
                    <option value="Flight one">Flight one</option>
                </select>
            </div>
            <div class="form-group">
                <div class="d-block">
                    <label for="">NO SEATS</label>
                    <input type="number" min="1" max="52" placeholder="1" class="form-control" name="no_seats" id="">
                </div>
            </div>
            <button name="book_seats" class="btn btn-primary-color">Book</button>


        </form>
    </div>







    <script src="./js/jquery.min.js "></script>
    <script src="./js/bootstrap.min.js "></script>

    <script src="./js/bootstrap.js "></script>


</body>

</html>