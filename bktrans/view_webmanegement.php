<?php
session_start();

$doc = new DOMDocument();  
$doc->load($_SESSION['lang']); 
$employees= $doc->getElementsByTagName("view_webmanegement"); 

foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;$V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;$V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;$V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V13 = $employee->getElementsByTagName( "e13" ); 
$N13 = $V13->item(0)->nodeValue;$V14 = $employee->getElementsByTagName( "e14" ); 
$N14 = $V14->item(0)->nodeValue;$V15 = $employee->getElementsByTagName( "e15" ); 
$N15 = $V15->item(0)->nodeValue;$V16 = $employee->getElementsByTagName( "e16" ); 
$N16 = $V16->item(0)->nodeValue;$V17 = $employee->getElementsByTagName( "e17" ); 
$N17 = $V17->item(0)->nodeValue;$V18 = $employee->getElementsByTagName( "e18" ); 
$N18 = $V18->item(0)->nodeValue;
$V19 = $employee->getElementsByTagName( "e19" ); 
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
  $N29 = $V29->item(0)->nodeValue;$V30 = $employee->getElementsByTagName( "e30" ); 
  $N30 = $V30->item(0)->nodeValue;$V31 = $employee->getElementsByTagName( "e31" ); 
  $N31 = $V31->item(0)->nodeValue;$V32 = $employee->getElementsByTagName( "e32" ); 
  $N32 = $V32->item(0)->nodeValue;$V33 = $employee->getElementsByTagName( "e33" ); 
  $N33 = $V33->item(0)->nodeValue;$V34 = $employee->getElementsByTagName( "e34" ); 
  $N34 = $V34->item(0)->nodeValue;$V35 = $employee->getElementsByTagName( "e35" ); 
  $N35 = $V35->item(0)->nodeValue;$V36 = $employee->getElementsByTagName( "e36" ); 
  $N36 = $V36->item(0)->nodeValue;$V37 = $employee->getElementsByTagName( "e37" ); 
  $N37= $V37->item(0)->nodeValue; $V38 = $employee->getElementsByTagName( "e38" ); 
  $N38 = $V38->item(0)->nodeValue;$V39 = $employee->getElementsByTagName( "e39" ); 
  $N39 = $V39->item(0)->nodeValue;$V40 = $employee->getElementsByTagName( "e40" ); 
  $N40 = $V40->item(0)->nodeValue;$V41 = $employee->getElementsByTagName( "e41" ); 
  $N41 = $V41->item(0)->nodeValue;$V42 = $employee->getElementsByTagName( "e42" ); 
  $N42 = $V42->item(0)->nodeValue;$V43 = $employee->getElementsByTagName( "e43" ); 
  $N43 = $V43->item(0)->nodeValue;$V44 = $employee->getElementsByTagName( "e44" ); 
  $N44 = $V44->item(0)->nodeValue;$V45 = $employee->getElementsByTagName( "e45" ); 
  $N45 = $V45->item(0)->nodeValue;$V46 = $employee->getElementsByTagName( "e46" ); 
  $N46 = $V46->item(0)->nodeValue;$V47 = $employee->getElementsByTagName( "e47" ); 
  $N47 = $V47->item(0)->nodeValue;$V48 = $employee->getElementsByTagName( "e48" ); 
  $N48 = $V48->item(0)->nodeValue;$V49 = $employee->getElementsByTagName( "e49" ); 
  $N49 = $V49->item(0)->nodeValue;$V50 = $employee->getElementsByTagName( "e50" ); 
  $N50 = $V50->item(0)->nodeValue;$V51 = $employee->getElementsByTagName( "e51" ); 
  $N51 = $V51->item(0)->nodeValue;
}
$url=$N49.".".$N50;
include ("Connection.php");
$headertab=array();;
$contrente="";
$contrent2="";
$contrent3="";
$contrent4="";
$contrent5="";
$Contra6="";
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
$dte1=$_POST['dt1'];
$a=false;
$b=false;
$c=false;
$d=false;
$e=false;
$f=false;
$order=array();
$tab=array();
$a1="";
$b1="";
$c1="";
$d1="";
$e1="";
$f1="";
if(isset($_POST['advenced'])){
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];

$order[1]=$a;
$order[2]=$b;
$order[3]=$c;
$order[4]=$d;
$order[5]=$e;
$order[6]=$f;
}
$tab[1]="a1";
$tab[2]="b1";
$tab[3]="c1";
$tab[4]="d1";
$tab[5]="e1";
$tab[6]="f1";
$etat=true;
$test=0;
for($i=1;$i<=6;$i++){
if($order[$i]=="true" && $test==0){
$$tab[$i]='active';
$test=1;
}
}
//$comm1=mysql_query("select DISTINCT `Numero_Compte` ,`Compte` from detaile_journal order by Numero_Compte asc");

$curr=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN=mysql_fetch_array($curr);

