<div class="col-sm-3 pl-4">
    <div class="mt-3">
        <div class="d-flex">

            <span class="ml-2 mt-3"> 
                            <i class="fas fa-4x user-company  fa-user mr-2"></i>

                       <?php
                        require 'config.php';
                        echo   $company_name; 


                        ?>
                        </span>
        </div>
        <span>user ID: 
                        <?php
                        require 'config.php';
                        echo   $user_id; 


                        ?>
                    </span>
    </div>
    <div class="mt-3">
        <div class="dashboard-links">
            <a class="nav-item" href="./customerdashboard.php">
                <li><i class="fas mr-3 fa-home text-white"></i>Home </li>
            </a>
            <a class="nav-item" href="./userdetails.php">
                <li><i class="fas mr-3 fa-user text-white"></i>User Details </li>
            </a>
            <a class="nav-item" href="./rating.php">
                <li><i class="fas mr-3 fa-briefcase text-white"></i> Rating </li>
            </a>
            <a class="nav-item" href="./orders.php">
                <li><i class="fas mr-3 text-white fa-plus"></i>Orders</li>
            </a>
            <a class="nav-item" href="./deliveries.php">
                <li><i class="fas mr-3 text-white fa-plus"></i>Deliveries</li>
            </a>
        </div>
    </div>
</div>