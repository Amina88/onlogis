<?php
if($_GET['type']=="cl"){
 require('modelstat.php');
 include("finalstatementclient.php");
 }elseif($_GET['type']=="fr"){
 require('modelstatFR.php');
 include("finalstatementFournisseur.php");
 
 }else{
 require('modelstatTOTAL.php');
 include("finalstatementTOTAL.php");
 
 }
$NomSoc=$_GET['cli'];

$req=mysql_query("select * from custemer where Nom_Soc='$NomSoc'");
$admin=mysql_fetch_array($req);
$c_nom=$admin[0];
$c_mail=$admin[5];
include("sendto.php");
$mail->addAddress("$c_mail", '');
$mail->Subject = 'STATEMENT OF YOUR ACCOUNT';
$mail->msgHTML("Hello $c_nom <br> please check the attached file  ");
$mail->AltBody = 'This is a plain-text message body';
 $ht=date("H-i-s");                      
 $t=date("Y-m-d"); 
 $suffixe= $t.'_'.$ht;
$file="soa".$NomSoc.".pdf";
$mail->addAttachment("bktrans_data/$file");
echo "$file";
$send=$mail->send();

$doc = new DOMDocument(); 
$file_Menu =$_SESSION['lang_Manu'];
 
$doc->load($file_Menu); 
$Menu = $doc->getElementsByTagName("MenuUtilisation"); 
foreach( $Menu as $Menu_util ) 
{ 
  $V14 = $Menu_util->getElementsByTagName("e14"); 
  $N14 = $V14->item(0)->nodeValue; 
  $V15 = $Menu_util->getElementsByTagName("e15"); 
  $N15 = $V15->item(0)->nodeValue; 
  $V17 = $Menu_util->getElementsByTagName( "e17" ); 
  $N17= $V17->item(0)->nodeValue;

  
$url= $N14.".".$N15.".".$N17; 
$titre=$N17;
$titremsg=$N15;

$pfx=$NomSoc;
$succes="error";
if($send){    
$succes=$titremsg.' : '.$N125.' '.$pfx; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Allclient.php&etat_up=$send&url=$url&titre=$titre&msg=$succes";
?>
 <script type="text/javascript"> 
 document.location.href="<?php echo $link; ?>";
  </script >
<?php 
 }
 
?>

