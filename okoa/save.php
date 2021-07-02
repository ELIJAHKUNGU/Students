<?php
if (isset($_POST["save"])) {
    require 'DB.php';
    extract($_POST);
    
        $sql = "INSERT INTO `refugees`(`r_id`, `c_id`, `r_name`, `sex`, `dob`, `r_status`, `r_nationality`, `disability`, `reason`)
         VALUES ('null','$c_id','$r_name','$sex','$dob','$r_status','$r_nationality','$disability','$reason')";
        mysqli_query($conn, $sql);
        header("location:portalrefugee.php");


}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Refugee</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                REFUGEE DETAILS
                
                </div>
            </div>
            <div class="card-body">
                <?php
                if (isset($message))
                    echo "<p class='text-danger'>$message</p>"


                ?>

                <form action="save.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">CAMP ID</label>
                        <input type="text" class="form-control" name="c_id" required>
                    </div>
                    <div class="form-group">
                        <label for="title">FULL NAME</label>
                        <input type="text" class="form-control" name="r_name" required>
                    </div>
                    <div class="form-group">
                        <select name="sex" id="" class="form-control">
                        <option value="male">Male</option>
                        <option value="female">female</option>
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="title">D.O.B</label>
                      <input type="date" name="dob" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <select name="r_status" id="" class="form-control">
                        <option value="">Select Marital Status</option>
                        <option value="married">Married</option>
                        <option value="single">Single</option>
                        <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Nationality</label>
                       
                        <select name="r_nationality" id="" class="form-control">
                        <option value="">Select Nationality</option>
                        <option value="kenya">Kenya</option>
                        <option value="uganda">Uganda</option>
                        <option value="sudan">Sudan</option>
                        <option value="somalia">Somalia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="disability" id="" class="form-control">
                        <option value="">Person with Disability</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                        <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="reason" id="" class="form-control">
                        <option value="">Reason For Displacement</option>
                        <option value="Internally Displaced">Internally Displaced </option>
                        <option value="born at camp">Born at camp</option>
                        <option value="Political Instability">Political Instability</option>
                        <option value="War">War</option>
                        <option value="ethnic conflict">Ethnic conflict</option>
                        </select>
                    </div>
                    

                    <button name="save" class="btn btn-dark btn-block">Approve</button>

                </form>

            </div>
        </div>


    </div>
</div>


</body>
</html>