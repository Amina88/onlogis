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
	 
	 $titreforw=$N9;
	 $urlforw=$N4.".".$N8.".".$N9;
	 $urlcom=$N4.".".$N11.".";
	 $url=$N14.'.'.$N15.'.';
	 $url2=$N19.".".$N32.".".$N34;
	 $urlkpi=$N35.".".$N36.".".$N117;
	 $titrekpi=$N117;
	foreach( $employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); 
  $N1 = $V1->item(0)->nodeValue; 
  
   $V2 = $employee->getElementsByTagName( "e2" ); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;  $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;  $V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;  $V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue; $V13 = $employee->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue; $V14 = $employee->getElementsByTagName( "e14" ); 
  $N14 = $V14->item(0)->nodeValue; $V15 = $employee->getElementsByTagName( "e15" ); 
  $N15 = $V15->item(0)->nodeValue; $V16 = $employee->getElementsByTagName( "e16" ); 
  $N16 = $V16->item(0)->nodeValue; $V17 = $employee->getElementsByTagName( "e17" ); 
  $N17 = $V17->item(0)->nodeValue; $V18 = $employee->getElementsByTagName( "e18" ); 
  $N18 = $V18->item(0)->nodeValue; $V19 = $employee->getElementsByTagName( "e19" ); 
  $N19 = $V19->item(0)->nodeValue; $V20 = $employee->getElementsByTagName( "e20" ); 
  $N20 = $V20->item(0)->nodeValue; $V21 = $employee->getElementsByTagName( "e21" ); 
  $N21 = $V21->item(0)->nodeValue; $V22 = $employee->getElementsByTagName( "e22" ); 
  $N22 = $V22->item(0)->nodeValue; $V23 = $employee->getElementsByTagName( "e23" ); 
  $N23 = $V23->item(0)->nodeValue; $V24 = $employee->getElementsByTagName( "e24" ); 
  $N24 = $V24->item(0)->nodeValue; $V25 = $employee->getElementsByTagName( "e25" ); 
  $N25 = $V25->item(0)->nodeValue; $V26 = $employee->getElementsByTagName( "e26" ); 
  $N26 = $V26->item(0)->nodeValue; 
  $V27=  $employee->getElementsByTagName( "e27" ); $N27 = $V27->item(0)->nodeValue; 
  $V28 = $employee->getElementsByTagName( "e28" ); $N28 = $V28->item(0)->nodeValue; 
  $V29 = $employee->getElementsByTagName( "e29" ); $N29 = $V29->item(0)->nodeValue; 
  $V30 = $employee->getElementsByTagName( "e30" ); $N30 = $V30->item(0)->nodeValue; 
  $V31 = $employee->getElementsByTagName( "e31" ); $N31 = $V31->item(0)->nodeValue; 
  $V32 = $employee->getElementsByTagName( "e32" ); $N32 = $V32->item(0)->nodeValue; 
  $V33 = $employee->getElementsByTagName( "e33" ); $N33 = $V33->item(0)->nodeValue; 
  $V34 = $employee->getElementsByTagName( "e34" ); $N34 = $V34->item(0)->nodeValue; 
  $V35 = $employee->getElementsByTagName( "e35" ); $N35 = $V35->item(0)->nodeValue; 
  $V36 = $employee->getElementsByTagName( "e36" ); $N36 = $V36->item(0)->nodeValue; 
  $V37 = $employee->getElementsByTagName( "e37" ); $N37 = $V37->item(0)->nodeValue; 
  $V38 = $employee->getElementsByTagName( "e38" ); $N38 = $V38->item(0)->nodeValue; 
  $V39 = $employee->getElementsByTagName( "e39" ); $N39 = $V39->item(0)->nodeValue; 
  $V40 = $employee->getElementsByTagName( "e40" ); $N40 = $V40->item(0)->nodeValue; 
  $V41 = $employee->getElementsByTagName( "e41" ); $N41 = $V41->item(0)->nodeValue; 
  $V42 = $employee->getElementsByTagName( "e42" ); $N42 = $V42->item(0)->nodeValue; 
  $V43 = $employee->getElementsByTagName( "e43" ); $N43 = $V43->item(0)->nodeValue; 
  $V44 = $employee->getElementsByTagName( "e44" ); $N44 = $V44->item(0)->nodeValue; 
  $V45 = $employee->getElementsByTagName( "e45" ); $N45 = $V45->item(0)->nodeValue; 
  $V46 = $employee->getElementsByTagName( "e46" ); $N46 = $V46->item(0)->nodeValue; 
  $V47 = $employee->getElementsByTagName( "e47" ); $N47 = $V47->item(0)->nodeValue; 
  $V48 = $employee->getElementsByTagName( "e48" ); $N48 = $V48->item(0)->nodeValue; 
  $V49 = $employee->getElementsByTagName( "e49" ); $N49 = $V49->item(0)->nodeValue; 
  $V50 = $employee->getElementsByTagName( "e50" ); $N50 = $V50->item(0)->nodeValue; 
  $V51 = $employee->getElementsByTagName( "e51" ); $N51 = $V51->item(0)->nodeValue; 
  $V52 = $employee->getElementsByTagName( "e52" ); $N52 = $V52->item(0)->nodeValue; 
  $V53 = $employee->getElementsByTagName( "e53" ); $N53 = $V53->item(0)->nodeValue; 
  $V54 = $employee->getElementsByTagName( "e54" ); $N54 = $V54->item(0)->nodeValue; 
  $V55 = $employee->getElementsByTagName( "e55" ); $N55 = $V55->item(0)->nodeValue; 
  $V56 = $employee->getElementsByTagName( "e56" ); $N56 = $V56->item(0)->nodeValue; 
  $V57 = $employee->getElementsByTagName( "e57" ); $N57 = $V57->item(0)->nodeValue; 
  $V58 = $employee->getElementsByTagName( "e58" ); $N58 = $V58->item(0)->nodeValue; 
  $V59 = $employee->getElementsByTagName( "e59" ); $N59 = $V59->item(0)->nodeValue; 
  $V60 = $employee->getElementsByTagName( "e60" ); $N60 = $V60->item(0)->nodeValue; 
  $V61 = $employee->getElementsByTagName( "e61" ); $N61 = $V61->item(0)->nodeValue; 
  $V62 = $employee->getElementsByTagName( "e62" ); $N62 = $V62->item(0)->nodeValue; 
  $V63 = $employee->getElementsByTagName( "e63" ); $N63 = $V63->item(0)->nodeValue; 
  $V64 = $employee->getElementsByTagName( "e64" ); $N64 = $V64->item(0)->nodeValue; 
  $V65 = $employee->getElementsByTagName( "e65" ); $N65 = $V65->item(0)->nodeValue; 
  $V66 = $employee->getElementsByTagName( "e66" ); $N66 = $V66->item(0)->nodeValue; 
  $V67 = $employee->getElementsByTagName( "e67" ); $N67 = $V67->item(0)->nodeValue; 
     
	include ("Connection.php");
	//date_lancement
