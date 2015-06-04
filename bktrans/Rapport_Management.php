<?php
session_start();
include('Connection.php');
require('RapportManagementInclude.php');

$DD="";
$DF="";
$Tax="";
 $PRT1=0;
 $PRT2=0;
 $PRT3=0;
 $PRT4=0;
 
 $table1=array();
 $table2=array();
 $table3=array();
 $table4=array();
 $table5=array();
 $table6=array();
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
setlocale (LC_TIME, 'fr_FR.utf8','fra'); 

$FIMP="";
if(isset($_POST['FIMP'])){
$FIMP=$_POST['FIMP'];
}

$com_dc=$DD." jusq'au ".$DF;
$f_nom = "";$f_mail ="";$f_t1= "";$f_t2="";$f_fax="";$f_adr="";
$req_cli = mysql_query('select * from entreprise');
while($ent = mysql_fetch_array($req_cli)){
$ent_s = $ent[0];$ent_adr = $ent[1];$ent_tel = $ent[2];$ent_fax = $ent[3];$ent_mail = $ent[4];$ent_site = $ent[5];$ent_nom = $ent[6];
}

$pdf = new PDF_Invoice('P','mm','A4');

$pdf->AddPage();
$img=$pdf-> Image('bktrans_data/'.$ent_s,15,8,40);
$pdf->addSociete( $img."\n",
                  $ent_adr."\n" .
                  "Tel: ".$ent_tel."\n".
                  "Fax: ".$ent_fax."\n" .
                  "Email: ".$ent_mail."\n".
				  "Site web: ".$ent_site."\n");
				  
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();$pdf->Ln();
$pdf->Ln();
$pdf->Ln();$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();$pdf->SetFont('Arial','B',18);
$pdf->Write(5,utf8_decode("$ent_nom"));
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();$pdf->SetFont('Arial','B',22);
$pdf->Write(5,utf8_decode('Ropport de Management'));
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();$pdf->SetFont('Arial','B',16);
$date=strftime("%A %d %B  %Y "); 
$pdf->Write(5,utf8_decode("$date"));
$pdf->AddPage();
$headertab=array();;
$contrente="";
$contrent2="";
$contrent3="";
$contrent4="";
$contrent5="";
if(isset($_POST['periode1'])){
$prd1=$_POST['periode1'];
$prd2=$_POST['periode2'];
$req=mysql_query("select  * from financial_period where id='$prd1'");
$req2=mysql_query("select  * from financial_period where id='$prd2'");

$d1=mysql_fetch_array($req);
$d2=mysql_fetch_array($req2);
$contrente="(date_c >='$d1[2]' and date_c <='$d1[3]')  or (date_c >='$d2[2]' and date_c <='$d2[3]')";
$contrente2="date_c >='$d1[2]' and date_c <='$d1[3]'";
$contrente3="date_c >='$d2[2]' and date_c <='$d2[3]'";
$contrente4="Date_paiment >='$d2[2]' and Date_paiment <='$d2[3]'";
$contrente5="Date_paiment >='$d2[2]' and Date_paiment <='$d2[3]'";

$headertab[0]="$d1[2]-$d1[3]";
$headertab[1]="$d2[2]-$d2[3]";
}elseif(isset($_POST['date1'])){
$date1=$_POST['date1'];
$date2=$_POST['date2'];
$contrente="date_c like '%$date1%'  or  date_c like '%$date2%'";
$contrente2="date_c like '%$date1%' ";
$contrente3="date_c like '%$date2%'";
$contrente4="Date_paiment like '%$date1%' ";
$contrente5="Date_paiment like '%$date2%'";

$headertab[0]="$date1";
$headertab[1]="$date2";
}else{
$date1=$_POST['datee1'];
$date2=$_POST['datee2'];
$m1=$_POST['m1'];
$m2=$_POST['m2'];
$contrente="date_c like '%$m1%-%$date1%-%'  or  date_c like '%$m2%-%$date2%-%'";
$contrente2="date_c like '%$m1%-%$date1%-%'";
$contrente3="date_c like '%$m2%-%$date2%-%'";
$contrente4="Date_paiment like '%$m1%-%$date1%-%'";
$contrente5="Date_paiment like '%$m2%-%$date2%-%'";
$headertab[0]="$date1-$m1";
$headertab[1]="$date2-$m2";
}
$curr=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN=mysql_fetch_array($curr);
			
			$declaration=array();
			$code=array();
