<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } 
  if("$permission[10]"=="10" || "$permission[1]"=="Administrateur"){ 
  $url=$N19.".".$N72.".".$N72;
  $titre=$N72;
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
  $V12 = $employee->getElementsByTagName( "e12" ); $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" ); $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" ); $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" ); $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" ); $N16 = $V16->item(0)->nodeValue;
  $V17 = $employee->getElementsByTagName( "e17" ); $N17 = $V17->item(0)->nodeValue;
  $V18 = $employee->getElementsByTagName( "e18" ); $N18 = $V18->item(0)->nodeValue;
  $V19 = $employee->getElementsByTagName( "e19" ); $N19 = $V19->item(0)->nodeValue;
  $V20 = $employee->getElementsByTagName( "e20" ); $N20 = $V20->item(0)->nodeValue;
  
  $Mn=mysql_query("select * from currency where Monnaie_utliser=1 ");
$Curr=mysql_fetch_array($Mn);
$D=date("Y-m-d");
$login=$_SESSION['login'];
 $max=$_POST['max_CP'];
 $test_e=1;
 $pay=array();
 $CB=array();



for($j=1;$j<=$max;$j++){

if(isset($_POST['selct'.$j])){
$COM=$_POST["id$j"];
$devise=$_POST["devis$j"];
$VP=$_POST["V$j"];
$pr=$_POST["pr$j"];
$MN=$_POST["Mn$j"];
$pr=explode("/",$pr);
$ann=$pr[1];
$ms=$pr[0];
$CptB=$_POST["cmpt$j"];
$CptB=explode("//Sep",$CptB);
$CptB=$CptB[0];

$tbAchat[]=$VP*$devise;
$tbAchat[]=$COM;
$tbAchat[]=$ms;
$tbAchat[]=$ann;
$tbAchat[]=$MN;
$tbAchat[]=$devise;

$pay[$CptB][$j]=$tbAchat;

		if(!in_array("$CptB",$CB)){
			   $CB[]=$CptB;
			   }
$tbAchat="";
}
 


}

//var_dump($pay);
//var_dump($CB);

foreach($CB as $CptB){
$prf=mysql_query("SELECT * FROM  `prefix` where element='paiment_salaire'");
$pfx=mysql_fetch_array($prf);
$a=mysql_query("select  id from  paiment_salaire  ORDER BY id  DESC LIMIT 0 , 1");
$t=mysql_fetch_array($a);
$tb=explode("$pfx[0]",$t[0]);
if(isset($tb[1])){
$Cod = sprintf("%07d",$tb[1]+1);
}else{
$Cod = sprintf("%07d",1);

}

$Id_Tax="$pfx[0]".$Cod;
//echo "insert into paiment_salaire values('$Id_Tax','0','$D','')";
//echo "insert into paiment_salaire values('$Id_Tax','0','$D','','$CptB')";
$etat_up=mysql_query("insert into paiment_salaire values('$Id_Tax','0','$D','','$CptB')")or die(mysql_error());
foreach($pay[$CptB] as $banq  => $val ){
$SLR=$val[0];
$CIN=$val[1];
$Mois=$val[2];
$anne=$val[3];
$MN=$val[4];
$devise=$val[5];
$bs=mysql_query("select sold ,decouvert from bank_account  where Numero_Compte='$CptB'");
$vbs=mysql_fetch_array($bs);
$SLD=($vbs[0]+$vbs[1])-$SLR;
if($SLD>=0){
$etat_up=mysql_query("insert into salaire_payer values('$CIN','$Id_Tax','$SLR','$Mois/$anne','$MN','$devise')")or die(mysql_error());
//echo "insert into salaire_payer values('$CIN','$Id_Tax','$SLR','$Mois/$anne')";
$date=date('Y-m-d');
 $ident_journal= mysql_query("select id from journal order by id desc limit 0,1  ");
 $idj=mysql_fetch_array($ident_journal);
$id_journal=$idj[0]+1;
$etat_up = mysql_query("insert into journal values($id_journal,'Paiment Salaire','$date','$Id_Tax','$CIN')") or die(mysql_error());

$BQ= mysql_query("select Nom_Banque,Monnaie ,code_comptable from bank_account where  `Numero_Compte`='$CptB' ")or die(mysql_error());
   $Compt=mysql_fetch_array($BQ);
   $Curr= mysql_query("select Valeur_Devise from currency where  `Abreviation_Monnai`='$Compt[1]' ")or die(mysql_error());
   $Currency=mysql_fetch_array($Curr);
   $Montant=($SLR*$Currency[0]);
    $code= mysql_query("select Code from codes where  `Nom_Code`='$Compt[2]' ")or die(mysql_error());
   $CComp=mysql_fetch_array($code);
   
 $etat_up = mysql_query("insert into detaile_journal values ('','$CComp[0]','$Compt[2]','$Compt[1]','0','$Montant',$id_journal,'1')") or die(mysql_error());
 $Fr= mysql_query("select code_comptable from personel where  `CIN`='$CIN' ")or die(mysql_error());
   $Compte=mysql_fetch_array($Fr);
    $code= mysql_query("select Code from codes where  `Nom_Code`='$Compte[0]' ")or die(mysql_error());
   $CComp=mysql_fetch_array($code);
   
 $etat_up = mysql_query("insert into detaile_journal values ('','$CComp[0]','$Compte[0]','$CIN','$Montant','0',$id_journal,'0')") or die(mysql_error());



if($etat_up){
$etat_up=mysql_query("update  salaried set pay='1' where Mois='$Mois' and $anne='$anne' and CIN='$CIN'")or die(mysql_error());
// echo "update  salaried set pay='1' where Mois='$Mois' and $anne='$anne' and CIN='$CIN'";
$bs=mysql_query("select sold from bank_account  where Numero_Compte='$CptB'");
$vbs=mysql_fetch_array($bs);
$sold=$vbs[0]-$SLR;
$etat_up=mysql_query("update  bank_account set sold=$sold where Numero_Compte='$CptB'")or die(mysql_error());
//echo "update  bank_acount set sold=$sold where Numero_Compte='$CptB'";

$a=mysql_query("select  Montant_peyye from  paiment_salaire  where id='$Id_Tax'");
$t=mysql_fetch_array($a);
$mpy=$t[0]+$SLR;
$etat_up=mysql_query("update  paiment_salaire set Montant_peyye=$mpy where id='$Id_Tax'")or die(mysql_error());
//echo "update  paiment_salaire set Montant_peyye=$mpy where id='$Id_Tax'";

}else{
$etat_up=mysql_query("delete from salaire_payer where CIN='$CIN' and id_payment='$Id_Tax' and periode_pay='$Mois/$anne'")or die(mysql_error());
//echo "insert into salaire_payer values('$CIN','$Id_Tax','$SLR','$Mois/$anne')";

}
}

}
$a=mysql_query("select  Montant_peyye from  paiment_salaire  where id='$Id_Tax'")or die(mysql_error());
$t=mysql_fetch_array($a);
if($t[0]==0){
mysql_query("delete  from  paiment_salaire  where id='$Id_Tax'");
}
}



