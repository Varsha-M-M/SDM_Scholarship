<?php
    $conn=mysqli_connect("localhost","root","","sc_project");
    session_start();

    //$m_usn=$_SESSION["id"];

    // ini_set('dispaly_errors',1);
    // error_reporting(E_ALL);
    $m_usn='7777';

     $sql=   "(select mail
               from student
               where phone=$m_usn)";

               $res=mysqli_query($conn,$sql);

            if(mysqli_num_rows($res)>0){
                // echo "ssss";
                 while($x=mysqli_fetch_assoc($res)){
                     //echo "ssss";
                     $too=($x['mail']);
                     $otp=rand(100000,999999);
                     $_SESSION["OTP"]=$otp;
					 $_SESSION['MAIL']=$too;
                 }
            }



	include('smtp/PHPMailerAutoload.php');
	$html="<h1>".$otp."</h1>";
    $subjectt="OTP";
	echo smtp_mailer($too,$subjectt,$html);
	function smtp_mailer($too,$subject, $msg){
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
	$mail->AddAddress($too);
	$mail->SMTPOptions=array('ssl'=>array(
 		'verify_peer'=>false,
 		'verify_peer_name'=>false,
 		'allow_self_signed'=>false
 	));
 	if(!$mail->Send()){
 		echo $mail->ErrorInfo;
 	}else{
 		echo 'Sent';
        header("Location:http://localhost/project2/send_otp_home.php");
 	}
 }
?>