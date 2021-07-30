<?php
date_default_timezone_set('Asia/Kolkata');
// database Connection
$host="global-db";
$user_name="alishia.co.in-VrAw6a";
$password="wRnb6cx8sz9U";
$database_name="alishia_co_in";
$db=mysqli_connect($host,$user_name,$password,$database_name);

// Check connection
// if (!$databaseConnection) {
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