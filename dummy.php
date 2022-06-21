$conn=mysqli_connect("localhost","root","","sc_project");

    //$id=$_POST['scholar'];
    //$sub =$_POST['scholar1'];
    $id='3';
    $sub="hellooo";

    $devs=array("sonalibabanagar1@gmail.com","varshachukki7@gmail.com","padmashri0508@gmail.com","ashitabheemappa@gmail.com");

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

    $ref="Arrival of New Scholarship";
    if(strcmp($sub,$ref)==0){
        $res=mysqli_query($conn,$sql3);
    }

    else{
        $res=mysqli_query($conn,$sql);
    }

    if(mysqli_num_rows($res)>0){
        while($x=mysqli_fetch_assoc($res)){

            $too=($x['mail']);
                //$msg=$_POST['w3review'];

                $msg="Never Give UP!!!!!";

                    // $s=json_encode($sub);

               // $subject=$_POST[$s]."\r\n".$_POST[$id];
               // $sub =$_POST['scholar1'];
                $subject= 'Subjectttt';
                $message = "Scholarship Name: ".$s."\r\n"."\r\n".$msg;
                $from = "sdmcetscholarship1@gmail.com";
                $headers = "From : $from"."\r\n"."CC : $too";
                // $flag=0;
                // if(mail($to, $subject, $message, $headers)){
                //     $flag=1;
                // }


    include('smtp/PHPMailerAutoload.php');
	$html='Msg';
	echo smtp_mailer($too,'subject',$html);
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
	}else{
		return 'Sent';
	}
}
            
        }
        // if($flag==1){
        //     echo "Mail Sent";
        // }
        // else{
        //     echo "Sorry, failed while sending mail!";
        // }
    }
    // else{
    //     echo "no data found";
    // }

