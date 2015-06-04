<?php
require('modelstat.php');
date_default_timezone_set('Etc/UTC');
require '../PHPMailer-master/PHPMailerAutoload.php';
function sendmail($NomSoc){
include("finalstatementclient.php");
$req=mysql_query("select * from custemer where Nom_Soc='$NomSoc'");
$admin=mysql_fetch_array($req);
$c_nom=$admin[0];
$c_mail=$admin[5];
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
$mail->addAddress("$c_mail", '');
$mail->Subject = 'STATEMENT OF YOUR ACCOUNT';
$mail->msgHTML("Hello $c_nom <br> please check the attached file  ");
$mail->AltBody = 'This is a plain-text message body';
$ht=date("H-i-s");                      
$t=date("Y-m-d"); 
$suffixe= $t.'_'.$ht;
$file="soa".$NomSoc."_".$suffixe.".pdf";
$mail->addAttachment("bktrans_data/$file");

$send=$mail->send();
return $send;
}
?>
