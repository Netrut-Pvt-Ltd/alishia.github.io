<?php
date_default_timezone_set('Asia/Kolkata');
// database Connection
$host="localhost";
$user_name="root";
$password="";
$database_name="alishia";
$db=mysqli_connect($host,$user_name,$password,$database_name);

// Check connection
// if (!$db) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

//PDO Database
// $dsn= "mysql:host=localhost; dbname=hireforyou;";
// $db_user = "root";
// $db_password = "";
// try{
//     $databaseConnection = new PDO($dsn, $db_user, $db_password);
//     echo "connected";

// }catch(PDOException $e){
// echo "Connection Failed".$e->getMessage();
// }

?>