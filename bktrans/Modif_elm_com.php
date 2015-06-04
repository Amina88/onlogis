<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>

<?php 

  
include ("Connection.php");
if(isset($_GET['sauvegarder'])){
$id          = $_GET['id'];
$reference   = $_GET['reference'];
$designation = $_GET['desc'];
$qte         = $_GET['qte'];
$money       = $_GET['monnaie'];
$pu          = $_GET['punit'];
$devise      = $_GET['devise'];
$tva         = $_GET['tva'];
$compte      = $_GET['compte'];

$req = mysql_query("select quantite,prix_unitaire,monnaie, devise , tva from element_purchase where reference = '$reference' AND id='$id' ");
$req2=mysql_fetch_array($req);

if(($req2[0]!= "$qte") || ($req2[1] != "$pu") || ($req2[2] != "$money") ||( $req2[3] != "$devise") || ($req2[4] != "$tva") ){
$req = mysql_query("update purchase set confirmation=0 where  reference = '$reference'")or die(mysql_error());

}
$req = mysql_query("update element_purchase set designation ='$designation', quantite ='$qte', prix_unitaire = '$pu', monnaie = '$money', devise = '$devise', tva = '$tva', code_comptable = '$compte' where id = '$id' and reference = '$reference';");
$link="MenuUtilisation.php?valeur=AllCommande.php&etat_up=$req";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>
  <?php

}
else if($_GET['action']=="supprimer"){

$reference   = $_GET['reference'];
$id   = $_GET['id'];
$req = mysql_query("delete from element_purchase where id='$id' and reference='$reference';");
$link="MenuUtilisation.php?valeur=ModifCommande.php&reference=$reference&action=modifier&etat_up=$req";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>
  <?php
}
else{

foreach( $employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V4 = $employee->getElementsByTagName( "e4" ); $N4 = $V4->item(0)->nodeValue; 
  $V5 = $employee->getElementsByTagName( "e5" ); $N5 = $V5->item(0)->nodeValue;
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V9 = $employee->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;
  $V10 = $employee->getElementsByTagName( "e10" ); $N10 = $V10->item(0)->nodeValue; 
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
 
  
	$id =$_GET['id'];
	$ref=$_GET['reference'];
	$fiche=mysql_query("select * from element_purchase where id='$id' and reference='$ref';");
	$res=mysql_fetch_array($fiche);
	?>
<form  method="GET" action="">
<h4><?php echo $N1; ?></h4>
<table>
<tr>
<td ><?php echo $N2; ?>:<font color="red">*</font><input type="text" name="id" value="<?php echo $res[0];?>" required="required" readonly></td>
<td ><?php echo $N3; ?>:<font color="red">*</font><input type="text" name="reference" value="<?php echo $res[1];?>" required="required" readonly></td>
<td ><?php echo $N4; ?>:<input type="text" name="qte" value="<?php echo $res[3];?>"></td>
<td ><?php echo $N5; ?>:<input type="text" name="punit" value="<?php echo $res[4];?>" ></td>
</tr><tr>
<td ><?php echo $N6; ?>:<input type="text" name="monnaie" value="<?php echo $res[5];?>" ></td>
<td ><?php echo $N7; ?>:<input type="text" name="devise" value="<?php echo $res[6];?>"></td>
<td ><?php echo $N8; ?>:<input type="text" name="tva" value="<?php echo $res[7];?>" ></td>
<td ><?php echo $N9; ?>:<input type="text" name="compte" value="<?php echo $res[8];?>" ></td>
</tr>
<tr>
<td ><?php echo $N10; ?>:</td>
<td colspan="3"><textarea name="desc" style="width:639px; height:97px"><?php echo $res[2];?></textarea></td>
</tr>
</table>
<input type="submit" name="sauvegarder" id="sauvegarder" value="<?php echo $N11; ?>" class="alt_btn" onclick="this.form.submit()">			
<input type="hidden" name="valeur" value="Modif_elm_com.php" >			

</form>
<?php 
}
}
?>