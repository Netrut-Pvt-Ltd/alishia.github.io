<?php
require('db.php');
$id=  $_POST['id'];
// echo $id; die;

$query = "select * from requirements where id='$id'";
// echo $query; die;
$result = mysqli_query($db, $query);
$data=mysqli_fetch_assoc($result);


$position = $data['position'];
$product = $data['product'];
$location = $data['location'];
$industry = $data['industry'];
$desc = $data['des'];


 $array = [$position,$product,$location,$industry,$desc];
          echo json_encode($array);


?>