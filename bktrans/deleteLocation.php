<?php
include ("Connection.php");
$id=$_GET['NomMat'];
$etat_up=mysql_query("delete from location  where Reference='$id'");
$succes="";
if($etat_up){
$succes=$N79.' : '.$id.'  '.$N106;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
$doc = new DOMDocument(); 
		
$doc->load($_SESSION['lang_out_Manu']); 
$url=$_GET['url'];
$titre=$_GET['titre'];	
$employees = $doc->getElementsByTagName("out_Menu");
 foreach( $employees as $employee ) 
{   $V14 = $employee->getElementsByTagName( "e14" ); 
  $N13 = $V14->item(0)->nodeValue; 
  
$link="MenuUtilisation.php?valeur=AllLocation.php&etat_up=$etat_up&titre=$titre&url=$url&msg=$succes";

}

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>