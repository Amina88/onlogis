<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>
<?php
include ("Connection.php");
$Nom_Soc=$_GET['Nom_Soc'];
$request=mysql_query("select * from custemer where Nom_Soc='$Nom_Soc'");
$admin=mysql_fetch_array($request);
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
  $N28 = $V28->item(0)->nodeValue;

?>

<head><style type="text/css" media="all">
	.cachediv {
display: none;
}
</style>
<script type="text/javascript">

	function DivStatus( nom, numero )
		{
			var divID = nom + numero;
			if ( document.getElementById && document.getElementById( divID ) ) // Pour les navigateurs récents
				{
					Pdiv = document.getElementById( divID );
					PcH = true;
		 		}
			else if ( document.all && document.all[ divID ] ) // Pour les veilles versions
				{
					Pdiv = document.all[ divID ];
					PcH = true;
				}
			else if ( document.layers && document.layers[ divID ] ) // Pour les très veilles versions
				{
					Pdiv = document.layers[ divID ];
					PcH = true;
				}
			else
				{
					
					PcH = false;
				}
			if ( PcH )
				{
					Pdiv.className = ( Pdiv.className == 'cachediv' ) ? '' : 'cachediv';
				}
		}
		
	
	function MontreTout( nom,NumDiv )
		{	
			
			if ( document.getElementById ) // Pour les navigateurs récents
				{
							SetDiv = document.getElementById( nom + NumDiv );
							if ( SetDiv && SetDiv.className != '' )
								{
									DivStatus( nom, NumDiv );
									
									for (NumDi = 1; NumDi < 5; NumDi++)
						{ 
						
						if(NumDi==NumDiv){
						NumDi++;
						}
							SetDiv = document.getElementById( nom + NumDi );
							if ( SetDiv && SetDiv.className != 'cachediv' )
								{
									DivStatus( nom, NumDi );
								}
							
						}
								}
						
						
				}
			
		}
		

		
</script></head>
<article class="stats_overview">
					<div class="overview_today">
						<p class="overview_count"><a href="javascript:MontreTout( 'mondiv', '1' )"  ><?php echo $N1; ?></a></p>
						<p class="overview_count"><a href="javascript:MontreTout( 'mondiv', '2' )" ><?php echo $N2; ?></a></p>
						<p class="overview_count"><a href="javascript:MontreTout( 'mondiv', '3' )" ><?php echo $N3; ?></a></p>
						
						<p class="overview_count"><a href="javascript:MontreTout( 'mondiv', '4' )" ><?php echo $N4; ?></a></p>
						<p class="overview_count"><a href="javascript:MontreTout( 'mondiv', '5' )" ><?php echo $N5; ?></a></p>
						
					</div>
					
				</article>
<div name='mondiv1' id='mondiv1' >
<table >
<caption><font color="red"><?php echo $N6; ?> </caption>
<tr>
<td><br><?php echo $N7; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[0];?></td>
</tr>
<tr>
<td><br><?php echo $N8; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[3]."&nbsp;". $admin[2]."&nbsp;".$admin[4];?></td>
</tr>
<tr>
<td><br><?php echo $N9; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[5];?></td>
</tr>
<tr>
<td><br><?php echo $N10; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[6];?></td>
</tr>
<tr>
<td><br><?php echo $N11; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[7];?></td>
</tr>
</table>
</div>
<div name='mondiv2' id='mondiv2' class='cachediv'>
<table >
<caption><font color="red"><?php echo $N6; ?></caption>
<tr>
<td><br> <?php echo $N12; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[8];?></td>
</tr>
<tr>
<td><br><?php echo $N13; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[9];?></td>
</tr>
<tr>
<td><br><?php echo $N14; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[10];?></td>
</tr>
<tr>
<td><br><?php echo $N15; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[11];?></td>
</tr>
<tr>
<td><br><?php echo $N16; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[12];?></td>
</tr>
<tr>
<td><br><?php echo $N17; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[13];?></td>
</tr>
<tr>
<td><br><?php echo $N18; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[14];?></td>
</tr>
</table></div>
<div name='mondiv3' id='mondiv3' class='cachediv'>
<table >
<caption><font color="red"><?php echo $N6; ?> </caption>
<tr>
<td><br> <?php echo $N19; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[1];?></td>
</tr>
<tr>
<td><br><?php echo $N20; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[17];?></td>
</tr>
</table>

</div>
<div name='mondiv4' id='mondiv4' class='cachediv'>
<table><th ><font color="#0babf6" ><?php echo $N4; ?></font></th>
<tr>
<td ><?php echo $N21; ?></td>
<td>&nbsp;:&nbsp;</td>
<td><?php echo $admin[15];?></td></tr>
<tr>
<td ><?php echo $N22; ?></td>
<td>&nbsp;:&nbsp;</td>
<td><?php echo $admin[16];?></td>
</tr>
</table>

				
</form></div>
<div name='mondiv5' id='mondiv5' class='cachediv'>
<font color="red" size="3"><?php echo $N5; ?></font><br>
<table>
<?php $s=mysql_query("select * from default_billing ");
?>
<br><br>
<form method="GET" action="Mettre_frais_client_ajour.php" id="form" name="form">
<input type="hidden" value="<?php echo $admin[0];?>" name="client">
<table class="tablesorter" style="width:70%" > 
			<thead> 
				<tr> 
    				<th><font size="1"><?php echo $N23; ?></h5></th> 
    				<th><font size="1"><?php echo $N24; ?></h5></th>  
					<th><font size="1"><?php echo $N25; ?></h5></th> 
						<th><font size="1"><?php echo $N26; ?></h5></th> 
					<th><font size="1"><?php echo $N27; ?></h5></th>
				</tr> 
			</thead> 
			<?php $i=0; while($admi=mysql_fetch_array($s)){
			$val=mysql_query("SELECT * FROM  `costs_value` where Numro=$admi[0] AND client='$admin[0]'");
			$ad=mysql_fetch_array($val);
			$i++;
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
    				<td><input type="checkbox" value="<?php echo $admi[0];?>" name="<?php  echo "etat".$admi[0];?>" <?php if($ad[3]==1){echo "checked";} ?>></a></td> 
    				<td><font size="1"><?php echo $admi[1] ;?></td> 
    				<td><font size="1"><?php echo $admi[4] ;?></td> 
					<td><font size="1"><?php echo $admi[3] ;?></td> 
    				<td><input type="text" style="width:30 px;height:20px;" value="<?php if(isset($ad[2])){echo $ad[2];}else{echo $admi[2];} ?>" name="<?php echo "val".$admi[0];?>" id="value" onKeyUP="isNum(this);"></td> 
			   </tr> 
				
			</tbody> 
			
<?php }
?>
			 </table><br>
			 <tr><td><input type="submit" value="<?php echo $N28; ?>" class="alt_btn">
			 
		
			 </form></div>
			 	 <?php } ?>