<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
?>
<?php


//--------------------------------------------------//
//Sauvgarde de Facture    //
//--------------------------------------------------//

include ("Connection.php");
$C=mysql_query("select * from groupe_account");
$s=mysql_query("select * from custemer");
$d=mysql_query("select * from files where etat_dossier='ouvert'");
$m=mysql_query("select * from currency where choix_monnai='1'");
$Mon=mysql_query("select * from currency ");

$monnaie=mysql_query("select Abreviation_Monnai from currency where Monnaie_utliser='1'");
$default_monnaie=mysql_fetch_array($monnaie);
?>

<META NAME="ROBOTS" CONTENT="NOINDEX, NoFOLLOW" />
<script  src="javascript/jquery.min.js"></script>      
<script type="text/javascript">

 function valider() {
  var net=0;
  var tva=0;
  var total=0;
   var NET=document.getElementById("NET");
   var TV=document.getElementById("T");
   var TOTAL=document.getElementById("TOTAL");
$fieldCount = document.getElementById("fieldsCount").value;

        for ($i = 1; $i <= $fieldCount; $i++)
        {
		if(document.getElementById("qt"+$i)){
	var donnees = document.getElementById("qt"+$i).value;
	var donnees1 = document.getElementById("prix"+$i).value;
	var TVA = document.getElementById("TVA"+$i).value;
	var Devis = document.getElementById("devise"+$i).value;


function TVAA(number)
{
    x = number.split('/');
	return x[1];
}
Net = document.getElementById("net"+$i);
Gross = document.getElementById("gross"+$i);
b=donnees*donnees1*Devis;
T1=(TVAA(TVA)*0.01)*b;
T=T1+b;
T2=b;
a=b;
net=net+b;
tva=tva+T1;
total=total+T;
function formatNumber(number)
{
    number = number.toFixed(2) + '';
    x = number.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
	
}
   Net.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(T2)+""; 
   Gross.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(T)+""; 
    TOTAL.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(total)+""; 
  TV.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(tva)+""; 
   NET.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(net)+""; 
  


}
}
}


$(function() {
var addDiv = $('#addinput');

$('#addNew').live('click', function() {
var j=document.getElementById("fieldsCount").value;
var i =(1*j)+1;


$('<tr><td><div class="form-group"><div class="col-md-4"><Textarea  style="width:100px"class="form-control" id=Description'+ i + ' name=Description'+i+' required /></textarea></div></div></td><td><div class="form-group"><div class="col-md-4"><input type=Number min=0   required class="form-control" style=width:80px; id=qt'+ i +' name=qt' +i+' /></div></div></td><td ><div ><div class="form-group"><div class="col-md-4"><input type=Number required  min=0 id=prix'+ i + ' style=width:80px; name=prix'+ i + ' class="form-control"  onkeyup=valider(); placeholder=0.00  ></div></div></td><td id=monnaie'+i+'><div class="form-group"><div class="col-md-4"><select id=monnaie'+i+' name=monnaie'+i+' onchange=test(this); required=required style=width:90px; class="form-control select2me"><?php while($Mnn=mysql_fetch_array($Mon)){ if($Mnn[0]==$default_monnaie[0]){ECHO "<option value=".$Mnn[0]." selected>".$Mnn[0]."</option>";}else{ ECHO "<option value=".$Mnn[0]." >".$Mnn[0]."</option>";}} ?></select></div></div></td><td><div class="form-group"><div class="col-md-4"><input type=Number min=0 name=devise'+ i + ' id=devise'+ i +' value=1  class="form-control " style=width:80px;> </div></div></td><td ><div class="form-group"><div class="col-md-4"><select  id=TVA'+ i +' style=width:85px; name=TVA'+ i +'  onchange=valider();  class="form-control select2me"  ><option value="0/0">0.00</option><?php $def_tax = mysql_query("SELECT * FROM  tax");while($def_tx = mysql_fetch_array($def_tax)){echo "<option value=".$def_tx[0]."/".$def_tx[1].">".$def_tx[0]."/".$def_tx[1]."%</option>"; } ?></select></div></div></td><td ><div id=net'+ i +' style=width:90px;><font size=1>&nbsp;0.00</font></div></td><td ><div id=gross'+ i +' style=width:90px;><font size=1>&nbsp;0.00</font></div></td><td><a href="#" id="remNew" value="'+i+'" title="suprimer"><button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i></button></a></td></tr>').appendTo(addDiv);
document.getElementById("fieldsCount").value=i;
i++;

return false;
});

$('#remNew').live('click', function() {
var count=document.getElementById("fieldsCount").value;


$(this).parents('tr').remove();

$i--;
var net=0;
  var tva=0;
  var total=0;
    
   var NET=document.getElementById("NET");

   var TV=document.getElementById("T");
   var TOTAL=document.getElementById("TOTAL");
$fieldCount = document.getElementById("fieldsCount").value;
        for ($i = 1; $i <= $fieldCount; $i++)
        {
		
	var donnees = document.getElementById("qt"+$i).value;
	var donnees1 = document.getElementById("prix"+$i).value;
	var TVA = document.getElementById("TVA"+$i).value;
	var Devis = document.getElementById("devise"+$i).value;
function TVAA(number)
{
    x = number.split('/');
	return x[1];
}
Gross = document.getElementById("gross"+$i);
b=donnees*donnees1*Devis;
T1=(TVAA(TVA)*0.01)*b;
T=T1+b;
a=b;
net=net+b;
tva=tva+T1;
total=total+T;
function formatNumber(number)
{
    number = number.toFixed(2) + '';
    x = number.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
	
}

   Gross.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(T)+""; 
    TOTAL.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(total)+""; 
  TV.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(tva)+""; 
   NET.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(net)+""; 
  


}



return false;
});
});


