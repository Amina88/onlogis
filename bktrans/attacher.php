<?php 
include("Connection.php");

if(isset($_POST['opp'])){
if(isset($_FILES['test']))
{ 

$doc = new DOMDocument(); 
 
$doc->load($_SESSION['lang_out_Manu']); 
$Menu = $doc->getElementsByTagName("out_Menu"); 
				

foreach( $Menu as $Menu_util ) 
{ 
                                  $V8 = $Menu_util->getElementsByTagName("e8"); 
  $N8 = $V8->item(0)->nodeValue;
$tb=$_POST['tb'];
$id=$_POST['id'];
$prf=$_POST['index'];
     $dossier = 'bktrans_data/';
     $fichier = basename($_FILES['test']['name']);
	 $ext= $fichier;
	 $ex = explode('.',$ext);
$exe= $ex[1];

$nom=$prf.'_'.$id.'.'.$exe;
     if(move_uploaded_file($_FILES['test']['tmp_name'], $dossier .$nom )) 
     {
$typ=$_POST['type'];
if($_POST['index']=='Declaration_douane'){
$etat_up=mysql_query("UPDATE  `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'");
echo "UPDATE `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'";
header("Location:MenuUtilisation.php?valeur=detailleoperation.php&tb=$tb&id=$id&titre=$N8 $id &type=$typ&etat_up=$etat_up");


}elseif($_POST['index']=='facture_local'){
$etat_up=mysql_query("UPDATE  `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'");
echo "UPDATE `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'";
header("Location:MenuUtilisation.php?valeur=detailleoperation.php&tb=$tb&id=$id&titre=$N8 $id&&type=$typetat_up=$etat_up");


}elseif($_POST['index']=='appuerement'){
$etat_up=mysql_query("UPDATE  `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'");
echo "UPDATE `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'";
header("Location:MenuUtilisation.php?valeur=detailleoperation.php&tb=$tb&id=$id&titre=$N8 $id&type=$typ&etat_up=$etat_up");


}elseif($_POST['index']=='chambre_comercial'){
$etat_up=mysql_query("UPDATE  `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'");
echo "UPDATE `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'";
header("Location:MenuUtilisation.php?valeur=detailleoperation.php&tb=$tb&id=$id&titre=$N8 $id&type=$typ&etat_up=$etat_up");


}elseif($_POST['index']=='commune'){
$etat_up=mysql_query("UPDATE  `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'");
echo "UPDATE `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'";
header("Location:MenuUtilisation.php?valeur=detailleoperation.php&tb=$tb&id=$id&titre=$N8 $id&type=$typ&etat_up=$etat_up");


}elseif($_POST['index']=='facture_port'){
$etat_up=mysql_query("UPDATE  `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'");
echo "UPDATE `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'";
header("Location:MenuUtilisation.php?valeur=detailleoperation.php&tb=$tb&id=$id&titre=$N8 $id&type=$typ&etat_up=$etat_up");


}elseif($_POST['index']=='free_douane'){
$etat_up=mysql_query("UPDATE  `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'");
echo "UPDATE `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'";
header("Location:MenuUtilisation.php?valeur=detailleoperation.php&tb=$tb&id=$id&titre=$N8 $id&type=$typ&etat_up=$etat_up");


}elseif($_POST['index']=='delevry_note'){
$etat_up=mysql_query("UPDATE  `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'");
echo "UPDATE `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'";
header("Location:MenuUtilisation.php?valeur=detailleoperation.php&tb=$tb&id=$id&titre=$N8 $id&type=$typ&etat_up=$etat_up");


}else{
$etat_up=mysql_query("UPDATE  `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'");
echo "UPDATE `$tb` SET  `$prf` =  '$nom'  WHERE  `id` ='$id'";
header("Location:MenuUtilisation.php?valeur=detailleoperation.php&tb=$tb&id=$id&titre=$N8 $id&type=$typ&etat_up=$etat_up");


}
}
}
}
}else{
foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;
?>

<form method="POST" action="MenuUtilisation.php?valeur=attacher.php" enctype="multipart/form-data">
<font color="#0babf6" size="4" ><?php echo $N1; ?> :<?php echo $_GET['index'];?></font>
<br><br>
<table>
<td ><input type="file" name="test" required="required" ></td>
</tr>
</table>
<br>
<input  type="submit"  class="alt_btn" value="<?php echo $N2; ?> "<br><br>
<input type="hidden" name="tb" value="<?php echo $_GET['tb'];?>">
<input type="hidden" name="index" value="<?php echo $_GET['index'];?>">
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
<input type="hidden" name="opp" value="operation">
<input type="hidden" name="type" value="<?php echo $_GET['type'];?>">
</form>

<?php }} ?>