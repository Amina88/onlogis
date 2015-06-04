<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
?>

<?php
if("$permission[1]"=="Administrateur" || "$permission[8]"=='8') {
$url=$N20.".".$N22;
$titre=$N22;
$url2=$N20.".";
$urlcli=$N14.'.'.$N15.'.';
$tt_snd=$N111;
foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;  $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V13 = $employee->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue;$V14 = $employee->getElementsByTagName( "e14" ); 
  $N14 = $V14->item(0)->nodeValue;$V15 = $employee->getElementsByTagName( "e15" ); 
  $N15 = $V15->item(0)->nodeValue;$V16 = $employee->getElementsByTagName( "e16" ); 
  $N16 = $V16->item(0)->nodeValue;$V17 = $employee->getElementsByTagName( "e17" ); 
  $N17 = $V17->item(0)->nodeValue;$V18 = $employee->getElementsByTagName( "e18" ); 
  $N18 = $V18->item(0)->nodeValue;$V19 = $employee->getElementsByTagName( "e19" ); 
  $N19 = $V19->item(0)->nodeValue;$V20 = $employee->getElementsByTagName( "e20" ); 
  $N20 = $V20->item(0)->nodeValue;
  $V21 = $employee->getElementsByTagName( "e21" ); 
  $N21 = $V21->item(0)->nodeValue;
  $V22 = $employee->getElementsByTagName( "e22" ); 
  $N22 = $V22->item(0)->nodeValue;$V23 = $employee->getElementsByTagName( "e23" ); 
  $N23 = $V23->item(0)->nodeValue;$V24 = $employee->getElementsByTagName( "e24" ); 
  $N24 = $V24->item(0)->nodeValue;$V25 = $employee->getElementsByTagName( "e25" ); 
  $N25 = $V25->item(0)->nodeValue;$V26 = $employee->getElementsByTagName( "e26" ); 
  $N26 = $V26->item(0)->nodeValue;$V27 = $employee->getElementsByTagName( "e27" ); 
  $N27 = $V27->item(0)->nodeValue;
  $V28 = $employee->getElementsByTagName( "e28" ); 
  $N28 = $V28->item(0)->nodeValue;
  $V29 = $employee->getElementsByTagName( "e29" ); 
  $N29 = $V29->item(0)->nodeValue;
  $V30 = $employee->getElementsByTagName( "e30" ); 
  $N30 = $V30->item(0)->nodeValue;
  $V31 = $employee->getElementsByTagName( "e31" ); 
  $N31 = $V31->item(0)->nodeValue;
  ?>

<?php

include ("Connection.php");

?>

<?php 
$id_op=$_GET['id'];
$s=mysql_query("select * from invoice  where Ref_operration='$id_op'");

$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_fetch_array($m);
?>
<div class="portlet box blue-hoki">

						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i><?php  echo strtoupper($_GET['titre']);  ?>
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body" >
		<table class="table table-striped table-bordered table-hover" id="sample_1" >
		<thead>
				<tr> 
    				<th><font size="1"><?php echo $N4; ?></th> 
    				<th><font size="1"><?php echo $N5; ?></th> 
					<th><font size="1"><?php echo $N6; ?></th> 
    				<th><font size="1"><?php echo $N9; ?></th>
    				<th><font size="1"><?php echo $N8; ?></th>
					<th><font size="1"><?php echo $N7; ?></th>
    				<th><font size="1"><?php echo $N10; ?></th>
    				<th><font size="1"><?php echo $N31; ?></th> 
				</tr> 
			</thead> 
			<tbody> 

			<?php


			$date=date("Y-m-d");
			 $Auj = explode('-',$date);
			while($admin=mysql_fetch_array($s)){
			$cl=substr ($admin[5], 0,6 );
			 $DateF = explode('/',$admin[7]);
			 if(!isset($DateF[1])){
			 $DateF = explode('-',$admin[7]);
			 
			 }
			 $val_echue=0;
			if($Auj[0]==$DateF[0]){
			if($Auj[1]==$DateF[1]){
			if($Auj[2]==$DateF[2]){
			$val_echue=0;
			}elseif($Auj[2]<$DateF[2]){$val_echue=0;}else{$val_echue=$Auj[2]-$DateF[2];}
		
			}
			elseif($Auj[1]<$DateF[1]){$val_echue=0;}else{
			$J=$Auj[2]-$DateF[2];$M=($Auj[1]-$DateF[1])*30;$val_echue=$J+$M;}
			}elseif($Auj[0]<$DateF[0]){
			
			$val_echue=0;}else{
			$J=$Auj[2]-$DateF[2];
			$M=($Auj[1]-$DateF[1])*30;
			$ANN=($Auj[0]-$DateF[0])*12*30;$val_echue=$J+$M+$ANN;}
			
			$factur=mysql_query("select * from invoice where id_facture='$admin[3]'");
			$facture=mysql_fetch_array($factur);
$el=mysql_query("select * from element_invoice where Reference='$facture[3]'");
 $tot=0.00;
  $client = str_replace('&','%26',$admin[5]);
  $client = str_replace(' ','%20',$client);
while($element=mysql_fetch_array($el)){
$prix=$element[2]*$element[3];
$devis=$prix*$element[6];
$TVA=$devis*($element[4]*0.01);
$t=$devis+$TVA;
$tot=$tot+$t;
}
$tot=$tot;

         ?>
			 
				<tr> 
   					<td><font size="1"><a href="MenuUtilisation.php?valeur=dettails.php&Ref=<?php echo $admin[3];?>&titre=<?php echo $N12; ?> <?php echo $admin[3];?>&url=<?php echo $url2.$N30;?>"><?php echo $admin[3];?></a></font></td> 
    				<td><font size="1"><a  title="<?php echo $admin[5]; ?>" href="MenuUtilisation.php?valeur=ModifierClient.php&NomSOC=<?php echo $client;?>&mdc=1 &titre=<?php echo $N29." ".$admin[2]; ?>&url=<?php echo$urlcli.$N16?>"><?php echo $cl;?></a></font></td> 
					<td><font size="1"><?php echo $admin[10];?></font></td>				
					<td><font size="1"><?php echo $admin[7];?></font></td>
				<td>
				
				<?php 
				if($admin[25]==1){
				if($admin[11]==1){?>
				<span class="label label-sm label-success"><?php echo $N14; ?></span>
				<?php }elseif($admin[11]==-1){ ?>
				<span class="label label-sm label-warning"><?php echo $N22; ?></span> 
				<?php }elseif($admin[11]==-2){ ?>
				<span class="label label-sm label-danger"><?php echo $N23; ?></span> 
				<?php }else{
				?>
				<span class="label label-sm label-info"><?php echo $N11; ?></span> 
				<?php } }else{ 
				?>
				<span class="label label-sm label-warning"><?php echo $N26; ?></span> 
				
				<?php  
				}
				?>
				</td> 	
				<td><font size="1"><?php echo number_format($tot,2,',','.')."&nbsp;".$admin[9];?></font></td> 
				<td><font size="1"><?php if($admin[11]!=1){ echo $val_echue; mysql_query("update invoice set Jours_echue='$val_echue' where id_facture='$admin[3]'");}else{ echo $admin[15]; }?></font></td> 
    				
					<td>
					
					<a href="MenuUtilisation.php?valeur=ModifierFacture.php&id_Facture=<?php echo $admin[3];?>&titre=<?php echo $N28.$admin[3];?>&url=<?php echo $url2.$N16;?>" title="<?php echo $N16; ?>"><i class="fa fa-pencil-square-o"></i></a>
					<?php if($admin[18]!=0){
					?>
					
					<a href=""   title="<?php echo $N17; ?>">
					<i class="fa fa-trash-o"></i></a>
				<?php
					}else{
					?>
					<a href="MenuUtilisation.php?valeur=Delete_Facture.php&id_facture=<?php echo $admin[3];?> &url=<?php echo $url;?>&titre=<?php echo $titre;?>" onclick="return confirmLink(this) ;"  title="<?php echo $N17; ?>">
					<i class="fa fa-trash-o"></i></a>
					<?php } ?>
				 <a href="finalfac.php?Ref=<?php echo $admin[3];?>&client=<?php echo $client;?>" target="_blank" title="<?php echo $N20; ?> <?php echo $admin[3];?>" ><i class="fa fa-file-pdf-o"></i></a>
				 <a href="finalfac.php?Ref=<?php echo $admin[3];?>&client=<?php echo $client;?>&titre=<?php echo $tt_snd ?>&url=<?php echo $_GET['url'].'.'.$tt_snd ?>&charger=send" target="_blank" title="<?php echo $tt_snd ?>"  ><i class="icon-envelope-open"></i></a>
				<a href="MenuUtilisation.php?valeur=duppliquer_operation.php&fctcopie=true&id=<?php echo $admin[3];?>&titre=<?php echo $N28;?>&url=<?php echo $url2.$N16;?>"><i class="fa fa-copy" onclick="return confirm('') ;"></i></a>
					</td> 			</tr> 
				
			
<?php }
?>
			 <tbody></table>
	 </div>
 </div>
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
		$req="insert into invoice values('$a[0]','$a[1]','$a[2]','$Ref','$a[4]','$a[5]','$datelanc','$datelanc','0','$a[9]','$a[10]',0,'$a[12]','$a[13]','$a[14]',NULL,'$a[16]','$a[17]',0,'$a[19]','$a[20]','$a[21]','$rag','$a[23]','$PR[0]',1);";
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
	
	
 }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>	