<?php
$TTP1=0;
$TTP2=0;
$ttotinv=0;
$ttotcom=0;
for ($i=1;$i<=12;$i++){

$d = sprintf("%02d",$i);
$contrente2="date_c like '%$dte1%-%$d%-%'";
$P1=mysql_query("select  SUM(Net*taux*devise ) as Total from finalinvoice where $contrente2  and draft='1'")or die(mysql_error());
$C1=mysql_query("select  SUM(Net_Paye*taux*DeviseElement ) as Total from finalpurchase where $contrente2  and OperationCommande!='' and  Livraison=1")or die(mysql_error());

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
					
<td><a><i class="icon-bar-chart"></i></a>	</td>	
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
					
<td><a><i class="icon-bar-chart"></i></a>	</td>
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
					
<td><a><i class="icon-bar-chart"></i></a>	</td>
</tr>
<tr role="row" class="filter"  style="background-color:#ececec;height:20px;">
<?php
$ttotdep=0;
for ($i=1;$i<=12;$i++){

$d = sprintf("%02d",$i);
$contrente2="date_c like '%$dte1%-%$d%-%'";
$C1=mysql_query("select  SUM(Net_Paye*taux*DeviseElement ) as Total from finalpurchase where $contrente2   and OperationCommande='' and  Livraison=1")or die(mysql_error());
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
					
<td><a><i class="icon-bar-chart"></i></a>	</td>
		
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
					
<td><a><i class="icon-bar-chart"></i></a>	</td>
					
</tr>

<!--   -->
<tr role="row" class="filter"  style="background-color:#ececec;height:20px;">
<td><font size="1"><?php  echo $N6;  ?></td>
<td align="left"><font size="1" <?php if(($inv1-$com1-$dep1-$sal1)<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv1-$com1-$dep1-$sal1), 2, ',', ' ').' '.$MN[0]; ?></td> 
<td align="left"><font size="1" <?php if(($inv2-$com2-$dep2-$sal2)<0 ){ echo "color=red";}?>><?php echo number_format(abs($inv2-$com2-$dep2-$sal2), 2, ',', ' ').' '.$MN[0]; ?></td> 
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
					
<td><a><i class="icon-bar-chart"></i></a>	</td>
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