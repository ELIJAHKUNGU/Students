<?php
session_start();
include 'header.php';

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_carts"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_carts"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}
?>
            
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
        <h3>Shopping Cart</h3>
        <div class="table-responsive">
				<table class="table table-bordered">
					<tr>
                        <th width="30%">Product Image</th>
						<th width="30%">Product name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="20%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_carts"]))
					{
						$total = 0;
                        // print_r($_SESSION["shopping_carts"]);
						foreach($_SESSION["shopping_carts"] as $keys => $values)
						{
					?>
                            <tr>
                                 
                                 <td>
                                 <a href="./product.php?item_id=<?php echo $values["item_id"];  ?> " style="text-decoration:none; color:white">
					               <div class="d-flex justify-content-center">
                                   <img src="<?php echo $values["item_image"]; ?>" style="height:80px" class="img-fluid" /><br />
                                   </div>
					             </a>    
                                     
                                    </td>
                                <td><?php echo $values["item_name"]; ?></td>
                                <td><?php echo $values["item_quantity"]; ?></td>
                                <td>KSH <?php echo $values["item_price"]; ?></td>
                                <td>KSH <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                                <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger text-center">
                                    <i class="fa fa-trash"></i>
                                </span></a></td>
                            </tr>
                            <?php
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                }
                            ?>
                            <tr>
                                <td colspan="3" align="right">Total</td>
                                <td colspan="2"  align="right">KSH <?php echo number_format($total, 2); ?></td>
                                <td></td>
                            </tr>
					<?php
					}else{
                
                        ?>
                  <tr>
                      <td colspan="6"><h1 class="text-center">YOUR CART IS EMPTY</h1></td>
                  </tr>

                        <?php

                    }
					?>
						
				</table>
			</div>
        
        <div class="container mt-5">
            <div class="summmary-text">
                <div class="row">
                    <div class="col-sm-6">
                        <h2> YOU MAY BE INTERESTED IN…</h2>
                      
                        <div class="row">
                        <?php
                        require 'db.php';
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