
<?php
require 'smtp/PHPMailerAutoload.php';
$conn=mysqli_connect("localhost","root","","sc_project");

$id=$_POST['scholar'];
$sub =$_POST['scholar1'];

//$devs=array("sonalibabanagar1@gmail.com","varshachukki7@gmail.com","padmashri0508@gmail.com","ashitabheemappa@gmail.com");

$sql=   "select mail
         from student
         where usn in  (select usn
                        from student_scholarship 
                        where scholarship_id=$id)";

$sql2="select scholarship_name from scholarship_details where scholarship_id=$id";
        $res2=mysqli_query($conn,$sql2);
        $sc_name_row=mysqli_fetch_assoc($res2);
        $sc_name=$sc_name_row['scholarship_name'];
        $s=json_encode($sc_name);

$sql3="select * from student";

$ref="Notification of Arrival of New Scholarship";
if(strcmp($sub,$ref)==0){
    $res=mysqli_query($conn,$sql3);
}

else{
    $res=mysqli_query($conn,$sql);
}

if(mysqli_num_rows($res)>0){
    while($x=mysqli_fetch_assoc($res)){

        $too=($x['mail']);
            $msg=$_POST['w3review'];

            $subjectt=$sub;
            $message = '<h2 style="color: blue">Scholarship Name: </h2> '."<h2 style='color:blue';>".$s."</h2>"."<br>"."<br>"."\n"."\n"."<h3>".$msg."</h3>";
			$html=$message;
			smtp_mailer($too,$subjectt,$html);

			//UFsendMail($too);

    }
    
}

//...........................close php tag


			
//<?php
// $arr=array();
// if(mysqli_num_rows($res)>0){
//     while($x=mysqli_fetch_assoc($res)){

//         $too=($x['mail']);
// 			array_push($arr,$too);
//             $msg=$_POST['w3review'];

//             $subjectt=$sub;
//             $message = '<h2 style="color: blue">Scholarship Name: </h2> '."<h2 style='color:blue';>".$s."</h2>"."<br>"."<br>"."\n"."\n"."<h3>".$msg."</h3>";

// 			//$mail->AddAddress($too);

// 			//udfsendMail($too);

//     }
    
// }
			 //include 'smtp/PHPMailerAutoload.php';
			$html=$message;
			//echo 
			//smtp_mailer($too,$subjectt,$html);
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
			//$to=$too;

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
	//	}
?>