<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>
<?php
if("$permission[1]"=="Administrateur" || "$permission[16]"=='16') {
$url=$N32.".".$N34;
$four=$N32;
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
  $V38 = $employee->getElementsByTagName( "e38" );  $N38 = $V38->item(0)->nodeValue;
  $V39 = $employee->getElementsByTagName( "e39" );  $N39 = $V39->item(0)->nodeValue;
  $V40 = $employee->getElementsByTagName( "e40" );  $N40 = $V40->item(0)->nodeValue;
  $V41 = $employee->getElementsByTagName( "e41" );  $N41 = $V41->item(0)->nodeValue;
  $V42 = $employee->getElementsByTagName( "e42" );  $N42 = $V42->item(0)->nodeValue;

 include ("Connection.php");
if(isset($_POST['sauvgarder'])){
$client=$_POST['client'];
$titre=$_POST['titre'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$tel1=$_POST['tel1'];
$tel2=$_POST['tel2'];
$adr=$_POST['adr'];
$city=$_POST['city'];
$pays=$_POST['pays'];
$cat=$_POST['cat'];
if(isset($_POST['autrecat'])){
$cat=$_POST['autrecat'];
}

//
$typeEnt=$_POST['typeEnt'];
$NumEnt=$_POST['numero'];
$comptef=$_POST['comptef'];
$skype=$_POST['skype'];
$site=$_POST['siteweb'];
$fax=$_POST['fax'];
$archive="";

//
$Ex="";
$loi=$_POST['loi'];
$nomS=$_SESSION['NSOC'];
$etat_up=mysql_query("update supplier set Nom_SOC='$client',loi='$loi', prenom='$prenom',titre='$titre',Nom='$nom',AdressMail='$email',Telephone1='$tel1',Telephone2='$tel2',type_entreprise='$typeEnt',Numero_entreprise='$NumEnt',Skype='$skype',Siteweb='$site',Fax='$fax',adresse='$adr',city='$city',pays='$pays',cat='$cat' where Nom_SOC='$nomS'");
$succes="error";
if($etat_up){    
$succes=$four.' : '.$client.'   '.$N108; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}

$link="MenuUtilisation.php?valeur=Fournisseur.php&titre=$N27&url=$url&etat_up=$etat_up&msg=$succes";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
  <?php
		}else{
		


	$NomSoc=$_GET['NomSOC'];
	$_SESSION['NSOC']=$NomSoc;
	$fiche=mysql_query("select * from supplier where Nom_Soc='$NomSoc'");
	$res=mysql_fetch_array($fiche)
?>

 <div class="portlet-body">
			
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li <?php if(!isset($_GET['etat'])){ echo "class=active";} ?>>
											<a href="#tab_general" data-toggle="tab">
											<?php echo $N1; ?> </a>
										</li>
										<li>
											<a href="#tab_meta" data-toggle="tab">
											<?php echo $N2; ?></a>
										</li>
										<li>
											<a href="#tab_images" data-toggle="tab">
											<?php echo $N3; ?></a>
										</li>
										<li  <?php if(isset($_GET['etat'])){ echo "class=active";} ?>>
											<a href="#tab_Contact" data-toggle="tab">
											<?php  echo $N40; ?>
											</a>
										</li>
									</ul>
							</div>
<form  method="POST" action="MenuUtilisation.php?valeur=ModifierFournisseur.php" id="form_sample_2" class="form-horizontal" method="post">
										<div class="tab-content no-space">
										
										    <div class="tab-pane <?php if(!isset($_GET['etat'])){ echo "active";} ?>" id="tab_general">
										
									<div class="portlet box yellow">
							<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $N1; ?>
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
										<label class="control-label col-md-3"><?php echo $N5; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="client" value="<?php echo $res[0];?>" required="required"/>
											</div>
										</div>
				</div>	
				<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N6; ?>
										 
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="titre" value="<?php echo $res[3];?>" />
											</div>
										</div>
				</div>	
				<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N7; ?>
										 
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="nom" value="<?php echo $res[4];?>" />
											</div>
										</div>
				</div>	
				<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N8; ?>
										 
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="prenom" value="<?php echo $res[2];?>" />
											</div>
										</div>
				</div>
				<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N9; ?>
										 
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="email" name="email" value="<?php echo $res[5];?>" />
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N10; ?>
										 
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="number" name="tel1" value="<?php echo $res[6];?>" />
											</div>
											<span class="help-block">
											(00222 45255386) </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N11; ?>
										 
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="number" name="tel2" value="<?php echo $res[7];?>" />
											</div>
											<span class="help-block">
											(00222 45255386) </span>
										</div>
									</div>
                                <div class="form-group last">
										<label class="control-label col-md-3"><?php echo $N28; ?>
										 
										</label>
										<div class="col-md-4">
				                            <textarea class="form-control" name="adr"    rows="1" data-error-container="#editor2_error"  ><?php echo $res[15];?></textarea>
											<div id="editor2_error">
											</div>
										</div>
									   </div>
									<div class="form-group last">
										<label class="control-label col-md-3"><?php echo $N29; ?>
										 
										</label>
										<div class="col-md-4">
				                            <textarea class="form-control" name="city"    rows="1" data-error-container="#editor2_error"  ><?php echo $res[16];?></textarea>
											<div id="editor2_error">
											</div>
										</div>
									   </div>
									   
									   							<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N30; ?>
										
										</label>
										<div class="col-md-4">
<select class="form-control select2me" name="pays" > 
<option value="<?php echo $res[17];?>" selected="selected"><?php echo $res[17];?></option>
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

</div>
<script>
function myFunction(a) {
if(a.value==""){
    document.getElementById("autrecat").innerHTML = ' <div class="form-group"><label class="control-label col-md-3">&nbsp;&nbsp;&nbsp; </label><div class="col-md-4"><div class="input-icon right"><i class="fa"></i><input  class="form-control" type="text" name="autrecat" value="" required="required"/></div></div></div>';
	}else{
	document.getElementById("autrecat").innerHTML = '';
	}
}
</script>
	   
								<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N31; ?>
										
										</label>
										<div class="col-md-4">
                                  <select class="form-control select2me"  onChange="myFunction(this)" name="cat" id="cat" > 
								 <?php $req=mysql_query("select distinct cat from supplier ");
			                        while($cat=mysql_fetch_array($req)){
									 if($res[18]==$cat[0]){?>
									   <option value="<?php echo $cat[0];?>" selected="selected"> <?php echo $cat[0];?></option>
									 <?php } else{?>
									    <?php if(!isset($_GET['mdf'])){?>
					                 <option value="<?php echo $cat[0];?>"> <?php echo $cat[0];?></option>	
									 <?php }
									 }
									 }
									 ?>	
                                   <?php if(!isset($_GET['mdf'])){?>								 
					                 <option value=""  ><?php echo $N32; ?></option>
									 <?php }?>
                                 </select>
                                   </div></div>	
								   <div id="autrecat">
								  
								   
                                   </div>
								   <br><br>
								<!-- END FORM-->
						</div>
									
</div>	
									
										  
										   
								          </div>

 <div class="tab-pane " id="tab_meta">
										  
										  
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
										  <div class="alert alert-danger display-hide">
										  <button class="close" data-close="alert"></button>
										  <?php echo $error_form; ?>
									     </div>
										 	<br><br>
										 <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N13; ?> 
										
										</label>
										<div class="col-md-4">
											<select class="form-control " name="typeEnt" required>
											<option value="<?php echo $res[8];?>" selected><?php echo $res[8];?></option>
									        <option value="<?php echo $N15; ?>"><?php echo $N15; ?></option>
                                            <option value="<?php echo $N16; ?>"><?php echo $N16; ?></option>
                                            <option value="<?php echo $N17; ?>"><?php echo $N17; ?></option>
                                            <option value="<?php echo $N18; ?>"><?php echo $N18; ?></option>
																							
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N19; ?>
										 
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="comptef" value="<?php echo $res[9];?>" required="required"/>
											</div>
											
										</div>
									</div> 
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N20; ?>
										 
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="number" name="numero" value="<?php echo $res[10];?>" />
											</div>
											
										</div>
									</div> 
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N21; ?>
										 
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="skype" value="<?php echo $res[11];?>" />
											</div>
											
										</div>
									</div> 
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N22; ?> <span class="required" aria-required="true">
										
										</label>
										<div class="col-md-4">
											<input name="siteweb" type="url" class="form-control" value="<?php echo $res[12];?>">
											<span class="help-block">
											e.g: http://www.demo.com or http://demo.com </span>
										</div>
									</div>
									 <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N23; ?>
										 
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="number" name="fax" value="<?php echo $res[13];?>" />
											</div>
											
										</div>
									</div> 
									<input type="hidden" name="type" value="ajouter"> 
									<br><br>
									</div> 
									
								  </div> 
								</div>
									<div class="tab-pane" id="tab_images">
										  
										 
										  <div class="portlet box yellow">
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
											 <div class="alert alert-danger display-hide">
										    <button class="close" data-close="alert"></button>
										    <?php echo $error_form; ?>
									        </div>
										 <br><br>
										<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N25; ?>
										 
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="loi" value="<?php echo $res[1];?>" />
											</div>
											
										</div>
									</div>
											  <br>
										
         <input type="hidden" name="type" value="ajouter"> 
		 <input type="hidden" name="sauvgarder" value="ajouter"> 
		 <?php if(!isset($_GET['mdf'])){?>
		 <div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="sauvgarder" ><?php echo $N26; ?></button>
											
										</div>
									 </div>									
                                    </div>
									<?php }?>
									

				



 </div> 
</div> </div> 
 <div class="tab-pane <?php if(isset($_GET['etat'])){ echo "active";} ?>" id="tab_Contact">
										  <div class="portlet box blue-hoki">

						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i><?php  echo $N40.'  :  '.$NomSoc;  ?>
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body" >
		<table class="table table-striped table-bordered table-hover" id="sample_2" >
			<thead>
				<tr> 
    				<th><font size="1"><?php echo $N33; ?></th> 
    				<th><font size="1"><?php echo $N34; ?></th> 
					<th><font size="1"><?php echo $N35; ?></th> 
    				<th><font size="1"><?php echo $N36; ?></th> 
    				<th><font size="1"><?php echo $N37;?></th> 
				</tr> 
			</thead> 
			<tbody>
			<?php 
			$s=mysql_query("select * from contactfournisseur where fournisseur='$NomSoc' ");
			while($admin=mysql_fetch_array($s)){
?>
		
				<tr> 
    				<td><font size="1"><?php echo $admin[1] ;?></td> 
					<td><font size="1"><?php echo $admin[2];?></td> 
					<td><font size="1"><?php echo $admin[3];?></td> 
					<td><font size="1"><?php echo $admin[4];?></td> 
    				<td><a href="MenuUtilisation.php?valeur=updateContact.php&id=<?php echo $admin[0];?>&titre=<?php echo $_GET['titre'].' : '.$admin[1];?>&tt=<?php echo $_GET['titre'];?>&url=<?php echo $url.'.'.$NomSoc.'.'.$N41; ?>&Nom=<?php echo $admin[1] ;?>&client=<?php echo $NomSoc ; ?>&type=fr" title="<?php echo $N39; ?>"><i class="fa fa-pencil-square-o"></i></a>
					<a href="MenuUtilisation.php?valeur=DeleteContact.php&id=<?php echo $admin[0];?>&Nom=<?php echo $admin[1] ;?>&client=<?php echo $NomSoc ; ?>&type=delete&titre=<?php echo $_GET['titre'];?>&url=<?php echo $url ?>&type=fr" onclick="return confirmLink(this) ;"  title="<?php echo $N38; ?>"><i class="fa fa-trash-o"></i></a>
				</tr> 
	
			
<?php }
?>
			
			</tbody> 
			 </table>
			 
            </div>
			
			     </div><?php if(!isset($_GET['mdc'])){?>
										
									
					  <a href="MenuUtilisation.php?valeur=AjouterContact.php&titre=<?php echo $_GET['titre'].' : '.$admin[1]; ?>&url=<?php echo $url.'.'.$NomSoc.'.'.$N40; ?>&client=<?php echo $NomSoc;?>&type=fr" >
				            
											<img src="images/add.png" title="Ajouter un contact"> <?php echo $N42; ?>
											
										
					  </a>
					  						
                                   
										
									<?php }?>
								</div>
 </div>
				</form>
			</div>
<?php
} }
}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>	