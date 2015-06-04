<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>

<?php
foreach( $employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V4 = $employee->getElementsByTagName( "e4" ); $N4 = $V4->item(0)->nodeValue; 
  $V5 = $employee->getElementsByTagName( "e5" ); $N5 = $V5->item(0)->nodeValue;
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V9 = $employee->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;
  $V10 = $employee->getElementsByTagName( "e10" ); $N10 = $V10->item(0)->nodeValue; 
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
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
  $V24 = $employee->getElementsByTagName( "e24" );  $N24 = $V24->item(0)->nodeValue;
  $V25 = $employee->getElementsByTagName( "e25" );  $N25 = $V25->item(0)->nodeValue;
  $V26 = $employee->getElementsByTagName( "e26" );  $N26 = $V26->item(0)->nodeValue;
  $V27 = $employee->getElementsByTagName( "e27" );  $N27 = $V27->item(0)->nodeValue;
  $V28 = $employee->getElementsByTagName( "e28" );  $N28 = $V28->item(0)->nodeValue;
  $V29 = $employee->getElementsByTagName( "e29" );  $N29 = $V29->item(0)->nodeValue;
  $V30 = $employee->getElementsByTagName( "e30" );  $N30 = $V30->item(0)->nodeValue;
  $V31 = $employee->getElementsByTagName( "e31" );  $N31 = $V31->item(0)->nodeValue;
  $V32 = $employee->getElementsByTagName( "e32" );  $N32 = $V32->item(0)->nodeValue;
  $V33 = $employee->getElementsByTagName( "e33" );  $N33 = $V33->item(0)->nodeValue;
  $V34 = $employee->getElementsByTagName( "e34" );  $N34 = $V34->item(0)->nodeValue;
  $V35 = $employee->getElementsByTagName( "e35" );  $N35 = $V35->item(0)->nodeValue;
  $V36 = $employee->getElementsByTagName( "e36" );  $N36 = $V36->item(0)->nodeValue;
  $V37 = $employee->getElementsByTagName( "e37" );  $N37 = $V37->item(0)->nodeValue;

include ("Connection.php");
$s=mysql_query("select * from custemer");
$d=mysql_query("select * from files");
$id=$_GET['id'];
$type=$_GET['typeUpdate'];
$type_operation = $_GET['type_operation'];
$air=mysql_query("select * from export where id='$id' and type_operation='$type_operation';");
$airF=mysql_fetch_array($air);
?>
<form method="GET" action="Misajouroperation.php" NAME="Choix">
<input type="hidden" name="type" value="<?php echo $type; ?>">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<table width=100%>
<tr>
<td ><h5><?php echo $N1; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N2; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N3; ?><font color="red">  *</font></h5></td>
</tr><tr><td><select name="dossier" required="required" >
<?php while($ad=mysql_fetch_array($d)){
if($airF[1]==$ad[0]){
?>
<option value="<?php echo $ad[0];?>" selected><?php echo $ad[0];?></option>
<?php }else{ ?>
<option value="<?php echo $ad[0];?>"><?php echo $ad[0];?></option>
<?php }}?>
</select></td>
<td><select name="client" required="required">
<?php while($admin=mysql_fetch_array($s)){
if($airF[2]==$admin[0]){
?>
<option value="<?php echo $admin[0];?>" selected><?php echo $admin[0];?></option>
<?php } else{ ?>
<option value="<?php echo $admin[0];?>"><?php echo $admin[0];?></option>

<?php  }} ?>
</select>
</td>
<td><input type="text" name="Ref_client" value="<?php echo $airF[3]; ?>" required="required"></td>
</tr>
<tr>
<td ><h5><?php echo $N4; ?><font color="red">  *</font></h5></td>
<td ><h5<?php echo $N5; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N6; ?><font color="red">  *</font></h5></td>
</tr>
<tr>
<td><input type="Date" name="date" value="<?php echo $airF[4]; ?>" required="required"></td>
<td><input type="Date" name="ETA" value="<?php echo $airF[8]; ?>" required="required" ></td>
<td><input type="Date" name="ETD" value="<?php echo $airF[7]; ?>" ></td>
</tr>
<tr>
<td ><h5><?php echo $N7; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N8; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N9; ?><font color="red">  *</font></h5></td>
</tr>
<tr>
<td><select  name="termeOp">
<option value="<?php echo $airF[12]; ?>" selected><?php echo $airF[12]; ?></option>
<option value="Origine Service"><?php echo $N10; ?></option>
<option value="International transport"><?php echo $N11; ?></option>
<option value="Local Service"><?php echo $N12; ?></option>
</select>
</td>
<td><input type="text" name="origine" value="<?php echo $airF[16]; ?>" required="required" ></td>
<td><input type="text" name="destination" value="<?php echo $airF[17]; ?>" required="required"></td>
</tr>
<tr>
<td ><h5><?php echo $N13; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N14; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N15; ?><font color="red">  *</font></h5></td>
</tr>
<tr>
<td><input type="text" name="PT" value="<?php echo $airF[6]; ?>" required="required" ></td>
<td><input type="text" name="BL" value="<?php echo $airF[5]; ?>" required="required" ></td>
<td><select name="exportation">
<?php if($airF[43]=="Exportation"){?>
<option value="export" selected><?php echo $N16; ?></option>
<option value="reexport"><?php echo $N17; ?></option>
<?php }else{ ?>
<option value="export" ><?php echo $N18; ?></option>
<option value="reexport"selected><?php echo $N19; ?></option>
<?php } ?>
</select></td></tr>
<tr>
<td><h5><?php echo $N20; ?></h5></td>
<td><h5><?php echo $N21; ?></h5></td>
<td><h5><?php echo $N22; ?></h5></td>
</tr>
<tr>
<td><select name="Exo">
<?php if($airF[9]=="non"){?>
<option value="non" selected><?php echo $N23; ?></option>
<option value="oui"><?php echo $N24; ?></option>
<?php }else{ ?>
<option value="non" ><?php echo $N25; ?></option>
<option value="oui"selected><?php echo $N26; ?></option>
<?php } ?>
</select></td>
<td><input type="text" name="declaration" value="<?php echo $airF[28]; ?>"></td>
<td><input type="text" name="num_aprmt" value="<?php echo $airF[29]; ?>"></td>
</tr>
<tr>
<td ><h5><?php echo $N27; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N28; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N29; ?><font color="red">  *</font></h5></td>
</tr>
<tr>
<td><input type="text" name="SL" value="<?php echo $airF[18]; ?>" required="required" ></td>
<td><input type="text" name="fournisseur" value="<?php echo $airF[25]; ?>" required="required"></td>
<td><input type="text" name="DC" value="<?php echo $airF[27]; ?>" required="required" ></td></tr>
<tr>
<td ><h5><?php echo $N30; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N31; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N32; ?><font color="red">  *</font></h5></td>
</tr>
<tr>
<td><input type="text" name="typeObjet" value="<?php echo $airF[14]; ?>"></td>
<td><input type="text" name="NumP" value="<?php echo $airF[15]; ?>" ></td>
<td><select name="Facturation">
<?php if($airF[11]=="non"){?>
<option value="non" selected><?php echo $N33; ?></option>
<option value="oui"><?php echo $N34; ?></option>
<?php }else{ ?>
<option value="non" ><?php echo $N35; ?></option>
<option value="oui"selected><?php echo $N36; ?></option>
<?php } ?>

</select></td></tr>
<tr>
<td><input  type="submit" value="<?php echo $N37; ?>"class="alt_btn" ></td>
</tr>
</table>
</form>
<?php
}

?>
