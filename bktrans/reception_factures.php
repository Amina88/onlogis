<head>
<link href="css/style1.css" rel="stylesheet" type="text/css" />

</head>
<?php

if("$permission[1]"=="Administrateur" || "$permission[20]"=='20'){
$comdhist=$N11;

foreach( $employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V4 = $employee->getElementsByTagName( "e4" ); $N4 = $V4->item(0)->nodeValue; 
  $V5 = $employee->getElementsByTagName( "e5" ); $N5 = $V5->item(0)->nodeValue;
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
 $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;  $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;  $V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue; $V13 = $employee->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue; 
$message=$N13;
include ("Connection.php");

$f ="";
$req="";
if(isset($_POST['id'])){
$f=$_POST['id'];
}else{
$f=$_GET['id'];
}


$req="where reference='$f'";


$s=mysql_query("select * from purchase  $req ");
?>

<form method="POST" action="" id="form" name="form" class="search-form">
<div class="input-group">
					<input type="text" class="form-control input-sm" placeholder="<?php echo $N2; ?>..." name="id">
					<span class="input-group-btn">
					<a  href="#" onclick="document.form.submit();" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
</form>
<form method="POST" action="Sauvgarder_reception.php?&texthisto=<?php echo $comdhist; ?>&message=<?php echo $message; ?>">
<table class="table table-bordered table-hover " >
										
			<?php 
			$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
$date=date('Y/m/d');

			$admin=mysql_fetch_array($s);
			$get_tot = mysql_query("SELECT * FROM  `vuepurchasetotale` where BonCommande='$admin[0]'");
               $tot=mysql_fetch_array($get_tot);
			   if($tot){
			   $tot1=$tot[3];
		 
?><thead> 
				<tr> 
    				<th><font size="1"><?php echo $N2; ?></h6></th> 
    				<th><font size="1"><?php echo $N1; ?></h6></th> 
    				<th><font size="1"><?php echo $N3; ?> </h6></th> 
					<th><font size="1"><?php echo $N6; ?></h6></th>  
    				<th><font size="1"><?php echo $N4; ?></h6></th> 
    				<th><font size="1"><?php echo $N5; ?></h6></th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr > 
    				<td><font size="2"><input type="Text"  class="form-control"  readonly name="cmd" value="<?php echo $admin[0];?>" style="width:100px"></td> 
					<td><font size="2"><input type="Text"  class="form-control"   name="Reference" value="<?php echo $admin[15];?>"  required style="width:120px"></td>
    				<td><font size="2"><?php echo  number_format($tot1,2,',','.')."&nbsp;".$tot[4]; ?></td> 
    				<td><font size="2"><?php echo $admin[4];?><input type="hidden" value="<?php echo $admin[4];?>" id="dateC" ></td> 
    				<td><div class="col-md-4">
					<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  <?php if($admin[17]!=NULL){ echo "disabled"; } ?>  name="DRC" id="dateA" value="<?php echo $admin[17]; ?>"  required   style="width:100px"  >
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div></div>
					
					</td> 
					<td><input type="checkbox" <?php if($admin[17]!=NULL){ echo "checked"; } ?> class="form-control"  name="recept" title="<?php echo $N7; ?>" required    style="width:30px;height:30px"></a></td> 
				
				</tr> 
				
			</tbody> 
			
<?php }else{ ?>
<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> <td colspan="5">
				
				<?php 
				$s=mysql_query("select * from purchase where reference like '%$f%' Limit 0,1");

				if($admin=mysql_fetch_array($s)){
				
				echo $N12; ?>:<br>
				
				
				<?php
}else{
echo "$N11 ('$f')"; }
				
				$s=mysql_query("select * from purchase where reference like '%$f%'");

				while($admin=mysql_fetch_array($s)){
			
				?>
    				<a href="MenuUtilisation.php?valeur=reception_factures.php&&titre=Reception%20de%20facture&id=<?php echo $admin[0]; ?>"><?php echo $admin[0]; ?></a>;
					<?php } ?>
					
					</td> 
    					</tr> 
				
			</tbody> 
			<?php
}
?>
			 </table><br>
			<div id="massage_error">
			
			</div>
			<br />
			<?php if($admin[17]==NULL){ ?>
			<div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"  onMouseMove="comparerDate('dateA','dateC','massage_error');" name="ajour" ><?php echo $N8; ?></button>
											
										</div>
									 </div>									
                                    </div>
           </form>
		
			<?php }else{
			if($admin[18]==NULL){
?>
</form>
<form method="POST" action="Sauvgarder_reception.php" enctype="multipart/form-data">
<font  size="2" ><?php echo $N9; ?> :</font>

<table>
<td ><input type="file" name="test" class="form-control"  required="required" ></td>
<td ><input type="hidden" name="cmd" value="<?php echo $admin[0];?>" required="required" ></td>
</tr>
</table>
<br>
<div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="attacher"  ><?php echo $N10; ?></button>
											
										</div>
									 </div>									
                                    </div></form>

<?php
		}else{
		?><font color="#0babf6" size="4" ><?php echo $N9; ?> :</font>
		<a href="bktrans_data/<?php echo $admin[18];?>" target="_blank"><font color="red" size="2" ><img src="images/pdf2.png" title="<?php echo $admin[18];?>"></font></a>
<?php
}		}
}
}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>