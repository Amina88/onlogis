<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
 if("$permission[3]"=="3" || "$permission[1]"=="Administrateur"){ 
	
	 $url=$N4.".".$N8.".".$N79.".".$N82;
  $titre=$N90;
  include ("Connection.php");
  		
		foreach( $employees as $employee ) 
{ 
         $V1 = $employee->getElementsByTagName("e1"); 

  $N1 = $V1->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;$V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  
  $N1 = $V1->item(0)->nodeValue;     $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;   $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V14 = $employee->getElementsByTagName( "e14" ); 
  $N14 = $V14->item(0)->nodeValue;$V15 = $employee->getElementsByTagName( "e15" ); 
  $N15 = $V15->item(0)->nodeValue;$V16 = $employee->getElementsByTagName( "e16" ); 
  $N16 = $V16->item(0)->nodeValue;
if(isset($_POST['sauvgarder'])){
$Code = sprintf("%06d",1);
$a=mysql_query("select * from magasinage ORDER BY Reference DESC LIMIT 0 , 1");
$t=mysql_fetch_array($a);
$nembre=explode('MG',$t[0]);
if(isset($nembre[1])){
$Code = sprintf("%06d",$nembre[1]+1);
}
$Ref="MG".$Code;
$CL=$_POST['CL'];
$DS=$_POST['DS'];
$ETAT=$_POST['ETAT'];
$Desc=$_POST['description'];
$Desc= str_replace("'", "''",$Desc);
$D=$_POST['DD'];
$DP=$_POST['DF'];
$dtd=explode('/',$D);
$dtf=explode('/',$DP);
If(!isset($dtd[1])  ){
$dtd=explode('-',$D);

}
If(!isset($dtf[1])  ){
$dtf=explode('-',$DP);

}$tst=1;
if($dtd[0]>$dtf[0]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAuMagasin.php&titre=$N1&etat_up=0&msg=$N14";
}elseif($dtd[0]==$dtf[0]){
if($dtd[1]>$dtf[1]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAuMagasin.php&titre=$N1&etat_up=0&msg=$N14";

}elseif($dtd[1]==$dtf[1]){
if($dtd[2]>$dtf[2]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAuMagasin.php&titre=$N1&etat_up=0&msg=$N14";
}
}}
$succes="error";
if($tst==1){
$etat_up=mysql_query("insert into magasinage values('$Ref','$CL','$DS','$D','$DP','$ETAT','$Desc','non')");
if($etat_up){
$id_offre=$_POST['id_offre'];
$date=date("Y-m-d");
$etat_up=mysql_query("update offre set validation='1' ,Date_validation='$date',OPERATION='$Ref' where id_offre='$id_offre'");

}
if($etat_up){
$succes=$N79.' : '.$Ref.'  '.$N107;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}

$link="MenuUtilisation.php?valeur=AllMagasinage.php&titre=$titre&url=$url&etat_up=$etat_up&msg=$succes";
	}
	
	?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>
  <?php
	}else{
	$EQ=mysql_query("select * from  equipment where Etat=1 ");	
	$CLIENT=mysql_query("select * from  custemer ");	
	$files=mysql_query("select * from  categorie where appliquer_sur in( '010','011','001')");	
	

?>

<?php 
require'views/viewMagasin.php';
}} }else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>