?>
						<div class="portlet-body">
							<div class="tabbable">
								<ul class="nav nav-tabs nav-tabs-lg">
								<?php if($a=="true"){ ?>
									<li class="<?php echo $a1; ?>">
										<a href="#tab_1" data-toggle="tab">
										<span class="badge badge-success" title="<?php echo $N13; ?>">
										1 </span> </a>
									</li >
									<?php } ?>
									<?php if($b=="true"){ ?>
									<li  class="<?php echo $b1; ?>">
										<a href="#tab_2" data-toggle="tab">
										 <span class="badge badge-success" title="<?php echo  $N14; ?>">
										2 </span>
										</a>
									</li><?php } ?>
									<?php if($c=="true"){ ?>
									<li  class="<?php echo $c1; ?>">
										<a href="#tab_3" data-toggle="tab">
										 <span class="badge badge-success" title="<?php echo $N15; ?>">
										3 </span></a>
									</li><?php } ?>
									<?php if($d=="true"){ ?>
									<li  class="<?php echo $d1; ?>">
										<a href="#tab_4" data-toggle="tab">
										<span class="badge badge-success" title="<?php echo $N16; ?>">
										4 </span>
										</a>
									</li><?php } ?>
									<?php if($e=="true"){ ?>
									<li  class="<?php echo $e1; ?>">
										<a href="#tab_5" data-toggle="tab">
										<span class="badge badge-success"  title="<?php echo $N17; ?>">
5 </span> </a>
									</li><?php } ?>
									<?php if($f=="true"){ ?>
									<li  class="<?php echo $f1; ?>">
										<a href="#tab_6" data-toggle="tab">
										<span class="badge badge-success"  title="<?php echo $N18; ?>">
6</span> </a>
									</li><?php } ?>
								</ul>
								<div class="tab-content">
									<div class="tab-pane <?php echo $a1; ?>" id="tab_1">
									<div class="label label-sm label-success">	
															<?php echo $N13; ?>	&nbsp;&nbsp;&nbsp;&nbsp;</div><br>
															<br>
										<table class="table table-striped  table-bordered "   >
										
															<tr style="background-color:#CEE3F6;height:20px;">
																<td align="right" widtd="30%">
																	
																</td>
																<td align="left">
																<font size="1">	
																<b>	<?php echo $headertab[0]." ( $MN[0] )"; ?></font>
																</td>
																<?php if("$headertab[0]" != "$headertab[1]"){ ?>
																<td align="left">
																<font size="1">	<b>	<?php echo $headertab[1]." ( $MN[0] )"; ?></font>
																</td>
																<?php  } ?>
																<td align="right">
																<font size="1"><b>		 <?php  echo $N1;  ?></font>
																</td>
															</tr>
															<tbody>
															
			<?php 
		
			
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
 
 ?>
			
				<tr  > 
    				<td colspan="4"><font size="1"><b><?php echo $key; ?></td> 
    				</tr> 
				
			
			

			

 
 
 
 
 
 
<?php
$tt1=0;
$tt2=0;
foreach($code[$key] as $Cle){
$TTP1=0;
$TTP2=0;
$P1=mysql_query("select  SUM(TotalElement*taux ) as Total from finalinvoice where $contrente2  and code='$Cle'  and draft='1'")or die(mysql_error());
$P2=mysql_query("select  SUM(TotalElement*taux ) as Total from finalinvoice where $contrente3 and code='$Cle'  and draft='1'")or die(mysql_error());

$C1=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where $contrente2  and code='$Cle' and OperationCommande!='' and  Livraison=1")or die(mysql_error());
$C2=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where $contrente3 and code='$Cle' and OperationCommande!='' and  Livraison=1 ")or die(mysql_error());

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



?>
<tr  style="background:#ececec;height:6px;"  > 
    				<td  align="left"><font size="1"><?php echo $Cle; ?></td> 
					
    				<td align="left"><font size="1" <?php if($TTP1<0 ){ echo "color=red";}?> ><?php echo number_format(abs($TTP1), 2, ',', ' '); ?></td> 
					<?php if("$headertab[0]" != "$headertab[1]"){ ?>
    				<td align="left"><font size="1"  <?php if($TTP2<0 ){  echo "color=red";}?> ><?php echo number_format(abs($TTP2), 2, ',', ' '); ?></td> 
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
<?php

}
$Net1=$Net1+$tt1;
$Net2=$Net2+$tt2;
?>
<tr  > 
    				<td  align="left" widtd="30%"><font size="1" ><b><?php echo "Total  ".$key; ?></b></td> 
    				<td align="left"><font size="1" <?php if($tt1<0 ){ echo "color=red";}?>><?php echo number_format(abs($tt1), 2, ',', ' '); ?></td> 
					<?php if("$headertab[0]" != "$headertab[1]"){ ?>
    				<td align="left"><font size="1" <?php if($tt2<0 ){ echo "color=red";}?>><?php echo number_format(abs($tt2), 2, ',', ' '); ?></td> 
					<?php } ?>
    				<td align="right"><font size="1"></td> 
    				
    				
    					</tr> 

<?php 


} ?>
<tr role="row" class="filter"  style="background-color:#ececec;height:20px;">
<td><font size="1"><?php  echo $N2;  ?></td>
<td align="left"><font size="1" <?php if($Net1<0 ){ echo "color=red";}?>><?php echo number_format(abs($Net1), 2, ',', ' '); ?></td> 
					
