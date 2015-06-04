<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/recAllFacture.php';
     if($etat){
?>

<?php

include ("Connection.php");
$s=mysql_query("select * from invoice    order by id_facture desc ");
$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_fetch_array($m);

require'views/viewAllFacture.php';
?>

<?php 
	$Ref1="";
	$date=date('Y-m-d');
	$datelanc=date('Y-m-d');
	$date_auj=explode('-',$date);
$prefx=mysql_query("select * from  prefix where element='Facture' ");
$pref=mysql_fetch_array($prefx);
$a=mysql_query("select  * from  invoice where id_facture like '$pref[0]%'  ORDER BY id_facture  DESC LIMIT 0 , 1");
$t=mysql_fetch_array($a);
$typ=explode("$pref[0]",$t[3]);
if(isset($typ[1])){
$Cod = sprintf("%04d",$typ[1]+1);
}else{
$Cod = sprintf("%04d",1);

}
$Ref="$pref[0]".$Cod;
	$periodfact=mysql_query("select * from invoice  WHERE  frequence!='0' AND  occurrence!='0' AND draft='1'  ");
	$PRD=mysql_query("select * from financial_period where etat=1 ");
$PR=mysql_fetch_array($PRD);
	while ($req1=mysql_fetch_array($periodfact)){
	$s=mysql_query("select * from invoice  WHERE id_regroup='$req1[23]' ORDER BY rang DESC LIMIT 0,1 ");
	$a=mysql_fetch_array($s);
	$element=mysql_query("select * from element_invoice where Reference='$req1[3]'");
	$req2="";
	$req="";
	$Test=0;
	
		$rag=$a[22]+1;
		$TEST_INSRT=mysql_query("select occurrence, rang  from invoice  WHERE id_regroup='$req1[23]' ORDER BY rang DESC LIMIT 0,1 ");
	$TI=mysql_fetch_array($TEST_INSRT);
	
		if($TI[0]>$TI[1]){
		$req="insert into invoice values('$a[0]','$a[1]','$a[2]','$Ref','$a[4]','$a[5]','$datelanc','$datelanc','0','$a[9]','$a[10]',0,'$a[12]','$a[13]','$a[14]',NULL,'$a[16]','$a[17]',0,'$a[19]','$a[20]','$a[21]','$rag','$a[23]','$PR[0]',0);";
$Ref1=$Ref1.$Ref.',';
		while($ELM=mysql_fetch_array($element)){
	$etat="insert into element_invoice values ('$ELM[0]','$ELM[0]','$ELM[2]','$ELM[3]','$ELM[4]','$ELM[5]','$ELM[6]','$Ref','$ELM[8]','$ELM[9]',0)";
	$req2=$req2.$etat.";";
	$Test=1;
	
	}
	
		}
	
	
	$typ=explode('/',$a[6]);
	if(!isset($typ[1])){
	$typ=explode('-',$a[6]);
	}
	$de_insrt=($a[20]*1)+$typ[2];
	
	$jour=$de_insrt%30;
	$jours=$de_insrt/30;
	$D=explode('.',$jours);
	$ANN=$D[0]+$typ[1];
	$Mois=$ANN%13;
	$AN=$ANN/13;
	$Anne=explode('.',$AN);
	$Mois_creet="";
	$jours_creet=$jour;
	if($Mois==0){
	$Mois_creet=1;
	}else{
	$Mois_creet=$Mois;
	}
	
	$anne_creet=$Anne[0]+$typ[0];
	if($date_auj[0]>$anne_creet ){
	$res=mysql_query($req);
	$res=mysql_query($req2);
	}elseif($date_auj[0]==$anne_creet ){
	if(sprintf("%01d",$date_auj[1])>$Mois_creet ){
	$res=mysql_query($req);
	$res=mysql_query($req2);
	}elseif(sprintf("%01d",$date_auj[1])==$Mois_creet ){
	if(sprintf("%01d",$date_auj[2])>=$jours_creet ){
	
	$res=mysql_query($req);
	$res=mysql_query($req2);

	if($Test==1){
	$titre=$_GET['titre'];
	$url=$_GET['url'];
	$succes="error";    
$succes=$N27.' : '.$Ref1; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");


	?>
	
<script type="text/javascript"> 
document.location.href="<?php echo "MenuUtilisation.php?valeur=AllFacture.php&titre=$titre&url=$url&etat_up=$res&msg=$succes"; ?>";
  </script>
  <?php
	}
	
	
	}
	}

}	}


}
	
	
else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>	