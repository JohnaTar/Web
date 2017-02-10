<?php
include("connect.php");
include("email/PHPMailerAutoload.php");
       
        if (isset($_POST['email'])) {
            $sql="SELECT * From stwUser Where stwEmail ='".$_POST['email']."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            if (count($row)>=1) {
                $email=$_POST['email'];
                $firstname =$row['stwFirstname'];
                $encrypt=md5(55+10+$row['stwUser_id']);
                
                $body= 'Hi, <br/> <br/>Your Username  is '.$row['stwUsername'].' <br><br>Click here to reset your password http://172.20.96.200/reset.php?encrypt='.$encrypt.'&action=reset   <br/> <br/>--<br>Thank you<br>STWAFW team.';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->CharSet = 'UTF-8';
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "leavemetar@gmail.com";
$mail->Password = "021934432";
$mail->setFrom('leavemetar@gmail.com', 'Administrator@STWAFW');
$mail->addAddress($email,$firstname);
$mail->Subject = 'FORGET PASSWORD';
$mail->msgHTML($body);
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    
    echo "<script>alert('Message sent!')</script>";
     echo "<script>window.location='index'</script>";
            
}
                
            }else
            echo "<script>alert('ไม่พบอีเมลล์ในระบบ')</script>";
             echo "<script>window.location='index'</script>";
             
            
        }
 ?>
            
          