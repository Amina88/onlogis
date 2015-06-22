
<?php
$TTP1=0;
$TTP2=0;
$ttotinv=0;
$ttotcom=0;
for ($i=1;$i<=12;$i++){

$d = sprintf("%02d",$i);
$contrente2="date_c like '%$dte1%-%$d%-%'";
$P1=mysql_query("select  SUM(TotalElement*taux ) as Total from finalinvoice where $contrente2  and draft='1'")or die(mysql_error());
$C1=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where $contrente2  and OperationCommande!='' and  Livraison=1")or die(mysql_error());

$TTP=mysql_fetch_array($P1);

$TTC1=mysql_fetch_array($C1);
$ttinv="inv$i";
$ttcom="com$i";
$$ttinv=$TTP[0];
$$ttcom=$TTC1[0];
$ttotinv=$ttotinv+$$ttinv;
$ttotcom=$ttotcom+$$ttcom;
$TTP1=$TTP[0]-$TTC1[0];
$TTP2=$TTP3[0]-$TTC2[0];
$Net1=$TTP1;
$Net2=$TTP1;
}
?>

<input type="hidden" name="titre" value="<?php  echo $N51;  ?>">
<input type="hidden" name="valeur" value="charts.php">
<input type="hidden" name="url" value="<?php  echo $url.'.'.$N51;  ?>">
<input type="hidden" name="ann" value="<?php  echo $dte1;  ?>">
<input type="hidden" name="rap" value="<?php  echo $N49;  ?>">
<tr role="row" class="filter"  style="background-color:#ececec;height:20px;">
<td><font size="1"><?php  echo $N34;  ?></td>
<td align="left"><font size="1" <?php if($inv1<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv1), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv2<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv2), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv3<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv3), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv4<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv4), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv5<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv5), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv6<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv6), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv7<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv7), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv8<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv8), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv9<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv9), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv10<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv10), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv11<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv11), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv12<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv12), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($ttotinv<0 ){ echo "color=red";}?>><?php echo number_format(abs($ttotinv), 2, ',', ' ').' '.$MN[0]; ?></td> 
					
