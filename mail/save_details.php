<?php
// print_r($_POST);
// print_r($_FILES['file']); die;

$name = $_POST['name'];
// echo $name; die;
$email  = $_POST['email'];
$phone = $_POST['phone'];
$subject  =   $_POST['subject'];
$massage  = $_POST['massage'];

if($_FILES['file']['name'] != ''){
	$filename = $_FILES['file']['name'];

	// echo $filename; die;
	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	// echo $extension; die;

	$tmp_name = $_FILES['file']['tmp_name'];

	// echo $tmp_name; die;

	$valid_extensions = array("jpg","jpeg","png","pdf","doc","docx","text");

	if(in_array($extension, $valid_extensions)){
		$new_name = rand() . "." . $extension;
		$path = "images/".$new_name;

		if(move_uploaded_file($tmp_name, $path)){
		    //  echo "success"; die;
		}else{
			echo "not uploaded";die;
		}
	}

}else{
	echo "file not found"; die;
}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = false;									
	$mail->isSMTP();		
    // $mail->AddEmbeddedImage(dirname(__FILE__).'\images\search.jpg','image')		;							
	$mail->Host	 = 'smtp.gmail.com';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'contact.alishia@gmail.com';				
	$mail->Password = 'Alishia@2020';
	$mail->addAttachment("images/".$new_name);						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;
	$mail->isHTML(true);								
	$mail->setFrom('contact.alishia@gmail.com', 'Alishia');		
// 	$mail->addAddress('contact@umeshit.com');	
	$mail->addAddress('careers@alishia.co.in', 'Name');
	$mail->Subject = 'Contact Us page lead';
    $mail->Body = 'Name'."-".$name."<br>". 'Email'."-".$email."<br>". 'Subject'."-".$subject."<br>".'Massage'."-".$massage."<br>".'Number'."-".$phone;
	
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';

    $success = $mail->send();
    if($success){
        echo "1";
    }
	



}

	
	
 catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
