<?php
if($_POST['logout']){
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 // Destroy the session.
session_destroy();
exit();
}
?>