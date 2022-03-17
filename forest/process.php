<?php 
//remove html tags
$checkbox_values =  strip_tags($_POST['data']);
//remove last comma from string.
$checkbox_values = rtrim($checkbox_values,',');
//insert data 
$mysqli = new mysqli('localhost','root','root','forest');
/* check db connection connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "insert into tbl_check(hobbies) values('".$checkbox_values."')";
$result = $mysqli->query($sql);

if($result)
	echo "Inserted Successfully!";
else 
	echo "Not Inserted, Try Again..!";
 

?>