<?php if("$headertab[0]" != "$headertab[1]"){ ?>
<td align="left"><font size="1" <?php if($Net2<0 ){ echo "color=red";}?>><?php echo number_format(abs($Net2), 2, ',', ' '); ?></td> 
					
<?php } ?>
<td></td>
</tr>
<tr role="row" class="filter"  style="background-color:#ececec;height:20px;">
<?php
$TTP1=0;
$TTP2=0;
$C1=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where $contrente2   and OperationCommande='' and  Livraison=1")or die(mysql_error());
$C2=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where $contrente3  and OperationCommande='' and  Livraison=1 ")or die(mysql_error());
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
										
										
										</div>
										
									<div class="tab-pane <?php echo $b1; ?>" id="tab_2">
										<div class="table-container">
										<div class="label label-sm label-success">	
															<?php echo $N14; ?>	&nbsp;&nbsp;&nbsp;&nbsp;</div><br>
															<br>
											<table class="table table-striped table-bordered table-hover" id="datatable_shipment">
											<thead>
											<tr style="background-color:#CEE3F6;height:20px;">
												
												<td >
												<font size="1">	<b><?php  echo $N7;  ?>
												</td><td >
												<font size="1">	<b><?php  echo $N8;  ?>
												</td>
												<td >
												<font size="1">	<b> <?php  echo $N9;  ?>
												</td>
												<td >
												<font size="1">	<b><?php  echo $N10;  ?>
												</td>

											</tr>
											<?php   
											$date =date("Y-m-d");
											$BANK=mysql_query("select Numero_Compte,Nom_Banque,sold,Monnaie,decouvert from  `bank_account`   ");
											while($banque=mysql_fetch_array($BANK)){
											?>
											<tr role="row" class="filter">
											<td><font size="1"><?php echo $banque[1]; ?></font></td>
											<td><font size="1"><?php echo $banque[0]; ?></font></td>
											<td><font size="1"><?php echo number_format($banque[2], 2, ',', ' ')."&nbsp;$banque[3]"; ?></font></td>
											<td><font size="1"><?php echo number_format($banque[4], 2, ',', ' ')."&nbsp;$banque[3]"; ?></font></td>
												
												
											</tr>
											<?php } ?>
											</thead>
											<tbody>
											</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane <?php echo $c1; ?>" id="tab_3">
										<div class="table-container">
										<div class="label label-sm label-success">	
															<?php echo $N15; ?>&nbsp;&nbsp;&nbsp;&nbsp;	</div><br>
															<br>
											<table class="table table-striped  table-bordered "  style="background-color:#CEE3F6;height:20px;" >
										
															<tr style="background-color:#CEE3F6;height:20px;">
																<td align="right" widtd="30%">
																	
																</td>
																<td align="left">
																<font size="1">	
																<b>	<?php echo $headertab[0]." ( $MN[0] )"; ?></font>
																</td>
																<?php if("$headertab[0]" != "$headertab[1]"){ ?>
																<td align="left">
																<font size="1">	<b>	<?php echo $headertab[1]." ( $MN[0] )"; ?></font>
																</td>
																<?php  } ?>
																<td align="right">
																<font size="1"><b>		 <?php  echo $N1;  ?></font>
																</td>
															</tr>
															<tbody>
															
			
			

			

 
 
 
 
 
 
<?php
$TTP1=0;
$TTP2=0;
$P1=mysql_query("select  SUM(TotalElement*taux ) as Total from finalinvoice where $contrente2  and draft=1 ")or die(mysql_error());
$P2=mysql_query("select  SUM(TotalElement*taux ) as Total from finalinvoice where $contrente3 and draft=1")or die(mysql_error());

$TTP=mysql_fetch_array($P1);
$TTP3=mysql_fetch_array($P2);
$Net1=$TTP[0];
$Net2=$TTP3[0];

$dif1=0;
$dif2=0;

 ?>
<tr  > 
    				<td colspan="4"><font size="1"><b><?php  echo $N11;  ?></td> 
    				</tr> 
<tr role="row" class="filter"  style="background-color:#ececec;;height:20px;">

<td><font size="1"><?php  echo $N12;  ?></td>
<td align="left"><font size="1" <?php if($Net1<0 ){ echo "color=red";}?>><?php echo number_format(abs($Net1), 2, ',', ' '); ?></td> 
					
<?php if("$headertab[0]" != "$headertab[1]"){ ?>
<td align="left"><font size="1" <?php if($Net2<0 ){ echo "color=red";}?>><?php echo number_format(abs($Net2), 2, ',', ' '); ?></td> 
					
<?php } ?>
<td></td>
</tr>
<tr role="row" class="filter"  style="background-color:#ececec;;height:20px;">

<td><font size="1"><?php  echo $N32.'  '.$N12;  ?></td>
<td align="left"><font size="1" <?php if($Net1<0 ){ echo "color=red";}?>><?php $dif1=$Net1; echo number_format(abs($Net1), 2, ',', ' '); ?></td> 
					