//	date_commande
	$Ann=date('Y');
	$Mois=date('m');
	$jour=date('d');
	$Cod = sprintf("%02d",$Mois);
	if($Mois==1){
$Annp=$Ann-1;
$MP=12;
	}else{
	$Annp=$Ann;
$MP=$Mois-1;
$MP=sprintf("%02d",$MP);

	}
		
		$forwardto=0;
	
	$INPCM=mysql_query("select * from  money   where type='in' and Date>='$Ann-$Mois-01' AND Date<'$Ann-$Mois-31' ");
	$INPMP=mysql_query("select * from  money   where type='in' and Date='$Annp-$MP-01' AND Date<'$Annp-$MP-31'  ");
	$INPAU=mysql_query("select * from  money   where type='in' and  Date=CURDATE( )");
	$INPSM=mysql_query("SELECT * FROM money    where type='in' and Date>= CURDATE( ) -7");

	
	$PRCM=mysql_query("select * from  money  where  type='out' and Date>='$Ann-$Mois-01' AND Date<'$Ann-$Mois-31' ");
	$PRMP=mysql_query("select * from  money  where type='out' and Date>='$Annp-$MP-01' AND Date<'$Annp-$MP-31'  ");
	$PRAU=mysql_query("select * from  money  where  type='out' and Date='$Annp-$Mois-$jour'");
	$PRSM=mysql_query("select * from  money  WHERE  type='out' and Date >= CURDATE( ) -7");
	
	$PRCM1=mysql_query("select * from  paiment_salaire  where  Date_paiment>='$Ann-$Mois-01' AND Date_paiment<'$Ann-$Mois-31' ");
	$PRMP1=mysql_query("select * from  paiment_salaire  where  Date_paiment>='$Annp-$MP-01' AND Date_paiment<'$Annp-$MP-31'  ");
	$PRAU1=mysql_query("select * from  paiment_salaire  where  Date_paiment='$Annp-$Mois-$jour'");
	$PRSM1=mysql_query("select * from  paiment_salaire  where  Date_paiment >= CURDATE( ) -7");
	
	
	$IP=mysql_query("select * from invoice where  date_lancement>='$Ann-$Mois-01' AND date_lancement<'$Ann-$Mois-31'  and Draft=1   ");
	$IPMP=mysql_query("select * from invoice where  date_lancement>='$Annp-$MP-01' AND date_lancement<'$Annp-$MP-31' and Draft=1  ");
	$IPAU=mysql_query("select * from invoice where  date_lancement='$Annp-$Mois-$jour' and Draft=1");
	$IPSM=mysql_query("select * from invoice WHERE  `date_lancement` >= CURDATE( ) -7 and Draft=1");
	
	
	$PP=mysql_query("select * from purchase where  date_commande>='$Ann-$Mois-01' AND date_commande<'$Ann-$Mois-31' AND confirmation='1'  ");
	$PPMP=mysql_query("select * from purchase where  date_commande>='$Annp-$MP-01' AND date_commande<'$Annp-$MP-31' AND confirmation='1'  ");
	$PPAU=mysql_query("select * from purchase where  date_commande='$Annp-$Mois-$jour' AND confirmation='1'");
	$PPSM=mysql_query("select * from purchase where `date_commande` >= CURDATE( ) -7 AND confirmation='1'");
	
	$factur=mysql_query("select * from invoice where etat_payement=0 and Draft=1  ");
	$fact=mysql_query("select * from invoice where etat_payement=0 and Draft=1  ");
	$comm=mysql_query("select * from purchase where etat_paiement='0' AND confirmation='1' ");
	$com=mysql_query("select * from purchase where etat_paiement='0' AND confirmation='1' ");
	$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
    $MN1=mysql_fetch_array($MN);
 ?>

			<div class="page-head">
			
				<div class="page-title">
					<h1><?php echo $N54 ;?> <small><?php echo $N55 ;?>&nbsp; & &nbsp;<?php echo $N56 ;?> </small></h1>
				</div>
			
			</div>
						<?php
				
				$tot=0;
$totC=0;
$Tot=0;

while($facture=mysql_fetch_array($factur)){
$el=mysql_query("select * from vueinvoicetotale where facture='$facture[3]'");
$element=mysql_fetch_array($el);
$TF=$element[3]*$facture[17];
$Tot=$Tot+$TF;
}
				
    $TTCim=0;
while($command=mysql_fetch_array($comm)){
$el=mysql_query("select * from vuepurchasetotale where BonCommande='$command[0]'");

$element=mysql_fetch_array($el);
$TTCNP=$element[3]*$command[9];
$TTCim=$TTCim+$TTCNP;
}
?>

<?php
if("$permission[1]"=="Administrateur" || "$permission[21]"=='21'){ 
$forwardto=1;?>
			<?php 
		    $periode=mysql_query("select * from financial_period where etat=1");
			$p=mysql_fetch_array($periode);
			$a=null;
			if($p!=null){
			$kpi=mysql_query("select * from kpi where  app=1 and idperiod=$p[0]");
           $a=mysql_fetch_array($kpi);
		   }
		   if($a!=null){
		   $v=$a['validation'];
		 
		   
		  ?>
		  <?php
		  		$inprofit=mysql_query("select * from invoice where  date_lancement>='$p[2]' AND date_lancement<'$p[3]'  and Draft=1   ");
				$pprofit=mysql_query("select * from purchase where  date_commande>='$p[2]' AND date_commande<'$p[3]' and confirmation=1  ");
				$ttinprofit=0;
					while($facture=mysql_fetch_array($inprofit)){
$el=mysql_query("select * from vueinvoicetotale where facture='$facture[3]'");

$element=mysql_fetch_array($el);
$TF=$element[3]*$facture[17];

$ttinprofit=$ttinprofit+$TF;
}
				
				$ttpprofit=0;
		while($command=mysql_fetch_array($pprofit)){
$el=mysql_query("select * from vuepurchasetotale where BonCommande='$command[0]'");

$element=mysql_fetch_array($el);
$TTCNP=$element[3]*$command[9];
$ttpprofit=$ttpprofit+$TTCNP;
}
				
				$PSprofit=mysql_query("select * from  paiment_salaire  where  Date_paiment>='$p[2]' AND Date_paiment<'$p[3]'  ");

				$ttpsprofit=0;
				while($py=mysql_fetch_array($PSprofit)){
     $cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[4]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);

		$el=mysql_query("select Montant_peyye from paiment_salaire where id='$py[0]'");
		$tt=mysql_fetch_array($el);
$ttpsprofit=$ttpsprofit+($tt[0]*$vcrf[0]);

}
$profit=($ttinprofit-($ttpprofit+$ttpsprofit));
		  
		  ?>
		  
		  <div class="row margin-top-10">
		  <?php if($v[11]!=0){?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
						
						<?php if($profit >=$a[12]){ ?>
							<div class="number">
								<h4 class="font-green-sharp"><?php  echo number_format($profit,2,',','.'); ?>
								<small class="font-green-sharp font-xs"><?php echo $MN1[0]; ?></small></h4>
								<small><?php echo $N51 ;?></small>
							</div>
							<?php }else{?>
							<div class="number">
							<h4 class="font-green-sharp"><b><?php  echo number_format($profit,2,',','.'); ?></b>
							<small class="font-green-sharp font-xs"><?php echo $MN1[0]; ?></small></h4>
							<small class="uppercase font-hg font-red-flamingo" ><?php echo $N51 ;?></small>
							</div>
							<?php }?>
						
						</div>
					</div>
				</div>
			 <?php }?>
			
		
			<?php
			
			$TTCMPaa=0;
			$INPCMaa=mysql_query("select * from  money   where type='in' and Date>='$p[2]' AND Date<'$p[3]' ");
	$PRCMaa=mysql_query("select * from  money  where  type='out' and Date>='$p[2]' AND Date<'$p[3]' ");
	$PRCM1aa=mysql_query("select * from  paiment_salaire  where  Date_paiment>='$p[2]' AND Date_paiment<'$p[3]' ");
	while($py=mysql_fetch_array($INPCMaa)){
$cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[6]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);

		$el=mysql_query("select valeur from money where id='$py[0]'");
		$tt=mysql_fetch_array($el);
$TTCMPaa=$TTCMPaa+($tt[0]*$vcrf[0]);

}
$TTC1aa=0;
while($py=mysql_fetch_array($PRCMaa)){
        $cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[6]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);

		$el=mysql_query("select valeur from money where id='$py[0]'");
		$tt=mysql_fetch_array($el);
$TTC1aa=$TTC1aa+($tt[0]*$vcrf[0]);

}
$TTC11aa=0;

		while($py=mysql_fetch_array($PRCM1aa)){
        $cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[4]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);

		$el=mysql_query("select Montant_peyye from paiment_salaire where id='$py[0]'");
		$tt=mysql_fetch_array($el);
