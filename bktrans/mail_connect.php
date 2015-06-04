<?php
session_start();
date_default_timezone_set('Etc/UTC');

require '../PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer();
include ("Connection.php");

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = $_POST['nom'];
$mail->Port = $_POST['Port'];
$mail->SMTPSecure =$_POST['t_acces'];
$mail->SMTPAuth = true;
$mail->Username = $_POST['emailadr'];
$mail->Password = $_POST['pwd'];
$yes= $_POST['succes'];
$no = $_POST['echec'];
$url = $_POST['urlC'];
$titre = $_POST['ttC'];

if($mail->smtpConnect()){
$H  = $_POST['nom'];
$P  = $_POST['Port'];
$Ac =$_POST['t_acces'];
$EM = $_POST['emailadr'];
$PD = $_POST['pwd'];
    $mail->smtpClose();
	$C=mysql_query("SELECT * FROM  `email_envoi`  ");
$CP=mysql_fetch_array($C);
if($CP!=NULL){
$C=mysql_query("update  email_envoi set host='$H',port='$P',mtd_sec='$Ac',user='$EM',password='$PD'");
}else{
$C=mysql_query("insert into email_envoi values ('$H','$P','$Ac','$EM','$PD')");
}
$link="MenuUtilisation.php?valeur=Configuration_Profil.php&titre=$titre&url=$url&etat_up=$C&msg=$yes&smtp_envoi=true";
}
else{
$link="MenuUtilisation.php?valeur=Configuration_Profil.php&titre=$titre&url=$url&etat_up=0&msg=$no&smtp_envoi=true";
}
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>