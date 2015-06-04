<?php
include ("Connection.php");
$id=$_GET['NomMat'];
$url=$_GET['url'];
$etat_up=mysql_query("delete from equipment  where Num='$id'");
if($etat_up){
$succes=$N86.' : '.$id.'  '.$N106;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
$doc = new DOMDocument(); 
			
$doc->load($_SESSION['lang_out_Manu']); 
$employees = $doc->getElementsByTagName("out_Menu");
 foreach( $employees as $employee ) 
{   $V13 = $employee->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue; 
$link="MenuUtilisation.php?valeur=AllEquipment.php&etat_up=$etat_up&titre=$N13&url=$url&msg=$succes";

}

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>