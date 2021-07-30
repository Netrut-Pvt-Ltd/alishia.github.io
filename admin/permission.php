<?php
require('db.php');
$id=  $_POST['id'];
$perm =  $_POST['v'];

if($perm == 1){
    $approve = 0;
}else{
    $approve = 1;
}

$query = "update requirements set approve ='$approve' where id='$id'";
$result = mysqli_query($db, $query);
if($result){
    echo "success";
}else{
    echo "fail";
}



?>