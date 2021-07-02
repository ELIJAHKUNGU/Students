
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAMA BORA</title>
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
                    <a href="./grou.php">Create Group</a>
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
       
            
       
        <div class="ml-3 mr-3">
    <h2 class="text-center mt-5">Members</h2>
    <hr>
    <table class="table shadow mt-5" id="movies">
        <thead>
        <tr>
            <th>Reg No</th>
            <th>Member Name</th>
            <th>Gender</th>
            <th>D.O.B</th>
            <th>Status</th>
            <th>County </th>
            <th>Chama</th>
            <th>Date Registration</th>
            <th>Loan</th>
        </tr>

        </thead>
        <tbody>
        <?php
      
        require 'DB.php';
        $sql="SELECT * FROM `members`   order by m_id desc";
        $results=mysqli_query($conn,$sql);
        while ($row =mysqli_fetch_assoc($results))
        {
            extract($row);
           
            echo "<tr>
                    <td>$m_id</td>
                    <td>$m_name</td>
                    <td>$sex</td>
                    <td>$dob</td>
                    <td>$m_county</td>
                    <td>$m_status</td>
                    <td>$chama</td>
                    <td>$dor</td>
                    <td> <a href='loan.php?id=$m_id' class='btn btn-success'>Give Loan</a> </td>
                </tr>";
        }
        ?>
        </tbody>
    </table>


</div>
       </div>
    </div>
</body>
</html>