$TTC11aa=$TTC11aa+($tt[0]*$vcrf[0]);

}
$TTC1tt=$TTC1aa+$TTC11aa;


			?>	
			 <?php if($v[10]!=0){?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
						
						<?php if($TTCMPaa-$TTC1tt >=$a[11]){ ?>
							<div class="number">
								<h4 class="font-green-sharp"><?php  echo number_format($TTCMPaa-$TTC1tt,2,',','.'); ?>
								<small class="font-green-sharp font-xs"><?php echo $MN1[0]; ?></small></h4>
								<small><?php echo $N50 ;?></small>
							</div>
							<?php }else{?>
							<div class="number">
							<h4 class="font-green-sharp"><b><?php  echo number_format($TTCMPaa-$TTC1tt,2,',','.'); ?></b>
							<small class="font-green-sharp font-xs"><?php echo $MN1[0]; ?></small></h4>
							<small class="uppercase font-hg font-red-flamingo" ><?php echo $N50 ;?></small>
							</div>
							<?php }?>
						
						</div>
					</div>
				</div>
				<?php }?>
				
				<?php 
				$IPtt=mysql_query("select * from invoice where  date_lancement>='$p[2]' AND date_lancement<'$p[3]'  and Draft=1   ");
				$PPtt=mysql_query("select * from purchase where  date_commande>='$p[2]' AND date_commande<'$p[3]' and confirmation=1 ");
				$TTCAU1aa=0;
					while($facture=mysql_fetch_array($IPtt)){
$el=mysql_query("select * from vueinvoicetotale where facture='$facture[3]'");

$element=mysql_fetch_array($el);
$TF=$element[3]*$facture[17];

$TTCAU1aa=$TTCAU1aa+$TF;
}
				
				$TTCAUaa=0;
		while($command=mysql_fetch_array($PPtt)){
$el=mysql_query("select * from vuepurchasetotale where BonCommande='$command[0]'");

$element=mysql_fetch_array($el);
$TTCNP=$element[3]*$command[9];
$TTCAUaa=$TTCAUaa+$TTCNP;
}
				?>
				 <?php if($v[8]!=0){?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
						
						<?php if($TTCAU1aa-$TTCAUaa >=$a[9]){ ?>
							<div class="number">
								<h4 class="font-green-sharp"><?php  echo number_format($TTCAU1aa-$TTCAUaa ,2,',','.'); ?>
								<small class="font-green-sharp font-xs"><?php echo $MN1[0]; ?></small></h4>
								<small><?php echo $N48 ;?></small>
							</div>
							<?php }else{?>
							<div class="number">
							<h4 class="font-green-sharp"><b><?php  echo number_format($TTCAU1aa-$TTCAUaa ,2,',','.'); ?></b>
							<small class="font-green-sharp font-xs"><?php echo $MN1[0]; ?></small></h4>
							<small class="uppercase font-hg font-red-flamingo" ><?php echo $N48 ;?></small>
							</div>
							<?php }?>
						
						</div>
					</div>
				</div>
			   <?php }?>
				
	      <?php if($v[9]!=0){?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
						
						<?php if($Tot-$TTCim >=$a[10]){ ?>
							<div class="number">
								<h4 class="font-green-sharp"><?php  echo number_format($Tot-$TTCim,2,',','.'); ?>
								<small class="font-green-sharp font-xs"><?php echo $MN1[0]; ?></small></h4>
								<small><?php echo $N49 ;?></small>
							</div>
							<?php }else{?>
							<div class="number">
							<h4 class="font-green-sharp"><b><?php  echo number_format($Tot-$TTCim,2,',','.'); ?></b>
							<small class="font-green-sharp font-xs"><?php echo $MN1[0]; ?></small></h4>
							<small class="uppercase font-hg font-red-flamingo" ><?php echo $N49 ;?></small>
							</div>
							<?php }?>
						
						</div>
					</div>
				</div>
			<?php }?>
				
			</div>
			<?php 
		   $nbclient=mysql_query("SELECT COUNT( * )  FROM  `custemer`");
           $nbcli=mysql_fetch_array($nbclient);
           $nbnewclient=mysql_query("SELECT COUNT( * )  FROM  `custemer` where  date_ajout >='$p[2]' and date_ajout <='$p[3]' ");
		   $nbnewcli=mysql_fetch_array($nbnewclient); 
            ?>
			
			<div class="row margin-top-10">
			 <?php if(($v[2]!=0)||($v[3]!=0 )){?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
					<?php if($v[2]!=0){?>
						<div class="display">
						<?php if($nbcli[0]>=$a[3]){ ?>
							<div class="number">
					 
					 <h3 class="font-green-sharp"><?php echo $nbcli[0] ;?></h3>
								<small><?php echo $N52 ;?></small>
							</div>
							<?php }else{?>
							<div class="number">
								<h3 class="font-green-sharp" ><?php echo $nbcli[0] ;?></h3>
								<small class="uppercase font-hg font-red-flamingo" ><?php echo $N52 ;?></small>
							</div>
							<?php }?>
							
						</div>
						<?php }?>
							<?php if($v[3]!=0){?>
						<div class="progress-info">
					        <div class="status">
							<?php if($nbnewcli[0]>=$a[4]){ ?>
							    <div class="status-title font-green-sharp ">
								<?php echo $nbnewcli[0].' ';?>
							    <?php echo $N53 ;?>
								</div>
							
								<?php }else{?>
							    <div class="status-title  font-xs font-red-flamingo">
								<?php echo $nbnewcli[0].' ';?>
								<?php echo $N53 ;?>
							    </div>
							<?php }?>
						        </div>
						</div>
						<?php }?>
					</div>
				</div>
			<?php }?>
				<?php
$nboperationnon=mysql_query("select count(*) from  operation   where  invoicing!='oui' and Date>='$p[2]' AND Date<='$p[3]'");
$nbnon=mysql_fetch_array($nboperationnon);
$nboperationoui=mysql_query("select count(*) from  operation   where  invoicing='oui' and Date>='$p[2]' AND Date<='$p[3]'");
$nboui=mysql_fetch_array($nboperationoui);

$nblctnon=mysql_query("select count(*) from  location   where  facturation!='oui' and Date_debut>='$p[2]' AND Date_debut<='$p[3]'");
$nbnon1=mysql_fetch_array($nblctnon);
$nblctoui=mysql_query("select count(*) from  location   where  facturation='oui' and Date_debut>='$p[2]' AND Date_debut<='$p[3]'");
$nboui1=mysql_fetch_array($nblctoui);

$nbmgznnon=mysql_query("select count(*) from  magasinage   where  facturation!='oui' and Date_debut>='$p[2]' AND Date_debut<='$p[3]'");
$nbnon2=mysql_fetch_array($nbmgznnon);
$nbmgznoui=mysql_query("select count(*) from  magasinage   where  facturation='oui' and Date_debut>='$p[2]' AND Date_debut<='$p[3]'");
$nboui2=mysql_fetch_array($nbmgznoui);

