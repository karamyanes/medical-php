<?php
// Start Session
session_start();

 // Create constants to store non repaiting values
 define('SITEURL','http://localhost/food_order/');
 define('LOCALHOST','localhost');
 define('DB_USERNAME','root');
 define('DB_PASSWORD','');
 define('DB_NAME','food_order');

  
 $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));// Database Connection
 $db_select= mysqli_select_db($conn,'food_order') or die(mysqli_error($conn)); // Selecting Database

?>