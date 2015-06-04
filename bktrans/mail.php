
<?php
include("Connection.php");
$msg =$_POST['Tracking_neuv'];
$a=0;
$id=$_POST['id'];
$histo =$_POST['Tracking'];
$add=$histo."\n".$msg;
if($_POST['typeop']=="Ocean"){
if(isset($_POST['SE'])){
$a=mysql_query("select client from import  where type_operation='ocean' And id=$id");
$cl=mysql_fetch_array($a);
$a=mysql_query("select AdressMail  from custemer import  where Nom_Soc='$cl[0]'");
$client=mysql_fetch_array($a);

$destinataire="$client[0]";
$sujet ="les information d'opération";
$expediteur = "bktrans@bktrans-sa.com"; $reponse = $expediteur; 
mail($destinataire,$sujet,$msg,"Reply-to: $reponse\r\nFrom: $reponse\r\n"); 
$a=mysql_query("update import set Tracking='$add' where  id='$id'");

}else{
$a=mysql_query("update import set Tracking='$add' where  id='$id'");

}
$link="MenuUtilisation.php?valeur=updateoperationimport.php&titre=($id,&id=$id&type=OceanImport&etat_up=$a";
}elseif($_POST['typeop']=="Air"){
if(isset($_POST['SE'])){
$a=mysql_query("select client from import  where id='$id'");
$cl=mysql_fetch_array($a);
$a=mysql_query("select AdressMail  from custemer import  where Nom_Soc='$cl[0]'");
$client=mysql_fetch_array($a);

$destinataire="$client[0]";
$sujet ="les information d'opération";
$expediteur = "bktrans@bktrans-sa.com"; $reponse = $expediteur; 
mail($destinataire,$sujet,$msg,"Reply-to: $reponse\r\nFrom: $reponse\r\n"); 
$a=mysql_query("update import set Tracking='$add' where  id='$id'");
}else{
$a=mysql_query("update import set Tracking='$add' whereid='$id'");
}
$link="MenuUtilisation.php?valeur=updateoperationimport.php&titre=le Mis ajour d'opération&id=$id&type=AirImportt&etat_up=$a";
}else{
if(isset($_POST['SE'])){
$a=mysql_query("select client from import  where id='$id'");
$cl=mysql_fetch_array($a);
$a=mysql_query("select AdressMail  from custemer import  where Nom_Soc='$cl[0]'");
$client=mysql_fetch_array($a);

$destinataire="$client[0]";
$sujet ="les information d'opération";
$expediteur = "bktrans@bktrans-sa.com"; $reponse = $expediteur; 
mail($destinataire,$sujet,$msg,"Reply-to: $reponse\r\nFrom: $reponse\r\n"); 
$a=mysql_query("update import set Tracking='$add' where id=$id");

}else{
$a=mysql_query("update import set Tracking='$add' where  id='$id'") or die(mysql_error());
}
$link="MenuUtilisation.php?valeur=updateoperationimport.php&titre=le Mis ajour d'opération&id=$id&type=RoadImport&etat_up=$a";
}
?>

<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>