$nblgsnon=mysql_query("select count(*) from  logistics_services   where  facturation!='oui' and Date>='$p[2]' AND Date<='$p[3]'");
$nbnon3=mysql_fetch_array($nblgsnon);
$nblgsoui=mysql_query("select count(*) from  logistics_services   where  facturation='oui' and Date>='$p[2]' AND Date<='$p[3]'");
$nboui3=mysql_fetch_array($nblgsoui);
$soui=$nboui[0]+$nboui1[0]+$nboui2[0]+$nboui3[0];
$snon=$nbnon[0]+$nbnon1[0]+$nbnon2[0]+$nbnon3[0];
$totaleop=$soui+$snon;
$prcoui=0;
$prcnon=0;
if($totaleop!=0){
$prcoui=$soui*100/($totaleop);
$prcnon=$snon*100/($totaleop);
}
?>            <?php if(($v[4]!=0)||($v[5]!=0 )){?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
					<?php if($v[4]!=0){?>
						<div class="display">
							<div class="number">
								<h3 class="font-green-sharp"><?php if($prcnon!=0){ echo "$snon/$totaleop";
								}else{
								echo "$soui/$totaleop";
								}?></h3>
								<?php if($totaleop>=$a[5]){ ?>
								<small><?php echo $N39 ;?></small>
								<?php } else{?>
								<small class="uppercase font-xs font-red-flamingo"><?php echo $N39 ;?></small>
								<?php }?>
							</div>
						</div>
						<?php } ?>
						<?php if($v[5]!=0){?>
						<?php if($prcnon!=0){ ?>
						
						<div class="progress-info">
							<div class="progress">
							 <?php  if($prcnon>=100-$a[6]){?>
                               <span style="width: <?php echo number_format($prcnon) ;?>%;" class="progress-bar progress-bar-success red-haze">
								</span>
								<?php } else {?>
								 <span style="width: <?php echo number_format($prcnon) ;?>%;" class="progress-bar progress-bar-success green-sharp">
								</span>
								<?php }?>
							</div>
							<div class="status">
								<div class="status-title">
									 <?php echo $N40 ;?>
								</div>
								<div class="status-number">
									 <?php echo number_format($prcnon,2,',','.') ;?>%
								</div>
							</div>
						</div>
						<?php }else{ ?>
						<div class="progress-info">
							<div class="progress">
							
                               <span style="width: <?php echo number_format($prcoui) ;?>%;" class="progress-bar progress-bar-success green-sharp">
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 <?php echo $N41 ;?>
								</div>
								<div class="status-number">
									 <?php echo number_format($prcoui,2,',','.') ;?>%
								</div>
							</div>
						</div>
						<?php } }?>
					</div>
				</div>
				<?php } ?>
				
								<?php
$nbdossierouvert=mysql_query("select count(*) from  files   where  etat_dossier='ouvert'  and date_lancement>='$p[2]' AND date_lancement<='$p[3]'");
$nbouvert=mysql_fetch_array($nbdossierouvert);
$nbdossier=mysql_query("select count(*) from  files where date_lancement>='$p[2]' AND date_lancement<='$p[3]' ");
$totaldossier=mysql_fetch_array($nbdossier);


$totalefermer=$totaldossier[0]-$nbouvert[0];
$prcouvert=0;
$prcfermer=0;
if($totaldossier[0]!=0){
$prcouvert=$nbouvert[0]*100/($totaldossier[0]);
$prcfermer=$totalefermer*100/($totaldossier[0]);
}
?>
				<?php if(($v[6]!=0)||($v[7]!=0 )){?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
					<?php if($v[6]!=0){?>
						<div class="display">
							<div class="number">
								<h3 class="font-blue-sharp"><?php if($prcouvert!=0){ echo "$nbouvert[0]/$totaldossier[0]" ;}else{
								 echo "$totalefermer/$totaldossier[0]";
								}?></h3>
								<?php if($totaldossier[0]>=$a[7]){ ?>
								<small> <?php echo $N42 ;?></small>
								<?php }else{?>
								<small class="uppercase font-xs font-red-flamingo"><?php echo $N42 ;?></small>
								<?php }?>
								
							</div>
							
						</div>
						<?php }?>
						<?php if($v[7]!=0){?>
						<div class="progress-info">
						<?php if($prcouvert!=0){ ?>
						
						<div class="progress-info">
							<div class="progress">
							 <?php if($prcouvert>$a[8]){?>
                               <span style="width: <?php echo number_format($prcouvert) ;?>%;" class="progress-bar progress-bar-success red-haze">
								</span>
								<?php }else{?>
								 <span style="width: <?php echo number_format($prcouvert) ;?>%;" class="progress-bar progress-bar-success green-sharp">
								</span>
								<?php } ?>
							</div>
							<div class="status">
								<div class="status-title">
									 <?php echo $N44;?>
								</div>
								<div class="status-number">
									 <?php echo number_format($prcouvert,2,',','.') ;?>%
								</div>
							</div>
						</div>
						<?php }else{ ?>
						<div class="progress-info">
							<div class="progress">
							
                               <span style="width: <?php echo number_format($prcfermer) ;?>%;" class="progress-bar progress-bar-success green-sharp">
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 <?php echo $N43 ;?>
								</div>
								<div class="status-number">
									 <?php echo number_format($prcfermer,2,',','.') ;?>%
								</div>
							</div>
						</div>
						<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>
				<?php }?>
				<?php
$nboffreacc=mysql_query("select count(*) from  offre   where validation='1' and date_lancement>='$p[2]' AND date_lancement<='$p[3]'");
$nbacc=mysql_fetch_array($nboffreacc);
$nboffre=mysql_query("select count(*) from  offre where date_lancement>='$p[2]' AND date_lancement<='$p[3]' ");
$totaloffre=mysql_fetch_array($nboffre);


$totaledec=$totaloffre[0]-$nbacc[0];
$prcacc=0;
$prcdec=0;
if($totaloffre[0]!=0){
$prcacc=$nbacc[0]*100/($totaloffre[0]);
$prcdec=$totaledec*100/($totaloffre[0]);
}

?>    <?php if(($v[0]!=0)||($v[1]!=0 )){?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
					<?php if($v[0]!=0){?>
						<div class="display">
							<div class="number">
								<h3 class="font-purple-soft"><?php if($prcdec!=0){ echo "$totaledec/$totaloffre[0]" ;}else{
								echo "$nbacc[0]/$totaloffre[0]" ;
								}?></h3>
							   <?php if($totaloffre[0] >= $a[1]){ ?>
								<small><?php echo $N45 ;?></small>
								<?php }else{?>
								<small class="uppercase font-xs font-red-flamingo"><?php echo $N45 ;?></small>
								<?php }?>
							</div>
						
						</div>
						<?php }?>
						<?php if($v[1]!=0){?>
							<?php if($prcdec!=0){ ?>
						
						<div class="progress-info">
							<div class="progress">
							 <?php if($prcdec >100-$a[2]){ ?>
                               <span style="width: <?php echo number_format($prcdec) ;?>%;" class="progress-bar progress-bar-success red-haze ">
								</span>
								<?php }else{ ?>
								<span style="width: <?php echo number_format($prcdec) ;?>%;" class="progress-bar progress-bar-success green-sharp">
								</span>
								<?php } ?>
								
							</div>
							<div class="status">
								<div class="status-title">
									 <?php echo $N46;?>
								</div>
								<div class="status-number">
									 <?php echo number_format($prcdec,2,',','.') ;?>%
								</div>
							</div>
						</div>
						<?php }else{ ?>
						<div class="progress-info">
							<div class="progress">
							
                               <span style="width: <?php echo number_format($prcacc) ;?>%;" class="progress-bar progress-bar-success green-sharp">
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 <?php echo $N47 ;?>
								</div>
								<div class="status-number">
									 <?php echo number_format($prcacc,2,',','.') ;?>%
								</div>
							</div>
						</div>
						<?php } } ?>
						</div>
					</div>
					<?php }?>
				</div>
				<?php 
				$nbrre=$TTCMPaa-$TTC1tt;
				$nbrva=$TTCAU1aa-$TTCAUaa;
				$nbrvaimp=$Tot-$TTCim;
				$etat_up=mysql_query("update  kpi  SET nbroffre='$totaloffre[0]',nbroffreacc='$prcacc',nbrdossier='$totaldossier[0]',nbrdossierovrt='$prcouvert',nbrclients='$nbcli[0]',nbrnouveauxclient='$nbnewcli[0]',nbropps='$totaleop',nbroppfact='$prcoui',nbrva='$nbrva',nbrvaimp='$nbrvaimp',nbrre='$nbrre',profit='$profit' where app=0 and idperiod=$p[0] ")or die(mysql_error());

				} else{ ?>
				<div class="alert alert-success display-show">
				
										<button class="close" data-close="alert"></button>
										<?php echo $N57;?>
										<a href="MenuUtilisation.php?valeur=Gestion_Kpi.php&titre=<?php echo $titrekpi; ?>&url=<?php echo $urlkpi; ?>"><?php echo $titrekpi; ?></a>
									</div>
				
				<?php } ?>
				<?php } ?>
			
			

						<div class="row">
							<?php
