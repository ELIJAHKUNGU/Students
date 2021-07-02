<?php
if (isset($_POST["save"])) {
    require 'DB.php';
    extract($_POST);
    
        $sql = "INSERT INTO `orders`(`order_id`, `order_name`, `order_q`, `order_price`) 
		VALUES ('null','$order_name','$order_q','$order_price')";
        mysqli_query($conn, $sql);
        header("location:orders.php");


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
				
               <div class="col-sm-6 m-0">
					<div class="">
						<table class="table table-bordered p-3 shadow">
							<thead>
								<tr>
									<th>#</th>
									<th>Item Name</th>
									<th>Quantity</th>
									<th>Price </th>
									<th>Delete</th>
									<th>Allocate</th>
								</tr>

								</thead>
								<tbody>
								<?php
								require 'DB.php';
								$sql="SELECT * FROM `orders`  order by order_id desc";
								$results=mysqli_query($conn,$sql);
								while ($row =mysqli_fetch_assoc($results))
								{
									extract($row);
									echo "<tr>
									        
											<td>$order_id</td> 
											<td>$order_name</td> 
											<td>$order_q</td>
											<td>$order_price</td>
											
											<td> <a href='delete.php?id=$order_id' class='btn btn-danger'>Delete</a> </td>
											<td> <a href='deliverdetails.php?id=$order_id' class='btn btn-success'>Deliver</a> </td>
										</tr>";
								
							?>
							<?php } ?>
							</tbody>
						</table>	
					<div class=" pr-5 pl-5 pb-5">
						<h4>Place Orders</h4>
										
						<form action="#" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="title">Item Name</label>
									<input type="numerical" class="form-control" name="order_name" required>
								</div>
								<div class="form-group">
									<label for="name">Quantity</label>
									<input type="number" class="form-control" name="order_q" required>
								</div>
								<div class="form-group">
									<label for="name">Price</label>
									<input type="number" class="form-control" name="order_price" required>
								</div>
								<button name="save" class="btn btn-dark btn-block">Order Now</button>

						</form>
                    </div>
			   </div>
			  
		</div>
		</div>
               
		
                           
    
	</body>
</html>
