<?php
session_start();
if(isset($_POST['envoi'])){
include ("Connection.php");
$track= $_POST['tracking'];
$user= $_SESSION['login'];
$dest = $_POST['destinataire'];
$to=explode(";",$_POST['destinataire']);
$url = $_POST['url_snd'];
$titre = $_POST['titre_snd'];
$msg = $_POST['msg'];
$cc = $_POST['cc'];
$ccg=explode(";",$cc);
$obj  = $_POST['objet'];
require 'sendto.php';

$day=date('Y-m-d H:i:s');
$mail->Subject    = "$obj";

$mail->AltBody    = "$track"; // optional, comment out and test

$mail->msgHTML($track);
if($to!=NULL){
foreach($to as $desinat){
$mail->AddAddress("$desinat", '');
}
}
if($ccg!=NULL){
foreach($ccg as $ccdes){
$mail->AddCC("$ccdes");
}
}

$emplc="../assets/global/plugins/jquery-file-upload/server/php/files";
if(isset($_POST['FIP'])){
$file=$_POST['FIP'];
foreach($file as $elm){
$mail->AddAttachment("$emplc/$elm");  

} 
}
if(isset($_POST['operation_file'])){
$op_file=$_POST['operation_file'];
$mail->AddAttachment("bktrans_data/$op_file");  
}

if(isset($_POST['attach_ent'])){
$op_file=$_POST['attach_ent'];
foreach($op_file as $key){

$mail->AddAttachment("bktrans_data/$key");
}  
}

if(!$mail->Send()) {
if(isset($_POST['FIP'])){
foreach($file as $elm){ 
unlink("$emplc/$elm");
} 
}
$link="MenuUtilisation.php?valeur=AllMAILEnvoiyer.php&titre=$titre&etat_up=0&url=$url";
} else {
if(isset($_POST['FIP'])){
foreach($file as $elm){ 
unlink("$emplc/$elm");
} }
$dest=str_replace("'", "''",$dest);
$cc=str_replace("'", "''",$cc);
$obj=str_replace("'", "''",$obj);
$track=str_replace("'", "''",$track);
$user=str_replace("'", "''",$user);
$etat_up=mysql_query("insert into Mai_envoyer values ('','$day','$dest','$cc','$obj','$track','$user')");
$link="MenuUtilisation.php?valeur=AllMAILEnvoiyer.php&titre=$titre&etat_up=$etat_up&url=$url&msg=$msg";
}


}

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>