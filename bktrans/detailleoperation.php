<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
if("$permission[3]"=="3" || "$permission[1]"=="Administrateur"){ 
$url=$N4.".".$N8.".".$N9;
$url1=$N4.".".$N8.".".$N9;
$link=$N96;
$url2=$N20.".".$N21;
foreach( $employees as $employee ) 
{    $V1 = $employee->getElementsByTagName("e1"); 
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
  $N32 = $V32->item(0)->nodeValue; $V33 = $employee->getElementsByTagName( "e33" ); 
  $N33 = $V33->item(0)->nodeValue;$V34 = $employee->getElementsByTagName( "e34" ); 
  $N34 = $V34->item(0)->nodeValue;$V35 = $employee->getElementsByTagName( "e35" ); 
  $N35 = $V35->item(0)->nodeValue;$V36 = $employee->getElementsByTagName( "e36" ); 
  $N36 = $V36->item(0)->nodeValue;$V37 = $employee->getElementsByTagName( "e37" ); 
  $N37= $V37->item(0)->nodeValue;$V38 = $employee->getElementsByTagName( "e38" ); 
  $N38 = $V38->item(0)->nodeValue;$V39 = $employee->getElementsByTagName( "e39" ); 
 $N39 = $V39->item(0)->nodeValue;
  $V45 = $employee->getElementsByTagName( "e45" ); 
  $N45 = $V45->item(0)->nodeValue;
  $V46 = $employee->getElementsByTagName( "e46" ); 
  $N46 = $V46->item(0)->nodeValue;
  $V47 = $employee->getElementsByTagName( "e47" ); 
  $N47 = $V47->item(0)->nodeValue;
    $V48 = $employee->getElementsByTagName( "e48" ); 
  $N48 = $V48->item(0)->nodeValue;
    $V49 = $employee->getElementsByTagName( "e49" ); 
  $N49= $V49->item(0)->nodeValue;
   $V50 = $employee->getElementsByTagName( "e50" ); 
  $N50= $V50->item(0)->nodeValue;
$V51 = $employee->getElementsByTagName( "e51" ); 
  $N51 = $V51->item(0)->nodeValue;$V52 = $employee->getElementsByTagName( "e52" ); 
  $N52 = $V52->item(0)->nodeValue;$V53 = $employee->getElementsByTagName( "e53" );  
  $N53 = $V53->item(0)->nodeValue;$V54 = $employee->getElementsByTagName( "e54" );  
  $N54 = $V54->item(0)->nodeValue;$V55 = $employee->getElementsByTagName( "e55" );  
  $N55 = $V55->item(0)->nodeValue;$V56 = $employee->getElementsByTagName( "e56" ); 
  $N56 = $V56->item(0)->nodeValue;$V57 = $employee->getElementsByTagName( "e57" ); 
  $N57 = $V57->item(0)->nodeValue;$V58 = $employee->getElementsByTagName( "e58" ); 
  $N58 = $V58->item(0)->nodeValue;$V59 = $employee->getElementsByTagName( "e59" );  
  $N59 = $V59->item(0)->nodeValue;$V60 = $employee->getElementsByTagName( "e60" ); 
  $N60 = $V60->item(0)->nodeValue;$V61 = $employee->getElementsByTagName( "e61" ); 
  $N61 = $V61->item(0)->nodeValue;$V62 = $employee->getElementsByTagName( "e62" ); 
  $N62 = $V62->item(0)->nodeValue;$V63 = $employee->getElementsByTagName( "e63" ); 
  $N63 = $V63->item(0)->nodeValue;$V64 = $employee->getElementsByTagName( "e64" ); 
  $N64 = $V64->item(0)->nodeValue;$V65 = $employee->getElementsByTagName( "e65" );
  $N65 = $V65->item(0)->nodeValue;$V66 = $employee->getElementsByTagName( "e66" );  
  $N66 = $V66->item(0)->nodeValue;$V67 = $employee->getElementsByTagName( "e67" ); 
  $N67 = $V67->item(0)->nodeValue;$V68 = $employee->getElementsByTagName( "e68" ); 
  $N68 = $V68->item(0)->nodeValue;$V69 = $employee->getElementsByTagName( "e69" ); 
  $N69 = $V69->item(0)->nodeValue;$V70 = $employee->getElementsByTagName( "e70" ); 
  $N70 = $V70->item(0)->nodeValue;$V71 = $employee->getElementsByTagName( "e71" );  
  $N71 = $V71->item(0)->nodeValue;$V72 = $employee->getElementsByTagName( "e72" );  
  $N72 = $V72->item(0)->nodeValue;$V73 = $employee->getElementsByTagName( "e73" );  
  $N73 = $V73->item(0)->nodeValue;$V74 = $employee->getElementsByTagName( "e74" ); 
  $N74 = $V74->item(0)->nodeValue;$V75 = $employee->getElementsByTagName( "e75" ); 
  $N75 = $V75->item(0)->nodeValue;$V76 = $employee->getElementsByTagName( "e76" ); 
  $N76 = $V76->item(0)->nodeValue;$V77 = $employee->getElementsByTagName( "e77" ); 
  $N77 = $V77->item(0)->nodeValue;$V78 = $employee->getElementsByTagName( "e78" ); 
  $N78 = $V78->item(0)->nodeValue;$V79 = $employee->getElementsByTagName( "e79" );
  $N79 = $V79->item(0)->nodeValue;$V80 = $employee->getElementsByTagName( "e80" ); 
  $N80 = $V80->item(0)->nodeValue;$V81 = $employee->getElementsByTagName( "e81" ); 
  $N81 = $V81->item(0)->nodeValue;$V82 = $employee->getElementsByTagName( "e82" ); 
  $N82 = $V82->item(0)->nodeValue;$V83 = $employee->getElementsByTagName( "e83" ); 
  $N83 = $V83->item(0)->nodeValue;$V84 = $employee->getElementsByTagName( "e84" ); 
  $N84 = $V84->item(0)->nodeValue;$V85 = $employee->getElementsByTagName( "e85" ); 
  $N85 = $V85->item(0)->nodeValue;$V86 = $employee->getElementsByTagName( "e86" ); 
  $N86 = $V86->item(0)->nodeValue;$V87 = $employee->getElementsByTagName( "e87" );  
  $N87 = $V87->item(0)->nodeValue;
  $V88 = $employee->getElementsByTagName( "e88" );  
  $N88 = $V88->item(0)->nodeValue;
  $V89 = $employee->getElementsByTagName( "e89" );  
  $N89 = $V89->item(0)->nodeValue;$V90 = $employee->getElementsByTagName( "e90" );  $N90 = $V90->item(0)->nodeValue;
$V91 = $employee->getElementsByTagName( "e91" );  $N91 = $V91->item(0)->nodeValue;
$V92 = $employee->getElementsByTagName( "e92" ); 
  $N92 = $V92->item(0)->nodeValue;$V93 = $employee->getElementsByTagName( "e93" ); 
  $N93 = $V93->item(0)->nodeValue;$V94 = $employee->getElementsByTagName( "e94" ); 
  $N94 = $V94->item(0)->nodeValue;$V95 = $employee->getElementsByTagName( "e95" ); 
  $N95 = $V95->item(0)->nodeValue;$V96 = $employee->getElementsByTagName( "e96" ); 
  $N96 = $V96->item(0)->nodeValue;$V97 = $employee->getElementsByTagName( "e97" ); 
  $N97 = $V97->item(0)->nodeValue;$V98 = $employee->getElementsByTagName( "e98" ); 
  $N98 = $V98->item(0)->nodeValue;$V99 = $employee->getElementsByTagName( "e99" ); 
  $N99 = $V99->item(0)->nodeValue;$V100 = $employee->getElementsByTagName( "e100" ); 
  $N100 = $V100->item(0)->nodeValue;$V101 = $employee->getElementsByTagName( "e101" ); 
  $N101 = $V101->item(0)->nodeValue;$V102 = $employee->getElementsByTagName( "e102" ); 
  $N101 = $V101->item(0)->nodeValue;$V103 = $employee->getElementsByTagName( "e103" ); 
  $N103 = $V103->item(0)->nodeValue;$V104 = $employee->getElementsByTagName( "e104" ); 
  $N104 = $V104->item(0)->nodeValue;$V105 = $employee->getElementsByTagName( "e105" ); 
  $N105 = $V105->item(0)->nodeValue;$V106 = $employee->getElementsByTagName( "e106" ); 
  $N106 = $V106->item(0)->nodeValue;

include ("Connection.php");
$table=$_GET['type_operation'];
$Date=date('d-m-Y');
$thp=$_GET['titre'];
$id=$_GET['id'];
$url=$_GET['url'];
$page=$_GET['type_operation'];
mysql_query("update   import set consultation=1   where  id='$id' ");
$s=mysql_query("select *  from import  where  id='$id' ");
$f=mysql_query("select *  from before_payement  where  num_appurement= (select num_appurement from export where id='$id')");
$d=mysql_query("select * from before_payement");
$admin=mysql_fetch_array($s);
$ap=mysql_fetch_array($d);
$terme = $admin[12];
?>

<?php
include ("Connection.php");
$s=mysql_query("select * from custemer  ");
$d=mysql_query("select * from files F,categorie C  where F.etat_dossier='ouvert' AND appliquer_sur like '%1' AND C.Nom=F.Catagorie");
$Mn=mysql_query("select * from currency ");
$Mn2=mysql_query("select * from currency ");
$app=mysql_query("select Num_declaration_douane  from import where type_exo='Admission temporaire' AND Num_appurement!=''");


?>
<head>
<script  src="javascript/jquery.min.js"></script>      
<script type="text/javascript">
$(function() {
var addDiv = $('#addinput');
var i = $('#addinput tr').size();
var j = i-1;
var test=0;

$('#addNew').live('click', function() {

$('<tr>'+'<td><div class="col-md-14"><select class="form-control select2me"  style="width:80px"name="Objet'+i+'"   id="Objet'+i+'"  onchange="loadinf('+i+');"><option value="piece">Piece</option><option value="Conteneur 20 Dry">Conteneur 20 Dry</option><option value="Conteneur 40 Dry">Conteneur 40 Dry</option><option value="Conteneur 45 High Cube Dry">Conteneur 45 High Cube Dry </option><option value="Conteneur 20 Reefer">Conteneur 20 Reefer</option><option value="Conteneur 40 Reefer">Conteneur 40 Reefer </option><option value="Conteneur 20 Open Top">Conteneur 20 Open Top </option><option value="Conteneur 40 Open Top">Conteneur 40 Open Top </option></select></div>  </td> <td ><div class="col-md-15"> <div class="input-icon right"> <i class="fa"></i><input type="number" class="form-control" id="dim1'+i+'"  name="dim1'+i+'" required="required"  placeholder="Long" min="0" /></div></div><div class="col-md-15"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="dim2'+i+'"  name="dim2'+i+'"  placeholder="Larg"  min="0" required="required"/></div></div><div class="col-md-15"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control"  id="dim3'+i+'"  name="dim3'+i+'" placeholder="Hot" required="required" min="0" /></div></div></td><td><div class="col-md-15"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="QT'+i+'"  name="QT'+i+'"  min="0" required="required"/></div></div></td><td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="PT'+i+'"  min="0" name="PT'+i+'" required="required"/> 											</div></div></td><td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="TT'+i+'"  name="TT'+i+'" min="0"  required="required"/></div></div></td> <td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i><input type="text" class="form-control" name="Num'+i+'" id="Num'+i+'" /></div></div></td><td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i> <input type="number"  min="0" class="form-control" name="CP'+i+'"  id="CP'+i+'"  onclick="calculpch('+i+');"  value="" /> </div></div></td><td width="20"><a href="#" id="remNew" ><button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i></button></a></td>'+'</tr>').appendTo(addDiv);

document.getElementById("NP").value=i;
i++;
return false;
}
);

$('#remNew').live('click', function() {

$(this).parents('tr').remove();





return false;
});
});


</script>
<script type="text/javascript">
function loadinf(j){
a=document.getElementById("dim1"+j).value;
b=document.getElementById("dim2"+j).value;
c=document.getElementById("dim3"+j).value;
d=document.getElementById("Objet"+j).value;

if(d=='Conteneur 20 Dry'){
document.getElementById("dim1"+j).readOnly= true;
document.getElementById("dim2"+j).readOnly= true;
document.getElementById("dim3"+j).readOnly= true;
document.getElementById("dim1"+j).value= 591.9;
document.getElementById("dim2"+j).value= 234;
document.getElementById("dim3"+j).value= 238;
document.getElementById("CP"+j).value= 22100;
document.getElementById("Num"+j).readOnly= false;
document.getElementById("dim1"+j).readOnly= true;
document.getElementById("dim2"+j).readOnly= true;
document.getElementById("dim3"+j).readOnly= true;
document.getElementById("Num"+j).style.backgroundColor='ffffff';
}else if(d=='Conteneur 40 Dry'){
document.getElementById("Num"+j).readOnly= false;
document.getElementById("dim1"+j).value= 1204.5;
document.getElementById("dim2"+j).value= 233.6;
document.getElementById("dim3"+j).value= 238;
document.getElementById("CP"+j).value= 27397;
document.getElementById("dim1"+j).readOnly= true;
document.getElementById("dim2"+j).readOnly= true;
document.getElementById("dim3"+j).readOnly= true;
document.getElementById("Num"+j).style.backgroundColor='ffffff';
}else if(d=='Conteneur 45 High Cube Dry'){
document.getElementById("Num"+j).readOnly= false;
document.getElementById("dim1"+j).value= 1358;
document.getElementById("dim2"+j).value= 234.7;
document.getElementById("dim3"+j).value= 269;
document.getElementById("CP"+j).value= 29600;
document.getElementById("dim1"+j).readOnly= true;
document.getElementById("dim2"+j).readOnly= true;
document.getElementById("dim3"+j).readOnly= true;
document.getElementById("Num"+j).style.backgroundColor='ffffff';
}else if(d=='Conteneur 20 Reefer'){

document.getElementById("Num"+j).readOnly= false;
document.getElementById("dim1"+j).value= 542.8;
document.getElementById("dim2"+j).value= 226;
document.getElementById("dim3"+j).value= 224;
document.getElementById("CP"+j).value= 28390;
document.getElementById("dim1"+j).readOnly= true;
document.getElementById("dim2"+j).readOnly= true;
document.getElementById("dim3"+j).readOnly= true;
document.getElementById("Num"+j).style.backgroundColor='ffffff';
}else if(d=='Conteneur 40 Reefer'){
document.getElementById("Num"+j).readOnly= false;
document.getElementById("dim1"+j).value= 1120.7;
document.getElementById("dim2"+j).value= 224.6;
document.getElementById("dim3"+j).value= 218.3;
document.getElementById("CP"+j).value= 25220;
document.getElementById("Num"+j).style.backgroundColor='ffffff';
}else if(d=='Conteneur 20 Open Top'){
document.getElementById("Num"+j).style.backgroundColor='ffffff';
document.getElementById("Num"+j).readOnly= false;
document.getElementById("dim1"+j).value= 5919;
document.getElementById("dim2"+j).value= 234;
document.getElementById("dim3"+j).value= 2286;
document.getElementById("CP"+j).value= 21826 ;
document.getElementById("dim1"+j).readOnly= true;
document.getElementById("dim2"+j).readOnly= true;
document.getElementById("dim3"+j).readOnly= true;
document.getElementById("Num"+j).style.backgroundColor='ffffff';
}else if(d=='Conteneur 40 Open Top'){
document.getElementById("Num"+j).readOnly= false;
document.getElementById("dim1"+j).value= 12043;
document.getElementById("dim2"+j).value= 234;
document.getElementById("dim3"+j).value= 2272;
document.getElementById("CP"+j).value= 25181 ;
document.getElementById("Num"+j).style.backgroundColor='ffffff';
document.getElementById("dim1"+j).readOnly= true;
document.getElementById("dim2"+j).readOnly= true;
document.getElementById("dim3"+j).readOnly= true;
}else{
document.getElementById("dim1"+j).readOnly= false;
document.getElementById("dim2"+j).readOnly= false;
document.getElementById("dim3"+j).readOnly= false;
document.getElementById("Num"+j).style.backgroundColor='dbe0e0';
document.getElementById("Num"+j).readOnly= true;
document.getElementById("CP"+j).value= "" ;
document.getElementById("dim1"+j).value= "";
document.getElementById("dim2"+j).value= "";
document.getElementById("dim3"+j).value= "";


}


}
function calculpch(j){

a=document.getElementById("dim1"+j).value;
b=document.getElementById("dim2"+j).value;
c=document.getElementById("dim3"+j).value;
d=document.getElementById("Objet"+j).value;

pt=document.getElementById("PT"+j).value;
qt=document.getElementById("QT"+j).value;
tt=document.getElementById("TT"+j).value;
if(d=='piece'){
if(!isNaN(a) && !isNaN(b) && !isNaN(c)){
vm=a*b*c/1000000;
pd=vm/0.003;

if(pt>pd){
document.getElementById("CP"+j).value=pt*qt;

}else{
document.getElementById("CP"+j).value=pd*qt;
}
document.getElementById("TT"+j).value=pt*qt;
}else{
document.getElementById("dim1"+j).value="";
document.getElementById("dim2"+j).value="";
document.getElementById("dim3"+j).value="";
document.getElementById("test").innerHTML="<font size='2' color='red'><?php echo $N31; ?></font>";

}
}

}




	

function change(i){
elm=document.getElementById('div'+i).id;

for(j=1;j<7;j++){
NELM=document.getElementById('div'+j).id;
if(elm==NELM){
document.getElementById('div'+i).className='classB';
}else{
document.getElementById('div'+j).className='class';
}
}
}

function getChemp(i){

var input=document.getElementById(i.id);
var ischecked=input.checked;
 if(ischecked){
document.getElementById(i.id+'dt').required= true;
}else{
document.getElementById(i.id+'dt').required= false;
}
}
</script></head>

<div class="portlet-body">
						<div class="tabbable">
									<ul class="nav nav-tabs">
										<li  class="<?php if(!isset($_GET['duppliquer'])){ echo '   active'; }  ?>">
											<a href="#tab_general" data-toggle="tab">
											<?php echo $N1; ?> </a>
										</li>
										<li>
											<a href="#Fact" data-toggle="tab">
											<?php echo $N68; ?> </a>
										</li>
										<li  <?php if(isset($_GET['duppliquer'])){ echo  "class='active'"; }  ?> >
											<a href="#tab_meta" data-toggle="tab">
											Edit</a>
										</li>
										<li>
											<a href="#tab_images" data-toggle="tab">
											<?php echo $N7; ?> </a>
										</li>
										
										
									</ul>
									</div>
								
<table   id="noimprime" >
<tr>
<td>

<a href="#" class="btn default btn-xs yellow-stripe" style="height:26px;">
													<?php echo $N95; ?></a></td>
													<td>&nbsp;&nbsp;:&nbsp;</td>
<td><a  title="<?php echo $admin[32]; ?>" class="btn default btn-xs <?php if($admin[47]!="0"){ echo "green";}else{echo "red";} ?>-stripe"  style="height:26px;"><?php echo $N76; ?></a></td>
<td>&nbsp;</td>
<td><a  title="<?php echo $admin[33]; ?>" class="btn default btn-xs <?php if($admin[48]!="0"){ echo "green";}else{echo "red";} ?>-stripe"  style="height:26px;"><?php echo $N80; ?></a></td>
<td>&nbsp;</td>
<td><a title="<?php echo $admin[34]; ?>" class="btn default btn-xs <?php if($admin[49]!="0"){ echo "green";}else{echo "red";} ?>-stripe"  style="height:26px;"><?php echo $N78; ?></a></td>
<td>&nbsp;</td>
<td><a title="<?php echo $admin[35]; ?>"  class="btn default btn-xs <?php if($admin[50]!="0"){ echo "green";}else{echo "red";} ?>-stripe"  style="height:26px;"><?php echo $N79; ?></a></td>
<td>&nbsp;</td>
<td><a title="<?php echo $admin[36]; ?>" class="btn default btn-xs <?php if($admin[51]!="0"){ echo "green";}else{echo "red";} ?>-stripe"  style="height:26px;"><?php echo $N77; ?></a></td>

<td>&nbsp;</td>
<td><a title="<?php echo $admin[37]; ?>" class="btn default btn-xs <?php if($admin[52]!="0"){ echo "green";}else{echo "red";} ?>-stripe"  style="height:26px;"><?php echo $N70; ?></a></td>
<td>


</td>
</tr></table>
	<br>						

<form action="MenuUtilisation.php?valeur=Misajouroperation_import.php"  method="POST" id="form_sample_2"  class="form-horizontal">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="hidden" name="page" value="<?php echo $page; ?>">
<input type="hidden" name="thp" value="<?php echo $thp; ?>">
<input type="hidden" name="tble" value="<?php echo $table; ?>">
<input type="hidden" name="ttl" value="<?php echo $url; ?>">

									<div class="tab-content no-space">
										<div class="tab-pane <?php if(!isset($_GET['duppliquer'])){ echo '   active'; }  ?>" id="tab_general">
											<!-- zone d'affichage 1-->
												
							
							
								<div class="portlet box">	
							<div class="tools noimprime" align="right" >
							
							<a href="MenuUtilisation.php?valeur=duppliquer_operation.php&page=<?php echo $_GET['page'];?>&id=<?php echo $id;?>&type_operation=<?php echo $_GET['type_operation'];?>&url=<?php echo $_GET['url']; ?>&titre=<?php echo $_GET['titre']; ?>&tb=export&impcopie=true"><i class="fa fa-copy" onclick="return confirm('<?php echo $link; ?>') ;"></i></a>
								<a onclick="print();"  title="print">	<i class="fa fa-print"></i></a>
								<?php if($admin[11]!="oui" ){
if("$permission[1]"=="Administrateur" || "$permission[8]"=='8') {
$offre=mysql_query("select * from offre where validation='1' and OPERATION='$id' ");
$offr=mysql_fetch_array($offre);
if($offr[10]==NULL){

?>
<a href="MenuUtilisation.php?valeur=ModifierOffre.php&id_Facture=<?php echo $offr[1];?>&titre=(<?php echo $id;?>,<?php echo $admin[1];?>)&url=<?php echo $url2;?>&id=<?php echo $id;?>">
<?php   }else{  ?>  

<a href="MenuUtilisation.php?valeur=AjouterFacture.php&titre=<?php echo $N72; ?>(<?php echo $id;?>,<?php echo $admin[1];?>)&id=<?php echo $id;?>&projet=<?php echo $admin[0];?>&tb=import">
<?php } ?>
<i class="fa fa-file-text" title="<?php echo $N68; ?>" ></i> </a> <?php }} ?>
								<a href="dettaileOperation.php?OpId=<?php echo $id;?>&tb=import&titre=(<?php echo $id;?>,<?php echo $admin[1];?>)" target="_link" >	<i class="fa fa-file-pdf-o"></i></a>
								<a href="dettaileOperation.php?OpId=<?php echo $id;?>&tb=import&titre=<?php echo $N103.'  : '; ?>(<?php echo $admin[1];?>)&charger=send&url=<?php echo $url1.'.'.$N103; ?>"  >	<i class="icon-envelope-open"></i></a>
								
								
								
							</div>
						
						
						<div class="portlet-body" >
							
							<table class="table table-striped table-bordered "  >
							
							<tr > 
   					<td><font size="1"><b><?php echo $N9; ?></td> 
   					<td><font size="1"><b><?php echo $N10; ?></td> 
   					<td><font size="1"><b><?php echo $N11; ?></td> 
   					<td><font size="1"><b><?php echo $N12; ?></td> 
   					
</tr> 
						
							<tr > 							
					<td><font size="1"><?php echo $admin[0]; ?></td> 
					<td><font size="1"><?php echo $admin[2]; ?></td> 
					<td><font size="1"><?php echo $admin[1]; ?></td> 
					<td><font size="1"><?php echo $admin[3]; ?></td> 
					
    				
				</tr> 
				<tr > 
   					<td><font size="1"><b><?php echo $N17; ?></td> 
   					<td><font size="1"><b><?php echo $N18; ?></td> 
   					<td><font size="1"><b><?php echo $N19; ?></td> 
   					<td><font size="1"><b><?php echo $N20; ?></td> 
   					
</tr> 
						
							<tr > 							
					<td><font size="1"><?php echo $admin[16]; ?></td> 
					<td><font size="1"><?php echo $admin[17]; ?></td> 
					<td><font size="1"><?php echo $admin[6]; ?></td> 
					<td><font size="1"><?php echo $admin[7]; ?></td> 
					
    				
				</tr> 
							<tr>
					<td><font size="1"><b><?php echo $N21; ?></B></td> 
					<td><font size="1"><B><?php echo $N22; ?></B></td>
					<td><font size="1"><B><?php echo $N23; ?></B></h6></td>
					<td><font size="1"><B><?php echo $N24; ?></B></h6></td>
							
							
							</tr>
							<tr > 							
					<td><font size="1"><?php echo $admin[4]; ?></td> 
					<td><font size="1"><?php echo $admin[18]; ?></td> 
					<td><font size="1"><?php echo  $admin[19]; ?>&nbsp;<?php echo $admin[20] ; ?></td> 
					<td><font size="1"><?php echo  $admin[22]; ?>&nbsp;<?php echo $admin[23] ; ?></td> 
					
				</tr> 
				            <tr>
					<td><font size="1"><b><?php echo $N26; ?></B></td> 
					<td><font size="1"><B><?php echo $N27; ?></B></td>
					<td colspan="2"><font size="1"><B><?php echo $N28; ?></B></h6></td>
							
							
							</tr>
							<tr > 							
					<td><font size="1"><?php echo $admin[25]; ?></td> 
					<td><font size="1"><?php echo $admin[26]; ?></td> 
					<td colspan="2"><font size="1"><?php echo $admin[27]; ?></td> 
					
				</tr> 
				<tr>
					<td><font size="1"><b><?php echo $N100; ?></B></td> 
					<td colspan="3"><font size="1"><B><?php echo $N101; ?></B></td>
							
							
							</tr>
							<?php
							$air=mysql_query("select Tracking from import where id='$id'");
$ocean=mysql_fetch_array($air);
$Date=date('d-m-Y');
$tarck=explode('&!!&',$ocean[0]);
for($i=count($tarck)-1;$i>0;$i--){
$info=explode('|!!|',$tarck[$i]);
?>
							<tr > 							
					<td><font size="1"><?php echo $info[0]; ?></td> 
					<td colspan="3"><font size="1"><?php echo $info[1]; ?></td> 
					
				</tr> 
				<?php  } ?>
							</table>
		<table class="table table-striped table-bordered "  >
							
							<tr > 
   					<td><font size="1"><b><?php echo $N76; ?></td> 
   					<td><font size="1"><b><?php echo $N80; ?></td> 
   					<td><font size="1"><b><?php echo $N78; ?></td> 
   					<td><font size="1"><b><?php echo $N79; ?></td> 
   					<td><font size="1"><b><?php echo $N77; ?></td> 
   					<td><font size="1"><b><?php echo $N70; ?></td> 
   					
</tr> 
						
							<tr > 							
					<td><font size="1"><?php echo $admin[32]; ?></td> 
					<td><font size="1"><?php echo $admin[33]; ?></td> 
					<td><font size="1"><?php echo $admin[34]; ?></td> 
					<td><font size="1"><?php echo $admin[35]; ?></td> 
					<td><font size="1"><?php echo $admin[36]; ?></td> 
					<td><font size="1"><?php echo $admin[37]; ?></td> 
					
    				
				</tr> </table>
						
				<div class="tab-pane" id="url">
	<embed src="<?php echo $admin['url'];?>" style="width:100%;height:100%;">
</div >				
							</div>
							</div>

						
							<!-- END FORM-->
						
									
											<!-- zone d'affichage 1-->
									
</div>
									
										<div class="tab-pane <?php if(isset($_GET['duppliquer'])){ echo '   active'; }  ?>" id="tab_meta">	
										<div class="portlet box yellow">
							
						<div class="portlet-title">
						

							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $N2; ?> 
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
							</div>
						</div>
<div class="portlet-body form">
							<div class="form-body">
								<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
									<?php echo $error_form; ?>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N29; ?> <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="Projet" required="required">
												<option value="">Select...</option>
											<?php 	$doss=mysql_query("select * from files F,categorie C  where F.etat_dossier='ouvert' AND appliquer_sur like '%1' AND C.Nom=F.Catagorie");
 while($ad=mysql_fetch_array($doss)){?>
<option value="<?php echo $ad[0];?>" <?php if($ad[0]==$admin[0]) echo "selected";?>><?php echo $ad[0];?></option>
<?php }?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N30; ?><span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="client" required="required">
												<?php 
$client=mysql_query("select * from custemer  ");

while($cilentt=mysql_fetch_array($client)){?>
<option value="<?php echo $cilentt[0];?>"  <?php if($cilentt[0]==$admin[1]) echo "selected";?>><?php echo $cilentt[0];?></option>
<?php }?>
											</select>
										</div>
									</div>
							
							<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N31; ?><span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="Ref_client"  value="<?php echo $admin[2];?>" required="required"/>
											</div>
										</div>
							</div>
							
	<div >
	
	<table id="addinput" >
<tr>
<td ><h5><?php echo $N34; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N33; ?><font color="red"> (cm) *</font></h5></td>
<td ><h5><?php echo $N36; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N32; ?><font color="red"> (kg)  *</font></h5></td>
<td ><h5>Total<font color="red"> (kg)</font></h5></td>
<td ><h5><?php echo $N35; ?></h5></td>
<td ><h5><?php echo $N96; ?></h5></td>
</tr>

<?php 
 $elm=mysql_query("select * from piece_import where id_operation='$id'");
 $i=0;
 $j=0;
 while($elmnt=mysql_fetch_array($elm)){ 
$i++;
$j++;
$pt=$elmnt[1]*3;
$dim=explode("x",$elmnt[2]);
if(!isset($dim[1])){
$dim=explode("*",$elmnt[2]);

}
?><tr>

<td>
<input type="hidden" name="<?php echo $i; ?>" value="<?php echo $elmnt[0]; ?>"  >
<div class="col-md-14">
<select class="form-control select2me" name="Objet<?php echo $j; ?>"   id="Objet<?php echo $j; ?>"  onchange="loadinf('<?php echo $j; ?>');">
<option value=""><?php echo $N13; ?></option>
<option value="piece">
<?php echo $N15; ?></option>
<option value="piece" <?php if($elmnt[7]=="piece") echo "selected" ;?>>piece</option>
<?php
 if($admin[31]!="Air Export"){?>
<option value="Conteneur 20 Dry" <?php if($elmnt[7]=="Conteneur 20 Dry") echo "selected" ;?>>Conteneur 20'Dry</option>
<option value="Conteneur 40 Dry" <?php if($elmnt[7]=="Conteneur 40 Dry") echo "selected" ;?>>Conteneur 40' Dry</option>
<option value="Conteneur 45 High Cube Dry" <?php if($elmnt[7]=="Conteneur 45 High Cube Dry") echo "selected" ;?>>Conteneur 45' High Cube Dry </option>
<option value="Conteneur 20 Reefer" <?php if($elmnt[7]=="Conteneur 20 Reefer") echo "selected" ;?>>Conteneur 20' Reefer</option>
<option value="Conteneur 40 Reefer" <?php if($elmnt[7]=="Conteneur 40 Reefer") echo "selected" ;?>>Conteneur 40' Reefer </option>
<option value="Conteneur 20 Open Top" <?php if($elmnt[7]=="Conteneur 20 Open Top") echo "selected" ;?>>Conteneur 20' Open Top </option>
<option value="Conteneur 40 Open Top" <?php if($elmnt[7]=="Conteneur 40 Open Top") echo "selected" ;?>>Conteneur 40' Open Top </option>
<?php } ?></select>

</div>

</td>
<td ><div class="col-md-15">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="dim1<?php echo $j; ?>"  name="dim1<?php echo $j; ?>"  min="0"  value="<?php echo $dim[0]; ?>" required="required"  placeholder="Long" />
											</div>
										</div><div class="col-md-15">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="dim2<?php echo $j; ?>"  name="dim2<?php echo $j; ?>"  min="0" value="<?php echo $dim[1]; ?>" placeholder="Larg" required="required"/>
											</div>
										</div><div class="col-md-15">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control"  id="dim3<?php echo $j; ?>"  name="dim3<?php echo $j; ?>" min="0"  value="<?php echo $dim[2]; ?>" placeholder="Hot" required="required"/>
											</div>
										</div></td>
										<td>
										<div class="col-md-15">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="QT<?php echo $j; ?>"  name="QT<?php echo $j; ?>" min="0"  value="<?php echo $elmnt[3]; ?>" required="required"/>
											</div>
										</div></td>
										<td>
										<div class="col-md-18">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="PT<?php echo $j; ?>"  name="PT<?php echo $j; ?>"  min="0"  value="<?php echo $elmnt[1]; ?>" required="required"/>
											</div>
										</div></td><td>
										<div class="col-md-18">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="TT<?php echo $j; ?>"  name="TT<?php echo $j; ?>"  value="<?php echo $elmnt[3]*$elmnt[1]; ?>" min="0" required="required"/>
											</div>
										</div></td>
										<td>
										<div class="col-md-18">
											<div class="input-icon right">
											<i class="fa"></i>
												<input type="text" class="form-control" name="Num<?php echo $j; ?>" id="Num<?php echo $j; ?>" value="<?php echo $elmnt[5]; ?>"   />
											</div>
										</div></td><td>
										<div class="col-md-18">
										<div class="input-icon right">
											<i class="fa"></i>
												<input type="number" class="form-control" name="CP<?php echo $j; ?>"  id="CP<?php echo $j; ?>"  min="0" onclick="calculpch('<?php echo $j; ?>');"  value="<?php echo $elmnt[6]; ?>" />
											</div>
										</div></td>
										</tr>


<?php 

} 
 ?>

</table>
<p style="">
<a href="#" id="addNew"><img src="images/add.png" title="<?php echo $N51; ?>"></a>
</p>
<input type="hidden" name="NP"  id="NP" value="<?php echo $i ?>"  >
									
									<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N81; ?></button>
											
										</div>
									</div>
								</div>	
</div>								
						</div>			
						</div>			
						</div>			
			


				<!--   3 -->
									
									
										<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $N3; ?> 
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
									<?php echo $error_form; ?>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N17; ?><span class="required">
										* </span>
										</label>
										<div class="col-md-4">
<select class="form-control select2me" name="Origine" required="required"> 
<option value="<?php echo $admin[16];?>" selected ><?php echo $admin[16];?> </option>
<?php 
foreach( $pays as $payss ) 
{
for($i=1;$i<=300;$i++){
  $PY = $payss->getElementsByTagName("e$i"); 
  if($PY->item(0)){
  $Pays = $PY->item(0)->nodeValue; 
  
?>
<option value="<?php echo $Pays; ?>"  ><?php echo $Pays; ?> </option>
<?php
}}}
?>
</select></div></div>
<div class="form-group">
<label class="control-label col-md-3"><?php echo $N37; ?><span class="required">* </span></label><div class="col-md-4">
<select class="form-control select2me"  name="Destination" required="required"> 
<option value="<?php echo $admin[17];?>" selected ><?php echo $admin[17];?> </option>
<?php 
foreach( $pays as $payss ) 
{
for($i=1;$i<=300;$i++){
  $PY = $payss->getElementsByTagName("e$i"); 
  if($PY->item(0)){
  $Pays = $PY->item(0)->nodeValue; 
  
?>
<option value="<?php echo $Pays; ?>"  ><?php echo $Pays; ?> </option>
<?php
}}}
?>
</select>
</div></div>
<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N39; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control"  value="<?php echo $admin[4];?>" name="BL" />
											</div>
										</div>
							</div>
<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N45; ?>:</label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="ETD" value="<?php echo $admin[6];?>" >
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<!-- /input-group -->
											<span class="help-block">
											select a date </span>
										</div>
									</div><div class="form-group">
										<label class="control-label col-md-3"><?php echo $N46; ?>:</label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="ETA" value="<?php echo $admin[7];?>" >
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<!-- /input-group -->
											<span class="help-block">
											select a date </span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N47; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="SL" value="<?php echo $admin[18];?>" />
											</div>
										</div>
							</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N81; ?></button>
											
										</div>
									</div>
								</div>
						
							<!-- END FORM-->
						</div>
									
</div>		</div>						
										
								<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $N4; ?> 
							</div>
							<div class="tools">
								<a href="javascript:collapse;" class="collapse">
								</a>
								
								
							</div>
						</div>
						<div class="portlet-body form">
						
							<!-- BEGIN FORM-->
							
								<div class="form-body">
								
			
			

									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N48; ?> <span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="number" class="form-control"  name="VF" min="0" value="<?php echo $admin[19];?>" />
											</div>
										</div>
							</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N49; ?>
										</label>
										<div class="col-md-4">
<select class="form-control select2me"   name="MN" id="MN"> 
<?php 
while($mon=mysql_fetch_array($Mn)){ 
if($mon[0]==$admin[20]){
?>
<option selected value="<?php echo $mon[0];?>"><?php echo $mon[0];?></option>
<?php }else{?>
<option  value="<?php echo $mon[0];?>"><?php echo $mon[0];?></option>
<?php }}?>
</select></div></div><div class="form-group">
										<label class="control-label col-md-3"><?php echo $N50; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="number" class="form-control" value="<?php echo $admin[21];?>" min="0" id="devise1" name="devise1" />
											</div>
										</div>
							</div>
<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N24; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="number" class="form-control"  name="VFT" min="0" value="<?php echo $admin[22];?>" />
											</div>
										</div>
							</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N49; ?>
										</label>
										<div class="col-md-4">
<select class="form-control select2me"   name="MNT" id="MNT"> 
<?php 
while($mon2=mysql_fetch_array($Mn2)){ 
if($mon2[0]==$admin[23]){
?>
<option selected value="<?php echo $mon2[0];?>"><?php echo $mon2[0];?></option>
<?php }else{?>
<option  value="<?php echo $mon2[0];?>"><?php echo $mon2[0];?></option>
<?php }}?>
</select></div></div><div class="form-group">
										<label class="control-label col-md-3"><?php echo $N50; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="number" class="form-control" value="<?php echo $admin[24];?>" min="0" id="deviseTrans" name="deviseTrans" />
											</div>
										</div>
							</div>
							<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N53; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" value="<?php echo $admin[25];?>"  name="four" />
											</div>
										</div>
							</div><div class="form-group">
										<label class="control-label col-md-3"><?php echo $N54; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" value="<?php echo $admin[26];?>"  name="Ref" />
											</div>
										</div>
							</div><div class="form-group">
										<label class="control-label col-md-3"><?php echo $N55; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" value="<?php echo $admin[27];?>" name="Dcomm" />
											</div>
										</div>
							</div>
<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N81; ?></button>
											
										</div>
									</div></div>
							<!-- END FORM-->
						</div>
									
</div>
						</div>						
										
										<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $N5; ?> 
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>
						</div>
						
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							
								<div class="form-body">
<table width="100%">
<?php if($admin[8]=='oui') {
?>
<tr>
<td ><h6><?php echo $N56; ?></h6></td>
<td ><h6><?php echo $N58; ?></h6></td>
<td ><h6><?php echo $N59; ?></h6></td>
</tr>
<tr>
<td><select name="Exo" class="form-control">
<?php if($admin[8]=='oui'){ ?>
<option value="<?php echo $admin[8];?>"><?php echo $admin[8];?></option>
<option value="non"><?php echo $N62; ?></option>
<?php }else{ ?>
<option value="<?php echo $admin[8];?>"><?php echo $admin[8];?></option>
<option value="oui"><?php echo $N63; ?></option>
</select>
<?php } ?>
</select>
</td>
<td><select name="typ_Exo" class="form-control">
<?php if($admin[43]=='Consomable'){ ?>
<option value="Consomable"><?php echo $N61;?></option>
<option value="Admission Temporaire"><?php echo $N60; ?></option>
<?php }else{ ?>
<option value="Admission Temporaire"><?php echo $N60; ?></option>
<option value="Consomable"><?php echo $N61;?></option>

<?php } ?>
</select>
</td>

<td><select name="En" class="form-control">
<?php if($admin[9]=='oui'){ ?>
<option value="<?php echo $admin[9];?>"><?php echo $admin[9];?></option>
<option value="non"><?php echo $N62; ?></option>
<?php }else{ ?>
<option value="<?php echo $admin[9];?>"><?php echo $admin[9];?></option>
<option value="oui"><?php echo $N63; ?></option>

</select>
<?php } ?>
</td>
<tr>
<td ><h6><?php echo $N64; ?></td>
<?php if($admin[42]=='oui') { ?>
<td ><h6><?php echo $N65; ?></h6></td>
<?php } ?>
<?php if($admin[43]=='Admission Temporaire') { ?>
<td ><h6><?php echo $N98; ?></td>
<td ><h6><?php echo $N66; ?></td>
<?php } ?>

</tr>
<tr>
<td><input type="text" name="Num_dec"  class="form-control" value="<?php echo $admin[28];?>"></td>
<?php if($admin[42]=='oui') { ?>
<td><input type="text" name="apurement"  class="form-control" value="<?php echo $admin[29];?>"></td>
<?php } ?>
<?php 
$a=1;
$date_exp=date('Y-m-d');
if($admin[43]=='Admission Temporaire') {

 $s=mysql_query("select * from expiration_admission where operation='$admin[11]' order by id desc Limit 0,1");
if($four=mysql_fetch_array($s)){
if($date_exp>=$four[3] ){
$a=0;
	?>	
	<td>
	<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
											
	<input type="text" name="RDN" class="form-control"    value="<?php echo $four[2];?>">
	<span class="input-group-btn" style="width:40px;">
<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
</span>
	</div>
	</td>
<td>
<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
	
<input type="Text" name="EDN" class="form-control"  value="<?php echo $four[3];?>" style="width:130">
<span class="input-group-btn" style="width:40px;">
<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
</span>
</div>
</td>

	<?php }else{ ?>
<td>
<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">

<input type="text" name="RDUP"  class="form-control"   value="<?php echo $four[2];?>" style="width:130" >
<span class="input-group-btn" style="width:40px;">
<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
</span>
</div></td>
<td><div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
<input type="text" name="EDUP" class="form-control"  value="<?php echo $four[3];?>">
<span class="input-group-btn" style="width:40px;">
<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
</span>
</div></td>
<input type="hidden" name="idd"   value="<?php echo $four[0];?>">

<?php } }else{ ?>
<td>
<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">

<input type="text" name="RDN"  class="form-control"  value="" style="width:150">
<span class="input-group-btn" style="width:40px;">
<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
</span>
</div>
</td>
<td>
<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">

<input type="text" name="EDN" class="form-control"  value="" style="width:150">
<span class="input-group-btn" style="width:40px;">
<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
</span>
</div>
</td>


<?php
} } ?>
</tr>
<?php
if($a==0){ ?>
<tr>
<td colspan="3" ><h6>(*)&nbsp;:&nbsp;<font color="red"><?php echo $N99; ?></font></h6></td>
</tr>
<?php  } }else{ ?>
<tr>
<td ><h5><?php echo $N67; ?></h5></td>
<td ><h5><?php echo $N69; ?></h5></td>
<td ><h5><?php echo $N65; ?></h5></td>
</tr>
<tr>
<td><select name="Exo" class="form-control" >
<?php if($admin[8]=='oui'){ ?>
<option value="<?php echo $admin[8];?>"><?php echo $admin[8];?></option>
<option value="non"><?php echo $N62; ?></option>
<?php }else{ ?>
<option value="<?php echo $admin[8];?>"><?php echo $admin[8];?></option>
<option value="oui"><?php echo $N63; ?></option>
</select>
<?php } ?>
</select>
</td>
<td><input type="text" class="form-control"  name="Num_dec" value="<?php echo $admin[28];?>"></td>
<?php if($admin[42]=='oui') { ?>
<td><input type="text" class="form-control"  name="apurement" value="<?php echo $admin[29];?>"></td>
<?php }else{ ?>
<td><input type="checkbox" class="form-control"  name="app" value="oui"></td>

<?php } ?>
</tr>

<?php } ?>
</table>
									
							
					</br>		
<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N81; ?></button>
											
										</div>
									</div>
</div>
							<!-- END FORM-->
						</div>
									
</div>
								</div>			
								
										

						<div class="portlet box  purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $N6; ?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>
						</div>
						
						<div class="portlet-body form">
						<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
							<!-- BEGIN FORM-->
							<br><br>
							
							<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N102; ?> <span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-12">
											<input name="siteweb" type="url" class="form-control" value="<?php echo $admin['url']; ?>">
											<span class="help-block">
											e.g: http://www.demo.com or http://demo.com </span>
										</div>
									</div>
									<table width="100%"><tr><td>
<h5><?php echo $N75; ?></h5>
<textarea name="Tracking_neuv" style="width: 100%; height:100px;">
</textarea>
</td></tr>
<tr><td>
<h5><?php echo $N76; ?>:</h5><input type="checkbox" <?php if($admin[47]==1){ echo "checked";}?> name="enlv" id="enlv" OnClick="getChemp(this)" value="1">
<h5>Date & time:</h5>
<div class="form-group">
										
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="datetime" name="enlvdt" id="enlvdt" class="form-control"   value="<?php echo $admin[32]; ?>" />
											</div>
										</div>
							</div>
<h5><?php echo $N80; ?>:</h5><input type="checkbox" name="DS"  id="DS"<?php if($admin[48]==1){ echo "checked";}?>  OnClick="getChemp(this)"  value="1">
<h5>Date & time:</h5><div class="form-group">
										
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="Datetime" name="DSdt"  id="DSdt" class="form-control"  value="<?php echo $admin[33]; ?>" />
											</div>
										</div>
							</div><h5><?php echo $N78; ?>:</h5><input type="checkbox" name="TS"  id="TS"<?php if($admin[49]==1){ echo "checked";}?>  OnClick="getChemp(this)"  value="1">
<h5>Date & time:<div class="form-group">
										
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" name="TSdt" id="TSdt" class="form-control"  value="<?php echo $admin[34]; ?>" />
											</div>
										</div>
							</div><h5><?php echo $N79; ?>:</h5><input type="checkbox" name="AR"  id="AR" <?php if($admin[50]==1){ echo "checked";}?>   OnClick="getChemp(this)"  value="1">
<h5>Date & time:<div class="form-group">
										
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" name="ARdt" id="ARdt" class="form-control"  value="<?php echo $admin[35]; ?>" />
											</div>
										</div>
							</div><h5><?php echo $N77; ?>:</h5><input type="checkbox" name="DE" id="DE" <?php if($admin[51]==1){ echo "checked";}?>  OnClick="getChemp(this)" value="1">
<h5>Date & time:</h5><div class="form-group">
										
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" name="DEdt" id="DEdt" class="form-control"  value=" <?php echo $admin[36]; ?>" />
											</div>
										</div>
							</div><h5><?php echo $N70; ?>  :</h5><input type="checkbox" name="LV" id="LV" <?php if($admin[52]==1){ echo "checked";}?>  OnClick="getChemp(this)" value="1"><br>
<h5>Date & time:</h5><div class="form-group">
										
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" name="LVdt" id="LVdt" class="form-control"  value="<?php echo $admin[37]; ?>" />
											</div>
										</div>
							</div><tr><td>

</table>
											
<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N81; ?></button>
											
										</div>
									</div>
									
									
</div>
									
</div>
								</div>
								
								
								</div>
								
								<div class="tab-pane" id="Fact" >
							<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N68; ?><span class="required">
										* </span>
										</label>
										<div class="col-md-4">
<select class="form-control select2me" name="facturation" required="required"> 
<?php if($admin[10]=='non' || $admin[10]=='pret' ){  ?>
<option value="non" <?php if($admin[10]=="non"){echo "selected"; } ?>><?php echo $N62; ?></option>
<option value="pret" <?php if($admin[10]=="pret"){echo "selected"; } ?>><?php echo $N104; ?></option>
<?php }else{ 
if($admin[10]=='oui' || $admin[10]=='partiel'  ){

?>
<option value="oui" <?php if($admin[10]=="oui"){echo "selected"; } ?>><?php echo $N105; ?></option>

<option value="partiel" <?php if($admin[10]=="partiel"){echo "selected"; } ?>><?php echo $N106; ?></option>
<?php }} ?>


</select></div></div>
							<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N81; ?></button>
											
										</div>
									</div>
									
									
</div>
								</div>
								
								<div class="tab-pane" id="tab_images" >
								
								<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-unlink"></i><?php echo $N7; ?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table ">
								
								<tbody>
								
								<?php 

$file_att=mysql_query("select *  from attach_envoi where operation='$id'");
while($attache=mysql_fetch_array($file_att)){

								?>
								<tr>
									
									<td><font size="1">
										<?php echo $attache[2]; ?>
									</td><td>
										<a href="bktrans_data/<?php echo $attache[1]; ?>" class="btn btn-xs default btn-editable" target="_link" ><i class="fa fa-unlink"></i></a>
									</td>
								
								</tr>
								
					<?php } ?>			
								</tbody>
								</table>
							</form>
		
							<br><form action="MenuUtilisation.php?valeur=attacherexport.php&titre=<?php echo $admin[11];?>&id=<?php echo $admin[11];?>&url=<?php echo $url.".attacher.".$admin[11];?>&type=import" method="POST">
							<button type="submit" class="btn green">attach</button>
							</form>
							
							</div>
						</div>
					</div>
								</div>
								
									
</div>	
</div>	



						
	
<?php } }else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>