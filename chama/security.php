<?php

session_start();
if (!isset($_SESSION["info"])){
   header("location:Login.php");
}

?>