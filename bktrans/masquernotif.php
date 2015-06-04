<?php 
include ("Connection.php");
	$id=$_GET['id'];

		$Users=mysql_query("Update notification set etat=1 where id =$id");
		Header("Location:MenuUtilisation.php?valeur=Notify.php&etat_up=$Users");
		
?>

