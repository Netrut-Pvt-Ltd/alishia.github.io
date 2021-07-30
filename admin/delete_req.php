<?php
require('db.php');
$id=  $_POST['id'];


$query = "DELETE FROM requirements  where id='$id'";
$result = mysqli_query($db, $query);
if($result){
    echo 1;
}else{
    echo "fail";
}



?>