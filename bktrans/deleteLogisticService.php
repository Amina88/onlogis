<?php
include ("Connection.php");
$id=$_GET['NomMat'];
$etat_up=mysql_query("delete from  logistics_services  where Reference='$id'");
$doc = new DOMDocument(); 
$succes="error";
if($etat_up){
$succes=$N79.' : '.$id.'  '.$N106;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$url=$_GET['url'];
$titre=$_GET['titre'];			
$doc->load($_SESSION['lang_out_Manu']); 
$employees = $doc->getElementsByTagName("out_Menu");
 foreach( $employees as $employee ) 
{   $V16 = $employee->getElementsByTagName( "e16" ); 
  $N16 = $V16->item(0)->nodeValue; 
$link="MenuUtilisation.php?valeur=Service_logistique.php&etat_up=$etat_up&titre=$titre&url=$url&msg=$succes";
}

?>
<script type="text/javascript"> 
document.location.href="<?php  echo $link; ?>";
  </script >