<?php if("$headertab[0]" != "$headertab[1]"){ ?>
<td align="left"><font size="1" <?php if($Net2<0 ){ echo "color=red";}?>><?php $dif2=$Net2; echo number_format(abs($Net2), 2, ',', ' '); ?></td> 
					
<?php } ?>
<td></td>
</tr>
<tr  style="background-color:#FAFAFA;;height:20px;"> 
	<td colspan="4"><font size="1"><b><?php  echo $N19;  ?></td> 
    				</tr> 
<?php
$TTP1=0;
$TTP2=0;

$C21=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where $contrente2    and  Livraison=1")or die(mysql_error());
$C22=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where $contrente3   and  Livraison=1 ")or die(mysql_error());

$TTC21=mysql_fetch_array($C21);
$TTC22=mysql_fetch_array($C22);
$TTP1=$TTC21[0];
$TTP2=$TTC22[0];
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


$Diff=0;
// ne fonctionne pas
$Profit_Tax=mysql_query("select valeur from tax where  Profit='111' ")or die(mysql_error());
while($Tax=mysql_fetch_array($Profit_Tax)){
$Net1=$Net1-($Net1*$Tax[0]*0.01);
$Net2=$Net2-($Net2*$Tax[0]*0.01);;
// temp
}
  ?>

