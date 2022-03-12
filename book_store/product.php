<?php
include "header.php";
// require_once 'security.php';
?>
    <div class="container product-banner">
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                <?php


                    $product_id = $_GET['item_id'];
                    //materials
                    include "db.php";
                    $qry = "SELECT * FROM product where product_id = $product_id ";
                    $products = $conn->query($qry);
                    while ($row = $products->fetch_assoc()) {
                    ?>

                    <div class="col-sm-6 mt-2">
                        <div class="d-flex justify-content-center">
                        <img src="<?php echo $row['product_image'] ?>" style="object-fit: contain" class="img-fluid" alt="" srcset="">

                        </div>
                    </div>
                    <div class="col-sm-6 mt-4">
                    <p> <h5>Tags: <?php echo $row['class-group'] ?> , <?php echo $row['form_level'] ?> </h5></p>

                        <h5>Brands: KLB</h5>
                        <h5>Availabilty : <span style="color:green; font-size: 22px;">In Stock</span> </h5>

                        <div class="d-flex">
                            <div class="price-1">
                                <strike>
                        <h6>KSH <?php echo $row['product_sprice'] ?></h6>
                        </strike>
                            </div>
                            <div class="price-2 ml-2">

                                <h6><?php echo $row['product_price'] ?></h6>

                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa  fa-star"></i>
                            <i class="fa  fa-star"></i>
                            <i class="fa  fa-star"></i>
                            <i class="fa  fa-star"></i>
                            <i class="fa  fa-star-half-alt"></i>
                            <span> (1 Reviews) | Write A Review
                        </span>
                        </div>
                        <p class="mt-3"> Product Summery Long printed dress with thin adjustable straps. V-neckline and wiring under the Dust with ruffles at the bottom of the dress. </p>
                        <form action="cartadd.php" method="post">
                            <div class="d-flex">
                                <label for="">QTY</label>
                                <input type="number" name="quantity" class="pl-2 ml-5" min="1" value="1" id="">
                                <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?> ">


                            </div>
                            <button class="btn btn-success pl-5 pr-5 mt-2" name="save" type="submit">Add to Cart <i class="fa fa-shopping-basket"></i></button>
                        </form>


                    </div>

                    <hr>
                    <div class="mt-4 p-5">
                        <h3>Product Details </h3>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis porro facilis earum iste sunt dignissimos dolorum nesciunt fugiat nisi officiis architecto accusantium, velit ratione repellat voluptatem suscipit saepe hic quis?</p>
                    </div>

                </div>
                <?php
                }
                ?>
            </div>
            <?php
                // $classs =     $row['class-group'];
				// $query = "SELECT * FROM product class_group LIKE classs  ";
				// $result = mysqli_query($conn, $query);
                
				// if(mysqli_num_rows($result) > 0)
				// {
				// 	while($row = mysqli_fetch_array($result))
					// {
				?>
			<!-- <div class=" col-sm-3 p-2 border  mt-3 ">
				
                <form method="post" action="products.php?action=add&id=<?php echo $row["product_id"]; ?>">
					<div  align="center">
						<img src="<?php echo $row["product_image"]; ?>" style="height:300px" class="img-fluid" /><br />

						<h4 class="text-info"><?php echo $row["product_name"]; ?></h4>

						<h4 class="text-danger">KSH <?php echo $row["product_price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["product_price"]; ?>" />
                        <input type="hidden" name="hidden_image" value="<?php echo $row["product_image"]; ?>" />

                        <button class="ml-auto btn btn-success"><a href="./product.php?item_id=<?php echo $row['product_id']; ?> " style="text-decoration:none; color:white">Add Cart</a></button>

					</div>
				</form>
			</div> -->
			<?php
				// 	}
				// }
			?>
        </div>
    </div>
</body>
<script src="./js/jquery.min.js "></script>
<script src="./js/bootstrap.min.js "></script>
<script src="./js/bootstrap.js"></script>
<script src="./owl-carousel/js/owl.carousel.min.js"></script>
<script src="./js/index.js"></script>
<script src="./bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->





</html>