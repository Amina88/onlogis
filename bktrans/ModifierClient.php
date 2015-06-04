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
if("$permission[1]"=="Administrateur" || "$permission[5]"=='5'){ 
 $url= $N14.".".$N15.".".$N17; 
 $tt=$N17;
 $titremsg=$N15; 
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
  $V43 = $employee->getElementsByTagName( "e43" );  $N43 = $V43->item(0)->nodeValue;
  $V44 = $employee->getElementsByTagName( "e44" );  $N44 = $V44->item(0)->nodeValue;
  $V45 = $employee->getElementsByTagName( "e45" );  $N45 = $V45->item(0)->nodeValue;
  $V46 = $employee->getElementsByTagName( "e46" );  $N46 = $V46->item(0)->nodeValue;
  $V47 = $employee->getElementsByTagName( "e47" );  $N47 = $V47->item(0)->nodeValue;
  $V48 = $employee->getElementsByTagName( "e48" );  $N48 = $V48->item(0)->nodeValue;
  $V49 = $employee->getElementsByTagName( "e49" );  $N49 = $V49->item(0)->nodeValue;
  $V50 = $employee->getElementsByTagName( "e50" );  $N50 = $V50->item(0)->nodeValue;
  $V51 = $employee->getElementsByTagName( "e51" );  $N51 = $V51->item(0)->nodeValue;
  $V52 = $employee->getElementsByTagName( "e52" );  $N52 = $V52->item(0)->nodeValue;
  $V53 = $employee->getElementsByTagName( "e53" );  $N53 = $V53->item(0)->nodeValue;
  $V54 = $employee->getElementsByTagName( "e54" );  $N54 = $V54->item(0)->nodeValue;
  $V55 = $employee->getElementsByTagName( "e55" );  $N55 = $V55->item(0)->nodeValue;
  $V56 = $employee->getElementsByTagName( "e56" );  $N56 = $V56->item(0)->nodeValue;
  $V57 = $employee->getElementsByTagName( "e57" );  $N57 = $V57->item(0)->nodeValue;
  $V58 = $employee->getElementsByTagName( "e58" );  $N58 = $V58->item(0)->nodeValue;
  $V59 = $employee->getElementsByTagName( "e59" );  $N59 = $V59->item(0)->nodeValue;
  $V60 = $employee->getElementsByTagName( "e60" );  $N60 = $V60->item(0)->nodeValue;
  $V61 = $employee->getElementsByTagName( "e61" );  $N61 = $V61->item(0)->nodeValue;
 


include ("Connection.php");
if(isset($_POST['sauvgarder'])){
$client=$_POST['client'];
$titre="";
$nom="";
$prenom="";
$email=$_POST['email'];
$tel1=$_POST['tel1'];
$tel2=$_POST['tel2'];
//
$typeEnt=$_POST['typeEnt'];
$NumEnt=$_POST['numero'];
$skype=$_POST['skype'];
$site=$_POST['siteweb'];
$fax=$_POST['fax'];
$archive=$_POST['archive'];
$adr=$_POST['adr'];
$city=$_POST['city'];
$pays=$_POST['pays'];
$cat=$_POST['cat'];
if(isset($_POST['autrecat'])){
$cat=$_POST['autrecat'];
}
//
$Ex=$_POST['Ex'];
$loi=$_POST['loi'];
$nomS=$_SESSION['NSOC'];
$etat_up=mysql_query("update custemer set Nom_SOC='$client',loi='$loi', prenom='$prenom',titre='$titre',Nom='$nom',AdressMail='$email',Telephone1='$tel1',Telephone2='$tel2',type_entreprise='$typeEnt',Numero_entreprise='$NumEnt',Skype='$skype',Siteweb='$site',city='$city', pays='$pays',cat='$cat',Fax='$fax',archives='$archive',exonoration='$Ex',Adress='$adr' where Nom_SOC='$nomS'");
//echo "update custemer set Nom_SOC='$client',loi='$loi', prenom='$prenom',titre='$titre',Nom='$nom',AdressMail='$email',Telephone1='$tel1',Telephone1='$tel2',type_entreprise='$typeEnt',TVA='$tva',Numero_entreprise='$NumEnt',Skype='$skype',Siteweb='$site',Fax='$fax',archives='$archive',exonoration='$Ex' where Nom_SOC='$nomS'";


$s=mysql_query("select * from default_billing");
$i=0;
while($df=mysql_fetch_array($s)){
$i++;
if(isset($_POST['etat'.$df[0]])){
$nb=$_POST['etat'.$df[0]];
$val=$_POST['val'.$df[0]];

$req=mysql_query("SELECT * FROM  `costs_value` where Numro=$nb AND client='$client'");
$ad=mysql_fetch_array($req);
if($ad==NULL){
$req=mysql_query("insert into `costs_value` values($nb,'$client','$val',1)");
}else{
$req=mysql_query("update `costs_value` set valeur=$val where Numro=$nb AND client='$client'");
}
}
}

$pfx=$client;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N108; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Allclient.php&titre=$tt&url=$url&msg=$succes&etat_up=$etat_up";
?>
 <script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>
  <?php
}else{
		

	$NomSoc=$_GET['NomSOC'];
	$_SESSION['NSOC']=$NomSoc;
	$fiche=mysql_query("select * from custemer where Nom_Soc='$NomSoc'");
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
										<li>
											<a href="#tab_reviews" data-toggle="tab">
											<?php echo $N35; ?> 
											</a>
										</li>
										<li  <?php if(isset($_GET['etat'])){ echo "class=active";} ?>>
											<a href="#tab_Contact" data-toggle="tab">
											<?php // echo $N35; ?> Contact
											</a>
										</li>
										
									</ul>
									</div>
									
									<form  method="POST" action="MenuUtilisation.php?valeur=ModifierClient.php" id="form_sample_2" class="form-horizontal" method="post">
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
							<!-- BEGIN FORM-->
							
						
								<div class="form-body">
								<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
								<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N39; ?><span class="required">
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
										<label class="control-label col-md-3"><?php echo $N9; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="email" name="email" value="<?php echo $res[5];?>" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N10; ?>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="tel1" value="<?php echo $res[6];?>" />
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
												<input  class="form-control" type="text" name="tel2" value="<?php echo $res[7];?>" />
											</div>
											<span class="help-block">
											(00222 45255386) </span>
										</div>
									</div>
									
									<div class="form-group last">
										<label class="control-label col-md-3"><?php echo $N38; ?>
										</label>
										<div class="col-md-4">
				                            <textarea class="form-control" name="adr"   rows="1" data-error-container="#editor2_error"  ><?php echo $res[18];?></textarea>
											<div id="editor2_error">
											</div>
										</div>
									   </div>
									<div class="form-group last">
										<label class="control-label col-md-3"><?php echo $N36; ?>
										</label>
										<div class="col-md-4">
				                            <textarea class="form-control" name="city"    rows="1" data-error-container="#editor2_error"  ><?php echo $res[19];?></textarea>
											<div id="editor2_error">
											</div>
										</div>
									   </div>
									   
									   							<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N37; ?>
										</label>
										<div class="col-md-4">
<select class="form-control select2me" name="pays" > 
<option value="<?php echo $res[20];?>" selected="selected"><?php echo $res[20];?></option>
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
									   
							<script>
function myFunction(a) {
if(a.value==""){
    document.getElementById("autrecat").innerHTML = ' <div class="form-group"><label class="control-label col-md-3">&nbsp;&nbsp;&nbsp;</label><div class="col-md-4"><div class="input-icon right"><i class="fa"></i><input  class="form-control" type="text" name="autrecat" value="" /></div></div></div>';
	}else{
	document.getElementById("autrecat").innerHTML = '';
	}
}
</script>
	   
								<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N48; ?>
										</label>
										<div class="col-md-4">
                                  <select class="form-control select2me"  onChange="myFunction(this)" name="cat" id="cat" > 
								 <?php $req=mysql_query("select distinct cat from custemer ");
			                        while($cat=mysql_fetch_array($req)){?>
		                                <?php if($res[21]==$cat[0]){?>
										<option value="<?php echo $cat[0];?>" selected="selected"> <?php echo $cat[0];?></option>	
										<?php }?>
										<?php if(!isset($_GET['mdc'])&&($res[21]!=$cat[0])){?>
					                 <option value="<?php echo $cat[0];?>"> <?php echo $cat[0];?></option>	
									 <?php  }
									 }
									 ?>	
                                   <?php if(!isset($_GET['mdc'])){?>
								   <option value=""><?php echo $N49; ?></option>
									   <?php }?>
                                 </select>
                                   </div></div>	
								  
								   <div id="autrecat">
								  
								   
                                   </div>	
                                      								   
									
									   
									   
											
										
                                         
							    </div>
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
										  <br>
										  <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N13; ?> 
										</label>
										<div class="col-md-4">
											<select class="form-control " name="typeEnt" >
											<option value="<?php echo $res[8];?>" selected><?php echo $res[8];?></option>
									        <option value="<?php echo $N15; ?>"><?php echo $N15; ?></option>
                                            <option value="<?php echo $N16; ?>"><?php echo $N16; ?></option>
                                            <option value="<?php echo $N17; ?>"><?php echo $N17; ?></option>
																							
											</select>
										</div>
									</div>
										<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N19; ?>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  readonly class="form-control" type="text" name="comptec" value="<?php echo $res[9];?>" />
											</div>
											
										</div>
									</div>  
									
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N20; ?>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="numero" value="<?php echo $res[10];?>" />
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
										<label class="control-label col-md-3"><?php echo $N22; ?> <
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
												<input  class="form-control" type="text" name="fax" value="<?php echo $res[13];?>" />
											</div>
											
										</div>
									</div> 
									  <select name="archive" hidden> 
                                      <?php if($res[14]=='Non'){ ?>
                                        <option value="<?php echo $res[14];?>"><?php echo $res[14];?></option>
                                        <option value="oui"><?php echo $N25; ?></option>
                                      <?php }else{?>
                                      <option value="<?php echo $res[14];?>"><?php echo $res[14];?></option>
                                       <option value="oui"><?php echo $N26; ?></option>
                                       <?php }?>
                                      </select>
										  <br>
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
										       <br>
											   <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N29; ?>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="loi" value="<?php echo $res[1];?>" />
											</div>
											
										</div>
									</div>
									
									 <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N30; ?> 
										</label>
										<div class="col-md-4">
											<select class="form-control " name="Ex" >
												<?php if($res[17]=='non'){ ?>
                                        <option value="<?php echo $res[17];?>" selected><?php echo $N26; ?></option>
                                        <option value="oui"><?php echo $N25; ?></option>
                                      <?php }else{?>
                                      <option value="<?php echo $res[17];?>" selected><?php echo $N25;?></option>
                                       <option value="non"><?php echo $N26; ?></option>
                                       <?php }?>											
											</select>
										</div>
									</div>
										  
										  <br><br>
										      </div> 
								          </div> 
									
										     </div> 
										  <div class="tab-pane" id="tab_reviews">
								
										
										  
										  
										  <div class="portlet box yellow">
											<div class="portlet-title">
							                    <div class="caption">
								               <i class="fa fa-gift"></i><?php echo $N35; ?>
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
									
				<div class="portlet box">

						<div class="portlet-title">
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body" >
						
				<table class="table table-striped table-bordered table-hover" id="sample_1" >
					<thead> 
				    <tr> 
    				<th><font size="1"><?php echo $N40; ?></h5></th> 
    				<th><font size="1"><?php echo $N41; ?></h5></th>  
					<th><font size="1"><?php echo $N42; ?></h5></th> 
					<th><font size="1"><?php echo $N43; ?></h5></th> 
					<th><font size="1"><?php echo $N44; ?></h5></th>
				   </tr> 
			      </thead> 
				  <tbody> 
							
							<?php $s=mysql_query("select * from default_billing ");?>
								<?php $i=0; while($admi=mysql_fetch_array($s)){
			$val=mysql_query("SELECT * FROM  `costs_value` where Numro=$admi[0] AND client='$res[0]'");
			$ad=mysql_fetch_array($val);
			$i++;
?>
			
				<tr> 
    				<td><input type="checkbox" value="<?php echo $admi[0];?>" name="<?php  echo "etat".$admi[0];?>" <?php if($ad[3]==1){echo "checked";} ?>></a></td> 
    				<td><font size="1"><?php echo $admi[1] ;?></td> 
    				<td><font size="1"><?php echo $admi[4] ;?></td> 
					<td><font size="1"><?php echo $admi[3] ;?></td> 
    				<td>
					<div class="form-group">
										
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" value="<?php if(isset($ad[2])){echo $ad[2];}else{echo $admi[2];} ?>" name="<?php echo "val".$admi[0];?>" style="width:150px;" required  >
												
											</div>
											
										</div>
									</div>
					
					
					</td> 
			   </tr> 
				
			
			
<?php }
?>

							
							</tbody> 
							</table>
							</div>
						</div>
							
					
							
								<?php if(!isset($_GET['mdc'])){?>
									<div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="sauvgarder" ><?php echo $N34; ?></button>
											
										</div>
									 </div>									
                                    </div>
									<?php }?>
										  
										  
										      </div> 
								          </div>
										
										  
										   
								          </div> 
										  <div class="tab-pane <?php if(isset($_GET['etat'])){ echo "active";} ?>" id="tab_Contact">
										  <div class="portlet box yellow">

						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i><?php  echo $N57.'    '.$NomSoc;  ?>
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body" >
		<table class="table table-striped table-bordered table-hover" id="sample_2" >
			<thead>
				<tr> 
    				<th><font size="1"><?php echo $N52; ?></th> 
    				<th><font size="1"><?php echo $N53; ?></th> 
					<th><font size="1"><?php echo $N54; ?></th> 
    				<th><font size="1"><?php echo $N55; ?></th> 
    				<th><font size="1"><?php echo $N56;?></th> 
				</tr> 
			</thead> 
			<tbody>
			<?php 
			$s=mysql_query("select * from contactclient where client='$NomSoc' ");
			while($admin=mysql_fetch_array($s)){
?>
		
				<tr> 
    				<td><font size="1"><?php echo $admin[1] ;?></td> 
					<td><font size="1"><?php echo $admin[2];?></td> 
					<td><font size="1"><?php echo $admin[3];?></td> 
					<td><font size="1"><?php echo $admin[4];?></td> 
    				<td><a href="MenuUtilisation.php?valeur=updateContact.php&id=<?php echo $admin[0];?>&titre=<?php echo $N51.' : '.$admin[1]; ?>&tt=<?php echo $_GET['titre'];?>&url=<?php echo $url.'.'.$NomSoc.'.'.$N60; ?>&Nom=<?php echo $admin[1] ;?>&client=<?php echo $NomSoc ; ?>&type=cl" title="<?php echo $N51; ?>"><i class="fa fa-pencil-square-o"></i></a>
					<a href="MenuUtilisation.php?valeur=DeleteContact.php&id=<?php echo $admin[0];?>&Nom=<?php echo $admin[1] ;?>&client=<?php echo $NomSoc ; ?>&type=delete&titre=<?php echo $_GET['titre'];?>&url=<?php echo $url ?>&type=cl" onclick="return confirmLink(this) ;"  title="<?php echo $N50; ?>"><i class="fa fa-trash-o"></i></a>
				</tr> 
	
			
<?php }
?>
			
			</tbody> 
			 </table>
			 
            </div>
			
			     </div><?php if(!isset($_GET['mdc'])){?>
										
									
					  <a href="MenuUtilisation.php?valeur=AjouterContact.php&titre=&url=&client=<?php echo $NomSoc;?>&type=cl" >
				            
											<img src="images/add.png" title="Ajouter un contact"> <?php echo $N61;?>
											
										
					  </a>
					  						
                                   
										
									<?php }?>
								</div>
										   
										  <!-- -->
										
										  <!-- -->
										  
                </div>
				
			</div>
			



<?php
}
}

}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>