</script>

<?php
//--------------------------------------------------//
//Sauvgarde de Facture    //
//--------------------------------------------------//
if("$permission[1]"=="Administrateur" || "$permission[6]"=='6'){ 
include ("Connection.php");
if(isset($_POST['SauvgarderOffre'])){

$client=$_POST['client'];
$D=date("Y-m-d");
$MN=$_POST['monnaie'];
$Offre=$_POST['offre'];
$Refer=$_POST['Ref'];
$Max=$_POST['fieldsCount'];
$Maxi=0;
if(isset($_POST['Max'])){
$Maxi=$_POST['Max'];
}
$DFT=$_POST['DFT'];
$Resum=$_POST['textS'];
$Confirm=$_POST['Confirm'];
$OP=$_POST['OPeration'];
$Date_validation='';
if($Confirm=='1'){
$Date_validation=date('Y-m-d');
}
$Terme="";
$Dest="";
$Orig="";
if(!isset($_POST['Simple_offre'])){
$Dest=$_POST['Destination'];
$Orig=$_POST['Origine'];


$t0=$_POST['Terme0'];
$t1=$_POST['Terme1'];
$Terme=$t0.'&'.$t1;
}
$etat_up=mysql_query("update   offre set Resume_offre='$Resum',client='$client',Date_validation='$Date_validation',Monnaie='$MN',Ref='$Refer',validation='$Confirm',def_Monnaie='$default_monnaie[0]',Taux='$DFT',OPERATION='$OP' ,`destination`='$Dest', `origine`='$Orig',`Services`='$Terme'  where id_offre='$Offre'")or die(mysql_error());
if(!isset($_POST['Simple_offre'])){
$nbel=0;
$nbelemnt=mysql_query("select * from  piece_offre where id_operation='$Offre'");
while($elmnt=mysql_fetch_array($nbelemnt)){
$nbel++;
}
$j=1;
for($i=0;$i<$nbel;$i++){
$pt=$_POST["PT$i"];
$idI=$_POST["$j"];

$qt=$_POST["QT$i"];
$d1=$_POST["dim1$i"];
$d2=$_POST["dim2$i"];
$d3=$_POST["dim3$i"];
$Objet=$_POST["Objet$i"];
$d6=$_POST["Num$i"];
$d7=$_POST["CP$i"];
$d=$d1.'x'.$d2.'x'.$d3;
$reqq="update piece_offre set Poids='$pt',Dimension='$d',Quantite='$qt',Numero_contener='$d6',Poid_chargeable='$d7',Objet='$Objet' where id='$idI' AND id_operation='$Offre'"; 

$s=mysql_query($reqq)or die(mysql_error()) ;
$j++;
}


$j=$nbel;
$NP=$_POST['NPSH'];
for($i=$nbel;$i<=$NP;$i++){

if(isset($_POST["QT$i"])){

$j++;
$pt=$_POST["PT$i"];
$qt=$_POST["QT$i"];
$d1=$_POST["dim1$i"];
$d2=$_POST["dim2$i"];
$d3=$_POST["dim3$i"];
$Objet=$_POST["Objet$i"];
$d6=$_POST["Num$i"];
$d7=$_POST["CP$i"];
$d=$d1.'x'.$d1.'x'.$d1;
$reqq="insert into  piece_offre values($j,'$pt','$d','$qt','$Offre','$d6','$d7','$Objet')"; 
$s=mysql_query($reqq)OR DIE(mysql_error());;
}
}
}
$nbelemnt=mysql_query("select * from element_offre where Reference='$Offre'");
$nbel=0;
while($elmnt=mysql_fetch_array($nbelemnt)){
$nbel++;
}
for($i=1;$i<=$nbel;$i++){

$id=$_POST["id".$i];
$desc=$_POST["Description".$i];

$qt=$_POST["qt".$i];
$prix=$_POST["prix".$i];
$TVA=$_POST["TVA".$i];
$monnaie=$_POST["monnaie".$i];
$devis=$_POST["devise".$i];
$etat=mysql_query("update element_offre set Description='$desc',Quantite=$qt,Prix='$prix',TVA='$TVA',Monnaie='$monnaie',devis=$devis where Reference='$Offre' AND id='$id'");

}

$nbel=$nbel+1;
for($i=$nbel;$i<=$Max;$i++){
if(isset($_POST["Description".$i])){
$desc=$_POST["Description".$i];
$qt=$_POST["qt".$i];
$prix=$_POST["prix".$i];
$TVA=$_POST["TVA".$i];
$monnaie=$_POST["monnaie".$i];
$devis=$_POST["devise".$i];
$TVAA=explode('/',$TVA);

$etat=mysql_query("insert into element_offre values ($i,'$desc',$qt,'$prix','$TVAA[1]','$monnaie',$devis,'$Offre','','$TVAA[0]')");
}}
$titremsg=$N18;
$pfx=$Offre;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N108; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}



$link="MenuUtilisation.php?valeur=AllOffre.php&titre=$N64&etat_up=$etat_up&url=$N14.$N18.$N64&msg=$succes";
?>
<script type="text/javascript"> document.location.href="<?php echo $link ; ?>";
  </script
  <?php
}else{
	
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
  $N28 = $V28->item(0)->nodeValue;$V29 = $employee->getElementsByTagName( "e29" ); 
  $N29 = $V29->item(0)->nodeValue;$V30 = $employee->getElementsByTagName( "e30" ); 
  $N30 = $V30->item(0)->nodeValue;$V31 = $employee->getElementsByTagName( "e31" ); 
  $N31 = $V31->item(0)->nodeValue;$V32 = $employee->getElementsByTagName( "e32" ); 
  $N32 = $V32->item(0)->nodeValue;$V33 = $employee->getElementsByTagName( "e33" ); 
  $N33 = $V33->item(0)->nodeValue;$V34 = $employee->getElementsByTagName( "e34" ); 
  $N34 = $V34->item(0)->nodeValue;$V35 = $employee->getElementsByTagName( "e35" ); 
  $N35 = $V35->item(0)->nodeValue;$V36 = $employee->getElementsByTagName( "e36" ); 
  $N36 = $V36->item(0)->nodeValue;$V37 = $employee->getElementsByTagName( "e37" ); 
  $N37 = $V37->item(0)->nodeValue;$V38 = $employee->getElementsByTagName( "e38" ); 
  $N38 = $V38->item(0)->nodeValue;$V39 = $employee->getElementsByTagName( "e39" ); 
  $N39 = $V39->item(0)->nodeValue;$V40 = $employee->getElementsByTagName( "e40" ); 
  $N40 = $V40->item(0)->nodeValue;$V41 = $employee->getElementsByTagName( "e41" ); 
  $N41 = $V41->item(0)->nodeValue;$V42 = $employee->getElementsByTagName( "e42" ); 
  $N42 = $V42->item(0)->nodeValue;$V43 = $employee->getElementsByTagName( "e43" ); 
  $N43 = $V43->item(0)->nodeValue;$V44 = $employee->getElementsByTagName( "e44" ); 
  $N44 = $V44->item(0)->nodeValue;$V45 = $employee->getElementsByTagName( "e45" ); 
  $N45 = $V45->item(0)->nodeValue;$V46 = $employee->getElementsByTagName( "e46" ); 
  $N46 = $V46->item(0)->nodeValue;$V47 = $employee->getElementsByTagName( "e47" ); 
  $N47 = $V47->item(0)->nodeValue;

//--------------------------------------------------//
//Formulaire de création de Facture et ses elements //
//--------------------------------------------------//


include ("Connection.php");
$nb=0;
$id_Facture=$_GET['id_Facture'];
$_SESSION['id_facture']=$id_Facture;
$facture=mysql_query("select * from offre where id_offre='$id_Facture'");
$element=mysql_query("select * from element_offre where Reference='$id_Facture'"); 
$C=mysql_query("select * from groupe_account");
$s=mysql_query("select * from  custemer ");
$d=mysql_query("select * from files  where etat_dossier='ouvert' ");
$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_query("select Abreviation_Monnai from currency where Monnaie_utliser='1'");
$default_monnaie=mysql_fetch_array($monnaie);
$res=mysql_fetch_array($facture);
?>
<form action="MenuUtilisation.php?valeur=Editoffre.php" id="form_sample_2" class="form-horizontal" method="POST">
<input type="hidden" value="<?php echo $res[1] ; ?>"  name="offre">
	<div class="portlet box blue-hoki">
											<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo  $_GET['titre']; ?> 
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>
						</div>
						<div class="portlet-body form">
					<!-- BEGIN FORM-->
							<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N45; ?><span class="required">
										* </span>
										</label>
										<div class="col-md-4">
<select class="form-control select2me" name="Type" required="required" onchange="Changemnt_typ(this);"> 
<?php  if($res[15]=="Air Import"){ ?>
<option value="Air Import"  > Air Import</option>
<?php }elseif($res[15]=="Air Export"){ ?>
<option value="Air Export"  > Air Export </option>
<?php }elseif($res[15]=="Ocean Import"){ ?>
<option value="Ocean Import"  >Ocean Import </option>
<?php }elseif($res[15]=="Ocean Export"){ ?>
<option value="Ocean Export"  > Ocean Export</option>
<?php }elseif($res[15]=="Road Import"){ ?>
<option value="Road Import"  >Road Import </option>
<?php }elseif($res[15]=="Road Export"){ ?>
<option value="Road Export"  > Road Export</option>
<?php }elseif($res[15]=="LC"){ ?>
<option value="LC"  > Location </option>
<?php }elseif($res[15]=="LS"){ ?>
<option value="LS"  > Logistique Service</option>
<?php }else{ ?>
<option value="MG"  > Magasinage </option>
<?php } ?>
</select></div></div>
						
								<div class="form-body">
								<div class="alert alert-info display-show">
									
									<?php echo $N44;?>
									</div>
						
						
						
		<table  style="width:100%" >

<tr>
<td><label class="control-label col-md-3"><?php echo $N6; ?><span class="required"> *</span></label></td>
<td><label class="control-label col-md-3"><?php echo $N7; ?><span class="required"> *</span></label></td>
<td><label class="control-label col-md-3"><?php echo $N8; ?>  <span class="required"> *</span></label></td>
<td><label class="control-label col-md-3"><?php echo $N4; ?> </label></td>
</tr>
<tr>
<td>
<div class="form-group"><div class="col-md-4">
<select name="client"  id="client" required="required" onchange="findclient(this);" class="form-control select2me"  style="width:200px;" >
<option value="<?php echo $res[2];?>"><?php echo $res[2];?></option>

</select>
</div></div>

</td>
<td><div class="form-group"><div class="col-md-4"><select name="monnaie" id="monnaie" required="required" style="width:120px;" onchange="changemonnaie(this);" class="form-control select2me"  >
<?php while($M=mysql_fetch_array($m)){
if($res[8]==$M[0]){
?>
<option selected value="<?php echo $M[0];?>"><?php echo $M[0];?></option>
<?php }else{?>
<option  value="<?php echo $M[0];?>"><?php echo $M[0];?></option>
<?php } }?>
</select>
</div>
</div>
</td>
<td >
<div class="form-group">
<div class="col-md-4">
<div class="input-icon left">
<i class="fa"></i>									
<input type="Number" class="form-control "  id="DFT" style="width:140px;" min="0" name="DFT" required="required" value="<?php echo $res[9];?>">
</div>
</div>
</div>
</td>
<td><div class="form-group"><div class="col-md-10">
<input type="text" name="Ref" class="form-control"  value="<?php echo $res[6];?>"  onKeyUp="listecode();">
</div>
</div>
</td>
</tr>
<tr>
<td><label class="control-label col-md-3"><?php echo $N1; ?><span class="required"> *</span></label></td>
<td><label class="control-label col-md-3"><?php echo $N9; ?></td>

</tr>
<tr>
<td>
<div class="form-group"><div class="col-md-4">
<select name="Confirm"   required="required"  class="form-control select2me"  style="width:200px;" >
<?php if($res[7]=='0'){ ?>
<option value="0" selected><?php echo $N27;?></option>
<?php }else{ ?>
<option value="1"><?php echo $N26;?></option>

<?php } ?>
</select>
</div></div>

</td>
<td>
<div class="form-group"><div class="col-md-4">
<select name="OPeration"  class="form-control select2me"    style="width:150px"  >
<option value="<?php echo $res[11]; ?>"><?php echo $res[11]; ?></option>


</select>
</div></div>

</td>
</tr>

</table>
<div class="table-scrollable">
<table   id="addinput" style="width:100%" >
<tr style="background:#ece7e7;">
<td><label class="control-label col-md-3" style="font-size:10px;"><?php echo $N12; ?></label></td>
<td><label class="control-label col-md-3" style="font-size:10px;"><?php echo $N13; ?></label></td>
 <td><label class="control-label col-md-3" style="font-size:10px;"><?php echo $N14; ?></label></td>
<td><label class="control-label col-md-3" style="font-size:10px;"><?php echo $N7; ?> </label></td>
<td><label class="control-label col-md-3" style="font-size:10px;">&nbsp;&nbsp;<?php echo $N15; ?> </label></td>

<td><label class="control-label col-md-3" style="font-size:10px;"><?php echo $N16; ?><br><?php echo $N17; ?></label></td>
<td><label class="control-label col-md-3" style="font-size:10px;">Net</label></td>
<td><label class="control-label col-md-3" style="font-size:10px;">Gross</label></td>
<td>&nbsp;&nbsp;</td>

</tr>
<?php $TT=0;
$TVA=0;
$TS=0; $nb=0;
while($elem=mysql_fetch_array($element)){ 
$nb++;

?>


<tr >
<input type="hidden" id="id<?php echo $nb; ?>" name="id<?php echo $nb; ?>" value="<?php echo $elem[0]; ?>">

<td>
<div class="form-group">
<div class="col-md-3">	
<textarea   name="Description<?php echo $nb; ?>"  class="form-control" id="Description<?php echo $nb; ?>" required="required" style="width:100px"><?php echo $elem[1]; ?></textarea>

</div>
</div>
 </td>
<td >
<div class="form-group">	
<div class="col-md-3">
<input type="number" min="0" value="<?php echo $elem[2]; ?>" id="qt<?php echo $nb; ?>" style="width:80px;" name="qt<?php echo $nb; ?>" required="required" class="form-control">
</div>
</div>
</td>
<td ><div class="form-group">	
<div class="col-md-3">
<input type="Number" min="0" id="prix<?php echo $nb; ?>" value="<?php echo $elem[3]; ?>" style="width:80px;" name="prix<?php echo $nb; ?>" onkeyup="valider();" placeholder="0.00" required="required" class="form-control" >
</div></td>
</div></td>
<td>
<div class="form-group">	
<div class="col-md-3">
<select name="monnaie<?php echo $nb; ?>" id="monnaie<?php echo $nb; ?>" required="required" style="width:85px;" onchange="test(this);" class="form-control select2me">
<?php 
$Mn=mysql_query("select * from currency where choix_monnai='1'");
while($mon=mysql_fetch_array($Mn)){ 
if($elem[5]==$mon[0]){
?>
<option selected value="<?php echo $mon[0];?>"><?php echo $mon[0];?></option>
<?php }else{?>
<option  value="<?php echo $mon[0];?>"><?php echo $mon[0];?></option>
<?php }}?>
</select>
</div>
</div>
</td>
<td>
<div class="form-group">	
<div class="col-md-3">
<input type="Number" id="devise<?php echo $nb; ?>" name="devise<?php echo $nb; ?>" style="width:80px;" value="<?php echo $elem[6]; ?>"  min="0" onchange="valider();"    required="required" class="form-control"> 
</div>
</div>
</td>
<?php 
$def_tax = mysql_query("SELECT * FROM  tax");

?>
<td ><div class="form-group">	
<div class="col-md-3"><select id="TVA<?php echo $nb; ?>" style="width:90px;" name="TVA<?php echo $nb; ?>" onChange="valider();"  class="form-control select2me" >
<option value="0/0">0</option>
<?php while($def_tx = mysql_fetch_array($def_tax)){
if($def_tx[1]==$elem[4]){
echo "<option value=".$def_tx[1]."/".$def_tx[1]." selected>".$def_tx[0]."/".$def_tx[1]."%</option>"; 
}else{
echo "<option value=".$def_tx[1]."/".$def_tx[1].">".$def_tx[0]."/".$def_tx[1]."%</option>"; 
}
}
?>
</select>


</div>
</div>
</td>
<?php
$TT+=($elem[2]*$elem[3]*$elem[6]);
$TS+=($elem[4]*0.01*$elem[2]*$elem[3]*$elem[6])+($elem[2]*$elem[3]*$elem[6]); 
?>
<td ><div id="net<?php echo $nb; ?>" style="width:100px;">&nbsp;&nbsp;<font size="1"><?php  echo number_format(($elem[2]*$elem[3]*$elem[6]),2,',','.'); ?></div></td>


<td ><div id="gross<?php echo $nb; ?>" style="width:100px;">&nbsp;&nbsp;<font size="1"><?php  echo number_format(($elem[4]*0.01*$elem[2]*$elem[3]*$elem[6])+($elem[2]*$elem[3]*$elem[6]),2,',','.'); ?></div></td>
<td ></td>
</tr>
<?php  }  ?>
</table>
	<p style="width:750px">
<a href="#" id="addNew"><?php echo $N18; ?><img src="images/add.png" title="Ajouter Element"></a>
</p>
</div>

				<table align="center">
	<tr><td><font size="1"><?php echo $N19; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="NET"><font size="1"><?php echo number_format($TT,2,',','.'); ?> </div></td><td><div id="mn"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	<tr><td><font size="1"><?php echo $N20; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="T"><font size="1"><?php echo number_format($TS-$TT,2,',','.'); ?></div></td><td><div id="mn1"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	<tr><td><font size="1"><?php echo $N21; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="TOTAL"><font size="1"><?php echo number_format($TS,2,',','.'); ?></div></td><td><div id="mn2"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	
	</table>	

	
<font color="#111" >&nbsp;&nbsp;<?php echo $N23; ?></font>
<Textarea style="width:100%" name="textS"  class="form-control ">
<?php echo $res[0]; ?>
</Textarea>

<div id="changement_type">
						<?php
						$id_offre=$id_Facture;
						$offre=$res;
						if($res[15]!="LC" && $res[15]!="MG" &&$res[15]!="LS" ){ 
									include("EditService_Offre.php");
									}else{
									?>
									<input type="hiddefn" value="true"  name="Simple_offre" >
											
									<?php
									}
									?>
									</div>
	<?php if($res[10]==""){ ?>
	<div class="form-actions">
									 
									 <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="SauvgarderOffre" ><?php echo $N29; ?></button>
											
										</div>
									 </div>									
                                    </div>
								<?php } ?>	
							
                                         
							    </div>
							    </div>
							    </div>
			<input  type="hidden" id="fieldsCount" name="fieldsCount" value="<?php echo $nb; ?>"   style="width:130"  >				

</form>


<?php }} }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>