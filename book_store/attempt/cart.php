<?php
session_start();

include 'header.php';

?>
            
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
        
        <h3>Shopping Cart</h3>
         <?php
                    if(isset($_GET['error'])){?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php
                            echo $_GET['error'];
                            ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(isset($_GET['success'])){?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php
                            echo $_GET['success'];
                            ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php
                    }
                    ?>
        <div class="table-responsive">
				<table class="table table-bordered">
					<tr>
                        <th width="40%">Product Image</th>
						<th width="40%">Product name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
                    <?php
                    require 'db.php';
                    require_once 'security.php';
                     $user_id =  $info ['user_id'];

                    $qry = "SELECT * FROM `cart`  WHERE user_id = '$user_id' ";
                    $result = mysqli_query($conn, $qry);
                    if(mysqli_num_rows($result) > 0)
				{
                    while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                            <?php
                                require 'db.php';
                                $product_id = $row['product_id'];
                                $qry2 = "SELECT * FROM `product` WHERE product_id = '$product_id'";
                                $results2 = $conn->query($qry2);
                                while ($row2 = $results2->fetch_assoc()) {
                                ?>

                                 
                                 <td> <img src="<?php echo $row2['product_image'] ?>" style="height: 100px;" class="img-fluid" alt="" srcset=""></td>
                                <td><?php echo $row2["product_name"]; ?></td>
                                <td><?php echo $row["quanity"]; ?></td>
                                <td>KSH <?php echo $row2["product_price"]; ?></td>
                                <?php
                                $subtotal = $row["quanity"] * $row2["product_price"];

                                ?>
                                <td>KSH <?php echo number_format($subtotal, 2);?></td>
                                <td> <a href="deletecart.php?cart_id=<?php echo $row['cart_id']; ?>">
                                             <i class="fas fa-trash-alt mb-1 mr-2"></i>
                                        </a></td>
                            </tr>
                             <?php
                                        }
                                    
                                        ?>

                            <?php
                                    $total = $total + ($subtotal);
                                }
                            ?>
                            <tr>
                                <td colspan="3" align="right">Total</td>
                                <td colspan="2"  align="right">KSH <?php echo number_format($total, 2); ?></td>
                                <td></td>
                            </tr>
					
                  <!-- <h1 class="text-center">YOUR CART IS EMPTY</h1> -->
                 
                  <?php
                }else {
                    ?>

                    <tr>
                        <td colspan="6" class="text-center"><h1>Your Cart is Empty</h1></td>
                    </tr>


                <?php


                }

                  ?>
                      
						
				</table>
			</div>
        <!-- <div class="table-responsive-lg">
            <table class="table-bordered">
                <tr>
                    <th></th>
                    <th>IMAGE</th>
                    <th>PRODUCT NAME</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td><i class="fa fa-trash"></i></td>
                    <td><img src="./images/citems.jpg" style="height: 80px;" class="img-fluid" alt=""></td>
                    <td>Rinosin Glasses</td>
                    <td>KSH 899.00</td>
                    <td>4</td>
                    <td>9000.00</td>
                </tr>
                <tr>
                    <td><i class="fa fa-trash"></i></td>
                    <td><img src="./images/citems.jpg" style="height: 80px;" class="img-fluid" alt=""></td>
                    <td>Rinosin Glasses</td>
                    <td>KSH 899.00</td>
                    <td>4</td>
                    <td>9000.00</td>
                </tr>
            </table>
        </div> -->
        <div class="container mt-5">
            <div class="summmary-text">
                <div class="row">
                    <div class="col-sm-6">
                        <h2> YOU MAY BE INTERESTED IN…</h2>
                      
                        <div class="row">
                        <?php
                                $query = "SELECT * FROM product ORDER BY Rand()  LIMIT 2 ";
                                $result = mysqli_query($conn, $query);
                                
                                if(mysqli_num_rows($result) > 0)
                                {
                                    while($row = mysqli_fetch_array($result))
                                    {
                        ?>
                            <div class="item ml-3 border">
                            <img src="<?php echo $row["product_image"]; ?>" style="height:300px" class="img-fluid" /><br />

                            <h4 class="text-info"><?php echo $row["product_name"]; ?></h4>

                            <h4 class="text-danger">KSH <?php echo $row["product_price"]; ?></h4>



                            <input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />

                            <input type="hidden" name="hidden_price" value="<?php echo $row["product_price"]; ?>" />
                            <input type="hidden" name="hidden_image" value="<?php echo $row["product_image"]; ?>" />
                            <!-- <button class="btn btn-success pl-5 pr-5 mt-2" name="save" type="submit">Add to Cart <i class="fa fa-shopping-basket"></i></button> -->
                            <button class="btn btn-success pl-5 pr-5 mt-2"><a href="./product.php?item_id=<?php echo $row['product_id']; ?> " style="text-decoration:none; color:white">
                            Add Cart</a> <i class="fa fa-shopping-basket"></i></button>
                            </div>
                            <?php
					}
				}
                ?>
                            

                        </div>
                     
		

                    </div>
                    <div class="col-sm-6 mb-5">
                        <div class="border p-5">
                            <table>
                                <tr class="d-flex justify-content-md-between">
                                    <td>VAT Total</td>
                                    <td class="prices-total">KSH 00.00</td>
                                </tr>
                                <tr class="d-flex justify-content-md-between">
                                    <td>Discount Total</td>
                                    <td class="prices-total pl-5">KSH 00.00</td>
                                </tr>


                                </tr>


                                <tr class="d-flex justify-content-between">
                                    <td>Grand Total</td>
                                   
                                    <td colspan="2" class="prices-total pl-5"  align="right">KSH <?php echo number_format($total, 2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="d-flex p-3 justify-content-end">
                            <a href="./products.php"><button class="btn btn-outline-primary">Continue Shopping</button></a>
                            <a href="./checkout.php"><button class="btn ml-3 btn-success">Check Out</button>
                                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

</body>
<script src="./js/jquery.min.js "></script>
<script src="./js/bootstrap.min.js "></script>
<script src="./js/bootstrap.js"></script>
<script src="./owl-carousel/js/owl.carousel.min.js"></script>
<script src="./js/index.js"></script>
<script src="./bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>





</html>