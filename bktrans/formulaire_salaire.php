<?php

if($_SESSION['login']==null ||  $_SESSION['pwd']==null){
header("Location:index.php");
}

?>

<script type="text/javascript">
 function valider() {
 function formatNumber(number)
{
    number = number.toFixed(2) + '';
    x = number.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ' ' + '$2');
    }
    return x1 
	
}
var BI=0;
var S=0;

   var  SB=document.getElementById("SB").value;
   var  Augmant=document.getElementById("Augmant").value;

   var IF=document.getElementById("IF").value;
   var IL=document.getElementById("IL").value;
   var IT=document.getElementById("IT").value;
   var IEE=document.getElementById("IEE").value;
   var PE=document.getElementById("PE").value;
   var IRR=document.getElementById("IR").value;
   var AV=document.getElementById("avence").value;

   IRR=IRR*1;
   var TB=0;
   var CNSS=0;
   var CNAM=0;
   var ITS=0;
   var TR=0;
   var SN=0;
   SB=SB*1;
   IF=IF*1;
   IL=IL*1;
   IT=IT*1;
   IEE=IEE*1;
   PE=PE*1;
   Augmant=Augmant*1;
   TB=SB+IF;
   TB=TB+IL+IT+IEE;
  TB=TB+PE+Augmant+IRR;
document.getElementById("TB").value=TB;

if(document.getElementById("CNSS").value !=0){
CNSS=TB/100;
if(CNSS >=700){
CNSS=700;
}
}
document.getElementById("CNSS").value=CNSS;
if(document.getElementById("CNAM").value !=0){
CNAM=(TB-CNSS-IT)*0.04;
}

document.getElementById("CNAM").value=CNAM;
var pf=0;
if(IF > 0){
pf=10000;
}

BI=TB-CNSS-CNAM-IL-IEE-IT-60000-pf;
document.getElementById("MI").value=BI;
if(BI <= 90000){
if(BI > 0){	
ITS=(BI*0.15);
document.getElementById("ITS").value=BI*0.15;
}else{
document.getElementById("ITS").value=formatNumber(0);
document.getElementById("MI").value=formatNumber(0);
}
}else if(BI > 90000  && BI <= 210000 ){
ITS=((BI*0.25)-9000);
document.getElementById("ITS").value=((BI*0.25)-9000);
}else{
ITS=((BI*0.4)-40500);
document.getElementById("ITS").value=((BI*0.4)-40500);

}
TR=ITS+CNAM+CNSS;
document.getElementById("TR").value=TR;
SN=TB-TR;
SN=SN-AV;
document.getElementById("SN").value=SN;
}
//

</script>

</head>