if("$permission[1]"=="Administrateur" || "$permission[22]"=='22'){
$forwardto=1;
?>
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase"> <?php echo $N1; ?></span>
								
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="row number-stats margin-bottom-30">
								
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="stat-right">
										<div class="stat-chart">
											<!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
											<div id="sparkline_bar2"></div>
										</div>
										<div class="stat-number">
											<div class="title">
												<?php echo $N3; ?>
											</div>
											<div class="number">
											<div class="uppercase font-hg font-red-flamingo">
										  <?php echo number_format($Tot,2,',','.') ;?> <span class="font-lg font-grey-mint"><?php  echo $MN1[0]; ?></span>
									       </div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							<div class="scroller" style="height:200px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
								<table class="table table-hover table-light">
								
								<thead>
								<tr class="uppercase">
									<th >
										 <?php echo $N27; ?>
									</th>
									<th>
										 <?php echo $N28; ?>
									</th>
									
								</tr>
								</thead>
								
								<?php 
								  while($facture=mysql_fetch_array($fact)){
                                  $el=mysql_query("select * from vueinvoicetotale where facture='$facture[3]'");
                                 $element=mysql_fetch_array($el);
                                 $TTF=$element[3];
								 ?>
								<tr>
									<td>
									<a href="MenuUtilisation.php?valeur=ModifierClient.php&NomSOC=<?php echo $facture[5];?>&titre=<?php echo $facture[5].' '; ?><?php echo $N30; ?>&url=<?php echo  $url.$N29 ; ?>&mdc=1" title="<?php echo $facture[5]; ?>"  >
										<font size="2"><?php echo  substr ($facture[5] , 0,10 );?></font></a>
									</td>
									<td>
										<?php echo number_format($TTF,2,',','.'); ?>&nbsp;<?php echo $facture[9]; ?> 
									</td>
									
								</tr>
								<?php 
                                   }
								   ?>
								
								</table>
								</div>
								
							
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<?php }?>
											<?php
if("$permission[1]"=="Administrateur" || "$permission[23]"=='23'){
$forwardto=1;
?>

				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase"> <?php echo $N2; ?></span>
								
							</div>
					
						</div>
						<div class="portlet-body">
							<div class="row number-stats margin-bottom-30">
								
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="stat-right">
										<div class="stat-chart">
											<!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
											<div id="sparkline_bar"></div>
										</div>
										<div class="stat-number">
											<div class="title">
												<?php echo $N3; ?>
											</div>
											<div class="number">
											<div class="uppercase font-hg font-red-flamingo">
										  <?php echo number_format($TTCim,2,',','.'); ?> <span class="font-lg font-grey-mint"><?php echo $MN1[0]; ?></span>
									       </div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							<div class="scroller" style="height:200px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
								<table class="table table-hover table-light">
								
								<thead>
								<tr class="uppercase">
									<th >
										 <?php echo $N31; ?>
									</th>
									<th>
										 <?php echo $N28; ?>
									</th>
									
								</tr>
								</thead>
								
								<?php 
		                        while($command=mysql_fetch_array($com)){
                                $el=mysql_query("select * from vuepurchasetotale where BonCommande='$command[0]'");
                                $Tot=0;
                                $element=mysql_fetch_array($el);
                                   ?>
								<tr>
									<td>
									<a href="MenuUtilisation.php?valeur=ModifierFournisseur.php&NomSOC=<?php echo $command[1];?>&titre=<?php echo $command[1].' '; ?><?php echo $N30; ?>&url=<?php echo  $url2.".".$N29 ; ?>&mdf=1" title="<?php echo $command[1]; ?>">
										<font size="2"><?php echo substr($command[1],0,10 );?></font></a>
									</td>
									<td>
										<?php echo number_format($element[3],2,',','.'); ?>&nbsp;<?php echo $command[7]; ?> 
									</td>
									
								</tr>
								<?php 
                                   }
								   ?>
								
								</table>
								</div>
								
							
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				
					<?php }?>
				
			</div>
		
			
			<?php
			
			
			
			
			$TTCAU=0;
			while($py=mysql_fetch_array($INPAU)){
      $cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[6]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);

		$el=mysql_query("select valeur from money where id='$py[0]'");
		$tt=mysql_fetch_array($el);
$TTCAU=$TTCAU+($tt[0]*$vcrf[0]);
}	

			$TTCSM=0;
			while($py=mysql_fetch_array($INPSM)){
        $cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[6]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);

		$el=mysql_query("select valeur from money where id='$py[0]'");
		$tt=mysql_fetch_array($el);
$TTCSM=$TTCSM+($tt[0]*$vcrf[0]);
}	

	
$TTC=0;
$TTCMP=0;
		while($py=mysql_fetch_array($INPCM)){
		$cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[6]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);

		$el=mysql_query("select valeur from money where id='$py[0]'");
		$tt=mysql_fetch_array($el);
       $TTC=$TTC+($tt[0]*$vcrf[0]);

}		

while($py=mysql_fetch_array($INPMP)){
$cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[6]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);

		$el=mysql_query("select valeur from money where id='$py[0]'");
		$tt=mysql_fetch_array($el);
$TTCMP=$TTCMP+($tt[0]*$vcrf[0]);

}
$taux=$TTC-$TTCMP;
if($taux>0){
$etat="<i class='fa fa-arrow-up uppercase font-sm font-green-flamingo' title=$N20></i>";
}else{
$etat="<i class='fa fa-arrow-down uppercase font-sm font-red-flamingo' title=$N21></i>";
}
if($TTCMP!=0){
$pr=($taux/$TTCMP)*100;
}else{
$pr=0;
}

$TTCAU1=0;
		while($py=mysql_fetch_array($PRAU)){
		$cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[6]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);

		$el=mysql_query("select valeur from money where id='$py[0]'");
		$tt=mysql_fetch_array($el);
$TTCAU1=$TTCAU1+($tt[0]*$vcrf[0]);

}

$TTCAU11=0;
		while($py=mysql_fetch_array($PRAU1)){
		$cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[4]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);
		$el=mysql_query("select Montant_peyye from paiment_salaire where id='$py[0]'");
		$tt=mysql_fetch_array($el);
  $TTCAU11=$TTCAU11+($tt[0]*$vcrf[0]);

}


$TTCAU1=$TTCAU1+$TTCAU11;
$TTCSM1=0;
		while($py=mysql_fetch_array($PRSM)){
       $cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[6]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);

		$el=mysql_query("select valeur from money where id='$py[0]'");
		$tt=mysql_fetch_array($el);
$TTCSM1=$TTCSM1+($tt[0]*$vcrf[0]);

}

$TTCSM11=0;
		while($py=mysql_fetch_array($PRSM1)){
       $cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[4]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);
		$el=mysql_query("select Montant_peyye from paiment_salaire where id='$py[0]'");		
		$tt=mysql_fetch_array($el);
      $TTCSM11=$TTCSM11+($tt[0]*$vcrf[0]);

}
$TTCSM1=$TTCSM1+$TTCSM11;

$TTC1=0;

		while($py=mysql_fetch_array($PRCM)){
        $cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[6]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);

		$el=mysql_query("select valeur from money where id='$py[0]'");
		$tt=mysql_fetch_array($el);
$TTC1=$TTC1+($tt[0]*$vcrf[0]);

}		
$TTC11=0;

		while($py=mysql_fetch_array($PRCM1)){
        $cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[4]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);

		$el=mysql_query("select Montant_peyye from paiment_salaire where id='$py[0]'");
		$tt=mysql_fetch_array($el);
$TTC11=$TTC11+($tt[0]*$vcrf[0]);

}
$TTC1=$TTC1+$TTC11;
$TTCMP1=0;
while($py=mysql_fetch_array($PRMP)){
$cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[6]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);

		$el=mysql_query("select valeur from money where id='$py[0]'");
		$tt=mysql_fetch_array($el);
$TTCMP1=$TTCMP1+($tt[0]*$vcrf[0]);

}

