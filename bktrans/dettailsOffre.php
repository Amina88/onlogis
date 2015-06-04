<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
	
  </script>
  <?php } 
  
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
  $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" ); 
  $N16 = $V16->item(0)->nodeValue;
  $V17 = $employee->getElementsByTagName( "e17" ); 
  $N17 = $V17->item(0)->nodeValue;
  $V18 = $employee->getElementsByTagName( "e18" ); 
  $N18 = $V18->item(0)->nodeValue;
  $V19 = $employee->getElementsByTagName( "e19" ); 
  $N19 = $V19->item(0)->nodeValue;
  $V20 = $employee->getElementsByTagName( "e20" ); 
  $N20 = $V20->item(0)->nodeValue;
  $V21 = $employee->getElementsByTagName( "e21" ); 
  $N21 = $V21->item(0)->nodeValue;
  $V22 = $employee->getElementsByTagName( "e22" ); 
  $N22 = $V22->item(0)->nodeValue;

  
$autre_net=0;
$autre_TVA=0;
$autre_TOTAL=0;
$net=0;
$TVA=0;
$TOTAL=0;
$el="";
$autre_monnaie="";

$prix=0;
$ref=$_GET['Ref'];
include ("Connection.php");
//echo "select * from offre where id_offre='$ref' ";
$facture=mysql_query("select * from offre where id_offre='$ref' ");
$fct=mysql_fetch_array($facture);



$date=$fct[7];

$datep=$fct[6];
$clireq=mysql_query("select * from custemer where Nom_Soc='$fct[2]'");
$cli=mysql_fetch_array($clireq);

?>

<div class="row">
<div class="col-md-6 col-sm-12">
												<div class="portlet blue-hoki box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i><?php echo $N5;?>
														</div>
														
													</div>
													<div class="portlet-body">
														<div class="row static-info">
															<div class="col-md-5 name">
																<?php echo $N16;?> :
															</div>
															<div class="col-md-7 value">
															<?php echo $cli[0]; ?>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																<?php echo $N21;?> :
															</div>
															<div class="col-md-7 value">
																<?php echo $cli[5]; ?>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																<?php echo $N17;?>	:
															</div>
															<div class="col-md-7 value">
																<?php echo $cli[6]; ?>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 <?php echo $N18;?>	:
															</div>
															<div class="col-md-7 value">
																<?php echo $cli[18]; ?>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																<?php echo $N19;?>	:
															</div>
															<div class="col-md-7 value">
																<?php echo $cli[19]; ?>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																<?php echo $N20;?>	:
															</div>
															<div class="col-md-7 value">
																<?php echo $cli[20]; ?>
															</div>
														</div>
														</div>
														</div>
												</div>
									<div class="col-md-6 col-sm-12">
												<div class="portlet yellow-crusta box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i><?php echo $N22; ?>
														</div>
													
													</div>
													<div class="portlet-body">
														
														<div class="row static-info">
															<div class="col-md-5 name">
																<?php echo $N1; ?>:
															</div>
															<div class="col-md-7 value">
																<?php echo $fct[1]; ?>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																<?php echo $N8; ?> :
															</div>
															<div class="col-md-7 value">
																<?php echo $fct[6]; ?>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																<?php echo $N10; ?> :
															</div>
															<div class="col-md-7 value">
																<?php echo $fct[0]; ?>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																<?php echo $N7; ?> :
															</div>
															<div class="col-md-7 value">
																<?php echo $fct[3]; ?>
															</div>
														</div>
															<div class="row static-info">
															<div class="col-md-5 name">
															<br>
															</div>
															<div class="col-md-7 value">
																
															</div>
														</div>
															<div class="row static-info">
															<div class="col-md-5 name">
															
															</div>
															<div class="col-md-7 value">
															
															</div>
														</div>
														
														
														
													
													</div>
												</div>

</div>
</div>

