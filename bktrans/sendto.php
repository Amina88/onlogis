<?php 
date_default_timezone_set('Etc/UTC');
require '../PHPMailer-master/PHPMailerAutoload.php';
$C=mysql_query("SELECT * FROM  `email_envoi` ");
$CP=mysql_fetch_array($C);
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = "$CP[0]";
$mail->Port = $CP[1];
$mail->SMTPSecure ="$CP[2]";
$mail->SMTPAuth = true;
$mail->Username = "$CP[3]";
$mail->Password = "$CP[4]";
$mail->setFrom("$CP[3]", '');
$mail->addReplyTo("$CP[3]", '');


?>