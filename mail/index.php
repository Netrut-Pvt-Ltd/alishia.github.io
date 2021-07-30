<!doctype html>
<html lang="en">

<!-- Mirrored from veepixel.com/tf/html/jodice/compnay-profile-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Feb 2021 05:52:12 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>HireForCare</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" href="../assets/images/fav.png" type="image/gif" sizes="64x64">

<!-- CSS
================================================== -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&amp;display=swap&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/all.min.css">
<link href="../assets/css/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link href="../assets/css/select2.min.css" rel="stylesheet" />
<link href="../assets/css/owl.carousel.min.css" rel="stylesheet" />
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/color-1.css">

</head>
<body>

<div class="container d-flex justify-content-center">

<div class="col-md-6">

<form id="forms" onsubmit="return validation()">

<label for="">Name</label>
<input  type="text" name="name"> <br>

<label for="">Email</label>
<input type="email" name="email">
<br>
<label for="">Phone</label>
<input type="number" name="phone">
<br>
<label for="">Subject</label>
<input type="text" name="subject">
<br>
<label for="">Masage</label>
<textarea name="massage" id="" cols="30" rows="10"></textarea>

<button type="submit">Submit</button>
</form>

</div>

</div>


<!-- End Footer Container
================================================== -->

<!-- Scripts
================================================== -->

<script>
function validation() {
   


$(document).ready(function() {

    $.ajax({
            type:"POST",
            url:"save_details.php",
             data: $('#forms').serialize(),
            // data: {mobile_number}
            success: function(res){
                
                if(res=="1"){
                  alert('You Request Submit Successfully')
                }
            },error: function(){
                alert('error');
                
            }
        }); 
});

return false;

}
 </script>
<script src="../assets/js/jquery-3.4.1.min.js"></script>
<script src="../assets/js/select2.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/aos.js"></script>
<script src="../assets/js/custom.js"></script>
</body>

<!-- Mirrored from veepixel.com/tf/html/jodice/compnay-profile-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Feb 2021 05:52:15 GMT -->
</html>
