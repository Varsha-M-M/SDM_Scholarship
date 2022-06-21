<?php
    session_start();
    $otp=$_POST['otp'];
    $sotp=$_SESSION['OTP'];
	$to=$_SESSION['MAIL'];

    if($otp==$sotp){
    //else
       // echo"nooooo";
	include('smtp/PHPMailerAutoload.php');
	$html="<h2 style='color:blue'>"."CONGRATULATIONS...."."<br>"."YOU HAVE LOGGED IN SUCCESSFULLY !"."</h2>";
    $subjectt="login";
	echo smtp_mailer($to,$subjectt,$html);
}
else{
	header('Location:http://localhost/project2/login_unsuccessful.php');
}
	function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "sdmcetscholarship1@gmail.com";
	$mail->Password = "noug noyk xfax uast";
	$mail->SetFrom("sdmcetscholarship1@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	//$to="sonalibabanagar1@gmail.com";
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
 		'verify_peer'=>false,
 		'verify_peer_name'=>false,
 		'allow_self_signed'=>false
 	));
 	if(!$mail->Send()){
 		echo $mail->ErrorInfo;
		//header('Location:http://localhost/project2/login_unsuccessful.php');
 	}else{
 		echo 'Sent';
		header("Location:http://localhost/project2/button.php");
 	}
 }
?>