<td class="noimprime"><a href="MenuUtilisation.php?valeur=charts.php&titre=<?php  echo $N51;  ?>&url=<?php  echo $url;  ?>&anne=<?php echo $dte1; ?>&det=<?php echo $N34; ?>&inv1=<?php echo $inv1; ?>&inv2=<?php echo $inv2; ?>&inv3=<?php echo $inv3; ?>&inv4=<?php echo $inv4; ?>&inv5=<?php echo $inv5; ?>&inv6=<?php echo $inv6; ?>&inv7=<?php echo $inv7; ?>&inv8=<?php echo $inv8; ?>&inv9=<?php echo $inv9; ?>&inv10=<?php echo $inv10; ?>&inv11=<?php echo $inv11; ?>&inv12=<?php echo $inv12; ?>" target="_blank"><i class="icon-bar-chart"></i></a>	</td>	
<input type="hidden" id="inv1"  value="<?php echo abs($inv1);  ?>" name="inv1">
<input type="hidden" id="inv1"  value="<?php echo abs($inv2);  ?>" name="inv2">
<input type="hidden" id="inv1"  value="<?php echo abs($inv3);  ?>" name="inv3">
<input type="hidden" id="inv1"  value="<?php echo abs($inv4);  ?>" name="inv4">
<input type="hidden" id="inv1"  value="<?php echo abs($inv5);  ?>" name="inv5">
<input type="hidden" id="inv1"  value="<?php echo abs($inv6);  ?>" name="inv6">
<input type="hidden" id="inv1"  value="<?php echo abs($inv7);  ?>" name="inv7">
<input type="hidden" id="inv1"  value="<?php echo abs($inv8);  ?>" name="inv8">
<input type="hidden" id="inv1"  value="<?php echo abs($inv9);  ?>" name="inv9">
<input type="hidden" id="inv1"  value="<?php echo abs($inv10);  ?>" name="inv10">
<input type="hidden" id="inv1"  value="<?php echo abs($inv11);  ?>" name="inv11">
<input type="hidden" id="inv1"  value="<?php echo abs($inv12);  ?>" name="inv12">
</tr>
<tr role="row" class="filter"  style="background-color:#ececec;height:20px;">
<td><font size="1"><?php  echo $N48;  ?></td>
<td align="left"><font size="1" <?php if($com1>0 ){ echo "color=red";}?>><?php echo number_format(abs($com1), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($com2>0 ){ echo "color=red";}?>><?php echo number_format(abs($com2), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($com3>0 ){ echo "color=red";}?>><?php echo number_format(abs($com3), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($com4>0 ){ echo "color=red";}?>><?php echo number_format(abs($com4), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($com5>0 ){ echo "color=red";}?>><?php echo number_format(abs($com5), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($com6>0 ){ echo "color=red";}?>><?php echo number_format(abs($com6), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($com7>0 ){ echo "color=red";}?>><?php echo number_format(abs($com7), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($com8>0 ){ echo "color=red";}?>><?php echo number_format(abs($com8), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($com9>0 ){ echo "color=red";}?>><?php echo number_format(abs($com9), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($com10>0 ){ echo "color=red";}?>><?php echo number_format(abs($com10), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($com11>0 ){ echo "color=red";}?>><?php echo number_format(abs($com11), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($com12>0 ){ echo "color=red";}?>><?php echo number_format(abs($com12), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($ttotcom>0 ){ echo "color=red";}?>><?php echo number_format(abs($ttotcom), 2, ',', ' ').' '.$MN[0]; ?></td> 
					
<td class="noimprime"><a href="MenuUtilisation.php?valeur=charts.php&titre=<?php  echo $N51;  ?>&url=<?php  echo $url;  ?>&anne=<?php echo $dte1; ?>&det=<?php echo $N48; ?>&inv1=<?php echo $com1; ?>&inv2=<?php echo $com2; ?>&inv3=<?php echo $com3; ?>&inv4=<?php echo $com4; ?>&inv5=<?php echo $com5; ?>&inv6=<?php echo $com6; ?>&inv7=<?php echo $com7; ?>&inv8=<?php echo $com8; ?>&inv9=<?php echo $com9; ?>&inv10=<?php echo $com10; ?>&inv11=<?php echo $com11; ?>&inv12=<?php echo $com12; ?>" target="_blank"><i class="icon-bar-chart"></i></a>	</td>	
<input type="hidden" id="com1"  value="<?php echo abs($com1);  ?>" name="com1">
<input type="hidden" id="com1"  value="<?php echo abs($com2);  ?>" name="com2">
<input type="hidden" id="com1"  value="<?php echo abs($com3);  ?>" name="com3">
<input type="hidden" id="com1"  value="<?php echo abs($com4);  ?>" name="com4">
<input type="hidden" id="com1"  value="<?php echo abs($com5);  ?>" name="com5">
<input type="hidden" id="com1"  value="<?php echo abs($com6);  ?>" name="com6">
<input type="hidden" id="com1"  value="<?php echo abs($com7);  ?>" name="com7">
<input type="hidden" id="com1"  value="<?php echo abs($com8);  ?>" name="com8">
<input type="hidden" id="com1"  value="<?php echo abs($com9);  ?>" name="com9">
<input type="hidden" id="com1"  value="<?php echo abs($com10);  ?>" name="com10">
<input type="hidden" id="com1"  value="<?php echo abs($com11);  ?>" name="com11">
<input type="hidden" id="com1"  value="<?php echo abs($com12);  ?>" name="com12">
</tr>
<tr role="row" class="filter"  style="background-color:#ececec;height:20px;">
<td><font size="1"><?php  echo $N2;  ?></td>
<td align="left"><font size="1" <?php if($inv1-$com1<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv1-$com1), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv2-$com2<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv2-$com2), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv3-$com3<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv3-$com3), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv4-$com4<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv4-$com4), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv5-$com5<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv5-$com5), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv6-$com6<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv6-$com6), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv7-$com7<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv7-$com7), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv8-$com8<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv8-$com8), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv9-$com9<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv9-$com9), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv10-$com10<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv10-$com10), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv11-$com11<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv11-$com11), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($inv12-$com12<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv12-$com12), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($ttotinv-$ttotcom<0 ){ echo "color=red";}?>><?php echo number_format(abs($ttotinv-$ttotcom), 2, ',', ' ').' '.$MN[0]; ?></td> 
					
<td class="noimprime"><a href="MenuUtilisation.php?valeur=charts.php&titre=<?php  echo $N51;  ?>&url=<?php  echo $url;  ?>&anne=<?php echo $dte1; ?>&det=<?php echo $N2; ?>&inv1=<?php echo $inv1-$com1; ?>&inv2=<?php echo $inv2-$com2; ?>&inv3=<?php echo $inv3-$com3; ?>&inv4=<?php echo $inv4-$com4; ?>&inv5=<?php echo $inv5-$com5; ?>&inv6=<?php echo $inv6-$com6; ?>&inv7=<?php echo $inv7-$com7; ?>&inv8=<?php echo $inv8-$com8; ?>&inv9=<?php echo $inv9-$com9; ?>&inv10=<?php echo $inv10-$com10; ?>&inv11=<?php echo $inv11-$com11; ?>&inv12=<?php echo $inv12-$com12; ?>" target="_blank"><i class="icon-bar-chart"></i></a>	</td>	
<input type="hidden" id="gross1"  value="<?php echo ($inv1-$com1);  ?>" name="gross1">
<input type="hidden" id="gross1"  value="<?php echo ($inv2-$com2);  ?>" name="gross2">
<input type="hidden" id="gross1"  value="<?php echo ($inv3-$com3);  ?>" name="gross3">
<input type="hidden" id="gross1"  value="<?php echo ($inv4-$com4);  ?>" name="gross4">
<input type="hidden" id="gross1"  value="<?php echo ($inv5-$com5);  ?>" name="gross5">
<input type="hidden" id="gross1"  value="<?php echo ($inv6-$com6);  ?>" name="gross6">
<input type="hidden" id="gross1"  value="<?php echo ($inv7-$com7);  ?>" name="gross7">
<input type="hidden" id="gross1"  value="<?php echo ($inv8-$com8);  ?>" name="gross8">
<input type="hidden" id="gross1"  value="<?php echo ($inv9-$com9);  ?>" name="gross9">
<input type="hidden" id="gross1"  value="<?php echo ($inv10-$com10);  ?>" name="gross10">
<input type="hidden" id="gross1"  value="<?php echo ($inv11-$com11);  ?>" name="gross11">
<input type="hidden" id="gross1"  value="<?php echo ($inv12-$com12);  ?>" name="gross12">

</tr>
<tr role="row" class="filter"  style="background-color:#ececec;height:20px;">
<?php
$ttotdep=0;
for ($i=1;$i<=12;$i++){

$d = sprintf("%02d",$i);
$contrente2="date_c like '%$dte1%-%$d%-%'";
$C1=mysql_query("select  SUM(Total*taux ) as Total from finalpurchase where $contrente2   and OperationCommande='' and  Livraison=1")or die(mysql_error());
$TTC1=mysql_fetch_array($C1);
$ttdep="dep$i";
$$ttdep=$TTC1[0];
$ttotdep=$ttotdep+$$ttdep;
}
?>

<td><font size="1"><?php  echo $N3;  ?></td>
<td align="left"><font size="1" <?php if($dep1>0 ){ echo "color=red";}?>><?php echo number_format(abs($dep1), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($dep2>0 ){ echo "color=red";}?>><?php echo number_format(abs($dep2), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($dep3>0 ){ echo "color=red";}?>><?php echo number_format(abs($dep3), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($dep4>0 ){ echo "color=red";}?>><?php echo number_format(abs($dep4), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($dep5>0 ){ echo "color=red";}?>><?php echo number_format(abs($dep5), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($dep6>0 ){ echo "color=red";}?>><?php echo number_format(abs($dep6), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($dep7>0 ){ echo "color=red";}?>><?php echo number_format(abs($dep7), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($dep8>0 ){ echo "color=red";}?>><?php echo number_format(abs($dep8), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($dep9>0 ){ echo "color=red";}?>><?php echo number_format(abs($dep9), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($dep10>0 ){ echo "color=red";}?>><?php echo number_format(abs($dep10), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($dep11>0 ){ echo "color=red";}?>><?php echo number_format(abs($dep11), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($dep12>0 ){ echo "color=red";}?>><?php echo number_format(abs($dep12), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($ttotdep>0 ){ echo "color=red";}?>><?php echo number_format(abs($ttotdep), 2, ',', ' ').' '.$MN[0]; ?></td> 
					
<td class="noimprime"><a href="MenuUtilisation.php?valeur=charts.php&titre=<?php  echo $N51;  ?>&url=<?php  echo $url;  ?>&anne=<?php echo $dte1; ?>&det=<?php echo $N3; ?>&inv1=<?php echo $dep1; ?>&inv2=<?php echo $dep2; ?>&inv3=<?php echo $dep3; ?>&inv4=<?php echo $dep4; ?>&inv5=<?php echo $dep5; ?>&inv6=<?php echo $dep6; ?>&inv7=<?php echo $dep7; ?>&inv8=<?php echo $dep8; ?>&inv9=<?php echo $dep9; ?>&inv10=<?php echo $dep10; ?>&inv11=<?php echo $dep11; ?>&inv12=<?php echo $dep12; ?>" target="_blank"><i class="icon-bar-chart"></i></a>	</td>	

<input type="hidden" id="dep1"  value="<?php echo abs($dep1);  ?>" name="dep1">
<input type="hidden" id="dep1"  value="<?php echo abs($dep2);  ?>" name="dep2">
<input type="hidden" id="dep1"  value="<?php echo abs($dep3);  ?>" name="dep3">
<input type="hidden" id="dep1"  value="<?php echo abs($dep4);  ?>" name="dep4">
<input type="hidden" id="dep1"  value="<?php echo abs($dep5);  ?>" name="dep5">
<input type="hidden" id="dep1"  value="<?php echo abs($dep6);  ?>" name="dep6">
<input type="hidden" id="dep1"  value="<?php echo abs($dep7);  ?>" name="dep7">
<input type="hidden" id="dep1"  value="<?php echo abs($dep8);  ?>" name="dep8">
<input type="hidden" id="dep1"  value="<?php echo abs($dep9);  ?>" name="dep9">
<input type="hidden" id="dep1"  value="<?php echo abs($dep10);  ?>" name="dep10">
<input type="hidden" id="dep1"  value="<?php echo abs($dep11);  ?>" name="dep11">
<input type="hidden" id="dep1"  value="<?php echo abs($dep12);  ?>" name="dep12">		
</tr>
<tr role="row" class="filter"  style="background-color:#ececec;height:20px;">
<?php
$ttotsal=0;
for ($i=1;$i<=12;$i++){

$d = sprintf("%02d",$i);
$contrente4="Date_paiment like '%$dte1%-%$d%-%'";
$ttsal="sal$i";
$$ttsal=0;
$C1=mysql_query("select  id   from paiment_salaire where $contrente4 ")or die(mysql_error());
while($TTC1=mysql_fetch_array($C1)){
$Tot=mysql_query("select *  from salaire_payer where  id_payment='$TTC1[0]' ")or die(mysql_error());
while($Tot_S=mysql_fetch_array($Tot)){
$Currncy=mysql_query("select Valeur_Devise from currency where Abreviation_Monnai='$Tot_S[4]'");
$MNTemp=mysql_fetch_array($Currncy);
$$ttsal=$$ttsal+($Tot_S[2]*$MNTemp[0]/$Tot_S[5]);

}

}
$ttotsal =$ttotsal+$$ttsal;
}



?>
<td><font size="1"><?php  echo $N4;  ?></td>
<td align="left"><font size="1" <?php if($sal1>0 ){ echo "color=red";}?>><?php echo number_format(abs($sal1), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($sal2>0 ){ echo "color=red";}?>><?php echo number_format(abs($sal2), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($sal3>0 ){ echo "color=red";}?>><?php echo number_format(abs($sal3), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($sal4>0 ){ echo "color=red";}?>><?php echo number_format(abs($sal4), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($sal5>0 ){ echo "color=red";}?>><?php echo number_format(abs($sal5), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($sal6>0 ){ echo "color=red";}?>><?php echo number_format(abs($sal6), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($sal7>0 ){ echo "color=red";}?>><?php echo number_format(abs($sal7), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($sal8>0 ){ echo "color=red";}?>><?php echo number_format(abs($sal8), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($sal9>0 ){ echo "color=red";}?>><?php echo number_format(abs($sal9), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($sal10>0 ){ echo "color=red";}?>><?php echo number_format(abs($sal10), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($sal11>0 ){ echo "color=red";}?>><?php echo number_format(abs($sal11), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($sal12>0 ){ echo "color=red";}?>><?php echo number_format(abs($sal12), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if($ttotsal>0 ){ echo "color=red";}?>><?php echo number_format(abs($ttotsal), 2, ',', ' ').' '.$MN[0]; ?></td> 
					
<td class="noimprime"><a href="MenuUtilisation.php?valeur=charts.php&titre=<?php  echo $N51;  ?>&url=<?php  echo $url;  ?>&anne=<?php echo $dte1; ?>&det=<?php echo $N4; ?>&inv1=<?php echo $sal1; ?>&inv2=<?php echo $sal2; ?>&inv3=<?php echo $sal3; ?>&inv4=<?php echo $sal4; ?>&inv5=<?php echo $sal5; ?>&inv6=<?php echo $sal6; ?>&inv7=<?php echo $sal7; ?>&inv8=<?php echo $sal8; ?>&inv9=<?php echo $sal9; ?>&inv10=<?php echo $sal10; ?>&inv11=<?php echo $sal11; ?>&inv12=<?php echo $sal12; ?>" target="_blank"><i class="icon-bar-chart"></i></a>	</td>	

<input type="hidden" id="sal1"  value="<?php echo abs($sal1);  ?>" name="sal1">
<input type="hidden" id="sal1"  value="<?php echo abs($sal2);  ?>" name="sal2">
<input type="hidden" id="sal1"  value="<?php echo abs($sal3);  ?>" name="sal3">
<input type="hidden" id="sal1"  value="<?php echo abs($sal4);  ?>" name="sal4">
<input type="hidden" id="sal1"  value="<?php echo abs($sal5);  ?>" name="sal5">
<input type="hidden" id="sal1"  value="<?php echo abs($sal6);  ?>" name="sal6">
<input type="hidden" id="sal1"  value="<?php echo abs($sal7);  ?>" name="sal7">
<input type="hidden" id="sal1"  value="<?php echo abs($sal8);  ?>" name="sal8">
<input type="hidden" id="sal1"  value="<?php echo abs($sal9);  ?>" name="sal9">
<input type="hidden" id="sal1"  value="<?php echo abs($sal10);  ?>" name="sal10">
<input type="hidden" id="sal1"  value="<?php echo abs($sal11);  ?>" name="sal11">
<input type="hidden" id="sal1"  value="<?php echo abs($sal12);  ?>" name="sal12">					
</tr>

<!--   -->
<tr role="row" class="filter"  style="background-color:#ececec;height:20px;">
<td><font size="1"><?php  echo $N6;  ?></td>
<td align="left"><font size="1" <?php if(($inv1-$com1-$dep1-$sal1)<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv1-$com1-$dep1-$sal1), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if(($inv2-$com2-$dep2-$sal2)<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv2-$com2-$dep1-$sal1), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if(($inv3-$com3-$dep3-$sal3)<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv3-$com3-$dep3-$sal3), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if(($inv4-$com4-$dep4-$sal4)<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv4-$com4-$dep4-$sal4), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if(($inv5-$com5-$dep5-$sal5)<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv5-$com5-$dep5-$sal5), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if(($inv6-$com6-$dep6-$sal6)<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv6-$com6-$dep6-$sal6), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if(($inv7-$com7-$dep7-$sal7)<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv7-$com7-$dep7-$sal7), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if(($inv8-$com8-$dep8-$sal8)<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv8-$com8-$dep8-$sal8), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if(($inv9-$com9-$dep9-$sal9)<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv9-$com9-$dep9-$sal9), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if(($inv10-$com10-$dep10-$sal10)<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv10-$com10-$dep10-$sal10), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if(($inv11-$com11-$dep11-$sal11)<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv11-$com11-$dep11-$sal11), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if(($inv12-$com12-$dep12-$sal12)<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv12-$com12-$dep12-$sal12), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if(($ttotinv-$ttotcom-$ttotdep-$ttotsal)<0 ){ echo "color=red";}?>><?php echo number_format(abs($ttotinv-$ttotcom-$ttotdep-$ttotsal), 2, ',', ' ').' '.$MN[0]; ?></td> 
					
<td class="noimprime"><a href="MenuUtilisation.php?valeur=charts.php&titre=<?php  echo $N51;  ?>&url=<?php  echo $url;  ?>&anne=<?php echo $dte1; ?>&det=<?php echo $N6; ?>&inv1=<?php echo $inv1-$com1-$dep1-$sal1; ?>&inv2=<?php echo $inv2-$com2-$dep2-$sal2; ?>&inv3=<?php echo $inv3-$com3-$dep3-$sal3; ?>&inv4=<?php echo $inv4-$com4-$dep4-$sal4; ?>&inv5=<?php echo $inv5-$com5-$dep5-$sal5; ?>&inv6=<?php echo $inv6-$com6-$dep6-$sal6; ?>&inv7=<?php echo $inv7-$com7-$dep7-$sal7; ?>&inv8=<?php echo $inv8-$com8-$dep8-$sal8; ?>&inv9=<?php echo $inv9-$com9-$dep9-$sal9; ?>&inv10=<?php echo $inv10-$com10-$dep10-$sal10; ?>&inv11=<?php echo $inv11-$com11-$dep11-$sal11; ?>&inv12=<?php echo $inv12-$com12-$dep12-$sal12; ?>" target="_blank"><i class="icon-bar-chart"></i></a>	</td>	
<input type="hidden" id="gross1"  value="<?php echo ($inv1-$com1-$dep1-$sal1);  ?>" name="profit1">
<input type="hidden" id="profit1"  value="<?php echo ($inv2-$com2-$dep2-$sal2);  ?>" name="profit2">
<input type="hidden" id="profit1"  value="<?php echo ($inv3-$com3-$dep3-$sal3);  ?>" name="profit3">
<input type="hidden" id="profit1"  value="<?php echo ($inv4-$com4-$dep4-$sal4);  ?>" name="profit4">
<input type="hidden" id="profit1"  value="<?php echo ($inv5-$com5-$dep5-$sal5);  ?>" name="profit5">
<input type="hidden" id="profit1"  value="<?php echo ($inv6-$com6-$dep6-$sal6);  ?>" name="profit6">
<input type="hidden" id="profit1"  value="<?php echo ($inv7-$com7-$dep7-$sal7);  ?>" name="profit7">
<input type="hidden" id="profit1"  value="<?php echo ($inv8-$com8-$dep8-$sal8);  ?>" name="profit8">
<input type="hidden" id="profit1"  value="<?php echo ($inv9-$com9-$dep9-$sal9);  ?>" name="profit9">
<input type="hidden" id="profit1"  value="<?php echo ($inv10-$com10-$dep10-$sal10);  ?>" name="profit10">
<input type="hidden" id="profit1"  value="<?php echo ($inv11-$com11-$dep11-$sal11);  ?>" name="profit11">
<input type="hidden" id="profit1"  value="<?php echo ($inv12-$com12-$dep12-$sal12);  ?>" name="profit12">
</tr>
</tr>
<?php  /*
<tr role="row" class="filter"  style="background-color:#ececec;height:20px;">
<td><font size="1"><?php  echo $N6;  ?></td>
<?php
$Profit_Tax=mysql_query("select valeur from tax where  Profit='111' ")or die(mysql_error());
while($Tax=mysql_fetch_array($Profit_Tax)){
$Net1=$Net1-($Net1*$Tax[0]*0.01);
$Net2=$Net2-($Net2*$Tax[0]*0.01);;
}
  ?>
<td align="left"><font size="1" <?php if($Net1<0 ){ echo "color=red";}?>><?php echo number_format(abs($Net1), 2, ',', ' ').' '.$MN[0];; ?></td> 
					
<?php if("$headertab[0]" != "$headertab[1]"){ ?>
<td align="left"><font size="1" <?php if($Net2<0 ){ echo "color=red";}?>><?php echo number_format(abs($Net2), 2, ',', ' ').' '.$MN[0];; ?></td> 
					
<?php } ?>
<td><a><a><i class="icon-bar-chart"></i></a>	</a></td>	
</tr>

*/  ?>
<input type="hidden"  onclick="document.form.submit();"name="go_to" value="Graphe" >
