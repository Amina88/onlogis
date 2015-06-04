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
$url=$N4.".".$N11.".".$N12;
$url4=$N4.".".$N11;
$url2=$N4.".".$N11.".";
$titre=$N12;
$url3=$N19.".".$N32.".".$N2;

if("$permission[1]"=="Administrateur" || "$permission[4]"=='4'){ 
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
  $N20 = $V20->item(0)->nodeValue;$V21 = $employee->getElementsByTagName( "e21" ); 
  $N21 = $V21->item(0)->nodeValue;$V22 = $employee->getElementsByTagName( "e22" ); 
  $N22 = $V22->item(0)->nodeValue;$V23 = $employee->getElementsByTagName( "e23" ); 
  $N23 = $V23->item(0)->nodeValue;$V24 = $employee->getElementsByTagName( "e24" ); 
  $N24 = $V24->item(0)->nodeValue;$V25= $employee->getElementsByTagName( "e25" ); 
  $N25 = $V25->item(0)->nodeValue;$V26 = $employee->getElementsByTagName( "e26" ); 
  $N26 = $V26->item(0)->nodeValue;$V27 = $employee->getElementsByTagName( "e27" ); 
  $N27 = $V27->item(0)->nodeValue;$V28 = $employee->getElementsByTagName( "e28" ); 
  $N28 = $V28->item(0)->nodeValue;$V29 = $employee->getElementsByTagName( "e29" ); 
  $N29 = $V29->item(0)->nodeValue;
  $V30 = $employee->getElementsByTagName( "e30" ); 
  $N30 = $V30->item(0)->nodeValue;
  $V31 = $employee->getElementsByTagName( "e31" ); 
  $N31 = $V31->item(0)->nodeValue;

?>

<?php
include ("Connection.php");
$id_op=$_GET['id'];
$s=mysql_query("select * from purchase where confirmation=1  AND operation='$id_op'  order by reference DESC  ");
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);

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
		<table class="table  table-bordered table-hover" id="sample_2" >
			<thead> 
				<tr> 
   					 
    				<th><font size="1"><?php echo $N4; ?></th>
					<th><font size="1"><?php echo $N5; ?></th>
					<th><font size="1"><?php echo $N6; ?></th> 
    				<th><font size="1"><?php echo $N7; ?></th> 
    				<th><font size="1"><?php echo $N8; ?></th>
					<th><font size="1"><?php echo $N29; ?></th>
					<th><font size="1"><?php echo $N9; ?></th>
    				<th><font size="1"><?php echo $N28; ?></th>
					<th><font size="1"><?php echo $N10; ?></th>
					<th><font size="1"><?php echo $N11; ?></th>
					
				</tr> 
			</thead>
           <tbody>			
			<?php while($admin=mysql_fetch_array($s)){
			
			$trmp= mysql_query("SELECT terme_paiement  from  `supplier` where Nom_Soc='$admin[1]'");
			 $trmpfour=mysql_fetch_array($trmp);
			 $restTMF=$trmpfour[0];
			$get_tot = mysql_query("SELECT * FROM  `vuepurchasetotale` where BonCommande='$admin[0]'");
               $tot=mysql_fetch_array($get_tot);
			   $tot1=$tot[3];
			   $client = str_replace('&','%26',$admin[1]);
			   $Titre = str_replace(' ','%20',$N27);
			   $Titr = str_replace(' ','%20',$N28);
			   $client = str_replace(' ','%20',$client);
			   $date=date("Y-m-d");
			 $Auj = explode('-',$date);
			 $val_echue=0;
			 if($admin[17]!=NULL){
			 $ann=$trmpfour[0]/365;
			
			 $anne=explode('.',$ann);
			 if(isset($anne[1])){
			 $ms=($trmpfour[0]-($anne[0]*365));
			 $moi=$ms/30;
			  $restTMF=$ms;
			 //echo $moi."<br>";
			 }else{
			 $moi=0;
			 }
			 $moiss=explode('.',$moi);
			 if(isset($moiss[1])){
			 $ms=($restTMF-($moiss[0]*30));
			 //echo "$restTMF-($moiss[0]*30)<br>";
			 $jour=$ms;
			 }else{
			 $jour=0.0;
			 }
			 
			 $jours=explode('.',$jour);
			 
			 $DateF = explode('-',$admin[17]);
			 $jours=$jours[0]+$DateF[2];
		
			 if($jours>30){
			 $mois=$moiss[1]+1;
			 $jours=$jours-30;
			 }
			 $mois=$moiss[0]+$DateF[1];
			  $anne=$anne[0]+$DateF[0];
			  if($mois>12){
			 $mois=$mois-12;
			$anne=$anne+1;
			 }
			
			 $j=sprintf("%02d",$jours);
			 $m=sprintf("%02d",$mois);
			 $a=sprintf("%04d",$anne);
			 
			 $DateF = explode('-',date("Y-m-d"));
				$anECH=-$a+$DateF[0];
			
			$mECH=-$m+$DateF[1];
			
			$jECH=-$j+$DateF[2];
			$val_echue=($anECH*360)+($mECH*30)+($jECH);
			if($val_echue<0){
			$val_echue=0;
			}
			
			}else{
			$val_echue=0;
			}
			$FR=substr ($admin[1], 0,8 );
			$jrs=$trmpfour[0]; 
			$dt=date("Y-m-d", strtotime("+$jrs days"));
			?>		
				<tr > 
   					 
    				<td><font size="1"><a href="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=<?php echo $admin[0];?>&titre=<?php echo $N30." ".$admin[0];?>&url=<?php echo $url2.$N31;?> "><?php echo $admin[0];?></a></font></td> 
    				<td><font size="1">
					<a  title="<?php echo $admin[1]; ?>" href="MenuUtilisation.php?valeur=ModifierFournisseur.php&NomSOC=<?php echo $admin[1];?>&mdf=0&titre=<?php echo $admin[1]; ?>&url=<?php echo$url3?>">
					<?php echo $FR; ?></font></td> 
    				<td><font size="1"><?php echo $admin[4];?></font></td> 
					<td><font size="1"><?php echo $admin[17];?></font></td>
					<td><font size="1"><?php  $datetime2 = new DateTime(date('Y-m-d'));
$datetime1 = new DateTime($dt);

$interval = $datetime1->diff($datetime2,true);
$m=$interval->format('%m')*30;$a=$interval->format('%Y')*365;$d=$interval->format('%d');  $vaechu=$m+$a+$d; 
if($datetime1>$datetime2){$vaechu=0;}

echo $vaechu; ?></font></td> 
					
					<td><font size="1"><?php echo number_format($tot1,2,',','.')."&nbsp;".$tot[4]; ?></font></td> 
					<?php  if($admin[17]!=NULL){ ?>
					<td><font size="1"><?php  echo date("Y-m-d", strtotime("+$jrs days"));  ?></font></td> 
					<?php  }else{ ?>
						<td><font size="1"></font></td> 
				
					<?php  } ?>

<?php
$finalstate = "";
$etat = $admin[6];
if ($etat == 1){
$finalstate =  '<span class="label label-sm label-info">'.$N13.'</span>';
}
else{
$finalstate =  '<span class="label label-sm label-info">'.$N14.'</span>';
}
$fin = "";
$eta = $admin[8];
if ($eta == 1){
$fin = "<a href=MenuUtilisation.php?valeur=detaille_payement.php&titre=$admin[0]&id=$admin[0]><span class='label label-sm label-success'>$N15</span>";
}else{
if($admin[19]=="1"){
$fin = '<span class="label label-sm label-warning">'.$N22.'</span>';
}else{
$fin = '<span class="label label-sm label-danger">'.$N14.'</span>';
}
}

if($admin[17]==NULL){
$recpt="MenuUtilisation.php?valeur=reception_factures.php&titre=$Titr&id=$admin[0]";
$RcptStat =  '<a href='.$recpt.'>
<span class="label label-sm label-danger">'.$N14.'</span>';
}else{
$recpt="MenuUtilisation.php?valeur=reception_factures.php&titre=$Titr&id=$admin[0]";
$RcptStat =  '<a href='.$recpt.'>
<span class="label label-sm label-success">'.$N13.'</span>';}
?>
					
					<td><font size="2"><?php echo $RcptStat;?></font></td> 
					<td><font size="2"><?php echo $finalstate;?></font></td> 
					
					<td>
					<?php echo $fin;?>
					</td> 
					 
    				
				</tr> 				
<?php  }  ?>
         </tbody>
      </table>
    </div>
</div>
<?php  }  }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>
