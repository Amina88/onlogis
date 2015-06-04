<?php 
include ("Connection.php");
	$id=$_GET['id'];
	$url=$_GET['url'];
   $titre=$_GET['titre'];	

		$Users=mysql_query("delete from notification  where id =$id");
		$link="MenuUtilisation.php?valeur=Notify.php&titre=$titre&url=$url&etat_up=$Users";
		
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>