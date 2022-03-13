<?php 
session_start();
require 'db.php';
include 'header.php';

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_carts"]))
	{
		$item_array_id = array_column($_SESSION["shopping_carts"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_carts"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"],
                'item_image'		=>	$_POST["hidden_image"],
			);
			$_SESSION["shopping_carts"][$count] = $item_array;
		}
		else
		{
            echo '<script>alert("Product added succefully in the cart")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"],
            "item_image"        => $_POST['hidden_image']
		);
		$_SESSION["shopping_carts"][0] = $item_array;
	}
}



?>


            <div class="menu">
                <h1 class="ml-3 mt-3">Menu category</h1>
                
                <div class="row menu-show">
                    <!-- <div class="my-card col-sm-3 p-2 border  mt-3 ">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid" style="height: 250px;" src="./images/Chem-F1-PB-324x486.png" class="img-fluid" alt="" />

                            </div>
                            <h5 class="text-center mt-2">Chemistry F1</h5>
                            <div class="d-flex ml-4">
                                <div class="price-1">
                                    <strike>
                                <h4>KSH 900.00</h4>
                                </strike>
                                </div>
                                <div class="price-2 ml-2">

                                    <h4>790.00</h6>

                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button style="background-color: green;" class="btn btn-success">Add to Cart <i class="fa fa-shopping-basket"></i> </button>
                            </div>
                        </div>
                        

                    </div> -->
                    <?php
				$query = "SELECT * FROM product ORDER BY Rand() ";
				$result = mysqli_query($conn, $query);
                
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="my-card col-sm-3 p-2 border  mt-3 ">
				
                <form method="post" action="products.php?action=add&id=<?php echo $row["product_id"]; ?>">
					<div  align="center">
						<img src="<?php echo $row["product_image"]; ?>" style="height:300px" class="img-fluid" /><br />

						<h4 class="text-info"><?php echo $row["product_name"]; ?></h4>

						<h4 class="text-danger">KSH <?php echo $row["product_price"]; ?></h4>

					

						<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["product_price"]; ?>" />
                        <input type="hidden" name="hidden_image" value="<?php echo $row["product_image"]; ?>" />
						<!-- <button class="btn btn-success pl-5 pr-5 mt-2" name="save" type="submit">Add to Cart <i class="fa fa-shopping-basket"></i></button> -->
                        <button class="btn btn-success pl-5 pr-5 mt-2"><a href="./product.php?item_id=<?php echo $row['product_id']; ?> " style="text-decoration:none; color:white">Add Cart</a> <i class="fa fa-shopping-basket"></i></button>

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
                </div>
                
            </div>

        </div>

    </div>
    </div>
    </div>
        
			
    <?php
include 'footer.php';
?>