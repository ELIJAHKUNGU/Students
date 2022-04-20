<?php include 'inc/header.php'; ?>
<?php 
$login = Session::get("cuslogin");
if ($login == false) {
    header("Location:login.php");
}
 ?>
<style type="text/css">
.payment{width: 500px; min-height: 200px; text-align: center; border: 1px solid #ddd; margin: 0 auto; padding:50px;}	
.payment h2{border-bottom: 1px solid #ddd; margin-bottom: 40px; padding-bottom: 10px;}	
.payment a{background: #3C3B40; border-radius: 3px; color:#fff; font-size:22px; padding:5px 30px;}
.back a{width:150px; margin: 5px auto 0; padding: 7px 0; text-align: center; display: block; background: #555; border:1px solid #333; color: #fff; border-radius: 3px; font-size: 25px; }	
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="main">
	<div class="content">
		<div class="section group">
		<div class="payment">
			<h2>Payment Ontion</h2>
			<!-- <a href="paymentoffiline.php">Cash On Delivery</a> -->
			<form action="mpesa.php" method="GET">
				<?php
				$amount = $_GET['amount'];
				echo 'Amount '.$amount;

				 ?>
				 <br>
				 <br>
				<label for="">Amount</label>
				
			
				<label for="">MPESA NUMBER</label>
				<p> </p>
				<input type="text" hidden class="form-control" value="<?php echo $amount ?>" name="amount">
				<input type="text" class="form-control" name="phone" placeholder="+254703748916">
			<br> <br>
				<button class="btn btn-success">Submit</button>
				<a href="paymentoffiline.php">Cash On Delivery</a>
			</form>
		</div>
		<div class="back">
			<a href="cart.php">Previous</a>
		</div>				
		</div>
	</div>
<?php include 'inc/footer.php'; ?>
