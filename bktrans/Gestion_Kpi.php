<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script >

  <?php
}
require'includes/recGestionKpi.php';
     if($etat){

include("Connection.php");
$periode=mysql_query("select * from financial_period where etat=1");
$p=mysql_fetch_array($periode);
 
if($p!=null){
$kpi=mysql_query("select * from kpi where  app=1 and idperiod=$p[0]");
$a=mysql_fetch_array($kpi);
$prec=mysql_query("select * from financial_period where 
date_debut<'$p[2]' order by date_debut  asc limit 0 , 2");
$tebp1=null;
$tebp2=null;
$i=0;
while($preced=mysql_fetch_array($prec)){
$tebp1[$i]=$preced[0];
$i++;
}

if(!isset($tebp1[0])){
$tebp1[0]="NULL";
}
if(!isset($tebp1[1])){
$tebp1[1]="NULL";
}
$kpi1=mysql_query("select * from kpi where idperiod=$tebp1[0]");;
$kpi2=mysql_query("select * from kpi where idperiod=$tebp1[1]");
$i=1;
$j=1;
$ra1=null;
$ra2=null;
$rv1=null;
$rv2=null;




 while($a1=mysql_fetch_array($kpi1)){
if($a1['app']==1){
$ra1=$a1;
}else{
$rv1=$a1;
}
 }
 while($a2=mysql_fetch_array($kpi2)){
if($a2['app']==1){
$ra2=$a2;
}else{
$rv2=$a2;
}
 }

 
$per1=$ra1['idperiod'];
$per2=$ra2['idperiod'];

$periode1=mysql_query("select * from financial_period where id=$tebp1[0]");
$p1=mysql_fetch_array($periode1);
$periode2=mysql_query("select * from financial_period where id=$tebp1[1]");
$p2=mysql_fetch_array($periode2);
 

$v=$a['validation'];


 if(!isset($_POST['sauvgarder'])){
 require'views/viewGestionKpi.php';
?>

	<?php
		}else{
$nbroffre=$_POST['nbroffre'];
if(isset($_POST['chxnbroffre'])){
$chxnbroffre=$_POST['chxnbroffre'];
}else{
$chxnbroffre=0;
}
$nbroffreacc=$_POST['nbroffreacc'];
if(isset($_POST['chxnbroffreacc'])){
$chxnbroffreacc=$_POST['chxnbroffreacc'];
}else{
$chxnbroffreacc=0;
}
$nbrclients=$_POST['nbrclients'];
if(isset($_POST['chxnbrclients'])){
$chxnbrclients=$_POST['chxnbrclients'];
}else{
$chxnbrclients=0;
}

$nbrnouveauxclient=$_POST['nbrnouveauxclient'];
if(isset($_POST['chxnbrnouveauxclient'])){
$chxnbrnouveauxclient=$_POST['chxnbrnouveauxclient'];
}else{
$chxnbrnouveauxclient=0;
}

$nbropps=$_POST['nbropps'];
if(isset($_POST['chxnbropps'])){
$chxnbropps=$_POST['chxnbropps'];
}else{
$chxnbropps=0;
}

$nbroppfact=$_POST['nbroppfact'];
if(isset($_POST['chxnbroppfact'])){
$chxnbroppfact=$_POST['chxnbroppfact'];
}else{
$chxnbroppfact=0;
}
$nbrdossier=$_POST['nbrdossier'];
if(isset($_POST['chxnbrdossier'])){
$chxnbrdossier=$_POST['chxnbrdossier'];
}else{
$chxnbrdossier=0;
}

$nbrdossierovrt=$_POST['nbrdossierovrt'];
if(isset($_POST['chxnbrdossierovrt'])){
$chxnbrdossierovrt=$_POST['chxnbrdossierovrt'];
}else{
$chxnbrdossierovrt=0;
}
$nbrva=$_POST['nbrva'];
if(isset($_POST['chxnbrva'])){
$chxnbrva=$_POST['chxnbrva'];
}else{
$chxnbrva=0;
}

$nbrvaimp=$_POST['nbrvaimp'];
if(isset($_POST['chxnbrvaimp'])){
$chxnbrvaimp=$_POST['chxnbrvaimp'];
}else{
$chxnbrvaimp=0;
}
$nbrre=$_POST['nbrre'];
if(isset($_POST['chxnbrre'])){
$chxnbrre=$_POST['chxnbrre'];
}else{
$chxnbrre=0;
}
$profit=$_POST['profit'];
if(isset($_POST['chxprofit'])){
$chxprofit=$_POST['chxprofit'];
}else{
$chxprofit=0;
}
$validation=$chxnbroffre.$chxnbroffreacc.$chxnbrclients.$chxnbrnouveauxclient.$chxnbropps.$chxnbroppfact.$chxnbrdossier.$chxnbrdossierovrt.$chxnbrva.$chxnbrvaimp.$chxnbrre.$chxprofit;
if($a!=null){
$etat_up=mysql_query("update  kpi  SET nbroffre='$nbroffre',nbroffreacc='$nbroffreacc',nbrdossier='$nbrdossier',nbrdossierovrt='$nbrdossierovrt',nbrclients='$nbrclients',nbrnouveauxclient='$nbrnouveauxclient',nbropps='$nbropps',nbroppfact='$nbroppfact',nbrva='$nbrva',nbrvaimp='$nbrvaimp',nbrre='$nbrre',profit='$profit',validation='$validation' where app=1 and idperiod=$p[0] ");

}else{
$etat_up=mysql_query("insert into kpi values('','$nbroffre','$nbroffreacc','$nbrclients','$nbrnouveauxclient','$nbropps','$nbroppfact','$nbrdossier','$nbrdossierovrt','$nbrva','$nbrvaimp','$nbrre','$profit','$validation',$p[0],1)");
$etat_up1=mysql_query("insert into kpi values('','$nbroffre','$nbroffreacc','$nbrclients','$nbrnouveauxclient','$nbropps','$nbroppfact','$nbrdossier','$nbrdossierovrt','$nbrva','$nbrvaimp','$nbrre','$profit','$validation',$p[0],0)");
}


$pfx='KPI';
$succes="error";
$titremsg=$N117;
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N108; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
$link="MenuUtilisation.php?valeur=Gestion_Kpi.php&titre=$titre&url=$url&msg=$succes&etat_up=$etat_up";

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>

	<?php 
	}
	
	 }else{?>
<div class="alert alert-danger display-show">
<button class="close" data-close="alert"></button>
<a href="MenuUtilisation.php?valeur=Financ_periode.php&titre=<?php echo $N78; ?>&url=<?php echo $N35.".".$N36.".".$N77; ?>"><?php echo $N123; ?></a>
</div>


<?php }	}  else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>