$TTCMP11=0;
while($py=mysql_fetch_array($PRMP1)){
$cr=mysql_query("select Monnaie from `bank_account`  where Numero_Compte='$py[4]'"); 
		$crf=mysql_fetch_array($cr);
		$vcr=mysql_query("select Valeur_Devise from `currency`  where Abreviation_Monnai='$crf[0]'"); 
		$vcrf=mysql_fetch_array($vcr);

		$el=mysql_query("select Montant_peyye from paiment_salaire where id='$py[0]'");
		$tt=mysql_fetch_array($el);
$TTCMP11=$TTCMP11+($tt[0]*$vcrf[0]);

}
$TTCMP1=$TTCMP1+$TTCMP11;

$taux1=$TTC1-$TTCMP1;
if($taux1<0){
$etat1="<i class='fa fa-arrow-up uppercase font-sm font-green-flamingo' title=$N20></i>";
}else{
$etat1="<i class='fa fa-arrow-down uppercase font-sm font-red-flamingo' title=$N21></i>";;
}
if($TTCMP1!=0){
$pr1=($taux1/$TTCMP1)*100;
}else{
$pr1=0;
}
 ?>
			
			
			

			<div class="row">
						<?php
if("$permission[1]"=="Administrateur" || "$permission[24]"=='24'){
$forwardto=1;
?>
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase"><?php echo $N16; ?><?php echo $etat; ?><?php //echo number_format($pr,2,',','.')."%"; ?></span>
								<!-- ici -->
							</div>
							<div class="portlet-title   tabbable-line ">
							  <ul class="nav nav-tabs">
							
								<li class="active">
								
									<a href="#tab_3_1" data-toggle="tab">
								<span class="uppercase font-xs1 "><?php echo $N33; ?></span></a>
									
								</li>
								
								<li>
									<a href="#tab_3_2" data-toggle="tab">
									<span class="uppercase font-xs1 "><?php echo $N34; ?></span></a>
								</li>
								<li>
									<a href="#tab_3_3" data-toggle="tab">
									<span class="uppercase font-xs1 "><?php echo $N35; ?></span></a>
								</li>
							  </ul>
						    </div>
						</div>
						<div class="portlet-body">
							<div class="tab-content">
							  <div class="tab-pane active" id="tab_3_1">
							    <div class="row list-separated">
								 <div class="col-md-12 col-sm-12 col-xs-12">
									<div class="font-grey-mint font-sm">
									
										<?php echo $N16.' '.$N36.' :'; ?>&nbsp;<span class="uppercase font-sm theme-font-color"> <?php echo number_format($TTCAU,2,',','.') ;?></span>&nbsp;<span class="font-sm font-grey-mint"><?php  echo $MN1[0]; ?></span> 
									</div>
								 </div>
								</div>
								</div>
								<div class="tab-pane" id="tab_3_2">
								 <div class="row list-separated">
								  <div class="col-md-12 col-sm-12 col-xs-12">
									 <div class="font-grey-mint font-sm">
										<?php echo $N16.' '.$N37.' :'; ?>&nbsp;<span class="uppercase font-sm theme-font-color"><?php echo number_format($TTCSM,2,',','.') ;?></span>&nbsp;<span class="font-sm font-grey-mint"><?php  echo $MN1[0]; ?></span> 
									 </div>
								 </div>
								 </div>
							   </div>
							   <div class="tab-pane" id="tab_3_3">
								 <div class="row list-separated">
								  <div class="col-md-12 col-sm-12 col-xs-12">
									 <div class="font-grey-mint font-sm">
										<?php echo $N16.' '.$N38.' :'; ?>&nbsp;<span class="uppercase font-sm theme-font-color"> <?php echo number_format($TTC,2,',','.') ;?></span>&nbsp;<span class="font-xs font-grey-mint"><?php  echo $MN1[0]; ?></span> 
									</div>
								 </div>
								 </div>
							   </div>
						</div>
							<div  id="sales_statistics" class="portlet-body-morris-fit morris-chart" style="height: 0px;display:none">
							</div>
						
					</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<?php }?>
										<?php
if("$permission[1]"=="Administrateur" || "$permission[25]"=='25'){
$forwardto=1;
?>
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-xs">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase"><?php echo $N13; ?><?php echo $etat1; ?><?php //echo number_format($pr1,2,',','.')."%"; ?></span>
							
							</div>
							<div class="portlet-title   tabbable-line ">
							  <ul class="nav nav-tabs">
							
								<li class="active">
								
									<a href="#tab_4_1" data-toggle="tab">
								<span class="uppercase font-xs1 "><?php echo $N33; ?></span></a>
									
								</li>
								
								<li>
									<a href="#tab_4_2" data-toggle="tab">
									<span class="uppercase font-xs1 "><?php echo $N34; ?></span></a>
								</li>
								<li>
									<a href="#tab_4_3" data-toggle="tab">
									<span class="uppercase font-xs1 "><?php echo $N35; ?></span></a>
								</li>
							  </ul>
						    </div>
						</div>
						<div class="portlet-body">
							<div class="tab-content">
							  <div class="tab-pane active" id="tab_4_1">
							    <div class="row list-separated">
								 <div class="col-md-12 col-sm-12 col-xs-12">
									<div class="font-grey-mint font-sm">
										<?php echo $N13.' '.$N36.' :'; ?>&nbsp;<span class="uppercase font-sm font-red-flamingo"> <?php echo number_format($TTCAU1,2,',','.') ;?></span>&nbsp;<span class="font-sm font-grey-mint"><?php  echo $MN1[0]; ?></span> 
									</div>
								 </div>
								</div>
								</div>
								<div class="tab-pane" id="tab_4_2">
								 <div class="row list-separated">
								  <div class="col-md-12 col-sm-12 col-xs-12">
									 <div class="font-grey-mint font-sm">
										<?php echo $N13.' '.$N37.' :'; ?>&nbsp;<span class="uppercase font-sm font-red-flamingo"><?php echo number_format($TTCSM1,2,',','.') ;?></span>&nbsp;<span class="font-sm font-grey-mint"><?php  echo $MN1[0]; ?></span> 
									 </div>
								 </div>
								 </div>
							   </div>
							   <div class="tab-pane" id="tab_4_3">
								 <div class="row list-separated">
								  <div class="col-md-12 col-sm-12 col-xs-12">
									 <div class="font-grey-mint font-sm">
										<?php echo $N13.' '.$N38.' :'; ?>&nbsp;<span class="uppercase font-sm font-red-flamingo"> <?php echo number_format($TTC1,2,',','.') ;?></span>&nbsp;<span class="font-xs font-grey-mint"><?php  echo $MN1[0]; ?></span> 
									</div>
								 </div>
								 </div>
							   </div>
						</div>
						
							<div  id="sales_statistics" class="portlet-body-morris-fit morris-chart" style="height: 0px;display:none">
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
					<?php }?>
														
	
			</div>
		
			
			<?php
$TTCAU1=0;
$TTCSM1=0;
	while($facture=mysql_fetch_array($IPAU)){
$el=mysql_query("select * from vueinvoicetotale where facture='$facture[3]'");

$element=mysql_fetch_array($el);
$TF=$element[3]*$facture[17];

$TTCAU1=$TTCAU1+$TF;
}
while($facture=mysql_fetch_array($IPSM)){
$el=mysql_query("select * from vueinvoicetotale where facture='$facture[3]'");

$element=mysql_fetch_array($el);
$TF=$element[3]*$facture[17];

$TTCSM1=$TTCSM1+$TF;
}		
			
			
			
			
			
$TTC1=0;
$TTCMP1=0;
	while($facture=mysql_fetch_array($IP)){
$el=mysql_query("select * from vueinvoicetotale where facture='$facture[3]'");

$element=mysql_fetch_array($el);
$TF=$element[3]*$facture[17];

$TTC1=$TTC1+$TF;
}	

