<html>
<head>

<style type="text/css" media="print"> 
#noimprime{ 
display:none; 
}
<?php
echo $_GET['typ'];
?>
</style>
</head>
<body>
<br><br>
<h4><center>N° DOSSIER &nbsp;:&nbsp;<?php echo $_GET['ref'] ;?></center><br></h4>
<table   border="1" CELLSPACING=0 cellpadding=0  width="700"><tr><td align="center"><br>&nbsp;<?php echo $_GET['cat']; ?><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr></table>
  <table   border="1" CELLSPACING=0 cellpadding=0  width="700"><tr>
<td align="left"><br>&nbsp;&nbsp;N° du <?php echo $_GET['typ']; ?>:&nbsp;<br><br>&nbsp;CLIENT&nbsp;:&nbsp;<?php echo $_GET['client'];?> <br><br>&nbsp;ETA&nbsp;:&nbsp; <br><br>&nbsp;ETD&nbsp;:&nbsp; </br><br>&nbsp;NOMBRE DE COLIS&nbsp;:&nbsp;<br><br>&nbsp;POIDS&nbsp;:&nbsp;&nbsp;<br><br>&nbsp;STATUS&nbsp;:&nbsp;<br><br>&nbsp;INVOICE&nbsp;:&nbsp;<br>&nbsp;</td>
</tr></table>
<div id="noimprime"> 
<table><tr><td>

<?php 
$titre=explode('.',$_GET['url']);

?>
<button onclick="window.print();"><img src="images/imprimante18x18.png"  alt="" title="Imprimer cette page"> </button></td>
<td><a href="MenuUtilisation.php?valeur=AllDossier.php&titre=<?php echo $titre[2]; ?>&url=<?php echo $_GET['url']; ?>"><button>Terminer</button></a></td></tr></table>
</div> 




</body>