$inv=mysql_query("select DISTINCT `code` from finalinvoice where $contrente   and draft='1' order by code desc ")or die(mysql_error());
$comm2=mysql_query("select DISTINCT `code` from finalpurchase where $contrente   order by code desc")or die(mysql_error());
while($admine=mysql_fetch_array($inv)){
$com=mysql_query("select  declaration from codes where Nom_Code='$admine[0]'");
$admin=mysql_fetch_array($com);
 if(!in_array("$admin[0]",$declaration)){
		$declaration[]=$admin[0];
		$code["$admin[0]"][]=$admine[0];

			   }else{
			  if(!in_array("$admine[0]",$code["$admin[0]"])){
			   $code["$admin[0]"][]=$admine[0];
		}
			   }
}
while($admine=mysql_fetch_array($comm2)){
$com=mysql_query("select  declaration from codes where Nom_Code='$admine[0]'");
$admin=mysql_fetch_array($com);
 if(!in_array("$admin[0]",$declaration)){
		$declaration[]=$admin[0];
		$code["$admin[0]"][]=$admine[0];
			   }else{
			   if(!in_array("$admine[0]",$code["$admin[0]"])){
			   $code["$admin[0]"][]=$admine[0];
		}
			   }
}
	$Net1=0;		
	$Net2=0;
foreach ($declaration as $key ){
$table1[]=utf8_decode("$key");
 
$tt1=0;
$tt2=0;
foreach($code[$key] as $Cle){
$TTP1=0;
$TTP2=0;
$P1=mysql_query("select  SUM(Net*taux*devise ) as Total from finalinvoice where $contrente2  and code='$Cle'  and draft='1'")or die(mysql_error());
$P2=mysql_query("select  SUM(Net*taux*devise ) as Total from finalinvoice where $contrente3 and code='$Cle'  and draft='1'")or die(mysql_error());

$C1=mysql_query("select  SUM(Net_Paye*taux*DeviseElement ) as Total from finalpurchase where $contrente2  and code='$Cle' and OperationCommande!='' and  Livraison=1")or die(mysql_error());
$C2=mysql_query("select  SUM(Net_Paye*taux*DeviseElement ) as Total from finalpurchase where $contrente3 and code='$Cle' and OperationCommande!='' and  Livraison=1 ")or die(mysql_error());

$TTP=mysql_fetch_array($P1);
$TTP3=mysql_fetch_array($P2);
$TTC1=mysql_fetch_array($C1);
$TTC2=mysql_fetch_array($C2);
$TTP1=$TTP[0]-$TTC1[0];
$TTP2=$TTP3[0]-$TTC2[0];
$tt1=$tt1+$TTP1;
$tt2=$tt2+$TTP2;
if("$headertab[0]" == "$headertab[1]"){ 
$Diff=0;
}ELSE{
if($TTP1!=0 && $TTP2!=0 && $TTP2!=$TTP1){
$Diff=$TTP1*100/$TTP2;
}elseif($TTP2!=0 &&  $TTP2!=$TTP1 ){
$Diff=100;
}else{
$Diff=0;
}}

$table1[$key][]=utf8_decode("$Cle");
$table1[$key][]=number_format($TTP1, 2, ',', ' ');
$table1[$key][]=number_format($TTP2, 2, ',', ' ');
$table1[$key][]=number_format($Diff, 2, ',', '');



}
$Net1=$Net1+$tt1;
$Net2=$Net2+$tt2;
$table1[$key][]=utf8_decode("Total  $key"); 
$table1[$key][]=number_format(number_format($tt1, 2, ',', ''));
$table1[$key][]=number_format(number_format($tt2, 2, ',', ''));



}
$table1["R1"][]=utf8_decode("$N2");
$table1["R1"][]=number_format($Net1, 2, ',', ' ');
$table1["R1"][]=number_format($Net2, 2, ',', ' ');
$TTP1=0;
$TTP2=0;
$C1=mysql_query("select  SUM(Net_Paye*taux*DeviseElement ) as Total from finalpurchase where $contrente2   and OperationCommande='' and  Livraison=1")or die(mysql_error());
$C2=mysql_query("select  SUM(Net_Paye*taux*DeviseElement ) as Total from finalpurchase where $contrente3  and OperationCommande='' and  Livraison=1 ")or die(mysql_error());
$TTC1=mysql_fetch_array($C1);
$TTC2=mysql_fetch_array($C2);
$TTP1=$TTC1[0];
$TTP2=$TTC2[0];
if("$headertab[0]" == "$headertab[1]"){ 
$Diff=0;
}ELSE{
if($TTP1>$TTP2){
$Diff=$TTP1*100/$TTP2*-1;
}elseif($TTP1<$TTP2 ){
$Diff=$TTP2*100/$TTP2;
}else{
$Diff=0;
}}
$table1["R1"][]=utf8_decode("$N3");
$table1["R1"][]=number_format($TTP1, 2, ',', ' ');
$table1["R1"][]=number_format($TTP2, 2, ',', ' ');
?>
<td><font size="1"><?php  echo $N3;  ?></td>
<td align="left"><font size="1""color=red"><?php echo number_format($TTP1, 2, ',', ' '); ?></td> 
<?php if("$headertab[0]" != "$headertab[1]"){ ?>
    				<td align="left"><font size="1""color=red"><?php echo number_format($TTP2, 2, ',', ' '); ?></td> 
<?php  } ?>
					<td align="right"><font size="1">
					<?php
					if($Diff==0){ ?>
					<?php echo "-"; ?>
					<?php
					}else{
					if($Diff<0){ ?>
					<?php echo number_format($Diff, 2, ',', ' ')."%"; ?>
					<a><i class="fa fa-sort-amount-desc"></i></a>
					<?php } else {  ?>
				<?php echo number_format($Diff, 2, ',', ' ')."%"; ?>
					<a>	<i class="fa fa-sort-amount-asc"></i></a>
					
					<?php }}   ?>
					
    				
    				</td> 
