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
$request=mysql_query("select * from supplier where Nom_Soc='$Nom_Soc'");
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
  $N16 = $V16->item(0)->nodeValue;

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
						
					</div>
					
				</article>
<div name='mondiv1' id='mondiv1' >
<table >
<caption><font color="red"><?php echo $N4; ?> </caption>
<tr>
<td><br> <?php echo $N5; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[0];?></td>
</tr>
<tr>
<td><br><?php echo $N6; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[3]."&nbsp;". $admin[2]."&nbsp;".$admin[4];?></td>
</tr>
<tr>
<td><br><?php echo $N7; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[5];?></td>
</tr>
<tr>
<td><br><?php echo $N8; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[6];?></td>
</tr>
<tr>
<td><br><?php echo $N9; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[7];?></td>
</tr>
</table>
</div>
<div name='mondiv2' id='mondiv2' class='cachediv'>
<table >
<caption><font color="red"><?php echo $N4; ?> </caption>
<tr>
<td><br> <?php echo $N10; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[8];?></td>
</tr>
<tr>
<td><br><?php echo $N11; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[9];?></td>
</tr>
<tr>
<td><br><?php echo $N12; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[10];?></td>
</tr>
<tr>
<td><br><?php echo $N13; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[11];?></td>
</tr>
<tr>
<td><br><?php echo $N14; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[12];?></td>
</tr>
<tr>
<td><br><?php echo $N15; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[13];?></td>
</tr>
</table></div>
<div name='mondiv3' id='mondiv3' class='cachediv'>
<table >
<caption><font color="red"><?php echo $N4; ?> </caption>
<tr>
<td><br> <?php echo $N16; ?></td>
<td><br>&nbsp; : &nbsp;</td>
<td><br><?php echo $admin[1];?></td>
</tr>
</table>

</div>
<?php } ?>