<?php 
session_start();

if(@$_SESSION['loggedin'] == true){
header("location:index.php");
}

require('db.php');
if($_POST){

	$username = $_POST['username'];
	$password = $_POST['password'];


	$password = md5($password);
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	// echo $query; die;
	$result = mysqli_query($db, $query);
	if($result){

	if (mysqli_num_rows($result	) == 1) {
		$_SESSION['username'] = $username;	
		$_SESSION['loggedin'] = true;	
		echo 1;
	}else{
		echo 0;
	}
}else{
	echo "no";
}

	die;
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Alishia</title>
	<link rel="stylesheet" href="assets/styles/style.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

</head>

<body>

<div id="single-wrapper">
	<form id="form" onsubmit="return validation()" class="frm-single" autocomplete="off">
		<div class="inside">
			<div class="title"><strong>Alishia</strong>Admin</div>
			<!-- /.title -->
			<div class="frm-title">Login</div>
			<!-- /.frm-title -->
			<div class="frm-input">
				<input autocomplete="off" id="username" name="username" type="text" placeholder="Username" class="frm-inp"><i class="fa fa-user frm-ico"></i>
			</div>
			
			<!-- /.frm-input -->
			<div class="frm-input"><input autocomplete="off" id="password" name="password" type="password" placeholder="Password" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
			<!-- /.frm-input -->
			
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>
			
			<!-- /.row -->
			<!-- <a href="page-register.html" class="a-link"><i class="fa fa-key"></i>New to NinjaAdmin? Register.</a> -->
			<div class="frm-footer">aLishia © 2021.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script>
		function validation() { 
			var username= document.getElementById("username").value;
    		var password = document.getElementById("password").value;
			
			// alert(username);
			// alert(password);

			$(document).ready(function(){
            
                $.ajax({
            type:"POST",
            url:"login.php",
            data: $('#form').serialize(),
            // data: {mobile_number}
            success: function(res){
            //    alert(res);
			if(res == 1){
				window.location.href = "index.php";
			}
            },error: function(){
                alert('error');
            }
        }); 
        
        
         
            
           
        })
			return false;
		

		}
	</script>
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>