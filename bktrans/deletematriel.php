<?php
include ("Connection.php");
$id=$_GET['NomMat'];
$url=$_GET['url'];
$titre=$_GET['titre'];
$etat=mysql_query("select *  from hardware  where id='$id'");
$Mat=mysql_fetch_array($etat);
$etat_up=mysql_query("delete from hardware  where id='$id'");

$doc = new DOMDocument(); 	
$doc->load($_SESSION['lang_out_Manu']); 
$employees = $doc->getElementsByTagName("out_Menu");
 foreach( $employees as $employee ) 
{   $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue; 
}
$succes="";
if($etat_up){
$succes=$N67.' : '.$Mat[1].'  '.$N106;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
$link="MenuUtilisation.php?valeur=AllMatriel.php&titre=$titre&url=$url&etat_up=$etat_up&msg=$succes";



?>

<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
 