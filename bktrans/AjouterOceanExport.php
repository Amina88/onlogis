<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){

?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require 'includes/RecOceanEx.php';	
 if($etat){
?>

<script  src="javascript/jquery.min.js"></script>      
<script type="text/javascript">
$(function() {
var addDiv = $('#addinput');
var i = $('#addinput tr').size()+1;
var j = i-1;
var test=0;

$('#addNew').live('click', function() {


$('<tr>'+'<td><div class="col-md-14"><select class="form-control select2me"  style="width:80px"name="Objet'+i+'"   id="Objet'+i+'"  onchange="loadinf('+i+');"><option value=""><?php echo $N13; ?></option><option value="piece"><?php echo $N15; ?></option><option value="Conteneur 20 Dry">Conteneur 20 Dry</option><option value="Conteneur 40 Dry">Conteneur 40 Dry</option><option value="Conteneur 45 High Cube Dry">Conteneur 45 High Cube Dry </option><option value="Conteneur 20 Reefer">Conteneur 20 Reefer</option><option value="Conteneur 40 Reefer">Conteneur 40 Reefer </option><option value="Conteneur 20 Open Top">Conteneur 20 Open Top </option><option value="Conteneur 40 Open Top">Conteneur 40 Open Top </option></select></div>  </td> <td ><div class="col-md-15"> <div class="input-icon right"> <i class="fa"></i><input type="number" class="form-control" id="dim1'+i+'"  name="dim1'+i+'" required="required"  placeholder="Long" min="0" /></div></div><div class="col-md-15"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="dim2'+i+'"  name="dim2'+i+'"  placeholder="Larg"  min="0" required="required"/></div></div><div class="col-md-15"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control"  id="dim3'+i+'"  name="dim3'+i+'" placeholder="Hot" required="required" min="0" /></div></div></td><td><div class="col-md-15"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="QT'+i+'"  name="QT'+i+'"  min="0" required="required"/></div></div></td><td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="PT'+i+'"  min="0" name="PT'+i+'" required="required"/> 											</div></div></td><td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="TT'+i+'"  name="TT'+i+'" min="0"  required="required"/></div></div></td> <td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i><input type="text" class="form-control" name="Num'+i+'" id="Num'+i+'" /></div></div></td><td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i> <input type="number"  min="0" class="form-control" name="CP'+i+'"  id="CP'+i+'"  onclick="calculpch('+i+');"  value="" /> </div></div></td><td width="20"><a href="#" id="remNew" ><button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i></button></a></td>'+'</tr>').appendTo(addDiv);
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
<?php
include ("Connection.php");
$s=mysql_query("select * from custemer  ");
$d=mysql_query("select * from files F,categorie C  where F.etat_dossier='ouvert' AND appliquer_sur like '%1' AND C.Nom=F.Catagorie");
$Mn=mysql_query("select * from currency where choix_monnai='1'");
$Mn2=mysql_query("select * from currency where choix_monnai='1'");
$app=mysql_query("select Num_declaration_douane  from import where type_exo='Admission temporaire' AND Num_appurement!=''");

$offre="";
if(isset($_GET['confirmeoffre'])){
$id_offre=$_GET['id_offre'];
$app=mysql_query("select * from offre where id_offre='$id_offre'");
$offre=mysql_fetch_array($app);
}

require 'views/ViewOceanEx.php';		
	
  }else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>