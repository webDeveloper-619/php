<?php 
require_once 'PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.livenascaronline.com';
$mail->Port = 465;
$mail->SMTPSecure = "ssl";
$mail->SMTPAuth = true;

$sql = "SELECT * FROM `smtp` WHERE email='$emails'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);

    $mail->Username = $row['email'];
    $mail->Password = $row['password'];

$mail->setFrom($row['email'], $row['subject']);

$mail->addAddress($_POST['email'], $_POST['name']);

if ($mail->addReplyTo($row['email'])) {
    $mail->Subject = $_POST['subject'];
    //$mail->WordWrap = 50000;               // set word wrap
    $mail->Priority = 1; 
    $mail->IsHTML(true); 
    $mail->Body = file_get_contents("gretings.php");
        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
    ///////////////////////////////////////////////////////////////////////////
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.livenascaronline.com';
$mail->Port = 465;
$mail->SMTPSecure = "ssl";
$mail->SMTPAuth = true;
    
    $mail->addAddress($row['email'], $_POST['subject']);
    
    if ($mail->addReplyTo($row['email'], $_POST['subject'])) {
    $mail->Subject = $_POST['subject'];
    //$mail->WordWrap = 50000;               // set word wrap
    $mail->Priority = 1; 
    $mail->IsHTML(true); 
    $mail->Body = $_POST['msg'];
        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
?>