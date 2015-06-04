<?php

if($_SESSION['login']==null ||  $_SESSION['pwd']==null){
header("Location:index.php");
}
?>

<?php
if("$permission[1]"=="Administrateur" || "$permission[10]"=='10'){ 
foreach( $employees as $employee ) 
{ 
    $V11 = $employee->getElementsByTagName( "e11" );  $N11 = $V11->item(0)->nodeValue;
    $V12 = $employee->getElementsByTagName( "e12" );  $N12 = $V12->item(0)->nodeValue;
    $V13 = $employee->getElementsByTagName( "e13" );  $N13 = $V13->item(0)->nodeValue;
    $V14 = $employee->getElementsByTagName( "e14" );  $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" );  $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" );  $N16 = $V16->item(0)->nodeValue;
  $V17 = $employee->getElementsByTagName( "e17" );  $N17 = $V17->item(0)->nodeValue;
  $V18 = $employee->getElementsByTagName( "e18" );  $N18 = $V18->item(0)->nodeValue;
  $V19 = $employee->getElementsByTagName( "e19" );  $N19 = $V19->item(0)->nodeValue;
  $V20 = $employee->getElementsByTagName( "e20" );  $N20 = $V20->item(0)->nodeValue;
  $V21 = $employee->getElementsByTagName( "e21" );  $N21 = $V21->item(0)->nodeValue;
  $V22 = $employee->getElementsByTagName( "e22" );  $N22 = $V22->item(0)->nodeValue;
  $V23 = $employee->getElementsByTagName( "e23" );  $N23 = $V23->item(0)->nodeValue;
  
include ("Connection.php");
$CIN=$_GET['CIN'];

$s=mysql_query("select * from salaried  where CIN='$CIN' ");

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
		<table class="table table-striped table-bordered table-hover" id="sample_1" >
		
<thead> 
<tr >

<th><font size="1"><?php echo $N12; ?></th>
<th><font size="1"><?php echo $N17; ?></th>
<th><font size="1"><?php echo $N18; ?></th>
<th><font size="1"><?php echo $N19; ?></th>
<th><font size="1"><?php echo $N20; ?></th>
<th><font size="1"><?php echo $N21; ?></font></th>
<th><font size="1"><?php echo $N14; ?></font></th>
<th ><font size="1"><?php echo $N22; ?></th>
</tr>

</thead>
<tbody>
<?php while($admin=mysql_fetch_array($s)){
?>
<tr >
  
<td><font size="1"><?php echo $admin[17]."/".$admin[18];?></td>
<td><font size="1"><?php echo number_format($admin[1],2,',','.');?></td>
<td><font size="1"><?php echo number_format($admin[9],2,',','.');?></td>
<td><font size="1"><?php echo number_format($admin[14],2,',','.');?></td>
<td><font size="1"><?php echo number_format($admin[15],2,',','.');?></td>
<td><font size="1"><?php echo number_format($admin[16],2,',','.');?></td>
<?php if($admin['pay']==1){
$etat="success";
$msg="$N15";
}else{
$etat="danger";$msg="$N16";
}
?>
<td><span class="label label-sm label-<?php echo $etat; ?>"><?php echo $msg; ?></span></td>
<td align="center">
<?php if($admin['pay']==0){ ?>
<a href="MenuUtilisation.php?valeur=updateSalaire.php&Nom=<?php echo $admin[0];?>&MS=<?php echo $admin[17];?>&AN=<?php echo $admin[18];?>&url=<?php echo $_GET['url'];?>&titre=<?php echo $_GET['titre'];?>&type=update"><i class="fa fa-pencil-square-o"></i></a>
<a href="MenuUtilisation.php?valeur=Gestion_Salaire.php&type=delete&Nom=<?php echo $admin[0];?>&MS=<?php echo $admin[17];?>&AN=<?php echo $admin[18];?>&url=<?php echo $_GET['url'];?>&titre=<?php echo $_GET['titre'];?>" onclick="return confirmLink(this) ;"><i class="fa fa-trash-o"></i></a>
<?php } ?>

<a href="Bulletin_Salaires.php?Nom=<?php echo $admin[0];?>&MS=<?php echo $admin[17];?>&AN=<?php echo $admin[18];?>" target="_blank"><i class="fa fa-file-text" title="<?php echo $N23; ?>"></i>  </a></td></tr>
<?php }

}

?>
</tbody>
</table>
<div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
                    <a href="MenuUtilisation.php?valeur=formulaire_salaire.php&titre=<?php  echo strtoupper($_GET['titre']);  ?>&url=<?php echo $_GET['url'].".".$N11; ?>&CIN=<?php echo  $CIN; ?>" target="_parent">
					
											<button  class="btn blue-hoki"><?php echo $N13; ?></button>
											
										
									</a>
									</div>
									 </div>									
                                    </div>
</div>
</div>
<?php 
}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>
