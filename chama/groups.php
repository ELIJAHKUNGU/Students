
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chama</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./fontawesome-free-5.0.1/css/fontawesome-all.css">
</head>
<body>
    <div class="dashboard">
        <div class="top-navbar">
            <div class="logo">
                <h1>Chama</h1>
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
        <div class="ml-3 mr-3">
    <h2 class="text-center mt-5">Group Details</h2>
    <hr>
    <table class="table shadow mt-5" id="movies">
        <thead>
        <tr>
            <th>#</th>
            <th>Group Name</th>
            <th>Monthly Contributions</th>
            <th>Group Members</th>
            <th>Date</th>
            <th>Delete</th>
        </tr>

        </thead>
        <tbody>
        <?php
      
        require 'DB.php';
        $sql="SELECT * FROM `group`   order by g_id desc";
        $results=mysqli_query($conn,$sql);
        while ($row =mysqli_fetch_assoc($results))
        {
            extract($row);
            echo "<tr>
                    <td>$g_id</td>
                    <td>$g_name</td>
                    <td>$g_m</td>
                    <td>$g_t</td>
                    <td>$date</td>
                    
                    <td> <a href='delete.php?id=$g_id' class='btn btn-danger'>Delete</a> </td>
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