<?php


if (isset($_GET["id"])){
    $id = $_GET["id"];
    require 'DB.php';
    $sql="SELECT * FROM `orders` WHERE  order_id= $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);
}

if (isset($_POST["save"])) {
    require 'DB.php';
    extract($_POST);
    $sql = " INSERT INTO `delivery`(`d_id`, `d_name`, `c_name`, `d_phone`, `d_quantity`, `d_price`, `date`)
     VALUES ('null','$d_name','$c_name','$d_phone','$d_quantity','$d_price','null')";
    mysqli_query($conn, $sql);
    header("location:delivery.php");
}else{
    mysqli_error($conn);
    
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Foodies</title>
		<link rel="stylesheet" href="./css/bootstrap.min.css" />
		<link rel="stylesheet" href="./fontawesome-free-5.0.1/css/fontawesome-all.css"
		/>
		<link rel="stylesheet" href="./css/styles.css" />
	</head>

	<body>
		<div class="main-page">
			<div class="top-bar">
				<div class="title">
					<h6>Foodies 😊</h6>
				</div>
				<div class="search-bar">
					<input
						type="text"
						placeholder="look for the latest delivery"
					/>
					<i class="fa fa-search"></i>
				</div>
				<div class="right-bar">
					<div class="user-icon">
						<img src="./images//lapt-keys.jpg" alt="" />
						<i class="fa fa-chevron-down"></i>
					</div>
					<i class="fa fa-bell ml-3"></i>
				</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
				<div class="col-sm-6 m-0">
					<div class="">
						<div class="">
							<img src="./images/f1.png" alt="" />
						</div>
						<div class="">
							<a href="./index.php">
								<div class="menu-item-icon">
									<i class="fa fa-home"></i>
									<h6>Home</h6>
								</div>
							</a>
							<a href="./orders.php">
								<div class="menu-item-icon">
									<i class="fa fa-shopping-cart"></i>
									<h6>Orders</h6>
								</div>
							</a>
							<a href="">
								<div class="menu-item-icon">
									<i class="fa fa-truck"></i>
									<h6>Delivery</h6>
								</div>
							</a>
							
							<a href="">
								<div class="menu-item-icon">
									<i class="fa fa-user"></i>
									<h6>Accounts</h6>
								</div>
							</a>
							<a href="">
								<div class="menu-item-icon">
									<i class="fa fa-cogs"></i>
									<h6>Settings</h6>
								</div>
							</a>
						</div>
					</div>
				</div>
                <div class="col-sm-6">
                    <form action="deliverdetails.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Item Name</label>
                                <input type="text" value="<?=$order_name?>" class="form-control" name="d_name" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Customer Name</label>
                                <input type="text"  class="form-control" name="c_name" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Address</label>
                                <input type="text"  class="form-control" name="d_address" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Phone Number</label>
                                <input type="text"  class="form-control" name="d_phone" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Quantity</label>
                                <input type="number"  class="form-control" name="d_quantity" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Price</label>
                                <input type="number" value="<?=$order_price?>" class="form-control" name="d_price"  required>
                            </div>
                            <button name="save" class="btn btn-dark btn-block">Save</button>
                    </form>
                </div>
				
              
			  
		</div>
		</div>
               
		
                           
    
	</body>
</html>