</tr>
<tr role="row" class="filter"  style="background-color:#ececec;height:20px;">
<?php
$ttpp1=$TTP1;
$ttpp2=$TTP2;
$C1=mysql_query("select  id   from paiment_salaire where $contrente4 ")or die(mysql_error());
$C2=mysql_query("select id   from paiment_salaire where $contrente5 ")or die(mysql_error());
while($TTC1=mysql_fetch_array($C1)){
$Tot=mysql_query("select *  from salaire_payer where  id_payment='$TTC1[0]' ")or die(mysql_error());
while($Tot_S=mysql_fetch_array($Tot)){
$Currncy=mysql_query("select Valeur_Devise from currency where Abreviation_Monnai='$Tot_S[4]'");
$MNTemp=mysql_fetch_array($Currncy);

$TTP1 =$TTP1+($Tot_S[2]*$MNTemp[0]/$Tot_S[5]);
}

}
while($TTC2=mysql_fetch_array($C2)){
$Tot=mysql_query("select *  from salaire_payer where  id_payment='$TTC2[0]' ")or die(mysql_error());
while($Tot_S=mysql_fetch_array($Tot)){
$Currncy=mysql_query("select Valeur_Devise from currency where Abreviation_Monnai='$Tot_S[4]'");
$MNTemp=mysql_fetch_array($Currncy);

$TTP2 =$TTP2+($Tot_S[2]*$MNTemp[0]/$Tot_S[5]);
}}
if("$headertab[0]" == "$headertab[1]"){ 
$Diff=0;
}ELSE{
if($TTP1<$TTP2){
$Diff=$TTP1*100/$TTP2;
}elseif($TTP1>$TTP2 ){
$Diff=$TTP2*100/$TTP1;
}else{
$Diff=0;
}}

?>
<td><font size="1"><?php  echo $N4;  ?></td>
<td align="left"><font size="1""color=red"><?php echo number_format($TTP1-$ttpp1, 2, ',', ' '); ?></td> 
<?php if("$headertab[0]" != "$headertab[1]"){ ?>
    				<td align="left"><font size="1""color=red"><?php echo number_format($TTP2-$ttpp2, 2, ',', ' '); ?></td> 
<?php  } ?>
					<td align="right"><font size="1">
					<?php
					if($Diff==0){ ?>
					<?php echo "-"; ?>
					<?php
					}else{
					if($Diff<0){ ?>
					<?php echo number_format($Diff, 2, ',', ' ')."%"; ?>
					<a><i class="fa fa-sort-amount-desc"></i></a>
					<?php } else {  ?>
				<?php echo number_format($Diff, 2, ',', ' ')."%"; ?>
					<a>	<i class="fa fa-sort-amount-asc"></i></a>
					
					<?php }}   ?>
					
    				
    				</td> 
</tr>
<tr role="row" class="filter"  style="background-color:#ececec;height:20px;">
<td><font size="1"><?php  echo $N5;  ?></td>
<?php
$Net1=$Net1-$TTP1;
$Net2=$Net2-$TTP2;
  ?>
<td align="left"><font size="1" <?php if($Net1<0 ){ echo "color=red";}?>><?php echo number_format(abs($Net1), 2, ',', ' '); ?></td> 
					
<?php if("$headertab[0]" != "$headertab[1]"){ ?>
<td align="left"><font size="1" <?php if($Net2<0 ){ echo "color=red";}?>><?php echo number_format(abs($Net2), 2, ',', ' '); ?></td> 
					
<?php } ?>
<td></td>
</tr>
<tr role="row" class="filter"  style="background-color:#ececec;height:20px;">
<td><font size="1"><?php  echo $N6;  ?></td>
<?php
$Profit_Tax=mysql_query("select valeur from tax where  Profit='111' ")or die(mysql_error());
while($Tax=mysql_fetch_array($Profit_Tax)){
$Net1=$Net1-($Net1*$Tax[0]*0.01);
$Net2=$Net2-($Net2*$Tax[0]*0.01);;
}
  ?>
<td align="left"><font size="1" <?php if($Net1<0 ){ echo "color=red";}?>><?php echo number_format(abs($Net1), 2, ',', ' '); ?></td> 
					
<?php if("$headertab[0]" != "$headertab[1]"){ ?>
<td align="left"><font size="1" <?php if($Net2<0 ){ echo "color=red";}?>><?php echo number_format(abs($Net2), 2, ',', ' '); ?></td> 
					
<?php } ?>
<td></td>
</tr>
</tbody>
															</table>
										
										



$pdf->Output();

?>