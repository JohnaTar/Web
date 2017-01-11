<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="mydb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
date_default_timezone_set('Asia/Bangkok');

$sql ="SELECT * FROM stwUser";
$res =mysqli_query($conn,$sql);
$row =mysqli_fetch_array($res,MYSQLI_ASSOC);
$data= $row['stwUsername'];

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
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
$mail->Password = "0944174005";
$mail->setFrom('leavemetar@gmail.com', 'First Last');
$mail->addAddress('kootardodo@hotmail.com', 'John Doe');
$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->msgHTML($data);
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>