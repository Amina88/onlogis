<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>

<?php 

$urloffre=$N14.".".$N18;
if("$permission[1]"=="Administrateur" || "$permission[2]"=='2'){ 
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
  $N9 = $V9->item(0)->nodeValue;
?>

<script type="text/javascript">

function Search(){
    var SRCH = null;
        if(window.XMLHttpRequest) 
        SRCH = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        SRCH = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        SRCH = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    SRCH= false;
    }
    return SRCH;
    }
  
    function SERCH_op(a){
		
    var SRCH = Search();

    SRCH.onreadystatechange = function(){
	
    if(SRCH.readyState == 4 && SRCH.status == 200)
        {
	
    leselect = SRCH.responseText;
   document.getElementById("content").innerHTML=leselect;

  
	}
    }
	
    // Ici on va voir comment faire du post
    SRCH.open("POST","verification_donne.php",true);
	
    SRCH.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

SRCH.send("opp_det="+a);

    }
</script></head>

<?php

include ("Connection.php");
$Reference=$_GET['Ref'];
$request=mysql_query("select * from invoice  where Reference='$Reference'");
$doss=mysql_query("select * from files  where Reference='$Reference'");
$req=mysql_query("select * from currency where Monnaie_utliser=1");
$requete = mysql_query("select * from operation where Ref_doss='$Reference'");
$L = mysql_query("select * from location where Dossier='$Reference'");
$LS = mysql_query("select * from  logistics_services where Dossier='$Reference'");
$M = mysql_query("select * from magasinage where Dossier='$Reference'");

$L1 = mysql_query("select * from location where Dossier='$Reference'");
$LS1 = mysql_query("select * from  logistics_services where Dossier='$Reference'");
$M1 = mysql_query("select * from magasinage where Dossier='$Reference'");
$tb_op=array();
while($admin=mysql_fetch_array($requete)){
$tb_op[]=$admin[0];
}
while($LA=mysql_fetch_array($L)){
$tb_op[]=$LA[0];
}
while($LSA=mysql_fetch_array($LS)){
$tb_op[]=$LSA[0];
}
while($MA=mysql_fetch_array($M)){
$tb_op[]=$MA[0];
}
//var_dump($tb_op);
$requete_rech = mysql_query("select * from operation where Ref_doss='$Reference'");
$monnaie=mysql_fetch_array($req);
$admin_rech=mysql_fetch_array($requete_rech);
$T1=mysql_fetch_array($L1);
$T2=mysql_fetch_array($LS1);
$T3=mysql_fetch_array($M1);
$dosss=mysql_fetch_array($doss);
if($admin_rech!=NULL || $T1!=NULL || $T2!=NULL || $T3!=NULL ){
?>  

   <div class="row">
 
  <div class="col-md-13 col-sm-12" align="right">
<a onclick="print();" class="noimprime">
					
										<i class="fa fa-print" ></i></a>
		
</div>
</div>
<div class="caption">
								
							
							<div class="cont-col1">
															<div class="label label-sm label-success">
																
																<?php echo $N1; ?> :&nbsp;&nbsp; <?php echo $Reference; ?>
															</div>
														</div>
														</div><br>
							<table class="table table-bordered table-hover "  >
								<thead>
				                 <tr > 
                                <th ><font size="1"><?php echo $N2; ?> </th>
                                <th ><font size="1"><?php echo $N3; ?> (<?php echo $monnaie[0]; ?>)</th>
                                <th ><font size="1"><?php echo $N4; ?>(<?php echo $monnaie[0]; ?>)</th>
                                <th ><font size="1"><?php echo $N5; ?></th>
                                <th ><font size="1"><?php echo $N9; ?></th>
				                 </tr> 
			                     </thead> 
								 <tbody>
			<?php 
			$t_com=0;
			$t_fact=0;
			$PL_T=0;
			foreach($tb_op as $admin){
			$com=mysql_query("select * from vuepurchasetotale  VP,purchase P  where VP.OperationCommande='$admin' and P.reference=VP.BonCommande and P.confirmation='1'");
			$OFFRE=mysql_query("select id_offre from offre where  OPERATION='$admin'");
			$OFR=mysql_fetch_array($OFFRE);
			$tot_com=0;
			$tot_com_dev=0;
			$MN_Com="";
			while($ad=mysql_fetch_array($com)){
			
			$devise=mysql_query("select * from purchase where Reference='$ad[0]'");
			$a=mysql_fetch_array($devise);
			$MN_Com=$a[7];
			if($ad[3]>0){
			$tot_com=$tot_com+($a[9]*$ad[3]);
			$t_com=$t_com+($a[9]*$ad[3]);
			}else{
			$tot_fact=$tot_fact+($a[9]*$ad[3]*-1);
			$t_fact=$t_fact+($a[9]*$ad[3]*-1);
			}
			}
			$fact=mysql_query("select * from  vueinvoicetotale P,invoice I where P.operation='$admin' And P.facture=I.id_facture and I.draft='1'");
			$tot_fact=0;
			$tot_fact_dev=0;
			$MN="";
			while($fct=mysql_fetch_array($fact)){
			$devisee=mysql_query("select * from invoice where id_facture='$fct[0]'");
			$b=mysql_fetch_array($devisee);
			if($fct[3]<0){
			$tot_com=$tot_com+($b[17]*$fct[3]*-1);
			$t_com=$t_com+($b[17]*$fct[3]*-1);
			}else{
			$tot_fact=$tot_fact+($b[17]*$fct[3]);
			$t_fact=$t_fact+($b[17]*$fct[3]);
			}
			
			$MN=$b[9];
			}
		$PL=$tot_fact-$tot_com;
		if($PL>=0){

			?>
			 
				<tr class="success"> 
				<?php 
				}else{
				?>
				<tr class="danger"> 
				
				<?php 
				}
				?>
   					<td><font size="1"><a href="javascript:SERCH_op('<?php echo $admin;?>');"><?php echo $admin;?></a></td> 
   					<td ><font size="1"><?php echo number_format(-$tot_com,2,',','.')."  ".$monnaie[0];?></td>
					<td><font size="1"><?php echo number_format($tot_fact,2,',','.')."  ".$monnaie[0];?></td>
					<td><font size="1"><?php echo number_format($PL,2,',','.')."  ".$monnaie[0];?></td>
					<td><font size="1"><a href="MenuUtilisation.php?valeur=dettailsOffre.php&Ref=<?php echo $OFR[0];?>&titre=<?php echo $N8." :  ".$OFR[0]; ?>&url=<?php echo $urloffre.".".$N8; ?>" target="_link"><?php echo $OFR[0];?></a></td>
				
				</tr> 
		
			
			<?php } 
			$PL_T=$t_fact-$t_com;
			
			
				?>
				</tbody> 
				<tbody> 
				<tr class="" > 
   					<td colspan="1"><font size="1"><font size="2"><?php echo $N6; ?></font></td> 
   					<td ><font size="1"><?php echo number_format(-$t_com,2,',','.')."  ".$monnaie[0];?></td>
					<td><font size="1"><?php echo number_format($t_fact,2,',','.')."  ".$monnaie[0];?></td>
					<td><font size="1"><?php echo number_format($PL_T,2,',','.')."  ".$monnaie[0];?></td>
					<td><font size="1"></td>
				</tr> 
			</tbody> 
			</table>
			
			<div id="content">
			
   						</div>
			
			
			<br><br>
			
						<?php }else{ ?>
						<font color="red"  size="2"><?php echo $N7; ?>  :&nbsp;&nbsp; <?php echo $Reference ; ?>   </font><br><br>
<?php } }}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>