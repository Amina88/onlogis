<?php
foreach( $employees as $employee ) 
{  $V5 = $employee->getElementsByTagName( "e5" ); 
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
  $N28 = $V28->item(0)->nodeValue;$V29 = $employee->getElementsByTagName( "e29" ); 
  $N29 = $V29->item(0)->nodeValue;$V30 = $employee->getElementsByTagName( "e30" ); 
  $N30 = $V30->item(0)->nodeValue;
  
?>
<script  src="javascript/jquery.min.js"></script>      
<script type="text/javascript">
$(function() {
var addDiv = $('#addinput');
var i = $('#addinput p').size()+2;
var j = i-1;


$('#addNew').live('click', function() {

$('<p>'+'<table><tr><td><Textarea Name="Desc" style="margin: 1.11111116409302px 0px 10px; width: 222px; height: 66px;"></Textarea ></td><td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="dim10" size="1" onkeypress="Compter(this,forms[0].dim20)" placeholder="Numb"  style="width:50px" >x<input type="text" name="dim20" size="1" onkeypress="Compter(this,forms[0].dim30)"  placeholder="Kind" style="width:80px"></pre> </td><td>&nbsp;&nbsp;&nbsp;&nbsp;<Textarea Name="Desc" style="margin: 1.11111116409302px 0px 10px; width: 222px; height: 66px;"></Textarea ></td><td><input type="text" name="QT0" value="" required="required" ><td><a href="#" id="remNew"><img src="images/ico_cancel.png" title="<?php echo $N52; ?>"></a></td></tr></table>').appendTo(addDiv);
document.getElementById("NP").value=i;
i++;

return false;
});

$('#remNew').live('click', function() {
if( i > 2 ) {
$(this).parents('p').remove();

i--;
document.getElementById("NP").value=i-1;


}
return false;
});
});
</script>


<form method="GET" action="GestionOperationImport.php" >
<table width=100%>
</tr>
<tr>
<td ><h5><?php echo $N5; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N6; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N7; ?><font color="red">  *</font></h5></td>
</tr>
<td><input type="text" name="Ref_client" value="" required="required"></td>
<td><input type="text" name="Ref_client" value="" required="required"></td>
<td><input type="text" name="Ref_client" value="" required="required"></td>
</tr>

<tr>
<td ><h5><?php echo $N8; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N9; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N10; ?><font color="red">  *</font></h5></td>
</tr>
<tr>
<td><select name="Objet" required="required">
<option value=""><?php echo $N13; ?></option>
<option value="piece"><?php echo $N15; ?></option>
</select>
</td>
<td><input type="text" name="NP"  id="NP" value="" required="required" ></td>
<td ><input type="text" name="dt_jours" size="1" onkeypress="Compter(this,forms[0].dt_mois)" style="width:30px" >-<input type="text" name="dt_mois" size="1" onkeypress="Compter(this,forms[0].dt_annee)" style="width:30px"> -<input type="text" name="dt_annee" size="4" maxlength="4"style="width:60px" ></pre> </td>


</tr>
<tr>
<td ><h5><?php echo $N11; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N12; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N13; ?><font color="red">  *</font></h5></td>


</tr>
<tr>
<td><input type="text" name="QT0" value="" required="required" ></td>
<td><input type="text" name="QT0" value="" required="required" ></td>
<td><input type="text" name="QT0" value="" required="required" ></td>
</tr>
<tr>
<td ><h5><?php echo $N14; ?><font color="red">  *</font></h5></td>
</tr>
<tr>
<td colspan="3">
<textarea name="fdpat" style="margin: 1.11111116409302px 0px 10px; width: 532px; height: 97px;">
</textarea>
</td>
</tr>
<tr>
<td ><h5><?php echo $N14; ?><font color="red">  *</font></h5></td>
</tr>
<tr>
<td colspan="3">
<textarea name="fdpat" style="margin: 1.11111116409302px 0px 10px; width: 532px; height: 97px;">
</textarea>
</td>
</tr><tr>
<td ><h5><?php echo $N15; ?><font color="red">  *</font></h5></td>
</tr>
<tr>
<td colspan="3">
<textarea name="fdpat" style="margin: 1.11111116409302px 0px 10px; width: 532px; height: 97px;">
</textarea>
</td>
</tr><tr>
<td ><h5><?php echo $N16; ?><font color="red">  *</font></h5></td>
</tr>
<tr>
<td colspan="3">
<textarea name="fdpat" style="margin: 1.11111116409302px 0px 10px; width: 532px; height: 97px;">
</textarea>
</td>
</tr>
<tr>
<td ><h5><?php echo $N17; ?><font color="red">  *</font></h5></td>
</tr>
<tr>
<td colspan="3">
<textarea name="fdpat" style="margin: 1.11111116409302px 0px 10px; width: 532px; height: 97px;">
</textarea>
</td>
</tr>
</table>

<table width="100%" >
<tr>
<td ><h5><?php echo $N18; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N19; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N20; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N21; ?><font color="red">  *</font></h5></td>


</tr>
<tr>
<td><Textarea Name="Desc" style="margin: 1.11111116409302px 0px 10px; width: 222px; height: 66px;"></Textarea ></td>
<td ><input type="text" name="dim10" size="1" onkeypress="Compter(this,forms[0].dim20)" placeholder="Numb"  style="width:50px" >x<input type="text" name="dim20" size="1" onkeypress="Compter(this,forms[0].dim30)"  placeholder="Kind" style="width:80px"></pre> </td>
<td><Textarea Name="Desc" style="margin: 1.11111116409302px 0px 10px; width: 222px; height: 66px;"></Textarea ></td>
<td><input type="text" name="QT0" value="" required="required" ></td>
</tr>
</table>
<div id="addinput">


</div>
 <p style="">
<a href="#" id="addNew"><img src="images/add.png" title="<?php echo $N51; ?>"></a>
</p>
<table>
<tr><td>
<input type="submit" value="Sauvgarder" class="alt_btn">
<input type="hidden" name="type" value="Air Import"> </td></tr>
</table>
<?php } 
?>