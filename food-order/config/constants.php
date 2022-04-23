<?php
//start session
session_start();


//This constants page is following  a DRY(Dont Repeat Yourself) pattern

//create constants to store non-repeating values
define('SITEURL', 'http://localhost/food-order/');
// define('LOCALHOST', 'localhost');//constants are named with capital letters e.g 'LOCALHOST'
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'food-order');


// $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn)); //Database connection
// $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn)); //selecting database (i.e food-order)

$conn = mysqli_connect("localhost", "root", "", "food-order");

?>