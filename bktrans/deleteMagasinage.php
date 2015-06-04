<?php
include ("Connection.php");
$id=$_GET['NomMat'];
$etat_up=mysql_query("delete from magasinage  where Reference='$id'");
$succes="error";
if($etat_up){
$succes=$N79.' : '.$id.'  '.$N106;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}

$doc = new DOMDocument(); 
$url=$_GET['url'];
$titre=$_GET['titre'];			
$doc->load($_SESSION['lang_out_Manu']); 
$employees = $doc->getElementsByTagName("out_Menu");
 foreach( $employees as $employee ) 
{   $V15 = $employee->getElementsByTagName( "e15" ); 
  $N15 = $V15->item(0)->nodeValue; 
$link="MenuUtilisation.php?valeur=AllMagasinage.php&etat_up=$etat_up&titre=$titre&url=$url&msg=$succes";

}

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>