<tr  style="background:#ececec;height:6px;"  > 
    				<td  align="left"><font size="1"><?php  echo $N20;  ?> </td> 
			
    				<td align="left"><font size="1" <?php if($TTP[0]>0 ){ echo "color=red";}?> ><?php echo number_format(abs($TTP1), 2, ',', ' '); ?></td> 
					<?php if("$headertab[0]" != "$headertab[1]"){ ?>
    				<td align="left"><font size="1"  <?php if($TTP3[0]>0 ){  echo "color=red";}?> ><?php echo number_format(abs($TTP2), 2, ',', ' '); ?></td> 
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
						<tr  style="background:#ececec;height:6px;"  > 
    				<td  align="left"><font size="1"><?php  echo $N32.'  '.$N20;  ?></td> 
					
    				<td align="left"><font size="1" <?php if($TTP[0]>0 ){ echo "color=red";}?> ><?php $dif1=$dif1-$TTP1; echo number_format(abs($TTP1), 2, ',', ' '); ?></td> 
					<?php if("$headertab[0]" != "$headertab[1]"){ ?>
    				<td align="left"><font size="1"  <?php if($TTP3[0]>0 ){  echo "color=red";}?> ><?php  $dif2=$dif2-$TTP2; echo number_format(abs($TTP2), 2, ',', ' '); ?></td> 
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
						<tr  style="background:#ececec;height:6px;"  > 
    				<td  align="left"><font size="1"><?php  echo $N21;  ?></td> 
			
    				<td align="left"><font size="1" <?php if($dif1<0 ){ echo "color=red";}?> ><?php echo number_format(abs($dif1), 2, ',', ' '); ?></td> 
					<?php if("$headertab[0]" != "$headertab[1]"){ ?>
    				<td align="left"><font size="1"  <?php if($dif2<0 ){  echo "color=red";}?> ><?php echo number_format(abs($dif2), 2, ',', ' '); ?></td> 
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
						
						<tr  style="background-color:#FAFAFA;;height:20px;"> 
	<td ><font size="1"><b><?php  echo $N33;  ?></td> 
	<td align="left"><font size="1" <?php if($dif1<0 ){ echo "color=red";}?> ><?php echo number_format(abs($dif1), 2, ',', ' '); ?></td> 
					<?php if("$headertab[0]" != "$headertab[1]"){ ?>
    				<td align="left"><font size="1"  <?php if($dif2<0 ){  echo "color=red";}?> ><?php echo number_format(abs($dif2), 2, ',', ' '); ?></td> 
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
					 
						
</tbody>
															</table>
										</div>
									</div>
									<div class="tab-pane <?php echo $d1; ?>" id="tab_4">
										<div class="table-container">
										<div class="label label-sm label-success">	
															<?php echo $N16; ?>&nbsp;&nbsp;&nbsp;&nbsp;	</div><br>
															<br>
											<table class="table table-striped table-bordered table-hover" id="datatable_shipment">
											<thead>
											<tr style="background-color:#CEE3F6;height:20px;">
												<td widtd="5%">
													<font size="1">
												</td>
												<td widtd="15%">
												<font size="1">	<b><?php  echo $N22;  ?>
												</td>
												<td widtd="15%">
												<font size="1">	<b> 1-30 <?php  echo $N23;  ?>
												</td>
												<td widtd="10%">
												<font size="1"><b>	31-60 <?php  echo $N23;  ?> 
												</td>
												<td widtd="10%">
												<font size="1">	<b> 60+  <?php  echo $N23;  ?> 
												</td>
												<td widtd="10%">
												<font size="1">	<b> <?php  echo $N32;  ?> 
												</td>
											</tr>
											<?php   
											$date =date("Y-m-d");
											$inv=mysql_query("select DISTINCT `ClientFacture` from finalinvoice where Pay=0   and draft='1'  ");
											while($cust=mysql_fetch_array($inv)){
											$P10=mysql_query("select  SUM(TotalElement*taux ) as Total from finalinvoice where date_p<= CURDATE()  and ClientFacture='$cust[0]'  and draft='1'")or die(mysql_error());
											$P11=mysql_query("select  SUM(TotalElement*taux ) as Total from finalinvoice where date_p<= CURDATE()+30 and date_p > CURDATE()  and ClientFacture='$cust[0]' and draft='1'")or die(mysql_error());
											$P12=mysql_query("select  SUM(TotalElement*taux ) as Total from finalinvoice where date_p<= CURDATE()+60 and date_p > CURDATE()+30   and ClientFacture='$cust[0]'  and draft='1'")or die(mysql_error());
											$P13=mysql_query("select  SUM(TotalElement*taux ) as Total from finalinvoice where  date_p > CURDATE()+60   and ClientFacture='$cust[0]'  and draft='1'")or die(mysql_error());
											$P0=mysql_fetch_array($P10);
											$P1=mysql_fetch_array($P11);
											$P2=mysql_fetch_array($P12);
											$P3=mysql_fetch_array($P13);
											?>
											<tr role="row" class="filter">
												<td><font size="1"> <?php echo $cust[0] ; ?></td>
												<td><?php if($P0[0]==0){ ?><font size="1">-<?php }else{ ?><font size="1"> <?php echo number_format($P0[0], 2, ',', ' ')."&nbsp;$MN[0]"; ?><?php } ?></td>
												<td><?php if($P1[0]==0){ ?><font size="1">-<?php }else{ ?><font size="1"> <font size="1"> <?php echo number_format($P1[0], 2, ',', ' ')."&nbsp;$MN[0]"; ?><?php } ?></td>
												<td><?php if($P2[0]==0){ ?><font size="1">-<?php }else{ ?><font size="1"> <font size="1"> <?php echo number_format($P2[0], 2, ',', ' ')."&nbsp;$MN[0]"; ?><?php } ?></td>
												<td><?php if($P3[0]==0){ ?><font size="1">-<?php }else{ ?><font size="1"> <font size="1"> <?php echo number_format($P3[0], 2, ',', ' ')."&nbsp;$MN[0]"; ?><?php } ?></td>
												<td></td>
												
												
											</tr>
											<?php } ?>
											</thead>
											<tbody>
											</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane <?php echo $e1; ?>" id="tab_5">
										<div class="table-container">
										<div class="label label-sm label-success">	
															<?php echo $N17; ?>	&nbsp;&nbsp;&nbsp;&nbsp;</div><br>
															<br>
											<table class="table table-striped table-bordered table-hover" id="datatable_shipment">
											<thead>
											<tr style="background-color:#CEE3F6;height:20px;">
												<td widtd="3%">
													<font size="1">
												</td>
												<td widtd="15%">
												<font size="1">	<b><?php  echo $N22;  ?>
												</td>
												<td widtd="15%">
												<font size="1">	<b> 1-30 <?php  echo $N23;  ?>
												</td>
												<td widtd="10%">
												<font size="1"><b>	31-60 <?php  echo $N23;  ?> 
												</td>
												<td widtd="10%">
												<font size="1">	<b> 60+  <?php  echo $N23;  ?> 
												</td>
												<td widtd="10%">
												<font size="1">	<b> <?php  echo $N32;  ?> 
												</td>
											</tr>
											<?php   
											$date =date("Y-m-d");
											$t0=0;
											$t1=0;
											$t2=0;
											$t3=0;
											$inv=mysql_query("select DISTINCT `FournisseurCommande` from finalpurchase where Pay=0   and Livraison='1' and OperationCommande!=''  ");
											while($cust=mysql_fetch_array($inv)){
											$P10=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where date_p<= CURDATE()  and FournisseurCommande='$cust[0]' and Pay=0  and Livraison='1'  and OperationCommande!='' ")or die(mysql_error());
											$P11=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where date_p<= CURDATE()+30 and date_p > CURDATE()  and FournisseurCommande='$cust[0]' and Pay=0 and Livraison='1'  and OperationCommande!=''")or die(mysql_error());
											$P12=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where date_p<= CURDATE()+60 and date_p > CURDATE()+30   and FournisseurCommande='$cust[0]' and Pay=0 and Livraison='1' and OperationCommande!=''")or die(mysql_error());
											$P13=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where  date_p > CURDATE()+60   and FournisseurCommande='$cust[0]' and Pay=0 and Livraison='1' and OperationCommande!=''")or die(mysql_error());
											$P0=mysql_fetch_array($P10);
											$P1=mysql_fetch_array($P11);
											$P2=mysql_fetch_array($P12);
											$P3=mysql_fetch_array($P13);
											$t0=$t0+$P0[0];
											$t1=$t1+$P1[0];
											$t2=$t2+$P2[0];
											$t3=$t3+$P3[0];
											?>
											<tr role="row" class="filter">
												<td><font size="1"> <?php echo $cust[0] ; ?></td>
												<td><?php if($P0[0]==0){ ?><font size="1">-<?php }else{ ?><font size="1"> <?php echo number_format($P0[0], 2, ',', ' ')."&nbsp;$MN[0]"; ?><?php } ?></td>
												<td><?php if($P1[0]==0){ ?><font size="1">-<?php }else{ ?><font size="1"> <font size="1"> <?php echo number_format($P1[0], 2, ',', ' ')."&nbsp;$MN[0]"; ?><?php } ?></td>
												<td><?php if($P2[0]==0){ ?><font size="1">-<?php }else{ ?><font size="1"> <font size="1"> <?php echo number_format($P2[0], 2, ',', ' ')."&nbsp;$MN[0]"; ?><?php } ?></td>
												<td><?php if($P3[0]==0){ ?><font size="1">-<?php }else{ ?><font size="1"> <font size="1"> <?php echo number_format($P3[0], 2, ',', ' ')."&nbsp;$MN[0]"; ?><?php } ?></td>
												<td><?php if($P0[0]==0 && $P1[0]==0 && $P2[0]==0 && $P3[0]==0 ){ ?><font size="1">-<?php }else{ ?><font size="1"> <font size="1"> <?php echo number_format($P0[0]+$P1[0]+$P2[0]+$P3[0], 2, ',', ' ')."&nbsp;$MN[0]"; ?><?php } ?></td>
												
												
											</tr><?php } ?>
											<tr role="row" class="filter">
												<td><font size="1"> <?php echo $cust[0] ; ?></td>
												<td><?php if($t0==0){ ?><font size="1">-<?php }else{ ?><font size="1"> <?php echo number_format($t0, 2, ',', ' ')."&nbsp;$MN[0]"; ?><?php } ?></td>
												<td><?php if($t1==0){ ?><font size="1">-<?php }else{ ?><font size="1"> <font size="1"> <?php echo number_format($t1, 2, ',', ' ')."&nbsp;$MN[0]"; ?><?php } ?></td>
												<td><?php if($t2==0){ ?><font size="1">-<?php }else{ ?><font size="1"> <font size="1"> <?php echo number_format($t2, 2, ',', ' ')."&nbsp;$MN[0]"; ?><?php } ?></td>
												<td><?php if($t3==0){ ?><font size="1">-<?php }else{ ?><font size="1"> <font size="1"> <?php echo number_format($t3, 2, ',', ' ')."&nbsp;$MN[0]"; ?><?php } ?></td>
												<td><?php if($t0==0 && $t1[0]==0 && $t2[0]==0 && $t3[0]==0 ){ ?><font size="1">-<?php }else{ ?><font size="1"> <font size="1"> <?php echo number_format($t0+$t1+$t2+$t3, 2, ',', ' ')."&nbsp;$MN[0]"; ?><?php } ?></td>
												
												
											</tr>
											
											</thead>
											<tbody>
											</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane <?php echo $f1; ?>" id="tab_6">
									<form action="MenuUtilisation.php" id="form" method="GET" target="_blank">
									<div class="label label-sm label-success">	
															<?php echo $N18; ?>	&nbsp;&nbsp;&nbsp;&nbsp;</div><br>
															<br><div class="table-scrollable">
									
<table class="table table-striped  table-bordered "    >
										
															<tr style="background-color:#CEE3F6;height:20px;">
																<td align="right" widtd="30%">
																	
																</td>
																
																<td align="right">
																<font size="1"><b>		 <?php  echo $N35;  ?></font>
																</td><td align="right">
																<font size="1"><b>		 <?php  echo $N36;  ?></font>
																</td><td align="right">
																<font size="1"><b>		 <?php  echo $N37;  ?></font>
																</td><td align="right">
																<font size="1"><b>		 <?php  echo $N38;  ?></font>
																</td><td align="right">
																<font size="1"><b>		 <?php  echo $N39;  ?></font>
																</td><td align="right">
																<font size="1"><b>		 <?php  echo $N40;  ?></font>
																</td><td align="right">
																<font size="1"><b>		 <?php  echo $N41;  ?></font>
																</td><td align="right">
																<font size="1"><b>		 <?php  echo $N42;  ?></font>
																</td><td align="right">
																<font size="1"><b>		 <?php  echo $N43;  ?></font>
																</td><td align="right">
																<font size="1"><b>		 <?php  echo $N44;  ?></font>
																</td><td align="right">
																<font size="1"><b>		 <?php  echo $N45;  ?></font>
																</td><td align="right">
																<font size="1"><b>		 <?php  echo $N46;  ?></font>
																</td><td align="right">
																<font size="1"><b>		 <?php  echo $N32;  ?></font>
																</td>
																<td align="right" class="noimprime">
																<font size="1"><b>		 <?php  echo $N47;  ?></font>
																</td>
															</tr>
															<tbody>
															
			<?php 
		include "views/viewrapport6.php";
		
	
?>
</tbody>
															</table></div>
										
										
<?php

  /*
									<div class="label label-sm label-success">	
															<?php echo $N18; ?>	&nbsp;&nbsp;&nbsp;&nbsp;</div><br>
															<br>
										<table class="table table-striped  table-bordered "  style="background-color:#CEE3F6;height:20px;" >
										
															<tr style="background-color:#CEE3F6;height:20px;">
																<td align="right" widtd="30%">
																	
																</td>
																<td align="left">
																<font size="1">	
																<b>	<?php echo $headertab[0]." ( $MN[0] )"; ?></font>
																</td>
																<?php if("$headertab[0]" != "$headertab[1]"){ ?>
																<td align="left">
																<font size="1">	<b>	<?php echo $headertab[1]." ( $MN[0] )"; ?></font>
																</td>
																<?php  } ?>
																<td align="right">
																<font size="1"><b>		 <?php  echo $N1;  ?></font>
																</td>
															</tr>
															<tbody>
															
			
			

			

 
 
 
 
 
 
<?php
$TTP1=0;
$TTP2=0;
$P1=mysql_query("select  SUM(TotalElement*taux ) as Total from finalinvoice where $contrente2  and draft=1 ")or die(mysql_error());
$P2=mysql_query("select  SUM(TotalElement*taux ) as Total from finalinvoice where $contrente3 and draft=1")or die(mysql_error());
$C1=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where $contrente2   and OperationCommande!='' and  Livraison=1")or die(mysql_error());
$C2=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where $contrente3  and OperationCommande!='' and  Livraison=1 ")or die(mysql_error());

$TTP=mysql_fetch_array($P1);
$TTP3=mysql_fetch_array($P2);
$TTC1=mysql_fetch_array($C1);
$TTC2=mysql_fetch_array($C2);
$Net1=$TTP[0]-$TTC1[0];
$Net2=$TTP3[0]-$TTC2[0];
 ?>
<tr  > 
    				<td colspan="4"><font size="1"><b><?php  echo $N24;  ?></td> 
    				</tr> 
<tr role="row" class="filter"  style="background-color:#ececec;;height:20px;">

<td><font size="1"><?php  echo $N2;  ?></td>
<td align="left"><font size="1" <?php if($Net1<0 ){ echo "color=red";}?>><?php echo number_format(abs($Net1), 2, ',', ' '); ?></td> 
					
<?php if("$headertab[0]" != "$headertab[1]"){ ?>
<td align="left"><font size="1" <?php if($Net2<0 ){ echo "color=red";}?>><?php echo number_format(abs($Net2), 2, ',', ' '); ?></td> 
					
<?php } ?>
<td></td>
</tr>
<?php
$TTP1=0;
$TTP2=0;
$C1=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where $contrente2   and OperationCommande='' and  Livraison=1")or die(mysql_error());
$C2=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where $contrente3  and OperationCommande='' and  Livraison=1 ")or die(mysql_error());
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


$Net1=$Net1-$TTP1;
$Net2=$Net2-$TTP2;
  ?>

<tr role="row" class="filter"  style="background-color:#ececec;;height:20px;">
<td><font size="1"><?php  echo $N6;  ?></td>
<?php
$Profit_Tax=mysql_query("select valeur from tax where  Profit='111' ")or die(mysql_error());
while($Tax=mysql_fetch_array($Profit_Tax)){
$Net1=$Net1-($Net1*$Tax[0]*0.01);
$Net2=$Net2-($Net2*$Tax[0]*0.01);;
// temp
}
  ?>
<td align="left"><font size="1" <?php if($Net1<0 ){ echo "color=red";}?>><?php echo number_format(abs($Net1), 2, ',', ' '); ?></td> 
					
<?php if("$headertab[0]" != "$headertab[1]"){ ?>
<td align="left"><font size="1" <?php if($Net2<0 ){ echo "color=red";}?>><?php echo number_format(abs($Net2), 2, ',', ' '); ?></td> 
					
<?php } ?>
<td></td>
</tr>
<tr  style="background-color:#FAFAFA;;height:20px;"> 
	<td colspan="4"><font size="1"><b><?php  echo $N25;  ?></td> 
    				</tr> 
<?php
$TTP1=0;
$TTP2=0;

$P1=mysql_query("select  SUM(TotalElement*taux ) as Total from finalinvoice where $contrente2 and draft=1 ")or die(mysql_error());
$P2=mysql_query("select  SUM(TotalElement*taux ) as Total from finalinvoice where $contrente3 and draft=1")or die(mysql_error());
$C21=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where $contrente2    and  Livraison=1")or die(mysql_error());
$C22=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where $contrente3   and  Livraison=1 ")or die(mysql_error());

$TTP=mysql_fetch_array($P1);
$TTP3=mysql_fetch_array($P2);
$TTC21=mysql_fetch_array($C21);
$TTC22=mysql_fetch_array($C22);

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


$Diff=0;


?>
<tr  style="background:#ececec;height:6px;"  > 
    				<td  align="left"><font size="1"><?php  echo $N26;  ?></td> 
					
    				<td align="left"><font size="1" <?php if($TTP[0]<0 ){ echo "color=red";}?> ><?php echo number_format(abs($TTP[0]), 2, ',', ' '); ?></td> 
					<?php if("$headertab[0]" != "$headertab[1]"){ ?>
    				<td align="left"><font size="1"  <?php if($TTP3[0]<0 ){  echo "color=red";}?> ><?php echo number_format(abs($TTP3[0]), 2, ',', ' '); ?></td> 
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
						<tr  style="background:#ececec;height:6px;"  > 
    				<td  align="left"><font size="1"><?php  echo $N27;  ?></td> 
					
    				<td align="left"><font size="1" <?php if(($TTC21[0]+$TTP2)>0 ){ echo "color=red";}?> ><?php echo number_format(abs($TTC21[0]+$TTP1), 2, ',', ' '); ?></td> 
					<?php if("$headertab[0]" != "$headertab[1]"){ ?>
    				<td align="left"><font size="1"  <?php if(($TTC22[0]+$TTP2)>0 ){  echo "color=red";}?> ><?php echo number_format(abs($TTC22[0]+$TTP2), 2, ',', ' '); ?></td> 
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
						<tr  style="background:#ececec;height:6px;"  > 
    				<td  align="left"><font size="1"><?php  echo $N21;  ?></td> 
					<?php
					$tt=$TTC21[0]+$TTP1;
					$tt1=$TTC22[0]+$TTP2;
					$NetAsset1=$TTP[0]-$tt;
					$NetAsset2=$TTP3[0]-$tt1;
					
					?>
    				<td align="left"><font size="1" <?php if($NetAsset1<0 ){ echo "color=red";}?> ><?php echo number_format(abs($NetAsset1), 2, ',', ' '); ?></td> 
					<?php if("$headertab[0]" != "$headertab[1]"){ ?>
    				<td align="left"><font size="1"  <?php if($NetAsset1<0 ){  echo "color=red";}?> ><?php echo number_format(abs($NetAsset2), 2, ',', ' '); ?></td> 
    				<?php  } ?>
					<td align="right"><font size="1">
					
					
    				
    				</td> 
    					</tr> 
						<tr  style="background-color:#FAFAFA;;height:20px;"> 
	<td colspan="4"><font size="1"><b><?php  echo $N28;  ?></td> 
    				</tr> 
					<tr  style="background:#ececec;height:6px;"  > 
    				<td  align="left"><font size="1"><?php  echo $N29;  ?></td> 
					<?php
					
					$f1=mysql_query("select  count(DISTINCT facture)  from finalinvoice where $contrente2 and draft=1  ")or die(mysql_error());
                    $f2=mysql_query("select  count(DISTINCT facture) from finalinvoice where $contrente3 and draft=1")or die(mysql_error());
				
					$NBF1=mysql_fetch_array($f1);
                    $NBF2=mysql_fetch_array($f2);
					?>
    				<td align="left"><font size="1" ><?php echo $NBF1[0] ; ?></td> 
					<?php if("$headertab[0]" != "$headertab[1]"){ ?>
    				<td align="left"><font size="1" ><?php echo $NBF2[0] ; ?></td> 
					<?php  } ?>
					<td align="right"><font size="1">
					
					
    				
    				</td> 
    					</tr> 
						
						<tr  style="background:#ececec;height:6px;"  > 
    				<td  align="left"><font size="1"><?php  echo $N30;  ?></td> 
					<?php
					
					$f1=mysql_query("select AVG(Somme) from (select  SUM(TotalElement*taux ) as Somme  from finalinvoice where $contrente2 and draft=1 group by facture )x ")or die(mysql_error());
                    $f2=mysql_query("select AVG(Somme) from (select  SUM(TotalElement*taux ) as Somme  from finalinvoice where $contrente3 and draft=1 group by facture )y ")or die(mysql_error());
				            $NBF1=mysql_fetch_array($f1);
                    $NBF2=mysql_fetch_array($f2);
					?>
    				<td align="left"><font size="1" ><?php echo number_format($NBF1[0], 2, ',', ' '); ; ?></td> 
					<?php if("$headertab[0]" != "$headertab[1]"){ ?>
    				<td align="left"><font size="1" ><?php echo number_format($NBF2[0], 2, ',', ' '); ; ?></td> 
					<?php  } ?>
					<td align="right"><font size="1">
    				</td> 
    				
    					</tr>
						<tr  style="background:#ececec;height:6px;"  > 
    				<td  align="left"><font size="1"><?php  echo $N31.' ('.$N31.' )';  ?></td> 
					<?php
					$f1=mysql_query("select AVG(Somme) from (select  DATEDIFF( `date_p`, `date_c` ) as Somme  from finalinvoice where $contrente2 and draft=1 group by facture )x ")or die(mysql_error());
                    $f2=mysql_query("select AVG(Somme) from (select  DATEDIFF( `date_p`, `date_c` ) as Somme  from finalinvoice where $contrente3 and draft=1  group by facture)y ")or die(mysql_error());
				    $NBF1=mysql_fetch_array($f1);
                    $NBF2=mysql_fetch_array($f2);
					?>
    				<td align="left"><font size="1" ><?php echo number_format($NBF1[0], 0, ',', ' '); ?></td> 
					<?php if("$headertab[0]" != "$headertab[1]"){ ?>
    				<td align="left"><font size="1" ><?php echo number_format($NBF2[0], 0, ',', ' '); ?></td> 
					<?php  } ?>
					<td align="right"><font size="1">
					
					
    				
    				</td>  
    					</tr>
</tbody>
															</table>
				*/ 
				
				
				?>	
<div class="actions">
								<button type="submit" class="btn btn-circle btn-default">
								<a><i class="icon-bar-chart"></i></a>
								<span class="hidden-480">
								Graphique</span>
								</button>
							</div>				
						</form>				
										</div>
										
									
							</div>
						</div>
		