<body>
<?php 
if("$permission[1]"=="Administrateur" || "$permission[10]"=='10'){ 
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
  
  include ("Connection.php");
  $CIN="";
  if(isset($_GET["CIN"])){
$CIN=$_GET["CIN"];
}
$s=mysql_query("select * from personel  ");
?>
<form method="post" action="MenuUtilisation.php?valeur=AjouterSalairie.php&titre=<?php echo $_GET['titre'];?>&url=<?php echo $_GET['url'];?>" id="form_sample_2" class="form-horizontal" >
<table width="100%">
<tr>
<td><?php echo $N1; ?></td>
<td><?php echo $N3; ?></td>
<td><?php echo $N24; ?></td>
</tr>
<tr>
<td>
<div class="form-group">					
<div class="col-md-4">

<select class="form-control select2me" name="NP" required="required" style="width:220px"> 
<?php while($admin=mysql_fetch_array($s)){ 
if($admin[0]==$CIN){
$etat="selected";
}else{
$etat="";
}
?>

<option value="<?php echo $admin[0]; ?>" <?php echo "$etat"; ?> ><?php echo $admin[1]."(".$admin[0].")"; ?></option> 
<?php } ?>
</select>
</div>
</div></td>

<td>
<div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i>
<input type="number" min="0" class="form-control"  required="required" style="width:200px"  name="SB" id="SB" value=""   onMouseOut="valider();" >
</div>
</div>
</div>

</td>
<td>
<div class="form-group">					
<div class="col-md-4">

<select class="form-control select2me" name="MN" required="required" style="width:220px"> 
<?php 
$MN=mysql_query("select * from currency ");

$MN1=mysql_query("select * from currency where Monnaie_utliser='1'");
$M=mysql_fetch_array($MN1);
while($MN2=mysql_fetch_array($MN)){ 
if($MN2[0]==$M[0]){
$etat="selected";
}else{
$etat="";
}
?>

<option value="<?php echo $MN2[0]; ?>" <?php echo "$etat"; ?> ><?php echo $MN2[0]; ?></option> 
<?php } ?>
</select>
</div>
</div></td>
</tr>
<tr>
<td> <?php echo $N4; ?></td>
<td><?php echo $N5; ?></td>
<td><?php echo $N6; ?></td>
</tr>
<tr>
<td> <div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i>
<input type="number" min="0"  class="form-control"  style="width:200px" name="Augmant" id="Augmant" value="" ></div>
</div>
</div></td>
<td><div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i><input type="number" min="0"  class="form-control" style="width:200px" name="IF" id="IF"  value=""  ></td>
<td><div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i><input type="number" min="0"  class="form-control"  style="width:200px" name="IL" id="IL" value=""  ></div>
</div>
</div></td>
</tr>
<tr>
<td><?php echo $N7; ?></td>
<td><?php echo $N8; ?></td>
<td><?php echo $N9; ?></td>
</tr>
<tr>
<td><div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i>
<input type="number" min="0" class="form-control" style="width:200px" name="IT" id="IT" value=""  >
</div>
</div>
</div>
</td>
<td><div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i>
<input  type="number" min="0"  class="form-control" style="width:200px" name="IEE" id="IEE" value=""  >
</div>
</div>
</div>
</td>
<td><div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i>
<input  type="number" min="0" class="form-control" style="width:200px"  name="PE" id="PE" value=""   >
</div>
</div>
</div>
</td>
</tr>	
<tr>
<td><?php echo $N10; ?></td>
<td><?php echo $N11; ?></td>
<td><?php echo $N12; ?></td>
</tr>	
<tr>
<td><div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i>
<input type="number" min="0" class="form-control" style="width:200px" name="IR"  id="IR" value=""  >
</div>
</div>
</div></td>
<td><div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i>
<input type="number" min="0"  class="form-control" style="width:200px" name="CNSS" id="CNSS" value=""  >
</div>
</div>
</div>
</td>
<td><div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i>
<input type="number" min="0" class="form-control" style="width:200px" name="CNAM"  id="CNAM" value=""  >
</div>
</div>
</div>
</td>
</tr>	
<tr>
<td><?php echo $N13; ?></td>
<td><?php echo $N14; ?></td>
<td><?php echo $N15; ?></td>
</tr>
<tr>
<td><div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i>
<input type="number" min="0"  class="form-control" style="width:200px"  name="TB"  id="TB" value=""  >
</div>
</div>
</div>
</td>
<td><div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i><input type="number" min="0"  style="width:200px" class="form-control" name="MI" id="MI" value="">
</div>
</div>
</div>
</td>
<td><div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i><input type="number" min="0"   style="width:200px" class="form-control" name="ITS" id="ITS" value="" >
</div>
</div>
</div>
</td>
</tr>	
<tr>
<td><?php echo $N16; ?></td>
<td><?php echo $N17; ?></td>
<td><?php echo $N18; ?></td>
</tr>
<tr>
<td><div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i><input type="number" min="0"  style="width:200px" class="form-control" name="TR" id="TR" value=""    >
</div>
</div>
</div>
</td>
<td><div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i><input type="number" min="0"  style="width:200px" class="form-control" name="AV" id="avence" value=""  >
</div>
</div>
</div>
</td>
<td><div class="form-group">					
<div class="col-md-10">
<div class="input-icon right">
<i class="fa"></i><input type="number" min="0"  style="width:200px" class="form-control" name="SN" id="SN" value=""   onFocus="valider();" >
</div>
</div>
</div>

</td>
</tr>
<tr>
<td><?php echo $N19; ?></td>
<td><?php echo $N20; ?></td>
</tr>
<tr>
<td><div class="form-group">					
<div class="col-md-5">
<div class="input-icon right">
<i class="fa"></i><input type="number" style="width:100px" class="form-control" name="AN" id="AN" value="<?php echo date('Y'); ?>"   >
</div>
</div>
</div>
</td>
<td><div class="form-group">					
<div class="col-md-5">
<div class="input-icon right">
<i class="fa"></i><input type="number" style="width:80px" min="1"  class="form-control" name="MS" id="MS" value="<?php echo date('m'); ?>" >
</div>
</div>
</div>
</td>

</tr>

<tr>
<td><div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="sauvgarder" ><?php echo $N21; ?></button>
											
										</div>
									 </div>									
                                    </div></td>
</tr></table>
</form>

</center>
<?php  }  }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>
</body>
</html>