while($facture=mysql_fetch_array($IPMP)){
$el=mysql_query("select * from vueinvoicetotale where facture='$facture[3]'");

$element=mysql_fetch_array($el);
$TF=$element[3]*$facture[17];

$TTCMP1=$TTCMP1+$TF;
}
$taux1=$TTC1-$TTCMP1;
if($taux1>=0){
$etat1="<i class='fa fa-arrow-up uppercase font-sm font-green-flamingo' title=$N20></i>";
}else{
$etat1="<i class='fa fa-arrow-down uppercase font-sm font-red-flamingo' title=$N21></i>";
}
if($TTCMP1!=0){
$pr1=($taux1/$TTCMP1)*100;
}else{
$pr1=0;
}
//2
$TTCAU=0;
$TTCSM=0;
		while($command=mysql_fetch_array($PPAU)){
$el=mysql_query("select * from vuepurchasetotale where BonCommande='$command[0]'");

$element=mysql_fetch_array($el);
$TTCNP=$element[3]*$command[9];
$TTCAU=$TTCAU+$TTCNP;
}

		while($command=mysql_fetch_array($PPSM)){
$el=mysql_query("select * from vuepurchasetotale where BonCommande='$command[0]'");

$element=mysql_fetch_array($el);
$TTCNP=$element[3]*$command[9];
$TTCSM=$TTCSM+$TTCNP;
}
$TTC=0;
$TTCMP=0;
		while($command=mysql_fetch_array($PP)){
$el=mysql_query("select * from vuepurchasetotale where BonCommande='$command[0]'");

$element=mysql_fetch_array($el);
$TTCNP=$element[3]*$command[9];
$TTC=$TTC+$TTCNP;
}	

while($command=mysql_fetch_array($PPMP)){
$el=mysql_query("select * from vuepurchasetotale where BonCommande='$command[0]'");

$element=mysql_fetch_array($el);
$TTCNP=$element[3]*$command[9];
$TTCMP=$TTCMP+$TTCNP;
}
$taux=$TTC-$TTCMP;
if($taux<0){
$etat="<i class='fa fa-arrow-up uppercase font-sm font-green-flamingo' title=$N20></i>";
}else{
$etat="<i class='fa fa-arrow-down uppercase font-sm font-red-flamingo' title=$N21></i>";
}
if($TTCMP!=0){
$pr=($taux/$TTCMP)*100;
}else{
$pr=0;
}
 ?>

                <div class="row">
				<?php
if("$permission[1]"=="Administrateur" || "$permission[26]"=='26'){
$forwardto=1;
?>
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase"><?php echo $N17; ?><?php echo $etat1; ?><?php //echo number_format($pr1,2,',','.')."%"; ?></span>
								
							</div>
							
								
						<div class="portlet-title   tabbable-line ">
							  <ul class="nav nav-tabs">
							
								<li class="active">
								
									<a href="#tab_5_1" data-toggle="tab">
								<span class="uppercase font-xs1 "><?php echo $N33; ?></span></a>
									
								</li>
								
								<li>
									<a href="#tab_5_2" data-toggle="tab">
									<span class="uppercase font-xs1 "><?php echo $N34; ?></span></a>
								</li>
								<li>
									<a href="#tab_5_3" data-toggle="tab">
									<span class="uppercase font-xs1 "><?php echo $N35; ?></span></a>
								</li>
							  </ul>
						    </div>
						  
						</div>
						<div class="portlet-body">
							<div class="tab-content">
							  <div class="tab-pane active" id="tab_5_1">
							    <div class="row list-separated">
								 <div class="col-md-12 col-sm-12 col-xs-12">
									<div class="font-grey-mint font-sm">
										<?php echo $N17.' '.$N36.' :'; ?>&nbsp;<span class="uppercase font-sm font-red-flamingo"> <?php echo number_format($TTCAU1,2,',','.') ;?></span>&nbsp;<span class="font-sm font-grey-mint"><?php  echo $MN1[0]; ?></span> 
									</div>
								 </div>
								</div>
								</div>
								<div class="tab-pane" id="tab_5_2">
								 <div class="row list-separated">
								  <div class="col-md-12 col-sm-12 col-xs-12">
									 <div class="font-grey-mint font-sm">
										<?php echo $N17.' '.$N37.' :'; ?>&nbsp;<span class="uppercase font-sm font-red-flamingo"><?php echo number_format($TTCSM1,2,',','.') ;?></span>&nbsp;<span class="font-sm font-grey-mint"><?php  echo $MN1[0]; ?></span> 
									 </div>
								 </div>
								 </div>
							   </div>
							   <div class="tab-pane" id="tab_5_3">
								 <div class="row list-separated">
								  <div class="col-md-12 col-sm-12 col-xs-12">
									 <div class="font-grey-mint font-sm">
										<?php echo $N17.' '.$N38.' :'; ?>&nbsp;<span class="uppercase font-sm font-red-flamingo"> <?php echo number_format($TTC1,2,',','.') ;?></span>&nbsp;<span class="font-xs font-grey-mint"><?php  echo $MN1[0]; ?></span> 
									</div>
								 </div>
								 </div>
							   </div>
						</div>
						
							<div  id="sales_statistics" class="portlet-body-morris-fit morris-chart" style="height: 0px;display:none">
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<?php }?>
								<?php
if("$permission[1]"=="Administrateur" || "$permission[27]"=='27'){
$forwardto=1;
?>
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase"><?php echo $N18; ?><?php echo $etat; ?><?php// echo number_format($pr,2,',','.')."%"; ?></span>
								
							</div>
							<div class="portlet-title   tabbable-line ">
							  <ul class="nav nav-tabs">
							
								<li class="active">
								
									<a href="#tab_6_1" data-toggle="tab">
								<span class="uppercase font-xs1 "><?php echo $N33; ?></span></a>
									
								</li>
								
								<li>
									<a href="#tab_6_2" data-toggle="tab">
									<span class="uppercase font-xs1 "><?php echo $N34; ?></span></a>
								</li>
								<li>
									<a href="#tab_6_3" data-toggle="tab">
									<span class="uppercase font-xs1 "><?php echo $N35; ?></span></a>
								</li>
							  </ul>
						    </div>
						</div>
						<div class="portlet-body">
							<div class="tab-content">
							  <div class="tab-pane active" id="tab_6_1">
							    <div class="row list-separated">
								 <div class="col-md-12 col-sm-12 col-xs-12">
									<div class="font-grey-mint font-sm">
										<?php echo $N18.' '.$N36.' :'; ?>&nbsp;<span class="uppercase font-sm font-red-flamingo"> <?php echo number_format($TTCAU,2,',','.') ;?></span>&nbsp;<span class="font-sm font-grey-mint"><?php  echo $MN1[0]; ?></span> 
									</div>
								 </div>
								</div>
								</div>
								<div class="tab-pane" id="tab_6_2">
								 <div class="row list-separated">
								  <div class="col-md-12 col-sm-12 col-xs-12">
									 <div class="font-grey-mint font-sm">
										<?php echo $N18.' '.$N37.' :'; ?>&nbsp;<span class="uppercase font-sm font-red-flamingo"><?php echo number_format($TTCSM,2,',','.') ;?></span>&nbsp;<span class="font-sm font-grey-mint"><?php  echo $MN1[0]; ?></span> 
									 </div>
								 </div>
								 </div>
							   </div>
							   <div class="tab-pane" id="tab_6_3">
								 <div class="row list-separated">
								  <div class="col-md-12 col-sm-12 col-xs-12">
									 <div class="font-grey-mint font-sm">
										<?php echo $N18.' '.$N38.' :'; ?>&nbsp;<span class="uppercase font-sm font-red-flamingo"> <?php echo number_format($TTC,2,',','.') ;?></span>&nbsp;<span class="font-xs font-grey-mint"><?php  echo $MN1[0]; ?></span> 
									</div>
								 </div>
								 </div>
							   </div>
						</div>
						
							<div  id="sales_statistics" class="portlet-body-morris-fit morris-chart" style="height: 0px;display:none">
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<?php }?>
			</div>
			

            <div class="row">
			 <?php