<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="portlet grey-cascade box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i><?php echo $N9; ?>
														</div>
														
													</div>
												<div class="portlet-body">
													<div class="table-responsive">
														<table class="table table-hover table-bordered table-striped">
															<thead>
															<tr>
																<th>
																	<?php echo $N10; ?>
																</th>
																<th>
																	 <?php echo $N11; ?>
																</th>
																<th>
																	 <?php echo $N12; ?>
																</th>
																<th>
																	<?php echo $N13; ?>
																</th>
																<th>
																	 <?php echo $N14; ?>
																</th>
																<th>
																	 <?php echo $N15; ?>
																</th>
												
															</tr>
															</thead>
														<tbody>
														<?php
                                      $element=mysql_query("select * from element_offre where Reference='$fct[1]'");
 	                                         while($el=mysql_fetch_array($element)){
											 
                                                   $monnaie=$el[5];
                                                   $qt=$el[2];
                                                   $PU=$el[3];
                                                   $prix=$qt*$PU;
                                                   $tva=($el[4]/100)*$prix;
                                                   $total=$tva+$prix;
                                                   $net=$net+$prix;
                                                   $TVA=$TVA+$tva;
                                                   $TOTAL=$TOTAL+$total;
                                                   $T=number_format($total,2,',','.');
                                                   $TV=number_format($tva,2,',','.');
                                                   $N=number_format($prix,2,',','.');
                                                   $PUN=number_format($PU,2,',','.');
                                                        ?>
														<tr>
																<td>
																	<?php echo $el[1] ; ?>
																</td>
																<td>
																<?php echo $qt ?>	
																</td>
																<td>
																<?php echo $PUN.'  '.  $monnaie ?>
																</td>
																<td>
																<?php echo $N.'  '.$monnaie ?>	
																</td>
																<td>
																<?php echo $TV .'  '. $monnaie ?> 
																</td>
																<td>
																<?php echo $T  .'  '.$monnaie ?>	
																</td>
														</tr>
														<?php

                                                    $nett=$net*$el[6];
                                                    $TVAA=$TVA*$el[6];
                                                    $TOTALL=$TOTAL*$el[6];
                                                            }
                                                             ?>
														</tbody>
													</table>
													</div>
												</div>
											</div>
										</div>
							</div>

<div class="row">
											<div class="col-md-6">
											</div>
								<div class="col-md-6 ">
												<div class="well" >
													<div class="row static-info ">
														<div class="col-md-3 name">
															<?php echo $N13; ?>:
														</div>
														<div class="col-md-7 value">
															 <?php  echo number_format($nett,2,',','.')." ".$fct[5] ; ?>
														</div>
													</div>
													<div class="row static-info ">
														<div class="col-md-3 name">
															 <?php echo $N14; ?>:
														</div>
														<div class="col-md-7 value">
															<?php  echo number_format($TVAA,2,',','.')." ". $fct[5] ; ?>
														</div>
													</div>
													<div class="row static-info ">
														<div class="col-md-3 name">
															 <?php echo $N15; ?>:
														</div>
														<div class="col-md-7 value">
															 <?php  echo number_format($TOTALL,2,',','.')." ".$fct[5]; ?>
														</div>
													</div>
													
													
													
												</div>
											</div>
										</div>
										<?php
$mn=mysql_query("select * from currency where Monnaie_utliser=1 ");
$Mon=mysql_fetch_array($mn);

						if($fct[5]!=$Mon[0]){ ?>
 <font size="2"><?php  echo   "1&nbsp;".$Mon[0]."=".$fct[9]."&nbsp;".$fct[5] ; ?><br><br>						
										<div class="row">
											<div class="col-md-6">
											</div>
								<div class="col-md-6 ">
												<div class="well" >
													<div class="row static-info ">
														<div class="col-md-3 name">
															<?php echo $N13; ?>:
														</div>
														<div class="col-md-7 value">
															 <?php  echo number_format($nett*$fct[9],2,',','.')." ".$Mon[0] ; ?>
														</div>
													</div>
													<div class="row static-info">
														<div class="col-md-3 name">
															 <?php echo $N14; ?>:
														</div>
														<div class="col-md-7 value">
															<?php  echo number_format($TVAA*$fct[9],2,',','.')." ". $Mon[0] ; ?>
														</div>
													</div>
													<div class="row static-info">
														<div class="col-md-3 name">
															 <?php echo $N15; ?>:
														</div>
														<div class="col-md-7 value">
															 <?php  echo number_format($TOTALL*$fct[9],2,',','.')." ".$Mon[0]; ?>
														</div>
													</div>
													
													
													
												</div>
											</div>
										</div>

<?php }

}

?>
 