?>
<div class="tools noimprime" align="right">
							
<a onclick="print();" title="print">	<i class="fa fa-print"></i></a>
<a href="javascript:history.go(-1)">
<i class="fa fa-reply"></i></a>
								
								
								
							</div>
							<table class="table table-striped table-bordered table-hover" >
		
	<?php
foreach($CB as $CptB){

?>						

		
			<?php 
			$c=0;
	foreach($pay[$CptB] as $banq  => $val ){
$SLR=$val[0];
$CIN=$val[1];
$Mois=$val[2];
$anne=$val[3];
$MN=$val[4];
$devise=$val[5];
			$c++;
			 
			$P=mysql_query("select * from personel where CIN='$CIN'");
	$pr=mysql_fetch_array($P);
	$BC=mysql_query("select * from bank_account where Numero_Compte='$CptB'");
	$BQ=mysql_fetch_array($BC);
	
$reslt=mysql_query("select *  from salaire_payer where CIN='$CIN'  and periode_pay='$Mois/$anne'");
if(mysql_fetch_array($reslt)){
	$etat='<span class="label label-sm label-success">'.$N7.'</span>';
	
	if($etat_up){
$succes=$N116.' :'.$N144.' '.$CIN;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
	}else{
	$etat='<span class="label label-sm label-danger">'.$N8.'</span>';
	
	}

		?>
			<tr> 
   					
   					<td><font size="1"><?php echo $pr[1].' ( '.$pr[0].' ) ';?></a></font></td> 
    				<td><font size="1"><?php echo "$Mois/$anne"; ?></font></td>
    				<td><font size="1"><?php echo $pr[7]; ?></font></td>
    				<td><font size="1"><?php echo number_format($SLR,2,',','.')."&nbsp;".$BQ['Monnaie']; ?></font></td>
    				<td><font size="1"><?php echo "1&nbsp;$MN =$devise&nbsp;$BQ[Monnaie]"; ?></font></td>
    				<td><font size="1"><?php echo $etat ?></font></td>
    						</tr> 
		<?php
		
}

			
 
?>
			
		
<?php
}
echo "</table>";
}
} else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>