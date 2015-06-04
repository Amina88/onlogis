<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>
<?php 
if("$permission[1]"=="Administrateur" || "$permission[1]"=='1'){ 


 $url=$N4.".".$N5.".".$N7; 
 $url2=$N19.".".$N28.".".$N151; 
 $titre=$N151;
foreach( $employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V4 = $employee->getElementsByTagName( "e4" ); $N4 = $V4->item(0)->nodeValue;
  $V5 = $employee->getElementsByTagName( "e5" ); $N5 = $V5->item(0)->nodeValue;
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V13 = $employee->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue;$V14 = $employee->getElementsByTagName( "e14" ); 
  $N14 = $V14->item(0)->nodeValue;$V17 = $employee->getElementsByTagName( "e17" ); 
  $N17 = $V17->item(0)->nodeValue;
  $V33 = $employee->getElementsByTagName( "e33" );  $N33 = $V33->item(0)->nodeValue;
  $V34 = $employee->getElementsByTagName( "e34" );  $N34 = $V34->item(0)->nodeValue;
  $V35 = $employee->getElementsByTagName( "e35" );  $N35 = $V35->item(0)->nodeValue;
  $V36 = $employee->getElementsByTagName( "e36" );  $N36 = $V36->item(0)->nodeValue;
  $V37 = $employee->getElementsByTagName( "e37" );  $N37 = $V37->item(0)->nodeValue;
  $V38 = $employee->getElementsByTagName( "e38" );  $N38 = $V38->item(0)->nodeValue;
  $V39 = $employee->getElementsByTagName( "e39" );  $N39 = $V39->item(0)->nodeValue;
  $V40 = $employee->getElementsByTagName( "e40" );  $N40 = $V40->item(0)->nodeValue;
  $V41 = $employee->getElementsByTagName( "e41" );  $N41 = $V41->item(0)->nodeValue;
  $V42 = $employee->getElementsByTagName( "e42" );  $N42 = $V42->item(0)->nodeValue;
  
  
include ("Connection.php");
if(isset($_POST['modifier'])){
$ref = $_POST['reference'];
$NP = $_POST['fieldsCount'];
$cat = $_POST['categorie'];
$client = $_POST['client'];
$option=$_POST['OPA'];
$Partenaire=$_POST['partenaire'];
$etat = $_POST['etat'];
$dateL = $_POST['Date_Lancement'];
$fin = $_POST['Date_fin'];
$finEstimer = $_POST['Date_Estimer_fin'];
$c = mysql_query("update files set Catagorie='$cat', client='$client',etat_dossier='$etat', date_lancement='$dateL', date_fin='$fin', date_estimer_fin='$finEstimer',Option_affichage='$option',partenaire='$Partenaire' where Reference='$ref'");
$nbelemnt=mysql_query("select * from  estimated_costs where Reference='$ref'");
$nbel=0;
while($elmnt=mysql_fetch_array($nbelemnt)){
$nbel++;
}

for($i=1;$i<$nbel+1;$i++)
{
$des= $_POST['Description'.$i];
$des = str_replace("'", "''",$des);
$val=$_POST['qt'.$i];
$monai= $_POST['monnaie'.$i];
$DV= $_POST['devise'.$i];
$id= $_POST['id'.$i];
$dt=date('Y-m-d');
$c=mysql_query("update `estimated_costs` set `Libelle`='$des' ,`cout_estime` ='$val',`monnaie`='$monai' ,`Devise`='$DV' where  `Reference`='$ref' And  id='$id'")or die(mysql_error());
}
$nbel=$nbel+1;

$Count=$nbel;
for($i=$nbel;$i<=$NP;$i++)
{

if(isset($_POST['Description'.$i])){
$des= $_POST['Description'.$i];
$des = str_replace("'", "''",$des);
$val=$_POST['qt'.$i];
$monai= $_POST['monnaie'.$i];
$monai= $_POST['monnaie'.$i];
$DV= $_POST['devise'.$i];
$dt=date('Y-m-d');
$c=mysql_query("INSERT INTO  `estimated_costs` (`Libelle` ,`cout_estime` ,`monnaie` ,`Date`,`Reference`,`Devise`,`id`) values ('$des',$val,'$monai','$dt','$ref','$DV',$Count)")or die(mysql_error());
$Count++;
}
}
$msg="";
$succes="error";
$txt=str_replace("'", "''", "$N151");
if($c){
if(isset($_POST['Depense'])){
$succes=$N151.' : '.$ref.'  '.$N108;
$succes2=$txt.' : '.$ref.'  '.$N108;
}else{
$succes2=$N5.' : '.$ref.'  '.$N108;
}
$c=1;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes2',  '$date_time', NULL)");

}
?>
<script type="text/javascript"> 
<?php if(isset($_POST['Depense'])){ ?>
document.location.href="MenuUtilisation.php?valeur=AllDossierEntreprise.php&titre=<?php echo $titre; ?> &etat_up=<?php echo $c; ?>&url=<?php echo $url2; ?>&msg=<?php echo $succes; ?>";
	<?php }else{ ?>
	document.location.href="MenuUtilisation.php?valeur=AllDossier.php&titre=<?php echo $N34; ?> &etat_up=<?php echo $c; ?>&url=<?php echo $url; ?>&msg=<?php echo $succes2; ?>";
	<?php }?>
  </script>
  <?php 

}
else{
$Mn=mysql_query("select * from currency where choix_monnai='1'");
?>
<script  src="javascript/jquery.min.js"></script>      
<script type="text/javascript">
$(function() {
var addDiv = $('#addinput');
var i = $('#addinput p').size()+2;

var j=document.getElementById("fieldsCount").value;
var i =(1*j)+1;

$('#addNew').live('click', function() {
$('<tr ><td><div class="form-group last"> <div class="col-md-9"><textarea class="form-control" name="Description'+i+'"  id="Description'+i+'" required="required" rows="1" data-error-container="#editor2_error"  ></textarea><div id="editor2_error"></div></div></div></td><td><div class="form-group"><div class="col-md-9"><div class="input-icon right"> <i class="fa"></i><input type="number" class="form-control" style="width:120px;"  name="qt'+i+'" id="qt'+i+'" required="required" /> </div></div> </div></td> <td><div class="form-group"><div class="col-md-11"><select class="form-control select2me" name="monnaie'+i+'" id="monnaie'+i+'" required="required" ><option></option><?php while($mon=mysql_fetch_array($Mn)){$def = mysql_query("SELECT Abreviation_Monnai FROM currency where Monnaie_utliser='1'");$def_monnaie = mysql_fetch_array($def);  if($def_monnaie[0]==$mon[0]){   ?> <option selected value="<?php echo $mon[0];?>"><?php echo $mon[0];?></option>  <?php }else{?>   <option  value="<?php echo $mon[0];?>"><?php echo $mon[0];?></option><?php }}?></select></div></div></td><td><div class="form-group"><div class="col-md-9"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" style="width:120px;" name="devise'+i+'" id="devise'+i+'" required="required" /></div></div></div></td><td><a href="#" id="remNew" title="suprimer"><button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i></button></a></td></tr>').appendTo(addDiv);                                     
document.getElementById("fieldsCount").value=i;
i++;


return false;
});

$('#remNew').live('click', function() {

$(this).parents('tr').remove();




return false;
});
});


</script>

<?php
$Reference = $_GET['Reference'];
$requete = mysql_query("select * from files where Reference='$Reference'");
$result = mysql_fetch_array($requete);
$s=mysql_query("select * from custemer");
$cat=mysql_query("select * from categorie ");
$ET=mysql_query("SELECT * FROM  `estimated_costs` where Reference='$Reference' ");
$monnaie=mysql_query("select Abreviation_Monnai from currency where Monnaie_utliser='1'");
$default_monnaie=mysql_fetch_array($monnaie);
$C=mysql_query("select Email ,Nom_prenom from users");
?>
<div class="portlet box yellow">
                       <div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo strtoupper($_GET['titre']);?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
					<div class="portlet-body form">
					
        <form method="POST" action ="MenuUtilisation.php?valeur=EditDossier.php" id="form_sample_2" class="form-horizontal" >
			
              <div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N1; ?> <span class="required">:
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text"  class="form-control" name="reference" value="<?php echo $result[0]; ?>" readonly>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N2; ?>  <span class="required">
										: </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="categorie"  required>
                                               <?php while($ad=mysql_fetch_array($cat)){ 
                                                  if($ad[1]==$result[1]){
                                                     ?>
                                               <option value="<?php echo $ad[1];?>" selected><?php echo $ad[1];?></option>
                                                <?php }else{ ?>
                                                <option value="<?php echo $ad[1];?>" ><?php echo $ad[1];?></option>
                                                <?php } } ?>
										 </select>
										</div>
										
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N33; ?>  <span class="required">
										: </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="client"  required>
                                               <?php while($admin=mysql_fetch_array($s)){
                                                    if($admin[0]==$result[3]){
                                                     ?>
                                                      <option value="<?php echo $admin[0];?>" selected><?php echo $admin[0];?></option>
                                                    <?php }else{?>
                                                    <option value="<?php echo $admin[0];?>"><?php echo $admin[0];?></option>
                                                     <?php }} ?>
										 </select>
										</div>
										
									</div>
									<input type="hidden" value="<?php echo $result[4];?>" name="nomdossier">
									
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N35; ?> <span class="required">
										: </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="etat"  required>
                                            <?php if($result[5]=='fermer'){ ?>
                                          <option value="<?php echo $result[5];?>"><?php echo $result[5];?></option>
                                             <option value="ouvert"><?php echo $N36; ?></option>
                                                <?php }else{ ?>
                                              <option value="<?php echo $result[5];?>"><?php echo $result[5];?></option>
                                              <option value="fermer"><?php echo $N37; ?></option>
                                                 
                                                 <?php } ?>
										 </select>
										</div>
										
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N38; ?>:</label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="Date_Lancement" value="<?php echo $result[6];?>" required>
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
										<label class="control-label col-md-3"><?php echo $N39; ?>:</label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="Date_fin"value="<?php echo $result[7];?>" required>
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
										<label class="control-label col-md-3"><?php echo $N40; ?>:</label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="Date_Estimer_fin" value="<?php echo $result[8];?>" required>
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
										<label class="control-label col-md-3"><?php echo $N4; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control" type="TEXT"  name="partenaire" value="<?php echo $result[2]; ?>" required="required"/>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N5; ?> 
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="OPA" readonly >
											<option <?php if($result[4]=="1") echo "selected";  ?> value='1'><?php echo $N6; ?> </option>
											<option  <?php if($result[4]=="0") echo "selected";  ?>  value='0'><?php echo $N7; ?> </option>
                                         <?php while($admin=mysql_fetch_array($C)){ ?>
                                           <option  <?php if($result[4]=="$admin[0]") echo "selected";  ?> value="<?php echo $admin[0];?>"><?php echo $admin[1];?></option>
                                          <?php } ?>
										</select>
										</div>
											</div>
									<table style="width:100%" id="addinput">
									         <tr >
                                                   <td><font color="#111" size="2" >&nbsp;&nbsp; <?php echo $N12; ?> </font><font color="red">  *</font></td>
                                                   <td><font color="#111"size="2" >&nbsp;&nbsp; <?php echo $N13; ?></font><font color="red">  *</font></td>
                                                  <td><font color="#111"size="2" >&nbsp;&nbsp;<?php echo $N14; ?></font><font color="red">  *</font></td>
                                                   <td><font color="#111"size="2" >&nbsp;&nbsp;<?php echo $N17; ?></font><font color="red" size=1> <?php echo $default_monnaie[0] ;?>*</font></td>
									                <td></td>
                                             </tr>
									           <?php 
                                                 $count=0;
                                                 while($ECST=mysql_fetch_array($ET)) {
                                               $count++;
                                                 ?>
												 <tr>
												<input type="hidden" value="<?php echo $ECST[6]; ?>" name="id<?php  echo $count;?>">
												  <td>
									           <div class="form-group last">
										
										      <div class="col-md-9">
				                               <textarea class="form-control" name="Description<?php echo $count?>"  id="Description<?php echo $count?>" required="required" rows="1" data-error-container="#editor2_error"  ><?php echo $ECST[0]; ?></textarea>
											   <div id="editor2_error">
											   </div>
										        </div>
									           </div>
											   </td>
									             <td>
									 <div class="form-group">
										
										<div class="col-md-9">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="number" class="form-control" style="width:120px;"   name="qt<?php echo $count?>" id="qt<?php echo $count?>"  value="<?php echo $ECST[1]; ?>" min="0" required />
											</div>
											</div>
									 </div>
										
									 </td>
									 <td>
									  <div class="form-group">
										
										<div class="col-md-11">
											<select class="form-control select2me" name="monnaie<?php echo $count?>" id="monnaie<?php echo $count?>"  required>
										
											<?php 
                                             $Mn=mysql_query("select * from currency where choix_monnai='1'");
                                              while($mon=mysql_fetch_array($Mn)){ 
                                             $def = mysql_query("SELECT Abreviation_Monnai FROM currency where Monnaie_utliser='1'");
                                             $def_monnaie = mysql_fetch_array($def);
                                              if($ECST[2]==$mon[0]){
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
										
										<div class="col-md-9">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="number" value="<?php echo $ECST[5]; ?>" class="form-control" style="width:120px;" min="0" name="devise<?php echo $count?>" id="devise<?php echo $count?>" required />
											</div>
											</div>
									  </div>
									  </td>	
												
												
												</tr>
												<?php 
                                                 }
                                                 ?>
												
									</table>
									<div >


                                     </div>
 
                                      <p style="width:750px">
                                       <a href="#" id="addNew"><?php echo $N42; ?><img src="images/add.png" title="<?php echo $N15; ?>"></a>
                                      </p>
									<input type="hidden" id="fieldsCount" name="fieldsCount" value="<?php  echo $count;?>" >
									<?php if(isset($_GET["Depense"])){ ?>
									<input type="hidden"  name="Depense" value="Depense" >
									
									<?php } ?>

									<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="modifier" ><?php echo $N41; ?></button>
										</div>
									</div>
								     </div>
								
							</div>
							</form>
					</div>
		</div>
									

<?php
 }}}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>