
   
    <?php
    session_start();
    include 'header.php';
    require 'db.php';
    require_once 'security.php';
    print_r($_SESSION["shopping_carts"]);
    // foreach($_SESSION["shopping_carts"] as $keys => $values)
    // {
    //         // echo $key ." : ". $value['quantity'] . "<br>";
           
    //         // print_r($values["item_quantity"]);
    //         $sql_cart = "SELECT * FROM product where product_id = '$keys' ";
    //        $result = mysqli_query($conn, $sql_cart);
    //        $row = mysqli_fetch_assoc($result);
    //        print_r($row);
    //        $total = $total +  ($row['product_price'] * $values["item_quantity"]);
    //     // print_r($keys);
          
    // }
    if(!empty($_SESSION["shopping_carts"]))
    {
        $total = 0;
        // print_r($_SESSION["shopping_carts"]);
        foreach($_SESSION["shopping_carts"] as $keys => $values)
        {
            $total = $total + ($values["item_quantity"] * $values["item_price"]);
       
        }
    }
   
				
    ?>
     <style>
        /*--------check out right---------*/
        
        .show-item-description {
            display: flex;
            border-bottom: 1px solid grey;
        }
        
        .show-item-description>img {
            object-fit: contain;
            height: 70px;
            width: 70px;
        }
        
        .show-product-item-details {
            display: flex;
            flex-direction: column;
        }
        
        .calculated-totals {
            padding-top: 20px;
        }
        
        .total-group {
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .total-title {
            font-weight: 700;
        }
        
        .total-group>button {
            background-color: hsl(120, 100%, 25%) !important;
            border: none;
            height: 50px;
            color: white;
            width: 100%;
            border-radius: 2px;
        }
        
        .total-group>button>a {
            text-decoration: none;
            color: white;
        }
        
        .col-sm-8 {
            max-width: 700px;
            margin-left: 20px;
        }
        
        .col-sm-4 {
            max-height: 400px;
        }
    </style>
   
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout </li>
            </ol>
        </nav>
        <!-- <div class="row">
            <div class="col-sm-9">
                <h4>CHECKOUT</h4>
                <h1>Address</h1>
                <form action="">
                    <div class="d-flex">
                        <div class="d-block">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="d-block">
                            <label for="">Email Address</label>
                            <input type="text" class="form-control" name="" id="">
                        </div>
                    </div>
                    <h3>Pay via Mpesa</h3>

                </form>

            </div>
            <div class="col-sm-3">

            </div>
        </div> -->
        <!-- <?php
// include 'header.php';
?> -->
        <h5 class="pl-4">Checkout</h5>
        <?php
        // $user_id =  $info ['user_id'];
        // $query = "SELECT * FROM users  where `user_id` = '$user_id'";
        // $result = mysqli_query($conn, $query);
    
        //     $row = mysqli_fetch_array($result);
            
       
        ?>
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 accordion-collapse mb-3 pt-5 pb-5 bg-white col-lg-8">
                        <div class="checkout-left">
                            <div class="checkout-title ml-4">

                            </div>
                            <div class="checkout-body">
                                <div class="address">
                                    <div class="address-title">
                                        <h2 class="text-success ml-3">Address Details</h2>
                                    </div>
                                    <div class="address-body pl-3">
                                        <form action="">
                                            <?php
                                            $query = "SELECT * FROM `users` where user_id = '$user_id' ";
                                            $result = mysqli_query($conn, $query);
                                            
                                            if(mysqli_num_rows($result) > 0)
                                            {
                                                while($row = mysqli_fetch_array($result))
                                                {

                                            ?>
                                            <div class="d-flex">
                                                <style>
                                                    input{
                                                        text-transform: uppercase;

                                                    }
                                                </style>
                                                <div class="d-block">
                                                    <label for="" class="text-success">Username</label>
                                                    <input style="height: 50px; min-width:300px;" value=<?php echo $row['username'] ?>  type="text" class="form-control" placeholder="John" />
                                                </div>
                                                <div class="d-block ml-3">
                                                    <label for="" class="text-success">Email Address</label>
                                                    <input style="height: 50px; min-width:300px;"  value=<?php echo $row['email'] ?>  type="text" class="form-control pt-2 pb-2" placeholder="Doe" />
                                                </div>
                                                
                                            </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                            <div class="d-block ml-3">
                                                    <label for="" class="text-success"> Address</label>
                                                    <input style="height: 50px; min-width:300px;" name="address" type="text" class="form-control pt-2 pb-2" placeholder="Doe" />
                                                </div>
                                                <div class="d-flex">
                                                    <div class="d-block">
                                                         <label for="" class="text-center ml-2 ">Town</label>
                                                        <input type="text " name="town" class="form-control">
                                                    </div>
                                                    <div class="d-block ml-2">
                                                         <label for="" class="text-center ml-2 ">City</label>
                                                        <input type="text " name="city" class="form-control">
                                                    </div>
                                                    <div class="d-block ml-2">
                                                         <label for="" class="text-center ml-2 ">Zip code</label>
                                                        <input type="text " name="town" class="form-control">
                                                    </div>
                                                   


                                                  
                                                </div>
                                                <input type="text" value="<?php $values['item_quantity']  ?>">

                                                
                                                <div class="d-block ml-3">
                                                    <label for="" class="text-success">Notes</label>
                                                    <textarea name="desc" id="" class="form-control" cols="30" rows="5"></textarea>
                                                </div>
                                                
                                               

                                        </form>
                                    </div>
                                </div>
           
            
                                <div class="pay-with-mpesa">
                                    <div class="d-flex">
                                        <h5 class=" pl-5 mt-3">Pay with Mpesa</h5>
                                        <img src="./images/mpesa.svg" style="height:70px; width: 70px;" class="img-fluid " alt="" />
                                    </div>
                                </div>
                                <div class="pl-4">
                                    <form action="">
                                        <div class="form-group col-sm-6 col-lg-6">
                                            <h6>Enter the Phone Number and Confirm paymet on your phone</h6>
                                            <label for="">Enter Phone</label>
                                            <input type="text" class="form-control" placeholder="+25743770216" />
                                        </div>
                                    </form>
                                </div>

                                <div class="calculated-totals">

                                    <div class="total-group">
                                        <button>
                                        <a href="/index.html">Confirm Order</a>
                                    </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 bg-white ml-3 col-lg-4">
                        <div class="checkout-right">
                            <div class="checkout-title">
                                <h4>Order summary</h4>
                            </div>
                            <div class="checkout-body">
                                <div class="address-title">
                                    <h4>Your Order Item</h4>
                                </div>
                                <div class="show-items">
                                    <div class="calculated-totals">
                                        <div class="total-group">
                                            <span class="total-title">Total Items</span>
                                            <span>
                                            <?php
                        if(!empty($_SESSION["shopping_carts"])){
                            $cart_count = count(array_keys($_SESSION["shopping_carts"]));
                        echo $cart_count;
                        }else{
                            echo 0;
                        }

                        ?>
                                            </span>
                                        </div>
                                        <div class="total-group">
                                            <span class="total-title">SubTotal</span>
                                            <span><?php echo $total?></span>
                                        </div>
                                        <div class="total-group">
                                            <span class="total-title">VAT</span>
                                            <span>0</span>
                                        </div>
                                        <div class="total-group">
                                            <span class="total-title">Total</span>
                                            <span><?php echo $total?></span>
                                        </div>
                                        <div class="total-group">
                                            <button>
                                            <a href="/index.html">Dowmload Invoice</a>
                                        </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>
    <section style="background-color: hsl(0, 0%, 96%);" class="pt-5 pb-5">
        <div class="container">

</body>
<script src="./js/jquery.min.js "></script>
<script src="./js/bootstrap.min.js "></script>
<script src="./js/bootstrap.js"></script>
<script src="./owl-carousel/js/owl.carousel.min.js"></script>
<script src="./js/index.js"></script>
<script src="./bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->





</html>