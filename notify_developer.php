<?php

require 'smtp/PHPMailerAutoload.php';

    $too=array("sonalibabanagar1@gmail.com","varshachukki7@gmail.com","padmashri0508@gmail.com","ashitabheemappa@gmail.com");
    $sname=$_POST['sname'];

    $subjectt=$_POST['type'];

    $message="Scholarship Name is:".$sname."<br>"."Scholrship Details"."<br>".$_POST['w3review'];

    foreach ($too as $to){
        echo smtp_mailer($to,$subjectt,$message);
    }

	
	$html=$message;
	//echo smtp_mailer($to,$subjectt,$html);
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
	//$to="sonalibabanagar1@gmail.com","varshachukki7@gmail.com","padmashri0508@gmail.com","ashitabheemappa@gmail.com";
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
 		'verify_peer'=>false,
 		'verify_peer_name'=>false,
 		'allow_self_signed'=>false
 	));
 	if(!$mail->Send()){
 		echo $mail->ErrorInfo;
 	}else{
 		return 'Sent';
 	}
 }
?>