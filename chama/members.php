<?php
if (isset($_POST["save"])) {
    require 'DB.php';
    extract($_POST);
    
        $sql = "INSERT INTO `members`(`m_id`, `m_name`, `sex`, `dob`, `m_county`, `m_status`, `chama`, `dor`) 
        VALUES ('null','$m_name','$sex','$dob','$m_county','$m_status','$chama','$dor')";
        mysqli_query($conn, $sql);
        header("location:index.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCash</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./fontawesome-free-5.0.1/css/fontawesome-all.css">
</head>
<body>
    <div class="dashboard">
        <div class="top-navbar">
            <div class="logo">
                <h1>Unicash</h1>
            </div>
            <div class="search">
                <input type="text" placeholder="search your loan history">
            <i class="fa fa-search"></i>
            </div>
            <div class="account">
                <div class="message-iocn">
                    <i class="fa fa-comment-alt"></i>
                </div>
                <div class="username">
                    <img src="./images/abt1.jpg" alt="">
                    <span>Admin</span>
                </div>
            </div>
        </div>
       <div class="row">
       <div class="col-sm-3">
            <div class="sidebar-menu">
                <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <a href="./index.php">Home</a>
                </div>
                <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <a href="./loans.php">Loans</a>
                </div>
                 
                 <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                         <i class="fa fa-bars"></i>
                    </div>
                    <a href="./groups.php">Groups</a>
                </div>
                 <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="./group.php">Create Group</a>
                </div>
                
                 <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="./members.php">Members</a>
                </div>
                <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="./viewmembers.php">View Members</a>
                </div>
                 <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <a href="./register.php">Register member</a>
                </div>
                <div class="sidebar-item">
                    <div class="sidebar-item-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <a href="./logout.php">Log Out</a>
                </div>
                

                
               
            </div>
        </div>
        <div class="col-sm-8">
            <form action="members.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Full Name</label>
                    <input type="text" class="form-control" name="m_name" placeholder="eg.John Doe" required>
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
                    <select name="m_county" id="" class="form-control">
                    <option value="">Select County</option>
                    <option value="Kiambu">Kiambu</option>
                    <option value="Nairobi">Nairobi</option>
                    <option value="Muranga">Muranga</option>
                    <option value="Mombasa">Mombasa</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="m_status" id="" class="form-control">
                    <option value="">Select Marital Status</option>
                    <option value="married">Married</option>
                    <option value="single">Single</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="chama" id="" class="form-control">
                    <option value="">Select Chama</option>
                    <option value="Mama Sacco">Mama Sacco</option>
                    <option value="Kazi kwa Vijana">Kazi kwa Vijana</option>
                    <option value="Men Awards">Men Awards</option>
                    <option value="Zero Hunger">Zero Hunger</option>
                    <option value="Red Cross">Red Cross</option>
                  
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Date Of Registration</label>
                  <input type="date" name="dor" id="" class="form-control">
                </div>
               
               

                <button name="save" class="btn btn-success btn-block">Save</button>

            </form>
        </div>
       </div>
    </div>
</body>
</html>