if("$permission[1]"=="Administrateur" || "$permission[28]"=='28'){
$forwardto=1;
?>
			<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase"> <?php echo $N22; ?></span>
								
							</div>
							
						</div>
						<div class="portlet-body">
						
							
							
							<div class="scroller" style="height:200px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
								<table class="table table-hover table-light">
								
								<thead>
								<tr class="uppercase">
									<th >
										 <?php echo $N32; ?>
									</th>
									<th>
										 <?php echo $N28; ?>
									</th>
									
								</tr>
								</thead>
								
								<?php 
								  $TTC=0;

                                 $el=mysql_query("select * from bank_account ");
                                while($element=mysql_fetch_array($el)){
								 ?>
								<tr>
									<td>
										<font size="2"><?php echo $element[0]."($element[1])"; ?></font>
									</td>
									<td>
										<?php echo number_format($element[6],2,',','.') ;?>&nbsp;<?php  echo $element[7]; ?>
									</td>
									
								</tr>
								<?php 
                                   }
								   ?>
								
								</table>
								</div>
								
							
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<?php }?>
							 <?php
if("$permission[1]"=="Administrateur" || "$permission[29]"=='29'){
$forwardto=1;
?>
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase"> <?php echo $N23; ?></span>
								
							</div>
							
						</div>
						<div class="portlet-body">
						
							
							
							<div class="scroller" style="height:200px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
								<table class="table table-hover table-light">
								
								<thead>
								<tr class="uppercase">
								   <th >
										 
									</th>
									
									<th>
										 <?php echo $N25; ?>
									</th>
									<th>
										 <?php echo $N26; ?>
									</th>
									<th >
										 <?php echo $N24; ?>
									</th>
									
								</tr>
								</thead>
								
								
								
								<tr>
									<td>
									<?php echo $N14; ?>
										
									</td>
									
									<?php
$IP=mysql_query("select * from offre where  date_lancement>='$Ann/$Mois/01' AND date_lancement<'$Ann/$Mois/31' AND validation=1 ");
$IPMP=mysql_query("select * from offre where  date_lancement>='$Annp/$MP/01' AND date_lancement<'$Annp/$MP/31' AND validation=1   ");
	$IPP1 = mysql_num_rows($IP);
	$IPMP1 = mysql_num_rows($IPMP);
?>
									<td>
										<?php echo $IPP1 ;?>
										
									</td>
									<?php
$IP=mysql_query("select * from offre where  date_lancement>='$Ann/$Mois/01' AND date_lancement<'$Ann/$Mois/31' AND validation=0 ");
$IPMP=mysql_query("select * from offre where  date_lancement>='$Annp/$MP/01' AND date_lancement<'$Annp/$MP/31' AND validation=0   ");
	$IPP2 = mysql_num_rows($IP);
	$IPMP2 = mysql_num_rows($IPMP);
?>
									<td>
										<?php echo $IPP2 ;?>
										
									</td>
									<?php 
$IP=mysql_query("select * from offre where  date_lancement>='$Ann/$Mois/01' AND date_lancement<'$Ann/$Mois/31'  ");
$IPMP=mysql_query("select * from offre where  date_lancement>='$Annp/$MP/01' AND date_lancement<'$Annp/$MP/31'   ");
	$IPP3 = mysql_num_rows($IP);
	$IPMP3 = mysql_num_rows($IPMP);
?>
                                    <td>
										<?php echo $IPP3 ;?>
										
									</td>
									
								</tr>
								<tr>
								<td><?php echo $N15; ?></td>
								<td><?php echo $IPMP1;?></td>
								<td><?php echo $IPMP2;?></td>
								<td><?php echo $IPMP3;?></td>
								</tr>
								
								
								</table>
								</div>
								
							
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<?php }?>
            </div>
			

			<div class="row">
										 <?php
if("$permission[1]"=="Administrateur" || "$permission[30]"=='30'){
$forwardto=1;
?>
			<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase"> <?php echo $N63; ?></span>
								
							</div>
							
						</div>
						<div class="portlet-body">
						
							
							
							<div class="scroller" style="height:200px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
								<table class="table table-hover table-light">
								
								<thead>
								<tr class="uppercase">
								    <th>
										 <?php echo $N59; ?>
									</th>
									<th >
										 <?php echo $N58; ?>
									</th>
									
									<th>
										 <?php echo $N28; ?>
									</th>
									
								</tr>
								</thead>
								
									<?php 
			$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
            $MN1=mysql_fetch_array($MN);
			$s=mysql_query("select * from purchase where confirmation!=1 order by reference Desc ");
			while($admin=mysql_fetch_array($s)){
			$get_tot = mysql_query("SELECT * FROM  `vuepurchasetotale` where BonCommande='$admin[0]'");
               $tot=mysql_fetch_array($get_tot);
			   $tot1=$tot[3];
			   $FR=substr ($admin[1], 0,8 );
			   ?>
								<tr>
									<td><font size="2"><a href="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=<?php echo $admin[0];?>&titre=<?php echo $N61; ?><?php echo " ".$admin[0];?>&url=<?php echo $urlcom.$N62;?> "><?php echo $admin[0];?></a></font></td> 
									
					
					<td><font size="2"><a  title="<?php echo $admin[1]; ?>" href="MenuUtilisation.php?valeur=ModifierFournisseur.php&NomSOC=<?php echo $admin[1];?>&mdf=0&titre=<?php echo $admin[1].' '; ?><?php echo $N30; ?>&url=<?php echo$url2.".".$N29?>"><?php echo  $FR; ?></font></td> 
					<td><font size="2"><?php echo number_format($tot1,2,',','.')."&nbsp;".$tot[4]; ?></font></td> 
									
								</tr>
								<?php 
                                   }
								   ?>
								
								</table>
								</div>
								
							
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<?php }?>
														 <?php
if("$permission[1]"=="Administrateur" || "$permission[31]"=='31'){
$forwardto=1;
?>
				
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase"> <?php echo $N65; ?></span>
								
							</div>
							
						</div>
						<div class="portlet-body">
						
							
							
							<div class="scroller" style="height:200px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
							
								<table class="table table-hover table-light">
								
								<thead>
								<tr class="uppercase">
								    <th>
										 <?php echo $N59; ?>
									</th>
									<th >
										 <?php echo $N58; ?>
									</th>
									
									<th>
										 <?php echo $N28; ?>
									</th>
									
									
								</tr>
								</thead>
								
									<?php 
			$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
            $MN1=mysql_fetch_array($MN);
			$s=mysql_query("select * from purchase where confirmation=1  AND etat_paiement='0'  AND Date_reception!='' and etat_commande='1' and confirmation_paiment='0' order by reference DESC");
			while($admin=mysql_fetch_array($s)){
			$get_tot = mysql_query("SELECT * FROM  `vuepurchasetotale` where BonCommande='$admin[0]'");
               $tot=mysql_fetch_array($get_tot);
			   $tot1=$tot[3]*$admin[9];
			   $FR=substr ($admin[1], 0,8 );
			   ?>
								<tr>
									<td><font size="2"><a href="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=<?php echo $admin[0];?>&titre=<?php echo $N61; ?><?php echo " ".$admin[0];?>&url=<?php echo $urlcom.$N62;?> "><?php echo $admin[0];?></a></font></td> 
									
					
					<td><font size="2"><a  title="<?php echo $admin[1]; ?>" href="MenuUtilisation.php?valeur=ModifierFournisseur.php&NomSOC=<?php echo $admin[1];?>&mdf=0&titre=<?php echo $admin[1].' '; ?><?php echo $N30; ?>&url=<?php echo$url2.".".$N29?>"><?php echo  $FR; ?></font></td> 
					<td><font size="2"><?php echo number_format($tot1,2,',','.')."&nbsp;".$tot[4]; ?></font></td> 
					 
									
								</tr>
								<?php 
                                   }
								   ?>
								
								</table>
								
								</div>
								
							
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				 <?php }?>
			</div>
				
    
		<?php 
		if($forwardto==0){ 
		$urlfor="MenuUtilisation.php?valeur=AllOperation.php&titre=$titreforw&url=$urlforw";
		echo $urlfor;
		?>
		<script type="text/javascript"> 
document.location.href="<?php echo $urlfor; ?>";
  </script >
		
		<?php }?>	
			
			

			<?php }?>
			<!-- END PAGE CONTENT INNER -->
		
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->

<!-- END FOOTER -->

<!-- END PAGE LEVEL SCRIPTS -->

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>